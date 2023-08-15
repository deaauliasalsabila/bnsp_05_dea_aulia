<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 3</title>
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo base_url(). 'assets/css/style5.css' ?>">
    <link href="<?php echo base_url(). 'assets\css\fontawesome-free-5.0.8\web-fonts-with-css\css\fontawesome-all.css' ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'assets\css\font-awesome\font-awesome\css\font-awesome.min.css' ?>">
</head>
<body>



    <div class="wrapper">
        <!-- Sidebar Holder -->
        <div id="sidebar">
            <div class="sidebar-header">
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                 <li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin' ?>"><i class="fa fa-home"></i><em>Dashboard</em></a></li>
                 <li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataUser'?>"><i class="fa fa-users"></i><em>Data User</em></a></li>
                 <li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/profil' ?>"><i class="fa fa-user"></i><em>Profil</em></a></li>
                 <li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataMasakan' ?>"><i class="icon-food"></i><em>Data Masakan</em></a></li>
                 <li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataOrder' ?>"><i class="icon-shopping-cart"></i><em>Data Order</em></a></li>
                 <li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataTransaksi' ?>"><i class="icon-file-alt"></i><em>Data Transaksi</em></a></li>
                 <li><a class="s-sidebar-nav-link" href="<?php echo base_url(). 'admin/v_all_dataLaporan' ?>"><i class="icon-folder-open-alt"></i><em>Laporan</em></a></li>
                 <li><a class="s-sidebar-nav-link" href="#"><i class="icon-power-off"></i><em>Logout</em></a></li>
                 <img src="<?php echo base_url(). 'assets/images/logo/logo.png' ?>" class="logo">
             </ul>
         </div>

         <!-- Page Content Holder -->
         <div id="content">

            <div class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <i class="fa fa-user" style="float: right; margin-right: 30px;"><span class="span-user">Admin</span></i>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- jQuery CDN -->
    <script src="<?php echo base_url(). 'assets/js/jquery.min.js' ?>"></script>
    <!-- Bootstrap Js CDN -->
    <script src="<?php echo base_url(). 'assets/js/bootstrap.min.js' ?>"></script>

    <script type="text/javascript">
       $(document).ready(function () {
           $('#sidebarCollapse').on('click', function () {
               $('#sidebar').toggleClass('active');
               $(this).toggleClass('active');
           });
       });
   </script>
</body>
</html>
