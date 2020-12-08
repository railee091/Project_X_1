<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
<div class="col-md-3"><!--this right column-->
	<div class="card border">
		<article class="card-group-item">
			<header class="card-header"><h6 class="title">Category </h6></header>
			<div class="filter-content">
				<div class="list-group list-group-flush">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  	<a class="list-group-item nav-link active" id="v-pills-classes-tab" data-toggle="pill" href="#v-pills-classes" role="tab" aria-controls="v-pills-classes" aria-selected="true">
					  	Classes<span class="float-right badge badge-light round">5</span> 
					  	</a>

					  	<a class="list-group-item nav-link" id="v-pills-tutor-tab" data-toggle="pill" href="#v-pills-tutor" role="tab" aria-controls="v-pills-tutor" aria-selected="false">
					 	Tutors<span class="float-right badge badge-light round">3</span>  
						</a>

					  	<a class="list-group-item nav-link" id="v-pills-history-tab" data-toggle="pill" href="#v-pills-history" role="tab" aria-controls="v-pills-history" aria-selected="false">
					  	History<span class="float-right badge badge-light round">32</span>  
					  	</a>

					  	<a class="list-group-item nav-link" id="v-pills-files-tab" data-toggle="pill" href="#v-pills-files" role="tab" aria-controls="v-pills-files" aria-selected="false">
					  	Files<span class="float-right badge badge-light round">12</span>  
					  	</a>

					  	<a class="list-group-item nav-link" id="v-pills-schedule-teacher-tab" data-toggle="pill" href="#v-pills-schedule-teacher" role="tab" aria-controls="v-pills-schedule-teacher" aria-selected="false">
					  	Schedule<span class="float-right badge badge-light round"></span>  
					  	</a>
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
							<?php  
								for ($x = 0; $x <= 4; $x++) {//this just loops the list item
									$imageCount = $x;
							?>
							<li>
								<time datetime="2014-07-20 2000">
									<span class="day">2<?php echo $imageCount;?></span>
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
							<?php	
								} //this just loops the list item
							?> 
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
				  	</div>
				  	<!--tutor tab end-->

				  	<!--history tab -->
				  	<div class="tab-pane fade" id="v-pills-history" role="tabpanel" aria-labelledby="v-pills-messages-tab">
				  		<!--h6 is just a comment, it can be deleted-->
				  		<div class="alert alert-success">
				  			<h6><b>For Student</b>: Show classes you have Booked / canceled</h6>
				  			<h6><b>For Tutor</b>: Show classes you have completed / canceled with student</h6>
				  		</div>
				  		<!--completed class-->
				  		<div class="card border">
						  	<div class="card-header">
						  		<div class="row">
						  			<div class="col-sm-6">
						  				<button class="btn btn-primary" title="Tutor Profile"  data-toggle="modal" data-target="#profileModal">
						  					<a class="historyProfile" href="#">
						  						<i class="far fa-id-card"></i>
						  					</a>
						  				</button>
						  				<b>Tutor: Jane Doe</b>
						  			</div>
						  			<div class="col-sm-3">
						  				
						  			</div>
						  			<div class="col-sm-3">
						  				<button class="form-control btn btn-success float-right">Completed<i class="fas fa-check"></i></button>
						  			</div>
						  		</div>
							</div>
							<div class="card-body">
							  	<div class="row">
							  		<div class="col-sm-6">
							  			<label>Date and time:</label>
							  		</div>
							  		<div class="col-sm-3">
							  			<p>July 21, 2020</p>
							  		</div>
							  		<div class="col-sm-3">
							  			<p>8:00pm to 8:25pm</p>
							  		</div>
							  	</div>
							  	<div class="row">
							  		<div class="col-sm-6">
							  			<!--<label>Status:</label>-->
							  		</div>
							  		<div class="col-sm-6">
							  			<p>completed</p>
							  		</div>
							  	</div>
							</div>
							<div class="card-footer">
							  	<div class="row">
							  		<div class="col-sm-6">
							  			<label>Payment:</label>
							  		</div>
							  		<div class="col-sm-3">
							  			
							  		</div>
							  		<div class="col-sm-3">
							  			<b>55 credits</b>
							  		</div>
							  	</div>
							</div>
						</div>

						<hr/>
				  		<!--canceled class-->
				  		<div class="card border">
						  	<div class="card-header">
						  		<div class="row">
						  			<div class="col-sm-6">
						  				<button class="btn btn-primary" title="Tutor Profile" data-toggle="modal" data-target="#profileModal">
						  					<a class="historyProfile" href="#">
						  						<i class="far fa-id-card"></i>
						  					</a>
						  				</button>
						  				<b>Tutor: Jane Doe</b>
						  			</div>
						  			<div class="col-sm-3">
						  				
						  			</div>
						  			<div class="col-sm-3">
						  				<button class="form-control btn btn-danger float-right">Canceled<i class="fas fa-phone-slash"></i></button>
						  			</div>
						  		</div>
							</div>
							<div class="card-body">
							  	<div class="row">
							  		<div class="col-sm-6">
							  			<label>Date and time:</label>
							  		</div>
							  		<div class="col-sm-3">
							  			<p>July 20, 2020</p>
							  		</div>
							  		<div class="col-sm-3">
							  			<p>8:00pm to 8:25pm</p>
							  		</div>
							  	</div>
							  	<div class="row">
							  		<div class="col-sm-6">
							  			<!--<label>Status:</label>-->
							  		</div>
							  		<div class="col-sm-6">
							  			<p>Student has canceled the class</p>
							  		</div>
							  	</div>
							</div>
							<div class="card-footer">
							  	<div class="row">
							  		<div class="col-sm-6">
							  			<label>Payment:</label>
							  		</div>
							  		<div class="col-sm-3">
							  			
							  		</div>
							  		<div class="col-sm-3">
							  			<b>none</b>
							  		</div>
							  	</div>
							</div>
						</div>

					  	<hr/>
					  	<center>end results</center>
				  	</div>
				  	<!--history tab end-->
				  	<!--files tab-->
				  	<div class="tab-pane fade" id="v-pills-files" role="tabpanel" aria-labelledby="v-pills-settings-tab">
				  		<h1>Show files related to your booked classes</h1>
				  	</div>
				  	<!--schedule tab-->
				  	<div class="tab-pane fade" id="v-pills-schedule-teacher" role="tabpanel" aria-labelledby="v-pills-schedule-teacher-tab">
				  		<h1>This for tutor view only</h1>
				  		  <div class="container">
						    <div id="picker"></div>
						    <div>
						        <p>Selected dates / times:</p>
						        <!--<div id="selected-dates"></div>-->
						    </div>
						  </div>
				  	</div>
				  	<!--schedule tab end-->
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-3">
	<div class="card border">
	  	<div class="card-header">
	    	System time
	  	</div>
	  	<div class="card-body ">
	   	 	<h5 class="card-title"><span id="systemTime"></span></h5>
	   	 	<?php
			echo "Today is " . date("Y-m-d") ." ". date("l") .  "<br>";
			?>
			<hr/>
	    	<p class="card-text">Your computer's sytem time is being used. Please make sure it is correct.</p>

	  	</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
		</div>
	</div>
	

	<!--<div class="alert alert-warning alert-dismissible fade show" role="alert">
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
	</div>-->
</div>

<!--profile modal-->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!--class history modal-->
<div class="modal fade" id="classHistoryModal" tabindex="-1" role="dialog" aria-labelledby="classHistoryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Class History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--class history modal-->
<div class="modal fade" id="cancelClassModal" tabindex="-1" role="dialog" aria-labelledby="cancelClassModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Cancel Class</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        are you sure you want to cancel this class
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-success">yes</button>
      </div>
    </div>
  </div>
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
</style>
<link rel="stylesheet" type="text/css" href="app/views/assets/mark-your-calendar.css">
<script type="text/javascript" src="app/views/assets/jquery/mark-your-calendar.js"></script>
    <script type="text/javascript">
        (function($) {
          $('#picker').markyourcalendar({
            availability: [
              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
            ],
            isMultiple: true,
            onClick: function(ev, data) {
              // data is a list of datetimes
              console.log(data);
              var html = ``;
              $.each(data, function() {
                var d = this.split(' ')[0];
                var t = this.split(' ')[1];
                html += `<p>` + d + ` ` + t + `</p>`;
              });
              $('#selected-dates').html(html);
            },
            onClickNavigator: function(ev, instance) {
              var arr = [
                [
                  ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00']
                ],
                [
                  ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00']
                ],
                [
                  ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00']
                ],
                [
                  ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00']
                ],
                [
                  ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00']
                ],
                [
                  ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00']
                ],
                [
                  ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00'],
	              ['0:00', '1:00', '2:00', '3:00', '4:00', '5:00', '6:00', '7:00', '8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00', '20:00', '21:00', '22:00', '23:00', '24:00']
                ]
              ]
              var rn = Math.floor(Math.random() * 10) % 7;
              instance.setAvailability(arr[rn]);
            }
          });
        })(jQuery);
    </script>
    <script type="text/javascript">//live clock test
    	var systemTime = document.getElementById('systemTime');

		function time() {
		  var d = new Date();
		  var s = d.getSeconds();
		  var m = d.getMinutes();
		  var h = d.getHours();
		  var t = d.getTimezoneOffset();

		  systemTime.textContent = h%12 + ":" + m + ":" + s +"(UTC"+ t +")";
		}

		setInterval(time, 1000);


    </script>
<?= $this->endSection() ?>