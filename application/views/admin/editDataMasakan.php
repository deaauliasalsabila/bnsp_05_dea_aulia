<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_tambahData.css">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
	<?php foreach ($tampilEditMasakan as $value): ?>
			
		<form action="<?php echo base_url(). 'admin/proses_editDataMasakan/' ?><?php echo $value->id_masakan ?>" method="post" enctype="multipart/form-data"> 
			<div class="back">
				<a href="<?php echo base_url('admin/v_all_dataMasakan'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
			</div>
			<div class="login-box">
				<h1 class="h1-color";">EDIT DATA MASAKAN</h1>
				<div class="col-25">
					<label><b>Nama Masakan</label>
					</div>
					<div class="col-75">
						<div class="textbox">
							<input type="text" placeholder="Nama Masakan" name="nama_masakan" value="<?php echo $value->nama_masakan ?>">
						</div>
					</div>
					<div class="col-25">		
						<label><b>Harga</b></label>
					</div>
					<div class="col-75">
						<div class="textbox">
							<input type="number" placeholder="Harga" name="harga" value="<?php echo $value->harga ?>">
						</div>
					</div>
					<div class="col-25">
						<label><b>Status Masakan</b></label>
					</div>
					<div class="col-75">
						<div class="textbox">
							<input type="radio"  name="status_masakan" value="Ada"<?php if(!empty('status_masakan') && $value->status_masakan == "Ada") echo 'checked';?>/>Ada
							<input type="radio"  name="status_masakan" value="Habis"<?php if(!empty('status_masakan') && $value->status_masakan == "Habis") echo 'checked';?> />Habis
						</div>
					</div>
					<?php 
					if ($value->foto == '') {?>
								<label>Belum ada gambar</label>
					<?php }else{ ?>
					<div class="col-75" style="margin-right: 20px;">
						<label style="margin-right: 100px"><b>Foto</b></label>
						<img src="<?php echo base_url('gambar/'.$value->foto) ?>" style="width:200px;" alt="">
					</div>
					<?php } ?>
					<div class="col-75" style="margin-right: 20px;">
						<label style="margin-right: 100px"><b>Ubah Foto</b></label>
						<input type="file" name="foto">
					</div>
					

					<input class="btn" type="submit" name="edit" value="edit">
				</div>
			</form>
		<?php endforeach ?>

	</body>
	</html>