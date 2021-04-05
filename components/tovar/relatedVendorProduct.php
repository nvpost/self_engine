<?php

$vendor = $tovar['vendor'];

function getRelatedVendor(){
    global $db;
    global $vendor;

    $sql = "SELECT * FROM products WHERE vendor='".$vendor."' LIMIT 10";
    $relatedProds = $db->query($sql)->fetchALL(PDO::FETCH_ASSOC);

    return $relatedProds;
}
?>