<?php

function getWeights($odds, $profit = 0, $precision = 10){
    $weights = [];
    $totalWeights = 0;
    foreach($odds as $key => $value){
        $weights[$key] = 1;
        $totalWeights += $weights[$key];
    }
    $criterion = true;
    foreach($odds as $key => $value){
        $criterion = $criterion && ($weights[$key] * $odds[$key] >= $totalWeights + $profit);
    }
    $iterations = 0;
    while($criterion === false){
        $criterion = true;
        foreach($odds as $key => $value){
            if($weights[$key] * $odds[$key] < $totalWeights + $profit){
                $weights[$key] +=1;
                $totalWeights += 1;
            }
            $criterion = $criterion && ($weights[$key] * $odds[$key] >= $totalWeights + $profit);
        }
        $iterations ++;
        if($iterations == $precision) return array_fill(0, count($odds), -1);
    }
    return $weights;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = 1;
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$favFile = __DIR__ . DIRECTORY_SEPARATOR . "favwinqin.php";
$favData = include($favFile);

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$placeOddsFile = $currentDir . DIRECTORY_SEPARATOR . "plaodds.php";
if(file_exists($placeOddsFile)) $placeOdds = include($placeOddsFile);

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

    $first = $runners[0];
    $second = $runners[1];
    $third = $runners[2];

    $showRace = ($first <= 8) && ($second <= 8);
    
    //determine odds weights
    $favKeys1 = explode(", ", $favData[$first]['fav']);
    $favKeys1 = array_slice($favKeys1, 0, 7);
    $favKeys2 = explode(", ", $favData[$second]['fav']);
    $favKeys2 = array_slice($favKeys2, 0, 7);
    $favKeys = array_values(array_unique(array_merge($favKeys1, $favKeys2)));
    $favOdds = [];
    foreach($favKeys as $someKey){
        if(isset($allOdds[$raceNumber][$someKey])){
            $favOdds[$someKey] = $allOdds[$raceNumber][$someKey];
        }
    }
    asort($favOdds);
    $weights = getWeights($favOdds, 10, 10);
   
    $racetext .= "\t\t'All Runners   '  =>  '" . implode(", ", $runners).  "',\n";
    while(in_array(-1, $weights)){
        $favOdds = array_slice($favOdds, 0, count($favOdds) -1, true);
        $weights = getWeights($favOdds, 10, 10);
    }
    
    $totalBets = 0;
    $racetext .= "\t\t'WIN BETS' => [\n";
    foreach($weights as $someKey => $someValue){
        $bet = 10 * $someValue;
        $totalBets += $bet;
    }
    foreach($weights as $someKey => $someValue){
        $bet = 10 * $someValue;
        $rate = round($bet / $totalBets, 4);        
        $racetext .= "\t\t\t". $someKey ." =>  " . $bet . ",//rate: $rate\n";
    }
    $selected = array_keys($weights);
    $countSelected = count($selected);
    $toCompare = array_slice($runners, 0, $countSelected);
    $diff1 = array_diff($toCompare, $selected);
    $diff2 = array_diff($selected, $toCompare);
    $racetext .= "\t\t'diff1' => '" . implode(", ", $diff1) . "',\n";
    $racetext .= "\t\t'diff2' => '" . implode(", ", $diff2) . "',\n";

    $racetext .= "\t\t],\n";
    $racetext .= "\t\t//Total bets:" . $totalBets . "',\n";
    $racetext .= "\t\t//count:" . count($weights) . "',\n";

    $racetext .= "\t],\n";
    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
