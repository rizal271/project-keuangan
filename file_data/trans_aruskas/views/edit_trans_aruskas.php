<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "conf/connection.php";
$query = $db->query("SELECT * FROM trans_aruskas WHERE id_kas ='".$_GET['id']."'");
//menampilkan hasil query dalam bentuk object
//bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll
$rows               = $query->fetch_object();
$id_kas                    = $rows->id_kas;
$id_user                   =$row->id_user;
$waktu                     = $rows->waktu;
$id_master_pengeluaran     = $rows->id_master_pengeluaran;
$pemasukan                 = $rows->pemasukan;
$debit                     = $rows->debit;
$kredit                    = $rows->kredit;

?>             
<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data Kas</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Edit Data Kas</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <div class="card">
      <div class="card-header">
        <strong>Form</strong> Edit Data Kas
      </div>
      <div class="card-body card-block">
        <form action="?target=trans_aruskas&action=update" method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="id_kas" value="<?php echo $id_kas; ?>">

             <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu</label></div>
            <div class="col-9 col-md-6"><input type="date" name="waktu" placeholder="waktu" class="form-control" value="<?php echo $waktu; ?>"></div>
          </div>  

          <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">Uraian</label></div>
            <div class="col-9 col-md-6">
              <select name="id_master_pengeluaran" id="select" class="form-control">
                <?php  
                $qq = $db->query("SELECT * from master_pengeluaran where id_master_pengeluaran = '$id_master_pengeluaran'");
                $rr = $qq->fetch_array();
                ?>
                <option value="<?php echo $rr['id_master_pengeluaran'];?>">
                  <?php echo $rr['jenis_pengeluaran'];?>
                </option>
                <?php
                include "conf/connection.php";
                $q = $db->query("SELECT * from master_pengeluaran");
                while($r = $q->fetch_array()){
                ?>
                <option value="<?php echo $r['id_master_pengeluaran'];?>">
                  <?php echo $r['jenis_pengeluaran'];?>
                </option>
                <?php } ?>
            </select>
            </div>  
          </div> 


           <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pemasukan</label></div>
            <div class="col-9 col-md-6"><input type="text" name="pemasukan" placeholder="pemasukan" class="form-control" value="<?php echo $pemasukan; ?>"></div>
          </div>


           <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nominal</label></div>
            <div class="col-9 col-md-6"><input type="text" name="jumlah_dk" placeholder="jumlah_dk" class="form-control" value="<?php echo $jumlah_dk; ?>"></div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jenis</label></div>
             <div class="col-9 col-md-6"><td colspan="2"><select name="posisi" class="form-control">
                    <option value="debit" value="<?php echo $debit;?>">Debet</option>
                    <option value="kredit" value="<?php echo $kredit;?>">Kredit</option>
                  </select></td>
          </div>  
          </div>      

          <button type="submit" class="btn btn-success" style="border-radius: 5px"> <i class="fa fa-check-square-o"></i> Simpan </button>
          <a href="?target=trans_aruskas" class="btn btn-danger" style="border-radius: 5px"> <i class="fa fa-arrow-circle-left"></i> Kembali</a>

        </form>
      </div>
    </div>
  </div>
</div>