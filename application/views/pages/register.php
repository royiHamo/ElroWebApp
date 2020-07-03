<?php ?>
<!doctype html>

<html lang="en" dir="ltr">
<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords"
		  content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

	<!-- Title -->
	<title> ElroSec. - Premium Security Services </title>

	<!-- Favicon -->
	<link rel="icon" href="<?php echo base_url(); ?>/assets/img/brand/favicon.png" type="image/x-icon"/>

	<!-- Icons css -->
	<link href="<?php echo base_url(); ?>/assets/css/icons.css" rel="stylesheet">

	<!--  Right-sidemenu css -->
	<link href="<?php echo base_url(); ?>/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!--  Custom Scroll bar-->
	<link href="<?php echo base_url(); ?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

	<!--- Style css-->
	<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/assets/css/style-dark.css" rel="stylesheet">

	<!---Skinmodes css-->
	<link href="<?php echo base_url(); ?>/assets/css/skin-modes.css" rel="stylesheet"/>

	<!--- Animations css-->
	<link href="<?php echo base_url(); ?>/assets/css/animate.css" rel="stylesheet">

</head>

<body class="main-body dark-theme">

<!-- Loader -->
<div id="global-loader">
	<img src="<?php echo base_url(); ?>/assets/img/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<!-- Page -->
<div class="page" style="min-height:80vh !important;">

	<!-- main-header opened -->
	<div class="main-header nav nav-item hor-header">
		<div class="container">
			<div class="main-header-left ">
				<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a><!-- sidebar-toggle-->
				<a class="header-brand" href="<?php echo base_url(); ?>">
					<img src="<?php echo base_url(); ?>/assets/img/brand/logo-white1.png" class="desktop-dark">
					<img src="<?php echo base_url(); ?>/assets/img/brand/logo.png" class="desktop-logo">
					<img src="<?php echo base_url(); ?>/assets/img/brand/favicon.png" class="desktop-logo-1">
					<img src="<?php echo base_url(); ?>/assets/img/brand/favicon-white.png" class="desktop-logo-dark">
				</a>

			</div>
			<div class="main-header-right">
				<a href="<?php echo base_url(); ?>login" id="login_btn">Login</a></div>
		</div>
	</div>
	<!-- /main-header -->


	<!-- main-content opened -->
	<div class="main-content horizontal-content">

		<!-- container opened -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="card custom-card">
						<div class="card-body">

							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<h1 style="font-size:60px; padding-left: 60px;">Register</h1>
								</div>
								<div class="col-md-4"></div>
							</div>

							<div class="row">

							</div>
							<div class="row"></div>
							<div class="row"></div>
							<!-- row -->
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="main-header-center  ml-4">
										<input id="email-input" class="form-control" placeholder="email address"
											   type="text">
									</div>

								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="main-header-center  ml-4">
										<h5 id="email-alert" style="color:red;font-weight: 100; display:none;">Please
											enter a valid email address.</h5></div>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row"><h1></h1></div>
							<div class="row"></div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="main-header-center  ml-4">
										<input id="password-input" class="form-control" placeholder="Password"
											   type="password">
									</div>
									<div class="col-md-4"></div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4">
									<div class="main-header-center  ml-4">
										<h5 id="pass-alert" style="color:red;font-weight: 100; display:none;">Please
											enter a valid password.</h5></div>
								</div>
								<div class="col-md-4"></div>
							</div>
							<div class="row"><h1></h1></div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4" style="padding-left:38px;">
									<div class="row">
										<div class="col-md-1">
											<input id="all-services-checkbox" class="form-control"
												   type="checkbox" style="width: 20px;height: 20px;" checked>
										</div>
										<div class="col-md-11">
											<h5 style="font-size: 15px">full protection</h5>
										</div>
									</div>
									<div class="row">
										<div class="col-md-1">
											<i aria-controls="collapseExample" aria-expanded="false"
											   class="ripple collapsed ti-angle-double-down" data-toggle="collapse"
											   href="#collapseExample" role="button"> </i>
											</i>

										</div>
										<div class="col-md-11">
											<h5 style="font-size: 15px">custom protection</h5>
										</div>
									</div>
									<div>
										<div class="row">
											<div class="col-md-12">
												<div class="collapse" id="collapseExample" style="">
													<div class="row">
														<div class="col-md-3">
															<div class="row">
																<div class="col">
																<input id="sql_detector" class="form-control chkbxs" checked 
																	   type="checkbox"
																	   style="width:20px;height:20px;"/>
																</div>
															</div>
															<div class="row">
																<div class="col">
																<span class="text-white op-7"> sql</span>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="row">
																<div class="col">
																<input id="csrf_detector" class="form-control chkbxs" checked
																	   type="checkbox"
																	   style="width:20px;height:20px;"/>
																</div>
															</div>
															<div class="row">
																<div class="col">
																<span class="text-white op-7"> csrf</span>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="row">
																<div class="col">
																<input id="xml_detector" class="form-control chkbxs" checked
																	   type="checkbox"
																	   style="width:20px;height:20px;"/>
																</div>
															</div>
															<div class="row">
																<div class="col">
																<span class="text-white op-7"> xml</span>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="row">
																<div class="col">
																<input id="xss_detector" class="form-control chkbxs" checked
																	   type="checkbox"
																	   style="width:20px;height:20px;"/>
																</div>
															</div>
															<div class="row">
																<div class="col">
																<span class="text-white op-7"> xss</span>
																</div>
															</div>
														</div>

													</div>
													<div class="row">
														<div class="col-md-3">

															<div class="row">
																<div class="col">

																	<input id="bruteforce_detector"
																		   class="form-control chkbxs" checked
																		   type="checkbox"
																		   style="width:20px;height:20px;"/>
																</div>
															</div>
															<div class="row">
																<div class="col">
																	<span class="text-white op-7"> brute force</span>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="row">
																<div class="col">

																	<input id="bots_detector"
																		   class="form-control chkbxs" checked
																		   type="checkbox"
																		   style="width:20px;height:20px;"/>
																</div>
															</div>
															<div class="row">
																<div class="col">
																	<span class="text-white op-7"> bots</span>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="row">
																<div class="col">
																	<input id="cookie_poisoning_detector"
																		   class="form-control chkbxs" checked
																		   type="checkbox"
																		   style="width:20px;height:20px;"/>
																</div>
															</div>
															<div class="row">
																<div class="col">
																	<span class="text-white op-7"> cookie poison</span>
																</div>
															</div>
														</div>
														<div class="col-md-3">
															<div class="row">
																<div class="col">
																	<input id="ddos_box" class="form-control chkbxs" checked
																		   type="checkbox"
																		   style="width:20px;height:20px;"/>
																</div>
															</div>
															<div class="row">
																<div class="col">
																	<span class="text-white op-7"> ddos</span>
																</div>
															</div>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row"><h1></h1></div>

							<div class="row">
								<div class="col-md-5"></div>
								<div class="col-md-2">
									<button id="register-btn" class="btn btn-indigo btn-rounded btn-block"><i
												class="fe fe-log-in" "></i></button>
								</div>
								<div class="col-md-5"></div>

							</div>
							<div clas="row"><h1></h1></div>

							<div clas="row">
								<div id="alert-success" class="alert alert-success" role="alert" style="display:none;">
									<button aria-label="Close" class="close" data-dismiss="alert" type="button">
										<span aria-hidden="true">&times;</span>
									</button>
									<strong>Registered succesfully</strong>, redirecting to personal area
								</div>
								<div id="alert-danger" class="alert alert-danger mg-b-0" role="alert"
									 style="display:none;">
									<button aria-label="Close" class="close" data-dismiss="alert" type="button">
										<span aria-hidden="true">&times;</span>
									</button>
									<strong>Oops!</strong> Something went wrong, please try again
								</div>
							</div>
							<div class="row"><h1></h1></div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container closed -->
</div>
<!-- main-content closed -->

<!-- Sidebar-right-->
<div class="sidebar sidebar-right sidebar-animate">
	<div class="panel panel-primary card mb-0 box-shadow">
		<div class="tab-menu-heading border-0 p-3">
			<div class="card-title mb-0">Notifications</div>
			<div class="card-options ml-auto">
				<a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
			</div>
		</div>
		<div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
			<div class="tabs-menu ">
				<!-- Tabs -->
				<ul class="nav panel-tabs">
					<li class=""><a href="#side1" class="active" data-toggle="tab"><i
									class="ion ion-md-chatboxes tx-18 mr-2"></i> Chat</a></li>
					<li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  mr-2"></i>
							Notifications</a></li>
					<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i> Friends</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active " id="side1">
					<div class="list d-flex align-items-center border-bottom p-3">
						<div class="">
							<span class="avatar bg-primary brround avatar-md">CH</span>
						</div>
						<a class="wrapper w-100 ml-3" href="#">
							<p class="mb-0 d-flex ">
								<b>New Websites is Created</b>
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="mdi mdi-clock text-muted mr-1"></i>
									<small class="text-muted ml-auto">30 mins ago</small>
									<p class="mb-0"></p>
								</div>
							</div>
						</a>
					</div>
					<div class="list d-flex align-items-center border-bottom p-3">
						<div class="">
							<span class="avatar bg-danger brround avatar-md">N</span>
						</div>
						<a class="wrapper w-100 ml-3" href="#">
							<p class="mb-0 d-flex ">
								<b>Prepare For the Next Project</b>
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="mdi mdi-clock text-muted mr-1"></i>
									<small class="text-muted ml-auto">2 hours ago</small>
									<p class="mb-0"></p>
								</div>
							</div>
						</a>
					</div>
					<div class="list d-flex align-items-center border-bottom p-3">
						<div class="">
							<span class="avatar bg-info brround avatar-md">S</span>
						</div>
						<a class="wrapper w-100 ml-3" href="#">
							<p class="mb-0 d-flex ">
								<b>Decide the live Discussion</b>
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="mdi mdi-clock text-muted mr-1"></i>
									<small class="text-muted ml-auto">3 hours ago</small>
									<p class="mb-0"></p>
								</div>
							</div>
						</a>
					</div>
					<div class="list d-flex align-items-center border-bottom p-3">
						<div class="">
							<span class="avatar bg-warning brround avatar-md">K</span>
						</div>
						<a class="wrapper w-100 ml-3" href="#">
							<p class="mb-0 d-flex ">
								<b>Meeting at 3:00 pm</b>
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="mdi mdi-clock text-muted mr-1"></i>
									<small class="text-muted ml-auto">4 hours ago</small>
									<p class="mb-0"></p>
								</div>
							</div>
						</a>
					</div>
					<div class="list d-flex align-items-center border-bottom p-3">
						<div class="">
							<span class="avatar bg-success brround avatar-md">R</span>
						</div>
						<a class="wrapper w-100 ml-3" href="#">
							<p class="mb-0 d-flex ">
								<b>Prepare for Presentation</b>
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="mdi mdi-clock text-muted mr-1"></i>
									<small class="text-muted ml-auto">1 days ago</small>
									<p class="mb-0"></p>
								</div>
							</div>
						</a>
					</div>
					<div class="list d-flex align-items-center border-bottom p-3">
						<div class="">
							<span class="avatar bg-pink brround avatar-md">MS</span>
						</div>
						<a class="wrapper w-100 ml-3" href="#">
							<p class="mb-0 d-flex ">
								<b>Prepare for Presentation</b>
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="mdi mdi-clock text-muted mr-1"></i>
									<small class="text-muted ml-auto">1 days ago</small>
									<p class="mb-0"></p>
								</div>
							</div>
						</a>
					</div>
					<div class="list d-flex align-items-center border-bottom p-3">
						<div class="">
							<span class="avatar bg-purple brround avatar-md">L</span>
						</div>
						<a class="wrapper w-100 ml-3" href="#">
							<p class="mb-0 d-flex ">
								<b>Prepare for Presentation</b>
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="mdi mdi-clock text-muted mr-1"></i>
									<small class="text-muted ml-auto">45 mintues ago</small>
									<p class="mb-0"></p>
								</div>
							</div>
						</a>
					</div>
					<div class="list d-flex align-items-center p-3">
						<div class="">
							<span class="avatar bg-blue brround avatar-md">U</span>
						</div>
						<a class="wrapper w-100 ml-3" href="#">
							<p class="mb-0 d-flex ">
								<b>Prepare for Presentation</b>
							</p>
							<div class="d-flex justify-content-between align-items-center">
								<div class="d-flex align-items-center">
									<i class="mdi mdi-clock text-muted mr-1"></i>
									<small class="text-muted ml-auto">2 days ago</small>
									<p class="mb-0"></p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="tab-pane  " id="side2">
					<div class="list-group list-group-flush ">
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-3">
								<span class="avatar avatar-lg brround cover-image"
									  data-image-src="../../assets/img/faces/12.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div>
								<strong>Madeleine</strong> Hey! there I' am available....
								<div class="small text-muted">
									3 hours ago
								</div>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-3">
								<span class="avatar avatar-lg brround cover-image"
									  data-image-src="../../assets/img/faces/1.jpg"></span>
							</div>
							<div>
								<strong>Anthony</strong> New product Launching...
								<div class="small text-muted">
									5 hour ago
								</div>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-3">
								<span class="avatar avatar-lg brround cover-image"
									  data-image-src="../../assets/img/faces/2.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div>
								<strong>Olivia</strong> New Schedule Realease......
								<div class="small text-muted">
									45 mintues ago
								</div>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-3">
								<span class="avatar avatar-lg brround cover-image"
									  data-image-src="../../assets/img/faces/8.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div>
								<strong>Madeleine</strong> Hey! there I' am available....
								<div class="small text-muted">
									3 hours ago
								</div>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-3">
								<span class="avatar avatar-lg brround cover-image"
									  data-image-src="../../assets/img/faces/11.jpg"></span>
							</div>
							<div>
								<strong>Anthony</strong> New product Launching...
								<div class="small text-muted">
									5 hour ago
								</div>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-3">
								<span class="avatar avatar-lg brround cover-image"
									  data-image-src="../../assets/img/faces/6.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div>
								<strong>Olivia</strong> New Schedule Realease......
								<div class="small text-muted">
									45 mintues ago
								</div>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-3">
								<span class="avatar avatar-lg brround cover-image"
									  data-image-src="../../assets/img/faces/9.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div>
								<strong>Olivia</strong> Hey! there I' am available....
								<div class="small text-muted">
									12 mintues ago
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane  " id="side3">
					<div class="list-group list-group-flush ">
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/9.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle
									Belt
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/11.jpg"></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda
									Carasco
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/10.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina
									Bernier
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/2.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula
									Mclaughin
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/13.jpg"></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro
									Heide
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/12.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle
									Belt
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/4.jpg"></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda
									Carasco
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/7.jpg"></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina
									Bernier
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/2.jpg"></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula
									Mclaughin
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/14.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro
									Heide
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light"><i class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/11.jpg"></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda
									Carasco
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/9.jpg"></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina
									Bernier
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/15.jpg"><span
											class="avatar-status bg-success"></span></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula
									Mclaughin
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="list-group-item d-flex  align-items-center">
							<div class="mr-2">
								<span class="avatar avatar-md brround cover-image"
									  data-image-src="../../assets/img/faces/4.jpg"></span>
							</div>
							<div class="">
								<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro
									Heide
								</div>
							</div>
							<div class="ml-auto">
								<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i
											class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/Sidebar-right-->

<!-- Message Modal -->
<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-right chatbox" role="document">
		<div class="modal-content chat border-0">
			<div class="card overflow-hidden mb-0 border-0">
				<!-- action-header -->
				<div class="action-header clearfix">
					<div class="float-left hidden-xs d-flex ml-2">
						<div class="img_cont mr-3">
							<img src="<?php echo base_url(); ?>/assets/img/faces/6.jpg" class="rounded-circle user_img"
								 alt="img">
						</div>
						<div class="align-items-center mt-2">
							<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
							<span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
						</div>
					</div>
					<ul class="ah-actions actions align-items-center">
						<li class="call-icon">
							<a href="" class="d-done d-md-block phone-button" data-toggle="modal"
							   data-target="#audiomodal">
								<i class="si si-phone"></i>
							</a>
						</li>
						<li class="video-icon">
							<a href="" class="d-done d-md-block phone-button" data-toggle="modal"
							   data-target="#videomodal">
								<i class="si si-camrecorder"></i>
							</a>
						</li>
						<li class="dropdown">
							<a href="" data-toggle="dropdown" aria-expanded="true">
								<i class="si si-options-vertical"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li><i class="fa fa-user-circle"></i> View profile</li>
								<li><i class="fa fa-users"></i>Add friends</li>
								<li><i class="fa fa-plus"></i> Add to group</li>
								<li><i class="fa fa-ban"></i> Block</li>
							</ul>
						</li>
						<li>
							<a href="" class="" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true"><i class="si si-close text-white"></i></span>
							</a>
						</li>
					</ul>
				</div>
				<!-- action-header end -->

				<!-- msg_card_body -->
				<div class="card-body msg_card_body">
					<div class="chat-box-single-line">
						<abbr class="timestamp">February 1st, 2019</abbr>
					</div>
					<div class="d-flex justify-content-start">
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/6.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
						<div class="msg_cotainer">
							Hi, how are you Jenna Side?
							<span class="msg_time">8:40 AM, Today</span>
						</div>
					</div>
					<div class="d-flex justify-content-end ">
						<div class="msg_cotainer_send">
							Hi Connor Paige i am good tnx how about you?
							<span class="msg_time_send">8:55 AM, Today</span>
						</div>
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
					</div>
					<div class="d-flex justify-content-start ">
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/6.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
						<div class="msg_cotainer">
							I am good too, thank you for your chat template
							<span class="msg_time">9:00 AM, Today</span>
						</div>
					</div>
					<div class="d-flex justify-content-end ">
						<div class="msg_cotainer_send">
							You welcome Connor Paige
							<span class="msg_time_send">9:05 AM, Today</span>
						</div>
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
					</div>
					<div class="d-flex justify-content-start ">
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/6.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
						<div class="msg_cotainer">
							Yo, Can you update Views?
							<span class="msg_time">9:07 AM, Today</span>
						</div>
					</div>
					<div class="d-flex justify-content-end mb-4">
						<div class="msg_cotainer_send">
							But I must explain to you how all this mistaken born and I will give
							<span class="msg_time_send">9:10 AM, Today</span>
						</div>
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
					</div>
					<div class="d-flex justify-content-start ">
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/6.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
						<div class="msg_cotainer">
							Yo, Can you update Views?
							<span class="msg_time">9:07 AM, Today</span>
						</div>
					</div>
					<div class="d-flex justify-content-end mb-4">
						<div class="msg_cotainer_send">
							But I must explain to you how all this mistaken born and I will give
							<span class="msg_time_send">9:10 AM, Today</span>
						</div>
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
					</div>
					<div class="d-flex justify-content-start ">
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/6.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
						<div class="msg_cotainer">
							Yo, Can you update Views?
							<span class="msg_time">9:07 AM, Today</span>
						</div>
					</div>
					<div class="d-flex justify-content-end mb-4">
						<div class="msg_cotainer_send">
							But I must explain to you how all this mistaken born and I will give
							<span class="msg_time_send">9:10 AM, Today</span>
						</div>
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
					</div>
					<div class="d-flex justify-content-start">
						<div class="img_cont_msg">
							<img src="<?php echo base_url(); ?>/assets/img/faces/6.jpg"
								 class="rounded-circle user_img_msg" alt="img">
						</div>
						<div class="msg_cotainer">
							Okay Bye, text you later..
							<span class="msg_time">9:12 AM, Today</span>
						</div>
					</div>
				</div>
				<!-- msg_card_body end -->
				<!-- card-footer -->
				<div class="card-footer">
					<div class="msb-reply d-flex">
						<div class="input-group">
							<input type="text" class="form-control " placeholder="Typing....">
							<div class="input-group-append ">
								<button type="button" class="btn btn-primary ">
									<i class="far fa-paper-plane" aria-hidden="true"></i>
								</button>
							</div>
						</div>
					</div>
				</div><!-- card-footer end -->
			</div>
		</div>
	</div>
</div>

<!--Video Modal -->
<div id="videomodal" class="modal fade">
	<div class="modal-dialog" role="document">
		<div class="modal-content bg-dark border-0 text-white">
			<div class="modal-body mx-auto text-center p-7">
				<h5>Valex Video call</h5>
				<img src="<?php echo base_url(); ?>/assets/img/faces/6.jpg"
					 class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
				<h4 class="mb-1 font-weight-semibold">Daneil Scott</h4>
				<h6>Calling...</h6>
				<div class="mt-5">
					<div class="row">
						<div class="col-4">
							<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
								<i class="fas fa-video-slash"></i>
							</a>
						</div>
						<div class="col-4">
							<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal"
							   aria-label="Close">
								<i class="fas fa-phone bg-danger text-white"></i>
							</a>
						</div>
						<div class="col-4">
							<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
								<i class="fas fa-microphone-slash"></i>
							</a>
						</div>
					</div>
				</div>
			</div><!-- modal-body -->
		</div>
	</div><!-- modal-dialog -->
</div><!-- modal -->

<!-- Audio Modal -->
<div id="audiomodal" class="modal fade">
	<div class="modal-dialog" role="document">
		<div class="modal-content border-0">
			<div class="modal-body mx-auto text-center p-7">
				<h5>Valex Voice call</h5>
				<img src="<?php echo base_url(); ?>/assets/img/faces/6.jpg"
					 class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
				<h4 class="mb-1  font-weight-semibold">Daneil Scott</h4>
				<h6>Calling...</h6>
				<div class="mt-5">
					<div class="row">
						<div class="col-4">
							<a class="icon icon-shape rounded-circle mb-0 mr-3" href="#">
								<i class="fas fa-volume-up bg-light"></i>
							</a>
						</div>
						<div class="col-4">
							<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal"
							   aria-label="Close">
								<i class="fas fa-phone text-white bg-success"></i>
							</a>
						</div>
						<div class="col-4">
							<a class="icon icon-shape  rounded-circle mb-0 mr-3" href="#">
								<i class="fas fa-microphone-slash bg-light"></i>
							</a>
						</div>
					</div>
				</div>
			</div><!-- modal-body -->
		</div>
	</div><!-- modal-dialog -->
</div><!-- modal -->

<!-- Footer opened -->
<div class="main-footer ht-40">
	<div class="container-fluid pd-t-0-f ht-100p">
		<span>Copyright © 2020 ElroSec. Int'l Security Services All rights reserved.</span>
	</div>
</div>
<!-- Footer closed -->

</div>
<!-- End Page -->

<!-- JQuery min js -->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Bundle js -->
<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Ionicons js -->
<script src="<?php echo base_url(); ?>/assets/plugins/ionicons/ionicons.js"></script>

<!-- Moment js -->
<script src="<?php echo base_url(); ?>/assets/plugins/moment/moment.js"></script>

<!-- eva-icons js -->
<script src="<?php echo base_url(); ?>/assets/js/eva-icons.min.js"></script>

<!-- Rating js-->
<script src="<?php echo base_url(); ?>/assets/plugins/rating/jquery.rating-stars.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/rating/jquery.barrating.js"></script>

<!-- Custom Scroll bar Js-->
<script src="<?php echo base_url(); ?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Horizontalmenu js-->
<script src="<?php echo base_url(); ?>/assets/plugins/horizontal-menu/horizontal-menu-2/horizontal-menu.js"></script>

<!-- custom js -->
<script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
<style>
	.search_btn {
	'color': 'white; !important';
	}

</style>
<script>
	$(document).ready(function () {
		//TODO: add services options on register,
		//TODO: and insert to services table!
	});

	$('#login-btn').on('click', function () {
		window.location.href = '<?php echo base_url();?>login';
	});

	$('#all-services-checkbox').change(function () {
		if ($(this).prop("checked")) {
			$('.chkbxs').prop("checked",true);
		}else{
			$('.chkbxs').prop("checked",false);
		}
	});

	$('.chkbxs').change(function () {
		if (!$(this).prop("checked")) {
			$('#all-services-checkbox').prop("checked",false);
		}
	});

	$('#register-btn').on('click', function () {
		$('#pass-alert').hide();
		$('#email-alert').hide();
		$('#alert-success').hide();
		$('#alert-danger').hide();
		let brk = false;
		let email = $('#email-input').val();
		let pass = $('#password-input').val();
		if (pass == '' || pass == null) {
			$('#pass-alert').show();
			brk = true;
		}
		let email_regex = new RegExp('^(.+)@(.+)\..+$');
		if (!email_regex.test(email)) {
			$('#email-alert').show();
			brk = true;
		}
		if (brk) {
			return false;
		}
		var active_services_arr = {};
		$.each($('.chkbxs'),function(ind,chkbx){
			let current_id = $(chkbx).attr('id');
			active_services_arr[current_id] = $(chkbx).prop("checked")? 1:0;
		});
		console.log(active_services_arr);
		console.log(email);
		console.log(pass);
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>actions/register",
			dataType: 'json',
			data: {email: email, password: pass,services:active_services_arr},
			success: function (result) {
				if (result > 0) {
					$('.alert-success').show();
					setTimeout(function () {
						window.location.href = '<?php echo base_url();?>/actions/personal_area';
					}, 1000)
				} else {
					$('.alert-danger').show();
				}
			}
		});
	});

</script>
</body>
</html>
