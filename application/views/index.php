<!DOCTYPE html>
<html>
<head>
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

</head>
<body class="body" style="overflow-x: hidden;"> 

<?php $this->load->view('header'); ?>

<!-- <div class="garis">
	<span style="color: white;">-</span>
</div> -->

<div class="garis">
	<span style="color: #ec462e;">-</span>
</div>
<div class="jarakatas jarakbawah">
	<p class="judul"><span class="oren">  TS</span> F A S T </p>
	<div class="container" style="margin-bottom: 80px;">
		<div class="row" >
			<div class="col-lg-6">
				<br><br><br>
				<p class="textisi">TS Fast merupakan web restaurant yang dibuat untuk memudahkan pembeli restaurant memesan makanan</p>

				<button class="btnpesan">pesan makanan</button>
			</div>
			<div class="col-lg-6">
				<center>
					<br>
					<p class="textisi">menyediakan menu untuk</p>

					<div class="kotak textisi cream">
						sarapan (breakfast)	
					</div><br>
					<div class="kotak textisi cream">
						makan siang (lunch)	
					</div><br>
					<div class="kotak textisi cream">
						makan malam (dinner)	
					</div>
				</center>	
			</div>
		</div>
	</div>
		<br>
		<br>
		<br>

		<div class="info">
			<div class="row">
				<div class="col-lg-6 jarakatas jarakiri jarakbawah">
					<span class="infotxt">BUKA
					<br>WEEKDAYS: 15:00 WIB s/d 22:00 WIB
					<br>
					WEEKEND: 16:00 WIB s/d 24:00 WIB</span>
				</div>
				<div class="col-lg-5 jarakatas  jarakbawah">
					<span class="textfooter">
						15 THIRD AVE.<br>
BURLINGTON, MA 01803 <br>
781-221-2100 <br><br> tsfast@gmail.com | info.tsfast@gmail.com
					</span>
				</div>
			</div>
			

		</div>

		<br>
		<br>
		<br>
		<div class="container">
		<p class="judul kanan">M E N <span class="oren">U</span></p>
		<div class="row">
			<div class="col-lg-3">
				<img src="<?php echo base_url() ?>assets/gambar/makanan/baso.jpg" class="gambarmenu" ><span class="textfooter">BAKSO</span>
				<br><br>
				<img src="<?php echo base_url() ?>assets/gambar/makanan/semur.jpg" class="gambarmenu" alt=""><span class="textfooter">SEMUR AYAM</span>
			</div>
			<div class="col-lg-3">
				<img src="<?php echo base_url() ?>assets/gambar/makanan/sate.jpg" class="gambarmenu"><span class="textfooter">SATE</span>
				<br><br>
				<img src="<?php echo base_url() ?>assets/gambar/makanan/martabaktelor.jpg" class="gambarmenu" alt=""><span class="textfooter">MARTABAK TELUR</span>
			</div>
			<div class="col-lg-3">
				<img src="<?php echo base_url() ?>assets/gambar/makanan/rendang.jpg" class="gambarmenu"><span class="textfooter">RENDANG</span>
				<br><br>
				<img src="<?php echo base_url() ?>assets/gambar/makanan/ayambalado.jpg" class="gambarmenu" alt=""><span class="textfooter">AYAM BALADO</span>
			</div>
			<div class="col-lg-3">
				<img src="<?php echo base_url() ?>assets/gambar/makanan/pecelele.jpg" class="gambarmenu" alt=""><span class="textfooter">PECEL LELE</span>
				<br><br>
				<img src="<?php echo base_url() ?>assets/gambar/makanan/ayambetutu.jpg" class="gambarmenu" alt=""><span class="textfooter">AYAM BETUTU</span>
			</div>
		</div>
	</div>	
</div>
<?php $this->load->view('footer'); ?>
</body>
</html>
