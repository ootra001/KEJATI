<?php
		if(empty($_SESSION['username']) AND empty($_SESSION['password'])){

			echo "<link href='css/style_login.css' rel='stylesheet' type='text/css' />
        <div id='login'><h1 class='fail'>Untuk mengakses modul, Anda harus login dulu.</h1>
        <p class='fail'><a href='index.php'>LOGIN</a></p></div>";
		
		}else{

			include "koneksi.php";

			if($_GET['module']=='dashboard'){

				if($_SESSION['level']=='admin' OR $_SESSION['level']=='user'){

					include "modul/dashboard/dashboard.php";
				}
			}elseif($_GET['module']=='inputkejari'){
				if($_SESSION['level']=='admin' OR $_SESSION['level']=='user'){

				include "modul/kejari/inputkejari.php";

			}
		}elseif($_GET['module']=='nilai'){
				if($_SESSION['level']=='admin'){

				include "modul/nilai/nilai.php";

			}elseif($_SESSION['level']=='user'){

				include "modul/nilai/nilai1.php";
			}


		}elseif($_GET['module']=='datakejari'){
				if($_SESSION['level']=='admin' OR $_SESSION['level']=='user'){

				include "modul/kejari/datakejari.php";

			}
		}elseif($_GET['module']=='rekap'){
				if($_SESSION['level']=='admin' OR $_SESSION['level']=='user'){

				include "modul/nilai/rekap.php";

			}
		}elseif($_GET['module']=='nilaibidang'){
				if($_SESSION['level']=='admin' ){

				include "modul/nilai/nilaibidang.php";

			}elseif ($_SESSION['level']=='user') {
				include "modul/nilai/nilaibidang_user.php";
			}
		}elseif($_GET['module']=='user'){
				if($_SESSION['level']=='admin' ){

				include "modul/user/user.php";

			}
		}elseif($_GET['module']=='bidang'){
				if($_SESSION['level']=='admin' OR $_SESSION['level']=='user'){

				include "modul/bidang/bidang.php";

			}
		}elseif($_GET['module']=='laporan'){
				if($_SESSION['level']=='admin' ){

				include "modul/laporan/laporan.php";

			}
		
		}
		elseif ($_GET['module']=='ganti_password') {
				if($_SESSION['level']=='admin' OR $_SESSION['level']=='user'){
			include "modul/user/ganti_password.php";
		}
		}
		else{

			echo"<h1>404 </h1>";
		}
}

?>