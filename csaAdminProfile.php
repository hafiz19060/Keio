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

<a href = "csaAdminMenu.php">Return to Menu</a><br><br>
Username:<br>
<input type = "text" name = "adminUname" readonly><br>
Password:<br>
<input type = "text" name = "adminPassword" readonly><br>
Name:<br>
<input type = "text" name = "adminName" readonly><br>
Mobile Number:<br>
<input type = "text" name = "adminMobileNum" readonly> <br>
IC Number:<br>
<input type = "text" name = "adminICNum" readonly><br>


</html>