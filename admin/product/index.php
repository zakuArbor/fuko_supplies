<?php
$title = "ADMIN PRODUCT MANAGEMENT";
include $_SERVER['DOCUMENT_ROOT'] . "/template/admin_check.php"; //checks if user is admin
include $_SERVER['DOCUMENT_ROOT'] . "/admin/product/head.php"; //a template containing html <head>

echo "<body>
      <p><h2>Products</h2></p>";

include $_SERVER['DOCUMENT_ROOT'] . "/admin/product/products.php"; //retrieves all data into an array
include $_SERVER['DOCUMENT_ROOT'] . "/admin/product/draw_table_products.php"; //displays all data into a table

echo "<p><a href = '/admin/admin.php'>[Go to Admin Control Center]</a></p>";
include ($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');
?>
</body>
</html>	