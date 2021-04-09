<?php

function drowCategoryBar($item){

    $n = rand(0, count($item['prods'])-1);
    $img = $item['prods'][$n]['img'][0]['src'];
    $category_bar_html ="<div class='slide-categ-bicycle'>
                <div class='categ-bicycle-item'>
                    <img src='img/".$img."' alt='category'>
                    <div class='categ-bicycle-info'>
                        <h4 class='title'>{$item['label']}</h4>
                        <a href='shop.html' class='btn'><span>Перейти</span></a>
                    </div>
                </div>
            </div>";
    return $category_bar_html;
}
?>

<section class="s-category-bicycle">
    <div class="container">
        <div class="slider-categ-bicycle">

            <?php foreach ($mainPageProds as $k => $item):?>
                <?=drowCategoryBar($item)?>
            <?php endforeach;?>
        </div>
    </div>
</section>
