<?php  
  session_start();

  include 'conn/koneksi.php';


  if (isset($_POST["login"])) {
      $nisn = $_POST['nisn'];

      $query = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn = '$nisn' ");
      $data = mysqli_fetch_assoc($query);

      if (mysqli_num_rows($query) === 1) {
          $_SESSION["nisn"] = $nisn;
          $_SESSION["data"] = $data;

          header("location: siswa");
      }

      $error = true;
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pembayaran SPP Online</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="" class="h1"><b>Pembayaran</b> SPP</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Masukan NISN</p>
        <?php if(isset($error)) : ?>
          <p style="color: red; font-style: italic; text-align: center;">NISN Tidak Terdaftar</p>
        <?php endif; ?>
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="number" name="nisn" class="form-control" placeholder="Masukan NISN">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" name="login" class="btn btn-primary btn-block">Masuk</button>
            </div>
            <!-- /.col -->
            <div class="col-12">
              <font style="font-family: arrial; text-align: center;">Apakah Anda Seorang Petugas? login 
                <a href="login_petugas.php">Disini</a>
              </font>
            </div>
          </div>
        </form>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
