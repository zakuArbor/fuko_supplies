<?php
session_start();
session_destroy(); //destroys all session variables
$link = "/home/a8711433/public_html/index.html"; 
//header ("Location: /index.html"); //does not log out admin
header ("Location: http://hellogames.net63.net");
//header ("Location: $_SERVER[DOCUMENT] . $link"); //try to use direct path but failed
?>
