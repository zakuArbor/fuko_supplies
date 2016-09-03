<?php
#include '/template/prepare_sql.php';
$sql = "SELECT email FROM users_login WHERE email = :email"; //retrieve all emails registered in database
$check_email = single_return_prepare_select($sql, $pdo, ['email' => $email], '');
if ($check_email != null) {
	$error = "true3";
    include 'reg.php';        
    exit(); //stops all code in file and the file where it is included
}
?>