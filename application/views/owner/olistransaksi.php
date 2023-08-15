<!DOCTYPE html>
<html>
<head>
	<title>Data Transaksi</title>
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

<center><h1><b>Data Transaksi</b></h1></center>
<div class="kotak jarakatas">
<div id="listdashboard">
<div style="overflow:auto; width: 100%; height: 450px; overflow-x: auto;"> 
  <table>
    <tr class="teer">
      <th>ID Transaksi</th>
      <th>Tanggal</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($transaksi as $value): ?>
      
    <tr>
      <td><?php echo $value->id_transaksi ?></td>
      <td><?php echo $value->tanggal_transaksi ?></td>
       <td><?php echo $value->total_bayar ?></td>
       <td><a href="<?php echo site_url(). 'index.php/owner/oreadtransaksi/' ?><?php echo $value->id_transaksi ?>">Lihat</td>
      </tr>
   <?php endforeach ?>
  </table>
</div>
</div>
</center>
</div>
</div>
</body>
</html>