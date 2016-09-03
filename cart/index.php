<?php
SESSION_START();
echo "<html>
      <head>
      <title>$_SESSION[name]'s cart</title>
      <link href='favicon.ico' rel='icon' type='image/x-icon' />
      <link href='/styles.css' rel='stylesheet' type='text/css'> 
      </head>";

echo "<body>
      <div id = 'header'>
      </div>
      <div id = 'nav'>";
include $_SERVER['DOCUMENT_ROOT'] . "/template/nav.php"; 
echo "</div>
      <div id = 'main'>";
include $_SERVER['DOCUMENT_ROOT'] . "/cart/cart_number.php"; //counts the number of items in cart that has a value not zero
include $_SERVER['DOCUMENT_ROOT'] . "/template/open.php"; //opens connection to database

echo "<img src = '/images/icon/cart.png'>There are currently <b> " . $t . "</b> items in your cart";

if (isset($_SESSION['cart'])) {
       include $_SERVER['DOCUMENT_ROOT'] . "/cart/cart_retrieve.php";
       include $_SERVER['DOCUMENT_ROOT'] . "/cart/draw_table_cart.php";
}
echo "</div>
      <div id = 'sidebar'>";
include $_SERVER['DOCUMENT_ROOT'] . "/template/sidebar.php"; 
echo "</div>
      <div id = 'footer'>";
include ($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); 
?>
</div>
</body>
</html>