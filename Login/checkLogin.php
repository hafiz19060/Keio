<?php
session_start();
include "users.php";
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
		header("location:../adminMenu.php"); // redirect to admin page
	}
	else if($usertype =='customer'){
		header("location:../customerMenu.php"); // redirect to customer menu page
	}
	else
		echo'error';
		//header("location:../"); // redirect to staff menu page
	}
else {
	echo '<div class="w3-container" style="width:80%; margin:0 auto;">';
	echo "<center><br><br>Wrong Username or Password";
	echo '<br><br span class="w3-right w3-padding w3-hide-large w3-large"><br><a href="../Login/login.php">Try Again?</a></span>';
	echo '</div></center>';
	}
?>