<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_pemasukan			= $_POST['id_pemasukan'];
	$id_user				= $_POST['id_user'];
	$id_siswa				= $_POST['id_siswa'];
	$pem_kitab				=ucwords($_POST['pem_kitab']);
	$pem_ujian				=ucwords($_POST['pem_ujian']);
	// $pem_wisuda				=ucwords($_POST['pem_wisuda']);
	// $nominal				= $_POST['nominal'];

				$posisi=$_POST['posisi'];
				$jumlah=ucwords($_POST['jumlah']);
				// $pem_ujian=ucwords($_POST['pem_ujian'])
				// $pem_wisuda=ucwords($_POST['pem_wisuda']);
				
				if($posisi=='pem_kitab'){
					$jumlah='pem_kitab';
				}else{
					$jumlah='pem_ujian';
				}
			    // }elseif{
			    // 	$pem_wisuda='pem_wisuda';
			    // }

$query = $db->query("SELECT * FROM trans_pemasukan where id_pemasukan='".$id_pemasukan."'");
	if ($query->num_rows>1) {
?>
		<script>
			alert("pemasukan Sudah Ada");
			window.location.href='?target=trans_pemasukan';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO trans_pemasukan(id_pemasukan, id_user, id_siswa,".$jumlah.")
	VALUES('".$id_pemasukan."','".$id_user."','".$id_siswa."','".$jumlah."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=trans_pemasukan';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM trans_pemasukan WHERE id_pemasukan='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=trans_pemasukan';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_pemasukan			= $_POST['id_pemasukan'];
	$id_user				= $_POST['id_user'];
	$id_siswa				= $_POST['id_siswa'];
	$pem_kitab				= $_POST['pem_kitab'];
	$pem_ujian				= $_POST['pem_ujian'];
	$pem_wisuda				= $_POST['pem_wisuda'];
	$nominal				= $_POST['nominal'];

	$db->query("UPDATE trans_pemasukan   set 	nominal 							='".$nominal."',
												pem_wisuda							='".$pem_wisuda."',
												pem_ujian							='".$pem_ujian."',
												pem_kitab							='".$pem_kitab."',
												id_siswa							='".$id_siswa."', 	
												id_user								='".$id_user."'
									    		where id_pemasukan	  				= '".$id_pemasukan."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=trans_pemasukan';
		</script>
	<?php
}
//end kondisi update

?>

