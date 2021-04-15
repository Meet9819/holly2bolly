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
        <script type="text/javascript" charset="utf-8">
      $(function(){
        $("input").uniform();
		$('.sign').click(function(){
			$('.message').fadeIn();
		})
		$('.message').click(function(){
			$('.message').fadeOut();
		})
      });
    </script>
	<script type="text/javascript" >

	function check(form)
		{
			var numtest= /^[0-9]+$/;
			
			var emailtest=/^[a-zA-Z][\w\_\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/;
			
			
			if(form.username.value=='Username') {
					alert("Please enter your User Name.");
					form.username.focus();
					return(false);
				}
				
			if(form.password.value=='password')
			{
				alert("Please Enter your Password.");
				form.password.focus();
				return(false);
			}
					
		}
</script>

  </head>

  <body>

<div style="background-color:#333333" class="login-sec-wrapper">
<div class="container-fluid login-wrapper">
        <div class="container text-center login-section">
            <div class="main-box login-panel">
                <h3>H2B </h3>
        <form method="post" action="actionForLogin.php" onSubmit="return check(this)">
             
             
               <div class="form-group">
                  <input id="username" name="username" type="text" value="Username" onfocus="if(this.value=='Username')this.value=''" onblur="if(this.value=='')this.value='Username'" />
               </div> 
               <div class="form-group">
                   <input id="password" name="password" type="password" value="password" onfocus="if(this.value=='password')this.value=''" onblur="if(this.value=='')this.value='password'" />
               </div> 

              <div class="form-group clearfix">
                <div class="text-center">
                    <input class="btn-sub" name="submit" type="submit" value="LOGIN" />
                </div>
            </div> 
            </form>
            </div>
        </div>
    </div>
    </div>
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>

