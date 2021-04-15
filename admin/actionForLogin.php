<?php

session_start();

include_once('inc_connection.php');

if(isset($_POST["submit"]))
{
	$name = addslashes(trim($_POST['username']));
	$pass = addslashes(trim($_POST['password']));	

	 $sql = "SELECT * FROM `adminlogin` where userName = '$name' and password = '$pass'";

	$result = mysql_query($sql);
	$SelResult = mysql_fetch_array($result);
	$id = $SelResult['id'];

	$emailId = $SelResult['emailId'];
	
	if(!$result || mysql_num_rows($result) <= 0)

	{
			header('location:wrongUser.php');
	}
	else
	{
			header('location:index1.php'); 

			$_SESSION['emailId'] = $emailId;
			$_SESSION['login_id'] = $id;
			$_SESSION['username'] = $name;
	} 	
}
?>