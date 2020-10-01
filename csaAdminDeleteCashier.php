<?php
include "csa.php";
echo '<a href = "csaAdminMenu.php">Go back</a><br>';
$qry = viewCashier();

echo 'No of cashiers: '.mysqli_num_rows($qry);
	echo '<br>';
	
	echo "<table border='1' width='1000'>
	<tr>
	<th>Username</th>
	<th>Password</th>
	<th>Name</th>
	<th>Mobile Number</th>
	<th>Ic Number</th>
	
	</tr>"; 

	while($row=mysqli_fetch_assoc($qry))
		{
	echo "<tr>";
	echo "<td>" . $row['username'] . "</td>";
	echo "<td>" . $row['password'] . "</td>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['mobilenum'] . "</td>";
	echo "<td>" . $row['icnum'] . "</td>";
	$name = $row['username'];
	echo '<td>';
	echo '<form action="process.php" method="post" >';
			echo "<input type='hidden' value=$name name='nametodelete'>";
			echo '<input type="submit" name="deleteCashier" value="Delete">';
			echo '</form>';
		echo '</td>';
		}
		echo '</table>';
		
?>