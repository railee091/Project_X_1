<!-- Modal -->
<div class="splashModal modal fade" id="logInTeacherModal" tabindex="-1" role="dialog" aria-labelledby="logInTeacherModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Teacher's Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="wrapper fadeInDown">
				  <div id="formContent">
					<!-- Login Form -->
					<form action="login/checkLogin" method="POST">
					  <input type="text" id="loginTeacherUsername" class="splashInput fadeIn second" name="username" placeholder="login">
					  <input type="password" id="loginTeacherPassword" class="splashInput fadeIn third" name="password" placeholder="password">
					  <input type="submit" class="fadeIn fourth" value="Log In">
					</form>

					<!-- Remind Passowrd -->
					<div id="formFooter">
					  <a class="underlineHover" href="#">Forgot Password?</a>
					</div>

				  </div>
				</div>
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

<div class="splashModal modal fade" id="logInStudentModal" tabindex="-1" role="dialog" aria-labelledby="logInStudentModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Student's Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="wrapper fadeInDown">
				  <div id="formContent">
					<!-- Login Form -->
					<form action="app/views/pages/student_dashboard.php" method="POST">
					  <input type="text" id="loginStudentUsername" class="splashInput fadeIn second" name="loginStudentUsername" placeholder="login">
					  <input type="password" id="loginStudentPassword" class="splashInput fadeIn third" name="loginStudentPassword" placeholder="password">
					  <input type="submit" class="fadeIn fourth" value="Log In">
					</form>

					<!-- Remind Passowrd -->
					<div id="formFooter">
					  <a class="underlineHover" href="#">Forgot Password?</a>
					</div>

				  </div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>