<!DOCTYPE html>
<html>
<head>
<body background="background.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
	background-image:url("background3.png");
	
	}

form {border-style: outset;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 15px 32px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}



.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="imgcontainer">
<header class="w3-container w3-black">
<h3>Login Form</h3>
</header>

  <div class="imgcontainer">
    <img src="avatar_img2.png" alt="Avatar" style="width:128px;height:128px;"	 class="avatar">
  </div>
  </form>
 <form action="checkLogin.php" method="post">
      
 
  <div class="container">
    <label for="uname"><b>Username:</b></label>
    <input type="text" placeholder="Enter Your ID" name="id"  > <br>

    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Your Password" name="psw" > <br><br>

    <button type="submit">Login</button>
    
     <p>Dont have an account ?<a href = "../register.php">Register now!</a></p>
   
 
  </div>
</form>