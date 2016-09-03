<?php
$sql = "SELECT products.product_id, shops.shop_name FROM products INNER JOIN shops ON products.shop_id = shops.shop_id WHERE name = :name";
$data = single_return_prepare_select ($sql, $pdo, [':name' => $name]);

$sql = "INSERT INTO $data[shop_name] (product_id, image, price, size, description) VALUES (:product_id, :image, :price, :size, :description)";
prepare_non_query($sql, $pdo, [':product_id' => $data['product_id'], ':image' => $image, ':price' => $price, ':size' => $size, ':description' => $description]);
echo "<p>Successfully Updated</p>";

?>