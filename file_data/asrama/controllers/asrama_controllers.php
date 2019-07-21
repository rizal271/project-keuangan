<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_asrama		= $_POST['id_asrama'];
	$asrama   		= mysql_real_escape_string($_POST['asrama']);

$query = $db->query("SELECT * FROM asrama where asrama='".$asrama."'");
	if ($query->num_rows==1) {
?>
		<script>
			alert("nama asrama ada");
			window.location.href='?target=asrama';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO asrama(id_asrama, asrama )
	VALUES('".$id_asrama."','".$asrama."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=asrama';
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
			window.location.href='?target=asrama';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_asrama		= $_POST['id_asrama'];
	$asrama   		=mysql_real_escape_string($_POST['asrama']);


	$db->query("UPDATE asrama set  		asrama		        = '".$asrama."'
										where id_asrama	= '".$id_asrama."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=asrama';
		</script>
	<?php
}
//end kondisi update

?>

