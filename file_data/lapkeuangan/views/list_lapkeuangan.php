<div class="page-header" style="background-color: transparent;">
    <h2><i class="fa fa-user" style="height: 50px; width: 50px; border: 1px solid black; padding: 7px; padding-left: 13px; border-radius: 50px"></i> <label>Laporan <small>Anggaran</small></label></h2>
    <div class="page-title" style="background-color: transparent;">
        <ol class="breadcrumb" style="background-color: transparent;">
            <li><a href="#">Dashboard</a></li>
            <li>Laporan</li>
            <li class="active">Laporan  Keuangan</li>
            
        </ol>
    </div>
</div>
                <div class="col-lg-12">  
                  <div class="card">
                      <div class="card-header">
                        <strong>Laporan</strong> Keuangan
                      </div>
                      <div class="card-body card-block">
                        <form action="file_data/lapkeuangan/views/cetak_html.php" method="GET"  class="form-horizontal" target="_blank">
                           <div class="row form-group">
                            <div class="col col-md-2"><label for="select" class=" form-control-label">Pilih bulan</label></div>
                            <div class="col-4 col-md-3">
                              <select name="bulan" class="form-control"> 
                                <option value="">Pilih Bulan</option>
                                <option value="januari">Januari</option>
                                <option value="februari">Februari</option>
                                <option value="maret">Maret</option>
                                <option value="april">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                              </select>
                            </div>
                          </div> 
                          <div class="row form-group">
                            <div class="col col-md-2"><label for="select" class=" form-control-label">Pilih Tahun</label></div>
                            <div class="col-4 col-md-3">
                              <select name="tahun" class="form-control"> 
                                <?php  
                                for ($i=1980; $i <= 2030; $i++) { 
                                ?>
                                  <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div> 
                          <div style="padding-left: 170px">
                            <button type="submit" class="btn btn-primary" style="border-radius: 5px"> <i class="fa fa-print"></i> Cetak</button>
                          </div>
                         </form>
                      </div>
                    </div>  
                    </div>
<script type="text/javascript">    
<?php echo $jsArray; ?>  
function changeValue(id){  
document.getElementById('alamat').value = dtjenis[id].alamat;  
};  
</script> 