<?php
/**
 * Created by PhpStorm.
 * User: n.balashov
 * Date: 24.02.2021
 * Time: 15:20
 */

class Category
{

    protected $rootCats;
    public function __construct($db)
    {
        //$this->where = $where;
        $this->db = $db;

    }

    public function getCatsFromId($parent_id=0){
        $conditition = "";

        if(!$parent_id==0){
            $conditition = "WHERE parent_id=".$parent_id;
        }
        //Получаем список категорий
        $cats_res = $this->db->query("SELECT * FROM category".$conditition);

        $cats = array();
        while ($cat = $cats_res->fetch(PDO::FETCH_ASSOC))
        {
            $cats[$cat['cat_id']]=$cat;
            $cats[$cat['cat_id']]['prods_count'] = $this->addCountToCats($cat['cat_id']);

        }

        return $cats;
    }

    function addCountToCats($category_id){
        global $db;
        $prod_count = $db->query("SELECT * FROM products WHERE category_id = $category_id")->rowCount();
        return $prod_count;
    }




}