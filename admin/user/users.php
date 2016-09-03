<?php
$sql = "SELECT * FROM users";
$users = array_prepare_select ($sql, $pdo, []);
?>