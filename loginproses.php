<?php
// session_start();
include "conf/connection.php";
// error_reporting(0);

if(isset($_POST['usrn_post']) && isset($_POST['pass_post'])) {
	$usrn_post 	= addslashes($_POST['usrn_post']);
	$pass_post 	= addslashes($_POST['pass_post']);
	$level = $_POST['level'];
//cek database
	$loginquery = $db->query("select * from user where username='".$usrn_post."' AND password = '".$pass_post."'");
	if ($loginquery->num_rows==0) {
		
	?>
	<script>
		alert("Login Gagal");
		window.location.href='index.php';
	</script>
	<?php

	}
	else {
	// session_start();
	 $data = $loginquery->fetch_array();
	 $row = mysqli_fetch_assoc($loginquery);

		session_start();
		$_SESSION['username'] = $usrn_post;
		$_SESSION['password'] = $pass_post;
       	$_SESSION['level'] = $level;
       	       	if($level == "admin")
       	{
       		$_SESSION['admin'] = $data['id_user'];
       		?>
       		<script >
       			alert("Login sukses");
       			window.location.href='admin.php?target=';
       		</script>
       		<?php
       	}else if($level =="staff"){
       		$_SESSION['staff'] = $data['id_user'];
       		?>
       		<script>
       			alert("Login Sukses");
			window.location.href='admin.php?target=';
       		</script>
       	} 
     ?>
		<script>
			alert("Login tidak ditemukan");
			window.location.href='login.php?target=';
		</script>
        <?php

		}           	
	}
}
?>
