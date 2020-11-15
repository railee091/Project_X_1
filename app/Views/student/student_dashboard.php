<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
				<div class="col-md-3">
					
				</div>
				
				<div class="col-md-6 gedf-main">
					<!--- \\\\\\\Post-->
					<div class="card gedf-card">
						<div class="card-header">
							<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
										a publication</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
								</li>
							</ul>
						</div>
						<div class="card-body">
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
									<div class="form-group">
										<label class="sr-only" for="message">post</label>
										<textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
									</div>

								</div>
								<div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
									<div class="form-group">
										<div class="custom-file">
											<input type="file" class="custom-file-input" id="customFile">
											<label class="custom-file-label" for="customFile">Upload image</label>
										</div>
									</div>
									<div class="py-4"></div>
								</div>
							</div>
							<div class="btn-toolbar justify-content-between">
								<div class="btn-group">
									<button type="submit" class="btn btn-primary">share</button>
								</div>
								<div class="btn-group">
									<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
										aria-expanded="false">
										<i class="fa fa-globe"></i> Public
									</button>
									<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
										<a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
										<a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
										<a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Post /////-->
					<br/>
					<!--- \\\\\\\Post-->
					<div class="card gedf-card">
						<div class="card-header">
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-2">
										<img class="rounded-circle" width="45" src="https://pyxis.nymag.com/v1/imgs/357/bbc/cea6584b56451bc29339e57fcf820b3281-30-chris-hemsworth.rsquare.w1200.jpg" alt="">
									</div>
									<div class="ml-2">
										<div class="h5 m-0">@Chris Hemsworth</div>
										<div class="h7 text-muted">ESL Tutor | God of Thunder</div>
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
								<h5 class="card-title">The Guardians need a Leader.</h5>
							</a>

							<p class="card-text">
								The Rabbit Is Correct, And Clearly The Smartest One Among You.
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
							<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
							<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
						</div>
					</div>
					<!-- Post /////-->
					<br/>
					<!--- \\\\\\\Post-->
					<div class="card gedf-card">
						<div class="card-header">
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex justify-content-between align-items-center">
									<div class="mr-2">
										<img class="rounded-circle" width="45" src="https://hairstylesweekly.com/images/2013/11/Natalie-Portman.jpg" alt="">
									</div>
									<div class="ml-2">
										<div class="h5 m-0">@Natalie Portman</div>
										<div class="h7 text-muted">ESL Tutor | Queen of Naboo</div>
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
								<h5 class="card-title">The Senator Palpatine Dilemma</h5>
							</a>

							<p class="card-text">
								Senator, this is your arena. I feel I must return my mine. I have decided to go back to Naboo.
							</p>
						</div>
						<div class="card-footer">
							<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
							<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
							<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
						</div>
					</div>
					<!-- Post /////-->
				</div>
				<div class="col-md-3">
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  <strong>System Upgrade!</strong> System has been updated to latest version
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
					  <strong>Reminder!</strong> Halloween event for all.
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
					<div class="alert alert-dark alert-dismissible fade show" role="alert">
					  <strong>Admin Message!</strong> Profile UI updated
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					  </button>
					</div>
				</div>
<?= $this->endSection() ?>