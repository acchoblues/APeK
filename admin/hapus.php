<?php
include "../koneksi.php";
$kary_id 	= $_GET['kd'];

$query = mysql_query("DELETE FROM karyawan WHERE kary_id='$kary_id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php'</script>";	
}
?>