<?php  
  
  require 'pembayaranfunction.php';

  $dea = query("SELECT * FROM pembayaran 
                INNER JOIN petugas ON pembayaran.id_petugas_dea = petugas.id_petugas_dea 
                INNER JOIN siswa ON pembayaran.nisn = siswa.nisn
                INNER JOIN spp ON pembayaran.id_spp_dea = spp.id_spp_dea");

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pembayaran SPP</h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pembayaran SPP</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="?p=pembayaran/tambah_pembayaran" class="active">
                  <button type="submit" class="btn btn-success btn-sm">Create Data Pembayaran</button>
                </a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Petugas</th>
                    <th>NISN | Nama Siswa</th>
                    <th>Tanggal Bayar</th>
                    <th>Bulan Dibayar</th>
                    <th>Tahun Dibayar</th>
                    <th>SPP</th>
                    <th>Jumlah Bayar</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($dea as $d): ?>
                      <tr>
                        <td><?php echo $no;  ?></td>
                        <td><?php echo $d['nama_petugas']; ?></td>
                        <td><?php echo $d['nisn']; ?> | <?php echo $d['nama'] ?></td>
                        <td><?php echo $d['tgl_bayar']; ?></td>
                        <td><?php echo $d['bulan_dibayar']; ?></td>
                        <td><?php echo $d['tahun_dibayar']; ?></td>
                        <td>Tahun <?php echo $d['tahun']; ?> | Nominal Rp.<?php echo number_format($d['nominal']); ?></td>
                        <td>Rp.<?php echo number_format($d['jumlah_bayar']); ?></td>
                        <td class="project-actions text-right">
                          <a class="btn btn-warning btn-sm" href="?p=pembayaran/edit_pembayaran&id_pembayaran_dea=<?php echo $d['id_pembayaran_dea']; ?>">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?p=pembayaran/hapus_pembayaran&id_pembayaran_dea=<?php echo $d['id_pembayaran_dea']; ?>" onclick="return confirm('Anda yakin menghapus data?')">
                              <i class="fas fa-trash"></i>
                              Delete
                          </a>
                      </td>
                      </tr>
                    <?php $no++ ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->