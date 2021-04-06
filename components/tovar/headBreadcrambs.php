<?php

if(isset($tovar['cat_info']['parent_id'])&&$tovar['cat_info']['parent_id']!='0'){
    $tovar['cat_info']['parent'] = getParentCats($tovar['cat_info']['parent_id']);
}

function getParentCats($pid){
    global $db;

    $sql = "SELECT * FROM category WHERE cat_id='".$pid."'";
    $cat= $db->query($sql)->fetch(PDO::FETCH_ASSOC);

    return $cat;
}

//deb($tovar);
?>

<section class="s-header-title">
    <div class="container">
        <h1>
            <?=$tovar['name']?>
        </h1>
        <ul class="breadcrambs">
            <li><a href="<?=$home_url;?>index.php">Домой</a></li>
            <?php
                if(isset($tovar['cat_info']['parent'])){
                    $p_cat = $tovar['cat_info']['parent'];
                    ?>
                    <li>
                        <?php $category_link = $home_url."category/".str_replace([' ', '.'], ['_', ''], $p_cat['label'])?>
                        <a href="<?=$category_link?>"><?=$p_cat['label']?></a>

                    </li>
                    <?php
                }
            ?>
            <li>
                <?php $category_link = $home_url."category/".str_replace([' ', '.'], ['_', ''], $tovar['cat_info']['label'])?>
                <a href="<?=$category_link?>"><?=$tovar['cat_info']['label']?></a>

            </li>
            <li><?=$tovar['name']?></li>
        </ul>
    </div>
</section>
