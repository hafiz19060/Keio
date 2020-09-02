<?php
include "csa.php";

if(isSet($_POST['register'])){
	user();
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


?>