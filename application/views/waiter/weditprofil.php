<!DOCTYPE html>
<html>
<head>
	<title>Edit Profil</title>
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style_sidebar.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/dashboard.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

	<!-- panggil bootstrap js -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
<!-- action="<?php echo base_url(); ?>index.php/waiter/prosesedit/<?php echo $value->id_user ?>"
</head> -->
<body>
<?php $this->load->view('waiter/wsidebar') ?>


	
<div class="kotak">

		<center><h1><b>EDIT PROFIL</b></h1>
			<div id="editambahdashboard">
				<?php foreach ($ambil as $value){ ?>
				<form method="post" action="<?php echo base_url(); ?>index.php/waiter/prosesedit/<?php echo $value->id_user ?>" >
				<table>

					<tr><td colspan="3"><?php echo validation_errors(); ?></td></tr>
<tr>
	
	<td><b class="lform">Username</b></td>
	<td>:</td>
	<td><input type="text" name="username" value="<?php echo $value->username ?>"></td>
</tr>
<tr>
	<td><b class="lform">Password</b></td>
	<td>:</td>
	<td><input type="password" name="password" value="<?php echo $value->password?>"></td>

</tr>
<tr>
	<td><b class="lform">Nama</b></td>
	<td>:</td>
	<td><input type="text" name="nama_user" value="<?php echo $value->nama_user ?>"></td>

</tr>

</table>
</center>
</div>
<div id="crud"><br><input type="submit" name="tambah" value="Edit Profil"></div>

</form>
<?php } ?>
</div>
</body>
</html>