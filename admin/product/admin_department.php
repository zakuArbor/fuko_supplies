<?php
$shop = $_GET[shop]; //data from query
$title = 'Admin ' . $shop;

//SQL COMMAND BELOW retrieves data of all the products in a specified department
$sql = "SELECT products.product_id, products.shop_id, products.name, shops.shop_id, shops.shop_name
        FROM products
        INNER JOIN shops ON products.shop_id = shops.shop_id WHERE shops.shop_name = '$shop'";

include_once $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/sql.php"; //connects to database

while ($pro = $results ->fetch()) {//fetching result set into $users
       $products[] = array('id' => $pro[product_id], 'shop_id' => $pro[shop_id], 'name' => $pro[name], 'shop' => $pro[shop_name]);       
}

include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/admin/product/head.php"; //a template containing html <head>
echo "<h2>$shop</h2>";
include_once $_SERVER[DOCUMENT] . "/home/a8711433/public_html/admin/product/draw_table_products.php"; //places retrieved data into a table
echo "<p><a href = '/admin/product/products.html'>[Go to Admin Products Center]</a></p>";
include ($_SERVER[DOCUMENT] . '/home/a8711433/public_html/template/footer.php');
echo "</body></html>";
?>