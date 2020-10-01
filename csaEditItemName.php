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
include "csa.php";
$sku = $_POST['skutoupdate'];

$qry = getItemInfo($sku);
$row = mysqli_fetch_assoc($qry);

$itemName = $row['itemName'];
$sku = $row['sku'];
$categories = $row['categories'];
$price = $row['price'];
$id = $row['id'];


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
echo 'ID:<br>';
echo "<input type = 'text' name = 'id' value = '$id'>";
echo '<input type = "submit" name = "updateitem" value = "Save">';
echo '</form>';


?>

</html>