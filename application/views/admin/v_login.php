<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Maboor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Booking Ticket Pesawat/>
	<meta name="keywords" content="Booking" />
	<meta name="author" content="salsabilaamrp" />


	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css"/>
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/icomoon.css"/>
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css"/>
	<!-- Superfish -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/superfish.css"/>
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/magnific-popup.css"/>
	<!-- Date Picker -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-datepicker.min.css"/>
	<!-- CS Select -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/cs-select.css"/>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/cs-skin-border.css"/>

	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css"/>


	<!-- Modernizr JS -->
	<script src="<?=base_url()?>assets/js/modernizr-2.6.2.min.js"/></script>
	

</head>
<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
						<h1 id="fh5co-logo"><a href="<?=base_url()?>"><i class="icon-airplane"></i>maboor</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active"><a href="<?=base_url()?>">Halaman User</a></li>
								<li class=""><a href="<?php echo base_url() ?>reservation"></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- end:header-top -->
			<div class="fh5co-hero">
				<div class="fh5co-overlay"></div>
				<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url('<?=base_url()?>assets/images/cover_bg_satu.jpg');">
					<div class="desc">
						<div class="container">
							<div class="row">
								<div class="desc2 animate-box">
									<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">

										<h2>Let's travel the world!</h2>
										<h3>Hey kamu, iya kamu, mau ke mana?</h3>

									</div>
								</div>
								<div class="col-sm-5 col-md-5">
									<div class="tabulation animate-box">

										<!-- Nav tabs -->
										
										<?php if ( isset($_GET['alert']) ): ?>
											<?php if ( $_GET['alert'] == 'success' ): ?>
												<div class="alert alert-success">
													<p>Pendaftaran Berhasil</p>
												</div>
												<?php elseif ( $_GET['alert'] == 'failed' ): ?>
													<div class="alert alert-failed">
														<p>Username dan password tidak cocok</p>
													</div>
												<?php endif; ?>
											<?php endif; ?>				

											<!-- Tab panes -->
											<form action="<?php echo base_url() ?>admin/account/signin_process" method="POST">
												<input type="hidden" name="url_before" value='<?php 
												if(isset($_GET['url'])){
													echo $_GET['url'];
												}
												else{
													echo '';
												}
												?>'>
												<div class="tab-content">
													<div role="tabpanel" class="tab-pane active" id="login">
														<div class="text-center">
															<label>LOGIN ADMIN</label>
														</div>
														<div class="row">
															<div class="col-xxs-12 col-xs-12 mt">
																<div class="input-field">
																	<label for="from">Username</label>
																	<input name="username" type="text" class="form-control" id="username" />
																</div>
															</div>
															<div class="col-xxs-12 col-xs-12 mt">
																<div class="input-field">
																	<label for="from">Password</label>
																	<input name="password" type="password" class="form-control" id="password" />
																</div>
															</div>

															<div class="col-xs-12">
																<input name="submit" type="submit" class="btn btn-primary btn-block" value="Signin">
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div> 
			<footer>
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center">
								<p>
									<a href="https://www.twitter.com/salsabilaamrp" target="_blank"><i class="icon-twitter2"></i></a>
									<a href="https://www.facebook.com/salsabilaamrp" target="_blank"><i class="icon-facebook2"></i></a>
									<a href="https://www.instagram.com/salsabilaamrp" target="_blank"><i class="icon-instagram"></i></a>
								</p>
								<p>Copyright 2019 <b>Maboor</b> All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>



		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?=base_url()?>assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?=base_url()?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?=base_url()?>assets/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?=base_url()?>assets/js/hoverIntent.js"></script>
	<script src="<?=base_url()?>assets/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?=base_url()?>assets/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?=base_url()?>assets/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="<?=base_url()?>assets/js/classie.js"></script>
	<script src="<?=base_url()?>assets/js/selectFx.js"></script>

	<!-- Main JS -->
	<script src="<?=base_url()?>assets/js/main.js"></script>

</body>
</html>