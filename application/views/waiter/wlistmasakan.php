<!DOCTYPE html>
<html>
<head>
	<title>List Masakan</title>
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

<center><h1><b>Data Masakan</b></h1></center>
<div class="kotak jarakatas">
<div id="listdashboard">
<div style="overflow:auto; width: 100%; height: 450px; overflow-x: auto;"> 
  <table>
    <tr class="teer">
      <th>Foto</th>
      <th>Nama Masakan</th>
      <th>Harga</th>
      <th>Status</th>
    </tr>
    <?php foreach ($masakan as $value): ?>
      
    <tr>
      <td><img src="<?php echo base_url('gambar/'.$value->foto) ?>" style="width: 100px;"></td>
      <td><?php echo $value->nama_masakan ?></td>
      <td><?php echo $value->harga ?></td>
       <td><?php echo $value->status_masakan ?></td>
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