<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_pengeluaran			= $_POST['id_pengeluaran'];
	$id_user				= $_POST['id_user'];
	$id_master_pengeluaran	= $_POST['id_master_pengeluaran'];
	$nominal	  			=$_POST['nominal'];
	$waktu	  				=$_POST['waktu'];

$query = $db->query("SELECT * FROM trans_pengeluaran where pengeluaran='".$pengeluaran."'");
	if ($query->num_rows>1) {
?>
		<script>
			alert("pengeluaran Sudah Ada");
			window.location.href='?target=trans_pengeluaran';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO trans_pengeluaran(id_pengeluaran, id_master_pengeluaran, id_user, nominal, waktu)
	VALUES('".$id_pengeluaran."','".$id_master_pengeluaran."','".$id_user."','".$nominal."','".$waktu."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=trans_pengeluaran';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM trans_pengeluaran WHERE id_pengeluaran='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=trans_pengeluaran';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_pengeluaran			    = $_POST['id_pengeluaran'];
	$id_user			        = $_POST['id_user'];
	$id_master_pengeluaran	    = $_POST['id_master_pengeluaran'];
	$nominal	  		        =$_POST['nominal'];
	$waktu	  			        =$_POST['waktu'];

	$db->query("UPDATE trans_pengeluaran set 	 waktu						='".$waktu."',
												 nominal 					='".$nominal."',
	 											 id_user 					='".$id_user."',
												 id_master_pengeluaran 		= '".$id_master_pengeluaran."'
									     		 where id_pengeluaran	    = '".$id_pengeluaran."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=trans_pengeluaran';
		</script>
	<?php
}
//end kondisi update

?>

