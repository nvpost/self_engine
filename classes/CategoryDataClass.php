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

    public function __construct($label)
    {
        $this->label = $label;

        $this->categoryData = $this->getCategoryPageCat();
        $this->cat_id = $this->categoryData['cat_id'];
        $this->parent_id = $this->categoryData['parent_id'];
        $this->childCats = $this->getChildCats();
        $this->parentCats = $this->getParentCats();
        $this->neighbor = $this->getNeighborCats();
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
        global $db;
        $cId = $this->categoryData['cat_id'];
        $sql = "SELECT * FROM category WHERE parent_id='".$cId."'";
        $childCats = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $childCats;
    }

    function getParentCats(){
        global $db;
        if($this->categoryData['parent_id']){
            $sql = "SELECT * FROM category WHERE cat_id='".$this->parent_id."'";
            $res_parentCats = $db->query($sql);
            if($res_parentCats){
                $parentCats = $res_parentCats->fetchAll(PDO::FETCH_ASSOC);
            }
            return $parentCats;
        }
    }
    public function getNeighborCats(){
        global $db;
        $sql = "SELECT * FROM category WHERE parent_id='".$this->parent_id."'";
        $childCats = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $childCats;
    }

}