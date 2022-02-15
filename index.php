<?php

  require 'function.php';
  $Data_Mahasiswa = query("SELECT * FROM Data_Mahasiswa");

  if(isset($_POST['cari'])) {
    $Data_Mahasiswa = cari($_POST['keyword']);
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- fonts -->
    <script src="https://kit.fontawesome.com/beb99c0499.js" crossorigin="anonymous"></script>

    <title> SIMABA || Tempat Para Mahasiswa Baru </title>
  </head>

  <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SIMABA </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
      </div>
    </div>
  </nav>

  <!-- Bar samping -->
  <div class="row mt-4">
    <div class="col-md-2 mt-4 pr-3 pt-4 bg-secondary ">
      <!-- menu -->
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="index.php"><i class="fas fa-chart-line"></i> Dashboard</a><hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fas fa-table"></i> Data Mahasiswa</a><hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="far fa-sticky-note"></i> Input Data Mahasiswa</a><hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="far fa-calendar"></i> Jadwal Mahasiswa</a><hr>
        </li>
      </ul>
    </div>
    <div class="col-md-10 p-5 pt-5">
      <!-- konten -->
      <h3><i class="fas fa-table"></i> Data Mahasiswa </h3><hr>

      <!-- Pencarian Data -->
      <form action="" method="POST">
        <input type="text" name="keyword" size="50" id="keyword" placeholder="cari berdasarkan nama" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="cari"> Cari </button>
      </form>

      <br>
      <hr>

      <table class="table table-striped">
        <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Opsi</th>
      </tr>
      </thead>

      <?php if (empty($Data_Mahasiswa)): ?>
        <tr>
          <td colspan="4" class="alert alert-danger text-center" role="alert">
            <b>
             <p> Data mahasiswa tidak ditemukan</p>
            </b>
          </td>
        </tr>
      <?php endif; ?>
      <tbody>
      <?php $no=1; ?>
        <?php foreach ($Data_Mahasiswa as $Mhs) : ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $Mhs['Nama']; ?></td>
            <td><?php echo $Mhs['Kelas']; ?></td>
            <td><a href="detail.php?id=<?= $Mhs ['id']; ?>" class="btn btn-warning" role="button"> detail </a></td>
          </tr>
        <?php $no++ ?>
      <?php endforeach ?>

      </tbody>
          </table>
        </div>
      </div>

  </body>
</html>
