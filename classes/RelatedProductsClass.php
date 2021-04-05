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

    public function __construct($tovar)
    {
        $this->prod_id = $tovar['prod_id'];
        $this->vendor = $tovar['vendor'];
        $this->cat_id = $tovar['category_id'];
        $this->parent_cat_id = $tovar['cat_info']['parent_id'];
        $this->cat_label = $tovar['cat_info']['label'];
        $this->price = $tovar['price'];
        $this->limit = 8;
    }

    public function getRelatedVendor(){
        global $db;

        $sql = "SELECT * FROM products WHERE vendor='".$this->vendor."' ORDER BY RAND() LIMIT $this->limit";
        $relatedProds = $db->query($sql)->fetchALL(PDO::FETCH_ASSOC);

        return $relatedProds;
    }

    public function getRelatedForPrice($step=0.3){
        global $db;

        $min = $this->price*(1-$step);
        $max = $this->price*(1+$step);
        //deb('от '.$min. ' до '. $max);
        //$sql = "SELECT * FROM products WHERE price>'".$min."' AND price<'".$max."'  LIMIT $this->limit ORDER BY RAND()";
        $sql = "SELECT * FROM products WHERE price between '".$min."' AND '".$max."' ORDER BY RAND() LIMIT $this->limit";
        $relatedProds = $db->query($sql)->fetchALL(PDO::FETCH_ASSOC);

        return $relatedProds;
    }

    public function getRelatedForCat(){
        global $db;
        $sql = "SELECT * FROM products WHERE category_id='".$this->cat_id."' ORDER BY RAND() LIMIT $this->limit";
        $relatedProds = $db->query($sql)->fetchALL(PDO::FETCH_ASSOC);

        return $relatedProds;
    }
}