<!DOCTYPE html>
<html>
<head>
  <title>Data Masakan</title>
  <link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/style_table.css' ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
  <script src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/materialize.min.css' ?>">
  <script src="<?php echo base_url(). 'assets/js/materialize.min.js' ?>"></script>
</head>
<body>
  <?php $this->load->view('admin/sidebar_admin'); ?>
  <h1 style="margin-top: 100px; text-align: center">DATA MASAKAN</h1>
  <div class="btn-btn"><a href="<?php echo site_url(). 'admin/tambahDataMasakan' ?>" class="btn-tambah"><i class="fa fa-user-plus" style="color: black;"><span style="color: black; font-family: 'Varela Round'">Tambah Masakan</span></i></a>
  </div>
  <div class="container">

    <table class="fixed-th">
      <thead>
        <tr>
         <th>Nama Masakan</th>
         <th>Foto</th>
         <th>Status Masakan</th>
         <th>Aksi</th>
       </tr>
     </thead>
     <tbody>
      <?php foreach ($tampilMasakan as $value): ?>
       <tr>
         <td><?php echo $value->nama_masakan ?></td>
         <td><img src="<?php echo base_url('gambar/'.$value->foto)?>" style="width:120px;"></td>
         <td><?php echo $value->status_masakan ?></td>
         <td> 
          <div class="tooltip"><a href="<?php echo base_url(). 'admin/editDataMasakan/' ?><?php echo $value->id_masakan ?>"><i class="icon-pencil"></i><span class="tooltiptext">Edit</span></a></div> |
          <div class="tooltip"><a href="#delete1/<?php echo $value->id_masakan ?>" ><i class="fa fa-trash"></i><span class="tooltiptext">Hapus</span></a></div>  
            <div id="delete1/<?php echo $value->id_masakan ?>" class="modal">
                <div class="modal-content">
                  <h4>Apakah Anda yakin ingin menghapusnya?</h4>
                  <p></p>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Tidak</a>
                  <a href="<?php echo base_url(). 'admin/hapusDataMasakan/' ?><?php echo $value->id_masakan ?>" class="modal-action modal-close waves-effect waves-green btn-flat ">Ya</a>
                </div>
              </div>
          </td>
        </tr>
        <tr>
        <?php endforeach ?>
      </tbody>
    </table>
    <br/>
  </div>
</body>
</html>
<script>
  $(document).ready(function(){
   $('.modal').modal();
 });
</script>