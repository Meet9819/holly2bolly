<?php
$page = "register";
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<!--	<link rel="shortcut icon" href="images/favicon.ico"/>-->
	<title>Register | INDIA STAR Production House</title>
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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <script src="js/validate2.js"></script>

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
<script type="text/javascript">
    window.history.forward(-1);

    function validateemail(emailadd)
    {
        var str=emailadd
        var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
        if (filter.test(str))
        return true;
        else
        {
	        return false;
        }
    }

    function avoidSpecialChars(elm, str) {
        for(var i = 0; i < str.length; i++) {
            if(elm.value.indexOf(str.charAt(i)) >= 0) {
                elm.focus();
                return false;
            }
        }
        return true;
    }


    function change_image()
    {
        document.getElementById('Img').src='img.aspx?rand='+Math.random();
        document.getElementById('lbl_ErrorMsg').innerHTML=null;
        return false;
    }

    function allTrim(s)
    {

	    for(i=0;i<s.length;i++)
	    {
		    if(s.charAt(i)!=' ')
		    {
			    break;
		    }
	    }
	    s=s.substr(i)
	    if(s.length>0)
	    {
	    for(i=s.length-1,j=0;i>=0;i--,j++)
	    {
		    if(s.charAt(i)!=' ')
		    {
			    break;
		    }
	    }
	    s=s.substr(0,s.length-j)
	    }
	    return s
    }

    function checkForm()
    {
        var m_Return_Statement='';
        try{
            //Name
             if(document.getElementById('txtName').value.search(/\S/) == -1) {
                alert('Please enter name');
                document.getElementById('txtName').focus();
                return false;
             }

             if(!avoidSpecialChars(document.getElementById('txtName'), '<>%"')) {
		        alert('Please don' + "'" + 't use <,>,% in name');
		        document.getElementById('txtName').focus();
		        return false;
	         }

             //Highest Qualification
             if(document.getElementById('txtHighestQualification').value.search(/\S/) == -1) {
                alert('Please enter highest qualification');
                document.getElementById('txtHighestQualification').focus();
                return false;
             }

             if(!avoidSpecialChars(document.getElementById('txtHighestQualification'), '<>%"')) {
		        alert('Please don' + "'" + 't use <,>,% in highest qualification');
		        document.getElementById('txtHighestQualification').focus();
		        return false;
	         }

	         //position Applied For
             if(document.getElementById('txtPosAppl').value.search(/\S/) == -1) {
                alert('Please enter position applied for');
                document.getElementById('txtPosAppl').focus();
                return false;
             }

             if(!avoidSpecialChars(document.getElementById('txtPosAppl'), '<>%"')) {
		        alert('Please don' + "'" + 't use <,>,% in position applied for');
		        document.getElementById('txtPosAppl').focus();
		        return false;
	         }

	         //Email
            if(document.getElementById('txtEmail').value.search(/\S/) != -1)
            {
    	        if(validateemail(allTrim(document.getElementById('txtEmail').value))==false)
                {
                    alert('Please enter valid email');
                    document.getElementById('txtEmail').focus();
                    return false;
                }
		    }
		    else
		    {
		        alert("Please enter your email id");
                document.getElementById('txtEmail').focus();
                return false;
		    }

		    //Year of Experience
		    if(document.getElementById('txtYearExp').value.search(/\S/) == -1) {
                alert('Please enter year of experience');
                document.getElementById('txtYearExp').focus();
                return false;
             }

		    //Phone Number
		    if(document.getElementById('txtphNo').value.search(/\S/) == -1)
            {
		        alert('Please enter phone number');
                document.getElementById('txtphNo').focus();
                return false;
		    }

            if(!avoidSpecialChars(document.getElementById('txtphNo'), '<>%"')) {
		        alert('Please don' + "'" + 't use <,>,% in phone number');
		        document.getElementById('txtphNo').focus();
		        return false;
	        }

	        if (document.getElementById('fuResume').value.search(/\S/) == -1)
            {
	            alert('Please upload resume');
	             document.getElementById('fuResume').focus();
	            return false;
            }

            //Image Verification
            if(document.getElementById('txtImgVer').value.search(/\S/) == -1) {
                alert('Please enter image verification code.');
                document.getElementById('txtImgVer').focus();
                return false;
            }

            if(!avoidSpecialChars(document.getElementById('txtImgVer'), '<>%"')) {
		        alert('Please don' + "'" + 't use <,>,% in image verification code.');
		        document.getElementById('txtImgVer').focus();
		        return false;
	         }


            return true;
        }
        catch(ex)
        {
            alert(ex.message);
        }
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
							<h1 class="title">My Account</h1>
							<div class="breadcrumbs">
								<ul>
									<li><a href="/index.php">Home</a></li>
									<li>My Account</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section pt-5 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">

					            <div class="contSec" >

            <div class="contact_content">


			 <div class="form-blok">
                            <span class="mandatory"><span id="lbl_ErrorMsg"></span></span>
                        </div>
				<script type="text/javascript">
				function check1(form)
					{
					var numtest= /^[0-9]+$/;

					var emailtest=/^[a-zA-Z][\w\_\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;

					if(form.ch_name.value=='') {
							alert("Please Enter Channel Name.");
							form.ch_name.focus();
							return(false);
						}
						if(form.months.value=='') {
							alert("Please Enter You want for how much periods.");
							form.months.focus();
							return(false);
						}
						if(form.budget.value=='') {
							alert("Please Enter Your Budget.");
							form.budget.focus();
							return(false);
						}
						if(form.date.value=='') {
							alert("Please Enter Your Releasing date.");
							form.date.focus();
							return(false);
						}
						if(form.name.value=='') {
							alert("Please Enter Name.");
							form.name.focus();
							return(false);
						}

						if(form.email.value=='') {
							alert("Please Enter Email.");
							form.email.focus();
							return(false);
						}
						if(!(emailtest.test(form.email.value)))
						{
						alert("Please enter valid email!");
						form.email.focus();
						return(false);
						}
						if(form.phno.value=='') {
							alert("Please Enter Phone No");
							form.phno.focus();
							return(false);
						}

					if(form.requirement.value=='') {
							alert("Please Enter Your Requirement.");
							form.requirement.focus();
							return(false);
						}

					}


				</script>

				<?php if(isset($_REQUEST['success']) && isset($_REQUEST['success']) && $_REQUEST['success']=='1'){ ?>
							<div class="alert alert-success fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<strong>Success !</strong> Thank you for Updating.
							</div>
						<?php } ?>
						<?php if(isset($_REQUEST['error']) && isset($_REQUEST['error']) && $_REQUEST['error']=='1'){ ?>
							<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<strong>Error !</strong> Username already exists.
							</div>
						<?php } ?>
						<?php if(isset($_REQUEST['error']) && isset($_REQUEST['error']) && $_REQUEST['error']=='2'){ ?>
							<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<strong>Error !</strong> Password and confirm Password does not match.
							</div>
						<?php } ?>
						<a class="up-btn" href="upgradeplan.php" style="float:right">Upgrade your Membership</a>
						<form action="actionForCareeredit.php" method="post" name="form1" onSubmit="return check1(this)" enctype="multipart/form-data">
						<input type="hidden" value="<?php echo $career_name; ?>" name="form" id="form" />
						<input type="hidden" value="<?php echo $cate; ?>" name="cate" id="form1" />
						<input type="hidden" value="<?php echo $career; ?>" name="career" id="form1" />

				 <?php include_once('form_account.php'); ?>
			         <div class="contact-blok" style="">


                            </div>
                            <div class="clear"></div>

			</div>

            <div class="clear" style="height:25px !important; "></div>
            </div>

            <div class="contSec" style="background:none;">
            <div class="form-blok"><span class="mandatory"><span id="lbl_ErrorMsg"></span></span></div>
            <div class="contact-blok">

            </div>

            <div class="clear"></div>
            </div>



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

</html>
