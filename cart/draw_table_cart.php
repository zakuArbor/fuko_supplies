<?php
echo "<table width = '80%' cellpadding = '10' cellspacing = '5'>
      <thead>
      <b><tr>
      <th>Product#</th> <!-- Displays the item number in cart -->
      <th>PRODUCT NAME</th>
      <th>DEPARTMENT</th>
      <th>QTY</th>
      <th>UNIT PRICE</th>
      <th></th>
      </tr></b>
      </thead>
      <tbody>";
$i = 0;
foreach ($cart as $display) {
       if ($_SESSION['cart'][$i] !== 0) { //does not display item# that have a value of zero
           $qty = $_SESSION['qty'][$i];
           echo "<tr>
                 <td>$display[product_id]</td>
                 <td>$display[name]</td>
                 <td>$display[shop_name]</td>
                 <td>" . $qty .
                 "</td>
                 <td>&#36;$display[price]</td>
                 <td><a href = '/cart/cart_delete.php?delete=$i'><img src = '/images/icon/cart_delete.png' width = '20' height = '20'></a></td></tr>";
                 $sub = $display[price] * $qty;
                 $total += $sub;
       }
       $i++;
}
$total += 25; //$25 shipping fee
SESSION_START();
$_SESSION['cost'] = $total;
echo "</tbody>
      <tfoot><tr>
      <td><b>Shipping:</b> $25</td></tr><tr>
      <td><b>Total: $total</b></td></tr>
      </tr></tfoot>
      </table>";
//print_r ($_SESSION['cart']); //just wanted to see values

echo "<p><a href = '/cart/cart.php?action=uncart'>[EMPTY CART]</a> <a href = '/cart/proceed.html'>[PROCEED TO CHECKOUT]</a>";

?>