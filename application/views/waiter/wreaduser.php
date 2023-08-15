<!DOCTYPE html>
<html>
<head>
	<title>Detail User</title>
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
	<!-- <main class="s-layout-content"> -->

<div class="kotak">

		<center><h1><b>Detail User</b></h1>
			<div id="readashboard">
				<table>
	<?php foreach ($detus as $isi) {?>
    <!-- <tr class="teer">
      <th>Foto</th>
      <th>Nama Makanan</th>
      <th>Harga</th>
    </tr>
--><tr>
	<td><b class="lform">Username</b></td>
	<td>:</td>
	<td><span><?php echo $isi->username ?></span></td>
</tr>
<tr hidden>
	<td><b class="lform">Password</b></td>
	<td>:</td>
	<td><span><?php echo $isi->password ?></span></td>

</tr>
<tr>
	<td><b class="lform">Nama</b></td>
	<td>:</td>
	<td><span><?php echo $isi->nama_user ?></span></td>
</tr>
<tr>
	<td><b class="lform">Level</b></td>
	<td>:</td>
	<td><span><?php echo $isi->nama_level ?></span></td>

</tr>
<?php } ?>
</table>
</center>
</div>
<br><br>
<a href="<?php echo site_url(); ?>index.php/waiter/wlistuser" class="btneditambah">Kembali</a>
</div>

</body>
</html>