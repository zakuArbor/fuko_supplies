<?php
SESSION_START();

if (!isset($_SESSION['user'])) {
       echo "You are not logged on";
       echo "<p><a href = '/index.html'>[Go Back To Main Page]</a></p>
             <p><a href = '/reg.html'>Don't have an account [Click Here]</a></p>";
             die(); //terminates all future script
}

if (!isset($_SESSION[cart])) { //if there is no value in $_SESSION[cart] 
       $_SESSION[cart] = array(); //set cart as an empty array
       $_SESSION[cart_shop] = array(); //set cart shop/department name
       $_SESSION['qty'] = array(); //set qty as an empty array
} 
if ($_GET[action] == 'buy') { //just to make sure that the person actually intends to add to cart and not some person who played around with the query link
       $_SESSION[cart][] = $_GET[id]; //stores item to cart
       $_SESSION[cart_shop][] = $_GET[shop];
       $_SESSION['qty'][] = $_GET['qty'];
       header ("Location: http://hellogames.net63.net/shop.html");
       exit(); //terminates all future code in this file
}
elseif ($_GET[action] == 'uncart') {
       unset ($_SESSION[cart]);
}
echo $_GET[qty];
print_r ($_SESSION['qty']);
?>	