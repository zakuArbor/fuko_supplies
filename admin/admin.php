<?php include $_SERVER['DOCUMENT_ROOT'] . "/template/admin_check.php"; ?>
<html>
<head>
<title>Fuko's Supplies</title>
<link href="favicon.ico" rel="icon" type="image/x-icon" />
<link href="/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id = "header">
</div>
<div id = "nav">
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/template/nav.php'); ?>
</div>
<div id = "main">
<p><h1>ADMINISTRATION CONTROL CENTER</h1><p>
<ul>
    <li><a href = "user/index.php">Users</a></li>
    <li><a href = "product/index.php">Products</a></li>
</ul>
</div>
<div id = "sidebar">
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/template/sidebar.php'); ?>
</div>
<div id = "footer">
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
</div>
</body>
</html>