<div style="margin-top: 50px; background-color: white; width: 80px; height: 80px; padding: 20px; padding-left: 25px; margin-bottom: -50px; margin-left: 15px; box-shadow: 0px 0px 10px gray; position: relative;"> <h2><i class="fa fa-user"></i></h2> </div>
<div class="page-header">
    <div class="page-title">
        <div style="margin-left: 100px; font-weight: bold; font-size: 20px; padding-top: 10px">Data Kas</div>
        <ol class="breadcrumb" style="padding-top: 10px; text-align: right; padding-left: 100px; text-align: right;">
            <li><a href="admin.php">Dashboard</a></li>
            <li>Master Data</li>
            <li class="active">Data Kas</li>
            
        </ol>
    </div>
</div>
<div class="breadcrumbs" >
  <div class="content mt-3" style="margin-left: -5px; width: 102%">
    <a class="btn btn-success" href="?target=trans_aruskas&action=form" style="border-radius: 5px; margin-bottom: 20px; margin-left: 10px" title="Tambah Data"> Tambah Pemasukan<i class="fa fa-plus-square"></i></a>
     <a class="btn btn-success" href="?target=trans_aruskas&action=detail" style="border-radius: 5px; margin-bottom: 20px; margin-left: 10px" title="Tambah Data"> Tambah Pengeluaran <i class="fa fa-plus-square"></i></a>
    <table id="bootstrap-data-table" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th style="text-align: center;">No</th>
          <th>Tanggal</th>
          <th>Uraian</th>
          <th>Debet</th>
          <th>Kredit</th>
          <th>Saldo</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php 
      include "conf/connection.php";
      $q = $db->query("SELECT * FROM `trans_aruskas` INNER JOIN `pengeluaran` ON `trans_kas`.`id_pengeluaran` = `pengeluaran`.`id_pengeluaran`
                                                  INNER JOIN `pemasukan` ON `pemasukan`.`id_pemasukan` = `pemasukan`.`id_pemasukan`");
      $no = 1;
      while($r = $q->fetch_array()){
       $total = $r['nominal'];
       $debit = $r['debit'];
       $kredit = $r['kredit'];       
       // $saldo = $debit - $kredit; 
      $saldo =$jumlahsaldo+$r['debit']-$r['kredit'];
      $saldo =$saldo+$r['debit'];
   
      $id_trans_kas = $r['id_trans_kas'];
      ?>
      
<?
       $kredit= $db->query("SELECT  * FROM pengeluaran");
      // $no = 1;
      $rk = $kredit->fetch_array();
      

      $saldo = $db->query("SELECT  * FROM  pemasukan");
      // $no = 1;
      $rs = $saldo->fetch_array();
      ?>
        <tr>
          <td style="text-align: center;"><?php echo $no."."; ?></td>
          <?php
            if ($r['id_pengeluaran'] == $rk['id_pengeluaran']) {
              // echo "<td>".$r['waktu_p']."</td>";
              // echo "<td>".$r['jenis_pengeluaran']."</td>";
              // echo "<td></td>";
              // echo "<td>".$r['nominal_p']."</td>";
            }

            if ($r['id_pemasukan']== $rs['id_pemasukan']){
              // echo "<td>".$r['waktu']."</td>";
              // echo "<td>".$r['jenis_pemasukan']."</td>";
              // echo "<td>".$r['nominal']."</td>";
              // echo "<td></td>";
            }
          ?>
         <td style="text-align: center;">
            <a class="btn btn-primary" href="admin.php?target=trans_kas&action=edit&id=<?php echo $id_trans_kas; ?>" style="border-radius: 5px" title="Edit Data"><i class='fa fa-edit'></i></a>
          
            <a class="btn btn-danger" href="admin.php?target=trans_kas&action=delete&id=<?php echo $id_trans_kas; ?>" style="border-radius: 5px" title="Hapus Data"><i class='fa fa-trash'></i> </a>
          
          </td>
        </tr>
               
      <?php 
       $no++;
         $jumlahD=$jumlahD+$r['debit'];
      $jumlahK=$jumlahK+$r['kredit'];
      $sal +=$saldo;
      }
       $dx = $jumlahD+$kas_sebelumnya;
      ?>
      </tbody>
       <tr>
          <td></td>
        <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</b> </td>
        <td></td>
        <td><b>Rp. <?php echo $dx;?></b></td>
        <td><b>Rp. <?php echo $jumlahK;?></b></td>
        <td><b>Rp. <?php echo $sal;?></b></td>
        <td></td>
      </tr>
    </table>
  </div>
</div>