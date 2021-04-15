<?php 
error_reporting(0);
include_once('inc_connection.php');

    $changepassword=0;
	$gender = addslashes(trim($_POST['radio']));
	$username = addslashes(trim($_POST['username']));
	$password = addslashes(trim($_POST['password']));
	$confirm_password = addslashes(trim($_POST['confirm_password']));

	$dob = addslashes(trim($_POST['date']));
	$name = addslashes(trim($_POST['name']));
	$surname = addslashes(trim($_POST['surname']));
	$email = addslashes(trim($_POST['email']));
	$phn_no = addslashes(trim($_POST['phno']));
	$experience = addslashes(trim($_POST['experience']));
	$address = addslashes(trim($_POST['address']));
	$form = addslashes(trim($_POST['form']));
	$cate = addslashes(trim($_POST['cate']));
	$country = addslashes(trim($_POST['country']));
	$state = addslashes(trim($_POST['state']));
	$career = addslashes(trim($_POST['career']));
	$career_role = addslashes(trim($_POST['career_role']));
	$career_id = addslashes(trim($_POST['career_update_id']));
	
	$target = "my-account.php?id=".$career_id;

	if(!empty($password) && !empty($confirm_password) && $password != $confirm_password){
		header('location:'.$target.'&error=2');
		exit;
	}
	if(!empty($password) && !empty($confirm_password) && $password == $confirm_password){
		$query = mysql_query("update `career` set password = '$password' where id='$career_id'"); 
		if($query){
			$changepassword=1;
		}
		
	}
			
			
		define ("MAX_SIZE","1000"); 
		function getExtension($str)
		{
			 $i = strrpos($str,".");
			 if (!$i) { return ""; }
			 $l = strlen($str) - $i;
			 $ext = substr($str,$i+1,$l);
			 return $ext;
		}

		$errors=0;
		$image=$_FILES['image']['name'];
		if ($image) 
		{
			$filename = stripslashes($_FILES['image']['name']);
			$extension = getExtension($filename);
			$extension = strtolower($extension);
			
			if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")&& ($extension != "JPG") && ($extension != "JPEG") 
			&& ($extension != "PNG") && ($extension != "GIF")) 
			{
				echo '<h3>Unknown extension!</h3>';
				$errors=1;
			}
			else
			{
				$size=filesize($_FILES['image']['tmp_name']);
				if ($size > MAX_SIZE*1024)
				{
					echo '<h4>You have exceeded the size limit!</h4>';
					$errors=1;
				}
				
				$image_name=time().'.'.$extension;
				$newname='upload/'.$image_name;
				mysql_query ("update career set file='$newname' where id='$career_id'");
				$copied = copy($_FILES['image']['tmp_name'], $newname);
				if (!$copied) 
				{
					echo '<h3>Copy unsuccessfull!</h3>';
					$errors=1;
				}
	
				//else //echo '<h3>uploaded successfull!</h3>';
			}
		}

					

	
	/*		mysql_query("INSERT INTO  `career` (
	`username`,
	`password`,
	`gender` ,
	`dob` ,
	`name` ,
	`email` ,
	`phn_no` ,
	`experience` ,
	`address`,
	`form` ,`file`,
	`cate`,
	`status` ,
	`dateAdded`
	)
	VALUES ('$username','$password','$gender','$dob','$name','$email','$phn_no','$experience','$address','$career','".$newname."','$cate','0', NOW( )
	)"); */
	
	$query_update = mysql_query("update `career` set gender ='$gender',dob='$dob',cate = '$cate',role = '$career_role',name='$name',email='$email',phn_no='$phn_no',experience='$experience',
    address='$address',surname='$surname',country='$country',state='$state' where id='$career_id'");
	if($query_update){
		header('location:'.$target."&success=1");	
	}
	?>
	<?php
	if($changepassword == '1'){
		include 'mail.php';
	}
 ?>
