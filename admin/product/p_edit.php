<?php
function edit() {
      echo "<form action = 'form.php' method = 'post'>
             <p><select name = 'option'>
             <option value = 'name'>Name</option>
             <option value = 'image'>Image</option>
             <option value = 'price'>Price</option>
             <option value = 'size'>Size</option>
             <option value = 'description'>Description</option>
             </select></p>
             <input type='submit' value='Submit'>
             </form>";
} 

function delete($x) {
       echo "<p>Are you sure you want to delete $x</p>";
       echo "<form action = 'update.php' method = 'post'>
             <input type = 'radio' name = 'confirm' value = 'true' required><b>Yes</b></input>
             <input type = 'radio' name = 'confirm' value = 'false'><b>No</b></input>
             <p><input type = 'password' name = 'password_d' placeholder = 'Password' required></input></p>
             <input type='hidden' name = 'option' value=''>
             <input type='hidden' name = 'value' value=''>
             <input type='submit' value='Submit'>
             </form>";
}

if ($action == "edit") {
       edit();
}
elseif ($action == "delete") {
       delete($product['name']);
}
else {
       echo "<p><h1>INVALID ACTION</h1></p>";
}
include $_SERVER['DOCUMENT_ROOT'] . "/template/footer.php";
?>