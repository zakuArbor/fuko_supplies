<?php
$shop_id = $_GET[id]; //data from query
$sql = "SELECT shop_name FROM shops WHERE shop_id = $shop_id";
include $_SERVER['DOCUMENT'] . "/home/a8711433/public_html/template/sql.php";
$shop_name = $results -> fetch(PDO::FETCH_ASSOC);
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
include $_SERVER['DOCUMENT'] . "/home/a8711433/public_html/template/nav.php";
echo "</div>
      <div id = 'main'>";

include $_SERVER['DOCUMENT'] . "/home/a8711433/public_html/php/products.php";
echo "</div>
      <div id = 'sidebar'>";
include $_SERVER['DOCUMENT'] . "/home/a8711433/public_html/template/sidebar.php";
echo "</div>
      <div id = 'footer'>";
include $_SERVER['DOCUMENT'] . "/home/a8711433/public_html/template/footer.php";
echo "</div>
      </body>
      </html>";	
?>

