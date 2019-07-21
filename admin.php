<?php 
session_start();
include "conf/connection.php";
include "conf/BaseURL.php";
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>   
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SI LAPORAN KEUANGAN SUB BAGIAN PENGAJIAN DAN BAHTSUL MASAIL</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/noruserlize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/scss/style.css">
    <link href="<?php echo base_url();?>style/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<style type="text/css">
    .header-left{
        background-color: white;
        min-width: 121.9%;
        border-right: 1px solid black;
        padding: 20px 0px 20px 0px;
        margin-left: -25px;
        margin-bottom: 20px;
        border-bottom: 5px solid gray;
    }
</style>
</head>
<body style="width: 98%">


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header header-left">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <img src="<?php echo base_url();?>style/images/logo.png" width="100" height="80"  alt="Logo">

                <div>
                    <div class="dropdown" >

                        <a href="#" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div style="float: left; padding-top: 10px; text-transform: capitalize;">
                                <p style="color: black; font-weight: bold"><?php $username = $_SESSION['username']; echo $username; ?></p>
                                <?php if(@$_SESSION['admin']){ ?>
                                    <p style="color: #0166ff; margin-top: -15px; margin-bottom: 0px">[ Administrator ]</p>
                                <?php }else{ ?>
                                    <p style="color: #0166ff; margin-top: -15px; margin-bottom: 0px">[ Staff ]</p>
                                <?php } ?>
                                <i class="menu-icon fa  fa-chevron-circle-down"></i>
                            </div>
                        </a>

                        <div class="user-menu dropdown-menu" style="margin-top: 40px; border: 1px solid gray; margin-left: -20px">
                                <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                                <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="?target="> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> Master Data</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="ti-marker"></i> <a href="?target=user"> User </a></li>
                            <li><i class="ti-marker"></i><a href="?target=santri">Santri</a></li>
                          <!--   <li><i class="ti-marker"></i><a href="?target=kitab">Kitab</a></li> -->
                            <li><i class="ti-marker"></i><a href="?target=master_anggaran"> Master Anggaran</a></li>
                            <li><i class="ti-marker"></i><a href="?target=kamar">kamar</a></li>
                            <li><i class="ti-marker"></i><a href="?target=asrama">Asrama</a></li>
                            <li><i class="ti-marker"></i><a href="?target=kelas">Kelas</a></li>
                            <!-- <li><i class="ti-marker"></i><a href="?target=jabatan">Jabatan</a></li> -->
                            <!-- <li><i class="ti-marker"></i><a href="?target=pemasukan">Pemasukan</a></li> -->
                            <li><i class="ti-marker"></i><a href="?target=master_pengeluaran"> Master Pengeluaran</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Transaksi</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="ti-pencil-alt"></i><a href="?target=trans_aruskas"> Arus Kas</a></li>
                            <li><i class="ti-pencil-alt"></i><a href="?target=trans_anggaran">Anggaran</a></li>
                            <li><i class="ti-pencil-alt"></i><a href="?target=trans_pemasukan">Pemasukan</a></li>
                             <li><i class="ti-pencil-alt"></i><a href="?target=trans_pengeluaran">Pengeluaran</a></li>
                              <li><i class="ti-pencil-alt"></i><a href="?target=siswa">Siswa Amtsilati</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon ti-printer"></i>Laporan</a>
                        <ul class="sub-menu children dropdown-menu">
                         <!--    <li><i class="menu-icon ti-file"></i><a href="?target=lapujian">Lap.Pem.Ujian</a></li>
                            <li><i class="menu-icon ti-file"></i><a href="?target=lapkitab">Lap.Pem.Kitab</a></li> -->
                            <!-- <li><i class="menu-icon ti-file"></i><a href="?target=lapwisuda">Lap.Pem.Wisuda</a></li> -->
                            <li><i class="menu-icon ti-file"></i><a href="?target=lapanggaran">Lap.anggaran</a></li>
                            <li><i class="menu-icon ti-file"></i><a href="?target=lapkeuangan">Lap.Keuangan Perbulan (kas)</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <div class="row" style="width: 104%">
                <div class="content mt-3">
                <div style="background-color: white; padding: 5px; font-weight: bold; margin-top: -15px; border-bottom: 3px solid #ddd">
                    <i class="fa  fa-tags"></i> Sistem Informasi Laporan Keuangan Sub Bagian Bahtsul Masail Putri
                </div>
                  <?php require_once("content_admin.php");?>
              </div>
               </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="<?php echo base_url();?>style/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/main.js"></script>


    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url();?>style/assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
