<?php $page = "register"; ?>
<!doctype html>
<html lang="en-US">
	
<!-- Mirrored from tk-themes.net/html-9studio/about-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Oct 2017 06:06:34 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<title>Register | K - INDIA Films Entertainments | Film Production House in Mumbai</title>
	<meta name="description" content="K - INDIA Films Entertainments is a company in the global entertainment industry."/>
	<meta name="keywords" content="K - INDIA Films Entertainments, Film Production House in Mumbai"/>

	<meta property="og:site_name" content="K - INDIA Films Entertainments" />
	<meta property="og:title" content="K - INDIA Films Entertainments" />
	<meta property="og:url" content="about.php" />
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/ionicons.min.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/component.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
	<link rel="stylesheet" href="css/custom.css" type="text/css" media="all"/>
	<link href="http://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"/>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>

	<script type="text/javascript" src="jquery.datepick.js"></script>
<script type="text/javascript">
jQuery(function($) {
	$('#date').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
    </script>    
</head>
<body>
	<!-- Header section starts-->
	<?php require_once("header.php"); ?>
	<!-- Header section ends-->
	<div id="main">
		<div class="section page-title">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center-sm">
							<h1 class="title">Registration</h1>
							<div class="breadcrumbs">
								<ul>
									<li><a href="/index.php">Home</a></li>
									<li >Registration</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
					
					            <div class="contSec" >
            
            <div class="contact_content">
			<?php if(isset($_REQUEST['success']) && isset($_REQUEST['success']) && $_REQUEST['success']=='1'){ ?>
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Success !</strong> Thank you for Registering with HOLLY2BOLLY.<br/> Your username and Password is : <br/>
                    <strong>Username : </strong> <?php echo $_SESSION['username']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                    <strong>Password : </strong> <?php echo $_SESSION['password']; ?>

                </div>
            <?php } ?>

			 <div class="form-blok">
                            <span class="mandatory"><span id="lbl_ErrorMsg"></span></span>
                        </div>
						<script type="text/javascript">
						function validateform(){
							if(document.getElementById("cate").value==''){
								alert("Please Enter category Name");
								return false;
							}
							if(document.getElementById("username").value==''){
								alert("Please Enter Username Name");
								return false;
							}
							if(document.getElementById("name").value==''){
								alert("Please Enter Name");
								return false;
							}
							if(document.getElementById("email").value==''){
								alert("Please Enter Email");
								return false;
							}
							if(document.getElementById("phno").value==''){
								alert("Please Enter Contact Number");
								return false;
							}
							if(document.getElementById("career_role").value==''){
								alert("Please Enter Career");
								return false;
							}
							if(document.getElementById("password").value==''){
								alert("Please Enter Password");
								return false;
							}
							if(document.getElementById("date").value==''){
								alert("Please Enter Date of Birth");
								return false;
							}
							if(document.getElementById("experience").value==''){
								alert("Please Enter Your Experience");
								return false;
							}
							if(document.getElementById("address").value==''){
								alert("Please Enter Your Address");
								return false;
							}
						}
						

						</script>
						
						<?php if(isset($_REQUEST['error']) && isset($_REQUEST['error']) && $_REQUEST['error']=='1'){ ?>
							<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<strong>Error !</strong> Username already exists. 
							</div>
						<?php } ?>
						<?php if(isset($_REQUEST['success']) && isset($_REQUEST['success']) && $_REQUEST['success']=='1'){ ?>
						<form action="actionForCareer.php" method="post" name="form1" enctype="multipart/form-data" style="display:none;">
						<?php } else { ?>
						<form action="actionForCareer.php" method="post" name="form1" enctype="multipart/form-data" onsubmit="return validateform()">
						<?php } ?>
						
						 <?php include_once('form_career.php'); ?>
                            <div class="contact-blok" style="width: 523px">
                                <div class="form-blok">
                                    <input type="submit" name="btnSubmit" value="Submit"  id="btnSubmit" class="submit-but" /><input name="" type="button" value="Reset" class="submit-but" onClick="javascript:window.location.href='career.php?id=<?php echo $career; ?>';" />
                                </div>
                            </div>
							<div class="clear">
							</div>
						</form>
			</div>
			
            <div class="clear" style="height:25px !important; "></div>
            </div>
            
            <div class="contSec" style="background:none;">
            <div class="form-blok"><span class="mandatory"><span id="lbl_ErrorMsg"></span></span></div>
            <div class="contact-blok">
            	
            </div>
            
            <div class="clear"></div>
            </div> 

                    
<!--
						<form method="post" class="contact-form">
							<div class="row">
								
								<div class="col-md-4">
									<select id="career_role" name="career_role" class="mb-3">
										<option value="">Select Career</option>
										<option value="Singer">Singer</option>
										<option value="Cameraman">Cameraman</option>
										<option value="Musician">Musician</option>
										<option value="Editor">Editor</option>
										<option value="Artist">Artist</option>
										<option value="Writer">Writer</option>
										<option value="Technician">Technician</option>
										<option value="Director">Director</option>
										<option value="Producer">Producer</option>
										<option value="Others">Others</option>
									</select>
								</div>
								<div class="col-md-4">
									<input name="username" type="text" id="username" class="mb-3" required="required" placeholder="user Name">
								</div>
								<div class="col-md-4">
									<input name="password" type="password" id="password" class="mb-3" required="required" placeholder="Password">
								</div>
								<div class="col-md-4">
									<input name="name" type="text" id="name" class="mb-3" required="required" placeholder="Your Name">
								</div>
								<div class="col-md-4">
									<input name="email" type="text" id="email" class="mb-3" required="required" placeholder="Email">
								</div>
								<div class="col-md-4">
									<input name="phno" type="text" id="phno" class="mb-3" required="required" placeholder="Phone No.">
								</div>
								<div class="col-md-4">
									<input name="date" type="text" id="date" class="mb-3 datepicker" required="" data-date-format="mm/dd/yyyy" placeholder="D.O.B">
								</div>
								<div class="col-md-4">
									<select id="career_role" name="career_role" class="mb-3">
										<option value="">Select Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								
								<div class="col-md-4">
									<select id="cate" name="cate" class="mb-3">
										<option value="">Select Category</option>
										<option value="General">General Rs. 9999/- </option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<textarea name="your-message" cols="40" rows="7" class="mb-3" placeholder="Message"></textarea>
								</div>
								<div class="col-md-4">
									<label class="custom-file mb-3">
									  <input type="file" id="file2" class="custom-file-input">
									  <span class="custom-file-control"></span>
									</label>
								</div>
								<div class="col-md-4">
									<select id="experience" name="experience" class="mb-3" required="required">
											<option value="">Experience</option>
											<option value="0-1">0-1</option>
											<option value="1-2">1-2</option>
											<option value="3-5">3-5</option>
											<option value="6-10">6-10</option>
											<option value="Above 10">Above 10</option>
										</select>
								</div>
								<div class="col-md-4">
									<input type="submit" value="SEND US NOW" class="button" />
								</div>
							</div>

						</form>
-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer section starts-->
	<?php require_once("footer.php"); ?>
	<!-- Footer section ends-->
</div>

<a class="backtotop" id="backtotop"><i class="ion-android-arrow-up"></i></a>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/modernizr-2.7.1.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="js/jquery.isotope.init.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/modalEffects.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from tk-themes.net/html-9studio/about-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Oct 2017 06:06:44 GMT -->
</html>