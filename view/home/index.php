<!-- Header -->
<?php
  $title = "Dashboard"; // Judulnya
  require("../template/header.php"); // include headernya

  include('../../config/connection.php'); // database
?>



<!-- Isinya -->

<section class="section">
  <div class="section-header">
    <h1><?= $title; ?></h1>
  </div>

  <?php
    if (isset($_SESSION['alert'])) {
      echo $_SESSION['alert'];
      unset($_SESSION['alert']);
    }
  ?>

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
    <div class="card-header">
        <h4>Calon Siswa RPL</h4>
    </div>
    <div class="card-body">
        <?php
        $query = "SELECT COUNT(*) AS total_siswa FROM identitas_siswa WHERE Jurusan = 'rpl'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $totalSiswa = $row['total_siswa'];
        echo $totalSiswa;
        ?>
    </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
    <div class="card-header">
        <h4>Calon Siswa DKV</h4>
    </div>
    <div class="card-body">
        <?php
        $query = "SELECT COUNT(*) AS total_siswa FROM identitas_siswa WHERE Jurusan = 'dkv'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $totalSiswa = $row['total_siswa'];
        echo $totalSiswa;
        ?>
    </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
    <div class="card-header">
        <h4>Calon Siswa TKR</h4>
    </div>
    <div class="card-body">
        <?php
        $query = "SELECT COUNT(*) AS total_siswa FROM identitas_siswa WHERE Jurusan = 'tkr'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $totalSiswa = $row['total_siswa'];
        echo $totalSiswa;
        ?>
    </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-12">
  <div class="card card-statistic-1">
    <div class="card-icon bg-primary">
      <i class="far fa-user"></i>
    </div>
    <div class="card-wrap">
      <div class="card-header">
        <h4>Jumlah Seluruh Calon Siswa</h4>
      </div>
      <div class="card-body">
        <?php
        $query = "SELECT COUNT(*) AS total_siswa FROM identitas_siswa";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $totalSiswa = $row['total_siswa'];
        echo $totalSiswa;
        ?>
      </div>
    </div>
  </div>
</div>

  
  <!-- hmm -->

  </div>
</section>

<!-- Penutup Isinya -->



<!-- Footer -->
<?php require("../template/footer.php");?>