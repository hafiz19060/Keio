<?php
function user($user,$pass,$name,$mobile,$ic){
	
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	
$passHash = password_hash($pass,PASSWORD_BCRYPT,["cost"=>8]);

$sql = "INSERT INTO users (username,password,usertype)
VALUES ('$user','$passHash','cashier')";
$qry = mysqli_query($con,$sql);
$sql = "INSERT INTO cashier (username,password,name,mobilenum,icnum) VALUES ('$user','$passHash','$name','$mobile','$ic')";
$qry = mysqli_query($con,$sql);
return $passHash;
	
	
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
	$passHash = password_hash($pw,PASSWORD_BCRYPT,["cost"=>8]);
	
	$sql = 'update users SET username ="'.$newid.'", password = "'.$passHash.'" WHERE username = "'.$oldid.'"';
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
	$id = $_POST['id'];
	
	$sql = "insert into stock (itemName,sku,categories,price,id) values ('$itemName','$sku','$categories','$price',$id)";
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
	
function finditembyid(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sql = 'select * from stock where id = "'.$_POST['searchValue'].'"';
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
	$id = $_POST['id'];
	
	$sql = 'update stock SET itemName ="'.$itemName.'", sku ="'.$newsku.'", categories = "'.$categories.'",price = "'.$price.'",id = "'.$id.'" WHERE sku = "'.$oldsku.'"';
	//echo $sql;
$qry = mysqli_query($con,$sql);
return $qry;
}
function addtoTransaction($itemId,$itemName,$itemQuantity,$itemPrice,$total_price){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
	}
	$sql = "insert into transaction (id,itemName,quantity,price,totalprice,method,date) values ('$itemId','$itemName','$itemQuantity','$itemPrice','$total_price','Cash',now())";
	$qry = mysqli_query($con,$sql);
}
function addtoTranBank($itemId,$itemName,$itemQuantity,$itemPrice,$total_price){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
}
$sql = "insert into transaction (id,itemName,quantity,price,totalprice,method,date) values ('$itemId','$itemName','$itemQuantity','$itemPrice','$total_price','Bank',now())";
	$qry = mysqli_query($con,$sql);
}
function viewCashier(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
	
	$sql = 'select * from users where usertype = "cashier"';
	$qry = mysqli_query($con,$sql);
	mysqli_close($con);
		return $qry;
	
	

}
function deleteCashier(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
}
	$name = $_POST['nametodelete'];
	$sql = "delete from users where username = '".$name."'";
	$qry = mysqli_query($con,$sql);
}

function viewTransaction(){
		$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
}
	$sql = 'select * from transaction';
	$qry = mysqli_query($con,$sql);
	mysqli_close($con);
		return $qry;
	
	
	
}
function deleteTransaction(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
}
	$date = $_POST['datetodelete'];
	$sql = "delete from transaction where date = '".$date."'";
	
	$qry = mysqli_query($con,$sql);
	
	
}
function salesReport(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	
}
	$sql = 'select sum(totalprice) as total from transaction';
	$qry = mysqli_query($con,$sql);
	return $qry;
	
	
	
}
function viewShiftReport(){
	$con = mysqli_connect("localhost","g04","g04","csa_g04_39");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
	$sql = 'select * from shift';
	$qry = mysqli_query($con,$sql);
	mysqli_close($con);
		return $qry;
	
	
	
}

?>

</html>