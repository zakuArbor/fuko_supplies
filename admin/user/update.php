<?php
include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/admin_check.php"; //checks if user has privilege to access file 
include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/functions.php";
$option = $_POST[option];
$value = $_POST[value];
$confirm = $_POST[confirm];

/*******************************************************
Name: users
Does: updates user's first name or last name
Receives: two string and one integer
Returns: nothing
*******************************************************/
function users ($option, $value, $id) {
       include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
       try {
       $sql = "UPDATE users SET $option='$value' WHERE user_id = $id";
       $pdo -> exec($sql);
       }
       catch (PDOException $e) {
              echo "Could not update to database";
              echo "$e";
       }
       echo "Successfully Updated";
}

/*******************************************************
Name: users_info
Does: updates user's email or password (updates users_login table)
Receives: two string and one integer
Returns: nothing
*******************************************************/
function users_info ($option, $value, $id) {
       include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
       try {
              $sql2 = "UPDATE users_login SET $option='$value' WHERE user_id = $id";
              $pdo -> exec($sql2);
              echo "Successfully Updated";
       }
       catch (PDOException $e) {
              echo "Could not update to database";
              echo "$e";
       }
       
}

/*******************************************************
Name: delete
Does: deltes user from table users and users_login
Receives: one integer
Returns: nothing
*******************************************************/
function delete ($id) {
       include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
       try {
              $sql = "DELETE users, users_login FROM users INNER JOIN users_login ON users.user_id = users_login.user_id WHERE users.user_id = $id";
              $pdo ->exec($sql);
              echo "Successfully Deleted User from Database";
       }
       catch (PDOException $e) {
              echo "Could not delete user";
              echo "$e";
       }
}


/************************************************************************************/
if (isset($confirm)) {
       $password_d = $_POST[password_d];
       $cpass = crypt_p($password_d);
       session_start();
       if ($cpass == $_SESSION[pass]) {
              if ($confirm == "true") {
                     delete($_COOKIE[edit_id]);
              }
              elseif ($confirm == "False") {
                      echo "User was not deleted";
              }
       }
       else {
              echo "Incorrect Password";
       }
} 

else {
       if ($option == 'first' || $option == 'last') { //for updating first or last name
              users($option, $value,$_COOKIE[edit_id]);
       }

       elseif ($option == 'email' || $option == 'password') { //updating email or password
              if ($option == 'password') {
                     $decoy = $_POST[password];
                     $decoy2 = $_POST[password2];
                     
                     if ($decoy != $decoy2) {
                            echo "The passwords you have entered do not match<br>Please try again";
                            echo "<a href = '/admin/users.html'>[Go to Admin User Control]</a>";
                            die(); //halt/stop code
                     }
                     else {
                            $value = crypt_p ($decoy);
                     }
               }
       users_info ($option, $value, $_COOKIE[edit_id]);
       }
}
echo "<p><a href = '/admin/user/users.html'>[Go to Admin User Control]</a></p>";

?>