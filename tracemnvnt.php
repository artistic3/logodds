<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "history";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allWinOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$plaOddsFile = $currentDir . DIRECTORY_SEPARATOR . "placeodds.php";
if(file_exists($plaOddsFile)){
    $allPlaOdds = include($plaOddsFile);
}
$winPositionDifferences = [];
foreach($allWinOdds as $raceNumber => $runners){
    $winPositionDifferences[$raceNumber] = [];
    foreach($runners as $runner => $omg){
        $winPositionDifferences[$raceNumber][$runner] = 0;
    }
}
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";
//Get win odds (getodds.php) and place odds(placeodds.php) fromthe previous git commit
$output = array();
$history = array();
chdir($currentDir);
exec("git log",$output);
foreach($output as $line){
    if(strpos($line, 'commit')===0){
        $history[]   = substr($line, strlen('commit'));
    }
}
//limit search to last 50 commits
$history = array_slice($history, 0, 100);
exec("git config --global advice.detachedHead false");
for($count = count($history); $count > 1; $count --){
    $oldVersion = $history[$count - 1];
    $newVersion = $history[$count - 2];
    exec("git checkout $oldVersion; cp $currentDir/1.php tmp1.php",$command_output,$result_code);
    if($result_code!== 0) continue;
    $oldContents = include("tmp1.php");
    exec("rm tmp1.php");
    exec("git checkout master");
    exec("git checkout $newVersion; cp $currentDir/1.php tmp2.php",$command_output,$result_code);
    if($result_code!== 0) continue;
    $newContents = include("tmp2.php");
    exec("rm tmp2.php");
    exec("git checkout master");
    foreach($allWinOdds as $raceNumber => $runners){
        if(!isset($oldContents[$raceNumber]['Win Odds']) 
        || !isset($newContents[$raceNumber]['Win Odds'])) continue;
        $oldOdds = explode(", ", $oldContents[$raceNumber]['Win Odds']);
        $newOdds = explode(", ", $newContents[$raceNumber]['Win Odds']);
        foreach($runners as $runner => $whatever){
            $oldRunnerPosition = array_search($runner, $oldOdds);
            $newRunnerPosition = array_search($runner, $newOdds);
            $winOddsPositionDiff = $newRunnerPosition - $oldRunnerPosition;
            $winPositionDifferences[$raceNumber][$runner] += $winOddsPositionDiff;
        }
    }
}
$outtext = "<?php\n\n";
$outtext .= "return [\n";
$totalRaces= count($allWinOdds);
for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allWinOdds[$raceNumber])) continue;

    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $runnersPositions = $winPositionDifferences[$raceNumber];
    asort($runnersPositions);
    $runners = array_keys($runnersPositions);

    $racetext .= "\t\t'Runners by odds mvnt'  =>  '" . implode(", ", $runners).  "',\n";
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
