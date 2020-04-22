<div class="register-box">
  <div class="register-logo">
    <h1><a href="<?= base_url('auth/regis')?>"><b>E -</b> Score</a></h1>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <h2><p class="login-box-msg">Daftar</p></h2>
      <?php echo $this->session->flashdata('message');?>
	  <?= form_open_multipart('auth/regis');?>
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
          <input type="text" class="form-control" id="notlp" name="notlp"placeholder="Nomor Telepon" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
    </div>
    <?= form_error('email','<small class="text-danger">','</small>');?>
    <div class="input-group mb-3">
          <input type="text" class="form-control" id="email" name="email"placeholder="Email" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
		</div>
		<?= form_error('username','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
		</div>
		<?= form_error('password','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('alamat','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marker"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="foto" name="foto">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-camera"></span>
            </div>
          </div>
        </div>
    <div class="row">
			<div class="col-12">
          <div class="form-group">
            <select class="custom-select" name="sekul" id="sekul" required>
              <option>Sekolah</option>
              <option value = "SMKN 24 Jakarta">SMKN 24 Jakarta</option>
            </select>
          </div>
			</div>
		</div>	
		<div class="row">
			<div class="col-12">
        <div class="form-group">
          <select class="custom-select" name="sekolah" id="sekolah" required>
						<option>Jurusan</option>
						<?php foreach($sekolah as $row):?>
            <option value="<?php echo $row->id_sek;?>"><?php echo $row->Nama_Jurusan;?></option>
            <?php endforeach;?>
          </select>
        </div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
          <div class="form-group">
            <select class="custom-select" name="subsekolah" id="subsekolah" required>
              <option>Kelas</option>
            </select>
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
      <?= form_close();?>
      <a href="<?= base_url('auth')?>" class="text-center">Sudah Punya Akun? Masuk</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>