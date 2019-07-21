<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_master_pengeluaran			= $_POST['id_master_pengeluaran'];
	$jenis_pengeluaran				= $_POST['jenis_pengeluaran'];

$query = $db->query("SELECT * FROM master_pengeluaran where pengeluaran='".$pengeluaran."'");
	if ($query->num_rows>1) {
?>
		<script>
			alert("pengeluaran Sudah Ada");
			window.location.href='?target=master_pengeluaran';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO master_pengeluaran(id_master_pengeluaran, jenis_pengeluaran  )
	VALUES('".$id_master_pengeluaran."','".$jenis_pengeluaran."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=master_pengeluaran';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM master_pengeluaran WHERE id_master_pengeluaran='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=master_pengeluaran';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_master_pengeluaran			= $_POST['id_master_pengeluaran'];
	$jenis_pengeluaran				= $_POST['jenis_pengeluaran'];

	$db->query("UPDATE master_pengeluaran set    jenis_pengeluaran 			    = '".$jenis_pengeluaran."'
									      where id_master_pengeluaran	  			= '".$id_master_pengeluaran."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=master_pengeluaran';
		</script>
	<?php
}
//end kondisi update

?>

