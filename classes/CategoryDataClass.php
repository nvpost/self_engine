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
    public $prodsCount;
    public $catUrl;

//    Пагинация - перенести в отдельный класс
    public $paginationOffset;
    public $paginationPages;
    public $paginationLimit;
    public $pageNumber;

    public function __construct($cacheName)
    {
        $this->DoUrlAndPage($cacheName);

        $this->categoryData = $this->getCategoryPageCat();
        $this->cat_id = $this->categoryData['cat_id'];
        $this->parent_id = $this->categoryData['parent_id'];
        $this->childCats = $this->getChildCats();
        $this->parentCats = $this->getParentCats();
        $this->neighbor = $this->getNeighborCats();




        $this->paginationOffset = 9;
        $this->paginationLimit = 9;
        $this->prodsCount = $this->getProdsCount($this->categoryData['cat_id']);
        $this->paginationPages = $this->getPaginationPages();


        $this->prods = $this->getProds($this->categoryData['cat_id']);
    }

    function DoUrlAndPage($cacheName){
        if(strpos($cacheName, '/')){
            $urlData = explode('/', $cacheName);
            $this->label = str_replace('_', ' ', $urlData[0]);
            $this->pageNumber = $urlData[1];
            $this->catUrl = $urlData[0];
        }else{
            $this->label = str_replace('_', ' ', $cacheName);
            $this->pageNumber = 0;
            $this->catUrl = $cacheName;
        }
        //deb($cacheName);
        //deb('ppp - '.$this->pageNumber);
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

    public function getProdsCount($cId){
      global $db;
      $sql = "SELECT count(*) FROM products WHERE category_id='".$cId."'";
      $prodsCount = $db->query($sql)->fetchColumn();
      return $prodsCount;
    }

    // сделать с пагинацией + проверка ссылки!
    public function getPaginationPages(){
        return ceil($this->prodsCount/$this->paginationLimit);
    }
    public function getProds($cId)
    {
        $paginationLimit = $this->paginationLimit;
        $offset = $this->pageNumber*$paginationLimit;
//        deb('offset - '.$offset);

        $sql = "SELECT * FROM products WHERE category_id='".$cId."' LIMIT {$paginationLimit} OFFSET {$offset}";
        $prods = querySQLandImg($sql, true, true);

        return $prods;
    }

}