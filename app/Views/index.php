<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>
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
										<img src="app/views/images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
										<img src="app/views/images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="app/views/images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
										<img src="app/views/images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
									</div>
									<div class="carousel-item">
										<img src="app/views/images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
										<img src="app/views/images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="app/views/images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="app/views/images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
									</div>
									<div class="carousel-item">
										<img src="app/views/images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
										<img src="app/views/images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="app/views/images/filler_images/stock_female.png" alt="..." class="bannerImageSplash">
										<img src="app/views/images/filler_images/stock_male.png" alt="..." class="bannerImageSplash">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php require "app/views/splash/modals/login/login_modal.php"; ?>
		<?php require "app/views/splash/modals/signup/signup_modal.php"; ?>
		<?= $this->endSection() ?>
