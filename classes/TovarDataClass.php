<?php


class TovarDataClass
{
    public $tovar; // array
    public $tovarName;
    public $tovarCacheName;
    public $prod_id;
    public $tovarCat; // array
    public $parentCat;
//    public $relatedVendor;
//    public $relatedForPrice;
//    public $relatedForCat;

    public $limit;


    public function __construct($cacheName){
        $this->tovarCacheName = $cacheName;
        $this->tovarName =  str_replace('_', ' ', $cacheName);
        $this->tovar = $this->getTovar();
        $this->tovarCat = $this->getTovarCat($this->tovar['category_id']);
        $this->parentCat = $this->getParentCat($this->tovarCat['parent_id']);
////        $this->relatedVendor = $this->getRelatedVendor($this->tovar['vendor']);
//        $this->relatedForPrice = $this->getRelatedForPrice($step=0.3);
//        $this->relatedForCat =  $this->getRelatedForCat($this->tovar['category_id']);
//        $this->limit = 8;
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

    public function getParentCat($parentCatId)
    {
        global $db;
        $sql = "SELECT * FROM category WHERE cat_id='".$parentCatId."'";
        $cat= $db->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $cat;
    }

//    related_products

// в отдельном классе
    public function getRelatedVendor($vendor){
        global $db;
        deb($vendor);
        $sql = "SELECT * FROM products WHERE vendor='".$vendor."' ORDER BY RAND() LIMIT $this->limit";
        $relatedProds = $db->query($sql)->fetchALL(PDO::FETCH_ASSOC);

        return $relatedProds;
    }

    public function getRelatedForPrice($step=0.3){
        global $db;

        $min = $this->price*(1-$step);
        $max = $this->price*(1+$step);
        $sql = "SELECT * FROM products WHERE price between '".$min."' AND '".$max."' ORDER BY RAND() LIMIT $this->limit";
        $relatedProds = $db->query($sql)->fetchALL(PDO::FETCH_ASSOC);

        return $relatedProds;
    }

    public function getRelatedForCat($cId){
        global $db;
        $sql = "SELECT * FROM products WHERE category_id='".$cId."' ORDER BY RAND() LIMIT $this->limit";
        $relatedProds = $db->query($sql)->fetchALL(PDO::FETCH_ASSOC);

        return $relatedProds;
    }

}