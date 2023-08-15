<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Waiter</title>
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style_sidebar.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/dashboard.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

	<!-- panggil bootstrap js -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
	<?php $this->load->view('waiter/wsidebar') ?>
	<!-- <main class="s-layout-content"> -->
			
		<center><h1><b>DASHBOARD</b></h1></center>
		<div class="row">
			<div class="col-lg-4">
				<div class="kotak-abu">
				<div class="p-tittle putihtua" style="margin: 10px;"><i class="icon-food"></i>&nbsp;&nbsp;&nbsp;Data Masakan</div>
				<hr><br>
				<?php foreach ($data_masakan as $value): ?>					
					<a href="<?php echo site_url(). 'index.php/waiter/wlistmasakan' ?>" class="dashboard"><p class="judulkotak"><?php echo $value->data_masakan ?> <span class="minitxt">data</span></p></a>
				<?php endforeach ?>
			</div>
			<div class="kotak-abu">
				<div class="p-tittle putihtua" style="margin: 10px;"><i class="icon-shopping-cart"></i>&nbsp;&nbsp;&nbsp;Data Order</div>
				<hr><br>
				<?php foreach ($data_order as $isi): ?>
				<a href="<?php echo site_url(). 'index.php/waiter/wlistorder' ?>" class="dashboard"><p class="judulkotak"> <?php echo $isi->data_order; ?> <span class="minitxt">data</span></p></a>
				<?php endforeach ?>
			</div>
			</div>
			<div class="col-lg-4">
				<div class="kotak-abu">
				<div class="p-tittle putihtua"><i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;Data User</div>
				<hr><br>
				<?php foreach ($data_user as $isi): ?>
				<a href="<?php echo site_url(). 'index.php/waiter/wlistuser' ?>" class="dashboard"><p class="judulkotak"> <?php echo $isi->data_user; ?> <span class="minitxt">data</span></p></a>
				<?php endforeach ?>
			</div>
			</div>
			<div class="col-lg-4">
				<div class="kotak-abu">
				<div class="p-tittle putihtua"><i class="icon-file-alt"></i>&nbsp;&nbsp;&nbsp;Laporan</div>
				<hr><br>
				<a href="<?php echo site_url(). 'index.php/view/wlaporan' ?>" class="dashboard"><p class="judulkotak"> <span class="minitxt">klik untuk tombol cepat!</span></p></a>
			</div>
			</div>
<!-- 			<div class="kotak-abu">
				<div class="p-tittle"><i class="icon-food"></i>&nbsp;Data Order</div>
				<hr>
				<a href="#" class="dashboard"><p> 19</p></a>
			</div>
			<div class="kotak-abu2">
				<div class="p-tittle"><i class="fa fa-users"></i>&nbsp;Data User</div>
				<hr>
				<a href="#" class="dashboard"><p> 19</p></a>
			</div>
			<div class="kotak-abu3">
				<div class="p-tittle"><i class="icon-file-alt"></i>&nbsp;Data Transaksi</div>
				<hr>
				<a href="#" class="dashboard"><p>  19</p></a>
			</div> -->
		</div>
	</div>
</body>
</html>