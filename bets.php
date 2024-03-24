<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$fibonacci = [1, 2, 3, 5, 8, 13, 21];

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";
$newFile = $currentDir . DIRECTORY_SEPARATOR . "winplace.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$globals = [];

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$shit = [];

for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    $globals[$raceNumber] = [];
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
    $globals[$raceNumber]['favorites'] = $favorites;
    foreach($favorites as $one){
        if(isset($history[$raceNumber][$one]['win'])){
            $winners = array_intersect($history[$raceNumber][$one]['win'], $runners);
            $sets[$one] = $winners;
        } 
    }
    $union = [];
    $globals[$raceNumber]['place'] = [];
    foreach($sets as $f => $s){
        // if(in_array(3, $s) && in_array(5, $s)){
        $fibo = array_intersect($s,$fibonacci);
        if(count($fibo) >= 3){
            $racetext .= "\t\t'win hist(Fav $f)' => '" . implode(", ", $s) . "',//count: " . count($s) . "\n";
            $racetext .= "\t\t'fibo seq(Fav $f)' => '" . implode(", ", $fibo) . "',\n";
            $union = array_values(array_unique(array_merge($union, $s)));
            if(!in_array($f, $shit)) $shit[] = $f;
        }
        else $globals[$raceNumber]['place'][] = $f;
    }
    if(!empty($union)){
        sort($union);
        $globals[$raceNumber]['win'] = $union;
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($oldAddedFavorites);
    unset($addedFavorites);
    unset($union);
    $outtext .= $racetext;
}
sort($shit);
$outtext .= "\t\t//'shit' => '" . implode(", ", $shit) . "',\n"; 
$outtext .= "];\n";
file_put_contents($outFile, $outtext);

$newtext = "<?php\n\n";
$newtext .= "return [\n";
for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($globals[$raceNumber]['win'])) continue;
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $wp = array_intersect($globals[$raceNumber]['favorites'], $shit);
    if(!empty($wp)){
        $racetext .= "\t\t'wp' => '" . implode(", ", $wp) . "',\n"; 
    }
    if(isset($globals[$raceNumber]['win'])){
        $racetext .= "\t\t'win' =>   '" . implode(", ", $globals[$raceNumber]['win']) . "',//count: " . count($globals[$raceNumber]['win']) . "\n"; 
        $racetext .= "\t\t'place' => '" . implode(", ", $globals[$raceNumber]['place']) . "',\n"; 
    }
    $racetext .= "\t],\n";
    $newtext .= $racetext;
}
$newtext .= "];\n";
file_put_contents($newFile, $newtext);

