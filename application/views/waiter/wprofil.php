<!DOCTYPE html>
<html>
<head>
	<title>Profil Waiter</title>
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

		<center><h1><b>PROFIL</b></h1>
			<div id="readashboard">
				<?php foreach ($ambil as $value): ?>
				<table>
    <!-- <tr class="teer">
      <th>Foto</th>
      <th>Nama Makanan</th>
      <th>Harga</th>
    </tr>
--><tr>
	<td><b class="lform">Username</b></td>
	<td>:</td>
	<td><span><?php echo $value->username ?></span></td>
</tr>
<tr>
	<td><b class="lform">Password</b></td>
	<td>:</td>
	<td><span><?php echo $value->password ?></span></td>

</tr>
<tr>
	<td><b class="lform">Nama</b></td>
	<td>:</td>
	<td><span><?php echo $value->nama_user ?></span></td>
</tr>
</table>
<?php endforeach ?>
</center>
</div>
<br><br>
<a href="<?php echo site_url(). 'index.php/waiter/weditprofil/' ?><?php echo $value->id_user ?>" class="btneditambah">Edit Profil</a>
</div>

</body>
</html>	