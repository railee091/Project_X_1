<html>
	<head>
		<title>Log-in</title>
		
		<!-- Bootstrap CSS -->
		<link href="app/views/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap core JavaScript -->
		<script src="app/views/assets/jquery/jquery.min.js"></script> <!--qjeury-->
		<script src="app/views/assets/bootstrap/js/bootstrap.bundle.min.js"></script> <!--bootsrap js-->
		
		<!-- main CSS -->
		<link href="app/views/assets/main.css" rel="stylesheet">
	</head>
	<body>
		<!-- navigation start -->
		<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">
				LOGO
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>	
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<button type="button" class="nav-link btn btn-primary rounded-0" data-toggle="modal" data-target="#signUpModal">
								Signup
							</button>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<button class="nav-link btn btn-primary rounded-0	" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Login
								</button>
								<div class="dropdown-menu loginSplash" aria-labelledby="dropdownMenuButton">
									<button type="button" class="nav-link btn btn-primary rounded-0" data-toggle="modal" data-target="#logInTeacherModal">
										<a class="dropdown-item" href="#">Teacher</a>
									</button>
									<button type="button" class="nav-link btn btn-primary rounded-0" data-toggle="modal" data-target="#logInStudentModal">
										<a class="dropdown-item" href="#">Student</a>
									</button>
								</div>
							</div>
							
						</li>
						<!-- this part based on nativecamp.net
						<li class="nav-item">
							<button type="button" class="nav-link btn btn-primary rounded-0" data-toggle="modal" data-target="#reEnrollModal">
								Re-enroll
							</button>
						</li>
						-->
					</ul>
				</div>
			</div>
		</nav>
		<!--navigation end-->
		
		<?php require "splash/modals/signup/signup_modal.php"; ?>
		<?php require "splash/modals/login/login_modal.php"; ?>
		<?php require "splash/modals/re-enroll/reenroll_modal.php"; ?>
		
		<!--header start-->
		<header class="masthead text-center">
			<div class="masthead-content">
			  <div class="container">
				<h1 class="masthead-heading mb-0">More speaking less worry</h1></br>
				<div class="row">
					<div class="col-sm">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="images/mission_vision/mission.png" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Mission</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#mission" class="btn btn-primary">Learn More</a>
							</div>
						</div>
					</div>
					
					<div class="col-sm">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="images/mission_vision/vision.png" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Vision</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#vision" class="btn btn-primary">Learn More</a>
							</div>
						</div>
					</div>
					
					<div class="col-sm">
						<div class="card" style="width: 18rem;">
							<img class="card-img-top" src="images/mission_vision/apply.png" alt="Card image cap">
							<div class="card-body">
								<h5 class="card-title">Be a teacher</h5>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#teacher" class="btn btn-primary">Learn More</a>
							</div>
						</div>
					</div>
					
				</div>
			  </div>
			</div>
			
		</header>
		<!--header end-->
		<section id="mission" class="page-section clearfix">
			<div class="container">
				<div  class="intro">
					<div class="intro-text left-0 text-center bg-faded p-5 rounded">
						<h2 class="section-heading mb-4">
							<span class="section-heading-upper">Our Mission</span>
						</h2>
						<p class="mb-3">
						<?php require "app/views/splash/mission_text.txt"; ?>
						</p>
					</div>
				</div>
			<div>
		</section>
		<section id="vision" class="page-section clearfix">
			<div class="container">
				<div class="intro">
					<div class="intro-text left-0 text-center bg-faded p-5 rounded">
						<h2 class="section-heading mb-4">
							<span class="section-heading-upper">Our Vision</span>
						</h2>
						<p class="mb-3">
							<?php require "app/views/splash/mission_text.txt"; ?>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section id="teacher"  class="page-section clearfix">
			<div class="container">
				<div class="intro">
					<div class="intro-text left-0 text-center bg-faded p-5 rounded">
						<h2 class="section-heading mb-4">
							<span class="section-heading-upper">Be a teacher</span>
						</h2>
						<p class="mb-3">
						<?php require "app/views/splash/mission_text.txt"; ?>
						</p>
						<a href="#teacher" class="btn btn-primary">Apply to be a teacher</a>
					</div>
				</div>
			</div>
		</section>

		<section class="page-section cta">
			<div class="container">
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<div class="cta-inner text-center rounded">
							<h2 class="section-heading mb-4">
								<span class="section-heading-upper">Meet our new teachers!</span>
							</h2>
							<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="1000"><!--slide interval speed 1000 = 1 sec-->
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
										<img src="images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
										<img src="images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
									</div>
									<div class="carousel-item">
										<img src="images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
										<img src="images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
									</div>
									<div class="carousel-item">
										<img src="images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
										<img src="images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<footer class="footer text-faded text-center py-5">
			<div class="container-fluid">
				<div class="row footer-top">
					<div class="col-sm-4 text-center">
						<h4 class="ft-text-title">
							Contact us
						</h4>
						<h6 class="ft-desp">Company Name 
							<br>Address, place city
							<br>company@yahoo.com
						</h6>	
						<h4 class="details">
							<a class="contact" href="tel:+977-1-4107223">
								<i class="fa fa-phone" aria-hidden="true"></i> (+63)9199999999
							</a>
						</h4>	
					</div>
					<div class="col-sm-4 text-center border-left">
						<h4 class="ft-text-title">Terms and Conditions</h4>
						<div class="address-member">
							<p class="member">
								<a href="pages/faq_general.php" class="about" data-toggle="modal" data-target="#termsAndConditions">READ</a>
							</p>
							<?php require "splash/modals/terms_and_conditions.php"; ?>
						</div>		
					</div>		
					<div class="col-sm-4 col-xs-12 text-center border-left">
						<h4 class="ft-text-title">FAQS</h4>
						<div class="pspt-dtls">
							<a href="pages/faq_general.php" class="about">General</a>
							<a href="pages/faq_teacher.php" class="team">Teacher</a>
							<a href="pages/faq_student.php" class="advertise">Students</a>
						</div>
					</div>		
				</div>	
				<div class="row ft-copyright pt-2 pb-2" style="padding-left: 25px;">
					<div class="col-sm-4 text-pp-crt"><!--insert--></div>
					<div class="col-sm-4 text-pp-crt-rg">cpoyright 2020 All Rights Reserved</div>
					<div class="col-sm-4 developer">
						<a href="" target="_blank" class="text-pp-crt"><!--insert--></a>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>