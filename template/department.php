<?php
$sql = "SELECT shop_id, shop_name FROM shops";

include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/sql.php";

$shop = null; //clearing data for $shop needed when department.php is called twice
//storing data from result set
while ($rows = $results->fetch()) {
        $shop[] = array('id' => $rows[shop_id], 'name' => $rows[shop_name]);
}

//displaying list of departments
echo "<ul>";
foreach ($shop as $shops) {
       echo "<li><a href = '/php/shop.php?id=$shops[id]'>$shops[name]</a></li>";
}
echo "</ul>";

//close connection to database
$pdo = null;


/*****Trying to see if resetting values will solve ERROR PHP-1
//reset values
$results = null;
$vars[] = array ("$sql", "$rows", "$shop", "$shops");
for ($i = 0; $i <4; $i++) {
       $vars[$i] = null;
}*/
?>