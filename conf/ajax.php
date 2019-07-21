<?php
include "connection.php";
$r = mysqli_fetch_array(mysqli_query($db, "select * from santri inner join kelas on santri.id_kelas = kelas.id_kelas where id_santri='$_GET[id_santri]'"));
$data_santri = array(	      
                                   'kamar'              =>  $r['kamar'],
              			           'kelas'  	     	=>  $r['kelas'],);
 echo json_encode($data_santri);