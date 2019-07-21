<?php
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include "conf/connection.php";
$query = $db->query("SELECT * FROM tb_adminitrasi 
  LEFT JOIN tb_pajak on tb_adminitrasi . id_nama_wajib_pajak = tb_pajak.id_nama_wajib_pajakk 
  LEFT JOIN tb_desa on tb_adminitrasi . id_desa = tb_desa.id_desa 
  LEFT JOIN tb_kecamatan on tb_adminitrasi . id_kecamatan = tb_kecamatan.id_kecamatan
  LEFT JOIN tb_lampiran on tb_adminitrasi . id_lampiran tb_lampiran.id_lampiran
  LEFT JOIN tb_sppt on tb_adminitrasi . id_sppt = tb_sppt.id_sppt
   WHERE id_adminitrasi ='".$_GET['id']."'");
//menampilkan hasil query dalam bentuk object
//bisa juga menggunakan mysql_fetch_assoc atau mysql_fetch_array dll
$rows                    = $query->fetch_object();
$id_adminitrasi           = $rows->id_adminitrasi;
$id_nama_wajib_pajak      = $rows->id_nama_wajib_pajak;
$id_desa                  = $rows->id_desa;
$id_kecamatan             = $rows->id_kecamatan;
$kabupaten                =$rows->kabupaten;
$id_sppt                  = $rows->id_sppt;
$NOP                      =$rows->NOP;
$RT_RW                    =$rows->RT_RW;
$id_lampiran              = $rows->id_lampiran;
$tanggal                  = $rows->tanggal;
$ket_lampiran             = $rows->ket_lampiran;
$id_username              = $rows->id_username;
?>    
                <div class="col-lg-12">  
                  <div class="card">
                      <div class="card-header">
                        <strong>Form</strong> adminitrasi
                      </div>
                      <div class="card-body card-block">
                        <form action="?target=adminitrasi&action=input" method="post"  class="form-horizontal">
                          <input type="hidden" name="id_adminitrasi">
                    
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Nama wajib pajak</label></div>
                            <div class="col-9 col-md-6">
                              <select name="id_nama_wajib_pajak" id="select" class="form-control">
                                <?php
                                include "conf/connection.php";
                                $q = $db->query("select * from tb_pajak");
                                while($r = $q->fetch_array()){
                                  ?>
                                <option <?php if ($r['id_nama_wajib_pajak'] == $id_nama_wajib_pajak) {echo ' selected';} ?> value="<?php echo $r['id_nama_wajib_pajak'];?>">

                                  <?php 
                                  echo $r['nama_wajib_pajak'];?>
                                </option>

                                <?php }
                                ?>
                              </select>
                            </div>
                          </div>

                            <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Desa</label></div>
                            <div class="col-9 col-md-6">
                               <input type="text" name="nama_desa" class="form-control" value="<?php echo $nama_desa;?>">
                            </div>
                          </div>
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Kecamatan</label></div>
                            <div class="col-9 col-md-6">
                              <input type="text" name="nama_kecamatan" class="form-control" value="<?php echo $nama_kecamatan;?>">
                            </div>
                          </div>
                           
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kabupaten</label></div>
                            <div class="col-9 col-md-6"> <input type="text" name="Kabupaten" class="form-control" value="<?php echo $Kabupaten;?>"></div>
                          </div> 
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Atas Nama</label></div>
                            <div class="col-9 col-md-6">
                               <input type="text" name="nama_sppt" class="form-control" value="<?php echo $nama_sppt;?>">
                            </div>
                              </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">NOP</label></div>
                            <div class="col-9 col-md-6"> <input type="text" name="NOP" class="form-control" value="<?php echo $NOP;?>"></div>
                          </div>
                          
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">RT/RW</label></div>
                            <div class="col-9 col-md-6"> <input type="text" name="RT_RW" class="form-control" value="<?php echo $RT_RW;?>"></div>
                          </div>
                         
                         <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">lampiran</label></div>
                            <div class="col-9 col-md-6"> <input type="text" name="lampiran" class="form-control" value="<?php echo $lampiran;?>"></div>
                          </div> 
                           
                          
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal</label></div>
                            <div class="col-9 col-md-6"> <input type="date" name="tanggal" class="form-control" value="<?php echo $tanggal;?>">"</div>
                          </div>
                           <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Ket_lampiran</label></div>
                            <div class="col-9 col-md-6"><input type="text" name="lampiran" class="form-control" value="<?php echo $lampiran;?>"></div>
                          </div>   
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">User</label></div>
                            <div class="col-9 col-md-6">
                              <input type="text" name="username" class="form-control" value="<?php echo $username;?>">
                            </div>
                          </div>              
                       
                          <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
                        <a href="?target=adminitrasi" class="btn btn-danger btn-sm"> Kembali</a>
                         </form>
                      </div>
                    </div>  
                    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js""></script>
<script type="text/javascript">
    
    function cek_database(){
        var id_keldes = $("#id_adminitrasi").val();
        $.ajax({
            url: 'conf/ajax.php',
            data:"id_adminitrasi="+id_adminitrasi,
        }).success(function (data) {
            var json = data,
            obj = JSON.parse(json);
           $('#id_nama_wajib_pajak').val(obj.id_nama_wajib_pajak);
            $('#id_desa').val(obj.id_desa);
            $('#id_kecamatan').val(obj.id_kecamatan);
            $('#id_lampiran').val(obj.id_lampiran);
            $('#id_sppt').val(obj.id_sppt);
            });
    }
</script>

