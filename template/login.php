<?php
include ($_SERVER['DOCUMENT_ROOT'] . "/template/prepare_sql.php"); //SQL PREPARED EXECUTION FUNCTIONS 

//variables from form
$user = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

$cpass = md5($password . 'a7967494_fuko'); //encrypts user's password
//echo "$user <br> $cpass"; //just to see values of variables passed

$sql = "SELECT users_login.email, users.user_id, users.first
        FROM users_login
        INNER JOIN users ON users_login.user_id = users.user_id
        WHERE users_login.email =  :user
        AND users_login.password =  :cpass";
$logUser = single_return_prepare_select ($sql, $pdo, [':user' => $user, ':cpass' => $cpass]); //fetches only one* row of the result set into $loguser
$logUser = $logUser; 
//*in this case there should only be one row in result set
//print_r ($logUser); //wanted to see the values in $logUser

//create session
if ($logUser['email'] == $user) {
       $value = "Sucessfull login";
       setcookie ("error", $value , time() - 3600); 
       session_start();
       $_SESSION['user'] = $user;
       $_SESSION['pass'] = $cpass;
       $_SESSION['id'] = $logUser['user_id'];
       $_SESSION['name'] = $logUser['first'];
}
else {
       $value = "Incorrect username or password";
       setcookie ("error", $value, time() + 3600);
}
include $_SERVER['DOCUMENT_ROOT'] . "/index.php";
?>
