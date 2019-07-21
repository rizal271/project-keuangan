<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data Anggaran</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Data Anggaran</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <a class="btn btn-success" href="?target=trans_anggaran&action=form" style="border-radius: 5px; margin-bottom: 20px; margin-left: 10px" title="Tambah Data"> Tambah Anggaran <i class="fa fa-plus-square"></i></a>
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th style="text-align: center;">No</th>
          <th>Uraian</th>
           <th>Nominal</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      include "conf/connection.php";
      $q = $db->query("SELECT * FROM trans_anggaran, master_anggaran where trans_anggaran.id_master_anggaran = master_anggaran.id_master_anggaran");
      $no = 1;
      while($r = $q->fetch_array()){
      $id_anggaran = $r['id_anggaran'];
      $nominal = $r['nominal'];

      $total += $r['nominal'];
      ?>
        <tr>
          <td style="text-align: center;"><?php echo $no."."; ?></td>
          <td><?php echo $r['jenis_anggaran']; ?></td>
          <td>Rp. <?php echo number_format($nominal,0,",","."); ?></td>
          <td style="text-align: center;">
            <a class="btn btn-primary" href="admin.php?target=trans_anggaran&action=edit&id=<?php echo $id_anggaran; ?>" style="border-radius: 5px" title="Edit Data"><i class='fa fa-edit'></i></a>
          
            <a class="btn btn-danger" href="admin.php?target=trans_anggaran&action=delete&id=<?php echo $id_anggaran; ?>" style="border-radius: 5px" title="Hapus Data"><i class='fa fa-trash'></i> </a>
          
          </td>
        </tr>
      <?php 
      $no++;
      }
      ?>
      </tbody>
       <tr>
        <td></td>
        <td><b>Jumlah Permohonan</b></td>
        <td><b>Rp.  <?php echo number_format($total,0,",",".");?></b></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td>Saldo Kas bulan Sebelumnya</td>
        <td>Rp. <?php echo $kas_sebelumnya;?></td>
        <td></td>
      </tr>
       <tr>
        <td></td>
        <td><b>Jumlah Diterima<b/></td>
        <td><b>Rp. <?php echo $diterima;?></b></td>
        <td></td>
      </tr>
    </table>
  </div>
</div>