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

	<?php foreach ($user as $value): ?>

		<form action="<?php echo base_url(). 'admin/proses_editDataUser/' ?><?php echo $value->id_user ?>" method="post" id="form">
			<div class="back">
				<a href="<?php echo base_url('admin/v_all_dataUser'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
			</div>
			<div class="login-box">
				<h1 class="h1-color";">EDIT DATA USER</h1>
				<div class="col-25">
					<label><b>Username</label>
					</div>
					<div class="col-75">
						<div class="textbox">
							<input type="text" placeholder="Username" name="username" value="<?php echo $value->username; ?>" readonly>
						</div>
					</div>
					<div class="col-25">		
						<label for="password"><b>Password</b></label>
					</div>
					<div class="col-75">
						<div class="textbox">
							<input type="password" placeholder="Masukkan Password Baru" name="password" value="<?php echo $value->password ?>" id="password">
						</div>
					</div>
					<div class="col-25">
						<label><b>Nama Lengkap</b></label>
					</div>
					<div class="col-75">
						<div class="textbox">
							<input type="text" placeholder="Nama" name="nama_user" value="<?php echo $value->nama_user; ?>">
						</div>
					</div>

					<div class="col-25">
						<label>Level</label>
					</div>
					<div class="col-75">
						<div class="select-option select">
							<select name="id_level">
								<?php foreach ($tampilIdLevel as $key): ?>
									<option <?php if($key->id_level == $value->id_level) { echo 'selected'; } ?> value="<?php echo $key->id_level ?>"><?php echo $key->nama_level ?></option>
								<?php endforeach ?>
							</select>
						</div>
					</div>

					<input class="btn" type="submit" name="edit" value="edit" class="submit">
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
						minlength: "Panjang Nama minimal adalah 8"
					}
				},
				submitHandler: function(form) {
					form.submit();
				}
			});
		});

	</script>