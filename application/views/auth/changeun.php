
<div class="login-box">
  <div class="login-logo">
    <h1><a href="<?= base_url('auth')?>"><b>E -</b> Score</a></h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h2><p class="login-box-msg">Ubah Username</p></h2>
	  <?php echo $this->session->flashdata('message');?>
	  <form action="<?= base_url('auth/changeun')?>" method="post">
	  <?= form_error('email','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
        </div>
		</div>
        <?= form_error('username','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username Baru" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user-circle"></span>
            </div>
        </div>
		</div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-key"></span>
            </div>
        </div>
		</div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Ubah</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
      <p class="mb-0">
      <a href="<?= base_url('auth/')?>change" class="text-center">Lupa Password? Ganti</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('auth')?>" class="text-center">Kembali ke Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


