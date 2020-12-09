<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
<div class="col-md-3"><!--this right column-->
	<div class="card border">
		<article class="card-group-item">
			<header class="card-header"><h4 class="title">Groups</h4></header>
			<div class="filter-content">
				<div class="list-group list-group-flush">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  	<a class="list-group-item nav-link active" id="v-pills-classes-tab" data-toggle="pill" href="#v-pills-classes" role="tab" aria-controls="v-pills-classes" aria-selected="true">
					  	Groups Feed<span class="float-right badge badge-light round">5</span> 
					  	</a>

					  	<a class="list-group-item nav-link" id="v-pills-tutor-tab" data-toggle="pill" href="#v-pills-tutor" role="tab" aria-controls="v-pills-tutor" aria-selected="false">
					 	Discover<!--<span class="float-right badge badge-light round">3</span> -->

						</a>
						<header class="card-header"><h4 class="title">Your Groups </h4></header>
						
							<?php
							for($row = 0; $row < 2;$row++){

							?>
							<a class="list-group-item nav-link" id="v-pills-tutor-tab" data-toggle="pill" href="#v-pills-tutor" role="tab" aria-controls="v-pills-tutor" aria-selected="false">
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

<div class="center-column col-md-6 gedf-main column-bg"><!--this center column-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="tab-content" id="v-pills-tabContent">
					<!--classes tab-->
				  	<div class="tab-pane fade show active" id="v-pills-classes" role="tabpanel" aria-labelledby="v-pills-home-tab">
						<!--h6 is just a comment, it can be deleted-->
						<div class="alert alert-success">
							<h6><b>For Student</b>: Tutors Image and links</h6>
					  		<h6><b>For Tutor</b>: Students Image and links</h6>
					  	</div>
					  	<ul class="event-list">
							<li>
								<time datetime="2014-07-20 2000">
									<span class="day">2</span>
									<span class="month">Jan</span>
									<span class="year">2021</span>
									<span class="time">8:00 PM</span>
								</time>
								<img alt="My 24th Birthday!" src="https://i.pinimg.com/originals/bd/b0/40/bdb0409f08d0ffd8bc732f4110cc6ad9.jpg" />
								<div class="info">
									<h2 class="title">Booked class</h2>
									<p class="desc">You have a class with Teacher Jane Doe on July 20, 2021 (wednesday) at 8:00pm</p>
									<ul>
										<li style="width:33%;">1</li>
										<li style="width:34%;">2</span></li>
										<li style="width:33%;"><span class="fa fa-envelope"></span></li>
									</ul>
								</div>
								<div class="social">
									<ul>
										<li class="facebook" style="width:33%;"><a  data-toggle="modal" data-target="#profileModal"href="#"><span class="fa fa-address-card" title="Tutor Profile"></span></a></li>
										<li class="twitter" style="width:34%;"><a  data-toggle="modal" data-target="#classHistoryModal"href="#"><span class="fa fa-history" title="Class History"></span></a></li>
										<li class="google-plus" style="width:33%;"><a  data-toggle="modal" data-target="#cancelClassModal" href="#"><span class="fa fa-window-close" title="Cancel Class"></span></a></li>
									</ul>
								</div>
							</li>
						</ul>
				  	</div>
				  	<!--classes tab end-->

				  	<!--tutor tab-->
				  	<div class="tab-pane fade" id="v-pills-tutor" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				  		<!--h6 is just a comment, it can be deleted-->
				  		<div class="alert alert-success">
				  			<h6><b>For Student</b>: Show Tutors that you already had a class with and statistics.</h6>
				  			<h6><b>For Tutor</b>: Show Students that you already had a class with and statistics.</h6>
				  		</div>


						<div class="row"><!-- search result (lower) -->
				            <div class="col-md-12">
				                <div class="card acik-renk-form">
				                    <div class="card-body">
				                        <div class="row">
										
											<!--profile result box-->
											<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
											  <div class="card h-100 border border-primary tutor-card">
												<div class='card-header'>
												  <img class='card-img-top rounded' src="app/Views/images/filler_images/1.jpg">
												</div>
												<div class='card-body'>
													<div class="row">
														<div class="col-sm-12">
														  	<p class='card-title'>
														  		<a href=''>Fname L.
														  			<i class="currency-flag currency-flag-usd"></i>
														  		</a>
														  	</p>
														</div>
													</div>
													<div class="row tutor-history-font">
														<div class="col-sm-12 badge">
														  	Classes together: 6
														</div>
														<div class="col-sm-12 badge">
														  	Classes this month: 3
														</div>
													</div>
												</div>
												<div class='card-footer text-center bg-primary'>
												  <button type="button" onclick="location.href='student-tutor-profile'" class='btn btn-primary'>Profile</button>
												</div>
											  </div>
											<!--profile result box-->
										</div>
									</div>
								</div>
							</div>
						</div>  
				  	</div>
				  	<!--tutor tab end-->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-3">

</div>

<style>
	.list-group-item.active{
		z-index: 0;
	}
    .center-column {
		padding: 60px 0px;
		/**background-color: rgb(220, 220, 220);**/
	}
    
    .event-list {
		list-style: none;
		font-family: 'Lato', sans-serif;
		margin: 0px;
		padding: 0px;
	}
	.event-list > li {
		background-color: rgb(255, 255, 255);
		box-shadow: 0px 0px 5px rgb(51, 51, 51);
		box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.7);
		padding: 0px;
		margin: 0px 0px 20px;
	}
	.event-list > li > time {
		display: inline-block;
		width: 100%;
		color: rgb(255, 255, 255);
		background-color: rgb(197, 44, 102);
		padding: 5px;
		text-align: center;
		text-transform: uppercase;
	}
	.event-list > li:nth-child(even) > time {
		background-color: rgb(165, 82, 167);
	}
	.event-list > li > time > span {
		display: none;
	}
	.event-list > li > time > .day {
		display: block;
		font-size: 56pt;
		font-weight: 100;
		line-height: 1;
	}
	.event-list > li time > .month {
		display: block;
		font-size: 24pt;
		font-weight: 900;
		line-height: 1;
	}
	.event-list > li > img {
		width: 100%;
	}
	.event-list > li > .info {
		padding-top: 5px;
		text-align: center;
	}
	.event-list > li > .info > .title {
		font-size: 17pt;
		font-weight: 700;
		margin: 0px;
	}
	.event-list > li > .info > .desc {
		font-size: 13pt;
		font-weight: 300;
		margin: 0px;
	}
	.event-list > li > .info > ul,
	.event-list > li > .social > ul {
		display: table;
		list-style: none;
		margin: 10px 0px 0px;
		padding: 0px;
		width: 100%;
		text-align: center;
	}
	.event-list > li > .social > ul {
		margin: 0px;
	}
	.event-list > li > .info > ul > li,
	.event-list > li > .social > ul > li {
		display: table-cell;
		cursor: pointer;
		color: rgb(30, 30, 30);
		font-size: 11pt;
		font-weight: 300;
        padding: 3px 0px;
	}
    .event-list > li > .info > ul > li > a {
		display: block;
		width: 100%;
		color: rgb(30, 30, 30);
		text-decoration: none;
	} 
    .event-list > li > .social > ul > li {    
        padding: 0px;
    }
    .event-list > li > .social > ul > li > a {
        padding: 3px 0px;
	} 
	.event-list > li > .info > ul > li:hover,
	.event-list > li > .social > ul > li:hover {
		color: rgb(30, 30, 30);
		background-color: rgb(200, 200, 200);
	}
	.facebook a,
	.twitter a,
	.google-plus a {
		display: block;
		width: 100%;
		color: rgb(75, 110, 168) !important;
	}
	.twitter a {
		color: rgb(79, 213, 248) !important;
	}
	.google-plus a {
		color: rgb(221, 75, 57) !important;
	}
	.facebook:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(75, 110, 168) !important;
	}
	.twitter:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(79, 213, 248) !important;
	}
	.google-plus:hover a {
		color: rgb(255, 255, 255) !important;
		background-color: rgb(221, 75, 57) !important;
	}

	@media (min-width: 768px) {
		.event-list > li {
			position: relative;
			display: block;
			width: 100%;
			height: 120px;
			padding: 0px;
		}
		.event-list > li > time,
		.event-list > li > img  {
			display: inline-block;
		}
		.event-list > li > time,
		.event-list > li > img {
			width: 120px;
			float: left;
		}
		.event-list > li > .info {
			background-color: rgb(245, 245, 245);
			overflow: hidden;
		}
		.event-list > li > time,
		.event-list > li > img {
			width: 120px;
			height: 120px;
			padding: 0px;
			margin: 0px;
		}
		.event-list > li > .info {
			position: relative;
			height: 120px;
			text-align: left;
			padding-right: 40px;
		}	
		.event-list > li > .info > .title, 
		.event-list > li > .info > .desc {
			padding: 0px 10px;
		}
		.event-list > li > .info > ul {
			position: absolute;
			left: 0px;
			bottom: 0px;
		}
		.event-list > li > .social {
			position: absolute;
			top: 0px;
			right: 0px;
			display: block;
			width: 40px;
		}
        .event-list > li > .social > ul {
            border-left: 1px solid rgb(230, 230, 230);
        }
		.event-list > li > .social > ul > li {			
			display: block;
            padding: 0px;
		}
		.event-list > li > .social > ul > li > a {
			display: block;
			width: 40px;
			padding: 10px 0px 9px;
		}
	}
	/* unvisited link */
a.historyProfile:link {
  color: white;
}

/* visited link */
a.historyProfile:visited {
  color: white;
}

/* mouse over link */
a.historyProfile:hover {
  color: white;
}

/* selected link */
a.historyProfile:active {
  color: white;
}
.tutor-card{
	margin: .05rem;
}
.tutor-history-font{
	font-size: 10pt;
}
.groupImageThumbnail{
	width: 20%;
	margin:0px;
	padding: 0px;
}
</style>
<?= $this->endSection() ?>