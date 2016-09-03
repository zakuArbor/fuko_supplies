<html>
<head>
<title>Register</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<div id = "header">
</div>
<div id = "nav">
<?php include ('template/nav.php'); ?>
</div>
<div id = "main">
<fieldset>
<legend>
<p><h1>Register</h1></p>
</legend>
<div id = "error">
<?php 
//prints out an error message
if (isset($error)) {
	if ($error == 'true') { 
	    echo 'The email and password you have entered do not match.';
	} 
	elseif ($error == 'true1') {
	    echo 'The password you have entered do not match. Please try again.';
	}
	elseif ($error == 'true2') {
	    echo 'The email addresses you have entered do not match. Please try again.';
	}
	elseif ($error == 'true3') {
	    echo 'Sorry, the email entered is already registered';
	}
}
?> 
</div>

<form action = 'form.php' method = 'post'>
<p><label for = 'Name'>Name:</label><input type = 'text' placeholder = 'First Name' name = 'name' required = 'required' size = '20'/>
<input type = 'text' name = 'last' placeholder = 'Last Name' required = 'required' size = '30'/></p>
<p>E-mail: <input type='email'  name='email' placeholder = 'Enter Email Address' required = 'required'>
<input type='email'  name='email2' placeholder = 'Re-enter Email' required = 'required'></p>
<p>Password: <input type = 'password' name = 'password' placeholder = 'Password' size = '20'/>
<input type = 'password' name = 'password2' placeholder = 'Re-enter Password' required = 'required' size = '20'/></p>
<input type = 'submit'>
</fieldset>
</form>
</div>
<div id = "sidebar">
<?php include ('template/sidebar.php'); ?>
</div>
<div id = "footer"> 
<?php include ('template/footer.php'); ?>
</div>
</body>
</html>