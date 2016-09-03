<?php
$id_delete = $_GET['delete'];
SESSION_START();
print_r ($_SESSION[cart]);
echo "<br>";
$_SESSION[cart][$id_delete] = 0;

$i = 0;
/*
for ($i = $id_delete; $i < count($_SESSION['cart']); $i++) { //tried to do bubble sort but reached max memory allocation or something
       $temp = $_SESSION['cart'][$i];
       $_SESSION['cart'][$i] = $_SESSION['cart'][$i+1];
       $_SESSION['cart'][$i+1] = $temp;
      
       $tempNum = $_SESSION['cart'][$i];
       $_SESSION['cart'][$i] = $_SESSION[cart][$i+1];
       $_SESSION['cart'][$i+1] = $tempNum;
  
}*/

print_r ($_SESSION[cart]);
echo "<br>Item has been removed from cart";
echo "<a href = '/cart/cart.html'>[GO BACK TO CART]</a>";

?>