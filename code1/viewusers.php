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
        <h1 class="page-heading">View All Users</h1>
 
                       
                       <?php
//including the database connection file
include_once("class/user.class.php");
 
 $crud = new User();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ORDER BY id DESC";
$result = $crud->getData($query);
//var_dump($result);
//echo '<pre>'; print_r($result); exit;
?>
                      
     <table width="70%" class="table table-striped table-bordered table-hover" id="dataTables-example">
  

    <tr bgcolor='#CCCCCC'>
        <td>First Name</td>
           <td>Last Name</td>
            <td>Email</td>
             <td>Phone Number</td>
             <td>Location</td>
             <td>Date of birth</td>
             <td>Password</td>
        
        <td>Update</td>
    </tr>

    <?php 

    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['firstname']."</td>";
        echo "<td>".$res['lastname']."</td>";
        echo "<td>".$res['email']."</td>";
        echo "<td>".$res['phonenumber']."</td>";         
        echo "<td>".$res['location']."</td>";
        echo "<td>".$res['dateofbirth']."</td>";
        echo "<td>".$res['password']."</td>";
          
        echo "<td><a href=\"edituser.php?id=$res[id]\">Edit</a> | <a href=\"deleteuser.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
   </thead>
  </table>
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

