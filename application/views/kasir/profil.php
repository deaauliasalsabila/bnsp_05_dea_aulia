<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_profil.css">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">

</head>
<body>
		<?php $this->load->view('kasir/sidebar_kasir'); ?>
			<?php foreach ($profil as $value): ?>
		<form action="<?php echo base_url(). 'kasir/proses_editProfil/' ?><?php echo $value->id_user ?>" method="post">
			<h1 class="h1-color";">PROFIL</h1>
		<div class="login-box">
			<div class="col-25">
				<label><b>Username</label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Username" name="username" value="<?php echo $value->username ?>">
					</div>
				</div>
				<div class="col-25">		
					<label><b>Password</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="password" placeholder="Masukkan Kata Sandi" name="password" value="">
					</div>
				</div>
				<div class="col-25">
					<label><b>Nama Lengkap</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Nama" name="nama_user" value="<?php echo $value->nama_user ?>">
					</div>
				</div>

				<div class="col-25">
					<label>Level</label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Level" name="id_level" value="<?php echo $value->nama_level ?>" readonly>
					</div>
				</div>

				<input class="btn" type="submit" name="simpan" value="Simpan">
			</div>
		<?php endforeach ?>
		</form>
</body>
</html>