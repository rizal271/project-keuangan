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
      $q = $db->query("SELECT * FROM `trans_aruskas` LEFT JOIN `master_pengeluaran` ON `trans_aruskas`.`id_master_pengeluaran` = `master_pengeluaran`.`id_master_pengeluaran`");
      $no = 1;
      while($r = $q->fetch_array()){
       $total = $r['nominal'];
       $debit = $r['debit'];
       $kredit = $r['kredit'];       
      $saldo =$jumlahsaldo+$r['debit']-$r['kredit'];
      // $saldo =$saldo+$r['debit'];
   
      $id_kas = $r['id_kas'];
       $nominal = $r['nominal'];
      ?>
        <tr>
          <td style="text-align: center;"><?php echo $no."."; ?></td>
         <td><?php echo $r['waktu'];?></td>
         <?php  
            if ($r['pemasukan'] != '') {
              echo "<td>".$r['pemasukan']."</td>";
            }else {
              echo "<td>".$r['jenis_pengeluaran']."</td>";
            }
         ?>
         <!-- <td><?php echo $r['pemasukan']; ?></td>  
         <td><?php echo $r['jenis_pengeluaran']; ?></td> --> 
        <td><?php echo number_format($debit,0,",","."); ?></td>
          <td><?php echo number_format($kredit,0,",","."); ?></td>
         <!-- <td><?php echo $r['debit'];?></td>
         <td><?php echo $r['kredit']; ?></td> -->
         <td><?php echo $saldo;?></td>
         <td style="text-align: center;">
            <a class="btn btn-primary" href="admin.php?target=trans_aruskas&action=edit&id=<?php echo $id_kas; ?>" style="border-radius: 5px" title="Edit Data"><i class='fa fa-edit'></i></a>
          
            <a class="btn btn-danger" href="admin.php?target=trans_aruskas&action=delete&id=<?php echo $id_kas; ?>" style="border-radius: 5px" title="Hapus Data"><i class='fa fa-trash'></i> </a>
          
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
          <td></td><td></td>
        <td><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total</b> </td>
        <td><b>Rp. <?php echo $dx;?></b></td>
        <td><b>Rp. <?php echo $jumlahK;?></b></td>
        <td><b>Rp. <?php echo $sal;?></b></td>
        <td></td>
      </tr>
    </table>
  </div>
</div>