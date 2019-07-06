<!DOCTYPE html>
<html>
<head>
	<title>K-Merchandise Nepal</title>
</head>
<link rel="stylesheet" type="text/css" href="edit.css">
<body background="pictures/wallpaper.jpg" style="width: 100%;">




<div class="logo" style="background-color:white;">
  <img src="pictures/logo3.png" style="float: left;" width="8%">
	<div class="hi">
<h1><font face="Ostrich Sans" color="purple" style="text-align: center;"> K-merchandise Nepal </font>

</h1>
<div class="reg" style="float:right" "margin-left:200px;">
  <div id="reg2">
<img src="pictures/user.png" style="width: 4%;border-radius: 50%;">
   <br></div>
   <div class="reg3">

<a href="register.php">Register</a>
  <a href="login.php">Log in</a>

</div>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
<form>
  <input type="text" name="search" placeholder="Search..">
</form>
</div>
</div>

<style> 
input[type=text] {

  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 10px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}-

.navbar {
  overflow: hidden;
  background-color:pink;  

  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.navbar .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .navbar a:not(:first-child) {display: none;}
  .navbar a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .navbar.responsive .icon {
    position: absolute;
    right: 0;
    bottom:0;
  }
  .navbar.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
</style>
</head>
<body>

<div class="navbar" id="myNavbar" style="background-color: lightblue;">
   <a href="#home">Home</a>
	
	<div class="dropdown">
    <button class="dropbtn"> <a href="Categories.php"> Categories</a>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">School accesories</a>
      <a href="#">Clothes</a>
      <a href="#">Merchandise</a>
    </div>
  </div> 
	<a href="#">Event</a>
	<a href="#">Artist</a>	
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myNavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
</script>
<style>

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>








</body>
</html>
