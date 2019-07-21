<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_master_anggaran			= $_POST['id_master_anggaran'];
	$jenis_anggaran		= $_POST['jenis_anggaran'];

$query = $db->query("SELECT * FROM master_anggaran where id_master_anggaran='".$id_master_anggaran."'");
	if ($query->num_rows>1) {
?>
		<script>
			alert("anggaran Sudah Ada");
			window.location.href='?target=master_anggaran';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO master_anggaran(id_master_anggaran, jenis_anggaran)
			VALUES('".$id_master_anggaran."','".$jenis_anggaran."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=master_anggaran';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM master_anggaran WHERE id_master_anggaran='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=master_anggaran';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_master_anggaran			= $_POST['id_master_anggaran'];
	$jenis_anggaran		       = $_POST['jenis_anggaran'];

	$db->query("UPDATE master_anggaran set   	  jenis_anggaran 			    			= '".$jenis_anggaran."'
									          where id_master_anggaran	  			  = '".$id_master_anggaran."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=master_anggaran';
		</script>
	<?php
}
//end kondisi update

?>

