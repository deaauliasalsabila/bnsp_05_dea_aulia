<!DOCTYPE html>
<html>
<head>
        <title>TSFast</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style/style_detailKeranjang.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style/print.css' ?>" media="print">
        <link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
        <script src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
        <script src="<?php echo base_url(). 'assets/js/jquery.PrintArea.js' ?>"></script>
</head>
<body>
    <div class="back">
        <a href="<?php echo base_url('admin/v_all_dataOrder'); ?>"><i class="fa fa-arrow-alt-circle-left"></i></a>
    </div>
        <div class="login-box-transaksi">                       
                <?php echo anchor('admin/tambahDataOrder/', 'Tambah Masakan') ?>
                <form action="<?php echo base_url(). 'admin/proses_tambahDataOrder' ?>" method="post">
                        <input type="hidden" name="id_transaksi" placeholder="ID Transaksi" readonly="" value="<?php echo $kodeTransaksi; ?>">
                        <span><b>No. Meja</b></span>
                        <select name="no_meja">
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
                        </select>
                        <span><b>Tanggal</b></span>
                        <input type="text" name="tanggal" placeholder="tanggal" value="<?php echo tanggal() ?>" readonly>
                        <input type="hidden" name="id_order" placeholder="ID Order" readonly="" value="<?php echo $kodeOrder; ?>">
                </div>
                <div class="action">
                        <table class="fixed-th" style="margin-bottom:100px;">
                                <thead>
                                        <tr>
                                                <th>Banyak Makanan</th>
                                                <th>Nama Masakan</th>
                                                <th>Keterangan</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                        </tr>
                                </thead>
                                <tbody>
        <?php $i = 1; ?>
           <?php foreach ($this->cart->contents() as $items): ?>
                <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                <tr>
                <td><?php echo form_input(array('name' => '[qty]'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                        
                </td>
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
                <td><?php echo anchor('admin/hapusKeranjang/'.$items['rowid'], 'Hapus') ?></td>
                          </tr>

               <?php $i++; ?>

      <?php endforeach; ?>
                                </tbody>
                        </table>
                        <br/>
                </div>
        </div>
</div>
</div>
<div class="form-input-transaksi">
        <span>Total Bayar  : </span>
        <input type="text" name="total_bayar" value="Rp <?php echo $this->cart->format_number($this->cart->total()); ?>">
</div>
<div class="btn-btn">
        <input type="submit" name="pesan" class="btn-cetak" value="Pesan">
        <!-- <input type="submit" name="" class="btn-cetak" value="Edit Data">
                <br>!-->
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
</script>