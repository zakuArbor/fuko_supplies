<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . "/template/prepare_sql.php");
$shop_id = htmlspecialchars($_GET['id']); //data from query
$sql = "SELECT shop_name FROM shops WHERE shop_id = :shop_id";
$shop_name = single_return_prepare_select ($sql, $pdo, [':shop_id' => $shop_id]);
echo "<html>
      <head>
      <title>$shop_name[shop_name]</title>
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

include $_SERVER['DOCUMENT_ROOT'] . "/php/products.php";
echo "</div>
      <div id = 'sidebar'>";
include $_SERVER['DOCUMENT_ROOT'] . "/template/sidebar.php";
echo "</div>
      <div id = 'footer'>";
include $_SERVER['DOCUMENT_ROOT'] . "/template/footer.php";
echo "</div>
      </body>
      </html>";	
?>

