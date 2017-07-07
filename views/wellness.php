<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Byennet Pharma | It means wellness.</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
	                            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-icons">
		                                <span class="sr-only">Toggle navigation</span>
		                                <span class="icon-bar"></span>
		                                <span class="icon-bar"></span>
		                                <span class="icon-bar"></span>
	                            	</button>
	                            	<a class="navbar-brand" href="index.php"><img style="width:200px;max-width: 50% ; margin-top: -15px;" src="assets/img/logo.png"></a>
	                            </div>

	                            <div class="collapse navbar-collapse" id="example-navbar-icons">
	                            	<ul class="nav navbar-nav navbar-right">
	                        			
	                            		<li>
											<a href="#pablo"><i class="material-icons">colorize</i> Products </a>
										</li>
	                                	<li class="dropdown">
	                                		<a href="wellness.php" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">healing</i> Health
												
												<b class="caret"></b>
											</a>
	                                    	<ul class="dropdown-menu dropdown-menu-right">
	                                        	<li><a href="wellness.php" class="dropdown-toggle">Wellness</a>
		                                        <li><a href="illness.php">Illness</a></li>
		                                    </ul>
	                                	</li>
	                                	<li class="dropdown">
	                                		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">info</i> Info Center 
												
												<b class="caret"></b>
											</a>
	                                    	<ul class="dropdown-menu dropdown-menu-right">
	                                        	<li class="dropdown-header">Health Care Provider</li>
	                                        	<li><a href="request.php">Request Information</a></li>
		                                        <li><a href="#">Scientific Literature</a></li>
		                                        <li><a href="#">Patient Education Support here</a></li>
		                                        <li><a href="#">Medicines Availability</a></li>
		                                        <li class="divider"></li>
		                                        <li class="dropdown-header">Wellness Club</li>
		                                        <li><a href="wellnessclub.php">What is Wellness Club?</a></li>
		                                        <li><a href="wellnessclub.php#locate">Wellness Club Locator</a></li>
		                                    </ul>
	                                	</li>
	                                	<li class="dropdown">
	                                		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="material-icons">people</i> About Us
												
												<b class="caret"></b>
											</a>
	                                    	<ul class="dropdown-menu dropdown-menu-right">
	                                        	
	                                        	<li><a href="#">Top management</a></li>
		                                        <li><a href="#">M.D.'s Message</a></li>
		                                        <li><a href="#">Share Holders</a></li>
		                                        <li><a href="#">Career</a></li>
		                                    </ul>
	                                	</li>
	                                	<li>
											<a href="#pablo"><i class="material-icons">phone</i> Contact Us </a>
										</li>
										<?php
              // ... ask if we are logged in here:
              if ($login->isLoggedIn() == true) { ?>

              	<li>
					<a href=""> <?php echo $_SESSION['firstName']." ".$_SESSION['lastName'];?> </a>
					</li>
				<li>
					<a class="btn btn-success" href="login.php?logout">Log out </a>
				</li>

                
              <?php } else { ?>
              <li>
					<a href="login.php"><i class="material-icons">fingerprint</i> Login </a>
					</li>
				<li>
					<a class="btn btn-success" href="register.php">Sign Up </a>
				</li>
                
             <?php     }
                ?>
	                            	</ul>
	                            </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">

	<div class="main main-raised">

<div class="section" id="carousel">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
					</div>
				</div>
			</div>
		</div>

		

		<div class="section">
	        <div class="container text-center">
	            <div class="row">
	                <div class="col-md-8 col-md-offset-2 text-center">
	                    <h2>Wellness</h2>
	                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                   </h4>


	                </div>

	            </div>
			</div>
		</div>
	<div class="section section-tabs">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<!-- Tabs on Plain Card -->
						<div class="card card-nav-tabs card-plain">
							<div class="header header-info">
								<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
								<div class="nav-tabs-navigation">
									<div class="nav-tabs-wrapper">
										<ul class="nav nav-tabs" data-tabs="tabs">

					<li class="active"><a href="#overall" data-toggle="tab">Overall Health </a></li>
                    <li ><a href="#nerve" data-toggle="tab">Nerve Health</a></li>
                    <li><a href="#heart" data-toggle="tab">Heart Health</a></li>
                    <li><a href="#eye" data-toggle="tab">Eye Health</a></li>
                    <li><a href="#skin" data-toggle="tab">Skin Health</a></li>
                    <li><a href="#digestive" data-toggle="tab">Digestive Health</a></li>
                    <li><a href="#respiratory" data-toggle="tab">Respiratory Health</a></li>
                    <li><a href="#bone" data-toggle="tab">Bone Health</a></li>
                    <li><a href="#men" data-toggle="tab">Men's Health</a></li>
                    <li><a href="#women" data-toggle="tab">Women's Health</a></li>
                    <li><a href="#kid" data-toggle="tab">Kid's Health</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane active" id="overall">							
										<p>IT TAKES ONLY 20 MINUTES​ BRISK WALK DAILY​ TO INVITE WELLNESS​IN YOUR LIFE.​</p>
										<img style="width: 80%;" src="assets/img/overall.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Overall Health
															</a>	
									</div>
									<div class="tab-pane" id="nerve">									
										<p>WHEN YOU REMOVE THE​
									NERVE INTERFERENCE, THE​
									POWER THAT MADE THE BODY ​
									CAN HEAL THE BODY​</p>
										<img style="width: 80%;" src="assets/img/nerve.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Nerve Health
															</a>	
									</div>
									<div class="tab-pane" id="heart">									
										<p>KEEP A HEALTHY HEART​
									SO WE WON’T BE APART​</p>
										<img style="width: 80%;" src="assets/img/heart.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Heart Health
															</a>	
									</div>
									<div class="tab-pane" id="eye">									
										<p>THE HEALTH OF THE EYE SEEMS TO DEMAND A HORIZON.​
									WE ARE NEVER TIRED, SO LONG AS WE CAN SEE FAR ENOUGH.​</p>
										<img style="width: 80%;" src="assets/img/eye.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Eye Health
															</a>	
									</div>
									<div class="tab-pane" id="skin">									
										<p>BEAUTIFUL SKIN REQUIRES COMMITMENT​
									NOT A MIRACLE​</p>
										<img style="width: 80%;" src="assets/img/skin.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Skin Health
															</a>	
									</div>
									<div class="tab-pane" id="digestive">									
										<p>EVERY TIME YOU EAT​
									IS AN OPPORTUNITY TO NOURISH YOUR BODY.​</p>
										<img style="width: 80%;" src="assets/img/digestive.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Digestive Health
															</a>	
									</div>
									<div class="tab-pane" id="respiratory">									
										<p>DEEP BREATHING GIVES ​
									YOU HEALTH BENEFITS​
									SIMILAR TO AEROBICS.​</p>
										<img style="width: 80%;" src="assets/img/respiratory.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Respiratory Health
															</a>	
									</div>
									<div class="tab-pane" id="bone">									
										<p>TO THRIVE IN LIFE YOU NEED THREE BONES.​
									A WISHBONE​
									A BACKBONE​
									AND A FUNNY BONE​</p>
										<img style="width: 80%;" src="assets/img/bone.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Bone Health
															</a>	
									</div>
									<div class="tab-pane" id="men">									
										<p>I REFUSE TO STOP​ UNTIL I ACHIEVE​ WHAT I SET OUT ​TO DO.​</p>
										<img style="width: 80%;" src="assets/img/men.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Men Health
															</a>	
									</div>
									<div class="tab-pane" id="women">									
										<p>TURN YOUR FACE  TOWARDS​ THE SUN, AND THE SHADOWS FALL BEHIND YOU​.</p>
										<img style="width: 80%;" src="assets/img/women.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Women Health
															</a>	
									</div>
									<div class="tab-pane" id="kid">									
										<p>HAPPY HEALTHY PARENTS MAKE HAPPY HEALTHY CHILDREN​</p>
										<img style="width: 80%;" src="assets/img/kid.jpg">
										<a href="#" target="_blank" class="btn btn-success btn-lg">
																<i class="material-icons">room</i>Request an Information Booklet on Kid Health
															</a>	
									</div>‸


								</div>
							</div>
						</div>
						<!-- End Tabs on plain Card -->
					</div>

				</div>
			</div>
		</div>
		<!-- End Section Tabs -->




				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
	                    <h2>Request Wellness Center in your locality</h2>
	                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</h4>
	                </div>
					<div class="col-sm-4 col-sm-offset-4">
						<a href="#" target="_blank" class="btn btn-success btn-lg">
							<i class="material-icons">room</i>Request A New Wellness Center
						</a>
					</div>
	            </div>

	            <div class="row sharing-area text-center">
	                    <h3>Thank you for supporting us!</h3>
	                    <a href="#" class="btn btn-twitter">
	                        <i class="fa fa-twitter"></i>
	                        Tweet
	                    </a>
	                    <a href="#" class="btn btn-facebook">
	                        <i class="fa fa-facebook-square"></i>
	                        Share
	                    </a>
						<a href="#" class="btn btn-google-plus">
	                        <i class="fa fa-google-plus"></i>
	                        Share
	                    </a>
						
	            </div>
	        </div>
	    </div>

	</div>
    <footer class="footer">
	    <div class="container">
	        <nav class="pull-left">
	            <ul>
					<li>
						<a href="">
							Concepts & Campaign
						</a>
					</li>
					<li>
						<a href="">
						   About Us
						</a>
					</li>
					
					<li>
						<a href="#">
							User Login
						</a>
					</li>
	            </ul>
	        </nav>
	       
	    </div>
	</footer>
</div>



</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>
