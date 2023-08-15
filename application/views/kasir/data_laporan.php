<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/laporan.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/materialize.min.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/style_table_laporan.css' ?>" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/style/css/print.css' ?>" media="print">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
	<script src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
	<script src="<?php echo base_url(). 'assets/js/jquery.PrintArea.js' ?>"></script>

</head>
<body>
	<?php $this->load->view('kasir/sidebar_kasir'); ?>
		<h1 class="h1-color";">LAPORAN</h1>
	<p class="filter">Filter</p>
	<div class="login-box" style="margin-top: 40px;">
		<span><b>Periode</b></span>
		<span class="tgl"><b>Tanggal</b></span>
		<input type="date" name="tanggal">
		<span><b>s/d</b></span>	
		<span class="tgl"><b>Tanggal</b></span>
		<input type="date" name="tanggal">
		<b><input type="submit" name="cari" value="Cari">
			<input type="submit" name="cetak" value="Cetak" id="cetak"></b>
		</div>
		<p class="hasil">Hasil</p>
			
		<div class="container">

		<div id="data-laporan">
			<!-- tampilkan ketika dalam mode print -->
        <div class="title">
            <center>
                DAFTAR LAPORAN<br/>
                TRANSAKSI<br/>
                BERDASARKAN PERIODE
   			<br/>
            </center>
        </div>
			<table class="fixed-th-user">
				<thead>
					<tr>
						<th>Tgl Transaksi</th>
						<th>Nama User</th>
						<th>ID Transaksi</th>
						<th>Total Bayar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($laporan as $value): ?>
					<tr>
						<td><?php echo $value->tanggal_transaksi; ?></td>
						<td><?php echo $value->nama_user; ?></td>
						<td><?php echo $value->id_transaksi; ?></td>
						<td><?php echo $value->total_bayar; ?></td>
					</tr>
				<?php endforeach ?>
				</tbody>
			</table>
			<br/>
		</div>
		</div>
	</body>
	</html>
	<script>
        (function($) {
            // fungsi dijalankan setelah seluruh dokumen ditampilkan
            $(document).ready(function(e) {
                 
                // aksi ketika tombol cetak ditekan
                $("#cetak").bind("click", function(event) {
                    // cetak data pada area <div id="#data-mahasiswa"></div>
                    $('#data-laporan').printArea();
                });
            });
        }) (jQuery);
    </script>