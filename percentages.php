<?php

$outFile = "favwinqin.php";
$data = include($outFile);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

foreach($data as $favorite => $datum){
    $totalOccurences = 0;
    $occurences = [];
    $percentages = [];

    for($i = 1; $i < 15; $i++){
        $occurences[$i] = 0;
        $percentages[$i] = 0;
    }
    $racetext = "\t" . $favorite . " => [\n";
    $qinsData = $datum['qins'];
    foreach($qinsData as $qinItem){
        $values = array_values($qinItem);
        $occurences[$values[0]] ++;
        $occurences[$values[1]] ++;
        $totalOccurences ++;
    }
    foreach($occurences as $runner => $occurence){
        $percentages[$runner] = ($occurence / $totalOccurences) * 100;
    }
    arsort($percentages);
    $runners = array_keys($percentages);
    $racetext .= "\t\t//Sorted by occurence:\t" . implode(", ", $runners) . ",\n";
    $toWin = array_slice($runners, 0, 8);
    $placers = array_slice($runners, 0, 4);
    sort($placers);
    $racetext .= "\t\t'fav' => '" . implode(", ", $toWin) . "',\n";
    $racetext .= "\t\t'place' => '" . implode(", ", $placers) . "',\n";
    $QINSText = "[";
    $first = 0;
    foreach($qinsData as $qinItem){
        if($qinItem[0] != $first) $QINSText .= "\n\t\t\t";
        $first = $qinItem[0];
        $QINSText .= "[" . implode(", ", $qinItem) . "], ";
    }
    $QINSText .= "\n\t\t]";
    $racetext .= "\t\t'qins' =>  $QINSText ,\n";
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";
file_put_contents($outFile, $outtext);

?>