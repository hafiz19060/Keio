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

<div class="center">
<p><a href="Login/csaLogin.php">Log Out</a></p>
<a href = "testshoppingcart.php">Begin POS</a><br><br>
<a href = "csaCashierProfile.php">View Profile</a><br><br>
<a href = "csaCashierAddStock.php">Add new stocks</a><br><br>
<a href = "csaCashierItem.php">Items</a><br><br>
<a href = "csaCashierViewTransaction.php">View transaction</a><br><br>


</div>
</html>