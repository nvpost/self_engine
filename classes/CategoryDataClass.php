<?php
/**
 * Created by PhpStorm.
 * User: n.balashov
 * Date: 07.04.2021
 * Time: 14:05
 */

class CategoryDataClass
{
    public $cat_id;
    public $label;
    public $parent_id;
    public $categoryData; //array
    public $childCats; //array
    public $parentCats; //array
    public $neighbor; //array
    public $prods; //array

    public function __construct($label)
    {
        $this->label = $label;

        $this->categoryData = $this->getCategoryPageCat();
        $this->cat_id = $this->categoryData['cat_id'];
        $this->parent_id = $this->categoryData['parent_id'];
        $this->childCats = $this->getChildCats();
        $this->parentCats = $this->getParentCats();
        $this->neighbor = $this->getNeighborCats();
        $this->prods = $this->getProds($this->categoryData['cat_id']);
    }

    function getCategoryPageCat(){
        global $db;
        $sql = "SELECT * FROM category WHERE label='".$this->label."'";
        $cat_res = $db->query($sql);
        if($cat_res){
            $cat = $cat_res->fetch(PDO::FETCH_ASSOC);
        }
        //deb($cat);
        return $cat;
        //$this->CategoryPageCat;
    }

    function getChildCats(){
        $cId = $this->categoryData['cat_id'];
        $sql = "SELECT * FROM category WHERE parent_id='".$cId."'";
        $childCats = querySQLandImg($sql, true, false);
        return $childCats;
    }

    function getParentCats(){
        if($this->categoryData['parent_id']){
            $sql = "SELECT * FROM category WHERE cat_id='".$this->parent_id."'";
            $parentCats = querySQLandImg($sql, true, false);
            return $parentCats;
        }
    }
    public function getNeighborCats(){
        $sql = "SELECT * FROM category WHERE parent_id='".$this->parent_id."'";
        $neighborCats = querySQLandImg($sql, true, false);

        return $neighborCats;
    }

    // сделать с пагинацией + проверка ссылки!
    public function getProds($cId)
    {
        $sql = "SELECT * FROM products WHERE category_id='".$cId."'";
        $prods = querySQLandImg($sql, true, true);

        return $prods;
    }

}