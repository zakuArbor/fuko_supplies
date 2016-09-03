<?php
//variables from form
$user = $_POST['username'];
$password = $_POST['password'];

$cpass = md5($password . 'a7967494_fuko'); //encrypts user's password
//echo "$user <br> $cpass"; //just to see values of variables passed

$sql = "SELECT users_login.email, users.user_id, users.first
        FROM users_login
        INNER JOIN users ON users_login.user_id = users.user_id
        WHERE users_login.email =  '$user'
        AND users_login.password =  '$cpass'";

include $_SERVER['DOCUMENT'] . "/home/a8711433/public_html/template/sql.php"; //opens connection to database

$logUser = $results->fetch(PDO::FETCH_ASSOC); //fetches only one* row of the result set into $logUser
//*in this case there should only be one row in result set
//print_r ($logUser); //wanted to see the values in $logUser

//create session
if ($logUser[email] == $user) {
       setcookie ("error", $value , time() - 3600); 
       session_start();
       $_SESSION[user] = $user;
       $_SESSION[pass] = $cpass;
       $_SESSION[id] = $logUser[user_id];
       $_SESSION[name] = $logUser[first];
}
else {
       $value = "Incorrect username or password";
       setcookie ("error", $value, time() + 3600);
}
include $_SERVER['DOCUMENT'] . "/home/a8711433/public_html/index.html";
?>
