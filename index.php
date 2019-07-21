<?php
error_reporting(0);
session_start();
if($_SESSION['login'] == "loginya") {
	?>
		<script>
			window.location.href='admin.php?target=';
		</script>
	<?php
}else if($level =="ketua"){
            ?>
		<script>
			alert("Login Sukses");
			window.location.href='ketua.php?target=';
		</script>
	<?php
} else {

	?>
	<script>
		window.location.href='login.php';
	</script>

	<?php
}
//echo $_SESSION['login']['username'];
?>