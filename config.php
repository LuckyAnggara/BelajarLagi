<?php
$local = "localhost";
$user	= "id6719785_lucky";
$pass	= "111333";
$db		= "id6719785_bansos";

$koneksi = mysqli_connect($local,$user,$pass,$db);
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>