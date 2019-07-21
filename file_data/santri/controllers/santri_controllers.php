<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_santri		= $_POST['id_santri'];
	$nm_santri		= $_POST['nm_santri'];
	$id_kamar   		= $_POST['id_kamar'];

$query = $db->query("SELECT * FROM santri where nm_santri='".$nm_santri."'");
	if ($query->num_rows==1) {
?>
		<script>
			alert("nama santri ada");
			window.location.href='?target=santri';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO santri(id_santri, nm_santri, id_kamar )
	VALUES('".$id_santri."','".$nm_santri."','".$id_kamar."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=santri';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM santri WHERE id_santri='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=santri';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_santri		= $_POST['id_santri'];
	$nm_santri		= $_POST['nm_santri'];
	$id_kamar   		= $_POST['id_kamar'];

	$db->query("UPDATE santri set    	id_kamar		        = '".$id_kamar."',
										nm_santri       	= '".$nm_santri."' 
										where id_santri	= '".$id_santri."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=santri';
		</script>
	<?php
}
//end kondisi update

?>

