<?php
echo "<table width = '60%' cellpadding = '10' cellspacing = '5'>
      <thead>
      <b><tr>
      <th>ID</th>
      <th>PRODUCT NAME</th>
      <th>DEPARTMENT</th>
      <th width = '10%'>Modify</th>
      </tr></b>
      </thead>
      <tbody>";
 
foreach ($products as $product) {
       echo "<tr>
             <td>$product[id]</td>
             <td>$product[name]</td>
             <td><a href = 'admin_department.php?shop=$product[shop]'>$product[shop]</a></td>
             <td cellpadding = '5' cellspacing = '5'>
             <a href = 'product_info.php?id=$product[id]&action=edit&shop=$product[shop]'> &nbsp;<img src = '/images/icon/user_edit.png'></a> 
             <a href = 'product_info.php?id=$product[id]&action=delete&shop=$product[shop]'> &nbsp;<img src = '/images/icon/user_delete.png'></a></td>
             </tr>";
}
echo "</tbody></table>
      <div id = 'add'>
      <p><a href = 'add.php'><img src = '/images/icon/add.png'>Add a Product</a></p>
      </div>";
?>