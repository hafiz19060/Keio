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

input[type=submit] {
  background-color: lightyellow;
  border: 2px solid coral;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
</style>
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

<a href = "csaCashierMenu.php">Return to Menu</a><br><br>

</html>
<?php
include "csa.php";
session_start();

//echo $_SESSION['id'];

$id = $_SESSION['id'];

$i = viewProfile($id);

echo "<table border='1' width='1000'>
	<tr>
	<th>Username</th>
	<th>Password</th>
	<th>User type</th>
	

	</tr>"; 
	
while($row=mysqli_fetch_assoc($i)){
	echo "<tr>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "<td>".$row['usertype']."</td>";
	$uname = $row['username'];
	
echo "</tr>";
	
}
echo "</table>"; 
//echo $id;



?>