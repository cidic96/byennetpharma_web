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
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-amber.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Amiri:700i|Noto+Serif:400i|Satisfy" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


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
				<li>
					<a href="login.php"><i class="material-icons">fingerprint</i> Login </a>
					</li>
				<li>
					<a class="btn btn-success" href="register.php">Sign Up </a>
				</li>
	    	</ul>
	    </div>
	</div>
</nav>
<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/bgg.jpeg') ;">
			<div class="align-loginc">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--7-col mdl-cell--3-col-tablet mdl-cell--hide-phone">
						<div class="brand">
					<img class ="brand-img" src="assets/img/logo.png">
						<h4 class="brand-text">There is no giant step that does it. It's a lot of little steps.</h4>
					</div>
						
					</div>
			    <div class="mdl-cell mdl-cell--4-col align-login  mdl-cell--5-col-tablet mdl-cell--4-col-phone">
			      <!-- Square card -->
			      <div class="demo-card-wide full-width mdl-card mdl-shadow--2dp">
			        <div class="mdl-card__title">
			          <h2 class="mdl-card__title-text">Log In</h2>
			        </div>
			        <div class="mdl-card__supporting-text">
			          <div class="mdl-grid">
			            <div class="mdl-cell mdl-cell--12-col ">
			              <div style="text-align: center;font-size: 1.2em;">
			                <?php
			                  // show potential errors / feedback (from login object)
			                  if (isset($login)) {
			                      if($login->errors) {
			                        foreach ($login->errors as $error) {
			                          echo "<span class= \"danger-message\">".$error."</span>";
			                        }
			                      }
			                      if($login->messages) {
			                        foreach ($login->messages as $message) {
			                          echo  "<span class= \"success-message\">".$message."</span>";
			                        }
			                      }
			                    }
			                ?>
			              </div>
			            </div>
			          </div>
			          <form method="post" action="login.php" name="loginform">
			            <div class="mdl-grid no-gutter">
			              <div class="mdl-cell mdl-cell--12-col">
			                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-width">
			                  <input class="mdl-textfield__input" id="userEmail" type="email" name="user_email" autocomplete="off"/>
			                  <label class="mdl-textfield__label" for="userEmail"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;E-mail</label>
			                </div>
			              </div>
			            </div>
			            <div class="mdl-grid no-gutter">
			              <div class="mdl-cell mdl-cell--12-col">
			                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-width">
			                  <input class="mdl-textfield__input" id="createPassword" type="password" name="user_password" pattern=".{6,}"  autocomplete="off" />
			                  <label class="mdl-textfield__label" for="createPassword"><i class="fa fa-unlock-alt" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Password(min. 6 characters)</label>
			                </div>
			              </div>
			            </div>
			            <!-- Accent-colored raised button with ripple -->
			            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="login" type="submit">
			            <i class="fa fa-lock" aria-hidden="true"> &nbsp;</i> Login</button> 
			          </form><br><br>
			        </div>
			      </div>
			    </div>
				</div>
		</div>
	</div>
<!-- End Navbar -->
</div>


















</body>
	<!--   Core JS Files   -->
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
