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
    $favorite = $runners[0];
    
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $first = $runners[0];
    $second = $runners[1];
    $third = $runners[2];
   
    $racetext .= "\t\t'All Runners   '  =>  '" . implode(", ", $runners).  "',\n";
    $racetext .= "\t\t'favorite' =>  '" . $favorite . "',\n";
    
    $favInfo1 = explode(", ", $favData[$first]['fav']);
    $favInfo11 = array_slice($favInfo1, 0, 4);
    $favInfo12 = array_slice($favInfo1, 0, 3);

    $favInfo2 = explode(", ", $favData[$second]['fav']);
    $favInfo21 = array_slice($favInfo2, 0, 4);
    $favInfo22 = array_slice($favInfo2, 0, 3);
 
    $favInfo3 = explode(", ", $favData[$third]['fav']);
    $favInfo31 = array_slice($favInfo3, 0, 4);
    $favInfo32 = array_slice($favInfo3, 0, 3);
 
    
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
