<?php
function validatePassword($username,$password)
{
$con=mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$qry = "select password from users where username = '".$username."'";
$result = mysqli_query($con,$qry);

$row = mysqli_fetch_assoc($result);

$dbpw = password_verify($password,$row['password']);

if($dbpw == 1){
	return true;
}
else
	{
	return false; 
	}
}
function getUserType($username)
{
$con=mysqli_connect("localhost","g04","g04","csa_g04_39");
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
function testpassword($password){
	$con=mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	$sql = "SELECT * FROM users where password = '".$password."'";
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
}
function shift($username){
	$con=mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
	
	$sql = "insert into shift (name,date) values ('$username',now())";
	$qry = mysqli_query($con,$sql);	
	
	
	
}
	

?>