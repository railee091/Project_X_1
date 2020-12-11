<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
<div class="col-md-3"><!--this right column-->
	<div class="card border">
		<article class="card-group-item">
			<header class="card-header"><h4 class="title">Groups</h4></header>
			<div class="filter-content">
				<div class="list-group list-group-flush">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  	<a class="list-group-item nav-link active" id="v-pills-group-feed-tab" data-toggle="pill" href="#v-pills-group-feed" role="tab" aria-controls="v-pills-group-feed" aria-selected="true">
					  	Groups Feed
					  	<!--<span class="float-right badge badge-light round">5</span>-->
					  	</a>

					  	<a class="list-group-item nav-link" id="v-pills-discover-tab" data-toggle="pill" href="#v-pills-discover" role="tab" aria-controls="v-pills-discover" aria-selected="false">
					 	Discover<!--<span class="float-right badge badge-light round">3</span> -->

						</a>

						<header class="card-header"><h4 class="title">Your Groups </h4></header>
						
							<?php
							for($row = 0; $row < 2;$row++){

							?>
							<a class="list-group-item nav-link" id="v-pills-joined-group<?php echo $row; ?>-tab" data-toggle="pill" href="#v-pills-joined-group<?php echo $row; ?>" role="tab" aria-controls="v-pills-joined-group<?php echo $row; ?>" aria-selected="false">
								<img class="groupImageThumbnail"src="https://logosvector.net/wp-content/uploads/2013/03/lonely-planet-vector-logo.png" alt="..." class="img-thumbnail">
						 	This is a group<?php echo " (number:".$row.")";?><!--<span class="float-right badge badge-light round">3</span> -->
							</a>
							<?php
							}
							?>
					</div>
				</div> 
			</div>
		</article> <!-- card-group-item.// -->
	</div> <!-- card.// -->

</div>

<div class="center-column col-md-9 gedf-main column-bg"><!--this center column-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="tab-content" id="v-pills-tabContent">
					<!--classes tab-->
				  	<div class="tab-pane fade show active" id="v-pills-group-feed" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-1">
								</div>
								<div class="col-sm-9">
									<b>RECENT ACTIVITY</b>
									<hr/>
									<!-- group post -->
									<div class="card gedf-card border">
										<div class="card-header ">
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex justify-content-between align-items-center">
													<div class="mr-2 item ">
														<a href="/student-tutor-profile">
															<span class="notify-badge-tutor badge badge-secondary">Tutor</span>
															<img class="feedImageTutor rounded-circle" width="45"  height="45" src="https://pyxis.nymag.com/v1/imgs/357/bbc/cea6584b56451bc29339e57fcf820b3281-30-chris-hemsworth.rsquare.w1200.jpg" alt="">
														</a>
													</div>
													<div class="ml-2">
														<div class="h5 m-0">
															Chris Hemsworth
															<i class="fas fa-caret-right"></i>
															<a class="groupPostLink" href="#">
																Wednesday Class Group
															</a>
														</div>
														<div class="h7 text-muted">
															<span class="badge badge-secondary">Photographer</span>
															<span class="badge badge-secondary">Musician</span>
															<span class="badge badge-secondary">Dog Lover</span>
															<span class="badge badge-secondary">Writer</span>
														</div>
													</div>
												</div>
												<div>
													<div class="dropdown">
														<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fa fa-ellipsis-h"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
															<div class="h6 dropdown-header">Configuration</div>
															<a class="dropdown-item" href="#">unfollow</a>
															<a class="dropdown-item" href="#">Hide</a>
															<a class="dropdown-item" href="#">Report</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card-body">
											<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
											<a class="card-link" href="#">
												<h5 class="card-title">Class reschedule</h5>
											</a>

											<p class="card-text">
												<figure class="figure">
													<div class="d-flex justify-content-center">
												  		<div class="row">
												  			<div class="col-sm-12 ">
												  				<p>I wont be available for wednesday classes this week. we should reschedule for make-up classes.</p>
															</div>
												  		</div>
													</div>
												</figure>
											</p>
										</div>
										<div class="card-footer">
											<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
											<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
											<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
										</div>
									</div>
									<!-- group post -->
									<br/>
									<!-- group post with youtube linked video-->
									<div class="card gedf-card border">
										<div class="card-header ">
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex justify-content-between align-items-center">
													<div class="mr-2 item ">
														<a href="/student-tutor-profile">
															<span class="notify-badge-tutor badge badge-secondary">Tutor</span>
															<img class="feedImageTutor rounded-circle" width="45"  height="45" src="https://pyxis.nymag.com/v1/imgs/357/bbc/cea6584b56451bc29339e57fcf820b3281-30-chris-hemsworth.rsquare.w1200.jpg" alt="">
														</a>
													</div>
													<div class="ml-2">
														<div class="h5 m-0">
															Chris Hemsworth
															<i class="fas fa-caret-right"></i>
															<a class="groupPostLink" href="#">
																Wednesday Class Group
															</a>
														</div>
														<div class="h7 text-muted">
															<span class="badge badge-secondary">Photographer</span>
															<span class="badge badge-secondary">Musician</span>
															<span class="badge badge-secondary">Dog Lover</span>
															<span class="badge badge-secondary">Writer</span>
														</div>
													</div>
												</div>
												<div>
													<div class="dropdown">
														<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fa fa-ellipsis-h"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
															<div class="h6 dropdown-header">Configuration</div>
															<a class="dropdown-item" href="#">unfollow</a>
															<a class="dropdown-item" href="#">Hide</a>
															<a class="dropdown-item" href="#">Report</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card-body">
											<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
											<a class="card-link" href="#">
												<h5 class="card-title">Good workout music</h5>
											</a>

											<p class="card-text">
												<figure class="figure col-sm">
											  		<div class="row">
											  			<div class="col-sm">
														<iframe width="100%" height="350px"src="https://www.youtube.com/embed/CD-E-LDc384" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
														</div>
											  		</div>
												</figure>
											</p>
										</div>
										<div class="card-footer">
											<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
											<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
											<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
										</div>
									</div>
									<!-- group post -->
								</div>
								<div class="col-sm-3">
								
								</div>
							</div>
						</div>
				  	</div>
				  	<!--classes tab end-->

				  	<!--tutor tab-->
				  	<div class="tab-pane fade" id="v-pills-discover" role="tabpanel" aria-labelledby="v-pills-discover-tab">
				  		<!--h6 is just a comment, it can be deleted-->
				  		<div class="alert alert-success">
				  			<h6><b>note</b>: Image banner is just a looped image from google</h6>
				  		</div>


						<div class="row"><!-- search result (lower) -->
				            <div class="col-md-12">
				                <div class="card acik-renk-form">
				                    <div class="card-body">
				                        <div class="row">
				                        	<?php
											for($row = 0; $row < 9;$row++){
											?>
											<!--discover group result box-->
											<div class="card border rounded" style="width: 18rem; margin:1rem">
											  <img class="card-img-top" src="https://friscolibrary.bibliocommons.com/events/uploads/images/full/0ac1364e76e3f8be012dbb34960c249d/Event%20Banner%20ESL%20Classes%20760x230.jpg" alt="Card image cap">
											  <div class="card-body">
											    <a href="#"><h5 class="card-title"><b>Wednesday Study Group</b></h5></a>
											    <p class="card-text">This is just some text to build the description of this group example. this result is just looped in PHP code.</p>
											    <a href="#" class="btn btn-primary form-control">Join Group</a>
											  </div>
											</div>
											<!--discover group result box-->
											<?php
											}
											?>
										</div>
									</div>
								</div>
							</div>
						</div>  
				  	</div>

				  	<!--tutor tab end-->
				  	<?php
					for($row = 0; $row < 2;$row++){

					?>
				  	<div class="tab-pane fade" id="v-pills-joined-group<?php echo $row; ?>" role="tabpanel" aria-labelledby="v-pills-joined-group<?php echo $row; ?>-tab">
				  		<!--h6 is just a comment, it can be deleted-->
				  		<div class="alert alert-success">
				  			<b>note: </b><?php echo "This is a group tab that is being looped <b>no.".$row."</b>";?>
				  		</div>

				  		<div class="container-fluid">
							<div class="row">
								<div class="col-sm-1">
								</div>
								<div class="col-sm-9">
									<b>RECENT ACTIVITY</b>
									<hr/>
									<!-- group post -->
									<div class="card gedf-card border">
										<div class="card-header ">
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex justify-content-between align-items-center">
													<div class="mr-2 item ">
														<a href="/student-tutor-profile">
															<span class="notify-badge-tutor badge badge-secondary">Tutor</span>
															<img class="feedImageTutor rounded-circle" width="45"  height="45" src="https://pyxis.nymag.com/v1/imgs/357/bbc/cea6584b56451bc29339e57fcf820b3281-30-chris-hemsworth.rsquare.w1200.jpg" alt="">
														</a>
													</div>
													<div class="ml-2">
														<div class="h5 m-0">
															Chris Hemsworth
															<i class="fas fa-caret-right"></i>
															<a class="groupPostLink" href="#">
																Wednesday Class Group
															</a>
														</div>
														<div class="h7 text-muted">
															<span class="badge badge-secondary">Photographer</span>
															<span class="badge badge-secondary">Musician</span>
															<span class="badge badge-secondary">Dog Lover</span>
															<span class="badge badge-secondary">Writer</span>
														</div>
													</div>
												</div>
												<div>
													<div class="dropdown">
														<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fa fa-ellipsis-h"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
															<div class="h6 dropdown-header">Configuration</div>
															<a class="dropdown-item" href="#">unfollow</a>
															<a class="dropdown-item" href="#">Hide</a>
															<a class="dropdown-item" href="#">Report</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card-body">
											<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
											<a class="card-link" href="#">
												<h5 class="card-title">Class reschedule</h5>
											</a>

											<p class="card-text">
												<figure class="figure">
													<div class="d-flex justify-content-center">
												  		<div class="row">
												  			<div class="col-sm-12 ">
												  				<p>I wont be available for wednesday classes this week. we should reschedule for make-up classes.</p>
															</div>
												  		</div>
													</div>
												</figure>
											</p>
										</div>
										<div class="card-footer">
											<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
											<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
											<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
										</div>
									</div>
									<!-- group post -->
									<br/>
									<!-- group post with youtube linked video-->
									<div class="card gedf-card border">
										<div class="card-header ">
											<div class="d-flex justify-content-between align-items-center">
												<div class="d-flex justify-content-between align-items-center">
													<div class="mr-2 item ">
														<a href="/student-tutor-profile">
															<span class="notify-badge-tutor badge badge-secondary">Tutor</span>
															<img class="feedImageTutor rounded-circle" width="45"  height="45" src="https://pyxis.nymag.com/v1/imgs/357/bbc/cea6584b56451bc29339e57fcf820b3281-30-chris-hemsworth.rsquare.w1200.jpg" alt="">
														</a>
													</div>
													<div class="ml-2">
														<div class="h5 m-0">
															Chris Hemsworth
															<i class="fas fa-caret-right"></i>
															<a class="groupPostLink" href="#">
																Wednesday Class Group
															</a>
														</div>
														<div class="h7 text-muted">
															<span class="badge badge-secondary">Photographer</span>
															<span class="badge badge-secondary">Musician</span>
															<span class="badge badge-secondary">Dog Lover</span>
															<span class="badge badge-secondary">Writer</span>
														</div>
													</div>
												</div>
												<div>
													<div class="dropdown">
														<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fa fa-ellipsis-h"></i>
														</button>
														<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
															<div class="h6 dropdown-header">Configuration</div>
															<a class="dropdown-item" href="#">unfollow</a>
															<a class="dropdown-item" href="#">Hide</a>
															<a class="dropdown-item" href="#">Report</a>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="card-body">
											<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
											<a class="card-link" href="#">
												<h5 class="card-title">Good workout music</h5>
											</a>

											<p class="card-text">
												<figure class="figure col-sm">
											  		<div class="row">
											  			<div class="col-sm">
														<iframe width="100%" height="350px"src="https://www.youtube.com/embed/CD-E-LDc384" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
														</div>
											  		</div>
												</figure>
											</p>
										</div>
										<div class="card-footer">
											<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
											<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
											<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
										</div>
									</div>
									<!-- group post -->
								</div>
								<div class="col-sm-3">
								
								</div>
							</div>
						</div>


				  	</div>
				  	<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-3">

</div>

<?= $this->endSection() ?>