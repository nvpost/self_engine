<?php


class TovarDataClass
{
    public $tovar; // array
    public $tovarName;
    public $tovarCacheName;
    public $prod_id;
    public $tovarCat; // array


    public function __construct($cacheName){
        $this->tovarCacheName = $cacheName;
        $this->tovarName =  str_replace('_', ' ', $cacheName);
        $this->tovar = $this->getTovar();
        $this->tovarCat = $this->getTovarCat($this->tovar['category_id']);
    }


    public function getTovar(){
        global $db;
        $sql = "SELECT * FROM products WHERE name='".$this->tovarName."'";
        $res_prod = $db->query($sql);
        if($res_prod){
            $prod = $res_prod->fetch(PDO::FETCH_ASSOC);
            $this->prod_id = $prod['prod_id'];
            $prod['img'] = $this->getTovarImg($this->prod_id);
            return $prod;
        }

    }

    public function getTovarImg($prod_id){
        global $db;
        $sql = "SELECT * FROM img WHERE prod_id='".$prod_id."'";
        $res_img = $db->query($sql);
        if($res_img){
            $img = $res_img->fetchAll(PDO::FETCH_ASSOC);
            return $img;
        }
    }

    function getTovarCat($catId){
        global $db;
        $sql = "SELECT * FROM category WHERE cat_id='".$catId."'";
        $cat= $db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $cat;
    }
}