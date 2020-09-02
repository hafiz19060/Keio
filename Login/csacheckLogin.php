<?php
session_start();
include "csaUsers.php";
$_SESSION['id']=$_POST['id'];  
$_SESSION['psw']=$_POST['psw'];
$_SESSION['curTime']=time('G:i:sa');

$username=$_POST['id']; 
$password=$_POST['psw'];  
 
$validUser = validatePassword($username,$password);


if($validUser)
	{
	$usertype=getUserType($username);
	if($usertype =='admin'){
		header("location:../csaAdminMenu.php"); 
	}
	else if($usertype =='cashier'){
		header("location:../csaCashierMenu.php"); 
	}
	else
		echo'error';
	
	}
else {
	
	echo "<center><br><br>Wrong Username or Password";
	header( "refresh:1; url=csaLogin.php" );
	}
?>