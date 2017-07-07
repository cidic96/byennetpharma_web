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
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="##example-navbar-icons">
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
	                    <h2>What is Wellness Club?</h2>
	                    <h4>Byenett Pharmaceuticals Pvt Ltd has undertaken a Social Responsibility
Project to connect the Like Minded People from your locality & such many
localities across your city, state, all over country.<br>
Byenett Pharma would provide the platform for the monthly get-together
meetings of people who are motivated to spread the Wellness Awareness.<br>
We intend to form separate Wellness Clubs for each type of chronic diseases
like Arthritis, Diabetes, Kidney, Asthma etc.<br>
We request you to register yourself & ask your close friends too to register
for these Wellness Clubs.
	                   </h4>


	                </div>

	            </div>
			</div>
		</div>
	
		<!-- End Section Tabs -->




				
	        </div>
	    </div>



	    <div class="section section-tabs">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
										  <h1 id="locate">Locate a Wellness Club</h1>
										  <p>(Click on location to get address.)</p>
										  <div>
										    <!-- Button trigger modal -->
										    <button class="btn btn-info" data-toggle="modal" data-target="#Mumbai">
										      Mumbai
										    </button>
										  <button class="btn btn-success" data-toggle="modal" data-target="#South">
										      South
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Central">
										      Central
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Western">
										      Western
										    </button><br><button class="btn btn-info" data-toggle="modal" data-target="#Marathwada">
										      Marathwada
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Aurangabad">
										      Aurangabad
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Jalna">
										      Jalna
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Beed">
										      Beed
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Parbhani">
										      Parbhani
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Hingoli">
										      Hingoli
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Nanded">
										      Nanded
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Latur">
										      Latur
										    </button><button class="btn btn-success" data-toggle="modal" data-target="#Usmanabad">
										      Usmanabad
										    </button>
						<!-- End Tabs on plain Card -->



						  <!-- Modal Core -->
						  <div class="modal fade" id="Mumbai" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Mumbai Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div>
						  <div class="modal fade" id="South" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">South Bombay Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Central" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Central Bombay Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Western" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Western Bombay Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Marathwada" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Marathwada Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Aurangabad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Aurangabad Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Jalna" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Jalna Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Beed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Beed Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Parbhani" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Parbhani Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Hingoli" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Hingoli Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Nanded" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Nanded Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Latur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Latur Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div><div class="modal fade" id="Usmanabad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title" id="myModalLabel">Usmanabad Area</h4>
						        </div>
						        <div class="modal-body">
						          Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
						          </div>
						      </div>
						    </div>
						  </div>
						</div>
					</div>

				</div>
			</div> <br><br>
		</div>

<div class="wrapper">

	<div class="main main-raised">

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
