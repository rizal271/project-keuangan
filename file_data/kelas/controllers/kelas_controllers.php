<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_kelas		= $_POST['id_kelas'];
	$kelas		   = $_POST['kelas'];


$query = $db->query("SELECT * FROM kelas where kelas='".$kelas."'");
	if ($query->num_rows>1) {
?>
		<script>
			alert("kelas Sudah Ada");
			window.location.href='?target=kelas';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO kelas(id_kelas, kelas)
	VALUES('".$id_kelas."','".$kelas."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=kelas';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM kelas WHERE id_kelas='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=kelas';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_kelas        = $_POST['id_kelas'];
	$kelas			 = $_POST['kelas'];

	$db->query("UPDATE kelas set    kelas 			    	= '".$kelas."'
									where id_kelas			= '".$id_kelas."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=kelas';
		</script>
	<?php
}
//end kondisi update

?>

