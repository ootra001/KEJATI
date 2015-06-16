<?php

	include "../../koneksi.php";

	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];

	$query=mysqli_query($konek,"INSERT INTO kejari values('','$nama','$alamat')");

		if($query){
			
			header("location:../../home.php?module=inputkejari");
		}

?>