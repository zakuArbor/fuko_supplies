<?php
$name = $_POST ['name'];
$size = $_POST ['size'];
$gender = $_POST ['gender'];
$email = $_POST ['email'];
$file = "file.csv";
$random = rand (1, 50);
$subject = "Shirt Orders";
$message = $name . ", have ordered " . $size . " t-shirt and you are a " . $gender;
$from = "admin@hellogames.net63.net";

file_put_contents ($file, $data . PHP_EOL, FILE_APPEND);

echo "$name, you have ordered a $size t-shirt and you are a $gender";
echo "<br>Random Number: $random";
if ($size == "small") {
  echo "<br>Small Size";
}
else if ($size == "medium") {
  echo "<br>Medium Size";
}
else if ($size == "large") {
   echo "<br>Large Size";
}

if ($size != 4) {
 echo "<br>Does not equal operator works!";
}

mail($email, $subject, $message, "From " . $from);
$num1 = 4;
$num2 = 2;
echo '<br>The Sum is ' . ($num1 + $num2);
include "connect.php";
?>						