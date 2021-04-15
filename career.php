<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.redchillies.com/career.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Apr 2015 09:34:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INDIA STAR Production House</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

    <script src="js/validate2.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
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


<div class="contWrapper">

<script type="text/javascript" id="sourcecode">
    $(function () {

        var pageName = (function () {
            var a = window.location.href,
            b = a.lastIndexOf("index.php");
            return a.substr(b + 1);
        }());

        //alert(pageName);

        if (pageName == "") {
            $("#nav > li:nth-child(1) a").addClass('navActive');
        }


        var movi = ["yodha.aspx", "vardi.aspx", "up-coming.aspx", "student-year.aspx", "ra-one.aspx", "phir-bhi-dill-hindustani.aspx", "past-movies.aspx", "paheli.aspx", "om-shanti.aspx", "my-name-is-khan.aspx", "movie-rights.aspx", "main-ho-na.aspx", "dushmani.aspx", "damini.aspx", "chalte-chalte.aspx", "billu.aspx", "asoka.aspx", "arjun.aspx"]
        for (i = 0; i < movi.length; i++) {
            if (pageName == movi[i]) {
                $("#nav > li:nth-child(2) a").addClass('navActive');
            }
        }


        if (pageName == "past-movies.aspx") {
            $('.leftNav ul li:eq(1) a').addClass('leftNavA');
        }

        if (pageName == "movie-rights.aspx") {
            $('.leftNav ul li:eq(2) a').addClass('leftNavA');
        }


        if (pageName == "vfx.aspx") {
            $("#nav > li:nth-child(3) a").addClass('navActive');
        }


        if (pageName == "equipment.aspx") {
            $("#nav > li:nth-child(4) a").addClass('navActive');
        }


        if (pageName == "events.aspx") {
            $("#nav > li:nth-child(5) a").addClass('navActive');
        }


        /*if (pageName == "digital.aspx") {
	   $("#nav > li:nth-child(6) a").addClass('navActive');
	   }*/


        var otherWorks = ["ad-show-reel.aspx", "tv-shows.aspx"]
        for (i = 0; i < otherWorks.length; i++) {
            if (pageName == otherWorks[i]) {
                $("#nav > li:nth-child(6) a").addClass('navActive');
                $('.leftNav ul li:eq(' + i + ') a').addClass('leftNavA');
            }
        }

        var aboutUs = ["profile.aspx", "kkr.aspx"]
        for (i = 0; i < aboutUs.length; i++) {
            if (pageName == aboutUs[i]) {
                $("#nav > li:nth-child(7) a").addClass('navActive');

                $('.leftNav ul li:eq(' + i + ') a').addClass('leftNavA');
            }
        }



        ////////////////////

        //$('#nav > li > div').prepend("<img src='/images/uparrow.gif' class='uparrow' />");



        $('#nav > li').hover(function () {

            var hh = $(this).children('div.dropmenu2').height();
            var ww = $(this).children('div').width();
            $(this).children('div').css('height', hh).css('width', ww);

            var uparrowleft = parseInt($(this).width() / 2 - 6);
            $('.uparrow').css('left', uparrowleft);

            $(this).children('div').stop(true, true).slideDown(400);

        },
            function () {

                $(this).children('div').stop(true, true).slideUp(200);

                $('.dropmenuRight').hide()
                $('.navList2 li a').removeClass('nl2A');
                $('.navList2 li a:first').addClass('nl2A');
                $('.dropmenuRight:first').show();

            });

        ///////////////////////////////////////

        $('.dropmenuRight').hide()
        $('.navList2 li a:first').addClass('nl2A');
        $('.dropmenuRight:first').show();

        $('.navList2 li').hover(function () {

            $('.navList2 li a').removeClass('nl2A');
            $(this).children('a').addClass('nl2A');

            var navList2Index = $(this).index();

            if ($('.dropmenuRight:eq(' + navList2Index + ')').is(':visible')) {
                $('.dropmenuRight:eq(' + navList2Index + ')').show()
            }
            else {
                $('.dropmenuRight').hide();
                $('.dropmenuRight:eq(' + navList2Index + ')').stop(true, true).fadeIn();
            }
        },
            function () {
                $('#movirights li a').removeClass('nlA');
                $('#movirights li:first-child a').addClass('nlA');
                $('.movirightsImg').attr('src', $('#movirights li:first-child a').attr('rel'))
            }
            );

        ///////////////////////////////////////

        $('#movirights li a').hover(function () {
            $('#movirights li a').removeClass('nlA');
            $('.movirightsImg').attr('src', $(this).attr('rel'))
            $(this).addClass('nlA');
        });
        $('.navList li:last-child').css('border-bottom', 'none');


        ///////////////////////////////////////	<img src='/images/movirights1.jpg'' />


        $('#pastMoviLeft li a').hover(function () {
            var findPMLimg = $(this).attr('rel');
            $('#pastMoviRight').prepend("<img src='/images/" + findPMLimg + "' class='pmlImg' />");
        },
            function () {
                $('.pmlImg').remove();
            }
            );

        $('#pastMoviRight li a').hover(function () {
            var findPMLimg = $(this).attr('rel');
            $('#pastMoviLeft').prepend("<img src='/images/" + findPMLimg + "' class='pmlImg' />");
        },
        function () {
            $('.pmlImg').remove();
        }
        );





    });
</script>


<div class="topPanel">
    <div class="navSec">
        <div class="center relative">
            <?php include_once('menu.php'); ?>
            <!-- navigation end -->
            <!--<div class="navSecRight"><a href="news/news.php" class="topNews">News</a><a href="career.php" class="topCareer">careers</a><a href="contact.php" class="topContact">contact</a></div>-->

            <div class="logoPanel">
                <div class="logoSec">
                    <!--<a href="/"><img src="/images/red-chillies-logo.png" width="153" height="65" alt="KIndia Films" title="KIndia Films" /></a>-->
                    <h1><img src="images/logo_k.png" style="height: 77px; margin-top: -27px; width: 125px; margin-left:-127px;" /></h1>
                </div>
                <!-- logo section end -->
                <div class="topFollowus">
                    <span>Follow us :</span>
                    <a href="https://www.facebook.com/RedChilliesEnt?ref=hl" class="facebook" target="_blank">facebook</a>
                    <a href="https://twitter.com/redchilliesent" target="_blank" class="twitter">twitter</a>
                    <a href="https://www.youtube.com/happynewyear" target="_blank" class="youtube">youtube</a>
                    <a href="http://instagram.com/redchilliesent" target="_blank" class="instagram">instagram</a>
                    <!--<a href="#" class="pinterest">pinterest</a> -->
                </div>
                <!-- topFollowus end -->
            </div>
            <!-- logo section end -->

        </div>
        <!-- center end -->
    </div>
    <!-- nav section end -->






</div>
<!-- topPanel end -->




<div class="logoBg"></div>

    <!-- moviList holder end -->
    <div class="homeBody">
        <div class="center relative">
            <img src="images/camera.png" width="116" height="212" alt="" class="homeCamera" />
            <img src="images/chair.png" width="147" height="161" alt="" class="homeChair" />
            <!--<img src="images/cont-srk.png" width="212" height="515" alt="" class="contSrk" /> -->
            <div class="leftSection">
                <script type="text/javascript" src="js/contLeftSlider.js"></script>
<script type="text/javascript">
$(function(){

$('.relatedSite span').click(
function (ee) {

$('.relatedSiteList').slideToggle();
ee.stopPropagation();

});

$(document).click(function(){
$('.relatedSiteList:visible').slideUp();
});


});
</script>

            </div>
            <!-- left section end -->
            <div class="rightSection">
                <div class="whatOn contwhatOn">

<script type="text/javascript" src="js/whatsOnSlider.js"></script>
<h2>What's On</h2>
   <div id="text-rotator">
    <div id="_whatson_WhatsOnDiv"><span style='display: none;'><a href='news/news-detail0055.php?id=11' ><strong> Deepika lives her 'DDLJ' moment in 'Chennai Express'</strong></a></span><span style='display: none;'><a href='news/news-detailf41b.php?id=10' ><strong> Chennai Express Trailer Analysis</strong></a></span><span style='display: none;'><a href='news/news-detail4ef9.php?id=12' ><strong> SRK and Deepika launch Chennai Express trailer!</strong></a></span><span style='display: block;'><a href='news/news-detail0b30.php?id=2' ><strong> Shah Rukh Khan to shoot for 'Chennai Express' in Munnar</strong></a></span></div>


</div>
   <a href="news/news.php" class="more">more</a>
                </div>
                <!-- whatOn end -->
            </div>
            <!-- right section end -->
            <div class="contentAreaTop">
                <div class="contentAreaBtm">
                    <div class="contentArea">
                        <div class="contTop">

						<?php $career = $_REQUEST['id'];
								    if($career == '1'){ $career_name = "Singer"; $cate = "Silver";}
								elseif($career == '2'){ $career_name = "Musician";  $cate = "Silver";}
								elseif($career == '3'){ $career_name = "Artist";  $cate = "Silver";}
								elseif($career == '4'){ $career_name = "Technician";  $cate = "Silver";}
								elseif($career == '5'){ $career_name = "Cameraman";  $cate = "Silver";}
								elseif($career == '6'){ $career_name = "Editor";  $cate = "Silver";}
								elseif($career == '7'){ $career_name = "Writer";  $cate = "Silver";}
								elseif($career == '8'){ $career_name = "Director";  $cate = "Silver";}
								elseif($career == '11'){ $career_name = "Singer";  $cate = "Gold";}
								elseif($career == '12'){ $career_name = "Musician"; $cate = "Gold";}
								elseif($career == '13'){ $career_name = "Artist"; $cate = "Gold";}
								elseif($career == '14'){ $career_name = "Technician"; $cate = "Gold";}
								elseif($career == '15'){ $career_name = "Cameraman"; $cate = "Gold";}
								elseif($career == '16'){ $career_name = "Editor"; $cate = "Gold";}
								elseif($career == '17'){ $career_name = "Writer"; $cate = "Gold";}
								elseif($career == '18'){ $career_name = "Director"; $cate = "Gold";}
								elseif($career == '21'){ $career_name = "Singer"; $cate = "Platinum";}
								elseif($career == '22'){ $career_name = "Musician"; $cate = "Platinum";}
								elseif($career == '23'){ $career_name = "Artist"; $cate = "Platinum";}
								elseif($career == '24'){ $career_name = "Technician"; $cate = "Platinum";}
								elseif($career == '25'){ $career_name = "Cameraman"; $cate = "Platinum";}
								elseif($career == '26'){ $career_name = "Editor"; $cate = "Platinum";}
								elseif($career == '27'){ $career_name = "Writer"; $cate = "Platinum";}
								elseif($career == '28'){ $career_name = "Director"; $cate = "Platinum";}

								elseif($career == '29'){ $career_name = "Singer"; $cate = "General";}
								elseif($career == '30'){ $career_name = "Musician"; $cate = "General";}
								elseif($career == '31'){ $career_name = "Artist"; $cate = "General";}
								elseif($career == '32'){ $career_name = "Technician"; $cate = "General";}
								elseif($career == '33'){ $career_name = "Cameraman"; $cate = "General";}
								elseif($career == '34'){ $career_name = "Editor"; $cate = "General";}
								elseif($career == '35'){ $career_name = "Writer"; $cate = "General";}
								elseif($career == '36'){ $career_name = "Director"; $cate = "General";}


								elseif($career == '37'){ $career_name = "Producer"; $cate = "General";}
								elseif($career == '38'){ $career_name = "Others"; $cate = "General";}
								elseif($career == '39'){ $career_name = "Producer"; $cate = "Silver";}
								elseif($career == '40'){ $career_name = "Others"; $cate = "Silver";}
								elseif($career == '41'){ $career_name = "Producer"; $cate = "Gold";}
								elseif($career == '42'){ $career_name = "Others"; $cate = "Gold";}
								elseif($career == '43'){ $career_name = "Producer"; $cate = "Platinum";}
								elseif($career == '44'){ $career_name = "Others"; $cate = "Platinum";}




						?>


                            <h2>Career for <?php echo $career_name; ?></h2>
                            <!-- pageName end -->
                            <div class="breadcrumb">
                                <a href="index.php">Home</a><?php echo $career_name; ?></div>
                            <!-- breadcrumb end -->
                        </div>
                        <!-- contTop end -->

                       <!-- <form action="" method="get"> -->
<!-- callender -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
<link href="jquery.datepick.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery.datepick.js"></script>
<script type="text/javascript">
$(function() {
	$('#date').datepick();
	$('#inlineDatepicker').datepick({onSelect: showDate});
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script type="text/javascript" >

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
<!-- callender -->
                        <div class="form-blok">
                            <span class="mandatory"><span id="lbl_ErrorMsg"></span></span>
                        </div>
						<?php if(isset($_REQUEST['success']) && isset($_REQUEST['success']) && $_REQUEST['success']=='1'){ ?>
							<div class="alert alert-success fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<strong>Success !</strong> Thank you for Registering with INDIA STAR. <br/> Your username and Password is : <br/>
								<strong>Username : </strong> <?php echo $_SESSION['username']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
								<strong>Password : </strong> <?php echo $_SESSION['password']; ?>

							</div>
						<?php } ?>
						<?php if(isset($_REQUEST['error']) && isset($_REQUEST['error']) && $_REQUEST['error']=='1'){ ?>
							<div class="alert alert-danger fade in">
								<a href="#" class="close" data-dismiss="alert">&times;</a>
								<strong>Error !</strong> Username already exists.
							</div>
						<?php } ?>
						<form action="actionForCareer.php" method="post" name="form1" onSubmit="return check1(this)" enctype="multipart/form-data">
						<input type="hidden" value="<?php echo $career_name; ?>" name="career_role" id="career_role" />
						<input type="hidden" value="<?php echo $cate; ?>" name="cate" id="form1" />
						<input type="hidden" value="<?php echo $career; ?>" name="career" id="form1" />


                        <?php include_once('form_career.php'); ?>
                            <div class="contact-blok" style="width: 523px">

                                <div class="form-blok">
                                    <input type="submit" name="btnSubmit" value="Submit"  id="btnSubmit" class="submit-but" /><input name="" type="button" value="Reset" class="submit-but" onClick="javascript:window.location.href='career.php?id=<?php echo $career; ?>';" />
                                </div>
                            </div>
                            <div class="clear">
                            </div>
                        </div>
                    <!-- </form> -->
                    </div>
                </div>
            </div>
            <!-- bannerHolder end -->
        </div>
        <!-- center end -->
    </div>
    <!-- home body end -->
    <div class="contFooter">
        <div class="footerPanel">
    <div class="copyright">All Rights Reserved &copy; <strong>2013 KIndia Films</strong>.</div>
<!--<div class="footerLink"><a href="sitemap.php">Sitemap</a><span>/</span><a href="terms.php">Terms & Conditions</a><span>/</span><a href="privacy-policy.php">Privacy Statement</a><span>/</span><a href="disclaimer.php">Disclaimer</a></div>-->
      <div class="shareThis"><span class="left">Share This</span><!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style left ">
<a class="addthis_button_compact"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-519c5b4935efa893"></script>
<!-- AddThis Button END --></div>
<?php include_once('maintain.php'); ?>
 <div class="clear"></div>
    </div>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41180187-1', 'redchillies.com');
  ga('send', 'pageview');

</script>
        <!-- moviList holder end -->
    </div>
</div>
<!-- homeWrapper end -->
</form>
</body>

<!-- Mirrored from www.redchillies.com/career.aspx by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Apr 2015 09:34:51 GMT -->
</html>
