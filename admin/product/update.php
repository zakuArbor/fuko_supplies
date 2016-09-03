<?php
$option = $_POST[option];
$value = $_POST[value];
$valid = "true"; //for $option = price error trapping
$confirm = $_POST[confirm];

include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/functions.php";

/*******************************************************
Name: sql_exec
Does: updates either name of product or the product's department
Receives: two string and one integer
Returns: nothing
*******************************************************/
function sql_exec($value, $option, $id) {
       include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
       try {
       $sql = "UPDATE products SET $option = '$value' WHERE product_id = $id";
       $pdo -> exec($sql);
       echo "Successfully Updated";
       }
       catch (PDOException $e) {
              echo "Could not update to database";
              echo "$e";
       }
       
}

/*******************************************************
Name: sql_exec2
Does: updates either the price, image location, description, or size
Receives: three string and one integer
Returns: nothing
*******************************************************/
function sql_exec2($value, $option, $id, $shop) {
       echo "<p><b>$shop</b></p>";
       include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
       try {
       $sql = "UPDATE $shop SET $option = '$value' WHERE product_id = $id";
       $pdo -> exec($sql);
       echo "Successfully Updated";
       }
       catch (PDOException $e) {
              echo "Could not update to database";
              echo "<p>Most Likely the entered price is not a number</p>";
              echo "$e";
       }
}

/*******************************************************
Name: delete
Does: deletes product
Receives: one integer and one string
Returns: nothing
*******************************************************/
function delete ($id, $shop) {
       include $_SERVER[DOCUMENT] . "/home/a8711433/public_html/template/open.php"; //connects to database
       try {
       $sql = "DELETE products, $shop FROM products INNER JOIN $shop ON products.product_id = $shop.product_id WHERE products.product_id = $id";
       $pdo -> exec($sql);
       echo "Successfully Deleted";
       }
       catch (PDOException $e) {
             echo "Could not update to database";
             echo "$e";
       }       
}

/*****************************************/
if (isset($confirm)) {
       $password_d = $_POST[password_d];
       $cpass = crypt_p($password_d);
       session_start();
       if ($cpass == $_SESSION[pass]) {
              if ($confirm == "true") {
                     delete($_COOKIE[edit_id], $_COOKIE[shop]);
              }
              elseif ($confirm == "false") {
                     echo "Did not delete Product";
              }
       }
       else {
              echo "Incorrect Password";
       }
} 
else {
       //echo "$option and $value"; //just wanted to see values
       if ($option == "name" || $option == "shop") {
              sql_exec($value, $option, $_COOKIE[edit_id]);
       }
       else {
              if ($option == "price"){
                     if (!is_numeric($value)) {
                            echo "$value is not a number";
                            echo "<p>The value entered is not valid</p>";
                            $valid = "false";
                     }     
              }
              if ($valid == "true") {
                     sql_exec2($value, $option, $_COOKIE[edit_id], $_COOKIE[shop]);
              }
       }
}
echo "<p><a href = '/admin/product/products.html'>[Go to Admin User Control]</a></p>";
?>