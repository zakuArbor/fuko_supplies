<?php
echo "<p><h2>$shop_name[shop_name]</h2></p>";
$sql = "SELECT * FROM $shop_name[shop_name]";
include $_SERVER['DOCUMENT'] . "/home/a8711433/public_html/template/sql.php";

//storing result set into an array by field
while ($rows = $results -> fetch()) {
       $product[] = array('id' => $rows['product_id'], 'link' => $rows['image']);
}

include_once $_SERVER['DOCUMENT'] . "/home/a8711433/public_html/template/functions.php";

//display pictures
echo "<div id = 'image'>";
foreach ($product as $image) {
        //echo " &nbsp;<img src = '$image[link]' width = '150' height = '150'> &nbsp;";
        $imageP =  protect($image[link]);
        echo "<a href = 'product.php?product_id=$image[id]&shop=$shop_name[shop_name]'><img src = '$imageP' width = '150' height = '150'></a> &nbsp;"; //not sure if htmlspecialchars() is necessary but for security sakes 
} 
echo "</div>";
?>