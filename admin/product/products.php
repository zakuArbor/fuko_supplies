<?php
$sql = "SELECT products.product_id, products.shop_id, products.name, shops.shop_id, shops.shop_name
        FROM products
        INNER JOIN shops ON products.shop_id = shops.shop_id";
$products = array_prepare_select ($sql, $pdo, []);
?>