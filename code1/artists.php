<?php 
include ('newheader.php');
 ?>
<img src="pictures/hello.jpg" width="40%" style="margin: auto; height: auto;" >
<h1 style="margin: auto;">Seungri </h1>
<form method="post" action="likesincrease.php">
<p style="text-align: center;"> Hello its seungri. If you like this page give us a 
<button >Like</button>

</h1>
<?php
include_once("class/user.class.php");
 
$crud = new User();
 
// //getting id from url
// //$id=$_GET['id'];
 //$id = $crud->escape_string("SELECT * FROM product WHERE id=$id");

 
// //selecting data associated with this particular id
$res = $crud->single_getData("SELECT * FROM likes_counter ");

// var_dump($res);
// $id=$res['id'];
// $new_like=$res['likes_num']+1;

// $crud->execute("UPDATE likes_counter SET likes_num='$new_like' WHERE id=$id");
// redirect('http://localhost/assg_git/code1/artists.php');
?>

<h5 align="center" >This post has been Liked by:<?php echo $res['likes_num'] ?></h5> <br>
</p>
</form>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
	<br>
	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br>
	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
<br>
<br>
</p>




<div class="com" align="center" > 
	Want to leave us a comment?
	
<textarea rows="5" name="comment"  ></textarea>
<button>Submit</button>
 <?php 
include ('footer.php');
 ?>