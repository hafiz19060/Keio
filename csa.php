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
function openshift(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
$name = $_POST['cashierName'];
$opDate = $_POST['opDate'];
$opTime = $_POST['opTime'];

$sql = "insert into shift (name,opdate,optime) values ('$name','$opDate','$opTime')";
$qry = mysqli_query($con,$sql);	
}
function endingshift(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
$name = $_POST['name2'];
$edDate = $_POST['edDate'];
$edTime = $_POST['edTime'];

$sql = "insert into shift2 (name,eddate,edtime) values ('$name','$edDate','$edTime')";
$qry = mysqli_query($con,$sql);	
}
function getAdminInfo($id){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sql = "select * from users where username = '".$id."'";

$qry = mysqli_query($con,$sql);
return $qry;
	
	
	
	
}
function viewProfile($id){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	
	$sql = "select * from users where username = '$id'";
$qry = mysqli_query($con,$sql);
	
		return $qry;
	
}
function editAdminProfile(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$oldid = $_POST['uname'];
	$newid = $_POST['newUname'];
	$pw = $_POST['password'];
	
	$sql = 'update users SET username ="'.$newid.'", password = "'.$pw.'" WHERE username = "'.$oldid.'"';
	//echo $sql;
$qry = mysqli_query($con,$sql);
return $qry;
	
}
function addStock(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$itemName = $_POST['itemName'];
	$sku = $_POST['sku'];
	$categories=$_POST['categories'];
	$price = $_POST['price'];
	
	$sql = "insert into stock (itemName,sku,categories,price) values ('$itemName','$sku','$categories','$price')";
	$qry = mysqli_query($con,$sql);	
	

}
function finditembyname(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sql = 'select * from stock where itemName = "'.$_POST['searchValue'].'"';
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
	
}
function finditembysku(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sql = 'select * from stock where sku = "'.$_POST['searchValue'].'"';
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
	
}
function finditembycategories(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sql = 'select * from stock where categories = "'.$_POST['searchValue'].'"';
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
	
}
function finditembyprice(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sql = 'select * from stock where price = "'.$_POST['searchValue'].'"';
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
	
}
function viewItems(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sql = 'select * from stock';
	$qry = mysqli_query($con,$sql);
	mysqli_close($con);
		return $qry;
	
	
}
function deleteItem(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sku = $_POST['skutodelete'];
	
	$sql="delete from stock where sku ='".$sku."'";
	
	$qry = mysqli_query($con,$sql);
	
}
function getItemInfo($sku){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sql = "select * from stock where sku = '".$sku."'";

$qry = mysqli_query($con,$sql);
return $qry;
}
function updateItem(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$itemName = $_POST['itemName'];
	$oldsku = $_POST['sku'];
	$newsku = $_POST['newsku'];
	$categories = $_POST['categories'];
	$price = $_POST['price'];
	
	$sql = 'update stock SET itemName ="'.$itemName.'", sku ="'.$newsku.'", categories = "'.$categories.'",price = "'.$price.'" WHERE sku = "'.$oldsku.'"';
	//echo $sql;
$qry = mysqli_query($con,$sql);
return $qry;
	
	
	
}

?>