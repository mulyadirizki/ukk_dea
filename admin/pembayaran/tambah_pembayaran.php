<?php  
  
  require 'pembayaranfunction.php';

  if (isset($_POST["simpan"])) {
    if (add($_POST) > 0) {
      echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = '?p=pembayaran/index';
      </script>";
    }
  }

  $usr = $_SESSION['username'];
  $admin = "SELECT * FROM petugas WHERE username = '$usr' ";
  $result = mysqli_query($conn, $admin);
  $dea = mysqli_fetch_assoc($result);

  $riantika = "SELECT max(id_pembayaran_dea) as idTerbesar FROM pembayaran ";
  $r = mysqli_query($conn, $riantika);
  $prameswari = mysqli_fetch_assoc($r);
  $idPembayaran = $prameswari['idTerbesar'];

  $urutan = (int) substr($idPembayaran, 3,3);
  $urutan++;

  $huruf = "S-";
  $idPembayaran = $huruf . sprintf("%03s", $urutan);

?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Pembayaran SPP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">DataPembayaranSPP</li>
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
                <h3 class="card-title">Tambah Data Pembayaran SPP</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <input type="hidden" name="id_pembayaran_dea" value="<?php echo $idPembayaran ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <input type="hidden" name="id_petugas_dea" value="<?php echo $dea['id_petugas_dea'] ?>">
                    <label for="nama_petugas" class="col-sm-2 col-form-label">Nama Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" disabled name="id_petugas_dea" class="form-control" id="nama_petugas" value="<?php echo $dea["nama_petugas"] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nis" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                      <select name="nisn" class="form-control" id="id_spp_dea">
                        <option disabled selected>Pilih NISN</option>
                        <?php 
                        $query = "SELECT * FROM siswa";
                        $result = mysqli_query($conn, $query);
                        while($dea = mysqli_fetch_assoc($result)) : ?>
                          <option value="<?php echo $dea["nisn"] ?>">NISN : <?php echo $dea["nisn"]; ?> | Nama Siswa : <?php echo $dea["nama"]; ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tgl_bayar" class="col-sm-2 col-form-label">Tanggal Bayar</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl_bayar" class="form-control" id="tgl_bayar" placeholder="01">
                    </div>
                  </div>
                  <input type="hidden" name="id_kelas_dea" value="<?php echo $id_kelas_dea ?>">
                  <div class="form-group row">
                    <label for="bulan_dibayar" class="col-sm-2 col-form-label">Bulan Dibayar</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="bulan_dibayar" placeholder="Bulan Dibayar">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tahun_dibayar" class="col-sm-2 col-form-label">Tahun Dibayar</label>
                    <div class="col-sm-10">
                      <input type="text" name="tahun_dibayar" class="form-control" id="tahun_dibayar" placeholder="2021">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="id_spp_dea" class="col-sm-2 col-form-label">SPP</label>
                    <div class="col-sm-10">
                      <select name="id_spp_dea" class="form-control" id="id_spp_dea">
                        <option disabled selected>Pilih SPP</option>
                        <?php 
                        $query = "SELECT * FROM spp";
                        $result = mysqli_query($conn, $query);
                        while($dea = mysqli_fetch_assoc($result)) : ?>
                          <option value="<?php echo $dea["id_spp_dea"] ?>">Tahun <?php echo $dea["tahun"]; ?> | Nominal Rp.<?php echo number_format($dea["nominal"]); ?></option>
                        <?php endwhile; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah_bayar" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                    <div class="col-sm-10">
                      <input type="number" name="jumlah_bayar" class="form-control" id="jumlah_bayar" placeholder="100000">
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