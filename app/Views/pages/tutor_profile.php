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
			<div class="col-md-9">
				<a href="student_find_tutor.php"><button type="button" class="btn btn-primary">BACK</button></a>
				<div class="container emp-profile">
					<form method="post">
						<div class="row">
							<div class="col-md-4">
								<div class="profile-img">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
									<!--<div class="file btn btn-lg btn-primary">
										Change Photo
										<input type="file" name="file"/>
									</div>-->
								</div>
							</div>
							<div class="col-md-6">
								<div class="profile-head">
											<h5>
												Kshiti Ghelani
											</h5>
											<h6>
												Web Developer and Designer
											</h6>
											<p class="proile-rating">RANKINGS : <span>5/5</span></p>
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-2">
								<input type="submit" class="profile-edit-btn" name="btnAddMore" value="button"/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="profile-work">
									<p>WORK LINK</p>
									<a href="">Available for Kids</a><br/>
									<a href="">Free Talking</a><br/>
									<a href="">TOEIC</a>
									<a href="">EIELTS</a>
									<p>TERMS</p>
									<a href="">MOVIES</a><br/>
									<a href="">FASHION</a><br/>
									<a href="">MUSIC</a><br/>
									<a href="">POLITICS</a><br/>
									<a href="">NOVEL</a><br/>
								</div>
							</div>
							<div class="col-md-8">
								<div class="tab-content profile-tab" id="myTabContent">
									<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
												<div class="row">
													<div class="col-md-6">
														<label>LABEL</label>
													</div>
													<div class="col-md-6">
														<p>PARAGRAPH</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>LABEL</label>
													</div>
													<div class="col-md-6">
														<p>PARAGRAPH</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>LABEL</label>
													</div>
													<div class="col-md-6">
														<p>PARAGRAPH</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>LABEL</label>
													</div>
													<div class="col-md-6">
														<p>PARAGRAPH</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>LABEL</label>
													</div>
													<div class="col-md-6">
														<p>PARAGRAPH</p>
													</div>
												</div>
									</div>
									<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
												<div class="row">
													<div class="col-md-6">
														<label>RANK</label>
													</div>
													<div class="col-md-6">
														<p>Teacher Level</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>RATING</label>
													</div>
													<div class="col-md-6">
														<p>5 stars</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>Total Classes</label>
													</div>
													<div class="col-md-6">
														<p>230</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>English Level</label>
													</div>
													<div class="col-md-6">
														<p>Expert</p>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<label>Availability</label>
													</div>
													<div class="col-md-6">
														<p>ONLINE</p>
													</div>
												</div>
										<div class="row">
											<div class="col-md-12">
												<label>Your Bio</label><br/>
												<p>Your detail description</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>           
				</div>
			</div>
			<div class="col-md-9">
				<div class="container emp-profile">
					TEACHER SCHEDULE<br/>
					<table class="table">
					  <thead>
						<tr>
						  <th scope="col">DAY</th>
						  <th scope="col"><button type="button" class="btn btn-primary">OPEN</button><button type="button" class="btn btn-success">RESERVED</button><button type="button" class="btn btn-secondary">CLOSED</button></th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <th scope="row">1</th>
						  <td><button type="button" class="btn btn-primary">8:00 - 8:25</button></td>
						  <td><button type="button" class="btn btn-success">8:30 - 8:55</button></td>
						  <td><button type="button" class="btn btn-secondary">9:00 - 8:25</button></td>
						</tr>
						<tr>
						  <th scope="row">2</th>
						  <td><button type="button" class="btn btn-primary">8:00 - 8:25</button></td>
						  <td><button type="button" class="btn btn-primary">8:30 - 8:55</button></td>
						  <td><button type="button" class="btn btn-primary">9:00 - 8:25</button></td>
						</tr>
						<tr>
						  <th scope="row">3</th>
						  <td><button type="button" class="btn btn-primary">8:00 - 8:25</button></td>
						  <td><button type="button" class="btn btn-success">8:30 - 8:55</button></td>
						  <td><button type="button" class="btn btn-primary">9:00 - 8:25</button></td>
						</tr>
					  </tbody>
					</table>
					
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
<style>
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>

</html>