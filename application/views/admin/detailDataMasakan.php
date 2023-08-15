<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_tambahData.css">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
	<form action="" method="post">
		<div class="back" style="margin-top: 130px;">
			<a href="<?php echo base_url('admin/v_all_dataMasakan'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
		</div>
		<div class="login-box1">
			<h1 class="h1-color";">DETAIL DATA MASAKAN</h1>
			<div class="col-25">
				<label><b>Nama Masakan</label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Nama Masakan" name="nama_masakan" value="">
					</div>
				</div>
				<div class="col-25">		
					<label><b>Harga</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="number" placeholder="Harga" name="password" value="">
					</div>
				</div>
				<div class="col-25">
					<label><b>Status Masakan</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Status Masakan" name="status_masakan" value="">
					</div>
				</div>

				<div class="col-25">
					<label><b>Foto</b></label>
				</div>
				<div class="col-75">
					<img src="<?php echo base_url(). 'assets/gambar/makanan/ayambalado.jpg' ?>" style="width: 100px">
				</div>
			</div>
		</form>

	</body>
	</html>