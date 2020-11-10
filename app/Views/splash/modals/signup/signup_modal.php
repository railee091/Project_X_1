<!-- Modal -->
<div class="splashModal modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Sign-up</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="wrapper fadeInDown">
				  <div id="formContent">
					<!-- Login Form -->
					<form action="register" method="POST">
					  <input type="text" id="signUpFirstName" class="splashInput fadeIn second" name="signUpFirstName" placeholder="First Name">	
					  <input type="text" id="signUpLastName" class="splashInput fadeIn first" name="signUpLastName" placeholder="Last Name">
					  <input type="email" id="signUpEmail" class="splashInput fadeIn first" name="signUpEmail" placeholder="Email">
					  <input type="text" id="signUpAddress" class="splashInput fadeIn first" name="signUpAddress" placeholder="Address">
					  <input type="date" id="signUpBday" class="splashInput fadeIn first" name="signUpBday" placeholder="Birthdate">
					  <input type="password" id="signUpPassword" class="splashInput fadeIn third" name="signUpPassword" placeholder="password">
					  <input type="submit" class="fadeIn fourth" value="Log In">
					</form>
				  </div>
				</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>