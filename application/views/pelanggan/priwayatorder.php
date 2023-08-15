<!DOCTYPE html>
<html>
<head>
	<title>Riwayat Pesanan</title>
	<!-- logo di tab --> <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/logo.png">
	<!-- ------------ -->

	<!-- panggil css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">

	<!-- panggil bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

	<!-- panggil bootstrap js -->
	<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>

	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">


</head>
<body>
	<?php $this->load->view('header2'); ?>
	<div class="container-fluid jarakbawah">
	<div class="judul tkiri" style="font-size: 70px; margin: 4%;">
		<center><span class="oren"> riwayat</span> pesanan</center>
	</div>
	<div class="kotak">
<div style="overflow-x:auto;"> 
  <table>
    
    <tr class="teer">
      <th>ID Order</th>
      <th>No. Meja</th>
      <th>Tanggal</th>
      <th>Status Order</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($riwayat as $value) {?>
    <tr>
      <td><?php echo $value->id_order ?></td>
      <td><?php echo $value->no_meja ?></td>
      <td><?php echo $value->tanggal_order ?></td>
      <td><?php echo $value->status_order ?></td>
      <td><a href="<?php echo site_url(); ?>index.php/pelanggan/pdetailorder/<?php echo $value->id_order ?>">Detail</a></td>
      </tr>
      <?php } ?>
  </table>
</div>
</div>
</div>
<?php $this->load->view('footer'); ?>
</body>
</html>