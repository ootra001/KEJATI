
	

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-home"></i>
	      				<h3>Data Kejaksaan Negeri Se-Aceh</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
					
								
								<div class="tab-pane active" id="jscontrols">
									<form id="edit-profile2" class="form-vertical">
										<fieldset>
											
											<table class="table table-bordered">
											<thead><tr>
												<th>No</th>
												<th>Nama</th>
												<th>Alamat</th>
												<th>Control</th>
												
												</tr>
											</thead>
											<?php
												include "koneksi.php";

												$query="SELECT * FROM kejari ";
												$hasil=mysqli_query($konek,$query);
												$no=1;
												while ($r=mysqli_fetch_array($hasil)){

													echo"	<tbody>

																<tr>
																<td>$no</td>
																<td>$r[nama]</td>
																<td>$r[alamat]</td>
																<td><a href='edit.php?mod=edit' class='btn btn-info'>Edit</a>  <a href='' class='btn btn-danger'>Hapus</a></td>
																
																

																</tr>";


													$no++;



													
													
												}
												
												
												
												echo"	</tbody>



											

											</table>

										</fieldset>
									</form>
								</div>
								
							
						  
						  
						</div>";
						
						?>
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	