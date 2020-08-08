<?php ?>
<!doctype html>

<html lang="en" dir="ltr">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

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
		<link href="<?php echo base_url(); ?>/assets/css/skin-modes.css" rel="stylesheet" />

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
						<a href="<?php echo base_url(); ?>register" id="register_btn">Register</a></div>
				</div>
			</div>
			<!-- /main-header -->


			<!-- main-content opened -->
			<div class="main-content horizontal-content">

				<!-- container opened -->
				<div class="container">

					<!-- breadcrumb -->
<!--					<div class="breadcrumb-header justify-content-between">-->
<!--						<div class="my-auto">-->
<!--							<div class="d-flex">-->
<!--								<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Empty</span>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="d-flex my-xl-auto right-content">-->
<!--							<div class="pr-1 mb-3 mb-xl-0">-->
<!--								<button type="button" class="btn btn-info btn-icon mr-2"><i class="mdi mdi-filter-variant"></i></button>-->
<!--							</div>-->
<!--							<div class="pr-1 mb-3 mb-xl-0">-->
<!--								<button type="button" class="btn btn-danger btn-icon mr-2"><i class="mdi mdi-star"></i></button>-->
<!--							</div>-->
<!--							<div class="pr-1 mb-3 mb-xl-0">-->
<!--								<button type="button" class="btn btn-warning  btn-icon mr-2"><i class="mdi mdi-refresh"></i></button>-->
<!--							</div>-->
<!--							<div class="mb-3 mb-xl-0">-->
<!--								<div class="btn-group dropdown">-->
<!--									<button type="button" class="btn btn-primary">14 Aug 2019</button>-->
<!--									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--									<span class="sr-only">Toggle Dropdown</span>-->
<!--									</button>-->
<!--									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">-->
<!--										<a class="dropdown-item" href="#">2015</a>-->
<!--										<a class="dropdown-item" href="#">2016</a>-->
<!--										<a class="dropdown-item" href="#">2017</a>-->
<!--										<a class="dropdown-item" href="#">2018</a>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
					<!-- breadcrumb -->
					<div class="row">
					<div class="col-lg-12 col-md-12">
					<div class="card custom-card">
					<div class="card-body">
					<div class="row">
						<div class="col-md-5"></div>
						<div class="col-md-4">
								<h1 style="font-size:60px;">Login</h1>
						</div>
						<div class="col-md-3"></div>
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
							<input id="email-input" class="form-control" placeholder="email address" type="text">
						</div>

						</div>
						<div class="col-md-4"></div>
					</div>
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
						<div class="main-header-center  ml-4">
							<h5 id="email-alert" style="color:red;font-weight: 100; display:none;">Please enter a valid email address.</h5></div>
						</div>
						<div class="col-md-4"></div>
					</div>
					<div class="row"><h1></h1></div>
					<div class="row"></div>
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="main-header-center  ml-4">
						<input id="password-input" class="form-control" placeholder="Password" type="password">
							</div>
							<div class="col-md-4"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
							<div class="main-header-center  ml-4">
								<h5 id="pass-alert" style="color:red;font-weight: 100; display:none;">Please enter a valid password.</h5></div>
						</div>
						<div class="col-md-4"></div>
					</div>
					<div class="row"><h1></h1></div>

					<div class="row">
						<div class ="col-md-5"></div>
						<div class ="col-md-2">
								<button id="login-btn" class="btn btn-indigo btn-rounded btn-block"><i class="fe fe-log-in" "></i></button>
						</div>
						<div class ="col-md-5"></div>

					</div>
					<div clas="row"><h1></h1></div>

					<div clas="row">
							<div id="alert-success" class="alert alert-success" role="alert" style="display:none;">
								<button aria-label="Close" class="close" data-dismiss="alert" type="button">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong>Logged in succesfully</strong>, redirecting to personal area
							</div>
							<div id="alert-danger" class="alert alert-danger mg-b-0" role="alert" style="display:none;">
								<button aria-label="Close" class="close" data-dismiss="alert" type="button">
									<span aria-hidden="true">&times;</span>
								</button>
								<strong>wrong credentials!</strong> try again.
							</div>
						</div>
					</div>

					</div>
					</div>
				</div>
				</div>
				</div>
				</div>

				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

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
			.search_btn{
			'color':'white; !important';
			}
		</style>
		<script>
			$(document).ready(function(){
				$('#email-input').on('keypress',function(e) {
					if(e.which == 13) {
						$('#password-input').focus();
					}
				});
				$('#password-input').on('keypress',function(e) {
					if(e.which == 13) {
						$('#login-btn').click();
					}
				});
			});

			$('#login-btn').on('click',function(){
				$('#pass-alert').hide();
				$('#email-alert').hide();
				$('#alert-success').hide();
				$('#alert-danger').hide();
				let brk = false;

				let email = $('#email-input').val();
				let pass = $('#password-input').val();

				if(pass == '' || pass == null){
					$('#pass-alert').show();
					brk = true;
				}

				let email_regex = new RegExp('^(.+)@(.+)\..+$');

				if (!email_regex.test(email)) {
					$('#email-alert').show();
					brk = true;
				}

				if(brk){
					return false;
				}

				console.log(email)
				console.log(pass)
				$.ajax({
					type: "POST",
					url:"<?php echo base_url(); ?>actions/login",
					dataType: 'text',
					data: { email:  email , password: pass },
					success: function(result){
						if(result){
							$('.alert-success').show();
							setTimeout(function(){
								window.location.href = '<?php echo base_url();?>actions/personal_area';
							},1000)
						}else{
							$('.alert-danger').show();
						}
					}
				});

			});

		</script>
	</body>
</html>
