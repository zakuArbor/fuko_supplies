<?php
$sql = "SELECT products.product_id, shops.shop_name FROM products INNER JOIN shops ON products.shop_id = shops.shop_id WHERE name = '$name'";
include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/sql.php"; 
while ($info = $results->fetch()) {
       $data = array('id' => $info[product_id], 'shop_name' => $info[shop_name]);
}

try {
       include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
       $sql_exec2 = "INSERT INTO $data[shop_name] (product_id, image, price, size, description) VALUES ($data[id], '$image', $price, '$size', '$description')";
       $pdo -> exec($sql_exec2);
       echo "<p>Successfully Updated</p>";
}
catch (PDOException $e) {
       echo "ERROR: Could not add product to database";
       echo "<p>$e</p>";
}
?>