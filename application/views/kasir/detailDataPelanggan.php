<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/style_tambahData.css' ?>">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(). 'assets/gambar/logo.png' ?>">
</head>
<body>
	<form action="" method="post">
		<div class="back">
			<a href="<?php echo base_url('kasir/v_all_dataPelanggan'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
		</div>
		<div class="login-box" style="top: 35%;">
			<h1 class="h1-color";">DETAIL DATA PELANGGAN</h1>
			<?php foreach ($tampilDataPelanggan as $value): ?>
			<div class="col-25">
				<label><b>Username</label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Username" name="username" value="<?php echo $value->username ?>" readonly>
					</div>
				</div>
				<div class="col-25">		
					<label><b>Password</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="password" placeholder="Kata Sandi" name="password" value="<?php echo $value->password ?>" readonly>
					</div>
				</div>
				<div class="col-25">
					<label><b>Nama Lengkap</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Nama" name="nama_user" value="<?php echo $value->nama_user ?>" readonly>
					</div>
				</div>

				<div class="col-25">
					<label>Level</label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" name="level" value="<?php echo $value->nama_level ?>" placeholder="Level" readonly>
					</div>
				</div>
			<?php endforeach ?>
			</form>

		</body>
		</html>