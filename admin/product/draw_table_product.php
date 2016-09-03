<?php
echo "<table width = '80%' cellpadding = '10' cellspacing = '5'>
      <thead>
      <b><tr>
      <th>ID</th>
      <th>PRODUCT NAME</th>
      <th>DEPARTMENT</th>
      <th>IMAGE</th>
      <th>PRICE</th>
      <th>SIZE</th>
      <th>DESC</th>
      </tr></b>
      </thead>
      <tbody>";
 
echo "<tr>
      <td>$product[product_id]</td>
      <td>$product[name]</td>
      <td><a href = 'admin_department.php?shop=$product[shop_name]'>$product[shop_name]</a></td>
      <td><a href = '$product[image]'>$product[image]</a></td>
      <td>&#36;$product[price]</td>
      <td>$product[size]</td>
      <td>$product[description]</td>
      </tr>";

echo "</tbody></table>";
?>