<?php

function drowMenu($menu){
    $lineMenuHtml = "<div class='line_menu'>";
    foreach ($menu as $k => $item){
        $lineMenuHtml .= drowMenuLine($item);
    }
    $lineMenuHtml .= "</div>";

    return $lineMenuHtml;
}


function drowMenuLine($item){
    global $home_url;
    $lineMenuItemHtml = "<div class='line_menu_item'>";
    $url = str_replace([' ', '.'], ['_', ''], $item['label']);
    $lineMenuItemHtml .= "<a href='".$home_url."category/".$url."'>".$item['label']."</a>";
    $lineMenuItemHtml .= "</div>";

    return $lineMenuItemHtml;
}


