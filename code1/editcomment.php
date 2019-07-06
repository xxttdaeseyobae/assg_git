<?php
require_once('admindashboardheader.php')
?>
<?php
// including the database connection file

include_once("class/user.class.php");
 
$crud = new User();
$commentid=$_GET['commentid'];
$res = $crud->single_getData("SELECT * FROM comment WHERE commentid=$commentid");
 

    
    $comment = $res['comment'];
       $date = $res['date'];
        $UserID = $res['UserID'];;
    
?>


<div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Edit comment</h1>
      </div>
      
    </div>
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container">
    <div class="row">
      
        <div class="userccount">
        <div class="tab-content"> 
    
    <form name="form1" method="post" action="editproductaction.php">
        <table border="0">
            <div class="formrow">
            <tr> 
                <td>Product Name</td>
                <td><input type="text" name="productname" class="form-control "value="<?php echo $productname;?>" required></td>
            </tr>
        </div>
         
                <td>Product Quantity</td>
                <td><input type="number" name="productquantity" class="form-control" value="<?php echo $productquantity;?>" required></td>
            </tr>
            <div class="formrow">
             <tr> 
                <td>Product Price</td>
                <td><input type="number" name="productprice" class="form-control" value="<?php echo $productprice;?>" required></td>
            </tr>
        </div>
       
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</div>
</div>
</div>
</div>


     
   
    
    
   //* $msg = $validation->check_empty($_POST, array('productname', 'productquantity','productprice'));
   
   
    
    // checking empty fields
    if($msg) {
        echo $msg;        
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } 
    else {    
        //updating the table
        $result = $crud->execute("UPDATE product SET productname='$productname',  productquantity='$productquantity', productprice='$productprice' WHERE id=$id");
        
        //redirectig to the display page. In our case, it is index.php
       echo $msg='Successful';
    }
  } */
