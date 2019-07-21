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
    <title>SILK</title>
    <meta name="description" content="SPPD-BPHTB - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>style/assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container" style="background-color: white; width: 40%; margin-top: 30px; box-shadow: 9px 9px 15px gray; border: 2px solid #ddd; border-radius: 10px">
            <div class="login-content">
                <div class="login-logo">
                    <img class="align-content" src="<?php echo base_url();?>style/images/logo.png" alt="" style="width: 100px; height: 100px">
                </div>
                    <B> <center><label>SI LAPORAN KEUANGAN <br>
                        SUB BAGIAN PENGAJIAN DAN BAHTSUL MASAIL</label></center></B>
                    <form action="loginproses.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="usrn_post" id="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="pass_post" id=" password" placeholder="********">
                        </div>
                         <div class="form-group">
                            <label>Level</label>
                            <select class="form-control" name="level">
                                <option value="">
                                    pilih Level
                                </option>
                                <option value="admin">
                                    admin
                                </option>
                                <option value="staff">
                                    staff
                                </option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" style="border-radius: 5px">Sign in <i class="fa  fa-sign-in"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
