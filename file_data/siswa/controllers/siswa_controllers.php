<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_siswa		= $_POST['id_siswa'];
	$id_santri		= $_POST['id_santri'];
	$id_kelas		= $_POST['id_kelas'];
	$id_user		= $_POST['id_user'];

$query = $db->query("SELECT * FROM siswa where id_siswa='".$id_siswa."'");
	if ($query->num_rows>1) {
?>
		<script>
			alert("siswa Sudah Ada");
			window.location.href='?target=siswa';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO siswa(id_siswa, id_santri, id_kelas, id_user)
	VALUES('".$id_siswa."','".$id_santri."','".$id_kelas."','".$id_user."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=siswa';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM siswa WHERE id_siswa='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=siswa';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_siswa		= $_POST['id_siswa'];
	$id_santri		= $_POST['id_santri'];
	$id_kelas		= $_POST['id_kelas'];
	$id_user		= $_POST['id_user'];

	$db->query("UPDATE siswa set    id_user				='".$id_user."',
									id_kelas				='".$id_kelas."',
									id_santri 			    = '".$id_santri."'
									where id_siswa			= '".$id_siswa."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=siswa';
		</script>
	<?php
}
//end kondisi update

?>

