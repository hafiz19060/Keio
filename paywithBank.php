<html>

<style>

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

</html>