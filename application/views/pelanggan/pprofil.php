<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<!-- logo di tab --> <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/logo.png">
	<!-- ------------ -->

	<!-- panggil css -->
	<!-- panggil bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">

	<!-- panggil bootstrap js -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">



</head>
<body>
	<?php $this->load->view('header2'); ?>
	<br>
	<br>
	<div class="container">
<div class="kotak">

		<center><h1><b>PROFIL</b></h1>
			<div id="read">
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
<a href="<?php echo site_url()?>index.php/pelanggan/peditprofil/<?php echo $value->id_user ?>" class="btnedit">Edit Profil</a>
</div>
<div class="space-footer">
	
</div>
</div>
<?php $this->load->view('footer'); ?>
</body>
</html>