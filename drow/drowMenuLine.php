<?php

function drowMenu($menu, $level=""){
//    deb($menu);
    $lineMenuHtml = "<div class='line_menu".$level."'>";
    foreach ($menu as $k => $item){
        $lineMenuHtml .= drowMenuLine($item);
    }
    $lineMenuHtml .= "</div>";

    return $lineMenuHtml;
}


function drowMenuLine($item, $level=""){
    global $home_url;
    $lineMenuItemHtml = "<div class='line_menu_item $level'>";
    $url = str_replace([' ', '.'], ['_', ''], $item['label']);
    $lineMenuItemHtml .= "<div class = 'line_menu_item_first'>";
    $lineMenuItemHtml .= "<a href='".$home_url."category/".$url."'>".$item['label']."</a>";
//    deb($item);
    $lineMenuItemHtml .= "</div>";
    if(isset($item['sub_menu'])){
        //deb('gg');
        //deb($item['sub_menu']);
        $lineMenuItemHtml .= drowMenu($item['sub_menu'], ' sub_level');
    }

    $lineMenuItemHtml .= "</div>";

    return $lineMenuItemHtml;
}

function drowSecondNext(){

}


