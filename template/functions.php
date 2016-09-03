<?php
/*******************************************************
Name: protect
Does: converts any html special characters into html entities
Receives: a string
Returns: a (protected) string
*******************************************************/
function protect ($text) {
       return htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); //htmlspecialchars() - an built-in php function that prevents attackers modifying page or link
}

/*******************************************************
Name: protect
Does: converts any html special characters into html entities and prints them out
Receives: a string
Returns: nothing
*******************************************************/
function protect_echo ($text) {
       echo htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); //htmlspecialchars() - an built-in php function that prevents attackers modifying page or link
}

/*******************************************************
Name: crypt_p 
Does: encrypts password
Receives: a string
Returns: a (encrypted) string
*******************************************************/
function crypt_p ($pass) {
       return md5($pass . 'a7967494_fuko'); //encrypts user's password
}

/*******************************************************
Name: exe 
Does: writes to database
Receives: a string (an sql command)
Returns: nothing
*******************************************************/
function exe ($sql) {
       try {
              include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
              $pdo -> exec($sql);
       }
       catch (PDOException $e) {
              echo "<p>Failed To Write</p>$e";
       }
}
?>