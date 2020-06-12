
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url('page/siswa')?>" class="nav-link">Home</a>
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
  <a href="<?= base_url('page/siswa')?>" class="brand-link">
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
        <a href="<?= base_url('page/profil2')?>" class="d-block"><?php echo $this->session->userdata('Nama'); ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="<?= base_url('page/siswa')?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('page/harian')?>" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Nilai Harian
              
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('page/raport2')?>" class="nav-link active">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Nilai Raport PTS
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('page/raport')?>" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Nilai Raport PAS
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
            <h1>Nilai Raport PTS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('page/siswa')?>">Home</a></li>
              <li class="breadcrumb-item active">Nilai Raport PTS</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    
            <div class="card">
            <div class="card-header">
              <h3 class="card-title">Nilai Semester 1 </h3>
              <a class="btn btn-primary ml-3" href="<?= base_url('data/cetakpts')?>">Cetak PDF <i class="fa fa-file"></i></a>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered table-striped text-nowrap">
                
                <thead>
                <tr>
                  <th>No</th>
                  <th>Semester</th>
                  <th>Mata Pelajaran</th>
                  <th>Nilai Harian</th>
                  <th>PTS</th>
                  <th>KKM</th>
                  <th>Predikat</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; 
                foreach($dd as $data){
                if($data->Semester&&$data->Matpel!=NULL){?>
                <tr>
                  <td><?=  $no++ ?></td>
                  <td><?= $data->Semester;?></td>
                  <td><?= $data->Nama_Matpel;?></td>
                  <td><?= $data->NH;?></td>
                  <td><?= $data->PTS;?></td>
                  <td><?= $data->KKMT;?></td>
                  <td><?= $data->Predikat;?></td>
                </tr>
                <?php } else{?>
                <?php }?>
                <?php }?>
                </tbody>
                </table>
            </div>
            </div>
            <div class="card">
            <div class="card-header">
              <h3 class="card-title">Nilai Semester 2</h3>
              <a class="btn btn-primary ml-3" href="<?= base_url('data/cetakpts2')?>">Cetak PDF <i class="fa fa-file"></i></a>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover table-bordered table-striped text-nowrap">
                
                <thead>
                <tr>
                  <th>No</th>
                  <th>Semester</th>
                  <th>Mata Pelajaran</th>
                  <th>Nilai Harian</th>
                  <th>PTS</th>
                  <th>KKM</th>
                  <th>Predikat</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; 
                foreach($dq as $data){
                if($data->Semester&&$data->Matpel!=NULL){?>
                <tr>
                  <td><?=  $no++ ?></td>
                  <td><?= $data->Semester;?></td>
                  <td><?= $data->Nama_Matpel;?></td>
                  <td><?= $data->NH;?></td>
                  <td><?= $data->PTS;?></td>
                  <td><?= $data->KKMT;?></td>
                  <td><?= $data->Predikat;?></td>
                </tr>
                <?php } else{?>
                <?php }?>
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

<!-- jQuery -->

            
           