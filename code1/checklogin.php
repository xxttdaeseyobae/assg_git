<?php
session_start();
require_once('class/user.class.php');
$users = new Users();
$res = $users->check_login();

if(count($res) == 1)
{
	$_SESSION['Username'] = $res[0]->Username;
	$_SESSION['Phone']=$res[0]->Phone;
	$_SESSION['Email']=$res[0]->Email;
	$_SESSION['Address']=$res[0]->Address;
	$_SESSION['Password']=$res[0]->Password;
	echo 'success';
}
else
{
	echo "Email and Password Does Not Exist";
}


?>