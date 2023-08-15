<!DOCTYPE html>
<html>
<title>TS Fast</title>
	<!-- logo di tab --> <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/logo.png">
	<!-- ------------ -->

	<!-- panggil css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">

	<!-- panggil bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

	<!-- panggil bootstrap js -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<body class="body" style="overflow-x: hidden;">

	<nav class="sticky-top">
		<?php foreach ($this->session->userdata('dataUser') as $row); ?>
		<ul><div class="container">
			<img src="<?php echo base_url() ?>assets/gambar/logo.png" class="logoheader" alt="">
			<li><a class="" href="<?php echo base_url(); ?>index.php/view/logout" title="">LOGOUT</a></li>
			<li><a class="" href="<?php echo site_url(). 'index.php/pelanggan/pprofil/'?><?php echo $row->id_user ?>" title="">PROFIL</a></li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/pelanggan/pesanview" title="">PESANAN</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/pelanggan/priwayatorder/<?php echo $row->id_user ?>"" title="">RIWAYAT PESANAN</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/pelanggan/menu2" title="">MENU</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>index.php/pelanggan/" title="">DASHBOARD</a>
			</li>
		</div></ul>
	</nav>

	<div class="parallaxheader"><br>
		<!-- <span class="judul">pesan<br>makananmu <br>disini!</span> -->
	</div>

	<div class="garis bputih bayangan">
	<span style="color: white;">-</span>
</div>
</body>
</html>