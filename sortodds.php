<?php

function numericalValue($n){
    $tens = intdiv($n, 10);
    $units = $n - 10 * $tens;
    return $tens + $units;
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$probas = [];

$reds = [1, 3, 5, 7, 9, 12, 14, 16, 18, 
         19, 21, 23, 25, 27, 30, 32, 34, 36];

$blacks = [2, 4, 6, 8, 10, 11, 13, 15, 17, 20,
          22, 24, 26, 28, 29, 31, 33, 35];

$totalRaces = count($allOdds);

for($r=1; $r <= $totalRaces; $r++){
    if(!isset($allOdds[$r])) continue;
    $odds = $allOdds[$r];
    $proba = [];
    $sum = 0;
    foreach($odds as $i => $oddsI){
            $proba[$i] = 100 * (log($oddsI) / $oddsI) / exp(1);
            $sum += $proba[$i];
            }
    foreach($odds as  $i => $oddsI){
        //adjust to 100 percentage
        $proba[$i] = round( $proba[$i] * 100 / $sum, 2);
    }
    arsort($proba);
    $probas[$r] = $proba;
}

$outFile = $currentDir . DIRECTORY_SEPARATOR . "probas.php";


$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($probas[$raceNumber])) continue;

    $racetext = "";

    $tmpArray = $probas[$raceNumber];
    $runners = array_keys($tmpArray);

    if(count($runners) < 11) continue;
    
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

    $racetext .= "\t\t'Fav' =>  '" . implode(", ", $favorites) . "',\n";  
    $racetext .= "\t\t'Oth' =>  '" . implode(", ", $others) . "',\n";
   
    $trio = array_merge(array_slice($favorites, 0, 3), array_slice($others, 0, 2));

    $qplLeftSide = [$favorites[0], $favorites[1], $others[1], $others[2]];
    $qplRightSide = [ $favorites[0], $favorites[2],$favorites[4], $favorites[5], $others[4] ];
    if(isset($others[6]) $qplRightSide[] = $others[6];
    $toWin = [];
    for($indexL = 0; $indexL < count($qplLeftSide); $indexL++) {
        for($indexR = 0; $indexR < count($qplRightSide); $indexR++) {
            $left = $qplLeftSide[$indexL];
            $right = $qplRightSide[$indexR];
            if( 
                (abs(numericalValue($left) - numericalValue($right)) <= 2)
                &&
                (
                    (in_array($left, $sReds) && in_array($right, $sBlacks))
                    || (in_array($left, $sBlacks) && in_array($right, $sReds))
                )
            ){
                if(!in_array($left, $toWin)) $toWin[] = $left;
                if(!in_array($right, $toWin)) $toWin[] = $right;
            }
        }
    }
    $difference1 = array_diff($toWin, $trio);
    $difference2 = array_diff($trio, $toWin);
    $intersection = array_intersect($toWin, $trio);
    
    if(count($difference2) == 2) {
        $racetext .= "\t\tDiff2'WP($50), QQP($10)' =>  '" . implode(", ", $difference2) . "',\n";          
    }

    if(count($intersection) == 2) {
        $racetext .= "\t\tInter'WP($50), QQP($10)' =>  '" . implode(", ", $intersection) . "',\n";          
    }

    $racetext .= "\t],\n";

    $outtext .= $racetext;

}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
