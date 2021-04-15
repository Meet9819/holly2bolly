<?php 
error_reporting(0);
include_once('inc_connection.php');
session_start();
if($_POST){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$target = "login.php";
	
	$query = mysql_query("select * from career where username = '$username' and password = '$password' and delete_data = 0");
	if(mysql_num_rows($query) > 0){
		$result = mysql_fetch_array($query);
		$_SESSION['id']=$result['id'];
		header('location:my-account.php');
	}else{
		header('location:'.$target.'?error=1');
	}
	
}
?>