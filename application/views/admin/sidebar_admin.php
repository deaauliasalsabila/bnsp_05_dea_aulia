<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/style_sidebar.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/dashboard.css' ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
	
</head>
<body>
	<?php foreach ($this->session->userdata('dataUser') as $row ); ?>

	<div class="sidebar-layout">
		<!-- sidebar -->
		<div class="s-layout-sidebar">
			<a class="s-sidebar-trigger" href="#">
				<i class="fa fa-bars"></i>
				<i class="fa fa-user" style="float: right; margin-right: 30px;"><span class="span-user">Admin</span></i>

			</a>

			<div class="s-sidebar-nav">
				<ul>
					<li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin' ?>"><i class="fa fa-home"></i><em>Dashboard</em></a></li>
					<li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataUser'?>"><i class="fa fa-users"></i><em>Data User</em></a></li>
					<li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/profil/' ?><?php echo $row->id_user ?>"><i class="fa fa-user"></i><em>Profil</em></a></li>
					<li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataMasakan' ?>"><i class="icon-food"></i><em>Data Masakan</em></a></li>
					<li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataOrder' ?>"><i class="icon-shopping-cart"></i><em>Data Order</em></a></li>
					<li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataTransaksi' ?>"><i class="icon-file-alt"></i><em>Data Transaksi</em></a></li>
					<li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataLaporan' ?>"><i class="icon-folder-open-alt"></i><em>Laporan</em></a></li>
					<li><a class="s-sidebar-nav-link" href="<?php echo base_url() . 'logout' ?>"><i class="icon-power-off"></i><em>Logout</em></a></li>
					<img src="<?php echo base_url(). 'assets/images/logo/logo.png' ?>" class="logo">
				</ul>
			</div>
		</div>
	</div>
</body>