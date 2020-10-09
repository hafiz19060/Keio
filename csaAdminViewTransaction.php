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
echo '<a href = "csaAdminMenu.php">Go back</a><br>';
echo '<hr><h2>Transactions history</h2><hr><br>';
$qry = viewTransaction();

echo 'No of transactions: '.mysqli_num_rows($qry);
	echo '<br>';
	
	echo '<div style = "text:align:center;">
 <table style="margin:10px auto" border="1" width="1000" align="center">
  <tr>  
            <th>Item Name</th>
	<th>Quantity</th>
	<th>Price</th>
	<th>Total price</th>
	<th>Method</th>
	<th>Date</th> 
	<th>Action</th>
        </tr>';

	while($row=mysqli_fetch_assoc($qry))
		{
	echo "<tr>";
	echo "<td>" . $row['itemName'] . "</td>";
	echo "<td>" . $row['quantity'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	echo "<td>" . $row['totalprice'] . "</td>";
	echo "<td>" . $row['method'] . "</td>";
	echo "<td>" . $row ['date'] . "</td>";
	$date = $row['date'];
	
	echo '<td>';
	echo '<form action="process.php" method="post" >';
			echo "<input type='hidden' value='$date' name='datetodelete'>";
			echo '<input type="submit" name="deleteTran" value="Delete">';
			echo '</form>';
		echo '</td>';
		}
		echo '</table>';
		
?>

</html>