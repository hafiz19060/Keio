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
	
	
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}

</style>

<?php
session_start();
echo "Welcome ".$_SESSION['id'];

?>

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
<iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:150px;height:150px;"src="https://www.clocklink.com/html5embed.php?clock=041&timezone=GMT0800&color=red&size=150&Title=&Message=&Target=&From=2020,1,1,0,0,0&Color=red"></iframe>
<body onload="startTime()">



<br><br><br><br>

	<div class="tooltip"><a href="Login/csaLogin.php"><img src="lock.png" alt="Log Out" style="width:100px;height100px;"></a> 
	<span class="tooltiptext">Log Out</span>
</div>

	<div class="tooltip"><a href = "testshoppingcart.php"><img src="cash.ico" alt="Begin POS" style="width:100px;height100px;"></a>
	<span class="tooltiptext">Begin POS</span>
</div><br><br>
	
	<div class="tooltip"><a href = "csaCashierProfile.php"><img src="profile.png" alt="View Profile" style="width:100px;height100px;"></a>
	<span class="tooltiptext">View Profile</span>
</div>

	<div class="tooltip"><a href = "csaCashierAddStock.php"><img src="+.png" alt="Add new stocks" style="width:100px;height100px;"></a>
	<span class="tooltiptext">Add New Stocks</span>
</div><br><br>
	
	<div class="tooltip"><a href = "csaCashierItem.php"><img src="stock.png" alt="Items" style="width:100px;height100px;"></a> 
	<span class="tooltiptext">Inventory</span>
</div>

	<div class="tooltip"><a href = "csaCashierViewTransaction.php"><img src="cash_till.ico" alt="View transaction" style="width:100px;height100px;"></a>
	<span class="tooltiptext">View Transaction</span>
</div>


</div>
</html>


