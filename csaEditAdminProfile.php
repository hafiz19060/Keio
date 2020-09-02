<?php
include "csa.php";
$id = $_POST['unameEdit'];
$query = getAdminInfo($id);
$row = mysqli_fetch_assoc($query);

$id = $row['username'];
$pw = $row['password'];


echo '<form action = "process.php" method ="post"> ';
echo 'Admin Edit Profile<br>Username:<br>';
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