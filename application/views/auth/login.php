
<div class="login-box">
  <div class="login-logo">
    <h1><a href="<?= base_url('auth')?>"><b>E -</b> Score</a></h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h2><p class="login-box-msg">Masuk</p></h2>
	  <?php echo $this->session->flashdata('message');?>
	  <form action="<?= base_url('auth')?>" method="post">
	  <?= form_error('username','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
        </div>
		</div>
		<?= form_error('password','<small class="text-danger">','</small>');?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
      <p class="mb-0">
        <a href="<?= base_url('auth/')?>regis" class="text-center">Belum Punya Akun? Daftar</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


