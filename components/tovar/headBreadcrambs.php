<?php

?>

<section class="s-header-title">
    <div class="container">
        <h1>
            <?=$name?>
        </h1>
        <ul class="breadcrambs">
            <li><a href="<?=$home_url;?>index.php">Домой</a></li>
            <?php

                if($p_cat){
                    ?>
                    <li>
                        <?php $category_link = $home_url."category/".str_replace([' ', '.'], ['_', ''], $p_cat['label'])?>
                        <a href="<?=$category_link?>"><?=$p_cat['label']?></a>

                    </li>
                    <?php
                }
            ?>
            <li>
                <?php $category_link = $home_url."category/".str_replace([' ', '.'], ['_', ''], $current_cat['label'])?>
                <a href="<?=$category_link?>"><?=$current_cat['label']?></a>

            </li>
            <li><?=$name?></li>
        </ul>
    </div>
</section>
