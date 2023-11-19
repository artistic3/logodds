<?php

function getDifferentColorSameParity($runner, $runners){
    $reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 19];
    $blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20];
    $evens = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
    $odds = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
    
    if(in_array($runner, $reds)) $selected = array_intersect($runners, $blacks);
    else $selected = array_intersect($runners, $reds);

    if($runner % 2 === 0) return array_intersect($selected, $evens);
    else return array_intersect($selected, $odds);
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = 2;
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allOdds[$raceNumber])) continue;

    $racetext = "";
    $tmpArray = $allOdds[$raceNumber];
    asort($tmpArray);
    $runners = array_keys($tmpArray);
    
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'All Runners   '  =>  '" . implode(", ", $runners).  "',\n";
    $last = end($runners);
    $shit = getDifferentColorSameParity($last, $runners);
    if(count($shit) === 5){
        $racetext .= "\t\t//Favorite WP,\n";
    }

    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
