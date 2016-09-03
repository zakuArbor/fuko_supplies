<?php
SESSION_START(); //starts PHP SESSION
//VARIABLES BELOW ARE SENT FROM proceed.html
$address = $_POST['address']; 
$postal = $_POST['postal']; 
$phone = $_POST['phone'];
$credit = $_POST['credit'];

/*if (preg_match("/A-Z/",$phone) == 1) { //trying to figure out how to error trap using preg_match()
       $error = "Phone Number must only have numbers";
       echo $error;
}*/

include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/functions.php"; //includes functions.php allowing to use various functions 

//SQL COMMAND BELOW writes user_id, cost, and the date and time bought into table `buy`
$sql = "INSERT INTO buy (user_id, cost, buy_date)
        VALUES
        ($_SESSION[id], $_SESSION[cost], NOW())"; 
exe ($sql); //executes sql query

$sql = "SELECT MAX(buy_id) AS buy_id FROM buy"; //retreives the most recent (the highest number) buy_id created from the table
include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/sql.php"; //runs sql command using query method instead of exec method to retrieve data
$buy_id = $results->fetch(PDO::FETCH_ASSOC); //stores fetched (retrieved data) into $buy_id

//SQL COMMAND BELOW writes shipping information into table `shipping`
$sql = "INSERT INTO shipping (user_id, buy_id, phone, address, postal)
        VALUES
        ($_SESSION[id], $buy_id[buy_id],'$phone', '$address', '$postal')";
exe ($sql); //executes sql query



include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/cart/cart_retrieve.php"; //retrieves data regarding the product
$i = 0; //reset $i value to zero

//foreach loop will write each item from cart into database
foreach ($cart as $carts) {
       if ($_SESSION[cart][$i] != 0) {
       $qty = $_SESSION[qty][$i];
       $sql = "INSERT INTO buy_info (buy_id, name, qty, unit_price)
               VALUES
               ($buy_id[buy_id], '$carts[name]', $qty, $carts[price])";
       exe ($sql);
       }
       $i+=1;
}
unset ($_SESSION[cart]); //empty's cart
echo "<p>Your cart has been processed</p>";
echo "<a href = '/index.html'>[Return to main page]</a>";
?>