<script type="text/javascript">
function cek(form){
var lama = form.p_lama.value;
var baru = form.p_baru.value;
var lagi = form.p_lagi.value;
if(lama==""){
alert('mohon isi password lama!');
return false;
}
if(baru==""){
alert('mohon isi password baru!');
return false;
}
if(lagi==""){
alert('ulangi ketik password baru!');
return false;
}
if(baru!=lagi){
alert('Password baru tidak cocok,\nCek ulang password baru Anda!');
return false;
}
return true;
}
</script>
<script type="text/javascript" src="sorot.js"></script>
 <div class="container">
	
	      <div class="row">
	      	
	      	<div class="span12">      		
	      		
	      		<div class="widget ">
	      			
	      			<div class="widget-header">
	      				<i class="icon-cog"></i>
	      				<h3>Ubah Password </h3>
	  				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						<div class="tabbable">
						<ul class="nav nav-tabs">
						  <li class="active">
						    <a href="#jscontrols" data-toggle="tab">Password <?php echo $_SESSION['username'];?></a></li>
						</ul>
						
						<br>
							
							<table align="center" ><tr><td>
							<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="modul/user/ubah_password.php" onsubmit="return cek(this)" method="post">
							<table width="350" height="200" border="0" align="center" style="margin:20px;"  >

							  <tr>
							    <td width="158">Password Lama </td>
							    <td width="14">:</td>
							    <td width="151">
							      <input type="password" name="p_lama" id="p_lama"/>
							    </td>
							  </tr>
							  <tr>
							    <td>Password Baru </td>
							    <td>:</td>
							    <td>
							      <input type="password" name="p_baru" id="p_baru"/>
							    </td>
							  </tr>
							  <tr>
							    <td>Ulangi Password </td>
							    <td>:</td>
							    <td>
							      <input type="password" name="p_lagi" id="p_lagi"/>
							    </td>
							  </tr>
							  <tr align="center">
							    <td height="50" colspan="3"><input type="submit" name="Submit" value="Ganti Password" />
							      <input type="reset" name="reset" value="Reset" /></td>
							  </tr>
							</table>
							</form>
							</td></tr></table>
							</br>
				</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    