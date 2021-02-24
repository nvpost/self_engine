<?php
//require './cats.php';

if(!$_GET){
    require './home.php';
    deb('главная');
}
else if($_GET['cat']){
    $category_label = $_GET['cat'];
    echo "Страница категории ".$category_label;
    require './category.php';
    //deb($_GET);
}


?>

<?php
require './debug_line.php';
?>
