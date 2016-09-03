<?php
include $_SERVER['DOCUMENT_ROOT'] . "/template/admin_check.php"; 
$option = htmlspecialchars($_POST['option']);

echo "<form action = 'update.php' method = 'post'>
      <input type='hidden' name='password_d' value=''>
      <input type='hidden' name='confirm' value=''>
      ";

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