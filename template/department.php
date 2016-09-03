<?php

$shop = null; //clearing data for $shop needed when department.php is called twice
$sql = "SELECT shop_id, shop_name FROM shops";
$shop = array_prepare_select ($sql, $pdo, []);

//displaying list of departments
echo "<ul>";
foreach ($shop as $shops) {
       echo "<li><a href = '/php/shop.php?id=$shops[shop_id]'>$shops[shop_name]</a></li>";
}
echo "</ul>";

//close connection to database
#$pdo = null;
?>