<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student's Dashboard</title>
	<!-- Bootstrap CSS -->
	<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap core JavaScript -->
	<script src="../assets/jquery/jquery.min.js"></script> <!--qjeury-->
	<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script> <!--bootsrap js-->
		
	<!-- main CSS -->		
    <link rel="stylesheet" href="../assets/dashboard.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>


</head>

<body>

    <div class="wrap">
        <!-- Sidebar Holder -->
        
			<?php require "../navigation/sidebar_student.php"; ?>

        <!-- Page Content Holder -->
        <div id="main">
			
			<div class="row">
				<?php require "../navigation/top_nav.php"; ?>
			</div>
			<div class="col-md">
				<a href="student_dashboard.php"><button type="button" class="btn btn-primary">BACK</button></a>
				<div class="card">
					<div class="card-body">
						<form>
							<div class="row">
								<div class="col-md">
									<h4>Find Tutor</h4>
									<hr>
								</div>
							</div>
							
							<div class="container">
							  <div class="row">
								<div class="col-sm">
									<div class="form-group">
										<label for="username" class="col-form-label">Country</label> 
										<div class="col-sm">
											<input id=" name="" placeholder="" class="form-control here" required="required" type="text">
										</div>									
									</div>
									<div class="form-group">
										<label for="name" class="col-form-label">Tutor Name</label> 
										<div class="col-sm">
											<input id="" name="" placeholder="" class="form-control here" type="text">
										</div>
									</div>
									<div class="form-group">
										<!--<label for="name" class="col-form-label">Specialty</label>-->
										<div class="col-sm">
											<div class="" data-toggle="buttons">
												<label class="btn btn-lg btn-success active">
													<input type="radio" name="options" id="option1" autocomplete="off" checked>
													<i class="fas fa-check"></i>available for children 
												</label>
												<label class="btn btn-lg btn-danger">
													<input type="radio" name="options" id="option2" autocomplete="off">
													available for children
												</label>          
											</div>
										</div>
									</div>	
								</div>
								<div class="col-sm">
									<div class="form-group">
										<label for="username" class="col-form-label">sex</label> 
										<div class="col-sm">
											<input id=" name="" placeholder="" class="form-control here" required="required" type="text">
										</div>									
									</div>
									<div class="form-group">
										<label for="username" class="col-form-label">sex</label> 
										<div class="col-sm">
											<input id=" name="" placeholder="" class="form-control here" required="required" type="text">
										</div>									
									</div>
									<div class="form-group">
										<!--<label for="name" class="col-form-label">Specialty</label>-->
										<div class="col-sm">
											<div class="" data-toggle="buttons">
												<label class="btn btn-lg btn-success active">
													<input type="radio" name="options" id="option1" autocomplete="off" checked>
													<i class="fas fa-check"></i> Free Talking
												</label>
												<label class="btn btn-lg btn-danger">
													<input type="radio" name="options" id="option2" autocomplete="off">
													Free Talking
												</label>          
											</div>
										</div>
									</div>	
								</div>
								<div class="col-sm">
									<div class="form-group">
										<label for="username" class="col-form-label">age</label> 
										<div class="col-sm">
											<input id=" name="" placeholder="" class="form-control here" required="required" type="text">
										</div>									
									</div>
									<div class="form-group">
										<label for="name" class="col-form-label">Free word</label> 
										<div class="col-sm">
											<input id="" name="" placeholder="" class="form-control here" type="text">
										</div>
									</div>
									<div class="form-group">
										<!--<label for="name" class="col-form-label">Specialty</label>-->
										<div class="col-sm">
											<div class="" data-toggle="buttons">
												<label class="btn btn-lg btn-success active">
													<input type="radio" name="options" id="option1" autocomplete="off" checked>
													<i class="fas fa-check"></i> Free reservation
												</label>
												<label class="btn btn-lg btn-danger">
													<input type="radio" name="options" id="option2" autocomplete="off">
													Free reservation
												</label>          
											</div>
										</div>
									</div>	
								</div>
							  </div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="d-flex justify-content-center"><button name="submit" type="submit" class="btn btn-primary">Update My Profile</button></div>
								</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
			<div class="col-md">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<h4>Find Tutor</h4>
								<hr>
							</div>
						</div>
						
						<div class="container">
							<div class="row">
								<div class="card" style="width: 15rem;">
									<img class="card-img-top" src="https://www.rd.com/wp-content/uploads/2017/09/01-shutterstock_476340928-Irina-Bg-1024x683.jpg" alt="Card image cap">
									<div class="card-body">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										<div class="row">	
											<div class="col-sm">
												<a title="see profile" href="student_tutor_profile.php" class="btn btn-primary"><i class="fas fa-user"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
        </div>
    </div>

    <!-- Popper.JS -->
    <script src="../assets/jquery/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
</body>
<style>
.btn.active {                
	display: none;		
}

.btn span:nth-of-type(1)  {            	
	display: none;
}
.btn span:last-child  {            	
	display: block;		
}

.btn.active  span:nth-of-type(1)  {            	
	display: block;		
}
.btn.active span:last-child  {            	
	display: none;			
}
</style>
</html>