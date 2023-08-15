<!DOCTYPE html>
<html>
<head>
	<title>TSFast</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_detailTransaksi.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/print.css' ?>" media="print">
	<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
	<script src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
	<script src="<?php echo base_url(). 'assets/js/jquery.PrintArea.js' ?>"></script>
</head>
<body>
	<div class="back" style="margin-top: 70px;">
		<a href="<?php echo base_url('kasir/v_all_dataTransaksi'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
	</div>
	<div class="login-box1">
		<h1 class="h1-color";">EDIT TRANSAKSI</h1>
	</div>
	<?php foreach ($dataTransaksi as $value): ?>
	<div class="login-box-transaksi">
		<form action="<?php echo base_url(). 'kasir/proses_editDataTransaksi/' ?>" method="post">
			<span style="margin-left: 30px;"><b>ID Transaksi</b></span>
			<input type="text" name="id_transaksi" placeholder="ID Transaksi" readonly="" value="<?php echo $value->id_transaksi ?>" readonly>
			<span><b>No. Meja</b></span>
			<input type="text" placeholder="No. Meja" name="no_meja" value="<?php echo $value->no_meja ?>" readonly>
			<span><b>Tanggal</b></span>
			<input type="text" name="tanggal" placeholder="tanggal" value="<?php echo $value->tanggal_transaksi ?>" readonly>
			<span><b>ID Order</b></span>
			<input type="text" name="id_order" placeholder="ID Order" readonly="" value="<?php echo $value->id_order ?>" readonly>
		</div>
				<?php endforeach ?>			
		<div class="container">
			<div id="data-struk">
				<div class="title">
					<left>
						<img src="<?php echo base_url(). 'assets/gambar/logo.png' ?>" width="100px;"><label style="font-size: 25px; font-weight: bold;">TSFast</label>
						<br/>
						======================================================
						<br/>
						<?php foreach ($dataTransaksi as $value): ?>
						<?php endforeach ?>		
						<label style="margin-left: 30px;"><b>ID Transaksi :</b></label>
						<?php echo $value->id_transaksi; ?><br/>
						<label style="margin-left: 30px;"><b>No. Meja     :</b></label>
						<?php echo $value->no_meja; ?><br/>
						<label style="margin-left: 30px;"><b>Tanggal      :</b></label>
						<?php echo $value->tanggal_transaksi; ?><br/>
						<label style="margin-left: 30px;"><b>ID Order     :</b></label>
						<?php echo $value->id_order; ?><br/>
						======================================================
						<br/>
						<table class="struk">
							<tbody>
						<?php foreach ($dataTransaksi as $value): ?>
								<tr>
									<td><?php echo $value->nama_masakan; ?></td>
									<td><?php echo $value->qty; ?></td>
									<td><?php echo $value->harga; ?></td>
									<td><?php echo $value->keterangan; ?></td>
									<td><?php echo $value->subtotal; ?></td>
								</tr>
						<?php endforeach ?>		
							</tbody>
						</table>
					</br>
						======================================================
						<br/>
						<label style="margin-left: 300px;"><b>Total	   :</b></label> 
						Rp <label style="margin-left: 49px;"><b><?php echo $value->total_bayar; ?></b></label>
						<br/>
						<br/>
						<label style="margin-left: 100px;"><b>Terima Kasih atas kunjungannya</b></label>
						<br/>
						<label style="margin-left: 125px;"><b>Semoga datang kembali</b></label>

					</left>

				</div>
				<div class="action">
				<table class="fixed-th">
					<thead>
						<tr>
							<th class="action">Foto</th>
							<th>Nama Masakan</th>
							<th>Harga</th>
							<th>Banyak Makanan</th>
							<th>Keterangan</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
							<?php foreach ($dataTransaksi as $value): ?>
						<tr>
							<td class="action"><img src="<?php echo base_url('gambar/'.$value->foto)?>" style="width: 100px;"></td>
							<td><?php echo $value->nama_masakan; ?></td>
							<td><?php echo $value->harga ?></td>
							<td><?php echo $value->qty ?></td>
							<td><?php echo $value->keterangan; ?></td>
							<td><?php echo $value->subtotal ?></td>
						</tr>
					<?php endforeach ?>
					</tbody>
				</table>
				<br/>
				</div>
			</div>
		</div>
</div>
		<div class="form-input-transaksi">
			<span>Total	Bayar  : </span>
			Rp <input type="text" name="total_bayar" id="total" value="<?php echo $value->total_bayar ?>" readonly>
		</div>
		<div class="form-input-transaksi">
			<span>Uang Bayar  : </span>
			Rp <input type="text" name="uang_bayar" id="uang_bayar">
		</div>
		<div class="form-input-transaksi">
			<span>Uang Kembali:</span>
			Rp <input type="text" name="uang_kembali" id="uang_kembali" value="0" readonly="">
		</div>
		<div class="btn-btn">
			<a href="#" class="btn-cetak" id="cetak"><i class="fa fa-print" style="color: white;"><span style="font-family: sans-serif; color: white;"> Cetak</span></i></a>
			<input type="submit" name="" class="btn-cetak" value="Simpan">
		</div>
	</form>
</body>
</html>
<script>
	(function($) {
            // fungsi dijalankan setelah seluruh dokumen ditampilkan
            $(document).ready(function(e) {

                // aksi ketika tombol cetak ditekan
                $("#cetak").bind("click", function(event) {
                    // cetak data pada area <div id="#data-mahasiswa"></div>
                    $('#data-struk').printArea();
                });
            });
        }) (jQuery);
	var transaksi = <?= json_encode($dataTransaksi); ?>;
    </script>
    <script type="text/javascript">
		function total() {
			var uang_bayar = $('#uang_bayar');
			var  total_bayar = $('#total');
			if (typeof uang_bayar == number) {
				var uang_kembali = (uang_bayar - total_bayar);
				$('#uang_kembali').val(uang_kembali);
			}
		}
		$(function(){
		console.log(1);
		$('#uang_bayar').on('keyup', function(){
			$('#uang_kembali').val($(this).val() - $('#total').val())
		});
	});	
		$(function(){
		console.log(1);
		$('#qty').on('keyup', function(){
			$('#subtotal').val($(this).val() * $('#harga').val())
		});
	});	
		function total() {
			var qty = $('#qty');
			var  harga = $('#harga');
			if (typeof harga == number) {
				var total = (qty * harga);
				$('#total').val(total);
			}
		}
    </script>