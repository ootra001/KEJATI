

<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">

          <div class="widget">
            <div class="widget-header"> <i class="icon-signal"></i>
              <h3> Area Chart Example</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
              <!-- /area-chart --> 
            </div>
            <!-- /widget-content --> 
          </div>

        </div>

      </div>  
      <div class="row">

        <div class="span6">
         <div class="widget">
            <div class="widget-header"> <i class="icon-bullhorn"></i>
              <h3> Notifikasi</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
          
           

          
            <br>
                <table class="table table-striped table-bordered"  >
                  
                  <thead>
                  <tr>
                    <th>Nama Bidang</th>
                    <th>tgl terakhir Input</th>
                    <th>Jatuh tempo</th>
                  </tr> 
                  </thead>
                  <tbody>
                    <?php
                    include "fungsi_tanggal.php";
                     $query=mysqli_query($konek,"SELECT DISTINCT nama from bidang");
                    while($r=mysqli_fetch_array($query)){
                      $t=mysqli_query($konek,"SELECT bidang.nama,nilai.tanggal from nilai,bidang where bidang.nama='$r[0]' AND bidang.id=nilai.id_bidang");
                       $y=mysqli_fetch_array($t);
                        $d=mysqli_num_rows($t);

                        //jatuh tempo
                        


                          echo "
                          <tr>
                              <td>
                              $r[0]
                              </td>
                              ";

                            if($d < 1){
                              echo "<td>-</td>";
                            }else{
                              echo"
                              <td>$y[tanggal]</td>

                              
                             
                              ";
                                $a = datediff($y['tanggal'], date("Y/m/d/ h:m:s"));
                            

                                
                             

                              if($a['months'] > 0 ){

                                  echo "<td><img src='img/red_alert.gif' height='30' width='50' /></img></td>";

                              }else{
                                echo "<td>z</td>";
                              }

                             

                            }
                               echo " </tr>";
                    }

                  
                    ?>

                  </tbody>
                </table>
              <!-- /area-chart --> 
            </div>
            <!-- /widget-content --> 
          </div>

         
         
        </div>
        <!-- /span6 -->




        <div class="span6">


        <?php
          if ($_SESSION['level']=="admin") {
            
         

        echo'
           <div class="widget">
            <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3>MENU</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <div class="shortcuts"> <a href="?module=dashboard" class="shortcut"><i class="shortcut-icon icon-home"></i><span
                                        class="shortcut-label">Home</span> </a><a href="?module=inputkejari" class="shortcut"><i
                                            class="shortcut-icon  icon-pencil"></i><span class="shortcut-label">Input Kejari</span> </a><a href="?module=bidang&act=tambahbidang" class="shortcut"><i class="shortcut-icon icon-arrow-down"></i> <span class="shortcut-label">Input Bidang</span> </a><a href="?module=rekap" class="shortcut"> <i class="shortcut-icon icon-th"></i><span class="shortcut-label">Rekapitulasi</span> </a><a href="?module=user" class="shortcut"><i class="shortcut-icon icon-user"></i><span
                                                class="shortcut-label">Users</span> </a><a href="?module=nilaibidang" class="shortcut"><i
                                                    class="shortcut-icon icon-file"></i><span class="shortcut-label">Nilai Bidang</span> </a><a href="?module=bidang" class="shortcut"><i class="shortcut-icon icon-book"></i> <span class="shortcut-label">Data Bidang</span> </a><a href="?module=datakejari" class="shortcut"> <i class="shortcut-icon icon-folder-open"></i><span class="shortcut-label">Data Kejari</span> </a> </div>
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div>
          ';
           }
             ?>

          <!-- /widget -->
           <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-trophy"></i>
              <h3>Rangking Data Rekapitulasi</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th> Nama Kejaksaaan</th>
                    <th> Nilai</th>
                    <th class="td-actions"> Rangking</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include "koneksi.php";
                  $no=1;
                      $periode=date('n').'-'.date('Y');
                      $query=mysqli_query($konek,"SELECT * FROM rekapitulasi,kejari where periode='$periode' AND rekapitulasi.id_kejari=kejari.id ORDER BY jumlah DESC LIMIT 5");
                      
                      while($r=mysqli_fetch_array($query)){
                      
                        echo "
                          <tr>
                          <td>$r[nama]</td>
                          <td>$r[jumlah]</td>
                          <td>$no</td>
                          </tr>

                        ";
                        $no++;

                      }


                  ?>

                </tbody>
              </table>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
         

          
           
        
         
          <!-- /widget -->
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>

