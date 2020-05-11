
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
          <a href="<?= base_url('page/daftar')?>" class="nav-link active">
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
            <h1>Daftar Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('page')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Cari Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!--base_url('page/dafsis') -->
             
              <form role="form" method="post" action="<?=base_url('page/daftar') ?> ">
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
                    <button type="submit" class="btn btn-success">Cari</button>
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
                  <th>Nomor Telepon</th>
                  <th>Email</th>
                  <th>Detail</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php $no=1; 
                foreach($de as $data){?>
                <tr>
                  <td><?=  $no++ ?></td>
                  <td><?= $data->Nama;?></td>
                  <td><?= $data->Nama_Kelas;?></td>
                  <td>0<?= $data->Notlp;?></td>
                  <td><?= $data->Email;?></td>
                  <td><div class="btn-group btn-group-sm">
                        <a class="btn btn-info" href="#"  data-toggle="modal" data-target="#modal-default<?= $data->id_user;?>"><i class="fas fa-eye"></i></a>
                      </div></td>
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
<?php foreach($de as $data){?>
<div class="modal fade" id="modal-default<?= $data->id_user;?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Profile</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <div class="card card-widget widget-user">
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"><?= $data->Nama;?></h3>
                <h5 class="widget-user-desc"><?= $data->Nama_Jurusan;?></h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="<?= base_url();?>assets/foto/<?= $data->Foto;?>" alt="User Avatar" style="height: 100px">
              </div>
              <div class="card-footer box-profile">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Kelas</b> <a class="float-right"><?= $data->Nama_Kelas;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tempat Lahir</b> <a class="float-right"><?= $data->TL;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Tanggal Lahir</b> <a class="float-right"><?= $data->TTL;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Nomor Telpon</b> <a class="float-right">0<?= $data->Notlp;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= $data->Email;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right"><?= $data->Alamat;?></a>
                  </li>
                </ul>
              </div>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<?php }?>
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

<!-- jQuery -->

            
           