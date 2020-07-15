<!-- Start Login Form -->
<?php $this->view("layouts/components/_messages.php") ?>
<form action="<?= base_url('login/auth') ?>" method="POST">
	<div class="input-group mb-3">
    <input type="text" name="username" class="form-control py-4" required="" placeholder="Username">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-envelope"></span>
      </div>
    </div>
  </div>
	<div class="input-group mb-3">
    <input type="password" name="password" class="form-control py-4" required="" placeholder="Password">
    <div class="input-group-append">
      <div class="input-group-text">
        <span class="fas fa-lock"></span>
      </div>
    </div>
  </div>
	<div class="row">
		<div class="col-md-12">
			<button class="btn btn-primary btn-block">
				<i class="fas fa-sign-in-alt fa-fw"></i>
				Sign In
			</button>
		</div>
	</div>
	<!-- End Login Form -->
</form>
