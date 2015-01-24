<?php
include "koneksi.php";
$username = $_POST['user'];
$password = $_POST['pass'];

$query = mysql_query("SELECT COUNT(username) AS jumlah FROM tb_user 
					WHERE username='$username' AND password='".md5( $password )."'");
$data = mysql_fetch_array($query);

if ($data['jumlah'] >= 1){
	session_start();
	$_SESSION['username']    = $username;
    $_SESSION['password']    = $password;
    $username = $_SESSION['username'];

	header('location:admin/index.php');	
} else {
	header('location:index.html');	
}
?>