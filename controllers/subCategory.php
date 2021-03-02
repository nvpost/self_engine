<?php
require './cats.php';
require './drow/drowCatalogItem.php';



$cacheName = $_GET['cat'];

//если есть слешь то запросим категории с отступом

//TODO: передть в функцию кеша имя категории с отсупом и сам отступ (лимит берем из func) - ок

//TODO: Сделать домашнюю страницу с лимит = 1 редиректом на главную страницу категории / товара
//TODO: переделать ссылку в пагинации (чтобы не дублировалась)
//TODO: Много категорий в конце
if(strpos($_GET['cat'], '/')&&explode('/', $_GET['cat'])[1]!=""){
    $exploded_url = explode('/', $_GET['cat']);
    deb('вошли в explode');
    $cacheName = $exploded_url[0].$exploded_url[1];
    $pure_cat_label = $exploded_url[0];
    $offset = ($exploded_url[1]-1)*$cat_limit;
    echo "покажем категорию ".$exploded_url[0]." и отступ ".$exploded_url[1];
    echo "<br> Товары с ".($exploded_url[1]-1)*$cat_limit." по ".$exploded_url[1]*$cat_limit;
}else{
    $cacheName = str_replace("/", "", $_GET['cat']);
    $pure_cat_label = $cacheName;
}
//deb($cacheName);
$db_label = str_replace('_', ' ', $pure_cat_label);
//deb($db_label);
$cat_id_res = $db->query("SELECT * FROM category WHERE label='".$db_label."'");


$cat_id = $cat_id_res->fetch(PDO::FETCH_ASSOC);

$parent_id = $cat_id['cat_id'];
//deb($parent_id);
$cat_counter = $db->query("SELECT * FROM category WHERE parent_id='".$parent_id."'")->rowCount();
echo "cat_counter - ".$cat_counter;
//deb($cat_counter);

//deb('offset');
//deb((int)$offset);
//deb('offset');
$rootCats = checkCache($cacheName, $parent_id, $offset);

//deb($rootCats);


if($rootCats){
    echo "<div class='showcase_container'>";
    foreach($rootCats as $key => $rootCat){
        drowShowCaseItem($rootCat);
    }
    echo "</div>";
}
//deb(count($rootCats));
if(count($rootCats)<$cat_counter){
//    echo"<hr>";
//    deb($cat_counter);
//    echo"<hr>";
//    deb(count($rootCats));
    $pages = ceil($cat_counter/count($rootCats));
    echo "<div class='show_more_items'>";
    echo "<a href='".$home_url."category/".$cacheName."/".$limit."'>Следующие категории</a>";
    echo pagination($pages);
    echo "</div>";

}

function pagination($pages){
    global $cacheName;
    global $home_url;
    global $pure_cat_label;
    $paginationHtml="<div class='pagination_row'>";
    for($i=1;$i<=$pages; $i++){

        $paginationUrl = $home_url."category/".$pure_cat_label."/".$i;
        //c_deb($paginationUrl);
        $paginationHtml .= "<div class = 'pagination_box'>";
        $paginationHtml .= "<a href='".$paginationUrl."'>".$i."</a>";
        $paginationHtml .= "</div>";
    }
    $paginationHtml .="</div>";
    return $paginationHtml;
}





//deb($rootCats);

