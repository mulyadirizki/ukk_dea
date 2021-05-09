<?php  
  
  require 'petugasfunction.php';

  if (isset($_POST["simpan"])) {
    if (tambah($_POST) > 0) {
      echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = '?p=petugas/index';
      </script>";
    }
  }

  $riantika = "SELECT max(id_petugas_dea) as petugas FROM petugas ";
  $r = mysqli_query($conn, $riantika);
  $prameswari = mysqli_fetch_assoc($r);
  $idPembayaran = $prameswari['petugas'];

  $urutan = (int) substr($idPembayaran, 3,3);
  $urutan++;

  $huruf = "PTG";
  $idPembayaran = $huruf . sprintf("%03s", $urutan);

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Petugas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">DataPetugas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <input type="text" name="id_petugas_dea" value="<?php echo $idPembayaran ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_petugas" class="col-sm-2 col-form-label">Nama Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" placeholder="Nama Petugas">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="simpan" class="btn btn-info float-right">Simpan Data</button>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->