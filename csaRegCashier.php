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

.submit {
  background-color: #4CAF50; /* Green */
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

.submit {
  background-color: white;
  color: black;
  border: 2px solid coral;
}

.submit:hover {
  background-color: coral;
  color: black;
}

</style>

<body>
<a href = "csaAdminMenu.php">Back to Menu</a><br><br>

<form action = "process.php" method = "post">
Username:<br>
<input type = "text" name = "cashierUname"><br>
Password:<br>
<input type = "text" name = "cashierPassword"><br>
Name:<br>
<input type = "text" name = "cashierName"><br>
Mobile number (Without - ):<br>
<input type = "text" name = "cashierMobileNum"><br>
IC number (Without - ):<br>
<input type = "text" name = "cashierICNum"><br><br>

<input type="submit" name = "register" value = "Submit">

</form>

</body>
</html>