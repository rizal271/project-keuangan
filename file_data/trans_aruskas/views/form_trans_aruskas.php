<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data Kas</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Tambah Data Kas</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <div class="card">
      <div class="card-header">
        <strong>Form</strong> Tambah  Data Kas
      </div>
      <div class="card-body card-block">
        <form action="?target=trans_aruskas&action=input" method="post" enctype="multipart/form-data" class="form-horizontal">
          <input type="hidden" name="id_kas">
           <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">User</label></div>
            <div class="col-9 col-md-6">
              <select name="id_user" id="select" class="form-control">
                <option value="">
                    pilih User
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
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Waktu</label></div>
            <div class="col-9 col-md-6"><input type="date" name="waktu" placeholder="waktu" class="form-control"></div>
            </div>

           <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Pemasukan</label></div>
            <div class="col-9 col-md-6"><input type="text" name="pemasukan" placeholder="pemasukan" class="form-control"></div>
            </div>

        <div class="row form-group">
            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nominal</label></div>
            <div class="col-9 col-md-6"><input type="text" name="jumlah_dk" placeholder="jumlah_dk" class="form-control"></div>
          </div>

          <div class="row form-group">
            <div class="col col-md-3"><label for="select" class="form-control-label">Jenis</label></div>
            <div class="col-9 col-md-6">
              <td colspan="2"><select name="posisi" class="form-control">
               <option value="">
                    pilih Jenis
                </option>
                    <option value="debit">Debet</option>
                    <option value="kredit">Kredit</option>
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