<!DOCTYPE html>
<html>
<head>
	<title>m e n u</title>
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
<body>

<?php $this->load->view('header'); ?>
<div class="garis bputih bayangan">
  <span style="color: white;">-</span>
</div>


<div class="container-fluid jarakbawah jarakatas">
	
<div class="judul tkiri">
<center><span class="oren"> M E N</span> U</center>
	</div>
<!-- <div class="jaraktabel"> -->
<div class="kotak">
<div style="overflow-x:auto;"> 
  <table>
    <tr class="teer">
      <th>Foto</th>
      <th>Nama Masakan</th>
      <th>Harga</th>
      <th><?php echo ""; ?></th>
    </tr>
    <?php foreach ($masakan as $value): ?>
      
    <tr>
      <td><img src="<?php echo base_url('gambar/'.$value->foto) ?>" style="width: 100px;"></td>
      <td><?php echo $value->nama_masakan ?></td>
      <td><?php echo $value->harga ?></td>
      <td><?php echo ""; ?></td>
      </tr>
   <?php endforeach ?>
  </table>
</div>
</div>
<!-- </div> -->	
</div>
</div>
<?php $this->load->view('footer'); ?>
</body>
</html>