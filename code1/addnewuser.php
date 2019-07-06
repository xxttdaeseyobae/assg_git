<?php

require_once('class/user.class.php');
$users = new users;

if(isset($_POST['addusersubmit']))
{
  $users = $users->save();
  if(is_integer($users))
  {
    $msg = 'Product Successfully Added';
  }
  else
  {
    $msg = 'Unsuccessful';
  }
}
?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Product Adding</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Add New Product</span></div>
      </div>
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
                    <label> User Name:</label>
                  <input type="text" name="Username" class="form-control" placeholder="Product Name"  required>
                </div>
            
               
                 
               
                    <div class="formrow">
                        <label>Email</label>
                        <input type="Email"  class="form-control " placeholder="Email" name="Email" required>
                    </div>
              
              
                    <div class="formrow">
                        <label>Address:</label>
                        <input type="text"  name="Address" class="form-control " placeholder="Address"
                    </div>
                      
                    <br>
                     <form action="">
                      <input type="radio" name="negotiable" value="Negotiable"> Negotiable
                      <input type="radio" name="notnegotiable" value="Not Negotiable"> Not Negotiable
                    </form>

<br>
                  <br>

              
              <input type="submit" name="addproductsubmit" id="submitbutton" class="btn" value="Add Product">
               
            </div>

              </form>
          </div>
      </div>
      </div>
 
   </div>

 </div>

 <?php
include('footer.php');
?>

