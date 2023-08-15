<!DOCTYPE html>
<html>
<head>
  <title>Data Order</title>
  <link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/materialize.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/style_table.css' ?>">
  <script src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
  <script src="<?php echo base_url(). 'assets/js/materialize.min.js' ?>"></script>
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
</head>
<body>
  <?php $this->load->view('admin/sidebar_admin'); ?>
  <h1 style="margin-top: 100px; text-align: center">DATA ORDER</h1>
  <div class="btn-btn"><a href="<?php echo site_url(). 'admin/tambahDataOrder' ?>" class="btn-tambah"><i class="fa fa-user-plus" style="color: black;"><span style="color: black; font-family: 'Varela Round'">TAMBAH ORDER</span></i></a>
  </div>
  <div class="container">

    <table class="fixed-th1">
      <thead>
        <tr>
         <th>ID Order</th>
         <th>Nama User</th>
         <th>Tgl Order</th>
         <th>Status Order</th>
         <th>Aksi</th>
       </tr>
     </thead>
     <tbody>
      <?php foreach ($tampilOrder as $value): ?>
       <tr>
        <td><?php echo $value->id_order ?></td>
        <td><?php echo $value->nama_user ?></td>
        <td><?php echo $value->tanggal_order ?></td>
        <td><?php echo $value->status_order ?></td>
        <td> 
         <div class="tooltip">  
          <a href="<?php echo base_url(). 'admin/detailDataOrder/' ?><?php echo $value->id_order ?>"><i class="fa fa-eye"></i><span class="tooltiptext">Lihat</span></a></div> |
          <div class="tooltip"><a href="<?php echo base_url(). 'admin/editDataOrder/' ?><?php echo $value->id_order ?>"><i class="icon-pencil"></i><span class="tooltiptext">Edit</span></a></div> |
          <div class="tooltip"><a href="#delete1/<?php echo $value->id_order ?>" ><i class="fa fa-trash"></i><span class="tooltiptext">Hapus</span></a></div> 
              <div id="delete1/<?php echo $value->id_order ?>" class="modal">
                <div class="modal-content">
                  <h4>Apakah Anda yakin ingin menghapusnya?</h4>
                  <p></p>
                </div>
            <div class="modal-footer">
              <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Tidak</a>
              <a href="<?php echo base_url(). 'admin/hapusDataOrder/' ?><?php echo $value->id_order ?>" class="modal-action modal-close waves-effect waves-green btn-flat ">Ya</a>
            </div>
          </div>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>
<br/>
</div>
</body>
</html>
</script>
<script>
  $(document).ready(function(){
   $('.modal').modal();
 });
</script>