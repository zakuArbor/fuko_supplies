<?php
$shop = htmlspecialchars($_GET['shop']); //data from query
$title = 'Admin ' . $shop;

include $_SERVER['DOCUMENT_ROOT'] . "/admin/product/head.php"; //a template containing html <head>

//SQL COMMAND BELOW retrieves data of all the products in a specified department
$sql = "SELECT products.product_id, products.shop_id, products.name, shops.shop_id, shops.shop_name
        FROM products
        INNER JOIN shops ON products.shop_id = shops.shop_id WHERE shops.shop_name = '$shop'";

$products = array_prepare_select ($sql, $pdo, [':shop' => $shop]);

echo "<h2>$shop</h2>";
include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/product/draw_table_products.php"; //places retrieved data into a table
echo "<p><a href = '/admin/product/products.html'>[Go to Admin Products Center]</a></p>";
include ($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');
echo "</body></html>";
?>