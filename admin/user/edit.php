<?php
include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/admin_check.php";//checks if user is admin or not
$id = $_GET[id]; //retrieving data from query
$action = $_GET[action]; //retrieving data from query

setcookie ("edit_id", "$id", time()+1500, "/admin/"); //cookie storing the value of the id admin wants to change, expires in 25min

$sql = "SELECT users.first, users.last, users_login.email, users_login.password
        FROM users
        INNER JOIN users_login
        ON users.user_id = users_login.user_id
        WHERE users.user_id = $id";

include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/sql.php";
$user = $results->fetch(PDO::FETCH_ASSOC); //fetches only one* row of the result set into $logUser

include "user_table.php"; //displays a table of the user's info

if ($action == "edit") {
echo "<form action = 'form_edit.php' method = 'post'>
      <p><select name = 'option'>
      <option value = 'first'>First</option>
      <option value = 'last'>Last</option>
      <option value = 'email'>Email</option>
      <option value = 'password'>Password</option>
      </select></p>
      <input type='submit' value='Submit'>
      </form>";
}
elseif ($action == "delete") {
      echo "<p>Are you sure you want to delete $user[first]</p>";
      echo "<form action = 'update.php' method = 'post'>
            <input type = 'radio' name = 'confirm' value = 'true' required><b>Yes</b></input>
            <input type = 'radio' name = 'confirm' value = 'false'><b>No</b></input>
            <p><input type = 'password' name = 'password_d' placeholder = 'Password' required></input></p>
            <input type='submit' value='Submit'>
            </form>";
}
else {
      echo "<p><h1>-ACTION NOT VALID-</h1></p>";
}
include ($_SERVER[DOCUMENT] . '/home/a8711433/public_html/template/footer.php');
?>