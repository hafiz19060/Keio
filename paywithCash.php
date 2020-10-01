<?php
include "order_process.php";


$itemQuantity = $values["item_quantity"];
$itemPrice = $values["item_price"];
	

echo '<form action = "processOrder.php" method ="post">';
echo 'Enter the amount :<br>';
echo "<input type = 'text' name = 'amount' value = ''>";
echo "<input type = 'hidden' name = 'itemQuantity' value = $itemQuantity>";
echo "<input type = 'hidden' name = 'itemPrice' value = $itemPrice>";
echo "<input type = 'hidden' name = 'total' value = $total_price>";
echo "<input type = 'submit' name = 'cash' value ='Calculate'>";

echo '</form>';

?>
