<?php
include "csa.php";
if(isSet($_POST['register'])){
	user();
	echo "<script>";
	echo " alert('Succesfully registered!');
		</script>";
	header( "refresh:1; url=csaAdminMenu.php" );
}


?>