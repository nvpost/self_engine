<?php
/**
 * Created by PhpStorm.
 * User: n.balashov
 * Date: 05.04.2021
 * Time: 16:20
 */

class RelatedProductsClass
{
    public $prod_id;
    public $vendor;
    public $cat_id;
    public $parent_cat_id;
    public $cat_label;
    public $price;
    public $limit;

    public function __construct($tovar, $parent_cat_id, $cat_label)
    {
        $this->prod_id = $tovar['prod_id'];
        $this->vendor = $tovar['vendor'];
        $this->cat_id = $tovar['category_id'];
        $this->parent_cat_id = $parent_cat_id;
        $this->cat_label = $cat_label;
        $this->price = $tovar['price'];
        $this->limit = 8;
    }



    public function getRelatedVendor(){
        $sql = "SELECT * FROM products WHERE vendor='".$this->vendor."' ORDER BY RAND() LIMIT $this->limit";
        $relatedVendor = querySQLandImg($sql,true,true);
        //deb($relatedVendor);
        return $relatedVendor;
    }

    public function getRelatedForPrice($step=0.3){
        $min = $this->price*(1-$step);
        $max = $this->price*(1+$step);
        $sql = "SELECT * FROM products WHERE price between '".$min."' AND '".$max."' ORDER BY RAND() LIMIT $this->limit";

        $relatedProds = querySQLandImg($sql,true,true);

        return $relatedProds;
    }

    public function getRelatedForCat(){
        $sql = "SELECT * FROM products WHERE category_id='".$this->cat_id."' ORDER BY RAND() LIMIT $this->limit";
        $relatedProds = querySQLandImg($sql,true,true);
        return $relatedProds;
    }
}