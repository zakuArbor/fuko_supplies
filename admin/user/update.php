<?php
include $_SERVER['DOCUMENT_ROOT'] . "/template/admin_check.php"; //checks if user has privilege to access file 
include $_SERVER['DOCUMENT_ROOT'] . "/template/functions.php";
include $_SERVER['DOCUMENT_ROOT'] . "/template/prepare_sql.php";
$option = htmlspecialchars($_POST['option']);
$value = htmlspecialchars($_POST['value']);
$confirm = htmlspecialchars($_POST['confirm']);

if (empty($confirm)) {
       $confirm = null;
}


/*******************************************************
Name: users
Does: updates user's first name or last name
Receives: two string and one integer
Returns: nothing
*******************************************************/
function users ($option, $value, $id) {
       include $_SERVER['DOCUMENT_ROOT'] . "/template/open.php"; //connects to database
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
       include $_SERVER['DOCUMENT_ROOT'] . "/template/open.php"; //connects to database
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
       include $_SERVER['DOCUMENT_ROOT'] . "/template/open.php"; //connects to database
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
       $password_d = htmlspecialchars($_POST['password_d']);
       $cpass = crypt_p($password_d);
       if (!isset($_SESSION)) {
              session_start();
       }
       if ($cpass == $_SESSION['pass']) {
              if ($confirm == "true") {
                     $sql = "DELETE FROM users WHERE users.user_id = :id;
                             DELETE FROM users_login WHERE users_login.id = :id";
                     prepare_non_query ($sql, $pdo, [':id' => $_COOKIE['edit_id']], 'Could not delete user', "Successfully Deleted User from Database");
                     #delete($_COOKIE['edit_id']);
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
              $sql = "UPDATE users SET $option='$value' WHERE user_id = :id";
              prepare_non_query($sql, $pdo, [':id' => $_COOKIE['edit_id']], "ERROR: Unable to update to database", "Successfully updated to database");
              #users($option, $value,$_COOKIE['edit_id']);
       }

       elseif ($option == 'email' || $option == 'password') { //updating email or password
              if ($option == 'password') {
                     $decoy = htmlspecialchars($_POST['password']);
                     $decoy2 = htmlspecialchars($_POST['password2']);
                     
                     if ($decoy != $decoy2) {
                            echo "The passwords you have entered do not match<br>Please try again";
                            echo "<a href = '/admin/admin.php'>[Go to Admin User Control]</a>";
                            die(); //halt/stop code
                     }
                     else {
                            $value = crypt_p ($decoy);
                     }
               }
       $sql = "UPDATE users_login SET $option=:value WHERE user_id = :id";
       prepare_non_query($sql, $pdo, [':value' => $value, ':id' => $_COOKIE['edit_id']], "ERROR: Unsuccessfully Updated", "Successfully Updated");
       #users_info ($option, $value, $_COOKIE['edit_id']);
       }
}
echo "<p><a href = '/admin/user/index.php'>[Go to Admin User Control]</a></p>";

?>