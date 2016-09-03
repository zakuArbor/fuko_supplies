<?php
echo "<html>
      <head>
      <title>$user[first]</title>
      <link href='/images/favicon2.ico' rel='icon' type='image/x-icon' />
      <link rel = 'stylesheet' type = 'text/css' href = '/admin/admin.css'>
      </head>";

echo "<body>
      <p><h2>$user[first]</h2></p>
      <table width = '60%' cellpadding = '10' cellspacing = '5'>
      <thead>
      <b><tr>
      <th>Last</th>
      <th>First</th>
      <th>Email</th>
      <th>Password</th>
      </tr></b>
      </thead>";

echo "<tbody>
      <tr><td>$user[last]</td>
      <td>$user[first]</td>
      <td>$user[email]</td>
      <td>$user[password]</td>
      </tbody>
      </table>";
?>