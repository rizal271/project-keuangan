<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_kas 				= $_POST['id_kas'];
	$id_user 				=$_POST['id_user'];
	$waktu 					= $_POST['waktu'];
	$id_master_pengeluaran	=ucwords($_POST['id_master_pengeluaran']);
	$pemasukan				=ucwords($_POST['pemasukan']);
	$debit					= $_POST['debit'];
	$kredit					= $_POST['kredit'];

				$posisi=$_POST['posisi'];
				$jumlah_dk=ucwords($_POST['jumlah_dk']);
				
				if($posisi=='debit'){
					$dk='debit';
				}else{
					$dk='kredit';
				}
					
$query = $db->query("SELECT * FROM trans_aruskas where id_kas='".$id_kas."'");
	if ($query->num_rows==1) {
?>
		<script>
			alert("data ada");
			window.location.href='?target=trans_aruskas';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO trans_aruskas(id_kas,id_user, waktu, id_master_pengeluaran, pemasukan,".$dk." )
	VALUES('".$id_kas."','".$id_user."','".$waktu."','".$id_master_pengeluaran."','".$pemasukan."','".$jumlah_dk."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=trans_aruskas';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM trans_aruskas WHERE id_kas='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=trans_aruskas';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_kas 		= $_POST['id_kas'];
	$id_user 		=$_POST['id_user'];
	$waktu 			= $_POST['waktu'];
	$id_master_pengeluaran	=ucwords($_POST['id_master_pengeluaran']);
	$pemasukan		=ucwords($_POST['pemasukan']);
	$debit			= $_POST['debit'];
	$kredit			= $_POST['kredit'];

	$db->query("UPDATE trans_aruskas set kredit		  				= '".$kredit."',
										debit		   				= '".$debit."',
										pemasukan					= '".$pemasukan."',
										id_master_pengeluaran		= '".$id_master_pengeluaran."',
										waktu          				= '".$waktu."',
										id_user 					='".$id_user."' 
										where id_kas				= '".$id_kas."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=trans_aruskas';
		</script>
	<?php
}
//end kondisi update

?>

