<!DOCTYPE html>
<html>
<head>
	<title>Detail Pesan</title>
	<!-- logo di tab --> <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/logo.png">
	<!-- ------------ -->

	<!-- panggil css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">

	<!-- panggil bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

	<!-- panggil bootstrap js -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">

</head>
<body>
	<?php $this->load->view('header2'); ?>

	<div class="container jarakbawah">
		<div class="judul tkiri" style="font-size: 70px; margin: 4%;">
			<center><span class="oren"> detail</span> pesanan</center>
		</div>
			<div class="kotak">
					<div id="readpesan">
						
						
<table>
<?php foreach ($detail as $value) {?>	
<?php } ?>
<tr>
	<td><b class="lform">No. Meja</b></td>
	<td>:</td>
	<td><span><?php echo $value->no_meja ?></span></td>
</tr>
<tr>
	<td><b class="lform">Status Order</b></td>
	<td>:</td>
	<td><span><?php echo $value->status_order ?></span></td>
</tr>
<tr>
	<td><b class="lform">Nama</b></td>
	<td>:</td>
	<td><span><?php echo $value->nama_user ?></span></td>
</tr>
<tr>
	<td><b class="lform">Tanggal</b></td>
	<td>:</td>
	<td><span><?php echo $value->tanggal_order ?></span></td>

</tr>
<?php foreach ($detail as $value) {?>
<tr>
	<td><b class="lform">Makanan</b></td>
	<td>:</td>
	<td><span><?php echo $value->nama_masakan ?></span></td>

</tr>
<div>
<tr>
	<td><b class="lform">Keterangan </b>&nbsp;&nbsp; : &nbsp;&nbsp;<span> <?php echo $value->keterangan ?></span></td>
	<td><b class="lform">Harga </b>&nbsp;&nbsp; : &nbsp;&nbsp;<span><?php echo $value->harga ?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b class="lform"></td>
	<td><b class="lform">qty </b>&nbsp;&nbsp; : &nbsp;&nbsp;<span><?php echo $value->qty ?></span></td>
</tr>
<?php } ?>
<tr>
	<td><b class="lform">Total</b></td>
	<td>:</td>
	<td><span><?php echo $value->total_bayar ?></span></td>
</tr>

</table>

							
</div></div>
</div>
</div>
</div>
</div>
		<?php $this->load->view('footer'); ?>
	</body>
	</html>