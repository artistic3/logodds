<?php
/**
 * Step 1: Loop through all previous commits in the repository, find all changes in files $raceDate/odds.php 
 * Step 2: Save the list of favorites for each race on that raceday in a file named favorites.php with this format:
 *   $raceDay => [$raceNumber => [$favorites]]
 * Note: $raceDay should also include the year, e.g. 20240113
 */

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "favorites.php";
$outtext = "<?php\nreturn[\n"; 
$matrix = [];
$output = array();
$history = array();
chdir(__DIR__);
exec("git log",$output);
foreach($output as $line){
    if(strpos($line, 'commit')===0){
        $history[]   = substr($line, strlen('commit'));
    }
}
exec("git config --global advice.detachedHead false");
foreach($history as $version){
    exec("git show --no-patch --format=%ci $version; ls",$year);
    $year = substr($year[0], 0, 4);
    exec("git checkout $version; ls",$command_output);
    foreach($command_output as $raceDate){
        if(is_dir($raceDate) && preg_match("/^[0-9]+$/", $raceDate)) {
            if(!isset($matrix["$year$raceDate"])) $matrix["$year$raceDate"] = [];
            $oddsFile1 = $raceDate . DIRECTORY_SEPARATOR . "odds.php";
            $oddsFile2 = $raceDate . DIRECTORY_SEPARATOR . "getodds.php";
            if(file_exists($oddsFile1)) $oddsFile = $oddsFile1;
            elseif(file_exists($oddsFile2)) $oddsFile = $oddsFile2;
            if(!isset($oddsFile)) continue;
            if(file_exists($oddsFile)){
                $odds = include($oddsFile);
                foreach($odds as $raceNumber => $raceOdds){
                    asort($raceOdds);
                    $runners = array_keys($raceOdds);
                    $favorite = $runners[0];
                    if(!isset($matrix["$year$raceDate"][$raceNumber])) $matrix["$year$raceDate"][$raceNumber] = [$favorite];
                    else{
                        if(!in_array($favorite, $matrix["$year$raceDate"][$raceNumber])) $matrix["$year$raceDate"][$raceNumber][] = $favorite;
                        sort($matrix["$year$raceDate"][$raceNumber]);
                    }
                }
            }
        }
    }
    exec("git checkout master");
}
foreach($matrix as $raceDate => $data){
    $outtext .= "\t'$raceDate' => [\n";
    foreach($data as $raceNumber => $favorites){
        $outtext .= "\t\t$raceNumber => [" . implode(", ", $favorites) ."],\n";
    }
    $outtext .= "\t],\n";
}
$outtext .= "];\n?>";
file_put_contents($outFile, $outtext);
exec("git checkout master; git add favorites.php;");
?>