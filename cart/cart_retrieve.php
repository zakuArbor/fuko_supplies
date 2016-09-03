<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . "/template/prepare_sql.php");
$i = 0;

foreach ($_SESSION['cart'] as $items) {
       $shop = $_SESSION['cart_shop'][$i];
              $sql = "SELECT * FROM products 
	              INNER JOIN shops ON products.shop_id = shops.shop_id 
		      INNER JOIN $shop ON products.product_id = $shop.product_id 
		      WHERE products.product_id = :items";
              $cart[] = single_return_prepare_select ($sql, $pdo, [':items' => $items]);
              $i+=1;
              
}
/*
for ($i = 0; $i < count($_SESSION['cart']); $i++) {
       echo $_SESSION['cart'][$i] . "s";
              
}*/

?>