<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<button> <a href="index.php">Back</a> </button>
<div class="login" align="center">

      <img src="pictures/hi.jpg" style="width: 50%" "height: 100%">

    <div class="form" >
      <form name="signin" method="post" action="backend/login.php" id="login">
       <h3>Login as: <a href="admins/index.php" class="btn btn-primary">Admin</a></h3> <br>

Username: <br><input type="text" name="uname" size="40" required><br><br>
Password: <br>&nbsp<input type="password" name="pword" size="40" required><br><br>
<input type="submit" class="button" value="Log In" style="text-align: right;margin-left: 267px; background-color:#bf80ee;"><br></form></div>
<div class="register" style="position: absolute; top: 70%; left: 50%; transform: translate(-50%, -50%);">
<a href="register.php" style="font-size: 10px;">don't have account?</a><br>
<a href="register.php">
  <a href="register.php" class="btn btn-primary">
  <button class="button2"> Register</button></a></div>
<style type="text/css">
.form {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: left;
}
.button{
  height: 30px;
  width: 50px;
}
.button2{
  height: 60px;
  width: 330px;
  font-size: 20px;
}
</style>
    </div>
  </div>