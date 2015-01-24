<?php
include "../koneksi.php";
$kode_kar          = $_POST['kode_kar'];
$nama_kar          = $_POST['nama_kar'];
$no_rek 		   = $_POST['no_rek'];
$kode_gaji 	       = $_POST['kode_gaji'];
$gaji_utama 	   = $_POST['gaji_utama'];
$uang_lembur 	   = $_POST['uang_lembur'];
$total_gaji	       = $_POST['total_gaji'];
$tgl_transfer	   = $_POST['tgl_transfer'];
$jam_transfer	   = $_POST['jam_transfer'];

$query = mysql_query("INSERT INTO tb_temporary (kode_kar, nama_kar, no_rek, kode_gaji, gaji_utama, uang_lembur, total_gaji, tgl_transfer, jam_transfer) 
VALUES ('$kode_kar', '$nama_kar', '$no_rek', '$kode_gaji', '$gaji_utama', '$uang_lembur', '$total_gaji', '$tgl_transfer', '$jam_transfer')");
if ($query){
	echo "<script>alert('Data Gaji Karyawan Berhasil dimasukan!'); window.location = 'printgaji.php'</script>";	
} else {
	echo "<script>alert('Data Gaji Karyawan Gagal dimasukan!'); window.location = 'index.php'</script>";	
}
?>