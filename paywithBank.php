<?php
include "order_process.php";

$itemId = $values["item_id"];
$itemName = $values["item_name"];
$itemQuantity = $values["item_quantity"];
$itemPrice = $values["item_price"];


echo '<form action = "processOrder.php" method ="post">';

echo "<input type = 'hidden' name = 'itemId' value = $itemId>";
echo "<input type = 'hidden' name = 'itemName' value = $itemName>";
echo "<input type = 'hidden' name = 'itemQuantity' value = $itemQuantity>";
echo "<input type = 'hidden' name = 'itemPrice' value = $itemPrice>";
echo "<input type = 'hidden' name = 'total' value = $total_price>";

echo "<input type = 'submit' name = 'bank' value ='Confirm'>";

echo '</form>';


?>