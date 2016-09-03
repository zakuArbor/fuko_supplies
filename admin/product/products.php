<?php
include_once $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
$sql = "SELECT products.product_id, products.shop_id, products.name, shops.shop_id, shops.shop_name
        FROM products
        INNER JOIN shops ON products.shop_id = shops.shop_id";

include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/sql.php"; //retrieve data from database 

while ($pro = $results ->fetch()) {//fetching result set into $users
       $products[] = array('id' => $pro[product_id], 'shop_id' => $pro[shop_id], 'name' => $pro[name], 'shop' => $pro[shop_name]);       
}
$pdo = null;
?>