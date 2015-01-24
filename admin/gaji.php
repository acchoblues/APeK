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
    function hitung_gaji() {
var jam_lembur = document.transfer.jam_lembur.value;
var uang_lembur = document.transfer.uang_lembur.value;
var gaji_utama = document.transfer.gaji_utama.value;
var total_gaji = document.transfer.total_gaji.value;
uang_lembur = ( gaji_utama / 173 ) * jam_lembur;
document.transfer.uang_lembur.value = Math.floor( uang_lembur );

total_gaji = (gaji_utama - uang_lembur) + (2 * uang_lembur);
document.transfer.total_gaji.value = Math.floor( total_gaji );
}
</script>
    
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
          <a class="navbar-brand" href="index.html">APeK (Aplikasi penggajian Karyawan)</a>
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
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
              <?php
              echo $_SESSION['username'];
               ?>
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profil</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Pesan Masuk <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Pengaturan</a></li>
                <li class="divider"></li>
                <li><a href="../logout.php" onclick="return confirm('Apakah anda akan keluar?');"><i class="fa fa-power-off"></i> Keluar</a></li>
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
            <h1>Hitung Lembur Karyawan <small>Admin APeK</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-edit"> Hitung Lembur Karyawan</i></li>
            </ol>
            <table width="900">
            <tr>
            <td width="250"><div class="Tanggal"><h4><script language="JavaScript">document.write(tanggallengkap);</script></div></h4></td> 
            <td align="left" width="30"> - </td>
            <td align="left" width="620"> <h4><div id="output" class="jam" ></div></h4></td>
            </tr>
            </table>
            <br />
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             Anda Berada Di Halaman Perhitungan Lembur Karyawan
          </div>
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
        <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-edit"></i> Hitung Lembur Karyawan</h3>
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                  
                  <?php
$query = mysql_query("SELECT * FROM karyawan WHERE kary_id='$_GET[kd]'");
$data  = mysql_fetch_array($query);
?>
    <form action="insertgaji.php" method="post" autocomplete="off" name="transfer">
    <table class="table table-condensed">
    <tr>
        <td><label for="gaji_id">Gaji Id</label></td>
        <td><input name="gaji_id" type="hidden" class="form-control" id="gaji_id"/></td>
      </tr>
    <tr>
        <td><label for="kary_id">Id Karyawan</label></td>
        <td><input name="kary_id" type="text" class="form-control" id="kary_id" value="<?php echo $data['kary_id'];?>"  readonly="readonly"/></td>
      </tr>
      <tr>
        <td><label for="kode_gaji">Kode Gaji</label></td>
        <td><select name="kode_gaji" name="kode_gaji" id="kode_gaji" class="form-control" required>
<option></option>
<option value="GJ001">GJ001</option>
<option value="GJ002">GJ002</option>
<option value="GJ003">GJ003</option>
<option value="GJ004">GJ004</option>
</select></td>
      </tr>
      <tr>
        <td><label for="jam_lembur">Jam Lembur</label></td>
        <td><input name="jam_lembur" type="text" class="form-control" id="jam_lembur" autofocus="on" onkeyup="hitung_gaji()" onkeydown="hitung_gaji()" onchange="hitung_gaji()" required/></td>
      </tr>
      <tr>
        <td><label for="gaji_utama">Gaji Utama</label></td>
        <td><input name="gaji_utama" type="text" class="form-control" id="gaji_utama" value="<?php echo $data['gaji_utama'];?>" readonly="readonly"/></td>
      </tr> 
      <tr>
        <td><label for="uang_lembur">Uang Lembur</label></td>
        <td><input name="uang_lembur" type="text" class="form-control" id="uang_lembur" required/></td>
      </tr>
<tr>
        <td><label for="total_gaji">Total Gaji</label></td>
        <td><input name="total_gaji" type="text" class="form-control" id="total_gaji" required/></td>
      </tr>
      <tr>
        <td><label for="bulan_transfer">Bulan Transfer</label></td>
        <td><select name="bulan_transfer" name="bulan_transfer" id="bulan_transfer" class="form-control" required>
        <option></option>
        <option value="Januari">Januari</option>
        <option value="Februari">Februari</option>
        <option value="Maret">Maret</option>
        <option value="April">April</option>
        <option value="Mei">Mei</option>
        <option value="Juni">Juni</option>
        <option value="Juli">Juli</option>
        <option value="Agustus">Agustus</option>
        <option value="September">September</option>
        <option value="Oktober">Oktober</option>
        <option value="November">November</option>
        <option value="Desember">Desember</option>
        </select></td>
      </tr>
      <tr>
        <td><label for="tgl_transfer">Tanggal Transfer</label></td>
        <td><input name="tgl_transfer" type="text" class="form-control" id="tgl_transfer" value="<?php echo "".date("d/m/Y").""; ?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td><label for="jam_transfer">Jam Transfer</label></td>
        <td><input name="jam_transfer" type="text" class="form-control" id="jam_transfer" value="<?php echo "".date("H:i:s").""?>" readonly="readonly"/></td>
      </tr>
      <tr>
        <td><input type="submit" value="Simpan Data"  class="btn btn-sm btn-primary"/>&nbsp;<a href="index.php" class="btn btn-sm btn-primary">Kembali</a></td>
        </tr>
    </table>
    </form>
                   </div>
                <!-- <div class="text-right">
                  <a href="#"  data-toggle="tooltip" class="tip-bottom" data-original-title="Tooltip Dibawah">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
              
                </div>-->
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
