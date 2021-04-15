<?php 
error_reporting(0);
include_once('inc_connection.php');
session_start();
if($_POST){
	$upgraded_category = $_POST['upgraded_category'];
	$remaining_amount = $_POST['remaining_amount'];
	$id = $_SESSION['id'];
	
	$target = "my-account.php";
	
	$query = mysql_query("update career set upgrade_to ='".$upgraded_category."', remaining_amount='".$remaining_amount."' where id = '".$id."'");
	if($query){
		header('location:'.$target."?upgrade=yes");
	}
	
}
?>