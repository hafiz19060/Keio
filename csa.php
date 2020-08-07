<?php
function user(){
	
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
$user = $_POST['cashierUname'];
$pass = $_POST['cashierPassword'];
$name = $_POST['cashierName'];
$mobile = $_POST['cashierMobileNum'];
$ic = $_POST['cashierICNum'];

$sql = "INSERT INTO users (username,password,usertype)
VALUES ('$user','$pass','cashier')";
$qry = mysqli_query($con,$sql);
$sql = "INSERT INTO cashier (username,password,name,mobilenum,icnum) VALUES ('$user','$pass','$name','$mobile','$ic')";
$qry = mysqli_query($con,$sql);
	
	
}

?>