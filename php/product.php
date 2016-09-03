<?php
$id = htmlspecialchars($_GET['product_id']); //product_id from query
$shop = htmlspecialchars(($_GET['shop']); //shop_name from query
include $_SERVER[DOCUMENT] . "prepare_sql.php"; //php prepared functions
 


$sql = "SELECT products.name, :image, :price, :size, :description 
        FROM products INNER JOIN $shop ON products.product_id = $shop.product_id
        WHERE products.product_id = :id";
$product = single_return_prepare_select ($sql, $pdo, [':image' => "shop.image", ':price' => "$shop.price", ':size' => "$shop.size",
                                                      'description' => "$shop_name.description", 'id' => $id]);

echo "<html>
      <head>
      <title>Fuko Supplies</title>
      <link href='/favicon.ico' rel='icon' type='image/x-icon' />
      <link href='styles1.css' rel='stylesheet' type='text/css'>
      </head>
      <body>
      <div id = header></div>
      <div id = nav>";

include $_SERVER[DOCUMENT] . '/template/nav.php'; 
echo "</div>";
include "product_display.php";
echo "<div id = sidebar>";
include $_SERVER['DOCUMENT'] . "/template/sidebar.php";
echo "</div>
      <div id = 'footer'>";
include $_SERVER['DOCUMENT'] . "/template/footer.php";
echo "</div>
      </body>
      </html>";	

?>