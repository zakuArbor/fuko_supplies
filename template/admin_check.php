<?php
session_start();
if ($_SESSION[user] != 'admin@fukosupplies.comuf.com') {
       header ("Location: http://fukosupplies.comuf.com/admin/non-admin.html");
       die();       
}
?>