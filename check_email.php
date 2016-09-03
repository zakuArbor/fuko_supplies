<?php
$sql = "SELECT email FROM users_login"; //retrieve all emails registered in database
include "template/sql.php";

foreach ($results as $emails) {
       if ($emails[email] == $email) {
            $error = "true3";
            include 'reg.html';
            exit(); //stops all code in file and the file where it is included
       }    
}

?>