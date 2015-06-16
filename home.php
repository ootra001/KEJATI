<?php
  session_start();
  if(empty($_SESSION['username']) AND empty($_SESSION['password'])){

    echo "<link href='css/style_login.css' rel='stylesheet' type='text/css' />
        <div id='login'><h1 class='fail'>Untuk mengakses modul, Anda harus login dulu.</h1>
        <p class='fail'><a href='index.php'>LOGIN</a></p></div>";

  }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title> Aplikasi Penilaian Kinerja Kejaksaan Negeri Seluruh Aceh</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="shortcut icon" type="image/ico" href="img/kejati.png">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/dashboard.css" rel="stylesheet">
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->



</head>
<body onload="startBlink()">

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="home.php?module=dashboard"><img src="img/kejati.png" height="30" width="50" />    PENILAIAN KINERJA KEJAKSAAN NEGERI SE-ACEH</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">

        
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="?module=ganti_password">Settings</a></li>
              <li><a href="logout.php">Logout</a></li>
           
            </ul>
          </li>
        </ul>
       
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li ><a href="?module=dashboard"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>
        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Input Data</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <?php
              if($_SESSION['level']=="admin"){

            ?>
            <li><a href="?module=nilai">Input Nilai</a></li>
            <li><a href="?module=inputkejari">Input Kejari</a></li>
            <li><a href="?module=bidang&act=tambahbidang">Input Bidang</a></li>
          </ul>
        </li>
         <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-list-alt"></i><span>Data Master</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
          	<li><a href='?module=rekap'>Nilai Rekapitulasi</a></li>
            <li><a href="?module=nilaibidang">Nilai Per-bindang</a></li>
            <li><a href="?module=datakejari">Data Kejari</a></li>
            <li><a href="?module=bidang">Data Bidang</a></li>
          </ul>
        </li>

        <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><span>Manajemen User</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">
           
            <li><a href="?module=user"> User Bidang</a></li>
            
          </ul>
        </li>
        
       
        <li><a href="?module=laporan"><i class="icon-print"></i><span>Laporan</span> </a> </li><li>
       
     </ul>
      <?php }

          if($_SESSION['level']=="user"){
        ?>
        
          <li><a href="?module=nilai">Input Nilai</a></li>
        
     </ul>
        </li>

          <li><a href="?module=nilaibidang"><i class="icon-copy"></i><span>Data Bidang</span> </a> </li>
        
       
      <?php }?>

    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
<div class="main-inner">

      <div class="container">
  
        <div class="row">
          
          <div class="span12"> 
          <div class="widget ">
          <?php
            include "content.php";
    
          ?>
      </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->

      </div> <!-- /row -->
  
      </div> <!-- /container -->
      
  </div> <!-- /main-inner -->
</div>
<!-- /main -->

<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span10"> &copy; 2015 <a href="http://www.kejati-aceh.go.id/">-Kejaksaan Tinggi Aceh</a>.</div>
        <div class="span2"> Created by <a href="https://www.facebook.com/profile.php?id=100002193240263" target="blank"><strong>Rizwan Saputra</strong></a></div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 



<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->


    <script type="text/javascript" src="js/statistik/jquery.min.js"></script>
    <script src="js/statistik/highcharts.js"></script>
    <script src="js/statistik/exporting.js"></script>

   <script type="text/javascript">
  var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Penilaian Kinerja Kejaksaan Negeri Seluruh Aceh Bulan '
         },
         xAxis: {
            categories: ['Nama Kejaksaan']
         },
         yAxis: {
            title: {
               text: 'jumlah nilai'
            }
         },
              series:             
            [
            <?php 
          include('koneksi.php');
           $sql   = "SELECT * FROM rekapitulasi,kejari where rekapitulasi.id_kejari=kejari.id";
            $query = mysqli_query($konek, $sql )  or die(mysqli_error());
            while( $ret = mysqli_fetch_array( $query ) ){
              $id=$ret['id'];
              $merek=$ret['nama'];                     
                 $sql_jumlah   = "SELECT * FROM rekapitulasi,kejari where rekapitulasi.id_kejari=kejari.id AND id_kejari='$id'";        
                 $query_jumlah = mysqli_query( $konek,$sql_jumlah ) or die(mysqli_error());
                 while( $data = mysqli_fetch_array( $query_jumlah ) ){
                    $jumlah = $data['jumlah'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $merek; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });  
</script>

<script language="javascript">

function startBlink(){
    obj=document.getElementById('buttonBlinking');
    
    if(obj.style.color==""){
        obj.style.color="#CCCCCC";
    }else{
        obj.style.color="";
    }
    
    setTimeout("startBlink()",500);
}

</script>

</body>
</html>

<?php } ?>