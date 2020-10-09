<?php
session_start();



$total_price = 0;

$item_details = '';

$order_details = '

<div style = "text:align:center;">
 <table style="margin:10px auto" border="1" width="1000" align="center">
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
<h2>Process detail</h2>
</html>
<?php

echo $order_details;
echo '<br>';
echo '<a href = "paywithCash.php">Pay with cash</a>';
echo '  |  ';
echo '<a href = "paywithBank.php">Bank in/Debit card</a>';
?>
<html>
<style>
table:center{
	margin-left:auto;
	margin-right:auto;
	
	
}
body {
	
	background-color:#6694A4; 
    
  text-align:center;
  
  font-family: "Lucida Console", Courier, monospace;
    }
	
a:link, a:visited {
  background-color: white;
  color: black;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border: 2px solid coral;
}

a:hover, a:active {
  background-color: coral;
}

input[type=text] {
  width: 30%;
  padding: 10px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  
  border: 2px solid coral;
  outline: none;
}

input[type=text]:focus {
  background-color: lightyellow;
}

input[type = submit]{
	  background-color: coral; 
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.2s;
  cursor: pointer;
  font-family: "Lucida Console", Courier, monospace;
	
	
}

</style>
</html>