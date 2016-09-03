<?php
/*******************************************************
Name: logout
Does: logs user out
Receives: nothing
Returns: nothing
*******************************************************/
function logout() {
       echo "<form action = '/template/logout.php' method = 'post'> <!-- logs user out if button is clicked -->
             <p><button onclick='alertbox()'> <!--used Javascript function because prompt box doesn't appear if no double qoutes if not in function-->
             <input type = 'submit' value = 'Logout'>
             </button></form></center></p>";
}

/*******************************************************
Name: alertbox
Does: contains javascript built-in function alert and its text
Receives: nothing
Returns: nothing
*******************************************************/
echo "<script>function alertbox() {
      alert('You have logged out');
      }</script>"; 

session_start();
if (isset($_SESSION[user])) { //if there is a set value for #_SESSION[user]
       include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/cart/cart_number.php"; //counts the number of item in cart excluding the deleted items
       echo "<center><p><h3>Welcome $_SESSION[name]</h3></p>";

       if ($_SESSION[user] == 'admin@fukosupplies.comuf.com') {
              echo "<a href = '/admin/admin.html'>Admin Control</a>";  
              logout();              
       }
       else {
              echo "<p><img src = '/images/icon/cart.png'><a href = '/cart/cart.html'>Cart[";
              echo "$t]</a></p>"; //counts and display the number of items in cart
              logout();
              echo "<p><h3>DEPARTMENTS</h3></p>";
              include "department.php";
       }
}
else {
echo "<p><center><h2>Login</h2></center></p>";
echo $_COOKIE['error']; //displays error message
echo "<form action = '/template/login.php' method = 'post'>";
echo "<p><img src = '/images/icon/user.png' />Username:<input type = 'email' name = 'username' placeholder = 'Email' required = 'required' size = '20'/></p>";
echo "<p><img src= '/images/icon/key.png'/>Password:<input type = 'password' name = 'password' placeholder = 'password' required = 'required' size = '20'/></p>";
echo "<p><img src = '/images/icon/shield.png'><a href = '/forgot.html'>Forgot Your Password</a></p>";
echo "<p><center><input type = 'submit' value = 'submit'></center></form></p>";
echo "<p>New?<a href = 'reg.html'> Create An Account</a></p>"; 
}
?>