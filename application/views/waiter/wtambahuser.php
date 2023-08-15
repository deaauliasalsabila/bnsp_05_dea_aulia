<!DOCTYPE html>
<html>
<head>
	<title>Tambah User</title>
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

<form method="post" action="<?php echo base_url(). 'index.php/waiter/tambahuser_aksi'; ?>">
<div class="kotak">

		<center><h1><b>TAMBAH USER</b></h1>
			
			<div id="editambahdashboard">
				

				<table>
    <tr><td colspan="3"><?php echo validation_errors();?></td></tr>
    <tr hidden>
	<td><b class="lform">Id User</b></td>
	<td>:</td>
	<td><input type="text" name="id_user" value="<?php echo $idnya ?>"></td>
	
</tr>
    <tr>
	<td><b class="lform">Username</b></td>
	<td>:</td>
	<td><input type="text" name="username" placeholder="Username Untuk Login" value="<?php echo set_value('username'); ?>"></td>
	
</tr>
<tr>
	<td><b class="lform">Password</b></td>
	<td>:</td>
	<td><input type="password" name="password" placeholder="Password Untuk Login"></td>

</tr>
<tr>
	<td><b class="lform">Nama</b></td>
	<td>:</td>
	<td><input type="text" name="nama" placeholder="Nama Pelanggan"></td>
</tr>
<tr>
	<td><b class="lform">Level</b></td>
	<td>:</td>
	<td><select name="level">
		<option value="5">Pelanggan</option>
	</select></td>

</tr>
</table>
</center>
</div>
<div id="crud"><br><input type="submit" name="tambah" value="Tambah Data"></div>
<!-- <a href="" class="btneditambah">Tambah Data</a> -->
</form>
</div>

</body>
</html>