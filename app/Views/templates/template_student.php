<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student's Dashboard</title>
	<!-- Bootstrap CSS -->
	<link href="app/views/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">

	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/currency-flags/3.1.0/currency-flags.min.css" integrity="sha512-Wkhct6IAtCCUAowu5lwS/XQb0zEHF4pCKnEk0Hrn3B8Y6Kd9hRADpP5/hmFOPhqjJGjec8/N0ogdAAOWxYW/Nw==" crossorigin="anonymous" />
	<!-- Bootstrap core JavaScript -->
	<script src="app/views/assets/jquery/jquery.min.js"></script> <!--qjeury-->
	<script src="app/views/assets/bootstrap/js/bootstrap.bundle.min.js"></script> <!--bootsrap js-->
		
	<!-- main CSS -->		
    <link rel="stylesheet" href="app/views/assets/dashboard.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        
			<?php require "app/views/navigation/sidebar_student.php"; ?>
        <!-- Page Content Holder -->
        <div id="main">
			<div class="row">
			<?php require "app/views/navigation/top_nav.php"; ?>
            </div>
			
			<div class="row">

<!-- PHP URI -->


<?= $this->renderSection('content') ?>



			</div>
        </div>
    </div>
</body>
<style>
.column-bgl{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  left: 6rem;
  position: absolute;
}
.column-bgr{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  right: 0rem;
  position: absolute;
}
.app_page1 {
  margin: 0;
  overflow: hidden;
  height:100%;
}

@media (min-width: 768px){
  #left {
    position: absolute;
    top: 5rem;
    bottom: 0;
    left: 5rem;
    width: 25%;
    overflow-y: scroll; 
  }

  #middle {
    position: absolute;
    top: 5rem;
    bottom: 0;
    left: 15%;
    width: 15%;
    overflow-y: scroll; 
  }
  
  #right {
    position: absolute;
    top: 5rem;
    bottom: 0;
    right: 0;
    overflow-y: scroll;
    width: 70%;
  }
}

#left {
  background-color: #FC6E51;
  text-align: center;
  height:100%;
}

#middle{
  background-color: lightgreen;
  text-align: center;
  height:100%;
}

#right {
  height:100%;
  background-color: #4FC1E9;
  text-align: center;
}

h4{
  padding: 10px 0; 
}

.tool-card{
  border: 2px solid black;
  padding: 10px 10px;
  margin: 10px 0;
}
</style>

	
</html>