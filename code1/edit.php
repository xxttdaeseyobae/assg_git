
<?php
require_once('admindashboardheader.php')
?><?php
// including the database connection file
include_once("includes/Crud.php");
 
$crud = new Crud();
 
//getting id from url
$UserID = $crud->escape_string($_GET['UserID']);
 
//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM users WHERE UserID=$UserID");
 
foreach ($result as $res) {

    $Username = $res['Username'];
    $Email = $res['Email'];
    $Address = $res['Address'];
    $Phone = $res['Phone'];
    $Password = $res['Password'];

}
?>


    
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Edit User Profile</h1>
      </div>
      
    </div>
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container">
    <div class="row">
      
        <div class="userccount">
        <div class="tab-content"> 
    
    <form name="form1" method="post" action="editaction.php">
        <table border="0">
            <div class="formrow">
            <tr> 
                <td>Username</td>
                <td><input type="text" name="Username" class="form-control "value="<?php echo $Username;?>" required></td>
            </tr>
        </div>

       
        <div class="formrow">
             <tr> 
                <td>Email</td>
                <td><input type="email" name="Email" class="form-control" value="<?php echo $Email;?>" required></td>
            </tr>
        </div>
         <div class="formrow">
             <tr> 
                <td>Address</td>
                <td><input type="text" name="Address" class="form-control" value="<?php echo $Address;?>" required></td>
            </tr>
        </div>
             <tr> 
                <td>Phone</td>
                <td><input type="number" name="Phone" class="form-control" value="<?php echo $Phone;?>" required></td>
            </tr>
            
        <div class="formrow">
             <tr> 
                <td>Password</td>
                <td><input type="password" name="Password" class="form-control" value="<?php echo $Password;?>" required></td>
            </tr>
        </div>
            <tr>
                <td><input type="hidden" name="UserID" value=<?php echo $_GET['UserID'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</div>
</div>
</div>
</div>

