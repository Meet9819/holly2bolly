<?php 
@session_start();
 $_SESSION['emailId'];
if($_SESSION['emailId'] == '')
{ 
@header('location:index.php');
//ob_start();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
     <title>Holly2Bolly Production House</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php include_once('head.php'); ?>
  </head>

  <body>
  
<?php 
if(isset($_GET['id']))
{$id = $_GET['id'];}
else
{$id = 1;}

?>
    <?php include_once('header.php'); ?>        

           <div class="container-fluid">
            
		<?php
        switch($id)
        {

        case "1":
            include("home.php");
            break;
        case "2":
            include("manage_prod.php");
            break;
        case "3":
            include("manage_sindi.php");
            break;
        case "4":
            include("manage_career.php");
            break;
        case "default":
            include("home.php");
            break;
        }
		  ?>
      </div>		  
    <div id="site_info">
        <?php include_once('footer.php'); ?>
    </div>

