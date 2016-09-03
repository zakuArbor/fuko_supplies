<?php
//adding data to table users
$errorMessage = "ERROR: Could not add user into database <br> Please try again";

$sql = "INSERT INTO users 
       (last, first, date_joined) 
        VALUES
       (:last, :name, CURDATE())";
       prepare_non_query ($sql, $pdo, [':last' => $last, ':name' => $name], $errorMessage);


//adding users login and password into database
$sql2 = "INSERT INTO users_login (email, password) VALUES (:email, :cpassword)";
prepare_non_query ($sql2, $pdo, [':email' => $email, ':cpassword' => $cpassword], $errorMessage);
?>	