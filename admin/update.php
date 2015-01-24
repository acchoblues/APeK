<?php
include "../koneksi.php";
$kary_id    = $_POST['kary_id'];
$kode_kar   = $_POST['kode_kar'];
$nama_kar   = $_POST['nama_kar'];
$alamat_kar = $_POST['alamat_kar'];
$no_rek     = $_POST['no_rek'];
$gaji_utama = $_POST['gaji_utama'];
$gol_kar    = $_POST['gol_kar'];

$query = mysql_query("UPDATE karyawan SET kode_kar='$kode_kar',nama_kar='$nama_kar', alamat_kar='$alamat_kar', no_rek='$no_rek', gaji_utama='$gaji_utama', gol_kar='$gol_kar'
 WHERE kary_id='$kary_id'");
if ($query){
header('location:index.php');}	
    //echo "<script>alert('Data Karyawan Berhasil diubah!'); window.location = 'index.php'</script>";	
//} else {
	//echo "<script>alert('Data Karyawan Gagal diubah!'); window.location = 'edit.php?hal=edit&kd=$kary_id</script>";
    //}
?>