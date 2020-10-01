<?php
include "csa.php";
include "paywithBank.php";

if(isSet($_POST['cash'])){
	addtoTransaction($itemQuantity,$itemPrice,$total_price);
	$cash = $_POST['amount'];
	$balance = $cash - $total_price;

if($cash > $balance){
	
	echo 'Thank you for your purchase! Balance = RM '.$balance;
}
	//echo "<script>";
	//echo " alert('Succesfully registered!');
		//</script>";
	//header( "refresh:1; url=csaCashierMenu.php" );
	
}
if(isSet($_POST['bank'])){
	addtoTranBank($itemQuantity,$itemPrice,$total_price);
	$balance = $total_price - $total_price;
	echo '<br>Thank you for your purchase!';
	
}
?>