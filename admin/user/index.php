<?php 
include $_SERVER['DOCUMENT_ROOT'] . "/template/admin_check.php"; 
include ($_SERVER['DOCUMENT_ROOT'] . "/template/prepare_sql.php");

?>
<html>
<head>
<title>Fuko Admin</title>
<link href="/images/favicon2.ico" rel="icon" type="image/x-icon" />
<link rel = 'stylesheet' type = 'text/css' href = '/admin/admin.css'>
</head>
<body>
<p><h2>USERS</h2></p>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/admin/user/users.php";
//print_r ($users); //seeing the values of $users 
echo "<table width = '60%' cellpadding = '10' cellspacing = '5'>
      <thead>
      <b><tr>
      <th>User_Id</th>
      <th>Last</th>
      <th>First</th>
      <th width = '10%'>Modify</th>
      </tr></b>
      </thead>
      <tbody>";

foreach ($users as $user) {
       echo "<tr>
             <td>$user[user_id]</td>
             <td>$user[last]</td>
             <td>$user[first]</td>
             <td cellpadding = '5' cellspacing = '5'>
             <a href = 'edit.php?id=$user[user_id]&action=edit'> &nbsp;<img src = '/images/icon/user_edit.png'></a> 
             <a href = 'edit.php?id=$user[user_id]&action=delete'> &nbsp;<img src = '/images/icon/user_delete.png'></a></td>
             </tr>";
}
echo "</tbody></table>";


echo "<p><a href = '/admin/admin.php'>[Go to Admin Control Center]</a></p>";
echo "<br>";
include ($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');
?>
</body>
</html>	