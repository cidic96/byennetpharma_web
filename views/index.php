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
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
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
					<a href="#"> <?php echo $_SESSION['firstName']." ".$_SESSION['lastName'];?> </a>
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
	<div class="header header-filter" style="background-image: url('assets/img/bgg.jpeg') ;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
					<img style="max-width: 80%; margin-top: -50px;" src="assets/img/logo.png">
						<h4>There is no giant step that does it. It's a lot of little steps.</h4>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">

<div class="section" id="carousel">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">

						<!-- Carousel Card -->
						<div class="card card-raised card-carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel slide" data-ride="carousel">

									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="assets/img/bg2.jpeg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4> There is No One Giant Step That Does it.​
It’s A Lot of Little Steps.​</h4>
											</div>
										</div>
										<div class="item">
											<img src="assets/img/bg3.jpeg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4> Health is a state of body.​
Wellness is a state of being.​</h4>
											</div>
										</div>
										<div class="item">
											<img src="assets/img/bg4.jpeg" alt="Awesome Image">
											<div class="carousel-caption">
												<h4> The key to Wellness is to accept personal responsibility for your health & wellbeing.​</h4>
											</div>
										</div>
									</div>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
										<i class="material-icons">keyboard_arrow_left</i>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
										<i class="material-icons">keyboard_arrow_right</i>
									</a>
								</div>
							</div>
						</div>
						<!-- End Carousel Card -->

					</div>
				</div>
			</div>
		</div>

		

		<div class="section">
	        <div class="container text-center">
	            <div class="row">
	                <div class="col-md-8 col-md-offset-2 text-center">
	                    <h2>Who are we?</h2>
	                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                   </h4>
	                </div>
	            </div>
			</div>
		</div>

		<div class="section section-full-screen section-signup" style="background-image: url('assets/img/city.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">
						<div class="card card-signup">
							<form class="form" method="" action="">
								<div class="header header-primary text-center">
									<h4>Sign Up</h4>
									<div class="social-line">
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-facebook-square"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="#pablo" class="btn btn-simple btn-just-icon">
											<i class="fa fa-google-plus"></i>
										</a>
									</div>
								</div>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="text" class="form-control" placeholder=" Name...">
									</div>
<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">phone</i>
										</span>
										<input type="text" class="form-control" placeholder="Phone Number...">
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" class="form-control" placeholder="Email...">
									</div>

									

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="Password..." class="form-control" />
									</div>

									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											Subscribe to newsletter
										</label>
									</div> 
								</div>
								<div class="footer text-center">
									<a href="#pablo" class="btn btn-simple btn-success btn-lg">Sign Up</a>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="section section-examples">
	        <div class="container-fluid text-center">
	            <div class="row">
	            	<h2>Wellness & Illness</h2>
	                <div class="col-md-6">
	                    <a href="wellness.php" target="_blank">
	                        <img src="assets/img/landing.jpg" alt="Rounded Image" class="img-rounded img-raised img-responsive">
	                        <button class="btn  btn-simple btn-primary btn-lg">Wellness</button>
	                    </a>
	                </div>
	                <div class="col-md-6">
	                    <a href="illness.php" target="_blank">
	                        <img src="assets/img/profile.jpg" alt="Rounded Image" class="img-rounded img-raised img-responsive">
	                        <button class="btn btn-simple btn-primary btn-lg">Illness</button>
	                    </a>
	                </div>
	            </div>
	        </div>
		</div>

	    <div class="section section-download">
	        <div class="container">
	            <div class="row text-center">
	                <div class="col-md-8 col-md-offset-2">
	                    <h2>Need Help?</h2>
	                    <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</h4>
	                </div>
	                <div class="col-sm-4 col-sm-offset-4">
	                    <a href="request.php" class="btn btn-primary btn-lg">
							<i class="material-icons">info</i> Request Information
						</a>
	                </div>
				</div>

				<br><br>

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


<!--  End Modal -->


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
