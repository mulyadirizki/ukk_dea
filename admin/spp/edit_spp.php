<?php  
  
  require 'sppfunction.php';

  $id_spp_dea = $_GET["id_spp_dea"];

  $dea = query("SELECT * FROM spp WHERE id_spp_dea = '$id_spp_dea' ")[0];

  if (isset($_POST["simpan"])) {
    if (edit($_POST) > 0) {
      echo "<script>
        alert('data berhasil di Ubah!');
        document.location.href = '?p=spp/index';
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
            <h1>Ubah Data SPP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">DataSPP</li>
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
                <h3 class="card-title">Ubah Data SPP</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <input type="hidden" name="id_spp_dea" value="<?php echo $dea["id_spp_dea"]; ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                      <input type="text" name="tahun" class="form-control" id="tahun" value="<?php echo $dea["tahun"]; ?>" placeholder="2021">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
                    <div class="col-sm-10">
                      <input type="text" name="nominal" class="form-control" id="nominal" value="<?php echo $dea["nominal"]; ?>" placeholder="100.000">
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