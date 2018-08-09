<?php
include 'config.php';


$id=$_GET['id'];
$sql = mysqli_query($koneksi,"select * from agen where kode_agen='$id'");

// setting variabel nya
$kelayakan = $_POST['kelayakan'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// rubah nama dan tanggal jam
$fotobaru = "".$id."-".$foto;
$path = "img/".$fotobaru;


// proses upload
if (move_uploaded_file($tmp, $path)){ // cek proses upload berhasil apa tidak

		$data = mysqli_fetch_array($sql);
		// Cek apakah file foto sebelumnya ada di folder images    
		if(is_file("img/".$data['foto'])) // Jika foto ada      
		unlink("img/".$data['foto']); // Hapus file foto sebelumnya yang ada di folder images

		// Proses ubah data ke Database    
		$sql = "UPDATE agen SET kelayakan='".$kelayakan."', foto='".$fotobaru."' where kode_agen='$id'";    
		$push = mysqli_query($koneksi, $sql); // Eksekusi/ Jalankan query dari variabel $query 
	if($sql){ // Cek jika proses simpan ke database sukses atau tidak      
  	 // Jika Sukses, Lakukan :      
		header("location: detailagen.php?id=$id"); // Redirect ke halaman index.php    
	}
	else{      // Jika Gagal, Lakukan :      
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";      
		echo "<br><a href='detailagen.php?id=<?php echo $id ?>'>Kembali Ke Form</a>";   
	}  
}
else
{    // Jika gambar gagal diupload, Lakukan :    
	echo "Maaf, Gambar gagal untuk diupload.";    
	echo "<br><a href='detailagen.php?id=<?php echo $id ?>'>Kembali Ke Form</a>";  
}

?>
