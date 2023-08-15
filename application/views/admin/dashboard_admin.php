<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/dashboard.css' ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
	
</head>
<body>
	<?php $this->load->view('admin/sidebar_admin') ?>
	<main class="s-layout-content">
		<h1 >DASHBOARD</h1>
	</main>
	<div class="row">
		<div class="kotak-abu">
			<div class="p-tittle"><i class="icon-food"></i>&nbsp;Data Order</div>
			<hr>
			<?php foreach ($count_order as $value): ?>
			<a href="#" class="dashboard"><p> <?php echo $value->total_order ?></p></a>
			<?php endforeach ?>
		</div>
		<div class="kotak-abu2">
			<div class="p-tittle"><i class="fa fa-users"></i>&nbsp;Data User</div>
			<hr>
			<?php foreach ($count_user as $value): ?>
			<a href="#" class="dashboard"><p> <?php echo $value->total_user ?></p></a>
		<?php endforeach ?>
		</div>
		<div class="kotak-abu3">
			<div class="p-tittle"><i class="icon-file-alt"></i>&nbsp;Data Transaksi</div>
			<hr>
			<?php foreach ($count_transaksi as $value): ?>
			<a href="#" class="dashboard"><p>  <?php echo $value->total_transaksi ?></p></a>
		<?php endforeach ?>
		</div>
	</div>
</div>
</body>
</html>