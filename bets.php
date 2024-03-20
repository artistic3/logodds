<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['additional favorites'])) $oldAddedFavorites = explode(", ", $oldData[$raceNumber]['additional favorites']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];

    if(isset($oldAddedFavorites)) $addedFavorites = $oldAddedFavorites;
    else $addedFavorites = [];

    $sets = [];

    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(count($favorites) < 3){
        if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    }
    else{
        if(!in_array($favorite, $addedFavorites) && !in_array($favorite, $favorites)) $addedFavorites[] = $favorite;
    }
    sort($runners);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    if(!empty($addedFavorites))  {
        $racetext .= "\t\t'additional favorites' => '" . implode(", ", $addedFavorites) . "',\n"; 
    }
    $favorites = array_merge($favorites, $addedFavorites);
    $sures1 = [];
    $sures2 = [];
    foreach($favorites as $one){
        $secret = abs($raceNumber - $one + 4);
        $sures1[] = $secret;
        $sures2[] = $secret + 1;
        if(isset($history[$raceNumber][$one]['win'])){
            $winners = $history[$raceNumber][$one]['win'];
            //if(count($winners) > 6 || count($winners) < 3) continue;
            $sets[$one] = $winners;
        } 
    }
    if(count($sets) >= 1){
        $union = [];
        foreach($sets as $f => $s){
            $union = array_values(array_unique(array_merge($union, $s)));
            $racetext .= "\t\t'Fav $f' => '" . implode(", ", $s) . "',\n";
        }
        sort($union);
        $racetext .= "\t\t'union' => '" . implode(", ", $union) . "',//count: " . count($union) . "\n";
        if(count($union) > 7 && count($favorites) < 6){
            $racetext .= "\t\t'win' => '" . implode(", ", $favorites) . "',\n";
        }
    }
    $racetext .= "\t\t'sures1' => '" . implode(", ", $sures1) . "',\n";
    $racetext .= "\t\t'sures2' => '" . implode(", ", $sures2) . "',\n";
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($oldAddedFavorites);
    unset($addedFavorites);
    unset($sures1);
    unset($sures2);
    $outtext .= $racetext;
}
$outtext .= "];\n";

file_put_contents($outFile, $outtext);
