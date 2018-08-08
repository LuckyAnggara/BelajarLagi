<!DOCTYPE html>
<html>
<head>

 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css\stylelucky.css">

	<title>Detail Agen PHP</title>
</head>
<body>

    <!-- INI NAV BAR NYA -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/icon1.png" widht="30" height="30" alt="Dashboard">
        
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Agen
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Laporan Agen</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">EDC</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">BPNT</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- AKHIR DARI NAV BAR -->


<!-- header nama lengkap -->
    <div class="container-fluid text-center">
    <?php
	include 'config.php';
	$id=$_GET['id'];
	$data = mysqli_query($koneksi,"select * from agen where kode_agen='$id'");
	  if (!$data) {
      printf("Error: %s\n", mysqli_error($koneksi));
      exit();
      }
	while ($d=mysqli_fetch_array($data)){
		?>
	
	<h4>Detail Agen atas nama <?php echo $d['nama_agen'];?></h3>
	</br>
    </div>
    <!-- DETAIL FORM -->
    <!-- Tabel Kode Agen -->
<form>
  <div class="form-group row offset-sm-2">
    <label for="KodeAgen" class="col-sm-2 col-form-label">Kode Agen</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="KodeAgen" value="<?php echo $d['kode_agen'];?> " readonly>
    </div>
  </div>
  <!-- Tabel Nama Agen -->
  <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">Nama Agen</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="NamaAgen" value="<?php echo $d['nama_agen'];?>" readonly="">
    </div>
  </div>
  <!-- Tabel No KTP -->
   <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">No KTP</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="NoKTP" value="<?php echo $d['no_ktp'];?>" readonly="">
    </div>
  </div>
  <!-- Tabel Alamat -->
   <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Alamat" value="<?php echo $d['alamat'];?>" readonly="">
    </div>
  </div>
  <!-- Tabel RT RW -->
  <!-- PAKE FITUR DELIMITER UNTUK MEMISAHKAN RT/RW -->
   <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">RT</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="RtRw" value="<?php $rtrw = explode ("/",$d['rt_rw'],2); echo $rtrw[0]?>" readonly="">
    </div>
    <label for="NamaAgen" class="col-sm-2 col-form-label">RW</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" id="RtRw" value="<?php echo $rtrw[1];?>" readonly="">
    </div>
  </div>
  <!-- AKHIR FITUR DELIMITER UNTUK MEMISAHKAN RT/RW -->


  <!-- Tabel PROVINSI -->
   <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">KABUPATEN</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Provinsi" value="<?php echo $d['kabupaten'];?>" readonly="">
    </div>
  </div>
  <!-- Tabel KECAMATAN -->
   <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">KECAMATAN</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Kecamatan" value="<?php echo $d['kecamatan'];?>" readonly="">
    </div>
  </div>
  <!-- Tabel KELURAHAN/DESA -->
   <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">KELURAHAN / DESA</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Kelurahan" value="<?php echo $d['kelurahan'];?>" readonly="">
    </div>
  </div>
  <!-- Tabel KODE POS -->
   <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">KODE POS</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="KodePos" value="<?php echo $d['kode_pos'];?>" readonly="">
    </div>
  </div>
  <!-- Tabel NO HANDPHONE -->
   <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">NO HANDPHONE</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="NoHandphone" value="<?php echo $d['no_handphone'];?>" readonly="">
    </div>
  </div>
    <!-- Tabel EMAIL -->
   <div class="form-group row offset-sm-2">
    <label for="NamaAgen" class="col-sm-2 col-form-label">EMAIL</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="Email" value="<?php echo $d['email'];?>" readonly="">
    </div>
  </div>
<!-- EDC -->
   <div class="form-group row offset-sm-2">
    <label for="EDC" class="col-sm-2 col-form-label">EDC</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="EDC" value="<?php 
     	if ($d['edc']) {
  		$edc = "SUDAH ADA EDC";
  		echo $edc;
		}
		else {
    	$edc = "BELUM ADA EDC";
    	echo $edc;
		}
		?>" 
		readonly="">
    </div>
  </div>
<!-- BPNT -->
   <div class="form-group row offset-sm-2">
    <label for="BPNT" class="col-sm-2 col-form-label">BPNT</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="BPNT" value="<?php 
     	if ($d['edc']) {
  		$edc = "SUDAH AKTIF BPNT";
  		echo $edc;
		}
		else {
    	$edc = "BELUM AKTIF BPNT";
    	echo $edc;
		}
		?>" 
		readonly="">
    </div>
  </div>
<!-- MOU -->
   <div class="form-group row offset-sm-2">
    <label for="MOU" class="col-sm-2 col-form-label">MOU</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="MOU" value="<?php 
     	if ($d['edc']) {
  		$edc = "SUDAH ADA MOU";
  		echo $edc;
		}
		else {
    	$edc = "BELUM ADA MOU";
    	echo $edc;
		}
		?>" 
		readonly="">
    </div>
  </div>

</form>
<div class="container text-center">
<a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">KEMBALI</a>
</div>



<!-- Akhir Detail FORM! -->
	<?php
	}
	?>























 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>