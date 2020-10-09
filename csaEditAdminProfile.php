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
$id = $_POST['unameEdit'];
$query = getAdminInfo($id);
$row = mysqli_fetch_assoc($query);

$id = $row['username'];
$pw = $row['password'];


echo '<form action = "process.php" method ="post"> ';
echo '<br><h3>Admin Edit Profile</h3><br>Username:<br>';
echo "<input type = 'text' name = 'newUname' value = '$id'>";
echo "<input type = 'hidden' name = 'uname' value = '$id'>";
echo '<br>';
echo 'Password:<br>';

echo "<input type = 'text' name = 'password' value = '$pw'>";
echo '<br>';
echo '<br>';
echo '<input type = "submit" name = "save" value = "Save">';
echo '</form>';
?>
</html>