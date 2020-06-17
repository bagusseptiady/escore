
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
          <a href="<?= base_url('page/lihat')?>" class="nav-link active">
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
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nilai Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('page')?>">Home</a></li>
              <li class="breadcrumb-item active">Nilai Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cari Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!--base_url('page/dafsis') -->
             
              <form role="form" method="post" action="<?= base_url('page/lihat')?>">
                <div class="card-body">
                <div class="row">
                  <div class="form-group col-3">
                    <select class="custom-select" name="sekolah" id="sekolah" required>
						            <option>Jurusan</option>
						            <?php foreach($sekolah as $row):?>
                        <option value="<?php echo $row->id_sek;?>"><?php echo $row->Nama_Jurusan;?></option>
                        <?php endforeach;?>
                    </select>
                  </div>
                  <div class="form-group col-2">
                     <select class="custom-select" name="subsekolah" id="subsekolah" required>
                    <option>Kelas</option>
                     </select>
                  </div>
                  <div class="form-group col-3">
                     <select class="custom-select" name="nam" id="nam" required>
                    <option>Nama</option>
                     </select>
                  </div>
                  <div class="form-group col-2">
                     <select class="custom-select" name="sm" id="sm" required>
                    <option>Semester</option>
                    <option value="Semua">Semua</option>
                    <option value="Semester 1">Semester 1</option>
                    <option value="Semester 2">Semester 2</option>
                     </select>
                  </div>
                  <div class="col-2">
                    <button type="submit" class="btn btn-primary">Cari</button>
                  </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card">
            <div class="card-header">
              <h3 class="card-title">Nilai Harian &nbsp;</h3>
              <form role="form" method="post">
                <div class="row">
                  <div class="col-2">
                    <a class="btn btn-primary btn-sm" href="#"data-toggle="modal" data-target="#exampleModalCenter22">
                    <i class="fas fa-plus"></i>
                    Tambah
                    </a>
                  </div>
                  <?php foreach($namkls as $data){?>
                  <div class="col-3">
                    <input type="text" name="id_nh" value="<?= $data->Nama;?>" disabled>
                  </div>
                  <div class="col-3">
                    <input type="text" name="id_nh" value="<?= $data->Nama_Kelas;?>" disabled>
                  </div>
                  <?php }?>
                  <div class="col-2">
                    <a class="btn btn-success btn-sm" href="<?= base_url('data/excelnh')?>">
                    <i class="fa fa-table"></i>
                    Export Excel
                    </a>
                  </div>
                </div>
              </form>
            </div>
              
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed table-bordered table-striped text-nowrap">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Semester</th>
                  <th>Mata Pelajaran</th>
                  <th>NH 1</th>
                  <th>NH 2</th>
                  <th>NH 3</th>
                  <th>NH 4</th>
                  <th>NH 5</th>
                  <th>KKM</th>
                  <th>Rata - Rata</th>
                  <th style="width: 10%">Atur</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; 
                foreach($d as $data){
                  if($data->Semester&&$data->Matpel!=NULL){?>
                <tr>
                  <td><?=  $no++ ?></td>
                  <td><?= $data->Semester;?></td>
                  <td><?= $data->Nama_Matpel;?></td>
                  <td><?= $data->NH1;?></td>
                  <td><?= $data->NH2;?></td>
                  <td><?= $data->NH3;?></td>
                  <td><?= $data->NH4;?></td>
                  <td><?= $data->NH5;?></td>
                  <td><?= $data->KKMNH;?></td>
                  <td><?= $data->Rata;?></td>
                  <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="#"data-toggle="modal" data-target="#exampleModalCenter4<?= $data->id_nh;?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#"data-toggle="modal" data-target="#exampleModalCenter<?= $data->id_nh;?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
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
                <h3 class="card-title">Nilai Raport PTS &nbsp;</h3>
                <form role="form" method="post">
                <div class="row">
                <div class="col-2">
                <a class="btn btn-primary btn-sm" href="#"data-toggle="modal" data-target="#exampleModalCenter6">
                <i class="fas fa-plus"></i>
                Tambah
                </a>
                </div>
                <?php foreach($namkls as $data){?>
                  <div class="col-3">
                    <input type="text" name="id_nh" value="<?= $data->Nama;?>" disabled>
                  </div>
                  <div class="col-3">
                    <input type="text" name="id_nh" value="<?= $data->Nama_Kelas;?>" disabled>
                  </div>
                <?php }?>
                  <div class="col-2">
                    <a class="btn btn-success btn-sm" href="<?= base_url('data/excelpts')?>">
                    <i class="fa fa-table"></i>
                    Export Excel
                    </a>
                  </div>
                  </div>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed table-bordered table-striped text-nowrap">
                
                <thead>
                <tr>
                  <th>No</th>
                  <th>Semester</th>
                  <th>Mata Pelajaran</th>
                  <th>NH</th>
                  <th>PTS</th>
                  <th>KKM</th>
                  <th>Predikat</th>
                  <th style="width: 10%">Atur</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; 
                foreach($pt as $data){
                  if($data->Semester&&$data->Matpel!=NULL){?>
                <tr>
                  <td><?=  $no++ ?></td>
                  <td><?= $data->Semester;?></td>
                  <td><?= $data->Nama_Matpel;?></td>
                  <td><?= $data->NH;?></td>
                  <td><?= $data->PTS;?></td>
                  <td><?= $data->KKMT;?></td>
                  <td><?= $data->Predikat;?></td>
                  <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="#"data-toggle="modal" data-target="#exampleModalCenter7<?= $data->id_pts;?>">
                      <i class="fas fa-pencil-alt">
                      </i>
                      
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#exampleModalCenterrr<?= $data->id_pts;?>">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
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
                <h3 class="card-title">Nilai Raport PAS &nbsp;</h3>
                <form role="form" method="post">
                <div class="row">
                <div class="col-2">
                <a class="btn btn-primary btn-sm" href="#"data-toggle="modal" data-target="#exampleModalCenter3">
                <i class="fas fa-plus"></i>
                Tambah
                </a>
                </div>
                <?php foreach($namkls as $data){?>
                  <div class="col-3">
                    <input type="text" name="id_nh" value="<?= $data->Nama;?>" disabled>
                  </div>
                  <div class="col-3">
                    <input type="text" name="id_nh" value="<?= $data->Nama_Kelas;?>" disabled>
                  </div>
                <?php }?>
                  <div class="col-2">
                    <a class="btn btn-success btn-sm" href="<?= base_url('data/excelpas')?>">
                    <i class="fa fa-table"></i>
                    Export Excel
                    </a>
                  </div>
                  </div>
                </form>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed table-bordered table-striped text-nowrap">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Semester</th>
                  <th>Mata Pelajaran</th>
                  <th>PAS</th>
                  <th>KKM</th>
                  <th>Nilai Pengetahuan</th>
                  <th>KKM</th>
                  <th>Nilai Keterampilan</th>
                  <th>KKM</th>
                  <th>Predikat</th>
                  <th style="width: 10%">Atur</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; 
                foreach($dl as $data){
                  if($data->Semester&&$data->Matpel!=NULL){?>
                <tr>
                  <td><?=  $no++ ?></td>
                  <td><?= $data->Semester;?></td>
                  <td><?= $data->Nama_Matpel;?></td>
                  <td><?= $data->PAS;?></td>
                  <td><?= $data->KKMA;?></td>
                  <td><?= $data->NP;?></td>
                  <td><?= $data->KKM;?></td>
                  <td><?= $data->NK;?></td>
                  <td><?= $data->KKM2;?></td>
                  <td><?= $data->Predikat;?></td>
                  <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="#"data-toggle="modal" data-target="#exampleModalCenter5<?= $data->id_raport;?>">
                      <i class="fas fa-pencil-alt">
                      </i>
                      
                      Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#exampleModalCenterr<?= $data->id_raport;?>">
                      <i class="fas fa-trash">
                      </i>
                      Delete
                    </a>
                  </td>
                  </tr>
                  <?php } else{?>
                <?php }?>
                <?php }?>
                </tbody>
                </table>
                </div>
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
<?php foreach($d as $data){?>
<div class="modal fade" id="exampleModalCenter<?= $data->id_nh;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
      <form role="form" method="post" action="<?= base_url('data/hapus')?>">
      <input type="hidden" name="id_nh" value="<?= $data->id_nh;?>">
      <a href=<?= base_url('data/hapus')?>><button type="submit" class="btn btn-danger col-5" >Ya</button></a>
      <button type="button" class="btn btn-secondary col-5" data-dismiss="modal">Tidak</button>
      </div>
      </div>
      </form>
    </div>
  </div>
</div>
<?php }?>
<?php foreach($dl as $data){?>
<div class="modal fade" id="exampleModalCenterr<?= $data->id_raport;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
      <form role="form" method="post" action="<?= base_url('data/hapus2')?>">
      <input type="hidden" name="id_raport" value="<?= $data->id_raport;?>">
      <a href=<?= base_url('data/hapus2')?>><button type="submit" class="btn btn-danger col-5" >Ya</button></a>
      <button type="button" class="btn btn-secondary col-5" data-dismiss="modal">Tidak</button>
      </div>
      </div>
      
      </form>
    </div>
  </div>
</div>
<?php }?>
<?php foreach($pt as $data){?>
<div class="modal fade" id="exampleModalCenterrr<?= $data->id_pts;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
      <form role="form" method="post" action="<?= base_url('data/hapus2')?>">
      <input type="hidden" name="id_pts" value="<?= $data->id_pts;?>">
      <a href=<?= base_url('data/hapus4')?>><button type="submit" class="btn btn-danger col-5" >Ya</button></a>
      <button type="button" class="btn btn-secondary col-5" data-dismiss="modal">Tidak</button>
      </div>
      </div>
      
      </form>
    </div>
  </div>
</div>
<?php }?>
<?php foreach($d as $data){?>
<div class="modal fade" id="exampleModalCenter22" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Tambah Nilai Harian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open_multipart('data/tambah');?>
          <div class="form-group row">
            <label for="semester" class="col-sm-4 col-form-label">Semester</label>
            <div class="col-sm-8">
              <select class="custom-select" name="semester" id="semester" required>
                <option>Semester</option>
                <option value="Semester 1">Semester 1</option>
                <option value="Semester 2">Semester 2</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="matpel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-8">
              <select class="custom-select" name="matpel" id="matpel" required>
                <option>Mata Pelajaran</option>
                <?php foreach($mt as $row):?>
                <option value="<?php echo $row->id_mt;?>"><?php echo $row->Nama_Matpel;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nh1" class="col-sm-4 col-form-label">Nilai Harian 1</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nh1" name="nh1" placeholder="Nilai Harian 1" autocomplete="off">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="nh2" class="col-sm-4 col-form-label">Nilai Harian 2</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nh2" name="nh2" placeholder="Nilai Harian 2" autocomplete="off">
              </div>
          </div>
          
          <div class="form-group row">
            <label for="nh3" class="col-sm-4 col-form-label">Nilai Harian 3</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nh3" name="nh3" placeholder="Nilai Harian 3"autocomplete="off">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="nh4" class="col-sm-4 col-form-label">Nilai Harian 4</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nh4" name="nh4" placeholder="Nilai Harian 4" autocomplete="off">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="nh5" class="col-sm-4 col-form-label">Nilai Harian 5</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nh5" name="nh5" placeholder="Nilai Harian 5" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="pas" class="col-sm-4 col-form-label">KKM</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="kkmnh" name="kkmnh" placeholder="KKM Nilai Harian" autocomplete="off">
            </div>
          </div>
          <input type="hidden" name="user_id" value="<?= $data->user_id;?>">
          <div class="form-group row">
            <div class="offset-sm-0 col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
            </div>
          </div>
      <?= form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php foreach($pt as $data){?>
<div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Tambah Nilai Raport PTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open_multipart('data/tambah3');?>
          <div class="form-group row">
            <label for="semester" class="col-sm-4 col-form-label">Semester</label>
            <div class="col-sm-8">
              <select class="custom-select" name="semester" id="semester" required>
                <option>Semester</option>
                <option value="Semester 1">Semester 1</option>
                <option value="Semester 2">Semester 2</option>
              </select>
            </div>
          </div>
          <?= form_error('matpel','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="matpel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-8">
              <select class="custom-select" name="matpel" id="matpel" required>
                <option>Mata Pelajaran</option>
                <?php foreach($mt as $row):?>
                <option value="<?php echo $row->id_mt;?>"><?php echo $row->Nama_Matpel;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="nh" class="col-sm-4 col-form-label">Nilai Harian</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nh" name="nh" placeholder="Rata-rata Nilai Harian" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="pts" class="col-sm-4 col-form-label">PTS</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="pts" name="pts" placeholder="Nilai PTS" autocomplete="off">
              </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="pas" class="col-sm-4 col-form-label">KKM</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="kkmt" name="kkmt" placeholder="KKM Nilai PTS"  autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="predikat" class="col-sm-4 col-form-label">Predikat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="predikat" name="predikat" placeholder="Predikat Nilai"  autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-0 col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
            </div>
          </div>
          <input type="hidden" name="id_us" value="<?= $data->id_us;?>">
      <?= form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php foreach($dl as $data){?>
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Tambah Nilai Raport PAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open_multipart('data/tambah2');?>
          <div class="form-group row">
            <label for="semester" class="col-sm-4 col-form-label">Semester</label>
            <div class="col-sm-8">
              <select class="custom-select" name="semester" id="semester" required>
                <option>Semester</option>
                <option value="Semester 1">Semester 1</option>
                <option value="Semester 2">Semester 2</option>
              </select>
            </div>
          </div>
          <?= form_error('matpel','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="matpel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-8">
              <select class="custom-select" name="matpel" id="matpel" required>
                <option>Mata Pelajaran</option>
                <?php foreach($mt as $row):?>
                <option value="<?php echo $row->id_mt;?>"><?php echo $row->Nama_Matpel;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="pas" class="col-sm-4 col-form-label">PAS</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pas" name="pas" placeholder="Nilai PAS"autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="pas" class="col-sm-4 col-form-label">KKM</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="kkma" name="kkma" placeholder="KKM Nilai PAS"  autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="np" class="col-sm-4 col-form-label">Nilai Pengetahuan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="np" name="np" placeholder="Nilai Pengetahuan" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="kkm" class="col-sm-4 col-form-label">KKM</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="kkm" name="kkm" placeholder="Nilai KKM" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="nk" class="col-sm-4 col-form-label">Nilai Keterampilan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nk" name="nk" placeholder="Nilai Keterampilan" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="kkm2" class="col-sm-4 col-form-label">KKM</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="kkm2" name="kkm2" placeholder="Nilai KKM" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="predikat" class="col-sm-4 col-form-label">Predikat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="predikat" name="predikat" placeholder="Predikat Nilai"  autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-0 col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
            </div>
          </div>
          <input type="hidden" name="uid" value="<?= $data->uid;?>">
      <?= form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php foreach($d as $data){?>
<div class="modal fade" id="exampleModalCenter4<?= $data->id_nh;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Edit Nilai Harian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open_multipart('data/ed');?>
          <div class="form-group row">
            <label for="semester" class="col-sm-4 col-form-label">Semester</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester" value="<?= $data->Semester;?>" autocomplete="off" >
            </div>
          </div>
          <div class="form-group row">
            <label for="matpel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-8">
              <select class="custom-select" name="matpel" id="matpel" required>
                <option value="<?= $data->Nama_Matpel;?>"><?= $data->Nama_Matpel;?></option>
                <?php foreach($mt as $row):?>
                <option value="<?php echo $row->id_mt;?>"><?php echo $row->Nama_Matpel;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nh1" class="col-sm-4 col-form-label">Nilai Harian 1</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nh1" name="nh1" placeholder="Nilai Harian 1" value="<?= $data->NH1;?>" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="nh2" class="col-sm-4 col-form-label">Nilai Harian 2</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="nh2" name="nh2" placeholder="Nilai Harian 2" value="<?= $data->NH2;?>" autocomplete="off">
              </div>
          </div>
          <div class="form-group row">
            <label for="nh3" class="col-sm-4 col-form-label">Nilai Harian 3</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nh3" name="nh3" placeholder="Nilai Harian 3" value="<?= $data->NH3;?>" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="nh4" class="col-sm-4 col-form-label">Nilai Harian 4</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nh4" name="nh4" placeholder="Nilai Harian 4" value="<?= $data->NH4;?>" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label for="nh5" class="col-sm-4 col-form-label">Nilai Harian 5</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nh5" name="nh5" placeholder="Nilai Harian 5" value="<?= $data->NH5;?>" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="kkmnh" class="col-sm-4 col-form-label">KKM</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="kkmnh" name="kkmnh" placeholder="KKM Nilai Harian" value="<?= $data->KKMNH;?>" autocomplete="off">
              </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-0 col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
            </div>
          </div>
          <input type="hidden" name="user_id" value="<?= $data->user_id;?>">
          <input type="hidden" name="idnh" value="<?= $data->id_nh;?>">
      <?= form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php foreach($pt as $data){?>
<div class="modal fade" id="exampleModalCenter7<?= $data->id_pts;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Edit Nilai Raport PTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open_multipart('data/ed4');?>
          <div class="form-group row">
            <label for="semester" class="col-sm-4 col-form-label">Semester</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester" value="<?= $data->Semester;?>" autocomplete="off" disabled>
            </div>
          </div>
          <?= form_error('matpel','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="matpel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-8">
              <select class="custom-select" name="matpel" id="matpel" required>
                <option value="<?= $data->Nama_Matpel;?>"><?= $data->Nama_Matpel;?></option>
                <?php foreach($mt as $row):?>
                <option value="<?php echo $row->id_mt;?>"><?php echo $row->Nama_Matpel;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="nh" class="col-sm-4 col-form-label">Nilai Harian</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nh" name="nh" placeholder="Rata-rata Nilai Harian" value="<?= $data->NH;?>" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="pts" class="col-sm-4 col-form-label">PTS</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="pts" name="pts" placeholder="Nilai PTS" value="<?= $data->PTS;?>" autocomplete="off">
              </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="kkmt" class="col-sm-4 col-form-label">KKM</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="kkmt" name="kkmt" placeholder="KKM Nilai PTS" value="<?= $data->KKMT;?>" autocomplete="off">
              </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="predikat" class="col-sm-4 col-form-label">Predikat</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="predikat" name="predikat" placeholder="Predikat Nilai" value="<?= $data->Predikat;?>" autocomplete="off">
              </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-0 col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
            </div>
          </div>
          <input type="hidden" name="id_us" value="<?= $data->id_us;?>">
          <input type="hidden" name="idp" value="<?= $data->id_pts;?>">
      <?= form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php foreach($dl as $data){?>
<div class="modal fade" id="exampleModalCenter5<?= $data->id_raport;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" >Edit Nilai Raport PAS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?= form_open_multipart('data/ed2');?>
          <div class="form-group row">
            <label for="semester" class="col-sm-4 col-form-label">Semester</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester" value="<?= $data->Semester;?>" autocomplete="off" disabled>
            </div>
          </div>
          <?= form_error('matpel','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="matpel" class="col-sm-4 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-8">
              <select class="custom-select" name="matpel" id="matpel" required>
                <option value="<?= $data->Nama_Matpel;?>"><?= $data->Nama_Matpel;?></option>
                <?php foreach($mt as $row):?>
                <option value="<?php echo $row->id_mt;?>"><?php echo $row->Nama_Matpel;?></option>
                <?php endforeach;?>
              </select>
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="pas" class="col-sm-4 col-form-label">PAS</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="pas" name="pas" placeholder="Nilai PAS" value="<?= $data->PAS;?>" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="pas" class="col-sm-4 col-form-label">KKM</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="kkma" name="kkma" placeholder="KKM Nilai PAS" value="<?= $data->KKMA;?>" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="np" class="col-sm-4 col-form-label">Nilai Pengetahuan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="np" name="np" placeholder="Nilai Pengetahuan" value="<?= $data->NP;?>" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="kkm" class="col-sm-4 col-form-label">KKM</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="kkm" name="kkm" placeholder="Nilai KKM" value="<?= $data->KKM;?>" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="nk" class="col-sm-4 col-form-label">Nilai Keterampilan</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="nk" name="nk" placeholder="Nilai Keterampilan" value="<?= $data->NK;?>" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="kkm2" class="col-sm-4 col-form-label">KKM</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="kkm2" name="kkm2" placeholder="Nilai KKM" value="<?= $data->KKM2;?>" autocomplete="off">
            </div>
          </div>
          <?= form_error('nilai','<small class="text-danger">','</small>');?>
          <div class="form-group row">
            <label for="predikat" class="col-sm-4 col-form-label">Predikat</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="predikat" name="predikat" placeholder="Predikat Nilai" value="<?= $data->Predikat;?>" autocomplete="off">
              </div>
          </div>
          <div class="form-group row">
            <div class="offset-sm-0 col-sm-10">
              <button type="submit" class="btn btn-danger">Simpan</button>
            </div>
          </div>
          <input type="hidden" name="uid" value="<?= $data->uid;?>">
          <input type="hidden" name="idr" value="<?= $data->id_raport;?>">
      <?= form_close();?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php }?>
  