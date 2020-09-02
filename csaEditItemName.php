<?php
include "csa.php";
$sku = $_POST['skutoupdate'];

$qry = getItemInfo($sku);
$row = mysqli_fetch_assoc($qry);

$itemName = $row['itemName'];
$sku = $row['sku'];
$categories = $row['categories'];
$price = $row['price'];


echo '<form action = "process.php" method ="post"> ';
echo 'Update item<br>Item name:<br>';
echo "<input type = 'text' name = 'itemName' value = '$itemName'>";
echo '<br>';
echo 'SKU:<br>';
echo "<input type = 'hidden' name = 'sku' value = '$sku'>";
echo "<input type = 'text' name = 'newsku' value = '$sku'>";
echo '<br>';
echo 'Categories:<br>';
echo "<input type = 'text' name = 'categories' value = '$categories'>";
echo '<br>';
echo 'Price:<br>';
echo "<input type = 'text' name = 'price' value = '$price'>";
echo '<input type = "submit" name = "updateitem" value = "Save">';
echo '</form>';


?>