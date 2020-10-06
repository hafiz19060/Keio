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



if(isSet($_POST['register'])){
	$user = $_POST["cashierUname"];
	$pass = $_POST["cashierPassword"];
	$name = $_POST["cashierName"];
	$mobile = $_POST['cashierMobileNum'];
	$ic = $_POST['cashierICNum'];
	
	user($user,$pass,$name,$mobile,$ic);
	
	echo "<script>";
	echo " alert('Succesfully registered!');
		</script>";
	header( "refresh:1; url=csaAdminMenu.php" );
}
if(isSet($_POST['opShift'])){
	openshift();
	header( "refresh:1; url=csaCashierMenu.php" );
	
}
if(isSet($_POST['edShift'])){
	endingshift();
	header( "refresh:1; url=Login/csaLogin.php" );
	
}
if(isSet($_POST['save'])){
	editAdminProfile();
	echo "<script>";
	echo " alert('Succesfully change Username and Password!,Please re-login');
		</script>";
	header( "refresh:1; url=Login/csaLogin.php" );
	
}
if(isSet($_POST['addStock'])){
	addStock();
	echo "<script>";
	echo " alert('Succesfully registered!');
		</script>";
	header( "refresh:1; url=csaAdminMenu.php" );
	
}
if(isSet($_POST['delete'])){
	deleteItem();
		echo "<script>";
	echo " alert('Item succesfully deleted!');
		</script>";
	header( "refresh:1; url=csaAdminItem.php" );
	
}
if(isSet($_POST['cashierdelete'])){
	deleteItem();
		echo "<script>";
	echo " alert('Item succesfully deleted!');
		</script>";
	header( "refresh:1; url=csaCashierItem.php" );
	
}
if(isSet($_POST['updateitem'])){
	updateItem();
	echo "<script>";
	echo " alert('Succesfully update item info!');
		script>";
	header( "refresh:1; url=csaAdminItem.php" );
	
}
if(isSet($_POST['cashierupdateitem'])){
	updateItem();
	echo "<script>";
	echo " alert('Succesfully update item info!');
		script>";
	header( "refresh:1; url=csaCashierItem.php" );
	
}
if(isSet($_POST['cashierAddStock'])){
	addStock();
	echo "<script>";
	echo " alert('Succesfully registered!');
		</script>";
	header( "refresh:1; url=csaCashierMenu.php" );
	
}

if(isSet($_POST['deleteCashier'])){
	deleteCashier();
echo "<script>";
	echo " alert('Cashier have been deleted!');
		</script>";
	header( "refresh:1; url=csaAdminDeleteCashier.php" );
	
}
if(isSet($_POST['deleteTran'])){
	deleteTransaction();
echo "<script>";
	echo " alert('Transaction have been deleted!');
		</script>";
	header( "refresh:1; url=csaAdminViewTransaction.php" );
	
}


?>

</html>