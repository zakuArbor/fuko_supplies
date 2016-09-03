<?php
if (!isset($_SESSION)) { 
	session_start();
}
if ($_SESSION['user'] != 'admin@fukosupplies.comuf.com') {
       header ("Location: /admin/non-admin.php");
       die();       
}
?>