<?php
	session_start();
	if(empty($_SESSION['username']) AND empty($_SESSION['password'])){

		echo"  <p><a href='../../index.php' >Login kembali </a></p>";
	}else{

	include "../../koneksi.php";

	$module =$_GET[module];
	$act=$_GET[act];



	//jika input bidang

	if($module=='bidang' AND $act=='input'){

		$nama=$_POST['nama'];
		$keterangan=$_POST['keterangan'];
	
		$query=mysqli_query($konek,"INSERT INTO bidang values('','$nama','$keterangan')");

		
			header("location:../../home.php?module=".$module);
		
	}elseif ($module=='bidang' AND $act=='update') {

		$id =$_POST['id'];
		$nama=$_POST['nama'];
		$keterangan=$_POST['keterangan'];

		$update=mysqli_query($konek,"UPDATE bidang SET nama='$nama' , keterangan='$keterangan' where id='$id'");
		header("location:../../home.php?module=".$module);


	}
	

	}//tutup  session

?>