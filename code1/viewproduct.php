<?php
require_once('admindashboardheader.php')
?><?php
//including the database connection file
//include_once("includes/Crud.php");
 
//$crud = new Crud();
 
//fetching data in descending order (lastest entry first)
//$query = "SELECT * FROM product ORDER BY id DESC";
//$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
  <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

<Pa <div class="listpgWraper">
  <div class="container">
    <div class="row">
        <h1 class="page-heading">View All Products</h1>
 
                       
                       <?php
//including the database connection file
include_once("class/user.class.php");
 
 $crud = new User();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM product ORDER BY id DESC";
$result = $crud->getData($query);
//var_dump($result);
//echo '<pre>'; print_r($result); exit;
?>
                      
     <table width="70%" class="table table-striped table-bordered table-hover" id="dataTables-example">
  

    <tr bgcolor='#CCCCCC'>
        <td>Product Name</td>
           <td>Product Quantity</td>
            <td>Product Price</td>
             
        
        <td>Update</td>
    </tr>

    <?php 

    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['productname']."</td>";
        echo "<td>".$res['productquantity']."</td>";
        echo "<td>".$res['productprice']."</td>";
                 
          
        echo "<td><a href=\"editproducts.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
   </thead>
  </table>
  <p style="color: red;"><a href="addnewproduct.php">Want to add a new product??</p></a>
</div></div>
</div></div>




  <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>

    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

      <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

