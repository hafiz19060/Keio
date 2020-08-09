<!DOCTYPE html>
<html>
<style>
body {
	background-color:#6694A4; 
    
  text-align:center;
  
  font-family: "Lucida Console", Courier, monospace;
    }
    
	a:link {
  color: coral;
}

	a:visited {
  color: coral;
}

	a:hover {
  color: yellow;
}

	a:active {
  color: yellow;
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

input[type=password] {
  width:30%;
  padding: 10px 10px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid coral;
  outline: none;
}

input[type=password]:focus {
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




img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}


</style>
<body>
<br><br><br>
<img src="CSA.jpeg" alt="CSA" style="width:40%">
<br><br>


 <form action="csacheckLogin.php" method="post">
      
    <label for="uname"><b>Username:</b></label><br>
    <input type="text" placeholder="Enter Your ID" name="id"  > <br>

    <label for="psw"><b>Password:</b></label><br>
    <input type="password" placeholder="Enter Your Password" name="psw" > <br><br>

   <button class="submit">Log In</button>
</form>
</body>