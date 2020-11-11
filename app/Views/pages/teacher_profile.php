<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Teacher's Dashboard</title>
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
		
			<?php require "navigation/sidebar_teacher.php"; ?>
			
        <!-- Page Content Holder -->
        <div id="main">
            
			<?php require "navigation/top_nav.php"; ?>
			
			<div class="col-md">
				<a href="teacher_dashboard.php"><button type="button" class="btn btn-primary">BACK</button></a>
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-md-12">
								<h4>Your Profile</h4>
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
									  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
									</div>
								  </div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
        </div>
    </div>

    <!-- Popper.JS -->
    <script src="../assets/jquery/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>