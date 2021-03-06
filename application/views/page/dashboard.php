
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url('page')?>" class="nav-link active">Home</a>
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
    <img src="<?= base_url('assets/')?>dist/img/escores.png" alt="E - Score Logo" class="brand-image img-circle elevation-3"
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
      <div class="info">
        <a href="<?= base_url('page/profil')?>" class="d-block"><?= $data->Nama;?></a>
      </div>
      <?php }?>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('page')?>" class="nav-link active">
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
          <a href="<?= base_url('page/absen')?>" class="nav-link">
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
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $jssw; ?></h3>

              <p>Jumlah Siswa</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-contacts"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $jkls; ?></h3>

              <p>Jumlah Kelas</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $nkssa+$nkss2a+$nkss3a+$nkss4a+$nkss5a+$nkss6a+$nkss7a+$nkss8a+$nkss9a; ?></h3>

              <p>Nilai Sudah Diisi</p>
            </div>
            <div class="icon">
              <i class="ion ion-document-text"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $nkss+$nkss2+$nkss3+$nkss4+$nkss5+$nkss6+$nkss7+$nkss8+$nkss9; ?></h3>

              <p>Nilai Belum Diisi</p>
            </div>
            <div class="icon">
              <i class="ion ion-document"></i>
            </div>
            
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
      <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Siswa Dengan Nilai Sempurna</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Semester</th>
                      <th>Matpel</th>
                      <th>Ket</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($nspm as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH1</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nspm2 as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH2</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nspm3 as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH3</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nspm4 as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH4</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nspm5 as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH5</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nspm6 as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>PTS</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nspm7 as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>PAS</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nspm8 as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>Nilai Pengetahuan</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nspm9 as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>Nilai Keterampilan</td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Nilai Belum Diisi dan Nilai 0</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Nama Siswa</th>
                      <th>Kelas</th>
                      <th>Semester</th>
                      <th>Matpel</th>
                      <th>Ket</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($nksg as $data){ ?>
                    <tr>
                      <td><?= $data->Nama?></td>
                      <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH1</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nksg2 as $data){ ?>
                    <tr>
                    <td><?= $data->Nama?></td>
                    <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH2</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nksg3 as $data){ ?>
                    <tr>
                    <td><?= $data->Nama?></td>
                    <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH3</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nksg4 as $data){ ?>
                    <tr>
                    <td><?= $data->Nama?></td>
                    <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH4</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nksg5 as $data){ ?>
                    <tr>
                    <td><?= $data->Nama?></td>
                    <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>NH5</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nksg6 as $data){ ?>
                    <tr>
                    <td><?= $data->Nama?></td>
                    <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>PTS</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nksg7 as $data){ ?>
                    <tr>
                    <td><?= $data->Nama?></td>
                    <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>PAS</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nksg8 as $data){ ?>
                    <tr>
                    <td><?= $data->Nama?></td>
                    <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>Nilai Pengetahuan</td>
                    </tr>
                    <?php }?>
                    <?php foreach($nksg9 as $data){ ?>
                    <tr>
                    <td><?= $data->Nama?></td>
                    <td><?= $data->Nama_Kelas?></td>
                      <td><?= $data->Semester?></td>
                      <td><?= $data->Nama_Matpel?></td>
                      <td>Nilai Keterampilan</td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-6">
            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"> </i>
                   Kalender
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <!-- Map card -->
          <div class="col-6" hidden>
            <div class="card bg-gradient-primary" >
              <div class="card-footer bg-transparent" >
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
          </div>
        <!-- right col -->
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

<!-- jQuery -->

