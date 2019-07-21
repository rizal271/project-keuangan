<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "conf/connection.php";
$query = $db->query("SELECT * FROM trans_pemasukan WHERE id_pemasukan ='".$_GET['id']."'");
//menampilkan hasil query dalam bentuk object
//bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll
$rows          = $query->fetch_object();
$id_pemasukan       = $rows->id_pemasukan;
$id_user            = $rows->id_user;
$id_siswa           = $rows->id_siswa;
$pem_kitab          = $rows->pem_kitab;
$pem_ujian          = $rows->pem_ujian;
$pem_wisuda         = $rows->pem_wisuda;
$nominal            = $rows->nominal;
?>                
<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data Pemasukan</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Edit Data Pemasukan</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <div class="card">
      <div class="card-header">
        <strong>Form</strong> Edit Data Pemasukan
      </div>
      <div class="card-body card-block">
        <form action="?target=trans_pemasukan&action=update" method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="id_pemasukan" value="<?php echo $id_pemasukan; ?>">

       <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">User</label></div>
            <div class="col-9 col-md-6">
              <select name="id_user" id="select" class="form-control">
                <?php  
                $qq = $db->query("SELECT * from user where id_user = '$id_user'");
                $rr = $qq->fetch_array();
                ?>
                <option value="<?php echo $rr['id_user'];?>">
                  <?php echo $rr['username'];?>
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

         <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">Siswa</label></div>
            <div class="col-9 col-md-6">
              <select name="id_santri" id="select" class="form-control">
                <?php  
                $qq = $db->query("SELECT * from santri where id_santri = '$id_santri'");
                $rr = $qq->fetch_array();
                ?>
                <option value="<?php echo $rr['id_santri'];?>">
                  <?php echo $rr['nm_santri'];?>
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
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Pembayaran</label></div>
             <div class="col-9 col-md-6"><td colspan="2"><select name="tempat" class="form-control">
                    <option value="pem_ujian" value="<?php echo $pem_ujian;?>">Pembayaran Ujian</option>
                    <option value="pem_kitab" value="<?php echo $pem_kitab;?>">Pembayaran  Kitab</option>
                      <option value="pem_wisuda" value="<?php echo $pem_wisuda;?>">Pembayaran Wisuda</option>
                  </select></td>
          </div>  
          </div> 
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nominal</label></div>
            <div class="col-9 col-md-6"><input type="text" name="jumlah" placeholder="jumlah" class="form-control" value="<?php echo $jumlah; ?>"></div>
          </div>
          <button type="submit" class="btn btn-success" style="border-radius: 5px"> <i class="fa fa-check-square-o"></i> Simpan </button>
          <a href="?target=trans_pemasukan" class="btn btn-danger" style="border-radius: 5px"> <i class="fa fa-arrow-circle-left"></i> Kembali</a>

        </form>
      </div>
    </div>
  </div>
</div>