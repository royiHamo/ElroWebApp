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
					<div>
						<label class="tx-13">Customer Ratings</label>
						<div class="main-star">
							<i class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i
									class="typcn typcn-star active"></i> <i class="typcn typcn-star active"></i> <i
									class="typcn typcn-star"></i> <span>(14,873)</span>
						</div>
					</div>
					<div>
						<label class="tx-13">Total Blocks by Elro</label>
						<h5>46,275</h5>
					</div>
					<div>
						<label class="tx-13">Total Safe Visits</label>
						<h5>783,675</h5>
					</div>
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
				<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
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
				<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
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
				<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
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
				<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
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
			</div>
			<!-- row closed -->
			<!-- row -->
			<div class="row row-sm">
				<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
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
				<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
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
				<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
					<div class="card overflow-hidden sales-card"
						 style="background-image: linear-gradient(to right, #636f8e 0%, #acb8da 100%) !important;">
						<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">Cookie Poisoning Detector</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 font-weight-bold mb-1 text-white">7,125</h4>
										<p class="mb-0 tx-12 text-white op-7">Blocked attempts</p>
									</div>
									<span class="float-right my-auto ml-auto">
												<input id="cookie_poisoning_detector" class="form-control chkbxs"
													   type="checkbox"/>
												<span class="text-white op-7"> active</span>
											</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
					<div class="card overflow-hidden sales-card"
						 style="background-image: linear-gradient(to right, #f10075 0%, #f36eae 100%) !important; ">

						<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">DDOS Detector</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 font-weight-bold mb-1 text-white">0</h4>
										<p class="mb-0 tx-12 text-white op-7">Blocked attempts</p>
									</div>
									<span class="float-right my-auto ml-auto">
												<input id="ddos_box" class="form-control chkbxs" type="checkbox"
													   disabled/>
												<span class="text-white op-7"> active</span>
											</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- row closed -->

			<!-- row opened -->
			<!--			<div class="row row-sm">-->
			<!--				<div class="col-md-12 col-lg-12 col-xl-7">-->
			<!--					<div class="card">-->
			<!--						<div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">-->
			<!--							<div class="d-flex justify-content-between">-->
			<!--								<h4 class="card-title mb-0">Order status</h4>-->
			<!--								<i class="mdi mdi-dots-horizontal text-gray"></i>-->
			<!--							</div>-->
			<!--							<p class="tx-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>-->
			<!--						</div>-->
			<!--						<div class="card-body">-->
			<!--							<div class="total-revenue">-->
			<!--								<div>-->
			<!--									<h4>120,750</h4>-->
			<!--									<label><span class="bg-primary"></span>success</label>-->
			<!--								</div>-->
			<!--								<div>-->
			<!--									<h4>56,108</h4>-->
			<!--									<label><span class="bg-danger"></span>Pending</label>-->
			<!--								</div>-->
			<!--								<div>-->
			<!--									<h4>32,895</h4>-->
			<!--									<label><span class="bg-warning"></span>Failed</label>-->
			<!--								</div>-->
			<!--							</div>-->
			<!--							<div id="bar" class="sales-bar mt-4"></div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="col-lg-12 col-xl-5">-->
			<!--					<div class="card card-dashboard-map-one">-->
			<!--						<label class="main-content-label">Sales Revenue by Customers in USA</label>-->
			<!--						<span class="d-block mg-b-20 text-muted tx-12">Sales Performance of all states in the United States</span>-->
			<!--						<div class="">-->
			<!--							<div class="vmap-wrapper ht-180" id="vmap2"></div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!-- row closed -->
			<!---->
			<!-- row opened -->
			<!--			<div class="row row-sm">-->
			<!--				<div class="col-xl-4 col-md-12 col-lg-12">-->
			<!--					<div class="card">-->
			<!--						<div class="card-header pb-1">-->
			<!--							<h3 class="card-title mb-2">Recent Customers</h3>-->
			<!--							<p class="tx-12 mb-0 text-muted">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>-->
			<!--						</div>-->
			<!--						<div class="card-body p-0 customers mt-1">-->
			<!--							<div class="list-group list-lg-group list-group-flush">-->
			<!--								<div class="list-group-item list-group-item-action" href="#">-->
			<!--									<div class="media mt-0">-->
			<!--										<img class="avatar-lg rounded-circle mr-3 my-auto" src="../../assets/img/faces/3.jpg" alt="Image description">-->
			<!--										<div class="media-body">-->
			<!--											<div class="d-flex align-items-center">-->
			<!--												<div class="mt-0">-->
			<!--													<h5 class="mb-1 tx-15">Samantha Melon</h5>-->
			<!--													<p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-success ml-2">Paid</span></p>-->
			<!--												</div>-->
			<!--												<span class="ml-auto wd-45p fs-16 mt-2">-->
			<!--															<div id="spark1" class="wd-100p"></div>-->
			<!--														</span>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="list-group-item list-group-item-action" href="#">-->
			<!--									<div class="media mt-0">-->
			<!--										<img class="avatar-lg rounded-circle mr-3 my-auto" src="../../assets/img/faces/11.jpg" alt="Image description">-->
			<!--										<div class="media-body">-->
			<!--											<div class="d-flex align-items-center">-->
			<!--												<div class="mt-1">-->
			<!--													<h5 class="mb-1 tx-15">Jimmy Changa</h5>-->
			<!--													<p class="mb-0 tx-13 text-muted">User ID: #1234 <span class="text-danger ml-2">Pending</span></p>-->
			<!--												</div>-->
			<!--												<span class="ml-auto wd-45p fs-16 mt-2">-->
			<!--															<div id="spark2" class="wd-100p"></div>-->
			<!--														</span>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="list-group-item list-group-item-action" href="#">-->
			<!--									<div class="media mt-0">-->
			<!--										<img class="avatar-lg rounded-circle mr-3 my-auto" src="../../assets/img/faces/17.jpg" alt="Image description">-->
			<!--										<div class="media-body">-->
			<!--											<div class="d-flex align-items-center">-->
			<!--												<div class="mt-1">-->
			<!--													<h5 class="mb-1 tx-15">Gabe Lackmen</h5>-->
			<!--													<p class="mb-0 tx-13 text-muted">User ID: #1234<span class="text-danger ml-2">Pending</span></p>-->
			<!--												</div>-->
			<!--												<span class="ml-auto wd-45p fs-16 mt-2">-->
			<!--															<div id="spark3" class="wd-100p"></div>-->
			<!--														</span>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="list-group-item list-group-item-action" href="#">-->
			<!--									<div class="media mt-0">-->
			<!--										<img class="avatar-lg rounded-circle mr-3 my-auto" src="../../assets/img/faces/15.jpg" alt="Image description">-->
			<!--										<div class="media-body">-->
			<!--											<div class="d-flex align-items-center">-->
			<!--												<div class="mt-1">-->
			<!--													<h5 class="mb-1 tx-15">Manuel Labor</h5>-->
			<!--													<p class="mb-0 tx-13 text-muted">User ID: #1234<span class="text-success ml-2">Paid</span></p>-->
			<!--												</div>-->
			<!--												<span class="ml-auto wd-45p fs-16 mt-2">-->
			<!--															<div id="spark4" class="wd-100p"></div>-->
			<!--														</span>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="list-group-item list-group-item-action br-br-7 br-bl-7" href="#">-->
			<!--									<div class="media mt-0">-->
			<!--										<img class="avatar-lg rounded-circle mr-3 my-auto" src="../../assets/img/faces/6.jpg" alt="Image description">-->
			<!--										<div class="media-body">-->
			<!--											<div class="d-flex align-items-center">-->
			<!--												<div class="mt-1">-->
			<!--													<h5 class="mb-1 tx-15">Sharon Needles</h5>-->
			<!--													<p class="b-0 tx-13 text-muted mb-0">User ID: #1234<span class="text-success ml-2">Paid</span></p>-->
			<!--												</div>-->
			<!--												<span class="ml-auto wd-45p fs-16 mt-2">-->
			<!--															<div id="spark5" class="wd-100p"></div>-->
			<!--														</span>-->
			<!--											</div>-->
			<!--										</div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--							</div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="col-xl-4 col-md-12 col-lg-6">-->
			<!--					<div class="card">-->
			<!--						<div class="card-header pb-1">-->
			<!--							<h3 class="card-title mb-2">Sales Activity</h3>-->
			<!--							<p class="tx-12 mb-0 text-muted">Sales activities are the tactics that salespeople use to achieve their goals and objective</p>-->
			<!--						</div>-->
			<!--						<div class="product-timeline card-body pt-2 mt-1">-->
			<!--							<ul class="timeline-1 mb-0">-->
			<!--								<li class="mt-0"> <i class="ti-pie-chart bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Products</span> <a href="#" class="float-right tx-11 text-muted">3 days ago</a>-->
			<!--									<p class="mb-0 text-muted tx-12">1.3k New Products</p>-->
			<!--								</li>-->
			<!--								<li class="mt-0"> <i class="mdi mdi-cart-outline bg-danger-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Sales</span> <a href="#" class="float-right tx-11 text-muted">35 mins ago</a>-->
			<!--									<p class="mb-0 text-muted tx-12">1k New Sales</p>-->
			<!--								</li>-->
			<!--								<li class="mt-0"> <i class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Toatal Revenue</span> <a href="#" class="float-right tx-11 text-muted">50 mins ago</a>-->
			<!--									<p class="mb-0 text-muted tx-12">23.5K New Revenue</p>-->
			<!--								</li>-->
			<!--								<li class="mt-0"> <i class="ti-wallet bg-warning-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Toatal Profit</span> <a href="#" class="float-right tx-11 text-muted">1 hour ago</a>-->
			<!--									<p class="mb-0 text-muted tx-12">3k New profit</p>-->
			<!--								</li>-->
			<!--								<li class="mt-0"> <i class="si si-eye bg-purple-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Customer Visits</span> <a href="#" class="float-right tx-11 text-muted">1 day ago</a>-->
			<!--									<p class="mb-0 text-muted tx-12">15% increased</p>-->
			<!--								</li>-->
			<!--								<li class="mt-0 mb-0"> <i class="icon-note icons bg-primary-gradient text-white product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Customer Reviews</span> <a href="#" class="float-right tx-11 text-muted">1 day ago</a>-->
			<!--									<p class="mb-0 text-muted tx-12">1.5k reviews</p>-->
			<!--								</li>-->
			<!--							</ul>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="col-xl-4 col-md-12 col-lg-6">-->
			<!--					<div class="card">-->
			<!--						<div class="card-header pb-0">-->
			<!--							<h3 class="card-title mb-2">Recent Orders</h3>-->
			<!--							<p class="tx-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>-->
			<!--						</div>-->
			<!--						<div class="card-body sales-info ot-0 pt-0 pb-0">-->
			<!--							<div id="chart" class="ht-150"></div>-->
			<!--							<div class="row sales-infomation pb-0 mb-0 mx-auto wd-100p">-->
			<!--								<div class="col-md-6 col">-->
			<!--									<p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>Delivered</p>-->
			<!--									<h3 class="mb-1">5238</h3>-->
			<!--									<div class="d-flex">-->
			<!--										<p class="text-muted ">Last 6 months</p>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="col-md-6 col">-->
			<!--									<p class="mb-0 d-flex"><span class="legend bg-info brround"></span>Cancelled</p>-->
			<!--									<h3 class="mb-1">3467</h3>-->
			<!--									<div class="d-flex">-->
			<!--										<p class="text-muted">Last 6 months</p>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--							</div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--					<div class="card ">-->
			<!--						<div class="card-body">-->
			<!--							<div class="row">-->
			<!--								<div class="col-md-6">-->
			<!--									<div class="d-flex align-items-center pb-2">-->
			<!--										<p class="mb-0">Total Sales</p>-->
			<!--									</div>-->
			<!--									<h4 class="font-weight-bold mb-2">$7,590</h4>-->
			<!--									<div class="progress progress-style progress-sm">-->
			<!--										<div class="progress-bar bg-primary-gradient wd-80p" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--								<div class="col-md-6 mt-4 mt-md-0">-->
			<!--									<div class="d-flex align-items-center pb-2">-->
			<!--										<p class="mb-0">Active Users</p>-->
			<!--									</div>-->
			<!--									<h4 class="font-weight-bold mb-2">$5,460</h4>-->
			<!--									<div class="progress progress-style progress-sm">-->
			<!--										<div class="progress-bar bg-danger-gradient wd-75" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>-->
			<!--									</div>-->
			<!--								</div>-->
			<!--							</div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!-- row close -->
			<!---->
			<!-- row opened -->
			<!--			<div class="row row-sm row-deck">-->
			<!--				<div class="col-md-12 col-lg-4 col-xl-4">-->
			<!--					<div class="card card-dashboard-eight pb-2">-->
			<!--						<h6 class="card-title">Your Top Countries</h6><span class="d-block mg-b-10 text-muted tx-12">Sales performance revenue based by country</span>-->
			<!--						<div class="list-group">-->
			<!--							<div class="list-group-item border-top-0">-->
			<!--								<i class="flag-icon flag-icon-us flag-icon-squared"></i>-->
			<!--								<p>United States</p><span>$1,671.10</span>-->
			<!--							</div>-->
			<!--							<div class="list-group-item">-->
			<!--								<i class="flag-icon flag-icon-nl flag-icon-squared"></i>-->
			<!--								<p>Netherlands</p><span>$1,064.75</span>-->
			<!--							</div>-->
			<!--							<div class="list-group-item">-->
			<!--								<i class="flag-icon flag-icon-gb flag-icon-squared"></i>-->
			<!--								<p>United Kingdom</p><span>$1,055.98</span>-->
			<!--							</div>-->
			<!--							<div class="list-group-item">-->
			<!--								<i class="flag-icon flag-icon-ca flag-icon-squared"></i>-->
			<!--								<p>Canada</p><span>$1,045.49</span>-->
			<!--							</div>-->
			<!--							<div class="list-group-item">-->
			<!--								<i class="flag-icon flag-icon-in flag-icon-squared"></i>-->
			<!--								<p>India</p><span>$1,930.12</span>-->
			<!--							</div>-->
			<!--							<div class="list-group-item border-bottom-0 mb-0">-->
			<!--								<i class="flag-icon flag-icon-au flag-icon-squared"></i>-->
			<!--								<p>Australia</p><span>$1,042.00</span>-->
			<!--							</div>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--				<div class="col-md-12 col-lg-8 col-xl-8">-->
			<!--					<div class="card card-table-two">-->
			<!--						<div class="d-flex justify-content-between">-->
			<!--							<h4 class="card-title mb-1">Your Most Recent Earnings</h4>-->
			<!--							<i class="mdi mdi-dots-horizontal text-gray"></i>-->
			<!--						</div>-->
			<!--						<span class="tx-12 tx-muted mb-3 ">This is your most recent earnings for today's date.</span>-->
			<!--						<div class="table-responsive country-table">-->
			<!--							<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">-->
			<!--								<thead>-->
			<!--								<tr>-->
			<!--									<th class="wd-lg-25p">Date</th>-->
			<!--									<th class="wd-lg-25p tx-right">Sales Count</th>-->
			<!--									<th class="wd-lg-25p tx-right">Earnings</th>-->
			<!--									<th class="wd-lg-25p tx-right">Tax Witheld</th>-->
			<!--								</tr>-->
			<!--								</thead>-->
			<!--								<tbody>-->
			<!--								<tr>-->
			<!--									<td>05 Dec 2019</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">34</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">$658.20</td>-->
			<!--									<td class="tx-right tx-medium tx-danger">-$45.10</td>-->
			<!--								</tr>-->
			<!--								<tr>-->
			<!--									<td>06 Dec 2019</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">26</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">$453.25</td>-->
			<!--									<td class="tx-right tx-medium tx-danger">-$15.02</td>-->
			<!--								</tr>-->
			<!--								<tr>-->
			<!--									<td>07 Dec 2019</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">34</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">$653.12</td>-->
			<!--									<td class="tx-right tx-medium tx-danger">-$13.45</td>-->
			<!--								</tr>-->
			<!--								<tr>-->
			<!--									<td>08 Dec 2019</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">45</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">$546.47</td>-->
			<!--									<td class="tx-right tx-medium tx-danger">-$24.22</td>-->
			<!--								</tr>-->
			<!--								<tr>-->
			<!--									<td>09 Dec 2019</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">31</td>-->
			<!--									<td class="tx-right tx-medium tx-inverse">$425.72</td>-->
			<!--									<td class="tx-right tx-medium tx-danger">-$25.01</td>-->
			<!--								</tr>-->
			<!--								</tbody>-->
			<!--							</table>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
			<!--			</div>-->
			<!-- /row -->
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
									<div class="col-md-3">
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

								</div>
								<div class="row">
									<div class="col-md-3">

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
									<div class="col-md-3">
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
									<div class="col-md-3">
										<div class="row">
											<div class="col">
												<input id="cookie_poisoning_detector"
													   class="form-control modal_chkbxs" checked
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
												<input id="ddos_box" class="form-control modal_chkbxs" checked
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
		//
		// //parse elements to js object from json string
		// $.each(arr_from_db,function(idx,obj){
		// 	websites_arr.push(JSON.parse(obj))
		// });
		// console.log(websites_arr);
		// console.log("-------");


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

	//function refresh_websites_arr(){
	//	$.ajax({
	//		type: "POST",
	//		url: "<?php //echo base_url(); ?>//actions/getActiveServices",
	//		dataType: 'text',
	//		async: false,
	//		data: {},
	//		success: function (result) {
	//			if (result) {dd a new Web-site
	//				websites_arr = result;
	//			}
	//		}
	//	});
	//}

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
