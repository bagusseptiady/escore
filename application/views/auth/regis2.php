<div class="register-box">
  <div class="register-logo">
    <h1><a href="<?= base_url('auth/regis2')?>"><b>E -</b> Score</a></h1>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <h2><p class="login-box-msg">Daftar</p></h2>
      <?php echo $this->session->flashdata('message');?>
	  <?php echo form_open_multipart('auth/regis2');?>
	  <?= form_error('name','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
		  <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user-circle"></span>
            </div>
		  </div>
		</div>
		<?= form_error('notlp','<small class="text-danger">','</small>');?>
		<div class="input-group mb-3">
          <input type="text" class="form-control" id="notlp" name="notlp"placeholder="Nomor Telepon"autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
    </div>
    <?= form_error('email','<small class="text-danger">','</small>');?>
    <div class="input-group mb-3">
          <input type="text" class="form-control" id="email" name="email"placeholder="Email"autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
		</div>
		<?= form_error('username','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username"autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
		</div>
		<?= form_error('password','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password"autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('alamat','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marker"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="tl" name="tl" placeholder="Tempat Lahir" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marker"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="date" class="form-control" id="ttl" name="ttl" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar-alt"></span>
            </div>
          </div>
			</div>	
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="foto" name="foto" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-camera"></span>
            </div>
          </div>
        </div>
       
        <?= form_error('matpel','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="matpel" name="matpel" placeholder="Mata Pelajaran"autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-book"></span>
            </div>
          </div>
        </div>
        <?= form_error('kelas','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas"autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-graduation-cap"></span>
            </div>
          </div>
        </div>	
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      <?php echo form_close();?>
      <a href="<?= base_url('auth')?>" class="text-center">Sudah Punya Akun? Masuk</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>