<?php $page = "register"; ?>
<!doctype html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title>Register | H2B  Production House</title>
	<meta name="description" content=" H2B Films Entertainments is a company in the global entertainment industry."/>
	<meta name="keywords" content=" H2B Films Entertainments, Film Production House in Mumbai"/>

	<meta property="og:site_name" content=" H2B Films Entertainments" />
	<meta property="og:title" content=" H2B Films Entertainments" />
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
	<link href="../ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="../ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

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

    function limitText(limitField, limitNum) {
		if (limitField.value.length > limitNum) {
			limitField.value = limitField.value.substring(0, limitNum);
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

             //Address
             if(document.getElementById('txtAddress').value.search(/\S/) == -1) {
                alert('Please enter address');
                document.getElementById('txtAddress').focus();
                return false;
             }

             if(!avoidSpecialChars(document.getElementById('txtAddress'), '<>%"')) {
		        alert('Please don' + "'" + 't use <,>,% in address');
		        document.getElementById('txtAddress').focus();
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

		    if(document.getElementById('txtPhNo').value.search(/\S/) == -1)
            {
		        alert('Please enter phone number');
                document.getElementById('txtPhNo').focus();
                return false;
		    }


             if(!avoidSpecialChars(document.getElementById('txtPhNo'), '<>%"')) {
		        alert('Please don' + "'" + 't use <,>,% in phone number');
		        document.getElementById('txtPhNo').focus();
		        return false;
	        }

             //State
             if(document.getElementById('txtState').value.search(/\S/) == -1) {
                alert('Please enter state');
                document.getElementById('txtState').focus();
                return false;
             }

             if(!avoidSpecialChars(document.getElementById('txtState'), '<>%"')) {
		        alert('Please don' + "'" + 't use <,>,% in state');
		        document.getElementById('txtState').focus();
		        return false;
	         }

            if(document.getElementById('txtComments').value.search(/\S/) == -1) {
                alert('Please enter comments');
                document.getElementById('txtComments').focus();
                return false;
            }

            if(!avoidSpecialChars(document.getElementById('txtComments'), '<>%"')) {
		        alert('Please don' + "'" + 't use <,>,% in comment');
		        document.getElementById('txtComments').focus();
		        return false;
	         }


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
		<div class="section pt-5 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">

					            <div class="contSec" >

            <div class="contact_content">
			<?php if(isset($_REQUEST['success']) && isset($_REQUEST['success']) && $_REQUEST['success']=='1'){ ?>
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Success !</strong> Thank you for Registering with H2B.<br/>
                    <p>You will be recieving the mail with you username and password shortly</p>
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
