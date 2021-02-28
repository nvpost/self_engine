<?php
require './cats.php';
require './drow/drowCatalogItem.php';

//deb($rootCats);

echo "<div class='showcase_container'>";
$rootCats = checkCache('catsAndCounts', 0);
//deb($rootCats);
foreach($rootCats as $key => $rootCat){
    //deb($rootCat);
    drowShowCaseItem($rootCat);
}

echo "</div>";












?>






