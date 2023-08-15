<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_tambahData.css">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
	<script	src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
	<script	src="<?php echo base_url(). 'assets/js/jquery.validate.min.js' ?>"></script>

</head>
<body>
	<form action="<?php echo base_url(). 'kasir/proses_tambahPelanggan' ?>" method="post" id="form">
		<div class="back">
			<a href="<?php echo base_url('kasir/v_all_dataPelanggan'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
		</div>
		<div class="login-box">
			<h1 class="h1-color";">TAMBAH DATA PELANGGAN</h1>
			<div class="col-25">
				<label><b>ID User</label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="ID User" name="id_user" value="<?php echo $kode ?>" readonly="">
					</div>
				</div>
			<div class="col-25">
				<label><b>Username</label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Username" name="username" value="">
					</div>
				</div>
				<div class="col-25">		
					<label><b>Password</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="password" placeholder="Kata Sandi" name="password" value="">
					</div>
				</div>
				<div class="col-25">
					<label><b>Nama</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="text" placeholder="Nama" name="nama_user" value="">
					</div>
				</div>

				<div class="col-75">
					<div class="select-option select">
						<input type="hidden" placeholder="Nama Level" name="id_level" readonly="">
					</div>
				</div>

				<input class="btn" type="submit" name="tambah" value="Tambah">
			</div>
		</form>

	</body>
	</html>
	<script type="text/javascript">
			$().ready(function() {
				$("#form").validate({
					rules : {
						username : {
							required : true,
							maxlength : 20,
							minlength : 5
						},
						password : {
							required : true,
							maxlength : 12,
							minlength : 5
						},
						nama_user : {
							required : true,
							maxlength : 50,
							minlength : 5
						}
					},
					messages: {
						username: {
							required: "Masukkan Username Anda!",
							maxlength: "Panjang username maximal adalah 20",
							minlength: "Panjang username minimal adalah 5"
						},
						password: {
							required: "Masukkan Password Anda!",
							maxlength: "Panjang Password maximal adalah 12",
							minlength: "Panjang Password minimal adalah 5"
						},
						nama_user: {
							required: "Masukkan Nama Anda!",
							maxlength: "Panjang Nama maximal adalah 50",
							minlength: "Panjang Nama minimal adalah 5"
						}
					},
					submitHandler: function(form) {
						form.submit();
					}
				});
			});

		</script>