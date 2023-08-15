<!DOCTYPE html>
<html>
<head>
  <title>Data User</title>
  <link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/materialize.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/style_table.css' ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
  <?php $this->load->view('kasir/sidebar_kasir'); ?>
  <h1 style="margin-top: 100px; text-align: center">DATA PELANGGAN</h1>
  <div class="btn-btn"><a href="<?php echo site_url(). 'kasir/tambahDataPelanggan' ?>" class="btn-tambah"><i class="fa fa-user-plus" style="color: black;"><span style="color: black; font-family: 'Varela Round' ">TAMBAH PELANGGAN</span></i></a>
  </div>
  <div class="container">
    <table class="fixed-th-pelanggan">
      <thead>
       <tr>
         <th>Username</th>
         <th>Nama User</th>
         <th>Level</th>
         <th>Aksi</th>
       </tr>
     </thead>
     <tbody>
        <?php foreach ($dataPelanggan as $value): ?>
       <tr>
         <td><?php echo $value->username; ?></td>
         <td><?php echo $value->nama_user; ?></td>
         <td><?php echo $value->nama_level; ?></td>
         <td> 
          <div class="tooltip"> 
            <a href="<?php echo base_url(). 'kasir/detailDataPelanggan/' ?><?php echo $value->id_user ?>"><i class="fa fa-eye"></i><span class="tooltiptext">Lihat</span></a></div>
          </td>
        <?php endforeach ?>
        </tr>
          </tbody>
        </table>
        <br/>
      </div>
    </body>
    </html>