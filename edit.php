<?php

  require "function.php";
  
  $id = $_GET['id'];
  $maba = query("SELECT * FROM Data_Mahasiswa WHERE id=$id");
  //var_dump($maba);

  if (isset($_POST['edit'])){
    if (edit($_POST) > 0) {
      echo 
      "<script>
      alert('data berhasil di edit');
      document.location.href = 'index.php';
      </script>";
    } else {
      echo
      "<script>
      alert('data gagal di edit');
      </script>";
    }
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
      <h3><i class="fas fa-table"></i> Edit Data Mahasiswa </h3><hr>

        <form method="POST" action="">

            <input type="hidden" class="form-control" value="<?= $maba['id']?>" name="id">
            
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="Nama" value="<?= $maba['Nama']?>" placeholder="Nama lengkap" name="Nama" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="Umur" class="form-label">Umur :</label>
                <input type="text" class="form-control" id="Umur" value="<?= $maba['Umur']?>" placeholder="Umur" name="Umur" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="Agama" class="form-label">Agama :</label>
                <input type="text" class="form-control" id="Agama" value="<?= $maba['Agama']?>" placeholder="Agama" name="Agama" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="Jenis Kelamin" class="form-label">Jenis Kelamin :</label>
                <input type="text" class="form-control" id="Jenis_Kelamin" value="<?= $maba['Jenis_Kelamin']?>" placeholder="Jenis Kelamin" name="Jenis Kelamin" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="Kelas" class="form-label">Kelas :</label>
                <input type="text" class="form-control" id="Kelas" value="<?= $maba['Kelas']?>"  placeholder="Kelas" name="Kelas" required autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="Foto" class="form-label">Foto :</label>
                <input type="text" class="form-control" id="Foto" value="<?= $maba['Foto']?>" placeholder="Foto" name="Foto" required autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
        </form>
    </div>
</div>

  </body>
</html>
