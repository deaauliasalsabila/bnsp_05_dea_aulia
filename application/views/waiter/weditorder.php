<!DOCTYPE html>
<html>
<head>
	<title>Edit Order</title>
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style_sidebar.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/dashboard.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

	<!-- panggil bootstrap js -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
<?php $this->load->view('waiter/wsidebar') ?>
<?php foreach ($ambil as $value) {?>
<?php } ?>
<form method="post" action="<?php echo base_url().'index.php/waiter/proseseditorder/' ?><?php echo $value->id_user ?>">
<div class="kotak">

		<center><h1><b>EDIT ORDER</b></h1>
			<div id="editambahdashboard">
				<table>

<tr>
	<td><b class="lform">No. Meja</b></td>
	<td>:</td>
	<td><input type="text" value="<?php echo $value->no_meja ?>" name="nomeja" readonly></td>
</tr>
<tr>
	<td><b class="lform">Status Order</b></td>
	<td>:</td>
	<td>
	<select class="selectstatus" name="status"><?php echo $value->status_order ?>
		<option>Dipesan</option>
		<option>Diproses</option>
		<option>Selesai</option>
	</select>
	</td>

</tr>
<tr>
	<td><b class="lform">Tanggal</b></td>
	<td>:</td>
	<td><input type="date" value="<?php echo $value->tanggal_order ?>" name="tgl" readonly></td>
</tr>
<?php foreach ($ambil as $key) {?>
<tr>
	<td><b class="lform">Makanan</b></td>
	<td>:</td>
	<td><input type="text" value="<?php echo $key->nama_masakan ?>" name="makanan" readonly></td>
</tr>
<tr>
	<td><div><b class="lform">Keterangan </b> : <br><input type="text" value="<?php echo $key->keterangan ?>" name="ket" readonly></div></td>
	<td><div><b class="lform">Harga </b> : <br><input type="number" value="<?php echo $key->harga ?>" name="harga" readonly></div></td>
	<td><div><b class="lform">kuantiti </b> : <input type="number" value="<?php echo $key->qty ?>" name="qty" readonly></div></td>
</tr>
<?php } ?>
<tr>	
	<td><b class="lform">Total</b></td>
	<td>:</td>
	<td><input type="number" value="<?php echo $value->total_bayar ?>" name="total" readonly></td>
</tr>

</table>

</center>
</div>
<br><br>
<div id="crud"><input type="submit" name=""></div>

</form>

</div>

</body>
</html>