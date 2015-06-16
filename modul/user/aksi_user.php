<?php
	
		include"../../koneksi.php";

		$module=$_GET['module'];
		$act=$_GET['act'];

		if($module=='user' AND $act=='update'){

			$id=$_POST['id'];
			$nama=$_POST['nama'];
			$email=$_POST['email'];
			$password=$_POST['password'];

			if(empty($_POST['password'])){//password tidak di ubah(kosong)

				$update=mysqli_query($konek,"update admin set nama='$nama',email='$email' where id='$id'");	
			}else{
				$password=md5($_POST['password']);
				$update=mysqli_query($konek,"update admin set nama='$nama',email='$email',password='$password' where id='$id'");
			}
			header("location:../../home.php?module=".$module);
		}
	
	
?>