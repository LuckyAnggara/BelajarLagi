<?php
$local = "localhost";
$user	= "lucky";
$pass	= "111333";
$db		= "bansos";

$koneksi = mysqli_connect($local,$user,$pass,$db);
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>