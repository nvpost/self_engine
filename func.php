<?php

const HOME_URL = "noz_self";

require './sql/sql_data_pass.php';





function deb($v, $h=0){
    if($h) echo "<hr>";
    echo "<pre>";
    print_r($v);
    echo "</pre>";
    if($h) echo "<hr>";
}

?>

<link rel="stylesheet" href="./style.css">
