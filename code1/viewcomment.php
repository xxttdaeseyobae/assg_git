<?php
require_once('admindashboardheader.php')
?><?php
//including the database connection file
include_once("class/user.class.php");
 
$crud = new User();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM comment ORDER BY commentid DESC";
$result = $crud->getData($query);
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
        <h1 class="page-heading">View All comment</h1>
        <div class="userccount">
        <div class="tab-content"> 
 <!-- Page Content -->
       <div class="">
    <div class="container">
    <div class="col-md-10 col-lg-offset-1">
    <div class="mt-wrapper mt-style-button1">


    </div>
        <div> 
                       
                       <?php
//including the database connection file
include_once("class/user.class.php");
 
$crud = new User();
 
//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM comment ORDER BY commentid DESC";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>
                        <div class="panel-body">
      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
   <thead>
<br/><br/>
    <tr bgcolor='#CCCCCC'>
        <td>Comment</td>
           <td>Date</td>
           <td>UserID</td>
             
        
        <td>Update</td>
    </tr>

    <?php 

    foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$res['comment']."</td>";
        echo "<td>".$res['date']."</td>";
        echo "<td>".$res['UserID']."</td>";

                 
          
        echo "<td><a href=\"editcomment.php?commentid=$res[commentid]\">Edit</a> | <a href=\"deletecomment.php?commentid=$res[commentid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
    }
    ?>
   </thead>
  </table>
</div></div>
</div></div>
</div>
</div>
</div>
</div>
</div>
</div>


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

