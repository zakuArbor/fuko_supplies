<?php
include $_SERVER['DOCUMENT_ROOT'] . "/template/admin_check.php"; //checks if user is admin
include $_SERVER['DOCUMENT_ROOT'] . "/template/prepare_sql.php"; //checks if user is admin

$sql = "SELECT shop_name, shop_id FROM shops";
$shop_name = array_prepare_select ($sql, $pdo, []);
$i = 0;

//print_r ($shop_name); //just want to see the values in the array

echo "<form action = 'add_form.php' method = 'post'>
      Name: <input type='text' name='name' placeholder = 'Name' required>
      <p><select name = 'shop'>";

foreach ($shop_name as $shop) {
      echo "<option value='$shop[shop_id]'>$shop[shop_name]</option>";
}

echo "</select></p>
      Image: <input type='text' name='image' placeholder = 'Image Location' required>
      Price: <input type='text' name='price' placeholder = 'Price(&#36;)' required>
      Size: <input type='text' name='size' placeholder = 'Size'> //not required depending on product
      <p>Description</p>
      <textarea rows='10' cols='40' name= 'description' required>Enter Description...</textarea>
      <input type='submit' value='Submit'>";
echo "<p><b>NOTE: DO NOT ADD A $ SIGN IN COST</b></p>";
echo "<p><a href = '/admin/product/index.php'>[Go to Admin User Control]</a></p>";
?>
