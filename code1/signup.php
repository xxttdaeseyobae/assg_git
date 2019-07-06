<?php
include('newheader.php');
require_once('class/user.class.php');
$user = new user;

if (isset($_POST['submit'])){
        extract($_POST);
        $register = $user->reg_user($firstname, $lastname, $email, $phonenumber, $location, $dateofbirth, $password);
        if ($register) {
            // Registration Success
            echo "<div style='text-align:center'>Registration successful <a href='login.php'>Click here</a> to login</div>";
        } else {
            // Registration Failed
            echo "<div style='text-align:center'>Registration failed. Email or Username already exits please try again.</div>";
        }
    }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >
body{
  margin: 0;
  padding: 0;
  background: url(image.jpg);
  background-size: cover;
  background-position: center;
  font-family: sans-serif;
 background-image: url("images/abc.jpg");
 background-color: #cccccc;
}
.pageTitle{
  text-align: center;
  color:#990000;
}

    </style>
  </head>
  <body>

    <div class="pageTitle">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <h1 class="page-heading">   User Registration</h1>
          </div>
          

      </div>
    </div>
    <!-- Page Title End -->
    <div class="listpgWraper">
      <div class="container">
        <div class="row">

            <div class="userccount">
            <div class="tab-content">
            <form action="" method="post">
                <?php if(isset($msg))
                echo $msg;
               ?>
             <div id="wsell" class="formpanel tab-pane fade in active">
                <div class="formrow">
             <label>First Name</label>
             <input type="text" name="firstname" class="form-control" placeholder="firstname" required>
             </div>
                    <div class="formrow">
             <label>Last Name</label>
             <input type="text" name="lastname" class="form-control" placeholder="lastname" required>
             </div>

             <div class="formrow">
             <label>Email</label>
             <input type="text" name="email" class="form-control" placeholder="email" required>
             </div>

               <div class="formrow">
                        <label> Phone Number:</label>
                      <input type="number" name="phonenumber" class="form-control" placeholder="Phone Number" required>
                    </div>



                        <div class="formrow">
                            <label>Location</label>
                            <input type="text" name="location" class="form-control" placeholder="Location" required>
                        </div>


                        <div class="formrow">
                            <label>Date Of Birth</label>
                            <input type="date"  class="form-control " placeholder="Date of Birth" name="dateofbirth" required>
                        </div>


                        <div class="formrow">
                            <label>Password</label>
                            <input type="password"  class="form-control " placeholder="password" name="password" required>
                        </div>

                  <input type="submit" name="submit"id="submitbutton" class="btn" value="Submit">

                </div>

                  </form>
              </div>
          </div>
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
<?php
include('footer.php');