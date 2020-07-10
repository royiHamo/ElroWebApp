<?php ?>
<!doctype html>
<style>
	.search_btn{
	'color':'white; !important';
	}

</style>
<script>


</script>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

	<!-- Title -->
	<title> ElroSec. Users </title>

	<!-- Favicon -->
	<link rel="icon" href="<?php echo base_url(); ?>/assets/img/brand/favicon.png" type="image/x-icon"/>

	<!-- Icons css -->
	<link href="<?php echo base_url(); ?>/assets/css/icons.css" rel="stylesheet">

	<!--  Owl-carousel css-->
	<link href="<?php echo base_url(); ?>/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

	<!--  Custom Scroll bar-->
	<link href="<?php echo base_url(); ?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

	<!--  Right-sidemenu css -->
	<link href="<?php echo base_url(); ?>/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!-- Sidemenu css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/sidemenu.css">

	<!-- Maps css -->
	<link href="<?php echo base_url(); ?>/assets/plugins/jqvmap/jqvmap.min.css" rel="stylesheet">

	<!-- style css -->
	<link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>/assets/css/style-dark.css" rel="stylesheet">

	<!---Skinmodes css-->
	<link href="<?php echo base_url(); ?>/assets/css/skin-modes.css" rel="stylesheet" />

</head>

<body class="main-body app sidebar-mini dark-theme">

<!-- Loader -->
<div id="global-loader">
	<img src="<?php echo base_url(); ?>/assets/img/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /Loader -->

<!-- Page -->
<div class="page">

	<!-- main-sidebar -->
	<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
	<aside class="app-sidebar sidebar-scroll">
		<div class="main-sidebar-header active">
			<a class="desktop-logo logo-light active" href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>/assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
			<a class="desktop-logo logo-dark active" href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>/assets/img/brand/logo-white1.png" class="main-logo dark-theme" alt="logo"></a>
			<a class="logo-icon mobile-logo icon-light active" href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>/assets/img/brand/favicon.png" class="logo-icon" alt="logo"></a>
			<a class="logo-icon mobile-logo icon-dark active" href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>/assets/img/brand/favicon-white.png" class="logo-icon dark-theme" alt="logo"></a>
		</div>
		<div class="main-sidemenu">
			<div class="app-sidebar__user clearfix">
				<div class="dropdown user-pro-body">
					<div class="">
						<img alt="user-img" class="avatar avatar-xl brround" src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg"><span class="avatar-status profile-status bg-green"></span>
					</div>
					<div class="user-info">
						<h4 class="font-weight-semibold mt-3 mb-0"><?php echo ucfirst(strtok($email, '@')); ?></h4>
						<span class="mb-0 text-muted">System Admin</span>
					</div>
				</div>
			</div>
			<ul class="side-menu">
				<li class="side-item side-item-category">Main</li>
				<li class="slide">
					<a class="side-menu__item" href="<?php echo base_url(); ?>actions/admin_login"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Dashboard</span></a>
				</li>
				<li class="slide">
					<a class="side-menu__item" href="<?php echo base_url(); ?>actions/users"><i class="side-menu__icon mdi mdi-account-multiple"></i><span class="side-menu__label">Users</span><span class="badge badge-success side-badge">456</span></a><!-- TODO: add users count from table -->
				</li>
				<li class="slide">
					<a class="side-menu__item" href="<?php echo base_url(); ?>actions/attacks"><i class="side-menu__icon mdi mdi-access-point"></i><span class="side-menu__label">Attacks log</span></a>
				</li>
			</ul>
		</div>
	</aside>
	<!-- main-sidebar -->

	<!-- main-content -->
	<div class="main-content app-content">

		<!-- main-header -->
		<div class="main-header sticky side-header nav nav-item">
			<div class="container-fluid">
				<div class="main-header-left ">
					<div class="responsive-logo">
						<a href="index.html"><img src="<?php echo base_url(); ?>/assets/img/brand/logo.png" class="logo-1" alt="logo"></a>
						<a href="index.html"><img src="<?php echo base_url(); ?>/assets/img/brand/logo-white1.png" class="dark-logo-1" alt="logo"></a>
					</div>
					<div class="app-sidebar__toggle" data-toggle="sidebar">
						<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
						<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
					</div>
					<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
						<input class="form-control" placeholder="Search for anything..." type="search"> <button class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
					</div>
				</div>
				<div class="main-header-right">
					<ul class="nav">
						<li class="">
							<div class="dropdown  nav-itemd-none d-md-flex">
								<a href="#" class="d-flex  nav-item nav-link pr-0 country-flag1" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar country-Flag mr-0 align-self-center bg-transparent"><img src="<?php echo base_url(); ?>/assets/img/flags/us_flag.jpg" alt="img"></span>
									<div class="my-auto">
										<strong class="mr-2 ml-2 my-auto">English</strong>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow" x-placement="bottom-end">
									<a href="#" class="dropdown-item d-flex ">
										<span class="avatar  mr-3 align-self-center bg-transparent"><img src="<?php echo base_url(); ?>/assets/img/flags/french_flag.jpg" alt="img"></span>
										<div class="d-flex">
											<span class="mt-2">French</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex">
										<span class="avatar  mr-3 align-self-center bg-transparent"><img src="<?php echo base_url(); ?>/assets/img/flags/germany_flag.jpg" alt="img"></span>
										<div class="d-flex">
											<span class="mt-2">Germany</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex">
										<span class="avatar mr-3 align-self-center bg-transparent"><img src="<?php echo base_url(); ?>/assets/img/flags/italy_flag.jpg" alt="img"></span>
										<div class="d-flex">
											<span class="mt-2">Italy</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex">
										<span class="avatar mr-3 align-self-center bg-transparent"><img src="<?php echo base_url(); ?>/assets/img/flags/russia_flag.jpg" alt="img"></span>
										<div class="d-flex">
											<span class="mt-2">Russia</span>
										</div>
									</a>
									<a href="#" class="dropdown-item d-flex">
										<span class="avatar  mr-3 align-self-center bg-transparent"><img src="<?php echo base_url(); ?>/assets/img/flags/spain_flag.jpg" alt="img"></span>
										<div class="d-flex">
											<span class="mt-2">spain</span>
										</div>
									</a>
								</div>
							</div>
						</li>
					</ul>
					<div class="nav nav-item  navbar-nav-right ml-auto">
						<div class="nav-link" id="bs-example-navbar-collapse-1">
							<form class="navbar-form" role="search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fas fa-times"></i>
												</button>
												<button type="submit" class="btn btn-default nav-link resp-btn">
													<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
												</button>
											</span>
								</div>
							</form>
						</div>
						<div class="dropdown nav-item main-header-message ">
							<a class="new nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg><span class=" pulse-danger"></span></a>
							<div class="dropdown-menu">
								<div class="menu-header-content bg-primary text-left">
									<div class="d-flex">
										<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Messages</h6>
										<span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
									</div>
									<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread messages</p>
								</div>
								<div class="main-message-list chat-scroll">
									<a href="#" class="p-3 d-flex border-bottom">
										<div class="  drop-img  cover-image  " data-image-src="<?php echo base_url(); ?>/assets/img/faces/3.jpg">
											<span class="avatar-status bg-teal"></span>
										</div>
										<div class="wd-90p">
											<div class="d-flex">
												<h5 class="mb-1 name">Petey Cruiser</h5>
											</div>
											<p class="mb-0 desc">I'm sorry but i'm not sure how to help you with that......</p>
											<p class="time mb-0 text-left float-left ml-2 mt-2">Mar 15 3:55 PM</p>
										</div>
									</a>
									<a href="#" class="p-3 d-flex border-bottom">
										<div class="drop-img cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/2.jpg">
											<span class="avatar-status bg-teal"></span>
										</div>
										<div class="wd-90p">
											<div class="d-flex">
												<h5 class="mb-1 name">Jimmy Changa</h5>
											</div>
											<p class="mb-0 desc">All set ! Now, time to get to you now......</p>
											<p class="time mb-0 text-left float-left ml-2 mt-2">Mar 06 01:12 AM</p>
										</div>
									</a>
									<a href="#" class="p-3 d-flex border-bottom">
										<div class="drop-img cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/9.jpg">
											<span class="avatar-status bg-teal"></span>
										</div>
										<div class="wd-90p">
											<div class="d-flex">
												<h5 class="mb-1 name">Graham Cracker</h5>
											</div>
											<p class="mb-0 desc">Are you ready to pickup your Delivery...</p>
											<p class="time mb-0 text-left float-left ml-2 mt-2">Feb 25 10:35 AM</p>
										</div>
									</a>
									<a href="#" class="p-3 d-flex border-bottom">
										<div class="drop-img cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/12.jpg">
											<span class="avatar-status bg-teal"></span>
										</div>
										<div class="wd-90p">
											<div class="d-flex">
												<h5 class="mb-1 name">Donatella Nobatti</h5>
											</div>
											<p class="mb-0 desc">Here are some products ...</p>
											<p class="time mb-0 text-left float-left ml-2 mt-2">Feb 12 05:12 PM</p>
										</div>
									</a>
									<a href="#" class="p-3 d-flex border-bottom">
										<div class="drop-img cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/5.jpg">
											<span class="avatar-status bg-teal"></span>
										</div>
										<div class="wd-90p">
											<div class="d-flex">
												<h5 class="mb-1 name">Anne Fibbiyon</h5>
											</div>
											<p class="mb-0 desc">I'm sorry but i'm not sure how...</p>
											<p class="time mb-0 text-left float-left ml-2 mt-2">Jan 29 03:16 PM</p>
										</div>
									</a>
								</div>
								<div class="text-center dropdown-footer">
									<a href="text-center">VIEW ALL</a>
								</div>
							</div>
						</div>
						<div class="dropdown nav-item main-header-notification">
							<a class="new nav-link" href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
							<div class="dropdown-menu">
								<div class="menu-header-content bg-primary text-left">
									<div class="d-flex">
										<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Notifications</h6>
										<span class="badge badge-pill badge-warning ml-auto my-auto float-right">Mark All Read</span>
									</div>
									<p class="dropdown-title-text subtext mb-0 text-white op-6 pb-0 tx-12 ">You have 4 unread Notifications</p>
								</div>
								<div class="main-notification-list Notification-scroll">
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-pink">
											<i class="la la-file-alt text-white"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">New files available</h5>
											<div class="notification-subtext">10 hour ago</div>
										</div>
										<div class="ml-auto" >
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3" href="#">
										<div class="notifyimg bg-purple">
											<i class="la la-gem text-white"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">Updates Available</h5>
											<div class="notification-subtext">2 days ago</div>
										</div>
										<div class="ml-auto" >
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-success">
											<i class="la la-shopping-basket text-white"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">New Order Received</h5>
											<div class="notification-subtext">1 hour ago</div>
										</div>
										<div class="ml-auto" >
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-warning">
											<i class="la la-envelope-open text-white"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">New review received</h5>
											<div class="notification-subtext">1 day ago</div>
										</div>
										<div class="ml-auto" >
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-danger">
											<i class="la la-user-check text-white"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">22 verified registrations</h5>
											<div class="notification-subtext">2 hour ago</div>
										</div>
										<div class="ml-auto" >
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
									<a class="d-flex p-3 border-bottom" href="#">
										<div class="notifyimg bg-primary">
											<i class="la la-check-circle text-white"></i>
										</div>
										<div class="ml-3">
											<h5 class="notification-label mb-1">Project has been approved</h5>
											<div class="notification-subtext">4 hour ago</div>
										</div>
										<div class="ml-auto" >
											<i class="las la-angle-right text-right text-muted"></i>
										</div>
									</a>
								</div>
								<div class="dropdown-footer">
									<a href="">VIEW ALL</a>
								</div>
							</div>
						</div>
						<div class="nav-item full-screen fullscreen-button">
							<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
						</div>
						<div class="dropdown main-profile-menu nav nav-item nav-link">
							<a class="profile-user d-flex" href=""><img alt="" src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg"></a>
							<div class="dropdown-menu">
								<div class="main-header-profile bg-primary p-3">
									<div class="d-flex wd-100p">
										<div class="main-img-user"><img alt="" src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class=""></div>
										<div class="ml-3 my-auto">
											<h6>Petey Cruiser</h6><span>Premium Member</span>
										</div>
									</div>
								</div>
								<a class="dropdown-item" href=""><i class="bx bx-user-circle"></i>Profile</a>
								<a class="dropdown-item" href=""><i class="bx bx-cog"></i> Edit Profile</a>
								<a class="dropdown-item" href=""><i class="bx bxs-inbox"></i>Inbox</a>
								<a class="dropdown-item" href=""><i class="bx bx-envelope"></i>Messages</a>
								<a class="dropdown-item" href=""><i class="bx bx-slider-alt"></i> Account Settings</a>
								<a class="dropdown-item" href="page-signin.html"><i class="bx bx-log-out"></i> Sign Out</a>
							</div>
						</div>
						<div class="dropdown main-header-message right-toggle">
							<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
								<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-header -->

		<!-- container -->
		<div class="container-fluid">

			<!-- row opened  -->
			<div class="row row-sm">
			<!--div-->
			<div class="col-xl-12">
				<div class="card mg-b-20">
					<div class="card-header pb-0">
						<div class="d-flex justify-content-between">
							<h4 class="card-title mg-b-0">Users</h4>
							<i class="mdi mdi-dots-horizontal text-gray"></i>
						</div>
						<p class="tx-12 tx-gray-500 mb-2">displaying users details and export options</p>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table display nowrap key-buttons text-md-nowrap">
								<thead>
								<tr>
									<th class="border-bottom-0">Email</th>
									<th class="border-bottom-0">Active</th>
									<th class="border-bottom-0">Website</th>
									<th class="border-bottom-0">Registered On</th>
									<th class="border-bottom-0">SQL</th>
									<th class="border-bottom-0">XSS</th>
									<th class="border-bottom-0">CSRF</th>
									<th class="border-bottom-0">BOTS</th>
									<th class="border-bottom-0">XML</th>
									<th class="border-bottom-0">Cookie Poisoning</th>
									<th class="border-bottom-0">Brute Force</th>
								</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!--/div-->
			</div>
			<!-- row closed -->

		</div>
		<!-- /Container -->
	</div>
	<!-- /main-content -->

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
						<li class=""><a href="#side1" class="active" data-toggle="tab"><i class="ion ion-md-chatboxes tx-18 mr-2"></i> Chat</a></li>
						<li><a href="#side2" data-toggle="tab"><i class="ion ion-md-notifications tx-18  mr-2"></i> Notifications</a></li>
						<li><a href="#side3" data-toggle="tab"><i class="ion ion-md-contacts tx-18 mr-2"></i> Friends</a></li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active " id="side1">
						<div class="list d-flex align-items-center border-bottom p-3">
							<div class="">
								<span class="avatar bg-primary brround avatar-md">CH</span>
							</div>
							<a class="wrapper w-100 ml-3" href="#" >
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
							<a class="wrapper w-100 ml-3" href="#" >
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
							<a class="wrapper w-100 ml-3" href="#" >
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
							<a class="wrapper w-100 ml-3" href="#" >
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
							<a class="wrapper w-100 ml-3" href="#" >
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
							<a class="wrapper w-100 ml-3" href="#" >
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
							<a class="wrapper w-100 ml-3" href="#" >
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
							<a class="wrapper w-100 ml-3" href="#" >
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
									<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
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
									<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/1.jpg"></span>
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
									<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
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
									<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/8.jpg"><span class="avatar-status bg-success"></span></span>
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
									<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/11.jpg"></span>
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
									<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg"><span class="avatar-status bg-success"></span></span>
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
									<span class="avatar avatar-lg brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
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
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/9.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/11.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/10.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/2.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/13.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/12.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Mozelle Belt</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/4.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/7.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/2.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/14.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" ><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/11.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/9.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Alina Bernier</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/15.jpg"><span class="avatar-status bg-success"></span></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Zula Mclaughin</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
								</div>
							</div>
							<div class="list-group-item d-flex  align-items-center">
								<div class="mr-2">
									<span class="avatar avatar-md brround cover-image" data-image-src="<?php echo base_url(); ?>/assets/img/faces/4.jpg"></span>
								</div>
								<div class="">
									<div class="font-weight-semibold" data-toggle="modal" data-target="#chatmodel">Isidro Heide</div>
								</div>
								<div class="ml-auto">
									<a href="#" class="btn btn-sm btn-light" data-toggle="modal" data-target="#chatmodel"><i class="fab fa-facebook-messenger"></i></a>
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
	<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
		<div class="modal-dialog modal-dialog-right chatbox" role="document">
			<div class="modal-content chat border-0">
				<div class="card overflow-hidden mb-0 border-0">
					<!-- action-header -->
					<div class="action-header clearfix">
						<div class="float-left hidden-xs d-flex ml-2">
							<div class="img_cont mr-3">
								<img src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class="rounded-circle user_img" alt="img">
							</div>
							<div class="align-items-center mt-2">
								<h4 class="text-white mb-0 font-weight-semibold">Daneil Scott</h4>
								<span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
							</div>
						</div>
						<ul class="ah-actions actions align-items-center">
							<li class="call-icon">
								<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#audiomodal">
									<i class="si si-phone"></i>
								</a>
							</li>
							<li class="video-icon">
								<a href="" class="d-done d-md-block phone-button" data-toggle="modal" data-target="#videomodal">
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
								<a href=""  class="" data-dismiss="modal" aria-label="Close">
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
								<img src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class="rounded-circle user_img_msg" alt="img">
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
								<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
							</div>
						</div>
						<div class="d-flex justify-content-start ">
							<div class="img_cont_msg">
								<img src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class="rounded-circle user_img_msg" alt="img">
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
								<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
							</div>
						</div>
						<div class="d-flex justify-content-start ">
							<div class="img_cont_msg">
								<img src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class="rounded-circle user_img_msg" alt="img">
							</div>
							<div class="msg_cotainer">
								Yo, Can you update Views?
								<span class="msg_time">9:07 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								But I must explain to you how all this mistaken  born and I will give
								<span class="msg_time_send">9:10 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
							</div>
						</div>
						<div class="d-flex justify-content-start ">
							<div class="img_cont_msg">
								<img src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class="rounded-circle user_img_msg" alt="img">
							</div>
							<div class="msg_cotainer">
								Yo, Can you update Views?
								<span class="msg_time">9:07 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								But I must explain to you how all this mistaken  born and I will give
								<span class="msg_time_send">9:10 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
							</div>
						</div>
						<div class="d-flex justify-content-start ">
							<div class="img_cont_msg">
								<img src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class="rounded-circle user_img_msg" alt="img">
							</div>
							<div class="msg_cotainer">
								Yo, Can you update Views?
								<span class="msg_time">9:07 AM, Today</span>
							</div>
						</div>
						<div class="d-flex justify-content-end mb-4">
							<div class="msg_cotainer_send">
								But I must explain to you how all this mistaken  born and I will give
								<span class="msg_time_send">9:10 AM, Today</span>
							</div>
							<div class="img_cont_msg">
								<img src="<?php echo base_url(); ?>/assets/img/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
							</div>
						</div>
						<div class="d-flex justify-content-start">
							<div class="img_cont_msg">
								<img src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class="rounded-circle user_img_msg" alt="img">
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
					<img src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
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
								<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
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
					<img src="<?php echo base_url(); ?>/assets/img/faces/<?php echo ucfirst(strtok($email, '@')); ?>.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
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
								<a class="icon icon-shape rounded-circle text-white mb-0 mr-3" href="#" data-dismiss="modal" aria-label="Close">
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

<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

<!-- JQuery min js -->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Bundle js -->
<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!--Internal  Chart.bundle js -->
<script src="<?php echo base_url(); ?>/assets/plugins/chart.js/Chart.bundle.min.js"></script>

<!-- Ionicons js -->
<script src="<?php echo base_url(); ?>/assets/plugins/ionicons/ionicons.js"></script>

<!-- Moment js -->
<script src="<?php echo base_url(); ?>/assets/plugins/moment/moment.js"></script>

<!--Internal Sparkline js -->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- Moment js -->
<script src="<?php echo base_url(); ?>/assets/plugins/raphael/raphael.min.js"></script>

<!--Internal  Flot js-->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery.flot/jquery.flot.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jquery.flot/jquery.flot.pie.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jquery.flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jquery.flot/jquery.flot.categories.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/dashboard.sampledata.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/chart.flot.sampledata.js"></script>

<!-- Custom Scroll bar Js-->
<script src="<?php echo base_url(); ?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Rating js-->
<script src="<?php echo base_url(); ?>/assets/plugins/rating/jquery.rating-stars.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/rating/jquery.barrating.js"></script>

<!--Internal  Perfect-scrollbar js -->
<script src="<?php echo base_url(); ?>/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/perfect-scrollbar/p-scroll.js"></script>

<!-- Internal Data tables -->
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/dataTables.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/responsive.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatable/js/responsive.bootstrap4.min.js"></script>

<!--Internal  Datatable js -->
<script src="<?php echo base_url(); ?>/assets/js/table-data.js"></script>


<!-- Eva-icons js -->
<script src="<?php echo base_url(); ?>/assets/js/eva-icons.min.js"></script>

<!-- right-sidebar js -->
<script src="<?php echo base_url(); ?>/assets/plugins/sidebar/sidebar.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/sidebar/sidebar-custom.js"></script>

<!-- Sticky js -->
<script src="<?php echo base_url(); ?>/assets/js/sticky.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/modal-popup.js"></script>

<!-- Left-menu js-->
<script src="<?php echo base_url(); ?>/assets/plugins/side-menu/sidemenu.js"></script>

<!-- Internal Map -->
<script src="<?php echo base_url(); ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<!-- custom js -->
<script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.vmap.sampledata.js"></script>
<script>

		$(document).ready(function() {
			var t = $('#example').DataTable();
			var users = <?php echo json_encode($users);?>;
			$.each(users, function(idx,user){
				t.row.add( [
					user['email'],
					user['active'],
					user['website'],
					user['registered_on'],
					user['sql_detector'],
					user['xss_detector'],
					user['csrf_detector'],
					user['bots_detector'],
					user['xml_detector'],
					user['cookie_poisoning_detector'],
					user['bruteforce_detector']
				] ).draw( false );
			});

		} );

</script>

</body>
</html>
