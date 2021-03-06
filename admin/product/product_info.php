<?php
include $_SERVER['DOCUMENT_ROOT'] . "/template/admin_check.php";//checks if user is admin or not
$id = htmlspecialchars($_GET['id']); //retrieved data from query (product_id)
$action = htmlspecialchars($_GET['action']); //retrieved data from query
$shop = htmlspecialchars($_GET['shop']); //retrieved from query
 
setcookie ("edit_id", "$id", time()+1500, "/admin/"); //cookie storing the value of the id admin wants to change, expires in 25min
setcookie ("shop", "$shop", time()+1500, "/admin/"); //cookie storing department name of product the admin wants to change

$title = "Product Info";
include $_SERVER['DOCUMENT_ROOT'] . "/admin/product/head.php";

//SQL COMMAND BELOW retrieves all product_info (e.g. price and size) for a specific product
$sql = "SELECT products.product_id, products.name, shops.shop_name, $shop.image, $shop.price, $shop.size, $shop.description 
        FROM products 
        INNER JOIN shops ON products.shop_id = shops.shop_id
        INNER JOIN $shop ON products.product_id = $shop.product_id
        WHERE products.product_id = :id";
$product = single_return_prepare_select ($sql, $pdo, [':id' => $id]);

include $_SERVER['DOCUMENT_ROOT'] . "/admin/product/draw_table_product.php";
include $_SERVER['DOCUMENT_ROOT'] . "/admin/product/p_edit.php";
?>