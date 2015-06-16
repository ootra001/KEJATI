
	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-pencil"></i>
	      				<h3>REKAPITULASI</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#formcontrols" data-toggle="tab">Form Rekapitulasi Pada Bulan :<b><i> <?php echo date("F Y") ?></b></i></a>
						  </li>
						 
						</ul>
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form action="" method="POST" class="form-horizontal">
									<fieldset>

					 
				

				<form action="" method="post"/>
				<table id="table-a2">
	 			<tr>
	 			<td>PERIODE  </td>
	 			<td><select class="span3" name="bulan">
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
	 			<td><select name="tahun">
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

</form>



</br>
										
	<table class="table table-bordered">




		<thead>
	<tr>
	<th rowspan="2">No</th>
	<th rowspan="2">Nama Kejari</th>
	<th colspan="6"><p align="center">jumlah per-bidang</p></th>
	<th rowspan="2">JUMLAH</th>
	<th rowspan="2">RANGKING</th>
	<tr>
	<th>INTEL</th>
	<th>BIN</th>
	<th>PIDSUS</th>
	<th>PIDUM</th>
	
	<th>DATUN</th>
	<th>WAS</th>
	
</tr>
	</tr>
	</thead>

	<tbody>
	
	<?php
		include "koneksi.php";

		if(isset($_POST['proses'])){
			$bulan=$_POST['bulan'];
			$tahun=$_POST['tahun'];

			$periode=$bulan.'-'.$tahun;
			$query1=mysqli_query($konek,"SELECT * FROM rekapitulasi,kejari where periode='$periode' AND rekapitulasi.id_kejari=kejari.id ORDER BY jumlah DESC ");
			
			$no=1;
			while($r=mysqli_fetch_array($query1)){
					echo"
					<tr>
						<td>$no</td>
						<td>$r[nama]</td>
						<td>$r[INTELIJEN]</td>
						<td>$r[BIN]</td>
						<td>$r[PIDSUS]</td>
						<td>$r[PIDUM]</td>
						<td>$r[DATUN]</td>	
						<td>$r[WAS]</td>
						<td>$r[jumlah]</td>
						<td>$no</td>

						</tr>
					";

			
				
				$no++;
			}



		}else{
			//jika tidak di set
			$no=1;

			$periode=date('n').'-'.date('Y');
			$query1=mysqli_query($konek,"SELECT * FROM rekapitulasi,kejari where periode='$periode' AND rekapitulasi.id_kejari=kejari.id ORDER BY jumlah DESC");
			
			
			while($r=mysqli_fetch_array($query1)){
					echo"
					<tr>
						<td>$no</td>
						<td>$r[nama]</td>
						<td>$r[INTELIJEN]</td>
						<td>$r[BIN]</td>
						<td>$r[PIDSUS]</td>
						<td>$r[PIDUM]</td>
						<td>$r[DATUN]</td>	
						<td>$r[WAS]</td>
						<td>$r[jumlah]</td>
						<td>$no</td>

						</tr>
					";

			
				
				$no++;
			}
			
		}
	?>

			

	
</tbody>
	

	</table>


						 <br />
					
								<center>	<button class="btn btn-large btn-block btn-primary" type="button">PRINT PDF</button></center>
									</fieldset>
								</form>
								</div>
								
								
								
								
							</div>
						  
						  
						</div>
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	