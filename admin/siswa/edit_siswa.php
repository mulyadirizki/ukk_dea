<?php  
  
  require 'siswafunction.php';

  $id_kelas_dea = $_GET["id_kelas_dea"];
  $nisn = $_GET['nisn'];
  $dea = query("SELECT * FROM siswa WHERE nisn = '$nisn' ")[0];

  if (isset($_POST["simpan"])) {
    if (edit($_POST) > 0) {
      echo "<script>
        alert('data berhasil di Ubah!');
        document.location.href = '?p=siswa/home&id_kelas_dea=$id_kelas_dea';
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
            <h1>Ubah Data Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">DataSiswa</li>
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
                <h3 class="card-title">Ubah Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                      <input type="number" name="nisn" value="<?php echo $dea['nisn']; ?>" class="form-control" id="nisn" placeholder="NISN">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                    <div class="col-sm-10">
                      <input type="number" name="nis" value="<?php echo $dea['nis']; ?>" class="form-control" id="nis" placeholder="NIS">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" value="<?php echo $dea['nama']; ?>" class="form-control" id="nama" placeholder="Nama Siswa">
                    </div>
                  </div>
                  <input type="hidden" name="id_kelas_dea" value="<?php echo $id_kelas_dea ?>">
                  <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <textarea name="alamat" id="alamat" name="alamat" class="form-control" cols="30" rows="5" placeholder="Alamat"><?php echo $dea["alamat"]; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="no_telp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                    <div class="col-sm-10">
                      <input type="number" name="no_telp" value="<?php echo $dea['no_telp']; ?>" class="form-control" id="no_telp" placeholder="Nomor Telepon">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="id_spp_dea" class="col-sm-2 col-form-label">SPP</label>
                    <div class="col-sm-10">
                      <select name="id_spp_dea" class="form-control" id="id_spp_dea">
                        <?php 
                        $query = "SELECT * FROM spp";
                        $result = mysqli_query($conn, $query);
                        while($d = mysqli_fetch_assoc($result)) : ?>  
                          <option <?php if($d["id_spp_dea"] == $dea["id_spp_dea"]) { echo "selected";} ?> value="<?= $d["id_spp_dea"] ?>">Tahun <?= $d["tahun"]; ?> Nominal Rp.<?php echo number_format($d["nominal"]) ?></option>
                        <?php endwhile; ?>
                      </select>
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