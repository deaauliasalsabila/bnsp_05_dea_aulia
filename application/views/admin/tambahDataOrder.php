<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_tambahDataOrder.css">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/style_table.css' ?>">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
	<script src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/materialize.min.css' ?>">
	<script src="<?php echo base_url(). 'assets/js/materialize.min.js' ?>"></script>
</head>
<body>


	<div class="back">
		<a href="<?php echo base_url('admin/v_all_dataOrder'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
	</div>
	<div class="login-box1">
		<h1 class="h1-atas";">TAMBAH DATA ORDER</h1>
	</div>
	<div class="container">
		<div class="wrapper">
			<table class="fixed-th">
				<thead>
					<tr>
						<th>Nama Masakan</th>
						<th>Harga</th>
						<th>Status Masakan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($getMasakan as $value): ?>
						<tr>
							<td><?php echo $value->nama_masakan ?></td>
							<td><?php echo $value->harga ?></td>
							<td><?php echo $value->status_masakan ?></td>
							<td> 
								<a href="<?php echo base_url('admin/tambahPesanan/'.$value->id_masakan); ?>" style="padding: 2% 4%;background-color: #3366ff;color: #fff;border-radius: 2px;font-size: 15px;">Tambah Pesanan</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<br/>
		</div>
	</div>
</div>

</body>
</html> 