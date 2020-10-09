<!DOCTYPE html>
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


img {
  
  margin-left: auto;
  margin-right: auto;
  width:70px;height:500px;
}


</style>
<body>
<br><br><br>
<img src="CSA.jpeg" alt="CSA" style="width:30%">
<br><br>


 <form action="csacheckLogin.php" method="post">

      
    <label for="uname"><b>Username:</b></label><br>
    <input type="text" placeholder="Enter Your ID" name="id" required > <br>

    <label for="psw"><b>Password:</b></label><br>
    <input type="password" placeholder="Enter Your Password" name="psw" required> <br><br>

   <input type ="submit" name = "submit">
 
</form>
</body>
</html>
<?php
session_start();


?>
