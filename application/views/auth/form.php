<div class="container">
	<div class="row">
		<div class="col-md-6">
			<!-- Start Login Form -->
			<?php if(!empty($this->session->flashdata())){ ?>
				<div class="alert alert-danger"><?= $this->session->flashdata('fail') ?></div>
			<?php } ?>
			<form action="<?= base_url('login/auth') ?>" method="POST">
				<div class="row">
					<div class="col-md-12">
						<label>Username</label>
						<input type="text" name="username" class="form-control" required="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required="">
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						
						<button class="btn btn-primary btn-block">Login</button>
					</div>
				</div>
				<!-- End Login Form -->
			</form>
		</div>
	</div>
</div>