
<?php
require_once('admindashboardheader.php')
?><?php
// including the database connection file
include_once("class/user.class.php");
 
$crud = new User();
 
//getting id from url
$id=$_GET['id'];
 //$id = $crud->escape_string("SELECT * FROM product WHERE id=$id");

 
//selecting data associated with this particular id
$res = $crud->single_getData("SELECT * FROM product WHERE id=$id");
 
//foreach ($result as $res) {

    $productname = $res['productname'];
    $productquantity = $res['productquantity'];
    $productprice = $res['productprice'];
   
//}
?>


    
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Edit Product</h1>
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

