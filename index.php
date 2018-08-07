
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Belajar Bootstratp
    </title>
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
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
    <div class="container text-center">
      <h3>Data Agen BNI KC Garut</h3>
    </br>

    </div>



    <!-- Tabel Data Agen   -->

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode Agen</th>
          <th scope="col">Nama Agen</th>
          <th scope="col">Kecamatan</th>
          <th scope="col">Desa</th>
        </tr>
      </thead>
      <tbody>

      <!-- Mulai SCRIPT PHP -->
      <?php
      include 'config.php';
      $no = 1;
      $data = mysqli_query($koneksi,"select*from agen");

      // cek jika koneksi error karena apa
      if (!$data) {
      printf("Error: %s\n", mysqli_error($koneksi));
      exit();
      }


      while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
          <th><?php echo $no++; ?></th>

          
         
          <td><a href="#"><?php echo $d['kodeagen']; ?></a></td>
          
          
          <td><?php echo $d['namaagen']; ?></td>

          <td><?php echo $d['kecamatan'];?></td>
          <td><?php echo $d['desa'];?></td>
        </tr>

      <?php
      // SCRIPT PHP UDAHAN 
        }
       ?>
      </tbody>
    </table>
    <!-- Akhir Tabel Data Agen -->


    <!-- Optional JavaScript -->

    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>