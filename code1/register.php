
<!DOCTYPE html>
<html>
<head>
	<title>	Register</title>
</head>
<body>

<div class="Register">
<button> <a href="index.php">Back</a> </button>
<div id="registerr" align="center">
		<h1>Register</h1>
		<fieldset>	
<form name="register" method="post" action="backend/register.php" id="regform">
<p>UserName:<input type="text" name="pname" placeholder="Enter your username" size="46" required><br><br></p>
<p>Password:<input type="text" name="sname" placeholder="Enter password" size="46" required><br><br></p>
<p>E-mail Address:<input type="password" name="pw" placeholder="Email Address (abc@example.com)*" size="46" required><br><br></p>
<!-- <p>Re-type Password:</p><input type="password" name="rpword" placeholder="Re-Type Password*" size="46" required><br><br> -->
<fieldset>
<legend><h2><strong>Personal info</strong></h2></legend>

Address: <input type="text" name="add" placeholder="Address" required><br><br>
Phone no.: <input type="text" name="phnumber" placeholder="Phone Number*" required><br><br>
 
</fieldset></fieldset><br>

<input type="submit" class="button" value="Register">

</form>
<style type="text/css">
.register {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: left;
}
body{
	background-color: #cccccc;
	background-image: url("pictures/running.jpg");
	
	
}
.button
{
	height: 60px;
  width: 330px;
  font-size: 20px;
}
</style>

</div>
</div>
<script>
      function submitreg() {
        var form = document.reg;
        if (form.name.value == "") {
          alert("Enter name.");
          return false;
        } else if (form.uname.value == "") {
          alert("Enter username.");
          return false;
        } else if (form.upass.value == "") {
          alert("Enter password.");
          return false;
        } else if (form.uemail.value == "") {
          alert("Enter email.");
          return false;
        }
      }
    </script>
</body>
</html>

