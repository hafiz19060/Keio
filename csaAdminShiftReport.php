<?php
include "csa.php";
echo '<a href = "csaAdminMenu.php">Go back</a><br>';
$qry = viewShiftReport();

//echo 'No of transactions: '.mysqli_num_rows($qry);
	echo '<br>';
	
	echo "<table border='1' width='1000'>
	<tr>
	<th>Name</th>
	<th>Last login</th>
	</tr>"; 

	while($row=mysqli_fetch_assoc($qry))
		{
	echo "<tr>";
	echo "<td>" . $row['name'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
		}
		echo '</table>';
		
?>