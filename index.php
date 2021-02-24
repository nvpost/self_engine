<?php
$start = microtime(true);
//require './cats.php';

if(!$_GET){
    require './home.php';
    deb('главная');
}
else{
    if($_GET['cat']){
        require './category.php';
    }
    //deb($_GET);
}
