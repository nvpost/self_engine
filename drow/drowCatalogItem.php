<?php

function drowShowCaseItem($item){
    global $home_url;
    $img = addImgToCats($item['cat_id']);
    if(!$img){
        return false;
    }
    $itemHtml = "<div class='show_case_item'>";
        $itemHtml .= "<div class='show_case_item_header'>";
            $itemHtml .= "<h2>".$item['label']."</h2>";
        $itemHtml .="</div>";

        $itemHtml .= "<div class='show_case_item_img'>";

            //deb($img);
            $itemHtml .= "<img loading='lazy' src='".$home_url."img/".$img['url']."', title='Купить ".$img['title']."'>";
        $itemHtml .="</div>";

        $itemHtml .= "<div class='show_case_item_actions'>";
            $cat_link = str_replace([' ', '.'], ['_', ''], $item['label']);
            $itemHtml .= "<a href='".$home_url."category/".$cat_link."'>Перейти к категории ".$item['label']."</a>";
        $itemHtml .="</div>";

    $itemHtml .="</div>";

    echo $itemHtml;


    //deb($item);
}