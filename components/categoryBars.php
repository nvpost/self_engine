<?php
/**
 * Created by PhpStorm.
 * User: n.balashov
 * Date: 24.03.2021
 * Time: 14:21
 */
//foreach ($rootCats as $k => $bar){
//
//    // func addImgToCats($id)
//    $img = getRandomIng();
//    $rootCats[$k]['img'] = $img;
//    deb($rootCats[$k]);
//}

function drowCategoryBar($item){
    $img = getRandomIng();
    $category_bar_html ="<div class='slide-categ-bicycle'>
                <div class='categ-bicycle-item'>
                    <img src='img/".$img['src']."' alt='category'>
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

            <?php foreach ($rootCats as $k => $item):?>
                <?=drowCategoryBar($item)?>
            <?php endforeach;?>
        </div>
    </div>
</section>
