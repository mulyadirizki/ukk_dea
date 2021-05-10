<?php  
  
  require 'pembayaran/pembayaranfunction.php';

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
            <h1>Laporan Pembayaran SPP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">LaporanPembayaranSPP</li>
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
                <h3 class="card-title">Laporan Pembayaran SPP</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-responsive table-bordered table-striped">
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
                    <th>Status</th>
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
                        <?php if($d['jumlah_bayar'] == $d['nominal'] ){ ?>
                          <td><button class="btn btn-success btn-sm">Lunas</button></td>
                        <?php }else { ?>
                          <td><font style="color: darkgreen; font-weight: bold; font-family: Times New Roman">Belum Lunas</font></td>
                        <?php } ?>
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