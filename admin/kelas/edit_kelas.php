<?php  
  
  require 'kelasfunction.php';

  $id_kelas_dea = $_GET['id_kelas_dea'];

  $dea = query("SELECT * FROM kelas WHERE id_kelas_dea = '$id_kelas_dea' ")[0];

  if (isset($_POST["edit"])) {
    if (edit($_POST) > 0) {
      echo "<script>
        alert('data berhasil di Ubah!');
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
            <h1>Edit Data Kelas</h1>
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
                <h3 class="card-title">Edit Data Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <input type="hidden" value="<?php echo $dea['id_kelas_dea'] ?>" name="id_kelas_dea">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama_kelas" class="form-control" id="nama_kelas" value="<?php echo $dea["nama_kelas"] ?>" placeholder="Nama Kelas">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="KompotensiKeahlian" class="col-sm-2 col-form-label">Kompotensi Keahlian</label>
                    <div class="col-sm-10">
                      <input type="text" name="kompetensi_keahlian" class="form-control" id="KompotensiKeahlian" value="<?php echo $dea["kompetensi_keahlian"] ?>" placeholder="Kompotensi Keahlian">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="edit" class="btn btn-info float-right">Simpan Data</button>
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