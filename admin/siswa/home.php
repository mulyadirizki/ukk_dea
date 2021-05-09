<?php  
  
  require 'siswafunction.php';

  $id_kelas_dea = $_GET["id_kelas_dea"];
  $dea = query("SELECT * FROM siswa WHERE id_kelas_dea = '$id_kelas_dea' ");

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Siswa</h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="?p=siswa/tambah_siswa&id_kelas_dea=<?php echo $id_kelas_dea ?>" class="active">
                  <button type="submit" class="btn btn-success btn-sm">Create Data Siswa</button>
                </a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($dea as $d): ?>
                      <tr>
                        <td><?php echo $no;  ?></td>
                        <td><?php echo $d['nisn']; ?></td>
                        <td><?php echo $d['nis']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['alamat']; ?></td>
                        <td><?php echo $d['no_telp']; ?></td>
                        <td class="project-actions text-right">
                          <a class="btn btn-warning btn-sm" href="?p=siswa/edit_siswa&id_kelas_dea=<?php echo $id_kelas_dea; ?>&nisn=<?php echo $d['nisn'] ?>">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?p=siswa/hapus_siswa&id_kelas_dea=<?php echo $id_kelas_dea; ?>&nisn=<?php echo $d['nisn'] ?>" onclick="return confirm('Anda yakin menghapus data?')">
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