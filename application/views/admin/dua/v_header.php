<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Maboor | Admin</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/users.jpg">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/skin-blue.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_datetime/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"
        />

        <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/style.css">

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    	<div class="wrapper">

    		<!-- Main Header -->
    		<header class="main-header">

    			<!-- Logo -->
    			<a href="<?php echo base_url() ?>admin" class="logo">
    				<!-- mini logo for sidebar mini 50x50 pixels -->
    				<span class="logo-mini">
    					<b>A</b>LT</span>
    					<!-- logo for regular state and mobile devices -->
    					<span class="logo-lg">
    						<b>Admin</b> MABOOR</span>
    					</a>

    					<!-- Header Navbar -->
    					<nav class="navbar navbar-static-top" role="navigation">
    						<!-- Sidebar toggle button-->
    						<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
    							<span class="sr-only">Toggle navigation</span>
    						</a>
    						<!-- Navbar Right Menu -->
    						<div class="navbar-custom-menu">
    							<ul class="nav navbar-nav">

    								<li class="dropdown user user-menu">
    									<!-- Menu Toggle Button -->
    									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
    										<!-- The user image in the navbar-->
    										<img src="<?php echo base_url() ?>assets/admin/dist/img/user.jpg" class="user-image" alt="User Image">
    										<!-- hidden-xs hides the username on small devices so only the image appears. -->
    										<span class="hidden-xs"><?php echo $this->session->userdata('user_admin')["username"] ?></span>
    									</a>
    									<ul class="dropdown-menu">
    										<!-- The user image in the menu -->
    										<li class="user-header">
    											<img src="<?php echo base_url() ?>assets/admin/dist/img/user.jpg" class="img-circle" alt="User Image">

    											<p>
    												<?php echo $this->session->userdata('user_admin')["username"] ?>
    											</p>
    										</li>
    										<!-- <li class="user-body">
    										</li> -->
    										<!-- Menu Footer-->
    										<li class="user-footer">
    											<div class="pull-left">
    											</div>
    											<div class="pull-right">
    												<a href="<?php echo base_url() ?>admin/account/logout" class="btn btn-default btn-flat">Keluar</a>
    											</div>
    										</li>
    									</ul>
    								</li>
    								<!-- Control Sidebar Toggle Button -->
    							</ul>
    						</div>
    					</nav>
    				</header>
    				<!-- Left side column. contains the logo and sidebar -->
    				<aside class="main-sidebar">

    					<!-- sidebar: style can be found in sidebar.less -->
    					<section class="sidebar">

    						<!-- Sidebar user panel (optional) -->
    						<div class="user-panel">
    							<div class="pull-left image">
    								<img src="<?php echo base_url() ?>assets/admin/dist/img/user.jpg" class="img-circle" alt="User Image">
    							</div>
    							<div class="pull-left info">
    								<p><?php echo $this->session->userdata('user_admin')["username"] ?></p>
    								<!-- Status -->
    								<a href="#">
    									<i class="fa fa-circle text-success"></i> Online</a>
    								</div>
    							</div>

    							<!-- Sidebar Menu -->
    							<ul class="sidebar-menu" data-widget="tree">
    								<li class="header">Utama</li>
    								<li class="<?php echo ($nav == 'dashboard' ? 'active' : '') ?>">
    									<a href="<?php echo base_url() ?>admin/dashboard">
    										<i class="fa fa-dashboard"></i>
    										<span>Dashboard</span>
    									</a>
    								</li>
    								<li class="header">Menu</li>
    								<li class="<?php echo ($nav == 'reservation' ? 'active' : '') ?>">
    									<a href="<?php echo base_url() ?>admin/reservation">
    										<i class="fa fa-link"></i>
    										<span>Reservasi</span>
    									</a>
    								</li>
    								<li class="<?php echo ($nav == 'customer' ? 'active' : '') ?>">
    									<a href="<?php echo base_url() ?>admin/customer">
    										<i class="fa fa-link"></i>
    										<span>Pelanggan</span>
    									</a>
    								</li>
    								<li class="<?php echo ($nav == 'rute' ? 'active' : '') ?>">
    									<a href="<?php echo base_url() ?>admin/rute">
    										<i class="fa fa-link"></i>
    										<span>Rute</span>
    									</a>
    								</li>
    								<li class="<?php echo ($nav == 'transportation' ? 'active' : '') ?>">
    									<a href="<?php echo base_url() ?>admin/transportation">
    										<i class="fa fa-link"></i>
    										<span>Transportasi</span>
    									</a>
    								</li>
    								<li class="<?php echo ($nav == 'user' ? 'active' : '') ?>">
    									<a href="<?php echo base_url() ?>admin/user">
    										<i class="fa fa-link"></i>
    										<span>User</span>
    									</a>
    								</li>
    							</li>

    						</ul>
    						<!-- /.sidebar-menu -->
    					</section>
    					<!-- /.sidebar -->
    				</aside>

    				<!-- Content Wrapper. Contains page content -->
    				<div class="content-wrapper">
    					<!-- Content Header (Page header) -->
