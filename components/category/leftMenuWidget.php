<?php
    //deb($childCats);
    //deb($CatLabel);
function drowLeftChildMenuItem($item){
    global $home_url;
    $label = $item['label'];
    $url = $home_url."category/".doUrl($label);
    return "
        <li>
            <a href='{$url}'>
                {$label}
            </a>
        </li>
    ";
}
?>

<div class="col-12 col-lg-3 shop-sidebar">
    <ul class="widgets wigets-shop">
        <li class="widget wiget-shop-category">
            <?php if($childCats):?>
                <h5 class="title">Категории <?=$CatLabel?>:</h5>

            <ul>
                <?php foreach ($childCats as $item):?>
                    <?=drowLeftChildMenuItem($item)?>
                <?php endforeach;?>

            </ul>
            <?php endif;?>
            <?php if($neighborCats):?>
                <h5 class="title">Категории <?=$parentLabel?>:</h5>

            <ul>
                <?php foreach ($neighborCats as $item):?>
                    <?=drowLeftChildMenuItem($item)?>
                <?php endforeach;?>

            </ul>
            <?php endif;?>
        </li>
        <li class="widget wiget-price">
            <h5 class="title">price($)</h5>
            <div id="slider-range"></div>
            <div class="amount-cover">
                <input type="text" id="amount-min">
                <span>&mdash;</span>
                <input type="text" id="amount-max">
            </div>
        </li>
        <li class="widget wiget-gender">
            <h5 class="title">gender</h5>
            <ul>
                <li><p><input type="checkbox"><span>Men’s</span></p></li>
                <li><p><input type="checkbox"><span>Women’s</span></p></li>
                <li><p><input type="checkbox"><span>Kids</span></p></li>
            </ul>
        </li>
        <li class="widget wiget-brand">
            <h5 class="title">brand</h5>
            <ul>
                <li><p><input type="checkbox"><span>Focus</span></p></li>
                <li><p><input type="checkbox"><span>Radon</span></p></li>
                <li><p><input type="checkbox"><span>Cube</span></p></li>
                <li><p><input type="checkbox"><span>Bikes</span></p></li>
                <li><p><input type="checkbox"><span>Cruzee</span></p></li>
            </ul>
        </li>
        <li class="widget wiget-color">
            <h5 class="title">color</h5>
            <ul>
                <li style="background: #f3deca"></li>
                <li style="background: #fa9483"></li>
                <li style="background: #2d4057"></li>
                <li style="background: #4097aa"></li>
                <li style="background: #0ac693"></li>
                <li style="background: #0c5061"></li>
                <li style="background: #f74440"></li>
                <li style="background: #e0e44a"></li>
            </ul>
        </li>
    </ul>
    <a href="#" class="reset-filter-btn">Reset Filters</a>
</div>
