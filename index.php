<?php
//require './cats.php';

if(!$_GET){
    require './home.php';
    deb('главная');
}
else{
    echo "Старица категории ".$_GET['cat'];
    //deb($_GET);
}
