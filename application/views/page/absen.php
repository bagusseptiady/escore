
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url('page')?>" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('page/profil')?>" class="nav-link">Profil</a>
        
      </li>
    <?php echo $this->session->flashdata('message');?>
  </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('auth/logout')?>">
        Logout <i class="fas fa-sign-out-alt"></i>
      </a>
    </li>
  </ul>

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?= base_url('page')?>" class="brand-link">
    <img src="<?= base_url('assets/')?>dist/img/escore.png" alt="E - Score Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light"><b>E - Score</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <?php foreach($detail as $data){?>
      <div class="image">
        <img src="<?= base_url();?>assets/foto/<?= $data->Foto;?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <?php }?>
      <div class="info">
        <a href="<?= base_url('page/profil')?>" class="d-block"><?php echo $this->session->userdata('Nama'); ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('page')?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('page/daftar')?>" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Daftar Siswa
              
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('page/lihat')?>" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Nilai Siswa
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('page/absen')?>" class="nav-link active">
            <i class="nav-icon fas fa-address-book"></i>
            <p>
              Rekap Absen
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Rekap Absen Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('page')?>">Home</a></li>
              <li class="breadcrumb-item active">Rekap Absen Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Cari Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!--base_url('page/dafsis') -->
             
              <form role="form" method="post" action="<?=base_url('page/absen') ?> ">
                <div class="card-body">
                <div class="row">
                  <div class="form-group col-5">
                    <select class="custom-select" name="sekolah" id="sekolah" required>
						          <option>Jurusan</option>
						          <?php foreach($sekolah as $row):?>
                        <option value="<?php echo $row->id_sek;?>"><?php echo $row->Nama_Jurusan;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group col-5">
                     <select class="custom-select" name="subsekolah" id="subsekolah" required>
                    <option>Kelas</option>
                     </select>
                  </div>
                  <div class="col-2">
                    <button type="submit" class="btn btn-warning">Cari</button>
                  </div>
                </div>
                </div>
              </form>
            </div>
            <div class="card">
            <div class="card-header">
              <h3 class="card-title">Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered table-striped text-nowrap">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Semester</th>
                  <th>Alpa</th>
                  <th>Sakit</th>
                  <th>Izin</th>
                  <th>Semester</th>
                  <th>Alpa</th>
                  <th>Sakit</th>
                  <th>Izin</th>
                  <th style="width: 20%">Alat</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php $no=1; 
                foreach($de as $data){?>
                <tr>
                  <td><?=  $no++ ?></td>
                  <td><?= $data->Nama;?></td>
                  <td><?= $data->Nama_Kelas;?></td>
                  <td><?= $data->Semester1;?></td>
                  <td><?= $data->Alpa;?></td>
                  <td><?= $data->Sakit;?></td>
                  <td><?= $data->Izin;?></td>
                  <td><?= $data->Semester2;?></td>
                  <td><?= $data->Alpa2;?></td>
                  <td><?= $data->Sakit2;?></td>
                  <td><?= $data->Izin2;?></td>
                  <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#"data-toggle="modal" data-target="#modaledit<?= $data->id_absen;?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#"data-toggle="modal" data-target="#modalhapus<?= $data->id_absen;?>">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                          </a>
                      </td>
                  </tr>
                <?php }?>
                </tbody>
                </table>
            </div>
            </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2020 <a href="<?= base_url('page')?>">E - Score | Xyron</a>.</strong>
  
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php foreach($de as $data){?>
<div class="modal fade" id="modalhapus<?= $data->id_absen;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h5 class="text-center"> Apakah Anda Yakin?<h5>
      <div class="text-center">
      <form role="form" method="post" action="<?= base_url('data/hapus3')?>">
      <input type="hidden" name="id_absen" value="<?= $data->id_absen;?>">
      <a href=<?= base_url('data/hapus3')?>><button type="submit" class="btn btn-danger col-5" >Ya</button></a>
      <button type="button" class="btn btn-secondary col-5" data-dismiss="modal">Tidak</button>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>
<?php }?>
<?php foreach($de as $data){?>
<div class="modal fade" id="modaledit<?= $data->id_absen;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Edit Rekap Absen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open_multipart('data/ed3');?>
          <div class="form-group row">
            <label for="semester1" class="col-sm-4 col-form-label">Semester 1</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="semester1" name="semester1" placeholder="Semester 1" value="<?= $data->Semester1;?>" autocomplete="off" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="alpa" class="col-sm-4 col-form-label">Alpa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alpa" name="alpa" placeholder="Absen Alpa" value="<?= $data->Alpa;?>" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="sakit" class="col-sm-4 col-form-label">Sakit</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="sakit" name="sakit" placeholder="Absen Sakit" value="<?= $data->Sakit;?>" autocomplete="off">
              </div>
          </div>
          <div class="form-group row">
            <label for="izin" class="col-sm-4 col-form-label">Izin</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="izin" name="izin" placeholder="Absen Izin" value="<?= $data->Izin;?>" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="semester2" class="col-sm-4 col-form-label">Semester 2</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="semester2" name="semester2" placeholder="Semester 2" value="<?= $data->Semester2;?>" autocomplete="off" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="alpa2" class="col-sm-4 col-form-label">Alpa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="alpa2" name="alpa2" placeholder="Absen Alpa" value="<?= $data->Alpa2;?>" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="sakit2" class="col-sm-4 col-form-label">Sakit</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="sakit2" name="sakit2" placeholder="Absen Sakit" value="<?= $data->Sakit2;?>" autocomplete="off">
              </div>
          </div>
          <div class="form-group row">
            <label for="izin2" class="col-sm-4 col-form-label">Izin</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="izin2" name="izin2" placeholder="Absen Izin2" value="<?= $data->Izin2;?>" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-0 col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
            </div>
          </div>
          <input type="hidden" name="usr_id" value="<?= $data->usr_id;?>">
          <input type="hidden" name="id_absen" value="<?= $data->id_absen;?>">
      <?= form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php }?>

            
           