<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_anggaran			= $_POST['id_anggaran'];
	$id_user				= $_POST['id_user'];
	$id_master_anggaran		= $_POST['id_master_anggaran'];
	$nominal   				= $_POST['nominal'];


$query = $db->query("SELECT * FROM trans_anggaran where id_anggaran='".$id_anggaran."'");
	if ($query->num_rows==1) {
?>
		<script>
			alert("data anggaran ada");
			window.location.href='?target=trans_anggaran';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO trans_anggaran(id_anggaran, id_user, id_master_anggaran, nominal)
	VALUES('".$id_anggaran."','".$id_user."','".$id_master_anggaran."','".$nominal."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=trans_anggaran';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM trans_anggaran WHERE id_anggaran='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=trans_anggaran';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_anggaran			= $_POST['id_anggaran'];
    $id_user				= $_POST['id_user'];
	$id_master_anggaran	    = $_POST['id_master_anggaran'];
	$nominal				= $_POST['nominal'];

	$db->query("UPDATE trans_anggaran set    nominal 			    = '".$nominal."',
												id_user 			='".$id_user."',
												id_master_anggaran  ='".$id_master_anggaran."'
									             where id_anggaran	  			= '".$id_anggaran."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=trans_anggaran';
		</script>
	<?php
}
//end kondisi update

?>