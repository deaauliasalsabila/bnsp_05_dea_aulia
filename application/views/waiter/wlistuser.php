<!DOCTYPE html>
<html>
<head>
	<title>Data User - Pelanggan</title>
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

<center><h1><b>Data User</b></h1></center>
<a href="<?php echo site_url(). 'index.php/waiter/wtambahuser' ?>" class="btneditambah">Tambah Data User</a>
<div class="kotak jarakatas">
<div id="listdashboard">
<div style="overflow:auto; width: 100%; height: 370px; overflow-x: auto;"> 
  <table>
    <tr class="teer">
      <th>Nama</th>
      <th>Username</th>
      <th>Level</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($user as $isi) {?>
    <tr>
      <td><?php echo $isi->nama_user ?></td>
      <td><?php echo $isi->username ?></td>
      <td><?php echo $isi->nama_level ?></td>
      <td><a href="<?php echo site_url(). 'index.php/waiter/wreaduser/' ?><?php echo $isi->id_user ?>">Lihat</a></td>
      </tr>
    <?php } ?>
  </table>
</div>
</div>
</center>
</div>
</div>
</body>
</html>