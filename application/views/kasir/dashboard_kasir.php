<!DOCTYPE html>
<html>
<head>
  <title>TSFast</title>
  <link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/dashboard_kasir.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/style_sidebar_kasir.css' ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
  <?php $this->load->view('kasir/sidebar_kasir') ?>
  <main class="s-layout-content">
    <h1>DASHBOARD</h1>
  </main>
  <div class="row">
    <div class="kotak-abu">
      <div class="p-tittle"><i class="fa fa-users"></i>&nbsp;Data Pelanggan</div>
      <hr>
      <?php foreach ($listPelanggan as $key => $value): ?>
        <a  class="dashboard"><p> <?php echo $value->total_pelanggan ?></p></a>        
      <?php endforeach ?>
    </div>
    <div class="kotak-abu2">
      <div class="p-tittle"><i class="icon-file-alt"></i>&nbsp;Data Transaksi</div>
      <hr>
      <?php foreach ($count_transaksi as $key => $value): ?>
      <a class="dashboard"><p> <?php echo $value->total_transaksi ?></p></a>
        
      <?php endforeach ?>
    </div>
  </div>
</div>
</body>
</html>