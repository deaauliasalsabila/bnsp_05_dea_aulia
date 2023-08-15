<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Waiter</title>
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style_sidebar.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/dashboard.css' ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
		<?php foreach ($this->session->userdata('dataUser') as $row); ?>		
		<div class="sidebar-layout">
			<!-- sidebar -->
			<div class="s-layout-sidebar">
				<a class="s-sidebar-trigger" href="#">
					<i class="fa fa-bars"></i>
					<i class="fa fa-user" style="float: right; margin-right: 30px;"><span class="span-user">Waiter</span></i>
					
				</a>
				<nav class="s-sidebar-nav" style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
					<ul>
						<li><a class="s-sidebar-nav-link" href="<?php echo site_url(). 'index.php/waiter' ?>"><i class="fa fa-home"></i><em>Dashboard</em></a></li>
						<li><a class="s-sidebar-nav-link" href="<?php echo site_url(). 'index.php/waiter/wprofil/'?><?php echo $row->id_user ?>"><i class="fa fa-user"></i><em>Profil</em></a></li>
						<li><a class="s-sidebar-nav-link" href="<?php echo site_url(). 'index.php/waiter/wlistmasakan' ?>"><i class="icon-food"></i><em>Data Masakan</em></a></li>
						<li><a class="s-sidebar-nav-link" href="<?php echo site_url(). 'index.php/waiter/wlistuser' ?>"><i class="fa fa-users"></i><em>Data User</em></a></li>
						<li><a class="s-sidebar-nav-link" href="<?php echo site_url(). 'index.php/waiter/wlistorder' ?>"><i class="icon-shopping-cart"></i><em>Order</em></a></li>
						<li><a class="s-sidebar-nav-link" href="<?php echo site_url(). 'index.php/waiter/wlaporan' ?>"><i class="icon-file-alt"></i><em>Laporan</em></a></li>
						<li><a class="s-sidebar-nav-link" href="<?php echo site_url(); ?>index.php/view/logout"><i class="icon-power-off"></i><em>Logout</em></a></li>
						<img src="<?php echo base_url(). 'assets/gambar/logo.png' ?>" class="logo">
					</ul>
				</nav>
		
			</div>
		</div>
		<div style="margin-left:18%; margin-top: 8%; padding:1px 16px;height:auto; margin-bottom: 4%;">
		<!-- <div style="margin-left:18%; margin-top: 8%; padding:1px 16px;height:auto;"> -->
	</body>
	</html>