<?php
//adding data to table users
try { 
      $sql = "INSERT INTO users 
             (last, first, date_joined) 
              VALUES
             ('$last', '$name', CURDATE())";
              $pdo -> exec($sql); //exec is a method in PDO object that is able to run SQL commands
     }
catch (PDOException $e) { //stores exception in $e
      echo "ERROR: Could not add user into database <br> Please try again";
      echo "$e";
      }

//adding users login and password into database
$sql2 = "INSERT INTO users_login (email, password) VALUES ('$email', '$cpassword')";
try {
       $pdo -> exec($sql2); //exec is a method in PDO object that is able to run SQL commands 
      }
catch (PDOException $e) { //stores exception in $e
      echo "ERROR: Could not add user into database <br> Please try again";
      echo "$e";
      }
?>	