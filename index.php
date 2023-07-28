<?php
require "config/config_global.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit</title>

    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="assets/fontawesome/css/all.css">
</head>

<body>
  <div class="container">
    <!-- NAVBAR -->
    <nav class="navbar bg-dark navbar-expand-lg" data-bs-theme="dark">
    <!-- NAVBAR CONTENT -->
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Rumah Sakit</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo !isset($_GET['page']) ? 'active':''; ?>" aria-current="page" href="<?php echo base_url() . "index.php?page=rekam_medis"; ?>">Rekam Medis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo isset($_GET['page']) && $_GET['page'] == 'dokter' ? 'active' : '' ?>" aria-current="page" href="<?php echo base_url() . "index.php?page=dokter"; ?>">Dokter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url() . "index.php?page=pasien"; ?>">Pasien</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?php echo base_url() . "index.php?page=obat"; ?>">Obat</a>
        </li>
      </ul>
    </div>
  </div>

    <!-- END NAVBAR CONTENT -->
</nav>
    <!-- END NAVBAR -->

    <!-- CONTENT -->
    <?php include "content.php";
    ?>
          <!-- END CONTENT -->
      </div>



  <!-- js bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <script src="assets/fontawesome/js/all.min.js"></script>
    
</body>
</html>