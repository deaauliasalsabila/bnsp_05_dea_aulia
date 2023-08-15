<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/style_tambahData.css' ?>">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(). 'assets/gambar/logo.png' ?>">
</head>
<body>
	<?php foreach ($tampilDataUser as $value): ?>
	<form action="" method="post">
		<div class="back">
			<a href="<?php echo base_url('admin/v_all_dataUser'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
		</div>
		<div class="login-box" style="top: 35%;">
			<h1 class="h1-color";">DETAIL DATA USER</h1>
			<div class="col-25">
				<label><b>Username</label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Username" name="username" value="<?php echo $value->username;?>" readonly>
					</div>
				</div>
				<div class="col-25">
					<label><b>Nama Lengkap</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Nama" name="nama_user" value="<?php echo $value->nama_user; ?>" readonly>
					</div>
				</div>

				<div class="col-25">
					<label>Level</label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Level" name="level" value="<?php echo $value->nama_level; ?>" readonly>
					</div>
				</div>
			</form>
		<?php endforeach ?>
		</body>
		</html>