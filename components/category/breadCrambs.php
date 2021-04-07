<?php
?>

<section class="s-header-title">
    <div class="container">
        <h1>
            <?=$catPageData->label?>
        </h1>
        <ul class="breadcrambs">
            <li><a href="<?=$home_url;?>/index.php">Домой</a></li>
            <?php if($catPageData->parentCats){
                $c = $catPageData->parentCats[0]['label'];
                echo "<li><a href='".$home_url."category/".$c."'>{$c}</a></li>";
            }?>

        </ul>
    </div>
</section>
