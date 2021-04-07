<?php

function getSliderGoods(){
    global $db;
    global $categorySlider;
    if($categorySlider){
        //deb()
        $sql = "SELECT * FROM products WHERE category_id={$categorySlider} ORDER BY RAND() LIMIT 10";
    }else{
        $sql = "SELECT * FROM products ORDER BY RAND() LIMIT 10";
    }


    $prod_res = $db->query($sql);
    $prods = $prod_res->fetchAll(PDO::FETCH_ASSOC);

    foreach ($prods as $k => $prod){
        //правильные картинки
         $img = addImgToProd($prod['prod_id']);
         $prods[$k]['img'] = $img;
        //случайные картинки
        //$img = getRandomIng();
        //$prods[$k]['img'] = $img;
    }

    return $prods;

}



$slider_goods = getSliderGoods();
//deb($slider_goods);


function doSliderItem($item){
    //deb($item);
    global $home_url;
    $desr = mb_substr($item['descr'],0,100);
    $prod_link = $home_url."noz/".str_replace([' ', '.'], ['_', ''], $item['name']);
    $slideHtml = "<div class='main-slide'>
                <div class='main-slide-bg' style='background-image: url(assets/img/bg-slider.svg);'></div>
                <div class='container'>
                    <div class='main-slide-info'>
                        <h2 class='title'>".$item['name']."</h2>
                        <p>".$desr."</p>
                        <a href='{$prod_link}' class='btn' target='_blank'><span>Подробнее</span></a>
                        <a href='{$item['url']}' class='btn' target='_blank'><span>Купить сейчас</span></a>
                    </div>
                    <div class='slide-img-cover'>
                        <a href='single-shop.html' class='lable-bike'>
                            <div class='lable-bike-img'><img src='{$home_url}img/{$item['img']['src']}' alt='img'></div>
                            <div class='lable-bike-item'>
                                <div class='model'>{$item['vendor']}</div>
                                <div class='price'>{$item['price']}</div>
                            </div>
                        </a>
                        <img src='{$home_url}img/".$item['img']['src']."' alt='img' class='slide-img'>
                    </div>
                </div>
            </div>";
    return $slideHtml;

}


?>
<section class="s-main-slider">
		<div class="main-slide-navigation"></div>
		<ul class="main-soc-list">
			<li><a href="https://www.facebook.com/rovadex">facebook</a></li>
			<li><a href="https://twitter.com/RovadexStudio">twitter</a></li>
			<li><a href="https://www.instagram.com/rovadex/">instagram</a></li>
		</ul>
		<div class="main-slider">
            <?php foreach ($slider_goods as $item):?>
                <?= doSliderItem($item)?>
            <?php endforeach;?>
		</div>
	</section>