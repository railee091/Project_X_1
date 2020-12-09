<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
<div class="col-md-3"><!--this left most column-->
	<div class="card">
		<article class="card-group-item">
			<header class="card-header"><h6 class="title">Category </h6></header>
			<div class="filter-content">
				<div class="list-group list-group-flush">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					  	<a class="list-group-item nav-link active" id="v-pills-newsfeed-tab" data-toggle="pill" href="#v-pills-newsfeed" role="tab" aria-controls="v-pills-newsfeed" aria-selected="true">
					  		Following
					  		<span class="float-right badge badge-light round">
					  			5
					  		</span> 
					  	</a>

					  	<a class="list-group-item nav-link" id="v-pills-groupfeed-tab" data-toggle="pill" href="#v-pills-groupfeed" role="tab" aria-controls="v-pills-groupfeed" aria-selected="false">
					 		Groups
					 		<span class="float-right badge badge-light round">
					 			3
					 		</span>  
						</a>

					  	<a class="list-group-item nav-link" id="v-pills-announcements-tab" data-toggle="pill" href="#v-pills-announcements" role="tab" aria-controls="v-pills-announcements" aria-selected="false">
					 		Announcements
					 		<span class="float-right badge badge-light round">
					 			3
					 		</span>  
						</a>
					  	<a class="list-group-item nav-link" id="v-pills-publicfeed-tab" data-toggle="pill" href="#v-pills-publicfeed" role="tab" aria-controls="v-pills-publicfeed" aria-selected="false">
					 		Public Posts
					 		<span class="float-right badge badge-light round">
					 			3
					 		</span>  
						</a>


					</div>
				</div>  <!-- list-group .// -->
			</div>
		</article> <!-- card-group-item.// -->
	</div> <!-- card.// -->
</div>

<div class="col-md-6 gedf-main column-bg"><!--this middle column-->
	<!--put tab links of sidepanel inside this div-->
	<div class="tab-content" id="v-pills-tabContent">
		<!--feed tab-->
  		<div class="tab-pane fade show active" id="v-pills-newsfeed" role="tabpanel" aria-labelledby="v-pills-newsfeed-tab">
			<!--- \\\\\\\Post-->
			<div class="card gedf-card border">
				<div class="card-header">
					<ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make
								a publication</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Images</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
							<div class="form-group">
								<label class="sr-only" for="message">post</label>
								<textarea class="form-control" id="message" rows="3" placeholder="What are you thinking?"></textarea>
							</div>

						</div>
						<div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
							<div class="form-group">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile">
									<label class="custom-file-label" for="customFile">Upload image</label>
								</div>
							</div>
							<div class="py-4"></div>
						</div>
					</div>
					<div class="btn-toolbar justify-content-between">
						<div class="btn-group">
							<button type="submit" class="btn btn-primary">share</button>
						</div>
						<div class="btn-group">
							<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
								aria-expanded="false">
								<i class="fa fa-globe"></i> Public
							</button>
							<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
								<a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
								<a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
								<a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Post /////-->
			<br/>
			<!--- \\\\\\\Post-->
			<div class="card gedf-card border">
				<div class="card-header ">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-between align-items-center">
							<div class="mr-2 item">
								<a href="/student-tutor-profile">
									<span class="notify-badge-tutor badge badge-secondary">Tutor</span>
									<img class="feedImageTutor rounded-circle" width="45"  height="45" src="https://pyxis.nymag.com/v1/imgs/357/bbc/cea6584b56451bc29339e57fcf820b3281-30-chris-hemsworth.rsquare.w1200.jpg" alt="">
								</a>
							</div>
							<div class="ml-2">
								<div class="h5 m-0">Chris Hemsworth</div>
								<div class="h7 text-muted">
									<span class="badge badge-secondary">Photographer</span>
									<span class="badge badge-secondary">Musician</span>
									<span class="badge badge-secondary">Dog Lover</span>
									<span class="badge badge-secondary">Writer</span>
								</div>
							</div>
						</div>
						<div>
							<div class="dropdown">
								<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-ellipsis-h"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
									<div class="h6 dropdown-header">Configuration</div>
									<a class="dropdown-item" href="#">unfollow</a>
									<a class="dropdown-item" href="#">Hide</a>
									<a class="dropdown-item" href="#">Report</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
					<a class="card-link" href="#">
						<h5 class="card-title">The Guardians need a Leader.</h5>
					</a>

					<p class="card-text">
						<figure class="figure">
							<div class="d-flex justify-content-center">
						  		<div class="row">
						  			<div class="col-sm-12 ">
						  				<img class="imagePost" src="https://www.agora-gallery.com/advice/wp-content/uploads/2015/10/image-placeholder.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
						  				<figcaption class="figure-caption">A caption for the above image.</figcaption>
									</div>
						  		</div>
							</div>
						</figure>
					</p>
				</div>
				<div class="card-footer">
					<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
					<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
					<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
				</div>
			</div>
			<!-- Post /////-->
			<br/>
			<!--- \\\\\\\Post-->
			<div class="card gedf-card border">
				<div class="card-header ">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-between align-items-center">
							<div class="mr-2 item">
								<a href="/student-tutor-profile">
									<span class="notify-badge-student badge badge-secondary">Student</span>
									<img class="feedImageStudent rounded-circle" width="45"  height="45" src="https://static.onecms.io/wp-content/uploads/sites/44/2020/10/22/GettyImages-1206912568-2000.jpg" alt="">
								</a>
							</div>
							<div class="ml-2">
								<div class="h5 m-0">Natalie Portman</div>
								<div class="h7 text-muted">
									<span class="badge badge-secondary">Dancer</span>
									<span class="badge badge-secondary">Music Lover</span>
									<span class="badge badge-secondary">Dog Lover</span>
									<span class="badge badge-secondary">Artist</span>
									<span class="badge badge-secondary">Actress</span>
									<span class="badge badge-secondary">Singer</span>
								</div>
							</div>
						</div>
						<div>
							<div class="dropdown">
								<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-ellipsis-h"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
									<div class="h6 dropdown-header">Configuration</div>
									<a class="dropdown-item" href="#">unfollow</a>
									<a class="dropdown-item" href="#">Hide</a>
									<a class="dropdown-item" href="#">Report</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
					<a class="card-link" href="#">
						<h5 class="card-title">Another wonderful morning.</h5>
					</a>

					<p class="card-text">
						Waking up to a hot cup of coffee is the best feeling in the world.
					</p>
				</div>
				<div class="card-footer">
					<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
					<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
					<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
				</div>
			</div>
			<!-- Post /////-->
			<br/>
			
  		</div>
  		<!--feed tab end-->

  		<!--group feed tab-->
  		<div class="tab-pane fade show" id="v-pills-groupfeed" role="tabpanel" aria-labelledby="v-pills-groupfeed-tab">
			<!--- \\\\\\\Post-->
			<div class="card gedf-card border">
				<div class="card-header ">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-between align-items-center">
							<div class="mr-2 item ">
								<a href="/student-tutor-profile">
									<span class="notify-badge-tutor badge badge-secondary">Tutor</span>
									<img class="feedImageTutor rounded-circle" width="45"  height="45" src="https://pyxis.nymag.com/v1/imgs/357/bbc/cea6584b56451bc29339e57fcf820b3281-30-chris-hemsworth.rsquare.w1200.jpg" alt="">
								</a>
							</div>
							<div class="ml-2">
								<div class="h5 m-0">
									Chris Hemsworth
									<i class="fas fa-caret-right"></i>
									<a class="groupPostLink" href="#">
										Wednesday Class Group
									</a>
								</div>
								<div class="h7 text-muted">
									<span class="badge badge-secondary">Photographer</span>
									<span class="badge badge-secondary">Musician</span>
									<span class="badge badge-secondary">Dog Lover</span>
									<span class="badge badge-secondary">Writer</span>
								</div>
							</div>
						</div>
						<div>
							<div class="dropdown">
								<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-ellipsis-h"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
									<div class="h6 dropdown-header">Configuration</div>
									<a class="dropdown-item" href="#">unfollow</a>
									<a class="dropdown-item" href="#">Hide</a>
									<a class="dropdown-item" href="#">Report</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>10 min ago</div>
					<a class="card-link" href="#">
						<h5 class="card-title">Class reschedule</h5>
					</a>

					<p class="card-text">
						<figure class="figure">
							<div class="d-flex justify-content-center">
						  		<div class="row">
						  			<div class="col-sm-12 ">
						  				<p>I wont be available for wednesday classes this week. we should reschedule for make-up classes.</p>
									</div>
						  		</div>
							</div>
						</figure>
					</p>
				</div>
				<div class="card-footer">
					<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
					<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
					<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
				</div>
			</div>
			<!-- Post /////-->
			<br/><!--- \\\\\\\Post-->
			<div class="card gedf-card border">
				<div class="card-header ">
					<div class="d-flex justify-content-between align-items-center">
						<div class="d-flex justify-content-between align-items-center">
							<div class="mr-2 item ">
								<a href="/student-tutor-profile">
									<span class="notify-badge-student badge badge-secondary">Student</span>
									<img class="feedImageStudent rounded-circle" width="45"  height="45" src="https://static.onecms.io/wp-content/uploads/sites/44/2020/10/22/GettyImages-1206912568-2000.jpg" alt="">
								</a>
							</div>
							<div class="ml-2">
								<div class="h5 m-0">
									Jane Doe
									<i class="fas fa-caret-right"></i>
									<a class="groupPostLink" href="#">
										Wednesday Class Group
									</a>
								</div>
								<div class="h7 text-muted">
									<span class="badge badge-secondary">Artist</span>
									<span class="badge badge-secondary">Animal Lover</span>
									<span class="badge badge-secondary">Audiophile</span>
									<span class="badge badge-secondary">Bookworm</span>
								</div>
							</div>
						</div>
						<div>
							<div class="dropdown">
								<button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-ellipsis-h"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
									<div class="h6 dropdown-header">Configuration</div>
									<a class="dropdown-item" href="#">unfollow</a>
									<a class="dropdown-item" href="#">Hide</a>
									<a class="dropdown-item" href="#">Report</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>3 hours ago</div>
					<a class="card-link" href="#">
						<h5 class="card-title">Wednesday Typhoon</h5>
					</a>

					<p class="card-text">
						<figure class="figure">
							<div class="d-flex justify-content-center">
						  		<div class="row">
						  			<div class="col-sm-12 ">
						  				<p>Will we be able to have classes on wednesday?</p>
									</div>
						  		</div>
							</div>
						</figure>
					</p>
				</div>
				<div class="card-footer">
					<a href="#" class="card-link"><i class="fa fa-gittip"></i> Like</a>
					<a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
					<a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
				</div>
			</div>
			<!-- Post /////-->
			<br/>
		</div>
  		<!--group feed tab end-->

  		<!--group feed tab-->
  		<div class="tab-pane fade show" id="v-pills-announcements" role="tabpanel" aria-labelledby="v-pills-announcements-tab">
			<!--- \\\\\\\Post--><h3>announcements</h3>
		</div>
  		<!--group feed tab-->
  		<div class="tab-pane fade show" id="v-pills-publicfeed" role="tabpanel" aria-labelledby="v-pills-publicfeed-tab">
			<!--- \\\\\\\Post--><h3>public posts</h3>
		</div>
  	</div>
</div>
<div class="col-md-3"><!--this right most column-->
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
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
	</div>
</div>
<!--this are the floating side tabs do not put them in the columns-->
<div id="mySidenavTabFloat" class="sidenav">
  <a class="text-right"href="#" id="about">message</a>
  <a href="#" id="blog">message</a>
  <a href="#" id="projects">message</a>
  <a href="#" id="contact">message</a>
</div>
<style>
.feedImageTutor{
	border-style: solid;
	border-color: yellowgreen;
}
.feedImageStudent{
	border-style: solid;
	border-color: orange;
}
body{
	overflow-x: hidden;
}
#mySidenavTabFloat a {
  margin-top: 70px;
  position: fixed; /* Position them relative to the browser window */
  z-index: 3; /* Position them relative to the browser window */
  right: -80px; /* Position them outside of the screen */
  transition: 0.3s; /* Add transition on hover */
  padding: 15px; /* 15px padding */
  width: 100px; /* Set a specific width */
  text-decoration: none; /* Remove underline */
  font-size: 20px; /* Increase font size */
  color: white; /* White text color */
  border-radius: 5px 0px 0px 5px; /* Rounded corners on the top right and bottom right side */

}
#mySidenavTabFloat a:hover {
  right: 0; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#about {
  top: 20px;
  background-color: #4CAF50;
}

#blog {
  top: 80px;
  background-color: #2196F3; /* Blue */
}

#projects {
  top: 140px;
  background-color: #f44336; /* Red */
  text-align: left
}

#contact {
  top: 200px;
  background-color: #555 /* Light Black */
}
img.imagePost{
	display: block;
  	max-width: 80%;
  	height: auto;
  	margin-left: auto;
  	margin-right: auto;
}
figcaption.figure-caption{
	display: block;
  	max-width: 80%;
  	height: auto;
  	margin-left: auto;
  	margin-right: auto;
}
a.groupPostLink:link {
  color: black;
  text-decoration: underline;
}

/* visited link */
a.groupPostLink:visited {
  color: black;
  text-decoration: underline;
}

/* mouse over link */
a.groupPostLink:hover {
  color: hotpink;
  text-decoration: none;
}

/* selected link */
a.groupPostLink:active {
  color: black;
  text-decoration: underline;
}
.item {
    position:relative;
    display:inline-block;
}
.notify-badge-tutor{
    position: absolute;
    left:.6rem;
    top:2.3rem;
    background:yellowgreen;
    text-align: center;
    border-radius: 30px 30px 30px 30px;
    color:white;
    font-size:8px;
}
.notify-badge-student{
    position: absolute;
    left:.28rem;
    top:2.3rem;
    background:orange;
    text-align: center;
    border-radius: 30px 30px 30px 30px;
    color:white;
    font-size:8px;
}
</style>
<?= $this->endSection() ?>