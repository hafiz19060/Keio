<?php
include "csa.php";
echo '<a href = "csaAdminMenu.php">Go back</a><br>';
$qry = viewTransaction();

echo 'No of transactions: '.mysqli_num_rows($qry);
	echo '<br>';
	
	echo "<table border='1' width='1000'>
	<tr>
	<th>Quantity</th>
	<th>Price</th>
	<th>Total price</th>
	<th>Method</th>
	</tr>"; 

	while($row=mysqli_fetch_assoc($qry))
		{
	echo "<tr>";
	echo "<td>" . $row['quantity'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	echo "<td>" . $row['totalprice'] . "</td>";
	echo "<td>" . $row['method'] . "</td>";
	$name = $row['quantity'];
	echo '<td>';
	echo '<form action="process.php" method="post" >';
			echo "<input type='hidden' value=$name name='nametodelete'>";
			echo '<input type="submit" name="deleteTran" value="Delete">';
			echo '</form>';
		echo '</td>';
		}
		echo '</table>';
		
?>