<!DOCTYPE html>
<html>
<head>
	<title>Tambah Order</title>
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

<form method="post" action="">
<div class="kotak">

		<center><h1><b>TAMBAH ORDER</b></h1>
			<div id="editambahdashboard">
				<table>
    <!-- <tr class="teer">
      <th>Foto</th>
      <th>Nama Makanan</th>
      <th>Harga</th>
    </tr>
--><tr>
	<td><b class="lform">No Meja</b></td>
	<td>:</td>
	<td><input type="text" name="username" placeholder="Username Untuk Login"></td>
</tr>
<tr>
	<td><b class="lform">Tanggal</b></td>
	<td>:</td>
	<td><input type="text" name="password" placeholder="Password Untuk Login"></td>

</tr>
<tr>
	<td><b class="lform">Keterangan</b></td>
	<td>:</td>
	<td><input type="text" name="nama" placeholder="Nama Pelanggan"></td>
</tr>
<tr>
	<td><b class="lform">Level</b></td>
	<td>:</td>
	<td><input type="text" name="level" value="Pelanggan" readonly></td>
</tr>
</table>
</center>
</div>
<br><br>
<a href="" class="btneditambah">Tambah Data</a>
</form>
</div>


</body>
</html>