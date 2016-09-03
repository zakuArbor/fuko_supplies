<?php
$t = 0; //counter
if (isset($_SESSION['cart'])) {
foreach ($_SESSION['cart'] as $cart_number) {
      if ($cart_number != 0) { 
      $t += 1;
      }
}
}
?>