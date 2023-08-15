<!DOCTYPE html>
<html>
<head>
	<title>m e n u</title>
</head>
<body>

<?php $this->load->view('waiter/wsidebar'); ?>
<!-- <div class="garis bputih bayangan">
  <span style="color: white;">-</span>
</div> -->


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
      <th>Aksi</th>
    </tr>
    <?php foreach ($masakan as $value): ?>
      
    <tr>
      <td><img src="<?php echo base_url('gambar/'.$value->foto) ?>" style="width: 100px;"></td>
      <td><?php echo $value->nama_masakan ?></td>
      <td><?php echo $value->harga ?></td>
       <td><a href="<?php echo site_url('index.php/waiter/addtocart/'.$value->id_masakan) ?>" title="">Pesan</a></td>
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