<?php if(isset($_REQUEST['action']) && !empty($_REQUEST['action']) && $_REQUEST['action']=='logout'){ 
	unset($_SESSION['id']);
 } ?>

<div class="noo-spinner">
	<div class="spinner">
		<div class="child double-bounce1"></div>
		<div class="child double-bounce2"></div>
	</div>
</div>
<div id="menu-slideout" class="slideout-menu hidden-md-up">
	<div class="mobile-menu">
		<ul id="mobile-menu" class="menu">
			<li class="<?php echo ($page == "home" ? "active" : ""); ?>">
				<a href="/">Home</a>
				
			</li>
			<li class="<?php echo ($page == "about" ? "active" : ""); ?>">
				<a href="/about.php">About</a>
			</li>
			<li class="<?php echo ($page == "industry" ? "active" : ""); ?>">
				<a href="/industry.php">What we do</a>
			</li>
			<li class="<?php echo ($page == "our-objective" ? "active" : ""); ?>">
				<a href="/our-objective.php">Our Promoter</a>
			</li>
			<!--<li class="<?php echo ($page == "our-plans" ? "active" : ""); ?>">
				<a href="/our-plans.php">Our Plans</a>
			</li>
			<li class="<?php echo ($page == "business" ? "active" : ""); ?>">
				<a href="/business.php">Business</a>
			</li>-->																
			<li class="<?php echo ($page == "careerinfo" ? "active" : ""); ?>">
				<a href="/careerinfo.php">Career</a>
			</li>
			<li class="<?php echo ($page == "upcomingfilms" ? "active" : ""); ?>">
				<a href="/upcomingfilms.php">Upcoming Films</a>
			</li>
           
            <li class="dropdown">
				<a href="#">Account</a>
				<i class="sub-menu-toggle fa fa-angle-down"></i>
				<ul class="sub-menu">
					<?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
				<li><a href="/my-account.php" class="">My Account</a></li>	
				<li><a href="/index.php?action=logout" class="">Logout</a></li>	
				<?php } else { ?>
				<li><a href="/login.php" class="">Login</a></li>
				<li><a href="/registration.php">Registration</a></li>
				<?php } ?>
			
				</ul>
			</li>
		    <li class="<?php echo ($page == "contact" ? "active" : ""); ?>">
				<a href="/contact.php">Contact</a>
			</li>
		</ul>
	</div>
</div>
<div class="site">
	<header id="header" class="header header-desktop header-overlay header-1">
		<div class="container-fluid">
			<div class="custom-container">
			<div class="row">
				<div class="col-md-2 p-0">
					<div class="header-left">
						<a href="/index.php" id="branding_logo">
							<img class="logo" style="width:90px;margin-left:75px;margin-top:30px" src="images/loo.png" />
							<img class="logo-alt" style="margin-top:40px;" src="images/loo.png" />
						</a> 
					</div>
				</div>
				<div class="col-md-10 p-0">
					<div class="header-right">
						<nav id="menu" class="menu menu-primary">
							<ul>
								<li class="<?php echo ($page == "home" ? "active" : ""); ?>">
									<a href="/index.php">Home</a>
								</li>
								<li class="<?php echo ($page == "about" ? "active" : ""); ?>">
				<a href="/about.php">About</a>
			</li>
			<li class="<?php echo ($page == "industry" ? "active" : ""); ?>">
				<a href="/industry.php">What we do</a>
			</li>
			<li class="<?php echo ($page == "our-objective" ? "active" : ""); ?>">
				<a href="/our-objective.php">Our Promoter</a>
			</li>
							<!--	<li class="<?php echo ($page == "our-plans" ? "active" : ""); ?>">
									<a href="/our-plans.php">Our Plans</a>
								</li>
								<li class="<?php echo ($page == "business" ? "active" : ""); ?>">
									<a href="/business.php">Business</a>
								</li>	-->															
								<li class="<?php echo ($page == "careerinfo" ? "active" : ""); ?>">
									<a href="/careerinfo.php">Career</a>
								</li>
								<li class="<?php echo ($page == "upcomingfilms" ? "active" : ""); ?>">
									<a href="/upcomingfilms.php">Upcoming Films</a>
								</li>								
								<li class="dropdown">
                                    <a href="#">Account</a>
                                    
                                    <ul class="sub-menu">
                                        <?php if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
                                    <li><a href="/my-account.php" class="">My Account</a></li>	
                                    <li><a href="/index.php?action=logout" class="">Logout</a></li>	
                                    <?php } else { ?>
                                    <li><a href="/login.php" class="">Login</a></li>
                                    <li><a href="/registration.php">Registration</a></li>
                                    <?php } ?>

                                    </ul>
                                </li>
                                <li class="<?php echo ($page == "contact" ? "active" : ""); ?>">
									<a href="/contact.php">Contact</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			</div>
		</div>
	</header>
	<header class="header header-mobile">
		<div class="container">
			<div class="row">
				<div class="col-xs-2 col-sm-4">
					<div class="header-left">
						<div id="open-left"><i class="ion-navicon"></i></div>
					</div>
				</div>
				<div class="col-xs-2 col-sm-4">
					<div class="header-right">
						<div id="open-search-2" class="open-search top-search-btn">
						</div>
					</div>
				</div>
				<div class="col-xs-8 col-sm-4">
					<div class="header-center">
						<a href="/index.php" id="logo-2">
							<img style="width:80px" class="logo-image" src="images/loo.png" alt="kindia Logo" />
						</a>
					</div>
				</div>

			</div>
		</div>
	</header>