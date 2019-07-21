<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">Santri</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Tambah Data Siswa</li>
            
        </ol>
    </div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <div class="card">
      <div class="card-header">
        <strong>Form</strong> Tambah Data Siswa
      </div>
      <div class="card-body card-block">
        <form action="?target=siswa&action=input" method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="id_siswa">
        <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">Santri</label></div>
            <div class="col-9 col-md-6">
              <select name="id_santri" id="select" class="form-control">
                <option value="">
                    pilih santri
                </option>
                <?php
                include "conf/connection.php";
                $q = $db->query("SELECT * from santri");
                while($r = $q->fetch_array()){
                ?>
                <option value="<?php echo $r['id_santri'];?>">
                  <?php echo $r['nm_santri'];?>
                </option>
                <?php } ?>
            </select>
            </div>  
          </div>   
           <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">Kelas</label></div>
            <div class="col-9 col-md-6">
              <select name="id_kelas" id="select" class="form-control">
                <option value="">
                    pilih kelas
                </option>
                <?php
                include "conf/connection.php";
                $q = $db->query("SELECT * from kelas");
                while($r = $q->fetch_array()){
                ?>
                <option value="<?php echo $r['id_kelas'];?>">
                  <?php echo $r['kelas'];?>
                </option>
                <?php } ?>
            </select>
            </div>  
          </div>        

        <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">User</label></div>
            <div class="col-9 col-md-6">
              <select name="id_user" id="select" class="form-control">
                <option value="">
                    pilih username
                </option>
                <?php
                include "conf/connection.php";
                $q = $db->query("SELECT * from user");
                while($r = $q->fetch_array()){
                ?>
                <option value="<?php echo $r['id_user'];?>">
                  <?php echo $r['username'];?>
                </option>
                <?php } ?>
            </select>
            </div>  
          </div> 

          <button type="submit" class="btn btn-success" style="border-radius: 5px"> <i class="fa fa-check-square-o"></i> Simpan </button>
          <a href="?target=siswa" class="btn btn-danger" style="border-radius: 5px"> <i class="fa fa-arrow-circle-left"></i> Kembali</a>

        </form>
      </div>
    </div>
  </div>
</div>