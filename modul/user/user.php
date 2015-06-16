	<?php 

	if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
			echo "
					<p><a href='../../../index.php'>LOGIN DULU </a></p>
				";
	}else{

		$aksi="modul/user/aksi_user.php";

			$act=isset($_GET['act']) ? $_GET['act'] : '';
		switch ($act) {
					
			default :
			
				echo '

					 <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-user"></i>
	      				<h3>Manajemen User</h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#jscontrols" data-toggle="tab">View User</a></li>
						</ul>
						
						<br>
						
						
								
								<div class="tab-pane" id="jscontrols">
									<form id="edit-profile2" class="form-vertical">
										<fieldset>
											
											<table class="table table-bordered">
											<thead><tr>
												<th>No</th>
												<th>Username</th>
												<th>Nama</th>
												<th>Email</th>
												<th>Level</th>
												<th>Control</th>
												</tr>
											</thead>';

											
												include "koneksi.php";

												$query="SELECT * FROM admin where level='user' order by id DESC";
												$hasil=mysqli_query($konek,$query);
												$no=1;
												while ($r=mysqli_fetch_array($hasil)){

													echo"	<tbody>

																<tr>
																<td>$no</td>
																<td>$r[username]</td>
																<td>$r[nama]</td>
																<td>$r[email]</td>
																<td>$r[level]</td>
																<td><a href='?module=user&act=edit_user&id=$r[id]'>Edit</a></td>
																

																</tr>


													



													";
													$no++;
												}
												
												echo'	</tbody>



											

											</table>

										</fieldset>
									</form>
								</div>
								
							</div>
						  
						  
						</div>';
						echo '
					
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	

				';		
				break ;
				case "edit_user":
					$query=mysqli_query($konek,"select * from admin where id='$_GET[id]'");
					$r=mysqli_fetch_array($query);
						echo "
							 <div class='container'>
	
	      <div class='row'>
	      	
	      	<div class='span12'>      		
	      		
	      		<div class='widget '>
	      			
	      			<div class='widget-header'>
	      				<i class='icon-user'></i>
	      				<h3>Manajemen User</h3>
	  				</div> <!-- /widget-header -->
					
					<div class='widget-content'>
						
						
						
						<div class='tabbable'>
						<ul class='nav nav-tabs'>
						  <li class='active'>
						    <a href='#jscontrols' data-toggle='tab'>View User</a></li>
						</ul>
						
						<br>
				
								<form action='$aksi?module=user&act=update' method='POST'>

								<input type='hidden' name='id' value='$r[id]'>
								<table class='table table-bordered'>
								<tr>
									<td>Username</td>
									<td><input type='text' name='text' value='$r[username]' readonly='disable'></td>

								</tr>
								<tr>
									<td>Nama</td>
									<td><input type='text' name='nama' value='$r[nama]' ></td>

								</tr>
								<tr>
								<td>Email</td>
								<td><input type='text' name='email' value='$r[email]'></td>

								</tr>
								<tr>
								<td>password</td>
								<td><input type='text' name='password' value='$r[password]'></td>
								</tr>

								<tr>
								<td><input type='submit' value='Update'> <input type='button' value='Batal' onclick='self.history.back()'></td></tr>


								
								</table>

							</form>





							</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    

						";
						break;
				}//tutup swicth		
	}//tutup else

	?>
	

	   