<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header"> <i class="icon-calendar-empty"></i>
              <h3> Cetak laporan Perbulan</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            
              
              <form name="bidang" method="POST" onchange="bidang.submit()">

              <table>
                  <tr>
                    <td>
                      
                        <div class="control-group">
                        <label class="control-label">Pilih Periode</label>
                        	<div class="controls">
                        	<select class="span3" name="periode">
                        		<option>-</option>
                        		<?php

                        		$query=mysqli_query($konek,"SELECT DISTINCT periode from nilai");
                        		while($r=mysqli_fetch_array($query)){
                        			echo "<option value=$r[periode]>$r[periode]</option>";
                        		}


                        		?>
                        		
                        	</select>
                        		
                        	</div>
                        	
                        </div>

                    </td>


                  </tr>


              </table>

              
             </form>

              <form>
                <table class="table table-bordered">
                    <?php
                        if(isset($_POST['periode'])){
                          echo "
                              <thead>
                              <tr>
                              <th>No</th>
                              <th>Nama File</th>
                              <th>Download</th>
                              </tr>
                              </thead>
                              <tr>
                              <td>1</td><td>Nilai Perbidang</td><td><a href=''>Download File</a></td>
                              </tr>
                              <tr>
                              <td>2</td><td>NIlai Rekapitulasi</td><td><a href='modul/laporan/printrekap.php?periode=$_POST[periode]'>Download File</a></td>
                              </tr>



                          ";

                        }else{

                          echo "silahkan pilih periode";
                        }


                    ?>

                </table>  
              </br></br>

              </form>





              <!-- /area-chart --> 
            </div>
            <!-- /widget-content --> 
          </div>

        </div>

       </div>  
           </div>

        </div>

      </div> 