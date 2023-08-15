<!DOCTYPE html>
<html>
<head>
	<title>Detail Transaksi</title>
</head>
<body>
<?php $this->load->view('owner/osidebar') ?>
<div class="kotak">

		<center><h1><b>Detail Transaksi</b></h1>
			<div id="readashboard">
				<table>
<?php foreach ($detail as $value) {?>
<tr>
	<td><b class="lform">ID Transaksi</b></td>
	<td>:</td>
	<td><span><?php echo $value->id_transaksi ?></span></td>
</tr>
<tr>
	<td><b class="lform">Tanggal</b></td>
	<td>:</td>
	<td><span><?php echo $value->tanggal_order ?></span></td>
</tr>
<tr>
	<td><b class="lform">Nama</b></td>
	<td>:</td>
	<td><span><?php echo $value->nama_user ?></span></td>
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
<?php } ?>
</div>
</center>
</div>
<br><br>
<a href="<?php echo site_url(); ?>index.php/owner/olistransaksi" class="btneditambah">Kembali</a>
</div>
</body>
</html>