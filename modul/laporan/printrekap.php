<!-- http://phpbego.wordpress.com -->
<?php 
$strhtml = "<div class='tengah'><h4>REKAPITULASI PENILAIAN PRESTASI KERJA KEJAKSAAN NEGERI SELURUH ACEH </h4></div><div class='tengah' ><h4>BULAN  $_GET[periode]</h4></div>";
	
include "../../koneksi.php";

			

			$periode=$_GET['periode'];
			$sql=mysqli_query($konek,"SELECT * FROM rekapitulasi,kejari where periode='$periode' AND rekapitulasi.id_kejari=kejari.id ORDER BY jumlah DESC ");
			


$strhtml .= ("<table>");
	$strhtml .= "<tr>";
		$strhtml .= "<th rowspan='2'>No</th>";          
		$strhtml .= "<th rowspan='2'>Nama Kejari</th>";
		$strhtml .= "<th colspan='6'><p align='center'>JUMLAH NILAI PER BIDANG</p></th>";
		$strhtml .= "<th rowspan='2'>JUMLAH</th>";
		$strhtml .= "<th rowspan='2'>RANGKING </th>";

		$strhtml .="<tr>";

		$strhtml .="<th>INTEL</th>";
		$strhtml .="<th>BIN</th>";
		$strhtml .="<th>PIDSUS</th>";
		$strhtml .="<th>PIDUM</th>";
		$strhtml .="<th>DATUN</th>";
		$strhtml .="<th>WAS</th>";




	$strhtml .= "</tr>";
	$no=1;
	 while ($data = mysqli_fetch_array($sql)) {
	$strhtml .= "<tr>";
		$strhtml .= "<td>".$no."</td>";
		$strhtml .= "<td>$data[nama]</td>";
		$strhtml .= "<td>$data[INTELIJEN]</td>";
		$strhtml .= "<td>$data[BIN]</td>";				
		$strhtml .= "<td>$data[PIDUM]</td>";
		$strhtml .= "<td>$data[PIDSUS]</td>";
		$strhtml .= "<td>$data[DATUN]</td>";
		$strhtml .= "<td>$data[WAS]</td>";
		$strhtml .= "<td>$data[jumlah]</td>";
		$strhtml .= "<td>".$no."</td>";
	$strhtml .= "</tr>";
	$no++;
	} 
$strhtml .= "</table>";


$strhtml .= "<div class='tu'>";
$strhtml .= "KEPALA BAGIAN TATA USAHA";
$strhtml .= "<br>";


$strhtml .= "<td>KEJAKSAAN TINGGI ACEH</td>";
$strhtml .= "<br>";


$strhtml .= "<td>M.ALI AKBAR,S.H.,M.H.</td>";
$strhtml .= "<br>";

$strhtml .= "<td>JAKSA MADYA</td>";
$strhtml .= "<br>";



$strhtml .= "<td>NIP. 19710614 199903 1 002</td>";
$strhtml .= "<br>";


$strhtml .= "</div>";


// Panggil mPdf
include("../../mpdf/mpdf.php");

// A4 maksudnya ukuran kertas
$mpdf = new mPDF('utf-8', 'A4', 9, 15, 15, 8, 9, 1, 1, 1, '');
$stylesheet = file_get_contents('../../css/stylempdf.css');
$mpdf->WriteHTML($stylesheet,1);
$mpdf->AddPage('L');
$mpdf->WriteHTML($strhtml);
$mpdf->Output();


?>	

