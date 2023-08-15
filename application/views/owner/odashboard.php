<!DOCTYPE html>
<html>
<head>
	<title>Owner Dashboard</title>
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
<?php $this->load->view('owner/osidebar'); ?>

<center><h1><b>DASHBOARD</b></h1></center>
		<div class="row">
			<div class="col-lg-4">
				<div class="kotak-abu">
				<div class="p-tittle putihtua" style="margin: 10px;"><i class="icon-food"></i>&nbsp;&nbsp;&nbsp;Data Masakan</div>
				<hr><br>
				<?php foreach ($data_masakan as $value): ?>
				<a href="<?php echo site_url(). 'index.php/owner/olistmasakan' ?>" class="dashboard"><p class="judulkotak"> <?php echo $value->data_masakan; ?> <span class="minitxt">data</span></p></a>
			<?php endforeach ?>
			</div>
							
			</div>
			<div class="col-lg-4">
				<div class="kotak-abu">
				<div class="p-tittle putihtua"><i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;Data Transaksi</div>
				<hr><br>
				<?php foreach ($data_transaksi as $value): ?>
				<a href="<?php echo site_url(). 'index.php/owner/olistransaksi' ?>" class="dashboard"><p class="judulkotak"> <?php echo $value->data_transaksi; ?> <span class="minitxt">data</span></p></a>
				<?php endforeach ?>
			</div>

			</div>
			<div class="col-lg-4">
				<div class="kotak-abu">
				<div class="p-tittle putihtua"><i class="icon-file-alt"></i>&nbsp;&nbsp;&nbsp;Laporan</div>
				<hr><br>
				<a href="<?php echo site_url(). 'index.php/owner/olaporan' ?>" class="dashboard"><p class="judulkotak"><span class="minitxt">klik untuk tombol cepat!</span></p></a>
			</div>
			</div>
		</div>
	</div>
</body>
</html>