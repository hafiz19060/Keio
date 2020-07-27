<?php
function validatePassword($username,$password)
{
$con=mysqli_connect("localhost","g39","g39","g04_39");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM users where username = '".$username ."' and password ='".$password."'";
$result=mysqli_query($con,$sql);
echo $sql;
$count=mysqli_num_rows($result); 
if($count == 1){
	return true;
}
else
	{
	return false; 
	}
	}

function getUserType($username)
{
$con=mysqli_connect("localhost","g39","g39","g04_39");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql= "SELECT * FROM users where username = '".$username ."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); 
if($count == 1){
	$row = mysqli_fetch_assoc($result);
	$usertype=$row['usertype'];
	return $usertype;
	}
 }

?>