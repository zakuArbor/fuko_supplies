<?php
$name = htmlspecialchars($_POST['name']);
$shop = htmlspecialchars($_POST['shop']); //shop_id
$image = htmlspecialchars($_POST['image']);
$price = htmlspecialchars($_POST['price']);
$size = htmlspecialchars($_POST['size']);
$description = htmlspecialchars($_POST['description']);

include $_SERVER['DOCUMENT_ROOT'] . "/template/prepare_sql.php"; //includes functions.php into file
$sql = "INSERT INTO products (shop_id, name) VALUES (:shop, :name)"; //writes to table `products` brief overview of product(e.g. product name)
prepare_non_query($sql, $pdo, [':shop' => $shop, ':name' => $name]);


include "add_table_department.php"; //writes product info in the products respected department table
echo "<a href = '/admin/product/index.php'>[Go Back to Product List]</a>";

?>