<?php
include $_SERVER['DOCUMENT_ROOT'] . "/template/admin_check.php"; 
$option = $_POST['option'];

echo "<input type='hidden' name='value' value=''>";

echo "<form action = 'update.php' method = 'post'>";
if ($option == 'first') {
       echo "First Name: <input type='text' name='value' placeholder = 'First Name' required>";
}
elseif ($option == 'last') {
       echo "Last Name: <input type='text' name='value' placeholder = 'Last Name' required>";
}
elseif ($option == 'email') {
       echo "Email: <input type='email' name='value' placeholder = 'Email' required>";
}
elseif ($option == 'password') {
       echo "Password: <input type='password' name='password' placeholder = 'Password' required>";
       echo "Re-enter Password: <input type='password' name='password2' placeholder = 'Re-enter Password' required>";
}
echo "<input type='hidden' name='option' value='$option'>";
echo "<input type='hidden' name='confirm' value=''>";
echo "<input type='hidden' name='password_d' value=''>";
echo "<input type='submit' value='Submit'></form>";
?>