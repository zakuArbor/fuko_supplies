<?php
include_once $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
$sql = "SELECT * FROM users";

include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/sql.php"; //retrieves data from database into an object $result

while ($users1 = $results ->fetch()) {//fetching result set into $users
       $users[] = array('id' => $users1[user_id], 'last' => $users1[last], 'first' => $users1[first]); //stroing results from database into associative array       
}
?>