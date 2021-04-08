<?php

function drowSlide($slide){
  $slideHtml = "
        <div class='slick-track' role='listbox'>
                <div class='slide-single-for slick-slide'>
                <a href='../img/{$slide['src']}' class='single-for-img' data-fancybox='prod1'>
                    <img src='../img/{$slide['src']}' alt='img'>
                </a>
            </div>
        </div>
  ";
  return $slideHtml;
}

function drowSlideNav($slide){
    $slideHtml = "
            <div class='single-nav-img'>
                <img src='../img/{$slide['src']}' alt='img'>
            </div>
    ";
    return $slideHtml;
}
?>
<div class="col-12 col-md-5">
    <div class="slider-single-for">
        <?php foreach ($tovar['img'] as $slide):?>
            <?=drowSlide($slide);?>
        <?php endforeach;?>
    </div>

    <!--=== SLIDER-SINGLE-FOR END ===-->
    <!--===== SLIDER-SINGLE-NAV =====-->
    <div class="slider-single-nav  slick-slider">
        <?php foreach ($tovar['img'] as $slide):?>
             <div class="slide-single-nav slick-slide" role="option">
                   <?=drowSlideNav($slide);?>
             </div>
        <?php endforeach;?>
    </div>
</div>
<!--=== SLIDER-SINGLE-NAV END ===-->
