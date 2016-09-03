<?php
session_start();
session_destroy(); //destroys all session variables
$link = "/index.php"; 
//header ("Location: /index.html"); //does not log out admin
header ("Location: $link");
//header ("Location: $_SERVER[DOCUMENT] . $link"); //try to use direct path but failed
?>
