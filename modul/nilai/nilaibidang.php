

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-pencil"></i>
	      				<h3>Nilai Perbidang</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#formcontrols" data-toggle="tab">Nilai Per-bindang Pada Bulan :<b><i> <?php echo date("F Y") ?></b></i></a>
						  </li>
						 
						</ul>
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form action="" method="POST" class="form-horizontal">
									<fieldset>

					 <div class="control-group">
    					<label class="control-label" for="inputEmail" >PILIH BIDANG  </label>
    					<div class="controls">
						
						<select class="span3" name="bidang" required aria-required="false">
							<OPTION>Pilih Bidang</OPTION>
						<?php
							$query="SELECT * FROM bidang";
							$hasil=mysqli_query($konek,$query);
							while($row=mysqli_fetch_array($hasil)){

								echo "<option value=$row[id]>$row[nama]</option>";

							}


						?>



				</select>
				</div>
				</div>
				<tr>
	 			<td>PERIODE  </td>
	 			<td><select class="span3" name="bulan" required>
						<OPTION>Pilih Bulan</OPTION>
						<option value='1'>JANUARI</option>
						<option value='2'>FEBUARI</option>
						<option value='3'>MARET</option>
						<option value='4'>APRIL</option>
						<option value='5'>MEI</option>
						<option value='6'>JUNI</option>
						<option value='7'>JULI</option>
						<option value='8'>AGUSTUS</option>
						<option value='9'>SEPTEMBER</option>
						<option value='10'>OKTOBER</option>
						<option value='11'>NOVEMBER</option>
						<option value='12'>DESEMBER</option>



				</select>
	 			</td>


	 		
	 			<td>TAHUN</td>
	 			<td><select name="tahun" required>
	 				<option>Pilih Tahun</option>
	 				<option value='2015'> 2015</option>
	 				<option value='2016'> 2016</option>
	 				<option value='2017'> 2017</option>
	 				<option value='2018'> 2018</option>


	 			</select>
	 		</td>

	 			<td><input type="submit" value="SELECT" name="proses"/></td> 
	 		</tr>

	</table>
</br>
</br>

</form>




										
	<?php 
						if(isset($_POST['proses'])){
							$bulan=$_POST['bulan'];
							$tahun=$_POST['tahun'];
							$bidang=$_POST['bidang'];
							$periode=$bulan.'-'.$tahun;

							if($bidang=='5'){

				echo '
								</br>
									
	<table class="table table-bordered" >

	<thead>
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Nama Kejari</th>
	<th colspan="3"><p align="center">Adminstrasi</p></th>
	<th colspan="3"><p align="center">Teknis</p></th>
	<th rowspan="2"><p align="center">Jumlah</p></th>
	<th rowspan="2"><p align="center">Rata-Rata</p></th>
	<th rowspan="2"><p align="center">Rangking</p></th>
	<tr>
	<th>Data Akurasi</th>
	<th>Kecepatan Laporan</th>
	<th>SKK Piagam Kerjasama</th>
	<th>Perdata</th>
	<th>Tun</th>
	<th>PPH</th>
	</tr>
	</tr>
	</thead>


	<tbody>
	
	';

		

		$query=mysqli_query($konek,"SELECT * FROM  nilai,kejari where kejari.id=nilai.id_kejari AND nilai.id_bidang='$bidang' AND nilai.periode='$periode' ORDER BY rata_rata DESC") ;
		$no=1;
		
		while($r=mysqli_fetch_array($query)){
					$jumlah=$r['akurasi']+$r['kecepatan']+$r['skk']+$r['perdata']+$r['tun']+$r['pph'];
								$rata=number_format($rata1=($jumlah/6),2);
			echo"
			<tr>
				<td>$no</td>
				<td>$r[nama]</td>
				<td>$r[akurasi]</td>
				<td>$r[kecepatan]</td>
				<td >$r[skk]</td>
				<td >$r[perdata]</td>
				<td >$r[tun]</td>
				<td >$r[pph]</td>
				<td>$jumlah</td>
				<td>$rata</td>
				<td>$no</td>
				</tr>";
			$no++;		
			}
				
			

echo'
			

	</tr>
</tbody>
	

	</table>





						 <br />



				 			';

				 		


							} else{//tutupif5

							$query=mysqli_query($konek,"SELECT * FROM  nilai,kejari where kejari.id=nilai.id_kejari AND nilai.id_bidang='$bidang' AND nilai.periode='$periode' ORDER BY rata_rata DESC") ;

						
							$no=1;

							echo '
							</br>
			<table class="table table-bordered">

		<thead>
	<tr>
	<th>No</th>
	<th>Nama Kejari</th>
	<th>Rutinitas Laporan</th>
	<th>Kualitas Laporan Baik Laporan Insidentil Maupun Laporan Rutin</th>
	<th>Bentuk Formal Laporan Dan Pengunaan Bahasa Benar</th>
	<th>Kecepatan Pengiriman Laporan Insedentil dan rutin(di isi oleh Bag.persuratan)</th>
	<th>Jumlah</th>
	<th>Rata-Rata</th>
	<th>Rangking</th>
	</tr>
	</thead>

				
				';			

							while($r=mysqli_fetch_array($query)){
								$jumlah=$r['rutinitas']+$r['kualitas']+$r['bentuk_formal']+$r['kecepatan'];
								$rata=number_format($rata1=($jumlah/4),2);


							echo" 
								<tr>
									<td>$no</td>
									<td class='span3'>$r[nama]</td>
								<td>$r[rutinitas]</td>
								<td>$r[kualitas]</td>
								<td>$r[bentuk_formal]</td>
								<td>$r[kecepatan]</td>
								<td>$jumlah</td>
							
							<td>$rata</td>
							<td>$no</td>
								

							";
							$no++;
							}
							echo"
								
					</tr>";
				

						}
					}
				echo '
				</tr>
</tbody>
	

	</table>';

				?>


						 <br />
										
											
										
									</fieldset>
								</form>
								</div>
								
							
								
							</div>
						  
						  
		
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	