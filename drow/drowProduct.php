<?php

function drowProduct($item){
    //deb($item);
    global $home_url;
    $itemHtml = "<div class='product_item'>";
        $itemHtml .= "<div class='product_item_header'>";
            $itemHtml .= "<h1>".$item['name']."</h1>";
        $itemHtml .="</div>";

    $itemHtml .= "<div class='product_item_imgs'>";
    foreach ($item['imgs'] as $img){
        $itemHtml .= "<div class='product_item_img_item'>";
        $itemHtml .= "<img src='".$home_url."img/".$img['src']."', title='Купить ".$img['title']."'>";
        $itemHtml .= "</div>";
    }

    $itemHtml .="</div>";

    $itemHtml .= "<div class='product_item_descr'>";
    $itemHtml .="<p>".$item['descr']."</p>";
    $itemHtml .="</div>";

    $itemHtml .= "<div class='product_item_actions'>";
        $itemHtml .= "<span>Цена: ".$item['price']." &#8381; </span>";
        $itemHtml .= "<a href='".$item['url']."' target='_blank'>Купить ".$item['name']."</a>";
    $itemHtml .="</div>";

    $itemHtml .="</div>";

    echo $itemHtml;
}
