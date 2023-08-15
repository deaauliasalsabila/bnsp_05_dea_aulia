<!DOCTYPE html>
<html>
<head>
	<title>Pesan</title>
	<!-- logo di tab --> <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/logo.png">
	<!-- ------------ -->

	<!-- panggil css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
	
	<!-- panggil bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">

	<!-- panggil bootstrap js -->
	<!-- <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script> -->

		<link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
	</head>
	<body>
		<?php $this->load->view('header2'); ?>

		<div class="container-fluid jarakbawah">
			<div class="judul tkiri" style="font-size: 70px; margin: 4%;">
				<center><span class="oren"> pesan</span> makanan</center>
			</div>

			<form action="<?php echo base_url() ?>index.php/pelanggan/addorder" method="post">
				<P style="padding: 5px; width: 100%;" class="jarakanan boren putihtua">ISI FORM</P>
				<div style="margin: 2%;">
					<input type="text" name="id_order" value="<?php echo $idorder; ?>" hidden>
					<center><span class="formpesan jarakiri">No. Meja <select style="width: 5%;" name="nomeja">
						<option>01</option>
						<option>02</option>
						<option>03</option>
						<option>04</option>
						<option>05</option>
						<option>06</option>
						<option>07</option>
						<option>08</option>
						<option>09</option>
						<option>10</option>
						<option>11</option>
					</select></span> <span class="formpesan jarakiri">Tanggal <input type="text" name="tanggal" value="<?php echo tanggal(); ?>" READONLY></span>
				</center>

			</div><br>
			<P style="padding: 5px; width: 100%;" class="jarakanan boren putihtua">DETAIL MAKANAN</P>
			<br>
			<div class="kotak">
				<div style="overflow-x:auto; width: 100%; height: 300px; overflow-x: auto;"> 
					<?php echo form_open('index.php/pelanggan/cekcart'); ?>

					<table>

						<tr>
							<th>aksi</th>
							<th>QTY</th>
							<th>Makanan</th>
							<th>Keterangan</th>
							<th>Harga</th>
							<th>Sub-Total</th>
						</tr>

						<?php $i = 1; ?>

						<?php foreach ($this->cart->contents() as $items): ?>

							<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

							<tr>
								<td><?php echo anchor('index.php/pelanggan/removecart/'.$items['rowid'], 'Hapus') ?></td>
								<td><?php echo form_input(array('name' => '[qty]'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
								<td>
									<?php echo $items['name']; ?></td>

									<td> <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

									<p>
										<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

											<input type="text" style="text-align: center;" name="keterangan[]" value="<?php echo $option_value; ?>"><br />

										<?php endforeach; ?>
									</p>

								<?php endif; ?>
							</td>
							
							<td>Rp. <?php echo $this->cart->format_number($items['price']); ?></td>
							<td>Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
						</tr>

						<?php $i++; ?>

					<?php endforeach; ?>

					<tr>
						<td colspan="4"> </td>
						<td><strong>Total</strong></td>
						<td>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
					</tr>

				</table>

			</div>
		</div>
		<br>
		<div class="formpesan  jarakiri"><span class="jarakiri"><input type="submit" name="tambah" value="PESAN"></span><!-- <?php echo form_submit('', 'CEK HARGA'); ?> --></div>
		</div>
		
	
</div>
</form>




<?php $this->load->view('footer'); ?> 
</body>
</html>