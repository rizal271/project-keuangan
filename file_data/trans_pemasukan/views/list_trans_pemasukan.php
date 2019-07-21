<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data Pemasukan</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Data Pemasukan</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <a class="btn btn-success" href="?target=trans_pemasukan&action=form" style="border-radius: 5px; margin-bottom: 20px; margin-left: 10px" title="Tambah Data"> Tambah <i class="fa fa-plus-square"></i></a>
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th style="text-align: center;">No</th>
          <th>Siswa</th>
          <th>Pembayaran Kitab</th>
          <th>Pembayaran Ujian</th>
          <!-- <th>Pembayaran Wisuda</th> -->
          <th>User</th>
          <th>nominal</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      include "conf/connection.php";
      $q = $db->query("SELECT * FROM `trans_pemasukan` INNER JOIN `user` ON `trans_pemasukan`.`id_user` = `user`.`id_user`
                                                       INNER JOIN `santri` ON `santri`.`id_santri` = `santri`.`id_santri`");
      $no = 1;
      while($r = $q->fetch_array()){
      $id_pemasukan = $r['id_pemasukan'];

      ?>
        <tr>
          <td style="text-align: center;"><?php echo $no."."; ?></td>
          <td><?php echo $r['nm_santri']; ?></td>
          <td><?php echo $r['pem_kitab']; ?></td>
          <td><?php echo $r['pem_ujian']; ?></td> 
          <!-- <td><?php echo $r['pem_wisuda']; ?></td>  -->
          <td><?php echo $r['username']; ?></td>
          <td><?php echo $r['nominal']; ?></td>
          <td style="text-align: center;">
            <a class="btn btn-primary" href="admin.php?target=trans_pemasukan&action=edit&id=<?php echo $id_pemasukan; ?>" style="border-radius: 5px" title="Edit Data"><i class='fa fa-edit'></i></a>
            
            <a class="btn btn-danger" href="admin.php?target=trans_pemasukan&action=delete&id=<?php echo $id_pemasukan; ?>" style="border-radius: 5px" title="Hapus Data"><i class='fa fa-trash'></i> </a>
            
          </td>
        </tr>
      <?php 
      $no++;
      }
      ?>
      </tbody>
    </table>
  </div>
</div>