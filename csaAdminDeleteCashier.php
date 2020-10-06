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

</html>