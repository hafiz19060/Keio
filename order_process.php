<?php
session_start();

$total_price = 0;

$item_details = '';

$order_details = '
<div class="table-responsive" id="order_table">
 <table class="table table-bordered table-striped">
  <tr>  
            <th>Product Name</th>  
            <th>Quantity</th>  
            <th>Price</th>  
            <th>Total</th>  
        </tr>

';

if(!empty($_SESSION["shopping_cart"]))
{
 foreach($_SESSION["shopping_cart"] as $keys => $values)
 {
  $order_details .= '
  <tr>
   <td>'.$values["item_name"].'</td>
   <td>'.$values["item_quantity"].'</td>
   <td align="right">RM '.$values["item_price"].'</td>
   <td align="right">RM '.number_format($values["item_quantity"] * $values["item_price"], 2).'</td>
  </tr>
  ';
  $total_price = $total_price + ($values["item_quantity"] * $values["item_price"]);

  $item_details .= $values["item_name"] . ', ';
 }
 $item_details = substr($item_details, 0, -2);
 $order_details .= '
 <tr>  
        <td colspan="3" align="right">Total</td>  
        <td align="right">RM '.number_format($total_price, 2).'</td>
    </tr>
 ';
}
$order_details .= '</table>';

?>
<html>
<a href = "testshoppingcart.php">Back</a>
</html>
<?php

echo $order_details;
echo '<a href = "paywithCash.php">Pay with cash</a>';
echo '  |  ';
echo '<a href = "paywithBank.php">Bank in/Debit card</a>';
?>