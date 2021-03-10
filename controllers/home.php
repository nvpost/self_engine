<?php
require './catsAndProdsShowcase.php';
require './drow/drowCatalogItem.php';
require './drow/drowMenuLine.php';

//deb($rootCats);

echo "<div class='showcase_container'>";
$rootCats = checkCache('catsAndCounts', 0);

//do header
$heatTitle = "Интернет магазин ножей";
$headDesrc = "Огромный выбор ножей самых известных производителей";
doHeader($heatTitle, $headDesrc);


//контент
$menu = checkMenuCache(0);
drowMenu($menu);
//deb($menu);


foreach($rootCats as $key => $rootCat){
    //deb($rootCat);
    drowShowCaseItem($rootCat);
}

echo "</div>";












?>






