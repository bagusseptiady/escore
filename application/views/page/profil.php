
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
      <li class="nav-item active  d-none d-sm-inline-block">
        <a href="<?= base_url('page/profil')?>" class="nav-link">Profil</a>
      </li>
      <?php echo $this->session->flashdata('message');?>
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
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
        <img src="<?= base_url();?>assets/foto/<?= $data->Foto;?>" class="img-circle elevation-2" alt="User Image" height="100px">
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
          <a href="<?= base_url('page/kalender')?>" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Kalender
             
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
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('page')?>">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                
                <?php foreach($detail as $data){?>
                <img src="<?= base_url();?>assets/foto/<?= $data->Foto;?>" class="profile-user-img img-fluid img-circle" alt="User Image">
                <?php }?>
                
                </div>

                <h3 class="profile-username text-center"><?php echo $this->session->userdata('Nama'); ?></h3>

                <p class="text-muted text-center"><?php echo $this->session->userdata('Level'); ?></p>
                
                <ul class="list-group list-group-unbordered mb-3">
                <?php foreach($detail as $data){?>
                  <li class="list-group-item">
                    <b>Mata Pelajaran</b> <a class="float-right"><?= $data->Matpelguru;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Kelas</b> <a class="float-right"><?= $data->Kelas2;?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right"><?= $data->Username;?></a>
                  </li>
                  <?php }?>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Tentang</a></li>
              
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Data</a></li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="card card-primary">
                    <!-- /.card-header -->
                      <div class="card-body"
                          <?php foreach($detail as $data){?>>
                          <strong><i class="fas fa-book mr-1"></i> Sekolah</strong>
                          <p class="text-muted">
                          <?= $data->Sekolah;?>
                          </p>
                          <hr>
                          <strong><i class="fas fa-map-marker-alt mr-1"> Alamat</i></strong>
                          <p class="text-muted"><?= $data->Alamat;?></p>
                          <hr>
                          <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                          <p class="text-muted"><?= $data->Email;?></p>
                          <hr>
                          <strong><i class="fas fa-phone mr-1"></i> Nomor Telepon</strong>
                          <p class="text-muted">0<?= $data->Notlp;?></p>
                          <hr>
                          <?php }?>              
                        </div>
              <!-- /.card-body -->
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                  <?= form_open_multipart('data/edit2');?>
                      <div class="form-group row">
                        <?php foreach($deta as $data){?>
                          
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" name="nama" placeholder="Nama Lengkap" value="<?= $data->Nama;?>" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputNotlp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputNotlp" name="notlp" placeholder="Nomor Telepon" value="0<?= $data->Notlp;?>"autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email" value="<?= $data->Email;?>"autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputUser" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputUser" name="username" placeholder="Username" value="<?= $data->Username;?>"autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputPassword" name="password" placeholder="Password" value="<?= $data->Password;?>"autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputAlamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputAlamat" name="alamat" placeholder="Alamat" value="<?= $data->Alamat;?>"autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputFoto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputFoto" name="foto" placeholder="Foto" value="<?= $data->Foto;?>" disabled>
                        </div>
                        <div class="col-sm-5">
                          <input type="file" class="form-control" id="inputFoto" name="foto2" placeholder="Foto" value="<?= $data->Foto;?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSekul" class="col-sm-2 col-form-label">Sekolah</label>
                        <div class="col-sm-10">
                        <select class="custom-select" name="sekul" id="inputSekul" >
                            <option value="<?= $data->Sekolah;?>" selected><?= $data->Sekolah;?></option>
                            </select>
                        </div>
                      </div>
                      <?php }?>
                      <?php foreach($detail as $data){?>
                      <div class="form-group row">
                        <label for="inputMatpel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputMatpel" name="matpel" placeholder="Mata Pelajaran" value="<?= $data->Matpelguru;?>"autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputKelas" class="col-sm-2 col-form-label">Kelas</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputKelas" name="kelas" placeholder="Kelas" value="<?= $data->Kelas2;?>"autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Simpan</button>
                        </div>
                      </div>
                      <?php }?>
                      <?= form_close();?>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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

