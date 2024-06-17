<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; PPDB</title>
  <link rel="icon" href="../../assets/img/avatar/icone.png">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="../../assets/bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../assets/dataTables/css/dataTables.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/components.css">

  <!-- General JS Scripts -->
  <script src="../../assets/bootstrap-4/js/jquery-3.3.1.min.js"></script>
  <script src="../../assets/bootstrap-4/js/bootstrap.min.js"></script>
  <script src="../../assets/dataTables/js/jquery.dataTables.js"></script>
  <script src="../../assets/dataTables/js/dataTables.bootstrap4.min.js"></script>

  <!-- Template JS File -->
  <script src="../../assets/js/scripts.js"></script>
  <script src="../../assets/js/custom.js"></script>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8 col-12">
            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>
              <div class="card-body">
                <div class="text-center">
                  <img src="../../assets/img/avatar/logo.png" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
                </div>
                <h4 class="text-dark font-weight-normal text-center">Selamat datang di <span class="font-weight-bold">PPDB</span></h4>
                <p class="text-muted text-center">Sebelum Anda memulai, Anda harus masuk atau mendaftar jika Anda belum memiliki akun.</p>
                <?php
                  if (isset($_SESSION['alert'])) {
                    echo $_SESSION['alert'];
                    unset($_SESSION['alert']);
                  }
                ?>
                <form method="POST" action="../../controller/admin/daftar.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input id="nisn" type="number" class="form-control" name="nisn" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Masukkan NISN anda!
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                      <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
                    </div>
                    <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" tabindex="2" required>
                    <div class="invalid-feedback">
                      Masukkan Tanggal Lahir anda!
                    </div>
                  </div>

                  <div class="form-group text-right">
                    <a href="http://smk-asysyamsuriyyah.sch.id/" class="float-left mt-3">
                      <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" name="loginDataPeserta" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                      Login
                    </button>
                  </div>

                  <div class="mt-5 text-center">
                    Belum punya akun? <a href="daftarSiswa.php">Daftar</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
