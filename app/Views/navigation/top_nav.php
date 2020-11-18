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
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header  bg-primary ">
        <div class="card-body text-white mailbox-widget pb-0"><!-- inside this is code for tab -->
			<ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="inbox-tab" data-toggle="tab" aria-controls="inbox" href="#inbox" role="tab" aria-selected="true">
						<span class="d-block d-md-none"><i class="ti-email"></i></span>
						<span class="d-none d-md-block"> INBOX</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="sent-tab" data-toggle="tab" aria-controls="sent" href="#sent" role="tab" aria-selected="false">
						<span class="d-block d-md-none"><i class="ti-export"></i></span>
						<span class="d-none d-md-block">SENT</span>
					</a>
				</li>
				<li class="nav-item ml-auto">
					<a class="nav-link" id="compose-tab" data-toggle="tab" aria-controls="compose" href="#compose" role="tab" aria-selected="false">
						<button class="btn btn-circle btn-success text-white">
							<i class="fa fa-plus"></i>
						</button>
						<span class="ml-2 font-normal">Compose</span>
					</a>
				</li>
			</ul>
		</div><!--end code for tab -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"><!-- inside this is code for inbox -->
        <div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
								<div>
									<div class="row p-4 no-gutters align-items-center">
										<div class="col-sm-12 col-md-6">
											<h3 class="font-light mb-0"><i class="ti-email mr-2"></i>11 Unread Messages</h3>
										</div>
										<div class="col-sm-12 col-md-6">
											<ul class="list-inline dl mb-0 float-left float-md-right">
												<li class="list-inline-item text-danger">
													
												</li>
											</ul>
										</div>
									</div>
									<!-- Mail list-->
									<div class="table-responsive">
										<table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
											<tbody>
												<!-- row -->
												<tr>
													<!-- label -->
													<td class="pl-3">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="cst1" />
															<label class="custom-control-label" for="cst1">&nbsp;</label>
														</div>
													</td>
													<!-- star -->
													<td><i class="fa fa-star text-warning"></i></td>
													<td>
														<span class="mb-0 text-muted">Admin</span>
													</td>
													<!-- Message -->
													<td>
														<a class="link" href="javascript: void(0)">
															<span class="badge badge-pill text-white font-medium badge-danger mr-2">System</span>
															<span class="text-dark">Maintenance Notice</span>
														</a>
													</td>
													<!-- Attachment -->
													<td><i class="fa fa-paperclip text-muted"></i></td>
													<!-- Time -->
													<td class="text-muted">May 13</td>
													<td class="text-muted">
														<a href="#">
															<button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
																<i class="fa fa-trash"></i>
															</button>
														</a>
													</td>
												</tr>
												<!-- row -->
												<tr>
													<!-- label -->
													<td class="pl-3">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="cst2" />
															<label class="custom-control-label" for="cst2">&nbsp;</label>
														</div>
													</td>
													<!-- star -->
													<td><i class="fa fa-star"></i></td>
													<!-- User -->
													<td>
														<span class="mb-0 text-muted">Jane Doe</span>
													</td>
													<!-- Message -->
													<td>
														<a class="link" href="javascript: void(0)">
															<span class="badge badge-pill text-white font-medium badge-info mr-2">Tutor</span>
															<span class="text-dark">Additional Notes</span>
														</a>
													</td>
													<!-- Attachment -->
													<td><i class="fa fa-paperclip text-muted"></i></td>
													<!-- Time -->
													<td class="text-muted">May 13</td>
													<td class="text-muted">
														<a href="#">
															<button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
																<i class="fa fa-trash"></i>
															</button>
														</a>
													</td>
												</tr>
												<!-- row -->
												<tr>
													<!-- label -->
													<td class="pl-3">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="cst3" />
															<label class="custom-control-label" for="cst3">&nbsp;</label>
														</div>
													</td>
													<!-- star -->
													<td><i class="fa fa-star text-warning"></i></td>
													<!-- User -->
													<td class="user-name max-texts">
														<span class="mb-0 text-muted font-light">Jane Doe</span>
													</td>
													<!-- Message -->
													<td>
														<a class="link" href="javascript: void(0)">
															<span class="badge badge-pill text-white font-medium badge-warning mr-2">Groups</span>
															<span class="font-light text-dark">Class notes</span>
														</a>
													</td>
													<!-- Attachment -->
													<td><i class="fa fa-paperclip text-muted"></i></td>
													<!-- Time -->
													<td class="text-muted font-light">May 13</td>
													<td class="text-muted">
														<a href="#">
															<button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
																<i class="fa fa-trash"></i>
															</button>
														</a>
													</td>
												</tr>
												<!-- row -->
												<tr class="">
													<!-- label -->
													<td class="pl-3">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="cst5" />
															<label class="custom-control-label" for="cst5">&nbsp;</label>
														</div>
													</td>
													<!-- star -->
													<td><i class="fa fa-star"></i></td>
													<!-- User -->
													<td>
														<span class="mb-0 text-muted font-light">Admin</span>
													</td>
													<!-- Message -->
													<td>
														<a class="link" href="javascript: void(0)">
															<span class="badge badge-pill text-white font-medium badge-success mr-2">System</span>
															<span class="font-light text-dark">Account credits</span>
														</a>
													</td>
													<!-- Attachment -->
													<td><i class="fa fa-paperclip text-muted"></i></td>
													<!-- Time -->
													<td class="text-muted font-light">Mar 10</td>
													<td class="text-muted">
														<a href="#">
															<button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
																<i class="fa fa-trash"></i>
															</button>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
								<div>
									<div class="row p-4 no-gutters align-items-center">
										<div class="col-sm-12 col-md-6">
											<h3 class="font-light mb-0"><i class="ti-email mr-2"></i>2 Sent tems</h3>
										</div>
									</div>
									<!-- Mail list-->
									<div class="table-responsive">
										<table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
											<tbody>
												<!-- row -->
												<tr>
													<!-- label -->
													<td class="pl-3">
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" id="cst2" />
															<label class="custom-control-label" for="cst2">&nbsp;</label>
														</div>
													</td>
													<!-- star -->
													<td><i class="fa fa-star"></i></td>
													<!-- User -->
													<td>
														<span class="mb-0 text-muted">Jane Does</span>
													</td>
													<!-- Message -->
													<td>
														<a class="link" href="javascript: void(0)">
															<span class="badge badge-pill text-white font-medium badge-info mr-2">Tutor</span>
															<span class="text-dark">Thank you teacher</span>
														</a>
													</td>
													<!-- Attachment -->
													<td><i class="fa fa-paperclip text-muted"></i></td>
													<!-- Time -->
													<td class="text-muted">May 13</td>
													<td class="text-muted">
														<a href="#">
															<button class="btn btn-circle btn-danger text-white" href="javascript:void(0)">
																<i class="fa fa-trash"></i>
															</button>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="compose" aria-labelledby="compose-tab" role="tabpanel">
								<p class="text-center">New Message</p>
								<form>
									<div class="form-row mb-3">
										<label for="to" class="col-2 col-sm-1 col-form-label">To:</label>
										<div class="col-10 col-sm-11">
											<input type="email" class="form-control" id="to" placeholder="Type name">
										</div>
									</div>
									<div class="form-row mb-3">
										<label for="bcc" class="col-2 col-sm-1 col-form-label">Subject:</label>
										<div class="col-10 col-sm-11">
											<input type="text" class="form-control" id="bcc" placeholder="Subject...">
										</div>
									</div>
									
									<div class="form-group mt-4">
										<textarea class="form-control" id="message" name="body" rows="12" placeholder="Click here to reply"></textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-success">Send</button>
										<button type="submit" class="btn btn-danger">Discard</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      </div><!-- end code for inbox -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal notification -->
<div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
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
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <div class="card-body text-white mailbox-widget pb-0"><!-- inside this is code for tab -->
			<ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab2" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="account-tab" data-toggle="tab" aria-controls="account" href="#account" role="tab" aria-selected="true">
						<span class="d-block d-md-none"><i class="ti-email"></i></span>
						<span class="d-none d-md-block"> ACCOUNT(teacher)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="creditsTeacher-tab" data-toggle="tab" aria-controls="creditsTeacher" href="#creditsTeacher" role="tab" aria-selected="false">
						<span class="d-block d-md-none"><i class="ti-export"></i></span>
						<span class="d-none d-md-block">CREDITS(teacher)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="creditsStudent-tab" data-toggle="tab" aria-controls="creditsStudent" href="#creditsStudent" role="tab" aria-selected="false">
						<span class="d-block d-md-none"><i class="ti-export"></i></span>
						<span class="d-none d-md-block">CREDITS(student)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="buyCreditsStudent-tab" data-toggle="tab" aria-controls="buyCreditsStudent" href="#buyCreditsStudent" role="tab" aria-selected="false">
						<span class="d-block d-md-none"><i class="ti-export"></i></span>
						<span class="d-none d-md-block">BUY CREDITS(student)</span>
					</a>
				</li>
			</ul>
		</div><!--end code for tab -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"><!--account-->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="tab-content" id="myTabContent2">
							<div class="tab-pane fade active show" id="account" aria-labelledby="account-tab" role="tabpanel">
								<p class="text-center"></p>
								<form action="#">
								  <div class="form-group">
									<label for="exampleFormControlSelect1">Beneficiary Bank</label>
									<select class="form-control" id="exampleFormControlSelect1">
									  <option>PNB</option>
									  <option>BPI</option>
									</select>
								  </div>
								  <div class="form-group">
									<label for="pwd">Taxpayer Identification Number (TIN):</label>
									<input type="text" class="form-control" id="pwd">
								  </div>
								  <div class="form-group">
									<label for="pwd">Account Number:</label>
									<input type="text" class="form-control" id="pwd">
								  </div>
								  <div class="form-group">
									<label for="pwd">First Name:</label>
									<input type="text" class="form-control" id="pwd">
								  </div>
								  <div class="form-group">
									<label for="pwd">Middle Name:</label>
									<input type="text" class="form-control" id="pwd">
								  </div>
								  <div class="form-group">
									<label for="pwd">Last Name:</label>
									<input type="text" class="form-control" id="pwd">
								  </div>
								  <button type="submit" class="btn btn-primary">Submit</button>
								</form>
							</div>
							<div class="tab-pane fade" id="creditsTeacher" aria-labelledby="creditsTeacher-tab" role="tabpanel">
								<table class="table">
									<thead>
									  <tr>
										<th>Fees</th>
										<th>Quantity</th>
										<th>Amount</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td><i>Lessons</i></td>
										<td>6</td>
										<td>600</td>
									  </tr>
									  <tr>
										<td><i>Late Cancellation</i></td>
										<td>1</td>
										<td>80</td>
									  </tr>
									  <tr>
										<td><i>Early Cancellation</i></td>
										<td>1</td>
										<td>50</td>
									  </tr>
									  <tr>
										<td><i>Processing Fees</i></td>
										<td></td>
										<td>-25</td>
									  </tr>
									  <tr>
										<td><i>Incentives</i></td>
										<td></td>
										<td>200</td>
									  </tr>
										<td><i>Total</i></td>
										<td></td>
										<td><b><i>905</i></b></td>
									  </tr>
									</tbody>
								  </table>
							</div>
							<div class="tab-pane fade" id="creditsStudent" aria-labelledby="creditsStudent-tab" role="tabpanel">
								<table class="table">
									<thead>
									  <tr>
										<th>Credits</th>
										<th>Amount</th>
										<th>Equivalent</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td><i></i></td>
										<td>4000pts</td>
										<td>4000php</td>
									  </tr>
									</tbody>
								 </table>
							</div>
							<div class="tab-pane fade" id="buyCreditsStudent" aria-labelledby="buyCreditsStudent-tab" role="tabpanel">
								<?php require "app/views/payment/payment.php"; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      </div><!--end account-->
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
/* css for inbox modal */
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
}
.mailbox-widget .custom-tab .nav-item .nav-link {
    border: 0;
    color: #fff;
    border-bottom: 3px solid transparent;
}
.mailbox-widget .custom-tab .nav-item .nav-link.active {
    background: 0 0;
    color: #fff;
    border-bottom: 3px solid #2cd07e;
}
.no-wrap td, .no-wrap th {
    white-space: nowrap;
}
.table td, .table th {
    padding: .9375rem .4rem;
    vertical-align: top;
    border-top: 1px solid rgba(120,130,140,.13);
}
.font-light {
    font-weight: 300;
}
</style> 