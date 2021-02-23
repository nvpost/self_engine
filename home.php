<?php
require './cats.php';

//deb($rootCats);



foreach($rootCats as $key => $rootCat){
    drowShowCaseItem($rootCat);
}





function drowShowCaseItem($item){
    global $imgUrl;
    $itemHtml = "<div class='show_case_item'>";
        $itemHtml .= "<div class='show_case_item_header'>";
            $itemHtml .= "<h2>".$item['label']."</h2>";
        $itemHtml ."</div>";

        $itemHtml .= "<div class='show_case_item_img'>";
            $img = addImgToCats($item['cat_id']);
            deb($img);
            $itemHtml .= "<img src='../../noz/web/img/".$img['url']."', title='Купить ".$img['title']."'>";
        $itemHtml ."</div>";

        $itemHtml .= "<div class='show_case_item_actions'>";
            $itemHtml .= "<a href='./category/".$item['cat_id']."'>Перейти к категории ".$item['cat_id']."</a>";
        $itemHtml ."</div>";

   $itemHtml ."</div>";

    echo $itemHtml;
    //deb($item);
}






?>




<?php
require './debug_line.php';
?>

