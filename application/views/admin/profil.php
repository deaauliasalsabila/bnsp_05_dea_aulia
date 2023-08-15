<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_profil.css">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
	<script	src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
	<script	src="<?php echo base_url(). 'assets/js/jquery.validate.min.js' ?>"></script>

</head>
<body>
		<?php $this->load->view('admin/sidebar_admin'); ?>
		<?php foreach ($profil as $value): ?>
		<form action="<?php echo base_url(). 'admin/proses_editProfil/' ?><?php echo $value->id_user ?>" method="post" accept-charset="utf-8" id="form">
		<div class="login-box">
			<h1 class="h1-color";">PROFIL</h1>
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
					<label><b>Nama User</b></label>
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
		</form>
		<?php endforeach ?>
</body>
</html>
<script type="text/javascript">
		$().ready(function() {
			$("#form").validate({
				rules : {
					password : {
						required : true,
						minlength : 5
					},
					nama_user : {
						required : true,
						maxlength : 50,
						minlength : 5
					}
				},
				messages: {
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