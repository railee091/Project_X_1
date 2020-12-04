<?= $this->extend('templates/template_student') ?>

<?= $this->section('content') ?>
<div class="container">
	<div class="row">
		<div class="layout-content">
          <!-- Content -->
          <div class="container flex-grow-1 container-p-y">

            <!-- Header -->
            <div class="container-m-nx container-m-ny theme-bg-white mb-4">
              <div class="media col-md-10 col-lg-8 col-xl-7 py-5 mx-auto">
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="d-block ui-w-100 rounded-circle">
                <div class="media-body ml-5">
                  <h4 class="font-weight-bold mb-4">John Doe</h4>

                  <div class="text-muted mb-4">
                    Lorem ipsum dolor sit amet, nibh suavitate qualisque ut nam. Ad harum primis electram duo, porro principes ei has.
                  </div>

                  <a href="javascript:void(0)" class="d-inline-block text-body">
                    <strong>234</strong>
                    <span class="text-muted">Classes made</span>
                  </a>
                  <a href="javascript:void(0)" class="d-inline-block text-body ml-3">
                    <strong>111</strong>
                    <span class="text-muted">Students</span>
                  </a>
                </div>
              </div>
              <hr class="m-0">
            </div>
            <!-- Header -->

            <div class="row">
              <div class="col">

                <!-- Info -->
                <div class="card mb-4">
					<div class="card-body">
						<div class="row mb-2">
						  <div class="col-md-12 text-muted">
						  	About:<!-- edit only viewable for owner of profile-->
							<button type="button" class="btn btn-sm btn-success btn-number" data-toggle="modal" data-target="#modalAboutEdit" data-type="plus" data-field="quant[2]">
                  				<span class="fas fa-edit"></span>
              				</button>
						  </div>

							<!-- Modal for Image edit-->
							<div class="modal fade" id="modalAboutEdit" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-body">
											About Edit
										</div>
									</div>
								</div>
							</div>
						  <div class="col-md-12">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						  </div>
						</div>
					</div>
                </div>
                <!-- / Info -->

                <!-- Posts -->
                <div class="card mb-4">
                  <div class="card-body">
					<div class="row mb-2">
						<div class="col-md-12 text-muted">
							Photos:
							<button type="button" class="btn btn-sm btn-success btn-number" data-toggle="modal" data-target="#modalImageEdit" data-type="plus" data-field="quant[2]">
                  				<span class="fas fa-edit"></span>
              				</button>
						</div>
						<!--this image thumbnail--->
						<div class="col-lg-3 col-md-4 col-sm-6" data-toggle="modal" data-target="#modalImage">
							<a href="#lightbox" data-slide-to="0"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="img-thumbnail my-3"></a>
						</div>
						<!--this thumbnail end--->

						<!-- Modal for Image thumbnail-->
						<div class="modal fade" id="modalImage" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-body">
										<div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
											<ol class="carousel-indicators">
												<li data-target="#lightbox" data-slide-to="0"></li>
												<li data-target="#lightbox" data-slide-to="1"></li>
											</ol>
											<div class="carousel-inner">
												<div class="carousel-item active"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
													 alt=""></div>
												<div class="carousel-item"><img src="https://www.talkwalker.com/images/2020/blog-headers/image-analysis.png" class="w-100"
													 alt=""></div>
											</div>
											<a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
											<a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Modal for Image edit-->
						<div class="modal fade" id="modalImageEdit" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-body">
										Edit
									</div>
								</div>
							</div>
						</div>
					</div>
                  </div><!--
                  <div class="card-footer">
                    <a href="javascript:void(0)" class="d-inline-block text-muted">
                      <small class="align-middle">
                        <strong>123</strong> Likes</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <small class="align-middle">
                        <strong>12</strong> Comments</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <i class="ion ion-md-share align-middle"></i>&nbsp;
                      <small class="align-middle">Repost</small>
                    </a>
                  </div>-->
                </div>
                <div class="card mb-4">
                  <div class="card-body">
					<div class="row mb-2">
						<div class="col-md-12 text-muted">
							Videos:
							<button type="button" class="btn btn-sm btn-success btn-number" data-toggle="modal" data-target="#modalVideoEdit" data-type="plus" data-field="quant[2]">
                  				<span class="fas fa-edit"></span>
              				</button>
						</div>

						<!--this video thumbnail--->
						<div class="col-lg-3 col-md-4 col-sm-6">
							
							<a><img class="img-thumbnail my-3 img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-4.jpg" alt="video"
								data-toggle="modal" data-target="#modalLinkedVideo"></a>
						</div>
						<!--this thumbnail end--->

						<!-- Modal for Video edit-->
						<div class="modal fade" id="modalVideoEdit" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-body">
										Video Edit
									</div>
								</div>
							</div>
						</div>

						<!-- Grid column -->
						<!-- Modal for Video thumbnail-->
						<div class="col-lg-4 col-md-12 mb-4">
							<!--Modal: Name-->
							<div class="modal fade" id="modalLinkedVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
								<!--Content-->
									<div class="modal-content">
									  <!--Body-->
										<div class="modal-body mb-0 p-0">
											<div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
											  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/GUEZCxBcM78"
												allowfullscreen></iframe>
											</div>
										</div>
									  <!--Footer-->
										<div class="modal-footer justify-content-center">
											<button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
										</div>
									</div>
								<!--/.Content-->
								</div>
							</div>
							<!--Modal: Name-->
						</div>
					  <!-- Grid column -->
					</div>
                  </div><!--
                  <div class="card-footer">
                    <a href="javascript:void(0)" class="d-inline-block text-muted">
                      <small class="align-middle">
                        <strong>123</strong> Likes</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <small class="align-middle">
                        <strong>12</strong> Comments</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <i class="ion ion-md-share align-middle"></i>&nbsp;
                      <small class="align-middle">Repost</small>
                    </a>
                  </div>-->
                </div>
                <div class="card mb-4">
                  <div class="card-body">
					<div class="row mb-2">
						<div class="col-md-12 text-muted">Schedule:</div>
						<!-- Grid column -->
						<div class="col-lg-12 col-md-12 mb-4">
							<div id="picker"></div>
							<div>
								<p>Selected dates / times:</p>
								<div id="selected-dates"></div>
							</div>
						</div>
					  <!-- Grid column -->
					</div>
                  </div><!--
                  <div class="card-footer">
                    <a href="javascript:void(0)" class="d-inline-block text-muted">
                      <small class="align-middle">
                        <strong>123</strong> Likes</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <small class="align-middle">
                        <strong>12</strong> Comments</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <i class="ion ion-md-share align-middle"></i>&nbsp;
                      <small class="align-middle">Repost</small>
                    </a>
                  </div>-->
                </div>
                <!-- / Posts -->

              </div>
              <div class="col-xl-5">

                <!-- Side info -->
                <div class="card mb-5">
                  <div class="card-body">
                  	<div class="row mb-2 col-md-12 text-muted">
							Info:
							<button type="button" class="btn btn-sm btn-success btn-number" data-toggle="modal" data-target="#modalVideoEdit" data-type="plus" data-field="quant[2]">
                  				<span class="fas fa-edit"></span>
              				</button>
						</div>
                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">Birthday:</div>
                      <div class="col-md-9">
                        May 3, 1995
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">Country:</div>
                      <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-body">Canada</a>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">Languages:</div>
                      <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-body">English</a>
                      </div>
                    </div>

                    <h6 class="my-3">Contacts</h6>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">Phone:</div>
                      <div class="col-md-9">
                        +0 (123) 456 7891
                      </div>
                    </div>

                    <h6 class="my-3">Interests</h6>

                    <div class="row mb-2">
                      <div class="col-md-3 text-muted">Favorite music:</div>
                      <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-body">Rock</a>,
                        <a href="javascript:void(0)" class="text-body">Alternative</a>,
                        <a href="javascript:void(0)" class="text-body">Electro</a>,
                        <a href="javascript:void(0)" class="text-body">Drum &amp; Bass</a>,
                        <a href="javascript:void(0)" class="text-body">Dance</a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3 text-muted">Favorite movies:</div>
                      <div class="col-md-9">
                        <a href="javascript:void(0)" class="text-body">The Green Mile</a>,
                        <a href="javascript:void(0)" class="text-body">Pulp Fiction</a>,
                        <a href="javascript:void(0)" class="text-body">Back to the Future</a>,
                        <a href="javascript:void(0)" class="text-body">WALL·E</a>,
                        <a href="javascript:void(0)" class="text-body">Django Unchained</a>,
                        <a href="javascript:void(0)" class="text-body">The Truman Show</a>,
                        <a href="javascript:void(0)" class="text-body">Home Alone</a>,
                        <a href="javascript:void(0)" class="text-body">Seven Pounds</a>
                      </div>
                    </div>

                  </div>
				  
                  <div class="card-footer text-center p-0">
                    <div class="row no-gutters row-bordered row-border-light">
                      <a href="javascript:void(0)" class="d-flex col flex-column text-body py-3">
                        <div class="font-weight-bold">24</div>
                        <div class="text-muted small">posts</div>
                      </a>
                      <a href="javascript:void(0)" class="d-flex col flex-column text-body py-3">
                        <div class="font-weight-bold">51</div>
                        <div class="text-muted small">videos</div>
                      </a>
                      <a href="javascript:void(0)" class="d-flex col flex-column text-body py-3">
                        <div class="font-weight-bold">215</div>
                        <div class="text-muted small">photos</div>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- / Side info -->
              </div>
            </div>

          </div>
          <!-- / Content -->
        </div>	
	</div>
</div>
<style>

.ui-w-100 {
    width: 100px !important;
    height: auto;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}
.row-bordered>.col::before, .row-bordered>[class^="col-"]::before, .row-bordered>[class*=" col-"]::before, .row-bordered>[class^="col "]::before, .row-bordered>[class*=" col "]::before, .row-bordered>[class$=" col"]::before, .row-bordered>[class="col"]::before {
    content: "";
    position: absolute;
    right: 0;
    bottom: -1px;
    left: 0;
    display: block;
    height: 0;
    border-top: 1px solid rgba(24,28,33,0.06);
}
.row-bordered>.col::after, .row-bordered>[class^="col-"]::after, .row-bordered>[class*=" col-"]::after, .row-bordered>[class^="col "]::after, .row-bordered>[class*=" col "]::after, .row-bordered>[class$=" col"]::after, .row-bordered>[class="col"]::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: -1px;
    display: block;
    width: 0;
    border-left: 1px solid rgba(24,28,33,0.06);
}

.ui-bg-cover {
    background-color: rgba(0,0,0,0);
    background-position: center center;
    background-size: cover;
}

.ui-square {
    padding-top: 100% !important;
}
.ui-square, .ui-rect, .ui-rect-30, .ui-rect-60, .ui-rect-67, .ui-rect-75 {
    position: relative !important;
    display: block !important;
    padding-top: 100% !important;
    width: 100% !important;
}
</style>
<style><!-- calendar style--->
#myc-container {
    width: inherit;
}

#myc-nav-container {
    margin-bottom: 15px;
    width: inherit;
}

#myc-current-month-year-container {
    display: inline-block;
    font-size: 1.5em;
    font-weight: lighter;
    text-align: center;
    text-transform: capitalize;
    vertical-align: top;
    width: 68%;
}

#myc-prev-week-container {
    display: inline-block;
    width: 15%;
}

#myc-next-week-container {
    display: inline-block;
    width: 15%;
}

#myc-prev-week {
    border: 1px solid #e0e0e0;
    border-radius: 80px;
    color: #e0e0e0;
    cursor: pointer;
    float: left;
    font-size: 1.6em;
    font-weight: lighter;
    height: 40px;
    text-align: center;
    width: 40px;
}

#myc-next-week {
    border: 1px solid #e0e0e0;
    border-radius: 80px;
    color: #e0e0e0;
    cursor: pointer;
    float: right;
    font-size: 1.6em;
    font-weight: lighter;
    height: 40px;
    text-align: center;
    width: 40px;
}

#myc-prev-week:hover, #myc-next-week:hover {
    border: 1px solid #bdbdbd;
    color: #bdbdbd;
}

#myc-week-container {
    border: 1px solid #e0e0e0;
}

#myc-dates-container {
    background-color: #fafafa;
}

.myc-date-header {
    border-right: 1px solid #e0e0e0;
    display: inline-block;
    min-height: 50px;
    padding: 15px 0px 15px 15px;
    vertical-align: top;
    width: 13.50%;
}

.myc-date-header:first-of-type {
    padding-left: 15px;
}

.myc-date-header:last-of-type {
    border-right: none;
    width: 13%;
}

#myc-available-time-container {
    border-top: 1px solid #e0e0e0;
    min-height: 150px;
}

.myc-day-time-container {
    /*border-right: 1px solid #e0e0e0;*/
    display: inline-block;
    height: 100%;
    padding: 15px 15px 15px 15px;
    vertical-align: top;
    width: 13%;
}

.myc-day-time-container:first-of-type {
    padding-left: 15px;
}

.myc-day-time-container:last-of-type {
    border-right: none;
    width: 13%;
}

.myc-date-number {
    font-size: 1.8em;
    font-weight: lighter;
}

.myc-available-time {
    background-color: #29b6f6;
    border-radius: 0px;
    color: #ffffff;
    display: block;
    margin-bottom: 5px;
    padding: 5px 0px 10px 0px;
    text-align: center;
}

.myc-available-time.selected, .myc-available-time:hover {
    background-color: #222;
}

.myc-date-display {
    font-weight: lighter;
}

@media only screen and (max-width: 768px) {
    .myc-date-header, .myc-day-time-container {
        width: 13.5%;
    }
    /*.myc-date-header:last-of-type, .myc-day-time-container:last-of-type {
        width: 12%;
    }*/
}

</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="app/views/assets/jquery/mark-your-calendar.js"></script>
<?= $this->endSection() ?>			