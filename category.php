<?php
require './cats.php';
//deb($rootCats);

function doSubcats(){
    global $db;
    $cat_id = $db->query("SELECT * FROM category WHERE label=".$category_label);
    //$cats_res = $db->query("SELECT * FROM category");


        $cats = array();
        while ($cat = $cats_res->fetch(PDO::FETCH_ASSOC))
        {
            $cats[$cat['cat_id']]=$cat;
            $cats[$cat['cat_id']]['prods_count'] = addCountToCats($cat['cat_id']);

        }
}

