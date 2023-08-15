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
	<form action="<?php echo base_url(). 'admin/proses_tambahMasakan' ?>" method="post" enctype="multipart/form-data" id="form">
		<div class="back">
			<a href="<?php echo base_url('admin/v_all_dataMasakan'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
		</div>
		<p><?php echo $this->session->flashdata('msg') ?></p>
		<div class="login-box">
			<h1 class="h1-color";">TAMBAH DATA MASAKAN</h1>
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
						<input type="number" placeholder="Harga" name="harga" value="">
					</div>
				</div>
				<div class="col-25">
					<label><b>Status Masakan</b></label>
				</div>
				<div class="col-75">
					<div class="textbox">
						<input type="radio"  name="status_masakan" value="Ada"<?php if(!empty('status_masakan') && 'status_masakan' == "Ada") echo 'checked';?>/>Ada
						<input type="radio"  name="status_masakan" value="Habis"<?php if(!empty('status_masakan') && 'status_masakan' == "Habis") echo 'checked';?> />Habis		
					</div>
				</div>
				<div class="col-75" style="margin-right: 20px;">
					<label style="margin-right: 100px"><b>Foto</b></label>
						<input type="file" name="foto" />
				</div>
				<input class="btn" type="submit" value="Tambah">
			</div>
		</form>

	</body>
	</html>
	<script type="text/javascript">
			$().ready(function() {
				$("#form").validate({
					rules : {
						nama_masakan : {
							required : true,
							maxlength : 50,
							minlength : 5
						},
						harga : {
							required : true
						},
						status_masakan : {
							required : true
						}
					},
					messages : {
						nama_masakan: {
							required: "Masukkan Nama Masakan Anda!",
							maxlength: "Panjang nama masakan maximal adalah 50",
							minlength: "Panjang nama masakan minimal adalah 5"
						},
						harga: {
							required: "Masukkan Harga!"
						},
						status_masakan: {
							required: "Masukkan Status Masakan Anda!"
						}
					},
					submitHandler: function(form) {
						form.submit();
					}
				});
			});

		</script>