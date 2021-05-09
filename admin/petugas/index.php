<?php  
  require 'petugasfunction.php';

  $dea = query("SELECT * FROM petugas WHERE level = 'petugas'");

  // Admin tidak ditampilkan hanya level petugas yang ditampilkan

?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Petugas</h1>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <a href="?p=petugas/tambah_petugas" class="active">
                  <button type="submit" class="btn btn-success btn-sm">Create Data Petugas</button>
                </a>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Nama Petugas</th>
                    <th>Level</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($dea as $d): ?>
                      <tr>
                        <td><?php echo $no;  ?></td>
                        <td><?php echo $d['username']; ?></td>
                        <td><?php echo $d['password']; ?></td>
                        <td><?php echo $d['nama_petugas']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                        <td class="project-actions text-right">
                          <a class="btn btn-warning btn-sm" href="?p=petugas/edit_petugas&id_petugas_dea=<?php echo $d['id_petugas_dea']; ?>">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="?p=petugas/hapus_petugas&id_petugas_dea=<?php echo $d['id_petugas_dea']; ?>" onclick="return confirm('Anda yakin menghapus data?')">
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