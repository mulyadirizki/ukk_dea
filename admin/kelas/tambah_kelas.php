<?php  
  
  require 'kelasfunction.php';

  if (isset($_POST["simpan"])) {
    if (add($_POST) > 0) {
      echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = '?p=kelas/index';
      </script>";
    }
  }

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Kelas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">DataKelas</li>
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
                <h3 class="card-title">Tambah Data Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" placeholder="Nama Kelas">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="KompotensiKeahlian" class="col-sm-2 col-form-label">Kompotensi Keahlian</label>
                    <div class="col-sm-10">
                      <input type="text" name="kompetensi_keahlian" class="form-control" id="KompotensiKeahlian" placeholder="Kompotensi Keahlian">
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