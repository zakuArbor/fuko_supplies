<?php
echo "<p><h2>$shop_name[shop_name]</h2></p>";
$sql = "SELECT * FROM $shop_name[shop_name]";

$product = array_prepare_select ($sql, $pdo, []);

include_once $_SERVER['DOCUMENT_ROOT'] . "/template/functions.php";

//display pictures
echo "<div id = 'image'>";
foreach ($product as $image) {
        //echo " &nbsp;<img src = '$image[link]' width = '150' height = '150'> &nbsp;";
	
        $imageP =  protect($image['image']);
        echo "<a href = 'product.php?product_id=$image[product_id]&shop=$shop_name[shop_name]'><img src = '$imageP' width = '150' height = '150'></a> &nbsp;"; //not sure if htmlspecialchars() is necessary but for security sakes 
} 
echo "</div>";
?>