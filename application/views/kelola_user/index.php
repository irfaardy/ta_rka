<div class="container">
<div class="row">
	<div class="col-md-3">
		<a class="btn btn-primary" href="<?= base_url('user/tambah') ?>"><i class="fas fa-plus"></i> Add User</a>
	</div>
</div>
</div><hr>
<div class="row">
	<?php $this->view('kelola_user/_table_datas', array('user' => $user)); ?>
</div>
</div>