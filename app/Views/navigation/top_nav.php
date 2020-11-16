<div class="navbartop">
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="#">ESL</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="student">
					<i class="fa fa-home"></i>Home
					<span class="sr-only">(current)</span>
				</a>
			</li>
		  <!--
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <i class="fa fa-envelope-o">
				<span class="badge badge-primary">11</span>
			  </i>Messages
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="#">Action</a>
			  <a class="dropdown-item" href="#">Another action</a>
			  <div class="dropdown-divider"></div>
			  <a class="dropdown-item" href="#">Something else here</a>
			</div>
		  </li>-->
		  <li class="nav-item">
				<a class="nav-link" href="#" data-toggle="modal" data-target="#messageModal">
					<i class="fa fa-envelope-o">
					<span class="badge badge-primary">11</span></i>Mail
				</a>
			</li>
		</ul>
		<ul class="navbar-nav ">
		  <li class="nav-item">
			<a class="nav-link" href="#" data-toggle="modal" data-target="#notificationModal">
			  <i class="fa fa-bell">
				<span class="badge badge-info">11</span>
			  </i>
			  Notifications
			</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#" data-toggle="modal" data-target="#creditsModal">
			  <i class="fa fa-usd">
				<!--<span class="badge badge-success">11</span>-->
			  </i>
			  credits
			</a>
		  </li>
		</ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
</br>
</br>
</br>
<!-- Modal messages -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Messages</h5>
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
<!-- Modal notification -->
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Notifications<h5>
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
<!-- Modal Credits -->
<div class="modal fade" id="creditsModal" tabindex="-1" role="dialog" aria-labelledby="creditsModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Credits<h5>
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
<style> 
.navbartop{
	  overflow: hidden;
	  background-color: #333;
	  position: fixed; /* Set the navbar to fixed position */
	  top: 0; /* Position the navbar at the top of the page */
	  padding-right:120px;
	  width: 100%; /* Full width */
	  z-index:1;
}
</style> 