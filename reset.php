<?php
include "template/prepare_sql.php"; //SQL Prepare Function Execution
include "template/functions.php"; 

$email = protect($_POST['email']);

$sql = "SELECT email from users_login WHERE email = :email";
$result = single_return_prepare_select ($sql, $pdo, [':email' => $email]);


$random = rand (1, 50); //random number generator for new password

if (strncmp ($email, $result['email'], strlen($email)) == 0) {
       $cpassword = md5($random . 'a7967494_fuko'); //new password
       $cpass = md5($cpassword . 'a7967494_fuko'); //crypting password
       //mail
       //variables that stores info needed for mail function
       $admin = "From: admin@fukosupplies.comuf.com\n"; //header
       $admin .= "MIME-Version: 1.0\r\n"; //needs this to be able to send html
       $admin .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; //describes type sending is html
       $message = "<html><body><p>Your Password has been resetted</p><p>Your new password is $cpassword</p></body></html>";
       mail($email, "Password Reset", $message, $admin); //send mail
       
       $sql = "UPDATE users_login SET password = '$cpass' WHERE email = '$email'";
       exe ($sql);
       header('Location: mail_sent.php'); //direct users to mail_sent page
}
else {
       echo "The username inputted does not match in database";
}
?>
     