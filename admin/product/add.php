<?php
include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/admin_check.php"; //checks if user is admin

$sql = "SELECT shop_name, shop_id FROM shops";

include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/sql.php"; //runs sql command
$i = 0;

while($shops = $results->fetch()) {
       $shop_name[] = array('name' => $shops[shop_name], 'id' => $shops[shop_id]); //stores value in an associative array
}
//print_r ($shop_name); //just want to see the values in the array

echo "<form action = 'add_form.php' method = 'post'>
      Name: <input type='text' name='name' placeholder = 'Name' required>
      <p><select name = 'shop'>";

foreach ($shop_name as $shop) {
      echo "<option value='$shop[id]'>$shop[name]</option>";
}

echo "</select></p>
      Image: <input type='text' name='image' placeholder = 'Image Location' required>
      Price: <input type='text' name='price' placeholder = 'Price(&#36;)' required>
      Size: <input type='text' name='size' placeholder = 'Size'> //not required depending on product
      <p>Description</p>
      <textarea rows='10' cols='40' name= 'description' required>Enter Description...</textarea>
      <input type='submit' value='Submit'>";
echo "<p><b>NOTE: DO NOT ADD A $ SIGN IN COST</b></p>";
echo "<p><a href = '/admin/product/products.html'>[Go to Admin User Control]</a></p>";
?>
