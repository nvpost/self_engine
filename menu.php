<?php
require './func.php';

function doMenu($parent_id = 0){
    global $db;
    $cacheName = 'menu'.$parent_id;
    $cat_res = checkMenuCache($cacheName, $parent_id);

    $sql = "SELECT * FROM category WHERE parent_id=".$parent_id;

    $cat_res = $db->query($sql);

    $cat_res = $cat_res->fetchAll(PDO::FETCH_ASSOC);
    if(!$cat_res){
        deb($db->errorInfo());
    }

    return $cat_res;

}

deb(doMenu(0));


//deb($cats);
//deb($rootCats);

//$menuHtml = "<ul>";
//foreach ($rootCats as $cat){
//    $menuHtml .= "<li class='first'>".$cat['label']."</li>";
//    if(isset($cat['childs'])){
//        $menuHtml .= drowChilds($cat['childs']);
//
//    }
//}
//$menuHtml .= "</ul>";
//
//function drowChilds($childs){
//    $childItems = "<ul class='child'>";
//    foreach ($childs as $cat){
//        $childItems .= "<li class='first'>".$cat['label']."</li>";
//        if(isset($cat['childs'])){
//            $second = drowChilds($cat['childs']);
//            $childItems .=$second;
//        }
//    }
//    $childItems .= "</ul>";
//
//    return $childItems;
//}
//
//echo $menuHtml;



?>

<!--<ul>-->
<?php //foreach ($rootCats as $key=>$rootCat):?>
<!--    <p class="root_menu_item">$rootCat['label']</p>-->
<!---->
<?php //endforeach;?>
<!--<ul>-->

<?php
require './debug_line.php';
?>