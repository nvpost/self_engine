<?php
require './cats.php';

//deb($rootCats);

print_r($_GET);

foreach($rootCats as $key => $rootCat){
    drowShowCaseItem($rootCat);
}





function drowShowCaseItem($item){
    global $imgUrl;
    $itemHtml = "<div class='show_case_item'>";
        $itemHtml .= "<div class='show_case_item_header'>";
            $itemHtml .= "<h2>".$item['label']."</h2>";
        $itemHtml ."</div>";

        $itemHtml .= "<div class='show_case_item_img'>";
            $itemHtml .= "<img src='https://picsum.photos/400/200'>";
            //$itemHtml .= "<h2>".$item['img']."</h2>";
        $itemHtml ."</div>";

        $itemHtml .= "<div class='show_case_item_actions'>";
            $itemHtml .= "<a href='./category/".$item['cat_id']."'>Перейти к категории ".$item['cat_id']."</a>";
        $itemHtml ."</div>";

   $itemHtml ."</div>";

    echo $itemHtml;
    //deb($item);
}






?>




<?php
require './debug_line.php';
?>

<script>
    function getImg(){
        let res = await fetch('https://picsum.photos/400/200')
        console.log(res.url)
        return res.url
    }

</script>
