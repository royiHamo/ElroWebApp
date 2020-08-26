<?php ?>
<!doctype html>
<style>
	.search_btn {
	'color': 'white; !important';
	}

</style>
<script>


</script>
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
	<title> ElroSec. - Personal area </title>

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
<div class="page">

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
				<!--						<div class="main-header-center  ml-4">-->
				<!--							<input class="form-control" placeholder="Search for anything..." type="search"><button class="btn"><i class="fe fe-search"></i></button>-->
				<!--						</div>-->
			</div>
			<!-- search -->
			<div class="main-header-right">
				<a href="<?php echo base_url(); ?>actions/logout" id="logout_btn">Log out</a>&nbsp;&nbsp;
			</div>
		</div>
	</div>


	<!-- main-content opened -->
	<div class="main-content horizontal-content">

		<!-- container opened -->
		<div class="container">

			<!-- breadcrumb -->
			<div class="breadcrumb-header justify-content-between">
				<div class="left-content">
					<div>
						<h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome
							back <?php echo ucfirst(strtok($email, '@')); ?>!</h2>
						<p class="mg-b-0">Attacks monitoring panel</p>
					</div>

				</div>
				<div class="main-dashboard-header-right">

				</div>
			</div>
			<!-- /breadcrumb -->
			<!-- row -->
			<div class="row row-sm">
				<h4>Showing settings for<h4 id="ip_address"></h4>:</h4>

				<select id="webs-select" class="form-control">
				</select></br></br></br></br>
			</div>

			<!-- row closing -->
			<!-- row -->
			<div class="row row-sm">
				<div class="col-xl-4 col-lg-6 col-md-12 col-xm-12">
					<div class="card overflow-hidden sales-card bg-primary-gradient">
						<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">SQL Detector</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 font-weight-bold mb-1 text-white">5,742</h4>
										<p class="mb-0 tx-12 text-white op-7">Blocked attempts</p>
									</div>
									<span class="float-right my-auto ml-auto">
												<input id="sql_detector" class="form-control chkbxs" type="checkbox"/>
												<span class="text-white op-7"> active</span>
											</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-12 col-xm-12">
					<div class="card overflow-hidden sales-card bg-danger-gradient">
						<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">CSRF Detector</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 counter font-weight-bold mb-1 text-white">1230</h4>
										<p class="mb-0 tx-12 text-white op-7">Blocked attempts</p>
									</div>
									<span class="float-right my-auto ml-auto">
												<input id="csrf_detector" class="form-control chkbxs" type="checkbox"/>
												<span class="text-white op-7"> active</span>
											</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-12 col-xm-12">
					<div class="card overflow-hidden sales-card bg-success-gradient">
						<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">XML Detector</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 font-weight-bold mb-1 text-white">7,125</h4>
										<p class="mb-0 tx-12 text-white op-7">Blocked attempts</p>
									</div>
									<span class="float-right my-auto ml-auto">
												<input id="xml_detector" class="form-control chkbxs" type="checkbox"/>
												<span class="text-white op-7"> active</span>
											</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- row closed -->
			<!-- row -->
			<div class="row row-sm">
				<div class="col-xl-4 col-lg-6 col-md-12 col-xm-12">
					<div class="card overflow-hidden sales-card bg-warning-gradient">
						<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">XSS Detector</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 font-weight-bold mb-1 text-white">4,820</h4>
										<p class="mb-0 tx-12 text-white op-7">Blocked attempts</p>
									</div>
									<span class="float-right my-auto ml-auto">
												<input id="xss_detector" class="form-control chkbxs" type="checkbox"/>
												<span class="text-white op-7"> active</span>
											</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-12 col-xm-12">
					<div class="card overflow-hidden sales-card"
						 style="background-image: linear-gradient(to right, #673AB7 0%, #ba7bfb 100%) !important; ">
						<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">BruteForce Detector</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 font-weight-bold mb-1 text-white">5,741</h4>
										<p class="mb-0 tx-12 text-white op-7">Blocked attempts</p>
									</div>
									<span class="float-right my-auto ml-auto">
												<input id="bruteforce_detector" class="form-control chkbxs"
													   type="checkbox"/>
												<span class="text-white op-7"> active</span>
											</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-12 col-xm-12">
					<div class="card overflow-hidden sales-card"
						 style="background-image: linear-gradient(to right, #00cccc 0%, #96e8e8 100%) !important; ">
						<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">Bots Detector</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 font-weight-bold mb-1 text-white">1,230</h4>
										<p class="mb-0 tx-12 text-white op-7">Blocked attempts</p>
									</div>
									<span class="float-right my-auto ml-auto">
												<input id="bots_detector" class="form-control chkbxs" type="checkbox"/>
												<span class="text-white op-7"> active</span>
											</span>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- row closed -->


		</div>
	</div>
	<!-- Container closed -->

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
						<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i>
								Friends</a></li>
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
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">
										Mozelle Belt
									</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image"
										  data-image-src="../../assets/img/faces/11.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">
										Florinda Carasco
									</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
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
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
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
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image"
										  data-image-src="../../assets/img/faces/13.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">
										Isidro Heide
									</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image"
										  data-image-src="../../assets/img/faces/12.jpg"><span
												class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">
										Mozelle Belt
									</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light"><i
												class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image"
										  data-image-src="../../assets/img/faces/4.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">
										Florinda Carasco
									</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
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
									<a href="#" class="btn btn-sm btn-light"><i
												class="fab fa-facebook-messenger"></i></a>
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
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image"
										  data-image-src="../../assets/img/faces/14.jpg"><span
												class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">
										Isidro Heide
									</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light"><i
												class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image"
										  data-image-src="../../assets/img/faces/11.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">
										Florinda Carasco
									</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
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
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
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
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image"
										  data-image-src="../../assets/img/faces/4.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">
										Isidro Heide
									</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal"
									   data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/Sidebar-right-->
	<!-- Modal effects -->
	<div class="modal" id="add_web_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content modal-content-demo">
				<div class="modal-header">
					<h6 class="modal-title">Add a new Website</h6>
					<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
								aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<h6>Website Details</h6>
					<p>here you can define the settings for the new website you wish to protect</p></br>
					<input type="text" class="form-control" id="website-url-modal" placeholder="URL"></br>
					<input type="text" class="form-control" id="website-ip-modal" placeholder="IP"></br>
					<div>
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="row">
											<div class="col">
												<input id="sql_detector" class="form-control modal_chkbxs" checked
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
												<input id="csrf_detector" class="form-control modal_chkbxs" checked
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
												<input id="xml_detector" class="form-control modal_chkbxs" checked
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
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="row">
											<div class="col">
												<input id="xss_detector" class="form-control modal_chkbxs" checked
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
									<div class="col-md-4">

										<div class="row">
											<div class="col">
												<input id="bruteforce_detector"
													   class="form-control modal_chkbxs" checked
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
									<div class="col-md-4">
										<div class="row">
											<div class="col">

												<input id="bots_detector"
													   class="form-control modal_chkbxs" checked
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
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn ripple btn-primary" id="add-website" type="button">Add website</button>
					<button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal effects-->

	<!-- Modal alert message -->
	<div class="modal" id="success_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content tx-size-sm">
				<div class="modal-body tx-center pd-y-20 pd-x-20">
					<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
								aria-hidden="true">&times;</span></button>
					<i class="icon ion-ios-checkmark-circle-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
					<h4 class="tx-success tx-semibold mg-b-20">Congratulations!</h4>
					<p class="mg-b-20 mg-x-20">Your Website is now protected by ElroSec.</p>
					<button aria-label="Close" class="btn ripple btn-success pd-x-25" data-dismiss="modal"
							type="button">Continue
					</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal" id="fail_modal">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content tx-size-sm">
				<div class="modal-body tx-center pd-y-20 pd-x-20">
					<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
								aria-hidden="true">&times;</span></button>
					<i class="icon icon ion-ios-close-circle-outline tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
					<h4 class="tx-danger mg-b-20">Error: Cannot process your entry!</h4>
					<p class="mg-b-20 mg-x-20">Something went wrong, Please contact support</p>
					<button aria-label="Close" class="btn ripple btn-danger pd-x-25" data-dismiss="modal" type="button">
						Continue
					</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End Modal alert message -->


	<!-- Footer opened -->
	<div class="main-footer ht-40">
		<div class="container-fluid pd-t-0-f ht-100p">
			<span>Copyright © 2020 ElroSec. Int'l Security Services All rights reserved.</span>
		</div>
	</div>
	<!-- Footer closed -->

</div>
<!-- End Page -->

<!-- Back-to-top -->
<a href="#" id="back-to-top"><i class="las la-angle-double-up"></i></a>

<!-- JQuery min js -->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>

<!--Internal Counters -->
<script src="<?php echo base_url(); ?>/assets/plugins/counters/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/counters/counterup.min.js"></script>

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
	var websites_arr = <?php echo($services); ?>;
	console.log(websites_arr);
	// var websites_arr = [];
	$(document).ready(function () {


		$.each(websites_arr, function (idx, web_data) {
			$('#webs-select').append('<option value="' + idx + '" data-ip="' + web_data['server_ip'] + '">' + web_data["website"] + '</option>');
		});

		//always add an option to add an new website
		$('#webs-select').append('<option value="-1">Add a new web site</option>');

		//always start with the first website of the client
		$('#webs-select').val(0).change();
	});

	$("#webs-select").on('change', function () {
		var selected_val = $(this).val();
		var server_ip = $('#webs-select option:selected').attr('data-ip');
		$('#ip_address').html("-" + server_ip)

		if (selected_val == -1) {
			$('#add_web_modal').modal('show');
		} else {
			//update checkboxes of active services for the selected website
			$.each($('.chkbxs'), function (ind, chkbx) {
				let current_detector = $(chkbx).attr('id');
				console.log(current_detector);
				if (current_detector == "ddos_box") {
					return false;
				}
				//set counters
				$(chkbx).parent().parent().find('h4').html(websites_arr[selected_val][current_detector]["count"])//TODO: implement real logic

				//set disable or checked
				let disable = (websites_arr[selected_val][current_detector]["state"] === '-1') ? true : false;
				if (disable) {
					$(chkbx).prop("disabled", disable);
				} else {
					let status = websites_arr[selected_val][current_detector]["state"] === "True" ? 1 : 0;
					$(chkbx).prop("checked", status);
				}
			});
		}
	});

	$('#add-website').on('click', function () {
		var url = $("#website-url-modal").val();
		var ip = $("#website-ip-modal").val();
		var active_services_arr = {};
		$.each($('.modal_chkbxs'), function (ind, chkbx) {
			let current_detector = $(chkbx).attr('id');
			active_services_arr[current_detector] = $(chkbx).prop("checked") ? 1 : 0;
		});

		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>actions/addNewWebsite",
			dataType: 'text',
			async: false,
			data: {url: url, ip: ip, services: active_services_arr},
			success: function (result) {
				$('#add_web_modal').modal('hide');
				$('#website-url-modal').val('');
				$('.modal_chkbxs').prop('checked', true);
				if (result == 1) {
					$('#success_modal').modal('show');
				} else {
					$('#fail_modal').modal('show');
				}
			}
		});
	});

	$('#add_web_modal').on('hidden.bs.modal', function () {
		$('#webs-select').val(0).change();
	});

	$('#success_modal').on('hidden.bs.modal', function () {
		location.reload();
	});

	$('.chkbxs').on('change', function (e) {
		e.preventDefault();
		var currently_checked = $(this).prop('checked');
		if (confirm("are you sure you wish to change this?")) {
			var dataToUpdate = {};
			var current_service = $(this).attr('id');
			dataToUpdate[current_service] = currently_checked ? "True" : "False";

			var current_web = $('#webs-select option:selected').text();
			var current_val = $('#webs-select option:selected').val();
			console.log(current_val);
			$.ajax({
				type: "POST",
				url: "<?php echo base_url(); ?>actions/updateServiceStatus",
				dataType: 'text',
				async: false,
				data: {email: '<?php echo $email; ?>', dataToUpdate: dataToUpdate, website: current_web},
				success: function (result) {
					if (result) {
						if (currently_checked) {
							$(this).prop('checked', false);
							//update global array as well
							websites_arr[current_val][current_service] = 0;
						} else {
							$(this).prop('checked', true);
							//update global array as well
							websites_arr[current_val][current_service] = 1;
						}
					}
				}
			});
		} else {
			$(this).prop('checked', !currently_checked);
		}
	});

</script>
</body>
</html>
