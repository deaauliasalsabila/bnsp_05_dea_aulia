<!DOCTYPE html>
<html>
<head>
  <title>Waiter Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/laporan.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/materialize.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style_table_laporan.css' ?>" media="screen"> -->
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/print.css' ?>" media="print"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/style_sidebar.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets/css/dashboard.css' ?>">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/gambar/logo.png">
  <script src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
  <script src="<?php echo base_url(). 'assets/js/jquery.PrintArea.js' ?>"></script>

</head>
<body>
  <?php $this->load->view('waiter/wsidebar') ?>
  <h1><b>LAPORAN</b></h1>

  <P style="padding: 5px;" class="jarakanan bdongker putihtua">Filter</P>

    <span style="">PERIODE</span> <span class="ltgl" style="margin-left: 20%;">DARI TANGGAL : <input type="date" name=""> SAMPAI TANGGAL: <input type="date" name=""></span> <!-- <a href="" class="btncari">Cari</a> <a href="" class="btncari">cetak</a> --> <span id="laporan"><input type="submit" name="cari" value="cari"></span>
    <span id="laporan"><input type="submit" name="cetak" value="cetak" id="cetak"></span>

    
    <P style="padding: 5px;" class="jarakanan bdongker putihtua jarakatas">Hasil</P>

    <div id="data-laporan">
      

          <div style="width: 100%; height: auto;">  
            <!-- tampilkan ketika dalam mode print -->
            <div class="title">
              <center>
                DAFTAR LAPORAN<br/>
                TRANSAKSI<br/>
                BERDASARKAN PERIODE
        <br/>
            </center>
            </div>
            <div class="kotak jarakatas">
              <div id="listdashboard">
            <table>
              <thead>
                <tr>
                  <th>Tgl Transaksi</th>
                  <th>No. Meja</th>
                  <th>ID Transaksi</th>
                  <th>Total Bayar</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($ambilorder as $value){ ?>
                <tr>
                  <td><?php echo $value->tanggal_order ?></td>
                  <td><?php echo $value->no_meja?></td>
                  <td><?php echo $value->id_transaksi ?></td>
                  <td><?php echo $value->total_bayar ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
            <br/>
          </div>
        </div>
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