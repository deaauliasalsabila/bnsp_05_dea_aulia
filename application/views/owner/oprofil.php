<!DOCTYPE html>
<html>
<head>
	<title>Owner Profil</title>
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
<?php $this->load->view('owner/osidebar') ?>
	<!-- <main class="s-layout-content"> -->

<div class="kotak">

		<center><h1><b>PROFIL</b></h1>
			<div id="readashboard">
				<table>
    <!-- <tr class="teer">
      <th>Foto</th>
      <th>Nama Makanan</th>
      <th>Harga</th>
    </tr>
--><tr>
	<td><b class="lform">Username</b></td>
	<td>:</td>
	<td><span>Smith</span></td>
</tr>
<tr>
	<td><b class="lform">Password</b></td>
	<td>:</td>
	<td><span>Jackson</span></td>

</tr>
<tr>
	<td><b class="lform">Nama</b></td>
	<td>:</td>
	<td><span>Johnson</span></td>
</tr>
</table>
</center>
</div>
<br><br>
<a href="<?php echo site_url(). 'index.php/owner/oeditprofil' ?>" class="btneditambah">Edit Profil</a>
</div>

</body>
</html>