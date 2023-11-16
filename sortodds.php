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

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 2, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

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

    $values = array_values($tmpArray);

    $sBlacks = array_values(array_intersect($runners, $blacks));
    $sReds = array_values(array_intersect($runners, $reds));
       
    $first1 = $runners[0];

    if(in_array($first1, $blacks)){
       $favorites = $sBlacks;
       $others = $sReds;
    }
    else{
       $favorites = $sReds;
       $others =$sBlacks;
    }

    //determine odds weights
    //1. gets first five candidates depening on favorite
    $favKeys = array_slice($runners, 0, count($runners) -1, true);
    $favOdds = [];
    foreach($favKeys as $someKey){
        if(isset($allOdds[$raceNumber][$someKey])){
            $favOdds[$someKey] = $allOdds[$raceNumber][$someKey];
        }
    }
    asort($favOdds);
    $weights = getWeights($favOdds, 2, 10);
    $showRace = in_array(-1, $weights);
   
    $racetext .= "\t\t'All Runners   '  =>  '" . implode(", ", $runners).  "',\n";
    $racetext .= "\t\t'favorite' =>  '" . $first1 . "',\n";
    $racetext .= "\t\t'Place' =>  '" . $first1 . "',\n";
    $favOdds = array_slice($favOdds, 0, count($favOdds) -1, true);
    $weights = getWeights($favOdds, 2, 10);
     while(in_array(-1, $weights)){
        $favOdds = array_slice($favOdds, 0, count($favOdds) -1, true);
        $weights = getWeights($favOdds, 2, 10);
    }
    $weightValues = array_values($weights);
    $criterion = count($weightValues) > 4 && $weightValues[0] != $weightValues[1];
    $showRace = $showRace && $criterion;
    $totalBets = 0;
    $racetext .= "\t\t'WIN BETS' => [\n";
    foreach($weights as $someKey => $someValue){
        $bet = 10 * $someValue;
        $totalBets += $bet;
        $racetext .= "\t\t\t". $someKey ." =>  " . $bet . ",\n";
    }
    if(
        isset($weights[$first1])
              &&
       $weights[$first1] / $totalBets < 0.03
    ){
        $racetext .= "\t\t//favorite placen";
    }
    $racetext .= "\t\t],\n";
    
    $racetext .= "\t\t//Total bets:" . $totalBets . "',\n";
    $racetext .= "\t\t//count:" . count($weights) . "',\n";

    $racetext .= "\t],\n";
    if($showRace) $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
