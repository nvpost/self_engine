<?php

function drowShowCaseItem($item){
    global $home_url;
    global $imgUrl;
    $itemHtml = "<div class='show_case_item'>";
    $itemHtml .= "<div class='show_case_item_header'>";
    $itemHtml .= "<h2>".$item['label']."</h2>";
    $itemHtml ."</div>";

    $itemHtml .= "<div class='show_case_item_img'>";
    $img = addImgToCats($item['cat_id']);
    //deb($img);
    $itemHtml .= "<img src='".$home_url."img/".$img['url']."', title='Купить ".$img['title']."'>";
    $itemHtml ."</div>";

    $itemHtml .= "<div class='show_case_item_actions'>";
    $cat_link = str_replace([' ', '.'], ['_', ''], $item['label']);
    $itemHtml .= "<a href='".$home_url."category/".$cat_link."'>Перейти к категории ".$item['cat_id']."</a>";
    $itemHtml ."</div>";

    $itemHtml ."</div>";

    echo $itemHtml;


    //deb($item);
}