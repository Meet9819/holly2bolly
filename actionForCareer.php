<?php 
ob_start();
session_start();
error_reporting(0);
include_once('inc_connection.php');


	$gender = addslashes(trim($_POST['radio']));
	$username = addslashes(trim($_POST['username']));
	$career_role =  addslashes(trim($_POST['career_role']));
	$password = addslashes(trim($_POST['password']));
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
	$target = "registration.php?id=".$career;

	$query = mysql_query("select * from career where username = '".$username."'") or die('Query failed error -> '. mysql_error());
	if(mysql_num_rows($query)>0){
		
		header('location:'.$target."&error=1");	
		exit;
	}
	
/* SMS Sms gateway */

$apikey = "sPbQcFPI2EmTpdPmdlGYQQ";
$apisender = "KINDIA";
$msg ="Dear $name Your Account has been Created Successfully. your user name is $username and password is $password. H2B. http://holly2bolly.in";
$num = '91'.$phn_no; 

$ms = rawurlencode($msg);  

$url = 'https://www.smsgatewayhub.com/api/mt/SendSMS?APIKey='.$apikey.'&senderid='.$apisender.'&channel=2&DCS=0&flashsms=0&number='.$num.'&text='.$ms.'&route=1';

echo $url;
$ch=curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,2);
$data = curl_exec($ch);
echo '<br/><br/>';
print($data); 


/*---------------------SMS Integration---------------------------*/
//		$custmobilenumber = '+91'.$phn_no;
//		$mess2 = "Dear $name Your Account has been Created Successfully. your user name is $username. K-India";
//		$mess3 = urlencode($mess2);
//		$ch = curl_init();
//		curl_setopt($ch,CURLOPT_URL,  "http://sms4power.com/api/swsend.asp");
//		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//		curl_setopt($ch, CURLOPT_POST, 1);
//		curl_setopt($ch,CURLOPT_POSTFIELDS,"username=t1KINDIA&password=25697877&sender=KINDIA&sendto=$custmobilenumber&message=$mess3");
//		$buffer = curl_exec($ch);
//		if(empty ($buffer))
//		{//echo " buffer is empty ";
//		}
//		else
//		{ //echo $buffer; 
//		}
//		curl_close($ch);	
	/*---------------------/SMS Integration---------------------------*/
	
			
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
		if ($image) {
			
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
				$copied = copy($_FILES['image']['tmp_name'], $newname);
				if (!$copied) 
				{
					echo '<h3>Copy unsuccessfull!</h3>';
					$errors=1;
				}
	
				else //echo '<h3>uploaded successfull!</h3>';

				

	?>

	<?php

	} 
	}
	if(empty($newname)){
		$newname='';
	}





$query = mysql_query("INSERT INTO  `career` (
	`username`,
	`password`,
	`gender` ,
	`dob` ,
	`name` ,
	`email` ,
	`phn_no` ,
	`experience` ,
	`address`,
	`form` ,
    `file`,
	`cate`,
	`status` ,
	`dateAdded`,
	`role`,
    `surname`,
    `country`, 
    `state` 
	)
	VALUES ('$username','$password','$gender','$dob','$name','$email','$phn_no','$experience','$address','$career','".$newname."','$cate','0', NOW( ),'$career_role','$surname','$country', '$state')")  or die('Query failed error -> '. mysql_error()); 

	if($query){
	include 'mail.php';
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	header('location:'.$target."&success=1");			
	}
	
?>