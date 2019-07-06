<?php
require_once('newheader.php');
require_once('class/comment.class.php');

$comment = new comment();



if(isset($_POST['forumsubmit']))
{
  $comment = $comment->save();
  if(is_integer($comment))
  {
    $msg = 'User Register';

  }
  else
  {
    $msg = 'User Not Register';
  }
}

?>
<style>
.col-md-12 h2
{
  color: #ff9000;
  font-size: 30px;
  margin-top: 20px;
  margin-bottom: 20px;

}

.btn.btn-primary {
    background: #ff9000;
    border: 1px solid #ff9000;
    color: #fff;
    width: 100px;
    height: 40px;
    font-size: 16px;
    margin-top: 20px;
    margin-bottom: 20px;
</style>

<div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">

         <form action="" method="post" class="p-5 bg-white">
             <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" >Comment</label> 
                  <textarea name="comment"  cols="20" rows="2" class="form-control" placeholder="State your view"></textarea>
                </div>

                <div class="col-md-12 col-lg-8 mb-5">

         <form action="" method="post" class="p-5 bg-white">
             <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" >Email</label> 
                  <textarea name="email"  cols="20" rows="2" class="form-control" placeholder=""></textarea>
                </div>

              </div>

              <div class="form-group">
                <div class="col-md-12">
                 <input type="submit" name="forumsubmit" value="Submit" class="btn btn-primary  py-2 px-4 rounded-0">

                </div>
              </div></form></div></div></form></div></div></div>
          


<div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
 <div class="panel-body">

  <?php
  $comment = new comment();

  $res = $comment->retrieve();

  ?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Comment</th>
                                        <th>Email</th>  

                                         <th>Action</th>

                                        
                                      
                                    </tr>
                                </thead>
                                 <tbody>

                                   <?php foreach ($res as $k=>$fn) { ?>
                                    <tr class="odd gradeX">
                                        <td> <?php echo $k + 1; ?></td>
                                        <td> <?php echo $fn->comment; ?></td>
                                        <td> <?php echo $fn->email; ?></td>
                                        

                                           
                                     
                                    <td> 

                                          <div class="form-group"><a href="commentreply.php">
                 <input type="submit" name="forumsubmit" value="Reply" class="btn btn-primary  py-2 px-4 rounded-0">

                </div></td>
                                       
                                        
                          
                                    </tr> 
                                <?php } ?>
                        </tbody></table></div></div></div></div>
                               
                               
<!-- this is for question -->
<?php
include('footer.php')
?>