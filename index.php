<?php
//require './cats.php';
if(!$_GET){

    require './home.php';
    deb('главная');
}
else{
    deb($_GET);
}

<?php

const JSON_OPT = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES;

function rrmdir($src) {
    $dir = opendir($src);
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            $full = $src . '/' . $file;
            if (is_dir($full)) {
                rrmdir($full);
            } else {
                unlink($full);
            }
        }
    }
    closedir($dir);
    rmdir($src);
}

$distDir = "./parsed/";
$distDirTemp = "./parsed_temp/";
$distDirOld = "./parsed_old/";
$indexFile = "./catalogueIndex.json";
$priceFile = "../price_ua.txt";
$priceFileNew = "./price_ua.new.txt";

$timeCheckFile = "./.time";

$priceFileNew = "./price_ua.new.txt";
$newPriceFileServer = "185.165.160.65";
//$newPriceFileServer = "10.2.1.130";
$newPriceFileAddress = "/obmen/price_ua.txt";
/*
// Check last execution time
if (is_file($timeCheckFile) && time() - filemtime($timeCheckFile) < 60 * 30) { // 30 min
	echo "Too soon";
	return;
} else {
	file_put_contents($timeCheckFile, "");
}
*/
// Download new price file and check for changes
$priceData = @file_get_contents("ftp://" . $newPriceFileServer . $newPriceFileAddress);
if (!$priceData) {
    echo "Failed to read pricelist file, reading from backup.\n";
    $priceData = @file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'price_ua.txt');
    if (!$priceData) {
        echo "Failed to read from backup.";
        return;
    }
}
// Remove BOM
$priceData = str_replace("\xEF\xBB\xBF", '', $priceData);
// Fix colon with comma
while (($pos = strrpos($priceData, ":,")) !== false) {
    $priceData = substr_replace($priceData, ":1,", $pos, 2);
}
$priceData = trim($priceData, "\n\r\t[],");
$priceData = '['.$priceData.']';
file_put_contents($priceFileNew, $priceData);

/*if (is_file($priceFile) && md5_file($priceFileNew) === md5_file($priceFile)) {
	echo "No changes detected";
	unlink($priceFileNew);
	return;
}*/

if (is_file($priceFile)) {
    unlink($priceFile);
}
rename($priceFileNew, $priceFile);


// Parse prices file
$priceData = file_get_contents($priceFile);
//$priceData = substr_replace($priceData, "", strrpos($priceData, ","), 1);
$priceData = json_decode($priceData, true);
if (!$priceData) {
    echo "Failed parse price_ua.txt as json.";
    throw new Exception(json_last_error_msg());
}

usort($priceData, function ($a, $b) {
    return $a['izd_price'] - $b['izd_price'];
});

$indexData = json_decode(file_get_contents($indexFile), true);


$multigroupItems = [];
$groupsWithOwerusedIDs = [];
$resultGroups = [];
$ungroupedItems = [];
$itemlessGroups = [];

foreach ($indexData as $groupData) {
    $id = $groupData["id"];
    $gName = $groupData["name"];

    $modif = isset($groupData["modif"]) ? $groupData["modif"] : null;
    $notModif = isset($groupData["not_modif"]) ? $groupData["not_modif"] : null;

    if (isset($resultGroups[$id])) {
        $groupsWithOwerusedIDs [] = $gName;

        continue;
    }

    $rules = isset($groupData["rules"]) ? $groupData["rules"] : ["(?:^|^.+ )" . $id];
    $items = [];

    foreach ($priceData as $itemData) {
        if (($modif && $itemData["izd_modif"] !== $modif) || ($notModif && $itemData["izd_modif"] === $notModif)) {
            continue;
        }
        foreach ($rules as $rule) {
            if (mb_ereg_match($rule, $itemData["izd_name"])) {
                if (!isset($multigroupItems[$itemData["izd_nnn"]])) {
                    $multigroupItems[$itemData["izd_nnn"]] = [];
                }
                $multigroupItems[$itemData["izd_nnn"]] [] = $groupData["name"];


                if (mb_substr($itemData["izd_name"], 0, 8) === "ОВЕН DRU") {
                    $itemData["izd_name"] = mb_substr($itemData["izd_name"], 5);
                }


                $items [] = $itemData;
                break;
            }
        }
    }

    if (count($items)) {
        $resultGroups[$id] = $items;
    }
}

foreach ($priceData as $itemData) {
    if (!isset($multigroupItems[$itemData["izd_nnn"]])) {
        $ungroupedItems [] = $itemData;
    }
}

foreach ($indexData as $groupData) {
    if (!isset($resultGroups[$groupData["id"]]) && !isset($groupData["ignore"])) {
        $itemlessGroups [] = $groupData;
    }
}

foreach (array_keys($multigroupItems) as $itemNNN) {
    if (count($multigroupItems[$itemNNN]) === 1) {
        unset($multigroupItems[$itemNNN]);
    }
}

// Create temp dir
mkdir(substr($distDirTemp, 0, strlen($distDirTemp) - 1));

if (!empty($itemlessGroups)) {
    file_put_contents($distDirTemp . "!itemless.json", json_encode($itemlessGroups, JSON_OPT));
}
if (!empty($ungroupedItems)) {
    file_put_contents($distDirTemp . "!ungrouped.json", json_encode($ungroupedItems, JSON_OPT));
}
if (!empty($multigroupItems)) {
    file_put_contents($distDirTemp . "!multigroup.json", json_encode($multigroupItems, JSON_OPT));
}
if (!empty($groupsWithOwerusedIDs)) {
    file_put_contents($distDirTemp . "!overused.json", json_encode($groupsWithOwerusedIDs, JSON_OPT));
}

foreach ($resultGroups as $groupID => $items) {
    file_put_contents($distDirTemp . "g_" . urlencode($groupID) . ".json", json_encode($items, JSON_OPT));
}

$dir = substr($distDir, 0, strlen($distDir) - 1);
$dirOld = substr($distDirOld, 0, strlen($distDirOld) - 1);
$haveOld = is_dir($dir);

if ($haveOld) {
    rename($dir, $dirOld);
}

rename(substr($distDirTemp, 0, strlen($distDirTemp) - 1), $dir);

if ($haveOld) {
    rrmdir($dirOld);
}

echo "Done";

