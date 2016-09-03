<?php
include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/functions.php"; //includes functions.php into application

echo "<div id = main>
      <div id = 'img'><img src = '$product[image]'></div>
      <div id = price><p><b>Price:</b></p>$";

echo number_format($product[price], 2); //display float in two decimal places
echo "</div>
      <div id = size><b>Size:</b><br>";
protect_echo($product[size]);
echo "</div>
      <div id = cart><form action = '/cart/cart.php' method = 'get'>
                     <select name = 'qty'>
                     <option value='1'>1</option>
                     <option value='5'>5</option>
                     <option value='10'>10</option>
                     <option value='25'>20</option>
                     </select>
                     <input type = 'hidden' name = 'id' value = $id>
                     <input type = 'hidden' name = 'shop' value = $shop>
                     <input type = 'hidden' name = 'action' value = 'buy'>
                     <img src = '/images/icon/cart.png'>
                     <input type = 'submit' value = 'ADD TO CART'>
      <!-- <a href = '/cart/cart.php?action=buy&id=$id&shop=$shop'><h3>ADD TO CART<img src = '/images/icon/cart.png'></h3></a>--></div> 
      <div id = desc><p><h2>";
if ($product[name] == "&#50864;&#47532; &#49353;&#51333;&#51060;") { //to display a Korean product name
       echo "$product[name]";
}
else {
       protect_echo ($product[name]);
}
echo "</h2></p><p>";
protect_echo($product[description]);
echo "</p></div>
      </div>";
?>	