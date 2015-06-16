<?php
	session_start();
	include "../../koneksi.php";

	$lama = md5($_POST['p_lama']);
	$baru = md5($_POST['p_baru']);

		$query = mysqli_query($konek,"SELECT password FROM admin WHERE username='$_SESSION[username]'");
		$r=mysqli_fetch_array($query);	
		if ($r['password']==$lama) {
			$sql=mysqli_query($konek,"UPDATE admin SET password='$baru' WHERE username='$_SESSION[username]'");
				
			echo 
					"<script>alert('Password sudah diganti  '</script>";
		}else{
			echo "<script>alert('password lama tidak sesuai !)</script>";
		}

?>
<script>document.location.href="../../home.php?module=ganti_password"</script>