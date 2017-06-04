<?PHP
try {
$pdo = new PDO('mysql:host=mysql1.000webhost.com;dbname=a8711433_test', a8711433_admin, laptop104);
$pdo -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo -> exec ('SET NAMES "utf8" ');
}
catch (PDOException $e){
	echo "Unable to connect to the database server";
        $e -> getMessage();
	exit();
}
echo "Connection is successful";
?>