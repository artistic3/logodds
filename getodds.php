
<?php

$currentYear = "2024";

if(!isset($argv[1])) die("Race Date Not Entered!!\n");
else {
    $raceDate = trim($argv[1]);
    if(strlen($raceDate) !== 4) die("Incorrect Day Format!! Use MMDD\n");
}

$tmp = $raceDate;
$tmp[4] = $raceDate[3];
$tmp[3] = $raceDate[2];
$tmp[2]= "-";
$raceDateFormat = $currentYear . "-" . $tmp;

if(!isset($argv[2])) $venue = "ST";
else $venue = trim($argv[2]);

$outDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

if (!file_exists($outDir)) {
    mkdir($outDir, 0777, true);
}

$outFile =$outDir . DIRECTORY_SEPARATOR . "odds.php";

$outtext = "<?php\n\n";
$outtext .= "return [\n";

if(isset($argv[3])) $totalRaces = trim($argv[3]);
else $totalRaces = 10;

for($r = 1; $r <= $totalRaces; $r++){

    $outtext .= "\t$r => [\n";

    $oddsJSON = file_get_contents("https://bet.hkjc.com/racing/getJSON.aspx?type=winplaodds&date=$raceDateFormat&venue=$venue&start=$r&end=$r");

    $odds = json_decode($oddsJSON, true);
    if($odds == NULL) exit("ERROR GETTING DATA !!!\n");
    $odds = $odds["OUT"];

    $pos = strpos($odds, "#PLA");
    $odds = substr($odds, $pos, strlen($odds));

    $odds = explode(";",$odds);

    for($k = 1; $k < count($odds); $k++) {
        $lineParts = explode("=", $odds[$k]);
        $runner = $lineParts[0];
        $currentOdds = $lineParts[1];
        if($currentOdds !== "SCR"){
            $outtext .= "\t\t$runner => $currentOdds,\n";
        }
    }
    $outtext .= "\t],\n";
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);