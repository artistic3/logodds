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
        if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    sort($runners);
    sort($favorites);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
   
    if(isset($officialWin)){
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
    $firstSet = true;
    foreach($favorites as $F){
        $candidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        if($firstSet) {
            $inter = $candidates;
            $firstSet = false;
        }
        else $inter = array_intersect($inter, $candidates);
    }
    $copyInter = $inter;
    $inter = array_intersect($favorites, $inter);
    if(!empty($inter)) {
        $racetext .= "\t\t'inter' => '" . implode(", ", $inter) . "',\n"; 
        if(count($inter) >= 2 && count($favorites) >= 3){
            $racetext .= "\t\t'win($20)' => '" . implode(", ", $favorites) . "',\n"; 
            $racetext .= "\t\t'win($20)' => '" . implode(", ", array_slice($favorites, 1, 2)) . "',\n"; 
            $racetext .= "\t\t'qin/trio($10)' => '" . implode(", ", $favorites) . "',\n"; 
        }
    }
    if(count($inter) >= 1 && count($favorites) === 2){
        $potentialFavorites = array_diff($runners, $favorites);
        foreach($potentialFavorites as $potentialFavorite){
            $potentialCandidates = array_intersect($history[$raceNumber][$potentialFavorite]["win"], $runners);
            $potentialInter = array_intersect($copyInter, $potentialCandidates);
            $newFavs = array_merge($favorites, [$potentialFavorite]);
            $potentialInter = array_intersect($potentialInter, $newFavs);
            if(count($potentialInter) >= 2){
                $racetext .= "\t\t'potential inter(fav $potentialFavorite)' => '" . implode(", ", $potentialInter) . "',\n"; 
            }
        }
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
