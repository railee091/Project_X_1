<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Teacher's Dashboard</title>
	<!-- Bootstrap CSS -->
	<link href="app/views/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet">
	<!-- Bootstrap core JavaScript -->
	<script src="app/views/assets/jquery/jquery.min.js"></script> <!--qjeury-->
	<script src="app/views/assets/bootstrap/js/bootstrap.bundle.min.js"></script> <!--bootsrap js-->
		
	<!-- main CSS -->		
    <link rel="stylesheet" href="app/views/assets/dashboard.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
   
</head>

<body>

    <div class="wrap">
        <!-- Sidebar Holder -->
        
			<?php require "app/views/navigation/sidebar_teacher.php"; ?>

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

</html>