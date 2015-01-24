<?php 
session_start();
if (empty($_SESSION['username'])){
	echo "<script>alert('Anda belum mempunyai hak akses.'); window.location = '../index.html'</script>";	
} else {
	include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi Penggajian Karyawan">
    <meta name="author" content="Hakko Bio Richard">

    <title>Welcome to APeK (Aplikasi Penggajian Karyawan</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    
    <script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);  
function waktu() {   
	var tanggal = new Date();  
	setTimeout("waktu()",1000);  
	document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>
<script language="JavaScript">
var tanggallengkap = new String();
var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
namahari = namahari.split(" ");
var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
namabulan = namabulan.split(" ");
var tgl = new Date();
var hari = tgl.getDay();
var tanggal = tgl.getDate();
var bulan = tgl.getMonth();
var tahun = tgl.getFullYear();
tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;

	var popupWindow = null;
	function centeredPopup(url,winName,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	popupWindow = window.open(url,winName,settings)
}
</script>
    
  </head>
  <body>
    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">APeK (Aplikasi penggajian Karyawan)</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> Data Karyawan</a></li>
            <li><a href="tampilgajiaja.php"><i class="fa fa-bar-chart-o"></i> Data Gaji Karyawan</a></li>
            <li><a href="#"><i class="fa fa-table"></i> Data Lembur Karyawan</a></li>
            <li><a href="#"><i class="fa fa-edit"></i> Data Presensi Karyawan</a></li>
            <li><a href="tampilgaji.php"><i class="fa fa-desktop"></i> Cetak Slip Gaji Karyawan</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Laporan <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Laporan Gaji Perbulan</a></li>
                <li><a href="#">Laporan Lembur Perbulan</a></li>
                <li><a href="#">Laporan Tahunan</a></li>
                <li><a href="#">Laporan Pembayaran Gaji</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <!--<li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>-->
            <!--<li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>-->
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hallo,
              <?php
              echo $_SESSION['username'];
               ?>
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profil</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Pesan Masuk <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Pengaturan </a></li>
                <li class="divider"></li>
                <li><a href="../logout.php" onclick="return confirm('Apakah anda akan keluar?');"><i class="fa fa-power-off"></i> Keluar APeK</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <?php
session_start();
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../index.html"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
<?php } ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>PT. Apek Company Indonesia <small>,Tbk</small></h1>
            <table width="900">
            <tr>
            <td width="250"><div class="Tanggal"><h4><script language="JavaScript">document.write(tanggallengkap);</script></div></h4></td> 
            <td align="left" width="30"> - </td>
            <td align="left" width="620"> <h4><div id="output" class="jam" ></div></h4></td>
            </tr>
            </table>
        </div><!-- /.row -->
<!--
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Traffic Statistics: October 1, 2013 - October 31, 2013</h3>
              </div>
              <div class="panel-body">
                <div id="morris-chart-area"></div>
              </div>
            </div>
          </div>
        </div>-->
        <!-- /.row -->
        <div class="col-lg-6">
            <div class="panel panel-primary">
              <div class="panel-heading">
              <h3 class="panel-title" ><i class="fa fa-user"></i> Slip Gaji Karyawan Bulan <?php echo date("F Y");?> </h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                    <?php
                    $tampil=mysql_query("SELECT * FROM karyawan k,tb_gaji g WHERE k.kary_id=g.kary_id AND k.kode_kar='$_GET[kd]'");
                    $total=mysql_num_rows($tampil); ?>
                  <table class="table table-condensed table-hover table-striped tablesorter">
                  
                     <?php while($data=mysql_fetch_array($tampil))
                    { ?>
                    <tr>
                    <td>Kode Karyawan</td>
                    <td>:</td>
                    <td><?php echo $data['kode_kar']; ?></td>
                    </tr>
                    <tr>
                    <td>Nama Karyawan</td>
                    <td>:</td>
                    <td><?php echo $data['nama_kar']; ?></a></td>
                    </tr>
                    <tr>
                    <td>Nomor Rekening</td>
                    <td>:</td>
                    <td><?php echo $data['no_rek']; ?></td>
                    </tr>
                    <tr>
                    <td>Kode Gaji</td>
                    <td>:</td>
                    <td><?php echo $data['kode_gaji']; ?></td>
                    </tr>
                    <tr>
                    <td>Gaji Utama</td>
                    <td>:</td>
                    <td>Rp.<?php echo number_format($data['gaji_utama'],2,",",".");?></td>
                    </tr>
                    <tr>
                    <td>Uang Lembur</td>
                    <td>:</td>
                    <td>Rp.<?php echo number_format($data['uang_lembur'],2,",",".");?></td>
                    </tr>
                    <tr>
                    <td>Total Gaji</td>
                    <td>:</td>
                    <td>Rp.<?php echo number_format($data['total_gaji'],2,",",".");?></td>
                    </tr>
                    <tr>
                    <td>Tanggal Transfer</td>
                    <td>:</td>
                    <td><? echo $data['tgl_transfer'];?></td>
                    </tr>
                    <tr>
                    <td>Jam Transfer</td>
                    <td>:</td>
                    <td><?php echo $data['jam_transfer']; ?></td>
                    </tr>
                 
                   </tbody>
                   </table>
                   </div>
                   <div class="text-Left">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payroll,&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Diterima Oleh,
                  <br />
                  <br />
                  <br />
                  Hakko Bio Richard,Amd.Kom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data['nama_kar']; ?>
               <?php   
              }
              ?>
               
                </div>
                <div class="text-right">
                  <a href="#" class="btn btn-xs btn-warning" onclick="window.print();return false">Cetak  <i class="fa fa-print"></i></a>
              
                </div>
              </div> 
            </div>
          </div>
        </div><!-- /.row --> 

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
