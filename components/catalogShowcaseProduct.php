<?php

function drowShowcaseProduct($item){
    //deb($item);
    global $home_url;
    $product_link = $home_url."noz/".str_replace([' ', '.'], ['_', ''], $item['name']);

    //Берем все картинки
    $img = $item['img'][0];



$productHtml = "
    <div class='product-item'>
        <ul class='product-icon-top'>
            <li><a href='#'><i class='fa fa-refresh' aria-hidden='true'></i></a></li>
            <li><a href='#'><i class='fa fa-heart' aria-hidden='true'></i></a></li>
        </ul>
        <a href='{$product_link}' class='product-img'>
            <img class='lazy' src='{$home_url}img/{$img['src']}' data-src='img/{$img['src']}' alt='{$img['title']}'>
        </a>
        <div class='product-item-cover'>
            <div class='price-cover'>
                <div class='new-price'>{$item['price']}</div>
            </div>
            <h6 class='prod-title'><a href='{$product_link}'>{$item['name']}</a></h6>
            <a href='{$item['url']}' class='btn' target='_blank'><span>Купить сейчас</span></a>
        </div>
        <div class='prod-info'>
            <ul class='prod-list'>
                <li>Производитель: <span>{$item['vendor']}</span></li>
            </ul>
        </div>
    </div>   
";
return $productHtml;
}


?>


