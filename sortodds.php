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
    $favorite = $runners[0];
    $runners = array_slice($runners, 2, count($runners) - 2);
    
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $first1 = $runners[0];

    //determine odds weights
    $favKeys = $runners;
    $favOdds = [];
    foreach($favKeys as $someKey){
        if(isset($allOdds[$raceNumber][$someKey])){
            $favOdds[$someKey] = $allOdds[$raceNumber][$someKey];
        }
    }
    asort($favOdds);
    $weights = getWeights($favOdds, 2, 10);
   
    $racetext .= "\t\t'All Runners   '  =>  '" . implode(", ", $runners).  "',\n";
    $racetext .= "\t\t'favorite' =>  '" . $favorite . "',\n";
    $favOdds = array_slice($favOdds, 0, count($favOdds) -1, true);
    $weights = getWeights($favOdds, 2, 10);
    while(in_array(-1, $weights)){
        $favOdds = array_slice($favOdds, 0, count($favOdds) -1, true);
        $weights = getWeights($favOdds, 2, 10);
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
    $racetext .= "\t\t],\n";
    $racetext .= "\t\t//Total bets:" . $totalBets . "',\n";
    $racetext .= "\t\t//count:" . count($weights) . "',\n";

    $lastOutsider = array_key_last($weights);
    $lastOutsiderPos = array_search($lastOutsider, $runners);
    $outsiderOdds = array_slice($weights, -2, 2, true);
    $outsiders = array_keys($outsiderOdds);
    $outsiders[] = $runners[$lastOutsiderPos + 1];
   if(isset($runners[$lastOutsiderPos + 2])) $outsiders[] = $runners[$lastOutsiderPos + 2];
    $outsiders[] = $first1;
    $outsiderOdds = [];
    foreach($outsiders as $someKey){
        if(isset($allOdds[$raceNumber][$someKey])){
            $outsiderOdds[$someKey] = $allOdds[$raceNumber][$someKey];
        }
    }
    asort($outsiderOdds);
    $outsiders = array_keys($outsiderOdds);
    $outsiderWeights = getWeights($outsiderOdds, 2, 10);
    $totalBets = 0;
    foreach($outsiderWeights as $someKey => $someValue){
        $bet = 10 * $someValue;
        $totalBets += $bet;
    }
    $avg = $totalBets / count($outsiderWeights);
    $outsiderWeightsValues = array_values($outsiderWeights);
    // $showRace =  $avg == 10 * $outsiderWeightsValues[0];
    $showRace = true;
    if(isset($placeOdds)){
        $outsiderOdds = [];
        foreach($outsiders as $someKey){
            if(isset($placeOdds[$raceNumber][$someKey])){
                $outsiderOdds[$someKey] = $placeOdds[$raceNumber][$someKey];
            }
        }
        // asort($outsiderOdds);
        $outsiderWeights = getWeights($outsiderOdds, 0, 10);
        while(in_array(-1, $outsiderWeights)){
            $outsiderOdds = array_slice($outsiderOdds, 0, count($outsiderOdds) -1, true);
            $outsiderWeights = getWeights($outsiderOdds, 2, 10);
        }
        $newOutsiders = array_keys($outsiderWeights);
        $lasts = array_diff($outsiders, $newOutsiders);
        $totalBets = 0;
        foreach($outsiderWeights as $someKey => $someValue){
            $bet = 10 * $someValue;
            $totalBets += $bet;
        }
        $racetext .= "\t\t'OUTSIDER PLACE BETS' => [\n";
        foreach($outsiderWeights as $someKey => $someValue){
            $bet = 10 * $someValue;
            $rate = round($bet / $totalBets, 4);
            $racetext .= "\t\t\t". $someKey ." =>  " . $bet . ",//rate: $rate\n";
        }
        $racetext .= "\t\t],\n";
        $racetext .= "\t\t//Total bets:" . $totalBets . "',\n";
        $racetext .= "\t\t//count:" . count($outsiderWeights) . "',\n";
        $racetext .= "\t\t'lasts' => '" . implode(", ", $lasts) . "',\n";
    }
    $racetext .= "\t],\n";
    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
