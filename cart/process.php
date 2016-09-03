<?php
SESSION_START(); //starts PHP SESSION
//VARIABLES BELOW ARE SENT FROM proceed.html
$address = htmlspecialchars($_POST['address']); 
$postal = htmlspecialchars($_POST['postal']); 
$phone = htmlspecialchars($_POST['phone']);
$credit = htmlspecialchars($_POST['credit']);

/*if (preg_match("/A-Z/",$phone) == 1) { //trying to figure out how to error trap using preg_match()
       $error = "Phone Number must only have numbers";
       echo $error;
}*/

include $_SERVER['DOCUMENT_ROOT'] . "/template/functions.php"; //includes functions.php allowing to use various functions 
include $_SERVER['DOCUMENT_ROOT'] . "/template/prepare_sql.php"; 

//SQL COMMAND BELOW writes user_id, cost, and the date and time bought into table `buy`
$sql = "INSERT INTO buy (user_id, cost, buy_date)
        VALUES
        (:id, :cost, NOW())"; 
prepare_non_query ($sql, $pdo, [':id' => $_SESSION['id'], ':cost' => $_SESSION['cost']]);

$sql = "SELECT MAX(buy_id) AS buy_id FROM buy"; //retreives the most recent (the highest number) buy_id created from the table
$buy_id = single_return_prepare_select ($sql, $pdo, []);

//SQL COMMAND BELOW writes shipping information into table `shipping`
$sql = "INSERT INTO shipping (user_id, buy_id, phone, address, postal)
        VALUES
        (:id, :buy_id, :phone, :address, :postal)";
prepare_non_query ($sql, $pdo, [':id' => $_SESSION['id'], ':buy_id' => $buy_id['buy_id'], ':phone' => $phone, ':address' => $address, ':postal' => $postal]);



include $_SERVER['DOCUMENT_ROOT'] . "/cart/cart_retrieve.php"; //retrieves data regarding the product
$i = 0; //reset $i value to zero

//foreach loop will write each item from cart into database
foreach ($cart as $carts) {
       if ($_SESSION['cart'][$i] != 0) {
       $qty = $_SESSION['qty'][$i];
       $sql = "INSERT INTO buy_info (buy_id, name, qty, unit_price)
               VALUES
               (:buy_id, :name, :qty, :price)";
       prepare_non_query ($sql, $pdo, [':buy_id' => $buy_id['buy_id'], ':name' => $carts['name'], ':qty' => $qty, ':price' => $carts['price']]);
       }
       $i+=1;
}
unset ($_SESSION['cart']); //empty's cart
echo "<p>Your cart has been processed</p>";
echo "<a href = '/index.php'>[Return to main page]</a>";
?>