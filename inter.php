<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "inter";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$favFile = __DIR__ . DIRECTORY_SEPARATOR . "favwinqin.php";
$favData = include($favFile);

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

    $first1 = $runners[0];
    $second = $runners[1];
    $third = $runners[2];
    $fourth = $runners[3];
    $fifth = $runners[4];
   
    $racetext .= "\t\t'All Runners   '  =>  '" . implode(", ", $runners).  "',\n";
    $racetext .= "\t\t'favorite' =>  '" . $first1 . "',\n";
    
    $favInfo1 = explode(", ", $favData[$first1]['fav']);
    $favInfo1 = array_slice($favInfo1, 0, 3);
    $favInfo2 = explode(", ", $favData[$second]['fav']);
    $favInfo2 = array_slice($favInfo2, 0, 3);
    $favInfo3 = explode(", ", $favData[$third]['fav']);
    $favInfo3 = array_slice($favInfo3, 0, 3);
    $favInfo4 = explode(", ", $favData[$fourth]['fav']);
    $favInfo4 = array_slice($favInfo3, 0, 3);
    $favInfo5 = explode(", ", $favData[$fifth]['fav']);
    $favInfo5 = array_slice($favInfo3, 0, 3);
    $inter = array_intersect($favInfo1, $favInfo2, $favInfo3, $favInfo4, $favInfo5);
    $showRace = !empty($inter);
    $racetext .= "\t\t'inter' => '" . implode(", ", $inter) . "',//count:" . count($inter) . "\n";
    $racetext .= "\t\t'sure place' => '" . $first1 . "',//count:" . count($inter) . "\n";

    $racetext .= "\t],\n";
    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
