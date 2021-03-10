<?php

function drowProductsShowcaseFoo($item){
    //deb($item);
    global $home_url;
    $itemHtml = "<div class='show_case_item product_show_case_item'>";
        $itemHtml .= "<div class='show_case_item_header product_show_case_header'>";
            $itemHtml .= "<h2>".$item['name']."</h2>";
        $itemHtml .="</div>";

        $itemHtml .= "<div class='show_case_item_img'>";

        $itemHtml .= "<img loading='lazy' src='".$home_url."img/".$item['src']."', title='Купить ".$item['name']."'>";
        $itemHtml .="</div>";

        $itemHtml .= "<div class='show_case_item_actions'>";
            $itemHtml .= "<span>Цена: ".$item['price']." &#8381; </span>";
            $prod_link = str_replace([' ', '.'], ['_', ''], $item['name']);
            //deb($prod_link.$item['name']);
            $itemHtml .= "<a href='".$home_url."noz/".$prod_link."'>Подробнее</a>";
            $itemHtml .= "<a href='".$item['url']."' target='_blank'>Купить</a>";
        $itemHtml .="</div>";

    $itemHtml .="</div>";

    echo $itemHtml;
}
