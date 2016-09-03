<?php
include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/admin_check.php"; 
$option = $_POST['option'];

echo "<form action = 'update.php' method = 'post'>";

switch ($option) {
       case "name":
       echo "Name: <input type='text' name='value' placeholder = 'Name' required>";
       break;

       case "image":
       echo "Shop: <input type='text' name='value' placeholder = 'Image Location' required>";
       break; 

       case "price":
       echo "Price: <input type='text' name='value' placeholder = 'Price(&#36;)' required>";
       break; 

       case "size":
       echo "Size: <input type='text' name='value' placeholder = 'Size'>";
       break; 

       case "description":
       echo "<p>Description</p>
             <textarea rows='10' cols='40' name= 'value' required>Enter Description...</textarea>";
       break; 
} 
echo "<input type='hidden' name='option' value='$option'>";
echo "<input type='submit' value='Submit'></form>";
?>