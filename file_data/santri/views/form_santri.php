<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data Santri</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Tambah Data santri</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <div class="card">
      <div class="card-header">
        <strong>Form</strong> Tambah  Data santri
      </div>
      <div class="card-body card-block">
        <form action="?target=santri&action=input" method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="id_santri">
          <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama santri</label></div>
            <div class="col-9 col-md-6"><input type="text" name="nm_santri" placeholder="nm_santri" class="form-control"></div>
          </div>

              <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">Kamar</label></div>
            <div class="col-9 col-md-6">
              <select name="id_kamar" id="select" class="form-control">
                <option value="">
                    pilih Kamar
                </option>
                <?php
                include "conf/connection.php";
                $q = $db->query("SELECT * from kamar");
                while($r = $q->fetch_array()){
                ?>
                <option value="<?php echo $r['id_kamar'];?>">
                  <?php echo $r['kamar'];?>
                </option>
                <?php } ?>
            </select>
            </div>  
          </div>  

          <button type="submit" class="btn btn-success" style="border-radius: 5px"> <i class="fa fa-check-square-o"></i> Simpan </button>
          <a href="?target=santri" class="btn btn-danger" style="border-radius: 5px"> <i class="fa fa-arrow-circle-left"></i> Kembali</a>

        </form>
      </div>
    </div>
  </div>
</div>