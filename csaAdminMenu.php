<?php
session_start();
echo "Welcome ".$_SESSION['id'];

?>
<html>
<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  var en = 'AM';
  m = checkTime(m);
  s = checkTime(s);
  if(h>12){
	  en='PM';
	  
  }
  if(h>12){
	  h = h - 12;
  }
  if(h==0){
	  
	  h=12;
  }
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s + ' ' +en;
  var t = setTimeout(startTime, 500);
  
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
<body onload="startTime()">

<div id="txt"></div>

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

 .center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);

</style>

<body>
<div class="center">
<p><a href="Login/csaLogout.php">Log Out</a></p>
<a href = "csaAdminProfile.php">View Profile</a><br><br>
<a href = "csaRegCashier.php">Register Cashier</a><br><br>
<a href = "csaAdminItem.php">Items</a><br><br>
<a href = "csaAddStock.php">Add new stocks</a><br><br>
<a href = "csaAdminDeleteCashier.php">Delete cashier</a><br><br>
<a href = "csaAdminViewTransaction.php">View transaction</a><br><br>
<a href = "csaAdminSalesReport.php">Sales report</a><br><br>
<a href = "csaAdminShiftReport.php">Shift report</a><br><br>
<br>

</div>
</body>
</html>