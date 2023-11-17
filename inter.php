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
    $runners = array_slice($runners, 2, count($runners) - 2);
    
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $first1 = $runners[0];
    $second = $runners[1];
    $third = $runners[2];
    $fourth = $runners[3];
   
    $racetext .= "\t\t'All Runners   '  =>  '" . implode(", ", $runners).  "',\n";
    $racetext .= "\t\t'favorite' =>  '" . $first1 . "',\n";
    
    $favInfo1 = explode(", ", $favData[$first1]['fav']);
    $favInfo11 = array_slice($favInfo1, 0, 5);
    $favInfo12 = array_slice($favInfo1, 0, 4);

    $favInfo2 = explode(", ", $favData[$second]['fav']);
    $favInfo21 = array_slice($favInfo2, 0, 5);
    $favInfo22 = array_slice($favInfo2, 0, 4);
 
    $favInfo3 = explode(", ", $favData[$third]['fav']);
    $favInfo31 = array_slice($favInfo3, 0, 5);
    $favInfo32 = array_slice($favInfo3, 0, 4);
 
    $favInfo4 = explode(", ", $favData[$fourth]['fav']);
    $favInfo41 = array_slice($favInfo4, 0, 5);
    $favInfo42 = array_slice($favInfo4, 0, 4);
    $union1 = array_values(array_unique(array_merge($favInfo11, $favInfo21, $favInfo31)));
    $union2 = array_values(array_unique(array_merge($favInfo12, $favInfo22, $favInfo32)));

    $diff = array_diff($union1, $union2);
    $racetext .= "\t\t'union1' => '" . implode(", ", $union1) . "',//count:" . count($union1) . "\n";
    $racetext .= "\t\t'union2' => '" . implode(", ", $union2) . "',//count:" . count($union2) . "\n";

    $racetext .= "\t\t'diff' => '" . implode(", ", $diff) . "',//count diff:" . count($diff) . "\n";

    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
