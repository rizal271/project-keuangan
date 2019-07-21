<?php
include "conf/connection.php";

$opsi = $_GET['action'];

//start input
if($opsi == "input"){
	$id_user 	 = $_POST['id_user'];
	$username		= $_POST['username'];
	$password 		= $_POST['password'];
	$level			= $_POST['level'];
$query = $db->query("SELECT * FROM user where username='".$username."'");
	if ($query->num_rows==1) {
?>
		<script>
			alert("Username Sudah Ada");
			window.location.href='?target=user';
		</script>
		<?php
}else{
//simpan ke table
	$db->query("INSERT INTO user(id_user,username, password,level)
	VALUES('".$id_user."','".$username."','".$password."','".$level."')");
}
	?>
	<script>
		alert("Data Berhasil Disimpan");
		window.location.href='?target=user';
	</script>
	<?php
}
//end kondisi input
//start kondisi delete
elseif ($opsi == "delete"){
	$id= $_GET['id'];
	$db->query("DELETE FROM user WHERE id_user='".$id."'");
	?>
		<script>
			alert("Data Berhasil Dihapus");
			window.location.href='?target=user';
		</script>
	<?php
}
//end kondisi delete

//start kondisi update
elseif ($opsi == "update"){
	$id_user 	 = $_POST['id_user'];
	$username		= $_POST['username'];
	$password 		= $_POST['password'];
	$level			= $_POST['level'];
	$db->query("UPDATE user set  level 				= '".$level."',
									password 			= '".$password."',
									username 			= '".$username."'
									where id_user    	= '".$id_user."'");
	?>
		<script>
			alert("Data Berhasil Diupdate");
			window.location.href='?target=user';
		</script>
	<?php
}
//end kondisi update

?>

