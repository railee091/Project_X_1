<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
		<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card acik-renk-form">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group ">
									<label for="citizenship"><b>Citizenship:</b></label>
                                    <select id="citizenship" class="form-control" >
                                        <option selected>Philippines</option>
                                        <option>United States</option>
                                        <option>Turkey</option>
                                        <option>United Kindom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
									<label for="age"><b>Age:</b></label>
                                    <select id="age" class="form-control" >
                                        <option selected>Under 30 years old</option>
                                        <option>30 years and over</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group ">
									<label for="gender"><b>Gender:</b></label>
                                    <select id="gender" class="form-control" >
                                        <option selected>Unspecified<option>
                                        <option>Female</option>
                                        <option>Male</option>
                                    </select>
                                </div>
                            </div>
							<div class="col-md-3">
								<label for="dropdown"><b>Options:</b></label>
                                <div id="dropdown"class="form-group">
                                      <!-- Basic dropdown -->
										  <button class="btn btn-warning dropdown-toggle form-control" type="button" data-toggle="dropdown"
												  aria-haspopup="true" aria-expanded="false">Specification</button>

										  <div class="dropdown-menu">
											<a class="dropdown-item">
											  <!-- Default unchecked -->
											  <div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="checkbox1">
												<label class="custom-control-label" for="checkbox1">Free reservation</label>
											  </div>
											</a>
											<a class="dropdown-item" href="#">
											  <div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="checkbox2" checked>
												<label class="custom-control-label" for="checkbox2">Free talking</label>
											  </div>
											</a>
											<a class="dropdown-item" href="#">
											  <div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="checkbox3">
												<label class="custom-control-label" for="checkbox3">Native Speaker</label>
											  </div>
											</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#">
											  <div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="checkbox4" checked>
												<label class="custom-control-label" for="checkbox4">Available for Kids</label>
											  </div>
											</a>
											<a class="dropdown-item" href="#">
											  <div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="checkbox5" >
												<label class="custom-control-label" for="checkbox4">Business English</label>
											  </div>
											</a>
											<a class="dropdown-item" href="#">
											  <div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="checkbox5" >
												<label class="custom-control-label" for="checkbox4">Begginer English</label>
											  </div>
											</a>
										  </div>
										  <!-- Basic dropdown -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group ">
                                    <input type="text" class="form-control" placeholder="Tutor name or topic">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-primary form-control  pl-5 pr-5">Search</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
		<br/>
		<div class="row">
            <div class="col-md-12">
                <div class="card acik-renk-form">
                    <div class="card-body">
                        <div class="row">
						<?php  
							for ($x = 0; $x <= 4; $x++) {//this just loops the card and images
								$imageCount = $x;
						?>
							<!--profile result box-->
							<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
							  <div class="card h-100 border-primary">
								<div class='card-header'>
								  <img class='card-img-top rounded' src="app/Views/images/filler_images/<?php echo $imageCount;?>.jpg">
								</div>
								<div class='card-body'>
								  <h4 class='card-title'><a href='$path'>Jane Doe <div class="currency-flag currency-flag-usd"></div></a></h4>
									<ul class='list-unstyled'>
									  <li>
										<span class='badge badge-primary'>Native Speaker</span>
										<span class='badge badge-success'>TOEIC</span>
										<span class='badge badge-danger'>For kids</span>
										<span class='badge badge-warning'>Free Talking</span>
									  </li>
									</ul>
									<p class='card-text'>Lorem ipsum dolor sit amet, ...</p>
								</div>
								<div class='card-footer text-center bg-primary'>
								  <a href='student-tutor-profile' class='btn btn-primary stretched-link'>See more</a>
								</div>
							  </div>
							</div>
						<?php	
							} //this just loops the card
						?>  
							<!--profile result box-->
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
<style>
</style>
<?= $this->endSection() ?>			