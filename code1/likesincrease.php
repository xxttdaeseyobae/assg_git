<?php 

echo 'test';
include_once("class/user.class.php");
 
$crud = new User();
 
//getting id from url
//$id=$_GET['id'];
 //$id = $crud->escape_string("SELECT * FROM product WHERE id=$id");

 
//selecting data associated with this particular id
$res = $crud->single_getData("SELECT * FROM likes_counter ");

var_dump($res);
$id=$res['id'];
$new_like=$res['likes_num']+1;

$crud->execute("UPDATE likes_counter SET likes_num='$new_like' WHERE id=$id");
//redirect('http://localhost/assg_git/code1/artists.php');
header("Location: http://localhost/assg_git/code1/artists.php");
?>