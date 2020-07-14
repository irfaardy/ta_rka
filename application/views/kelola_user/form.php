<div class="container">
<div class="row">
	<div class="col-md-3">
		<a class="btn btn-primary" href="<?= base_url('user/tambah') ?>">Add User</a>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<form method="POST" action="<?= base_url('user/simpan') ?>">
			<label>Username</label>
			<input type="text" name="username" class="form-control">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
			<label>Level</label>
			<select name="level" class="form-control">
				<?php foreach(userLevel() as $level => $desc): ?>
				<option value="<?= $level ?>"><?= $desc ?></option>
			<?php endforeach; ?>
			</select>
			<div class="row">
				<div class="col-md-12 col-sm-3">
					<button type="submit" class="btn btn-primary btn-block">Simpan</button>
				</div>
			</div>
		</form>
	</div>
</div>
</div>