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
include "paywithBank.php";

if(isSet($_POST['cash'])){
	addtoTransaction($itemId,$itemName,$itemQuantity,$itemPrice,$total_price);
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
	addtoTranBank($itemId,$itemName,$itemQuantity,$itemPrice,$total_price);
	$balance = $total_price - $total_price;
	echo '<br>Thank you for your purchase!';
	
}
?>

</html>