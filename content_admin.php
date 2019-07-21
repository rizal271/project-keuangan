<?php
if (!isset($_GET['target'])){
?>     
<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Halaman Utama</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Halaman Utama</li>
            <li class="active">Sistem Informasi ...........</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <?php if(@$_SESSION['admin']){ ?>
    <div class="col-lg-4" style="background-color: red;  border-radius: 10px; border-right: 2px solid white; margin-bottom: 20px">
        <div style="width: 30%; float: left; border-right: 1px solid white; margin-top: 15px">
          <h2 style="margin: 40px 0px 60px 25px;"><i class="fa fa-user" style="color: white"></i></h2>
        </div>
        <?php  
        $q = $db->query("SELECT * FROM user");
        $jml = $q->num_rows;
        ?>
        <div style="width: 70%; float: left; padding: 3px 10px 0px 3px; ">
          <p style="font-weight: bold; font-size: 30px; color: white"><?php echo $jml ?></p>
          <p style="font-size: 15px; color: white; margin-top: -10px">Data User</p>
          <br>
          <br>
          <p style="padding-bottom: -30px"><a href="?target=user" style="color: white;">Selengkapnya &nbsp;<i class="fa fa-angle-double-right"></i> </a></p>
        </div>
    </div>

    <div class="col-sm-4 col-lg-4" style="background-color: green; border-radius: 10px; border-right: 2px solid white; margin-bottom: 20px">
        <div style="width: 30%; float: left; border-right: 1px solid white; margin-top: 15px">
          <h2 style="margin: 40px 0px 60px 25px;"><i class="fa fa-user" style="color: white"></i></h2>
        </div>
        <?php  
        $q = $db->query("SELECT * FROM santri");
        $jml = $q->num_rows;
        ?>
        <div style="width: 70%; float: left; padding: 5px 10px 0px 5px; ">
          <p style="font-weight: bold; font-size: 30px; color: white"><?php echo $jml ?></p>
          <p style="font-size: 15px; color: white; margin-top: -10px">Data Santri</p>
          <br>
          <br>
          <p style="padding-bottom: -30px"><a href="?target=santri" style="color: white;">Selengkapnya &nbsp;<i class="fa fa-angle-double-right"></i> </a></p>
        </div>
    </div>

    <div class="col-sm-4 col-lg-4" style="background-color: blue; border-radius: 10px; border-right: 2px solid white; margin-bottom: 20px">
        <div style="width: 30%; float: left; border-right: 1px solid white; margin-top: 15px">
          <h2 style="margin: 40px 0px 60px 25px;"><i class="fa fa-user" style="color: white"></i></h2>
        </div>
        <?php  
        $q = $db->query("SELECT * FROM asrama");
        $jml = $q->num_rows;
        ?>
        <div style="width: 70%; float: left; padding:  5px 10px 0px 5px; ">
          <p style="font-weight: bold; font-size: 30px; color: white"><?php echo $jml ?></p>
          <p style="font-size: 15px; color: white; margin-top: -10px">Data Asrama</p>
          <br>
          <br>
          <p style="padding-bottom: -30px"><a href="?target=asrama" style="color: white;">Selengkapnya &nbsp;<i class="fa fa-angle-double-right"></i> </a></p>
        </div>
    </div>

    <div class="col-lg-4" style="background-color: orange;  border-radius: 10px; border-right: 2px solid white; margin-bottom: 20px">
        <div style="width: 30%; float: left; border-right: 1px solid white; margin-top: 15px">
          <h2 style="margin: 40px 0px 60px 25px;"><i class="fa fa-user" style="color: white"></i></h2>
        </div>
        <?php  
        $q = $db->query("SELECT * FROM kelas");
        $jml = $q->num_rows;
        ?>
        <div style="width: 70%; float: left; padding: 5px 10px 0px 5px; ">
          <p style="font-weight: bold; font-size: 30px; color: white"><?php echo $jml ?></p>
          <p style="font-size: 15px; color: white; margin-top: -10px">Data Kelas</p>
          <br>
          <br>
          <p style="padding-bottom: -30px"><a href="?target=kelas" style="color: white;">Selengkapnya &nbsp;<i class="fa fa-angle-double-right"></i> </a></p>
        </div>
    </div>

    <div class="col-lg-4" style="background-color: purple;  border-radius: 10px; border-right: 2px solid white; margin-bottom: 20px">
        <div style="width: 30%; float: left; border-right: 1px solid white; margin-top: 15px">
          <h2 style="margin: 40px 0px 60px 25px;"><i class="fa fa-user" style="color: white"></i></h2>
        </div>
        <?php  
        $q = $db->query("SELECT * FROM master_pengeluaran");
        $jml = $q->num_rows;
        ?>
        <div style="width: 70%; float: left; padding: 5px 10px 0px 5px; ">
          <p style="font-weight: bold; font-size: 30px; color: white"><?php echo $jml ?></p>
          <p style="font-size: 15px; color: white; margin-top: -10px">Data pengeluaran</p>
          <br>
          <br>
          <p style="padding-bottom: -30px"><a href="?target=master_pengeluaran" style="color: white;">Selengkapnya &nbsp;<i class="fa fa-angle-double-right"></i> </a></p>
        </div>
    </div>

    <div class="col-lg-4" style="background-color: brown;  border-radius: 10px; border-right: 2px solid white; margin-bottom: 20px">
        <div style="width: 30%; float: left; border-right: 1px solid white; margin-top: 15px">
          <h2 style="margin: 40px 0px 60px 25px;"><i class="fa fa-user" style="color: white"></i></h2>
        </div>
        <?php  
        $q = $db->query("SELECT * FROM kamar");
        $jml = $q->num_rows;
        ?>
        <div style="width: 70%; float: left; padding: 5px 10px 0px 5px; ">
          <p style="font-weight: bold; font-size: 30px; color: white"><?php echo $jml ?></p>
          <p style="font-size: 15px; color: white; margin-top: -10px">Data Kamar</p>
          <br>
          <br>
          <p style="padding-bottom: -30px"><a href="?target=kamar" style="color: white;">Selengkapnya &nbsp;<i class="fa fa-angle-double-right"></i> </a></p>
        </div>
    </div>

    <div class="col-lg-4" style="background-color: lime;  border-radius: 10px; border-right: 2px solid white; margin-bottom: 20px">
        <div style="width: 30%; float: left; border-right: 1px solid white; margin-top: 15px">
          <h2 style="margin: 40px 0px 60px 25px;"><i class="fa fa-user" style="color: white"></i></h2>
        </div>
        <?php  
        $q = $db->query("SELECT * FROM master_anggaran");
        $jml = $q->num_rows;
        ?>
        <div style="width: 70%; float: left; padding: 5px 10px 0px 5px; ">
          <p style="font-weight: bold; font-size: 30px; color: white"><?php echo $jml ?></p>
          <p style="font-size: 15px; color: white; margin-top: -10px">Data Anggaran</p>
          <br>
          <br>
          <p style="padding-bottom: -30px"><a href="?target=master_anggaran" style="color: white;">Selengkapnya &nbsp;<i class="fa fa-angle-double-right"></i> </a></p>
        </div>
    </div>

    

    <?php } ?>

   

    

    </div>
  </div>
</div>
<?php
}
else
{
  $target = $_GET['target'];
  if(empty($target)) {
  ?>
    <script>
      window.location.href='admin.php';
    </script>
  <?php
  }
  if(!isset($_GET['action'])){
    getContentAdmin(base_url(),$target);
  }
  else{
    getContentAdmin(base_url(),$target,$_GET['action']);
  }
  
}
?>
