<?php
/**
 * Created by PhpStorm.
 * User: n.balashov
 * Date: 29.03.2021
 * Time: 14:43
 */


class CatalogClass
{
    public $parent_id;


    public function __construct($parent_id)
    {
        $this->parent_id = $parent_id;
        //deb($parent_id);
    }

    public function getChildCats(){
        global $db;
        $sql = "SELECT * FROM category WHERE parent_id='".$this->parent_id."'";
        $cat_res = $db->query($sql);
        $childCats = $cat_res->fetchAll(PDO::FETCH_ASSOC);
        deb($childCats);
        return $childCats;
    }

    public function getProducts(){
        if($this->parent_id !=0){
            $prods = $this->checkRootProds();

        }
        deb($prods);

    }

    public function checkRootProds(){
        global $db;
        $sql = "SELECT * FROM products WHERE category_id='".$this->parent_id."' LIMIT 10";
        $prod_res = $db->query($sql);
        $prods = $prod_res->fetchAll(PDO::FETCH_ASSOC);
        return $prods;
    }


}