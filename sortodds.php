<?php

$allOdds = include("getodds.php");
$probas = [];

$totalRaces = count($allOdds);

for($r=1; $r <= $totalRaces; $r++){
    $odds = $allOdds[$r];
    $proba = [];
    for($i=1; $i <= count($odds); $i++){
        if(isset($odds[$i])) {
            $proba[$i] = 100 * round((log($odds[$i]) / $odds[$i]) / exp(1) , 4);
        }
    }
    arsort($proba);
    $probas[$r] = $proba;
}

$outFile = "probas.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    $outtext .= "\t'$raceNumber' => [\n";
    $outtext .= "\t\t/**\n";
    $outtext .= "\t\tRace $raceNumber\n";
    $outtext .= "\t\t*/\n";
    $tmpArray = $probas[$raceNumber];
    $tmpSum = 0;
    $fiftyMarked = false;
    foreach ($tmpArray as $i => $val){
        $outtext .= "\t\t$i => $val,\n";
        $tmpSum += $val;
        if($tmpSum > 50 && $fiftyMarked === false) {
            $outtext .= "\t\t'Sum' => $tmpSum,\n";
            $fiftyMarked = true;
        }
    }
    $outtext .= "\t\t'Sum' => $tmpSum,\n";
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
