<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
				<div class="col-md">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<h4>Your Student Profile</h4>
							</div>
						</div>	
					</div>
				</div>
				<br/>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<h4>Public Info</h4>
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<form>
										<div class="form-group row">
											<label for="username" class="col-4 col-form-label">User Name*</label> 
											<div class="col-8">
												<input id="username" name="username" placeholder="Username" class="form-control here" required="required" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="name" class="col-4 col-form-label">First Name</label> 
											<div class="col-8">
												<input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="lastname" class="col-4 col-form-label">Last Name</label> 
											<div class="col-8">
												<input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="text" class="col-4 col-form-label">Nick Name*</label> 
											<div class="col-8">
												<input id="text" name="text" placeholder="Nick Name" class="form-control here" required="required" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="email" class="col-4 col-form-label">Email*</label> 
											<div class="col-8">
												<input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="website" class="col-4 col-form-label">Website</label> 
											<div class="col-8">
												<input id="website" name="website" placeholder="website" class="form-control here" type="text">
											</div>
										</div>
										<div class="form-group row">
											<label for="publicinfo" class="col-4 col-form-label">Public Info</label> 
											<div class="col-8">
												<textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label for="newpass" class="col-4 col-form-label">New Password</label> 
											<div class="col-8">
												<input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
											</div>
										</div> 
										<div class="form-group row">
											<div class="offset-4 col-8">
												<button name="submit" type="submit" class="btn btn-primary">save</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<br/>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<h4>Say something about you</h4>
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<form>
									  <div class="form-group row">
										<label for="publicinfo" class="col-4 col-form-label">Intro</label> 
										<div class="col-8">
											<textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
										</div>
									  </div>
									  <div class="form-group row">
										<label for="publicinfo" class="col-4 col-form-label">About Me</label> 
										<div class="col-8">
											<textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
										</div>
									  </div>
									  <div class="form-group row">
										<div class="offset-4 col-8">
											<button name="submit" type="submit" class="btn btn-primary">save</button>
										</div>
									  </div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<br/>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<h4>Your Album</h4>
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<form>
										<div class="form-group">
											<label for="exampleFormControlFile1">Example file input</label>
											<input type="file" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</form>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="container">
										<div class="row">
											<div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
												<a href="#lightbox" data-slide-to="0"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="img-thumbnail my-3"></a>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
												<a href="#lightbox" data-slide-to="1"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="img-thumbnail my-3"></a>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
												<a href="#lightbox" data-slide-to="2"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="img-thumbnail my-3"></a>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
												<a href="#lightbox" data-slide-to="3"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="img-thumbnail my-3"></a>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
												<a href="#lightbox" data-slide-to="4"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="img-thumbnail my-3"></a>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
												<a href="#lightbox" data-slide-to="5"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="img-thumbnail my-3"></a>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
												<a href="#lightbox" data-slide-to="6"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="img-thumbnail my-3"></a>
											</div>
											<div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modal">
												<a href="#lightbox" data-slide-to="7"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="img-thumbnail my-3"></a>
											</div>    
									  </div>
									</div>
									<!-- Modal -->
									<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-body">
													<div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
														<ol class="carousel-indicators">
															<li data-target="#lightbox" data-slide-to="0"></li>
															<li data-target="#lightbox" data-slide-to="1"></li>
															<li data-target="#lightbox" data-slide-to="2"></li>
															<li data-target="#lightbox" data-slide-to="3"></li>
															<li data-target="#lightbox" data-slide-to="4"></li>
															<li data-target="#lightbox" data-slide-to="5"></li>
															<li data-target="#lightbox" data-slide-to="6"></li>
															<li data-target="#lightbox" data-slide-to="7"></li>
														</ol>
														<div class="carousel-inner">
															<div class="carousel-item active"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
																 alt=""></div>
															<div class="carousel-item"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
																 alt=""></div>
															<div class="carousel-item"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
																 alt=""></div>
															<div class="carousel-item"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
																 alt=""></div>
															<div class="carousel-item"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
																 alt=""></div>
															<div class="carousel-item"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
																 alt=""></div>
															<div class="carousel-item"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
																 alt=""></div>
															<div class="carousel-item"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
																 alt=""></div>
														</div>
														<a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
														<a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<br/>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
									<div class="col-sm-2">
										<h4>Linked Videos</h4>
									</div>
									<div class="col-sm-10">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon3">https://www.youtube.com/watch?v=iVMRlxyzoXo</span>
											</div>
											<input type="text" placeholder="link to your youtube video..." class="form-control" id="basic-url" aria-describedby="basic-addon3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon3">submit</span>
											</div>
										</div>
									</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<!-- Grid row -->
									<div class="row">

									  <!-- Grid column -->
									  <div class="col-lg-4 col-md-12 mb-4">

										<!--Modal: Name-->
										<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										  <div class="modal-dialog modal-lg" role="document">

											<!--Content-->
											<div class="modal-content">

											  <!--Body-->
											  <div class="modal-body mb-0 p-0">

												<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
												  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GUEZCxBcM78"
													allowfullscreen></iframe>
												</div>

											  </div>

											  <!--Footer-->
											  <div class="modal-footer justify-content-center">
												 
												<button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

											  </div>

											</div>
											<!--/.Content-->

										  </div>
										</div>
										<!--Modal: Name-->

										<a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-4.jpg" alt="video"
											data-toggle="modal" data-target="#modal2"></a>

									  </div>
									  <!-- Grid column -->

									  <!-- Grid column -->
									  <div class="col-lg-4 col-md-6 mb-4">

										<!--Modal: Name-->
										<div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										  <div class="modal-dialog modal-lg" role="document">

											<!--Content-->
											<div class="modal-content">

											  <!--Body-->
											  <div class="modal-body mb-0 p-0">

												<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
												  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PjGkVCAo8Fw"
													allowfullscreen></iframe>
												</div>

											  </div>

											  <!--Footer-->
											  <div class="modal-footer justify-content-center">
												 
												<button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

											  </div>

											</div>
											<!--/.Content-->

										  </div>
										</div>
										<!--Modal: Name-->

										<a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-5.jpg" alt="video"
											data-toggle="modal" data-target="#modal5"></a>

									  </div>
									  <!-- Grid column -->

									  <!-- Grid column -->
									  <div class="col-lg-4 col-md-6 mb-4">

										<!--Modal: Name-->
										<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										  <div class="modal-dialog modal-lg" role="document">

											<!--Content-->
											<div class="modal-content">

											  <!--Body-->
											  <div class="modal-body mb-0 p-0">

												<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
												  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gsNY7TV4r1M"
													allowfullscreen></iframe>
												</div>

											  </div>

											  <!--Footer-->
											  <div class="modal-footer d-block d-md-flex justify-content-center">
												 
												<button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

											  </div>

											</div>
											<!--/.Content-->

										  </div>
										</div>
										<!--Modal: Name-->

										<a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-6.jpg" alt="video"
											data-toggle="modal" data-target="#modal3"></a>

									  </div>
									  <!-- Grid column -->

									</div>
									<!-- Grid row -->
								</div>
							</div>
						</div>
					</div>
				</div>

<?= $this->endSection() ?>			