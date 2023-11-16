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
    $racetext .= "\t\t'favorite' =>  '" . $first1 . "',\n";
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
    if(
        isset($weights[$first1])
              &&
       $weights[$first1] / $totalBets > 0.04
    ){
        $racetext .= "\t\t//favorite place \n";
    }
    $racetext .= "\t\t],\n";
    $racetext .= "\t\t//Total bets:" . $totalBets . "',\n";
    $racetext .= "\t\t//count:" . count($weights) . "',\n";
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
