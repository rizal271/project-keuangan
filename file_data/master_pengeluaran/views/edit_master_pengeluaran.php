<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "conf/connection.php";
$query = $db->query("SELECT * FROM master_pengeluaran WHERE id_master_pengeluaran ='".$_GET['id']."'");
//menampilkan hasil query dalam bentuk object
//bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll
$rows          = $query->fetch_object();
$id_master_pengeluaran       = $rows->id_master_pengeluaran;
$jenis_pengeluaran              = $rows->jenis_pengeluaran;
?>                
<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data Pengeluaran</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Edit Data Pengeluaran</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <div class="card">
      <div class="card-header">
        <strong>Form</strong> Edit Data Pengeluaran
      </div>
      <div class="card-body card-block">
        <form action="?target=master_pengeluaran&action=update" method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="id_master_pengeluaran" value="<?php echo $id_master_pengeluaran; ?>">
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis Pengeluaran</label></div>
            <div class="col-9 col-md-6"><input type="text" name="jenis_pengeluaran" placeholder="jenis_pengeluaran" class="form-control" value="<?php echo $jenis_pengeluaran; ?>"></div>
          </div> 
          <button type="submit" class="btn btn-success" style="border-radius: 5px"> <i class="fa fa-check-square-o"></i> Simpan </button>
          <a href="?target=master_pengeluaran" class="btn btn-danger" style="border-radius: 5px"> <i class="fa fa-arrow-circle-left"></i> Kembali</a>

        </form>
      </div>
    </div>
  </div>
</div>