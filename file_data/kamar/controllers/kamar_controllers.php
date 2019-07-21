<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_kamar		= $_POST['id_kamar'];
	$kamar   		= $_POST['kamar'];
	$id_asrama		= $_POST['id_asrama'];

$query = $db->query("SELECT * FROM kamar where kamar='".$kamar."'");
	if ($query->num_rows==1) {
?>
		<script>
			alert("nama kamar ada");
			window.location.href='?target=kamar';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO kamar(id_kamar, kamar, id_asrama )
	VALUES('".$id_kamar."','".$kamar."','".$id_asrama."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=kamar';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM kamar WHERE id_kamar='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=kamar';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_kamar		= $_POST['id_kamar'];
	$kamar   		= $_POST['kamar'];
	$id_asrama		= $_POST['id_asrama'];

	$db->query("UPDATE kamar  set    	id_asrama			='".$id_asrama."',
										kamar		        = '".$kamar."'
										where id_kamar	= '".$id_kamar."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=kamar';
		</script>
	<?php
}
//end kondisi update

?>

