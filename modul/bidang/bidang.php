<?php
		if(empty($_SESSION['username']) AND empty($_SESSION)){

			echo"<p><a href='../../index.php' >LOGIN DULU </a></p>";
		}else{

			$aksi ="modul/bidang/aksi_bidang.php";

			$act =isset($_GET['act']) ? $_GET['act'] : '';

			switch ($act) {
				
				default:
					echo '

					  <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Data Nama Perbidang</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
					
								
								<div class="tab-pane active" id="jscontrols">
									<form id="edit-profile2" class="form-vertical">
										<fieldset>
											
											<table class="table table-bordered">
											<thead><tr>
												<th>No</th>
												<th>Nama</th>
												<th>Keterangan</th>
												<th>Control</th>
												
												</tr>
											</thead>
											';
											
												include "koneksi.php";

												$query="SELECT * FROM bidang ";
												$hasil=mysqli_query($konek,$query);
												$no=1;
												while ($r=mysqli_fetch_array($hasil)){

													echo"	<tbody>

																<tr>
																<td>$no</td>
																<td>$r[nama]</td>
																<td>$r[keterangan]</td>
																
																<td><a href=\"?module=bidang&act=editbidang&id=$r[id]\" class='btn btn-info'>Edit</a> 
																 <a href='hapus.php?id=$r[id]' class='btn btn-danger'>Hapus</a></td>
																
																

																</tr>


													



													";
													$no++;
												}
												
												echo"	</tbody>



											

											</table>

										</fieldset>
									</form>
								</div>
								
							
						  
						  
						</div>
						
				
						
						
					
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    


					";

					break;

					case "editbidang":

						$query ="SELECT * FROM bidang WHERE id='$_GET[id]'";
						$hasil=mysqli_query($konek,$query);
						$r =mysqli_fetch_array($hasil);

						echo '

	    <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Your Account</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#formcontrols" data-toggle="tab">Form Controls</a>
						  </li>
						
						</ul>
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form action="'.$aksi.'?module=bidang&act=update"  method="POST" class="form-horizontal">
								
									<fieldset>
										<input type="hidden" name="id" value="'.$r['id'].'">
									
										<div class="control-group">											
											<label class="control-label" >Nama Bidang</label>
											<div class="controls">
												<input type="text" class="span6" name="nama" value="'.$r['nama'].'">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" >Keterangan</label>
											<div class="controls">
												<input type="text" class="span6" name="keterangan" value="'.$r['keterangan'].'">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										
										
											
										 <br />
										
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Update</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
								
								
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
	    
	

						';

			break;


		case "tambahbidang":

			echo'
					  <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Your Account</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#formcontrols" data-toggle="tab">Form Controls</a>
						  </li>
						
						</ul>
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="formcontrols">
								<form action="$aksi?module=bidang&act=input"  method="POST" class="form-horizontal">
									<fieldset>
										
									
										<div class="control-group">											
											<label class="control-label" >Nama Bidang</label>
											<div class="controls">
												<input type="text" class="span6" name="nama">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										<div class="control-group">											
											<label class="control-label" >Keterangan</label>
											<div class="controls">
												<input type="text" class="span6" name="keterangan">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										
										
											
										 <br />
										
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save</button> 
											<button class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
								</div>
								
								
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
	    
	



			'; 
			break;

			}


		}
	


?>
	

	  
	