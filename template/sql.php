<?php
include $_SERVER[DOCUMENT] . "/template/open.php"; //connects to database
try {
       $results = $pdo->query($sql); //runs sql query
}
catch (PDOException $e) {
        echo "<p>ERROR: Failed to retrieve data from database</p>";
        echo "$e";
        exit(); //terminates all future code
}
$pdo = null;
?>
