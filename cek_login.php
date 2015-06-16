<?php
	include "koneksi.php";

	function anti_injection($data){

		$filter =stripcslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));

		return $filter;
	}

	$username=anti_injection($_POST['username']);
	$password=anti_injection(md5($_POST['password']));

	$injeksi_username=mysqli_real_escape_string($konek, $username);
	$injeksi_password=mysqli_real_escape_string($konek, $password);

	if(!ctype_alnum($injeksi_username) OR !ctype_alnum($injeksi_password)){
		echo "Gagal login";
	}else{

		$query ="SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$login=mysqli_query($konek,$query);
		$ketemu= mysqli_num_rows($login);
		$r=mysqli_fetch_array($login);

		if($ketemu > 0){

			session_start();

			$_SESSION['username'] =$r['username'];
			$_SESSION['password']=$r['password'];
			$_SESSION['nama']=$r['nama'];
			$_SESSION['level']=$r['level'];

			if ($_SESSION['level']=='user'){

				$q=mysqli_query($konek,"select * from bidang where nama='$_SESSION[username]' ");
				$hasil=mysqli_fetch_array($q);

				$_SESSION['bidang']=$hasil['id'];


			}
			header("location:home.php?module=dashboard");

		}else{

			echo "gagal login";
		}
	}


?>