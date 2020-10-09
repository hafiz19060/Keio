<fieldset>
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
</fieldset>
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
   font-family: "Lucida Console", Courier, monospace;
  
  border: 2px solid coral;
  outline: none;
}

input[type=text]:focus {
  background-color: lightyellow;
}


input[type=password] {
  width:30%;
  padding: 10px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid coral;
  outline: none;
   font-family: "Lucida Console", Courier, monospace;
}

input[type=password]:focus {
   background-color: lightyellow;
}

input[type = submit], input[type=button]{
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

<body>
<div class="center"><br><br>

<div class="tooltip"><a href="index.php"><img src="lock.png" alt="Log Out" style="width:100px;height100px;"></a> 
	<span class="tooltiptext">Log Out</span>
</div>

<div class="tooltip"><a href = "csaAdminProfile.php"><img src="profile.png" alt="View Profile" style="width:100px;height100px;"></a>
	<span class="tooltiptext">View Profile</span><br>
</div>

<div class="tooltip"><a href = "csaRegCashier.php"><img src="+.png" alt="Register Cashier" style="width:100px;height100px;"></a>
	<span class="tooltiptext">Register Cashier</span>
</div>

<div class="tooltip"><a href = "csaAdminItem.php"><img src="stock.png" alt="Items" style="width:100px;width100px;"></a>
	<span class="tooltiptext">Inventory</span><br>
</div>
	
<div class="tooltip"><a href = "csaAddStock.php"><img src="+.png" alt="Add New Stocks" style="width:100px;width:100px"></a>
	<span class="tooltiptext">Add New Stock</span>
</div>

<div class="tooltip"><a href = "csaAdminDeleteCashier.php"><img src="cash_till.ico" alt="Delete Cashier" style="width:100px;width:100px"></a>
	<span class="tooltiptext">View Cashier</span><br>
</div>
	
<div class="tooltip"><a href = "csaAdminViewTransaction.php"><img src="cash_till.ico" alt="View Transaction" style="width:100px;height:100px;"></a>
	<span class="tooltiptext">View Transaction</span>
</div>

<div class="tooltip"><a href = "csaAdminSalesReport.php"><img src="receipt.png" alt="Sales Report" style="width:100px;height:100px;"></a>
	<span class="tooltiptext">Sales Report</span><br>
</div>

<div class="tooltip"><a href = "csaAdminShiftReport.php"><img src="report.png" alt="Shift Report" style="width:100px;heigth:100px;"></a>
	<span class="tooltiptext">Shift Report</span>
</div>

</div>
</body>
</html>