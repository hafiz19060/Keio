<?php
include "csa.php";
echo '<a href = "csaCashierMenu.php">Go back</a><br>';
$qry = viewTransaction();

echo 'No of transactions: '.mysqli_num_rows($qry);
	echo '<br>';
	
	echo "<table border='1' width='1000'>
	<tr>
	<th>Item Name</th>
	<th>Quantity</th>
	<th>Price</th>
	<th>Total price</th>
	<th>Method</th>
	<th>Date</th>
	</tr>"; 

	while($row=mysqli_fetch_assoc($qry))
		{
	echo "<tr>";
	echo "<td>" . $row['itemName'] . "</td>";
	echo "<td>" . $row['quantity'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	echo "<td>" . $row['totalprice'] . "</td>";
	echo "<td>" . $row['method'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
		}
		echo '</table>';
		
?>