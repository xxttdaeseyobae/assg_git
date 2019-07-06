<?php
require_once('admindashboardheader.php')
?>
<?php
// including the database connection file
include_once("includes/Crud.php");
include_once("includes/Validation.php");
 
$crud = new Crud();
$validation = new Validation();
 
if(isset($_POST['update']))
{    
    $UserID = $crud->escape_string($_POST['UserID']);
    
    $Username = $crud->escape_string($_POST['Username']);
      $Email = $crud->escape_string($_POST['Email']);
    $Address = $crud->escape_string($_POST['Address']);
     $Phone = $crud->escape_string($_POST['Phone']); 
      $Password = $crud->escape_string($_POST['Password']);
   
    
    
    $msg = $validation->check_empty($_POST, array('Username', 'Email','Phone','Address','Password'));
   
    $check_email = $validation->is_email_valid($_POST['Email']);
    
    // checking empty fields
    if($msg) {
        echo $msg;        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } 
    elseif (!$check_email) {
        echo 'Please provide proper email.';    
    } else {    
        //updating the table
        $result = $crud->execute("UPDATE users SET Username='$Username',Email='$Email', Phone='$Phone', Address='$Address', Password='$Password' WHERE UserID=$UserID");
        
        //redirectig to the display page. In our case, it is index.php
       echo $msg='Successful';
    }
  }
