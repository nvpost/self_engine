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


    public function __construct($parent_id=0)
    {
        $this->parent_id = $parent_id;
        //deb($parent_id);
    }

    public function getProducts($ids, $limit=10)
    {
        global $db;
        $sql = "SELECT * FROM products WHERE category_id IN(".$ids.") LIMIT $limit";
        $prods_res = $db->query($sql);
        $prods = $prods_res->fetchAll(PDO::FETCH_ASSOC);
        //deb($prods);
        foreach ($prods as $k => $p){
            $prods[$k]['img']=addImgToProd($p['prod_id'], true);
        }
        return $prods;
    }

    public function getChildCats(){
        global $db;
        $sql = "SELECT * FROM category WHERE parent_id='".$this->parent_id."'";
        $cat_res = $db->query($sql);
        $childCats = $cat_res->fetchAll(PDO::FETCH_ASSOC);
        //deb($childCats);
        return $childCats;
    }


    public function checkRootProds(){
        global $db;
        $sql = "SELECT * FROM products WHERE category_id='".$this->parent_id."' LIMIT 10";
        $prod_res = $db->query($sql);
        $prods = $prod_res->fetchAll(PDO::FETCH_ASSOC);
        return $prods;
    }


    function checkFlatMenuCache($cacheName){
        // Название кеша - каталог с количеством
        $dataCache = new DataCache($cacheName);
        $getDataFromCache = $dataCache->initCacheData();

        if ($getDataFromCache) {
            $cats = $dataCache->getCacheData();
        } else {
            $cats = $this->getFlatArr();
            $dataCache->updateCacheData($cats);
        }
        return $cats;
    }

    function checkCatalogData($cacheName, $limit=10){
        // Название кеша - каталог с количеством
        $dataCache = new DataCache($cacheName);
        $getDataFromCache = $dataCache->initCacheData();

        if ($getDataFromCache) {
            $data = $dataCache->getCacheData();
        } else {
            $data = $this->getMainPageCatalog($limit);
            $dataCache->updateCacheData($data);
        }
        return $data;
    }

    function getMainPageCatalog($limit){
        $flatChildArr = $this->checkFlatMenuCache('flatChildMenuItems');
        $prodsArr=array();
        foreach ($flatChildArr as $k => $catalogRow){
            $c = new CatalogClass;
            $prods = $c->getProducts($catalogRow['flat_child'], $limit);
            $prodsArr[$k]['label'] = $catalogRow['label'];
            $prodsArr[$k]['prods'] = $prods;

        }
        return $prodsArr;
    }


    function getFlatArr(){
        global $menuTree;
        $flatChildArr=array();
        foreach ($menuTree as $k => $rm){
            $current_childs = $rm['sub_menu'];

            $current_childs_arr = array_map(array('CatalogClass', 'current_childs_arr_foo'), $current_childs);

            array_unshift($current_childs_arr, $rm['cat_id']);

            $current_childs_str = implode(', ',$current_childs_arr);

            $flatChildArr[$k]['cat_id'] = $rm['cat_id'];
            $flatChildArr[$k]['label'] = $rm['label'];
            $flatChildArr[$k]['flat_child'] = $current_childs_str;
        }
        return $flatChildArr;
    }
    function current_childs_arr_foo($c){
        return $c['cat_id'];
    }




}