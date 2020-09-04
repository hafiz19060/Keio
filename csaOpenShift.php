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
<form action = "process.php"  method = "post">
<h3>Opening Shift</h3>
Name:
<input type = "text" name = "cashierName" required><br>
Opening time :
<input type = "time" name = "opTime" required><br>
Date:
<input type = "date" name = "opDate" required><br>
<input type = "submit" name = "opShift">


</form>
</html>
