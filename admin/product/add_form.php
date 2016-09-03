<?php
$name = $_POST[name];
$shop = $_POST[shop]; //shop_id
$image = $_POST[image];
$price = $_POST[price];
$size = $_POST[size];
$description = $_POST[description];

include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/functions.php"; //includes functions.php into file
$sql = "INSERT INTO products (shop_id, name) VALUES ($shop, '$name')"; //writes to table `products` brief overview of product(e.g. product name)
exe ($sql);
/*try {
       include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
       $sql_exec = "INSERT INTO products (shop_id, name) VALUES ($shop, '$name')";
       $pdo -> exec($sql_exec); //execute sql command       
}
catch (PDOException $e) {
       echo "ERROR: Could not add product to database";
       echo "<p>$e</p>";
}
//$pdo = null; //just seeing if there will be connection conflict*/



include "add_table_department.php"; //writes product info in the products respected department table
echo "<a href = '/admin/product/products.html'>[Go Back to Product List]</a>";

?>