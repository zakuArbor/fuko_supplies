<html>
<head>
<title>Cart Process</title>
<link href='favicon.ico' rel='icon' type='image/x-icon' />
<link href='/styles.css' rel='stylesheet' type='text/css'> 
</head>
<body>
<div id = 'header'>
</div>

<div id = 'nav'>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/template/nav.php"; ?>
</div>

<div id = 'main'>
<form action = 'process.php' method = 'post'>
<h3>Billing Address Form</h3>
<p><b>Street:</b> <input type = 'text' name = 'address' size='30' placeholder = 'Enter Street Address' required></p>
<p><b>Postal Code:</b> <input type = 'text' name = 'postal' size='10' placeholder = 'Postal Code' required></p>
<p><b>Phone Number:</b> <input type = 'text' name = 'phone' size = '10' placeholder = 'Optional'></p>
<p><b>Credit Card Number</b> <input type = 'text' name = 'credit' size = '16' placeholder = 'Card Number' required></p>
<input type = 'submit' value = 'submit'>
</form>
<p>Please note that there is a <b>$25 shipping fee</b></p>
</div>
<div id = 'sidebar'>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/template/sidebar.php"; ?>
</div>
<div id = 'footer'>
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
</div>
</body>
</html>