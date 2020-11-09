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
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        
			<?php require "navigation/sidebar_student.php"; ?>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <div class="btn-group dropleft nav-item">
									<button class="rounded-0 btn btn-secondary" title="messages" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-envelope"></i>
									</button>
									<div class="dropdown-menu" aria-labelledby="">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</div>
                            </li>
                            <li class="nav-item">
                                <div class="btn-group dropleft nav-item">
									<button class="rounded-0 btn btn-secondary" title="notifications" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-bell"></i>
									</button>
									<div class="dropdown-menu" aria-labelledby="">
										<a class="dropdown-item" href="#">Action</a>
										<a class="dropdown-item" href="#">Another action</a>
										<a class="dropdown-item" href="#">Something else here</a>
									</div>
								</div>
                            </li>
                            <li class="btn-group dropleft nav-item">
                                <button class="rounded-0 btn btn-secondary" title="classes" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-book"></i>
								</button>
								<div class="dropdown-menu" aria-labelledby="">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>	
                            </li>
                            <li class="btn-group dropleft nav-item">
                                <button class="rounded-0 btn btn-secondary" title="credits" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fas fa-dollar-sign"></i>
								</button>
								<div class="dropdown-menu" aria-labelledby="">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
			<a href="student_dashboard.php"><button type="button" class="btn btn-primary">BACK</button></a>
			<p>//this student_profile.php</p>
			
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