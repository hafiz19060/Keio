<?php
include "csa.php";
echo '
<a href = "csaAdminMenu.php">Back</a><br>
<form action="" method="post">
<fieldset style ="width:70%;"><legend>Option</legend>

<tr><td> <label for="searchValue"> Search: </td><td><input type="text" id="searchValue" name=searchValue><br><br></td></tr>
<td></td><td><input type=submit name = searchbyname value="By Items name">
<input type=submit name = searchsku value="By SKU">
<input type=submit name = searchcategories value="By categories">
<input type=submit name = searchprice value="By price">
<input type=submit name = displayAll value="Display All">
</fieldset>
</form>';

if(isSet($_POST['searchbyname']))
	$qry = finditembyname();
else if(isSet($_POST['searchsku']))
	$qry = finditembysku();
else if(isSet($_POST['searchcategories']))
	$qry = finditembycategories(); 
else if(isSet($_POST['searchprice']))
	$qry = finditembyprice();
else
	$qry = viewItems();

echo 'No of items: '.mysqli_num_rows($qry);
	echo '<br>';
	
	echo "<table border='1' width='1000'>
	<tr>
	<th>Item Name</th>
	<th>SKU</th>
	<th>Categories</th>
	<th>Price</th>
	</tr>"; 

	while($row=mysqli_fetch_assoc($qry))
		{
	echo "<tr>";
	echo "<td>" . $row['itemName'] . "</td>";
	echo "<td>" . $row['sku'] . "</td>";
	echo "<td>" . $row['categories'] . "</td>";
	echo "<td>" . $row['price'] . "</td>";
	$sku = $row['sku'];
	echo '<td>';
	echo '<form action="process.php" method="post" >';
			echo "<input type='hidden' value=$sku name='skutodelete'>";
			echo '<input type="submit" name="delete" value="Delete">';
			echo '</form>';
		echo '</td>';
		echo '<td>';
	echo '<form action="csaEditItemName.php" method="post" >';
			echo "<input type='hidden' value=$sku name='skutoupdate'>";
			echo '<input type="submit" name="update" value="Update">';
			echo '</form>';
		echo '</td>';
	echo "</tr>";

	}
	echo "</table>"; 

?>