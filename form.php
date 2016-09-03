<?php
//variables from form
$name = $_POST['name'];
$last = $_POST['last'];
$email = $_POST['email']; //email to send
$email2 = $_POST['email2'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$mail = 2; //loop control variable
$error = "default"; //reset value

//variables that stores info needed for mail function
$admin = "From: admin@fukosupplies.comuf.com\n"; //header
$admin .= "MIME-Version: 1.0\r\n"; //needs this to be able to send html
$admin .= "Content-Type: text/html; charset=ISO-8859-1\r\n"; //describes type sending is html
$message = "<html><body>Welcome to Fuko Supplies, where we care about your online experience with us. Thank you for joining the growing online store on the web. Please read our <a href = 'hellogames.net63.net/policy.html'>Policy</a> before you shop</body></html>";

//Error Trapping for reg.html
if ($email != $email2 and $password != $password2) {
       $error = "true";
       include 'reg.html';
       exit(); //stop running PHP script
}
elseif ($password != $password2){
       $error = "true1";
       include 'reg.html';
       exit(); //stop running PHP script     
}
elseif ($email != $email2) {
       $error = "true2";
       include 'reg.html';
       exit(); //stop PHP script
}
include "check_email.php"; //checks if email is already registered
if ($error != "true3") {
     $cpassword = md5($password . 'a7967494_fuko'); //crypting password
     include "template/open.php"; //connects to database
     include "addusers.php"; //adds user to database
     $pdo = null; //disconnects from database


     //mail
     try { //like if statements but is meant for error condition handling
            mail($email, "Registration Completed", $message, $admin); //send mail
            header('Location: mail_sent.html'); //direct users to mail_sent page
     }
     catch (Exception $e) { //never know if email fails to be sent
            echo 'Message: ' .$e->getMessage(); //prints out error message (may be useful in the future when encounter some problems) 
     }
}
?>	