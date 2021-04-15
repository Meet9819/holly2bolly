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
 <title>INDIA STAR Production House</title>
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

<div class="container-fluid table-wrapper">

<h2>Total Career Inquiry</h2>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.2/css/buttons.dataTables.min.css"/>


<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Sr.No</th>				
        <th>Name</th>	
        <th>Surname</th>        			
        <th>Username</th>				
        <th>Password</th>				
        <th>Email</th>
        <th>Contact No</th>	
        <th>Gender</th>				
        <th>DOB</th>			
        <th>Experience</th>	
        <th>Country</th>				
        <th>State</th>					
        <th>Image</th>				
        <th>Address</th>
        <th>Role</th>
        <th>Category</th>
        <th>Reg. Date</th>				
        <th>Upgraded To</th>				
        <th>Remaining Amount</th>				
        <th>Upgrade</th>				
        <th>Status</th>	
        <th>Paid</th>
      </tr>
    </thead>
    <tbody>
<?php
include_once('inc_connection.php');
$form = $_REQUEST['form'];
$cat = $_REQUEST['cat'];
$form_id = $_REQUEST['id'];

if(isset($_REQUEST['id1']) && !empty($_REQUEST['id1'])){							
mysql_query("update career set status = '".$_REQUEST['status']."' where id= '".$_REQUEST['id1']."'"); ?>
<script>
alert("Status Updated Successfully");
window.location.href="http://k-indiafilms.com/admin/index1.php";
</script>
<?php			
}
if(isset($_REQUEST['id2']) && !empty($_REQUEST['id2'])){
mysql_query("update career set paid = '".$_REQUEST['paid']."' where id= '".$_REQUEST['id2']."'");	
?>		
<script>
alert("Pay Status Updated Successfully");
window.location.href="http://k-indiafilms.com/admin/index1.php";
window.location.href="http://k-indiafilms.com/admin/index1.php";
</script>
<?php }
if(isset($_REQUEST['upgrade']) && !empty($_REQUEST['upgrade'])){			

mysql_query("update career set cate = '".$_REQUEST['upgradeto']."', upgrade_to='', remaining_amount='' where id= '".$_REQUEST['upgrade']."'");
}

$SelQuery = "SELECT * FROM `career` where delete_data=0 and paid=0";
//$SelQuery = "SELECT * FROM `career` ";


$SelExec = mysql_query($SelQuery);

$cntt = mysql_num_rows($SelExec);

if($cntt > 0){

$i = 0;

while($SelResult = mysql_fetch_array($SelExec))
{
$i++;
$id= $SelResult['id'];
$name= $SelResult['name'];
$surname= $SelResult['surname'];    
$username= $SelResult['username'];
$password= $SelResult['password'];
$email= $SelResult['email'];
$phn_no= $SelResult['phn_no'];
$address= $SelResult['address'];
$role= $SelResult['role'];
$category= $SelResult['cate'];    
$experience= $SelResult['experience'];
$country= $SelResult['country'];
$state= $SelResult['state'];
$gender= $SelResult['gender'];
$dob= $SelResult['dob'];
$file= $SelResult['file'];
$status = $SelResult['status'];
$dateadded = $SelResult['dateAdded'];
$paid = $SelResult['paid'];
$upgrade_to = $SelResult['upgrade_to'];
$remaining_amount = $SelResult['remaining_amount'];


if($i%2 == 0){ $style = "style='background:aliceblue;'"; } else { $style = "style='background:#fff;'"; } 							
?>   
<tr>
<td><?php echo $i; ?></td>
<td><?php echo $name; ?></td>
<td><?php echo $surname; ?></td>
<td><?php echo $username; ?></td>
<td><?php echo $password; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $phn_no; ?></td>
<td><?php echo $gender; ?></td>
<td><?php echo $dob; ?></td>
<td><?php echo $experience; ?></td>	
<td><?php echo $country; ?></td>				
<td><?php echo $state; ?></td>				
<td><img src="../<?php echo $file; ?>" style="width:40px;height:60px"></td>				
<td><?php echo $address; ?></td>
<td><?php echo $role; ?></td>
<td><?php echo $category; ?></td>
<td><?php echo date('d-m-Y',strtotime($dateadded)); ?></td>
<td style=" text-align:left;"><?php echo $upgrade_to; ?></td>
<td><?php echo $remaining_amount; ?></td>
<td>
<?php if(!empty($upgrade_to)){?>
<a href="?id=<?php echo $form_id; ?>&form=<?php echo $form; ?>&cat=<?php echo $cat; ?>&upgrade=<?php echo $id; ?>&upgradeto=<?php echo $upgrade_to;?>">Upgrade</a>
<?php } ?>
</td>
<td>
<?php if($status == 1){ ?>
<a href="?id=4&form=<?php echo $form;?>&id1=<?php echo $id;?>&status=0"><img src="images/approve.png" width="20" height="20"></a>
<?php }else{ ?>
<a href="?id=4&form=<?php echo $form;?>&id1=<?php echo $id;?>&status=1"><img src="images/disapprove.png" width="20" height="20"></a>
<?php }
?>							 
</td>	

<td >

<?php if($paid == 1){ ?>
<a href="?id=4&form=<?php echo $form;?>&id2=<?php echo $id;?>&paid=0"><img src="images/approve.png" width="20" height="20"></a>
<?php }else{ ?>
<a href="?id=4&form=<?php echo $form;?>&id2=<?php echo $id;?>&paid=1"><img src="images/disapprove.png" width="20" height="20"></a>
<?php }
?>
</td>	
</tr>
<?php
}
}
else {
?>   
<tr>
<td colspan="6">Nothing Found</td>
</tr>
<?php } ?>                  

    </tbody>
  </table>

</div>


    <div id="site_info">
        <?php include_once('footer.php'); ?>
    </div>
