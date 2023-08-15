<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_detailTransaksi1.css">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
	<div class="back" style="margin-top: 70px;">
		<a href="<?php echo base_url('admin/v_all_dataOrder'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
	</div>
	<div class="login-box1">
		<h1 class="h1-color";">DETAIL ORDER</h1>
	</div>
	<div class="login-box2">
	<?php foreach ($tampilDataOrder as $value): ?>
	<?php endforeach ?>		
		<form action="" method="post">
			<span style="margin-left: 66px;"><b>ID Order</b></span>
			<input type="text" name="id_order" placeholder="ID Order" readonly="" value="<?php echo $value->id_order ?>">
			<span><b>No. Meja</b></span>
			<input type="text" placeholder="No. Meja" name="no_meja" readonly="" value="<?php echo $value->no_meja; ?>" >
			<span><b>Tanggal</b></span>
			<input type="text" name="tanggal" placeholder="tanggal" readonly="" value="<?php echo $value->tanggal_order ?>">
		</div>
		<div class="container">

			<table class="fixed-th">
				<thead>
					<tr>
						<th>Foto</th>
						<th>Harga</th>
						<th>Banyak Makanan</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($tampilDataOrder as $value): ?>
					<tr>
						<td><img src="<?php echo base_url('gambar/'.$value->foto)?>"  style="width:100px;"></td>
						<td><?php echo $value->harga; ?></td>
						<td><?php echo $value->qty; ?></td>
						<td><?php echo $value->keterangan; ?></td>
						
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<br/>
		</div>
	</form>
</body>
</html>