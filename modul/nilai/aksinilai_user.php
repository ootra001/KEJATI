<?php
	session_start();
	include "../../koneksi.php";

		$y=mysqli_query($konek,"select * from bidang where id='$_SESSION[bidang]'");
		$y1=mysqli_fetch_array($y);
		$nama_bidang=$y1['nama'];

		"select * from bidang where id='$_SESSION[bidang]'";
			
	if($_SESSION['bidang']=="5"){

			$akurasi=$_POST['akurasi'];
			$kecepatan=$_POST['kecepatan'];
			$skk=$_POST['skk'];
			$perdata=$_POST['perdata'];
			$tun=$_POST['tun'];
			$pph=$_POST['pph'];
			$bidang=$_POST['bidang'];
			$id_kejari=$_POST['id_kejari'];
			
			$periode=date(n).'-'.date(Y);
			
			$t=mysqli_query($konek,"select * from nilai where periode='$periode' and id_bidang='$bidang'");
		
				$a=mysqli_num_rows($t);


					if($a == 0){

				for($i=0; $i<count($id_kejari); $i++){
					$jumlah=$akurasi[$i]+$kecepatan[$i]+$skk[$i]+$perdata[$i]+$tun[$i]+$pph[$i];
					$rata=$jumlah/6;

					$hasil="INSERT INTO nilai(tanggal,periode,kecepatan,akurasi,skk,perdata,tun,pph,rata_rata,id_kejari,id_bidang) VALUES(curdate(),'$periode','$kecepatan[$i]','$akurasi[$i]','$skk[$i]','$perdata[$i]','$tun[$i]',
						'$pph[$i]','$rata','$id_kejari[$i]','$bidang')";
	
					$cetak=mysqli_query($konek, $hasil);

			
					if(!$cetak){
						//header("location:../../home.php?module=nilai");

						echo"gagal";
					}
														}//punya for



						$x=mysqli_query($konek,"select * from rekapitulasi where periode='$periode'");
						$b=mysqli_num_rows($x);

						if($b==0){
							for($i=0; $i<count($id_kejari); $i++){
								$jumlah=$akurasi[$i]+$kecepatan[$i]+$skk[$i]+$perdata[$i]+$tun[$i]+$pph[$i];
								$rata=$jumlah/6;

							$sql = "insert into rekapitulasi (id_rekap,id_kejari,periode,$nama_bidang,jumlah) VALUES ('','$id_kejari[$i]','$periode',$rata,$rata) ";
							$x1=mysqli_query($konek,$sql);
						

						
							}
							header("location:../../home.php?module=nilai");
							
						}else{
							for($i=0; $i<count($id_kejari); $i++){
							$jumlah=$akurasi[$i]+$kecepatan[$i]+$skk[$i]+$perdata[$i]+$tun[$i]+$pph[$i];
								$rata=$jumlah/6;
							$sql = "update rekapitulasi set $nama_bidang=$rata,jumlah=BIN+INTELIJEN+PIDSUS+PIDUM+DATUN+WAS where periode='$periode' and id_kejari='$id_kejari[$i]'";
							$x2=mysqli_query($konek,$sql);
						

						} 
						header("location:../../home.php?module=nilai");
						
					}




					}else{
					echo "data sudah ada";
				}
	}else{

				$rutinitas=$_POST['rutinitas'];
				$kualitas=$_POST['kualitas'];
				$bentuk_formal=$_POST['bentuk_formal'];
				$kecepatan=$_POST['kecepatan'];
				$bidang=$_POST['bidang'];
				$id_kejari=$_POST['id_kejari'];
				

				$periode=date('n').'-'.date('Y');
				
				$t=mysqli_query($konek,"select * from nilai where periode='$periode' and id_bidang='$bidang'");
		
				$a=mysqli_num_rows($t);


					if($a == 0){

				for($i=0; $i<count($id_kejari); $i++){
					$jumlah=$rutinitas[$i]+$kualitas[$i]+$bentuk_formal[$i]+$kecepatan[$i];
					$rata=$jumlah/4;

				$hasil="INSERT INTO nilai (tanggal,periode,rutinitas,kualitas,bentuk_formal,kecepatan,rata_rata,id_kejari,id_bidang)VALUES(curdate(),'$periode','$rutinitas[$i]','$kualitas[$i]','$bentuk_formal[$i]','$kecepatan[$i]',
						'$rata','$id_kejari[$i]','$bidang')";
	
					$cetak=mysqli_query($konek, $hasil) or die(mysqli_error($konek));

			
					if(!$cetak){

					echo "gagal";
						header("location:../../home.php?module=nilai");

					}

				}//tutup foragain


						$x=mysqli_query($konek,"select * from rekapitulasi where periode='$periode'");
						$b=mysqli_num_rows($x);

					//	echo "select * from rekapitulasi where periode='$periode'";
						

						if($b==0){
							for($i=0; $i<count($id_kejari); $i++){
							$jumlah=$rutinitas[$i]+$kualitas[$i]+$bentuk_formal[$i]+$kecepatan[$i];
							$rata=$jumlah/4;	
					$sql = "insert into rekapitulasi (id_rekap,id_kejari,periode,$nama_bidang,jumlah) VALUES ('','$id_kejari[$i]','$periode',$rata,$rata) ";
							$x1=mysqli_query($konek,$sql);
						

						
							}
							//header("location:../../home.php?module=nilai");
							
						}else{
							for($i=0; $i<count($id_kejari); $i++){
							$jumlah=$rutinitas[$i]+$kualitas[$i]+$bentuk_formal[$i]+$kecepatan[$i];
							$rata=$jumlah/4;
						$sql = "update rekapitulasi set $nama_bidang=$rata,jumlah=BIN+INTELIJEN+PIDSUS+PIDUM+DATUN+WAS where periode='$periode' and id_kejari='$id_kejari[$i]'";
							$x2=mysqli_query($konek,$sql);
						

						} 
						header("location:../../home.php?module=nilai");
						
					}



			}else{
					echo "data sudah ada";
			}
}//tutupelse


			




	?>
								
					