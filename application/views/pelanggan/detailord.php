<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
			<div class="kotak">

		<center><h1><b>Detail Order</b></h1>
			<div id="readashboard">
				<table>
    <!-- <tr class="teer">
      <th>Foto</th>
      <th>Nama Makanan</th>
      <th>Harga</th>
    </tr>

-->

<?php foreach ($haha as $value) {?>
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
<?php } ?>
</div>
</center>
</div>
</body>
</html>