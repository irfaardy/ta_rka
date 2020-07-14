
<div class="row">
	<div class="col-md-6">
		<form method="POST" action="<?= $url ?>">
			<label>Username</label>
			<input type="text" name="username" class="form-control" value="<?= isset($user)?$user->username:null ?>" required="">
			<?php if(isset($user)): ?>
				<input type="hidden" name="id" value="<?= isset($user)?$user->id:null ?>">
			<?php endif; ?>
			<label>Nama</label>
			<input type="text" name="nama" class="form-control" required="" value="<?= isset($user)?$user->nama:null ?>">
			<label>Password</label>
			<input type="password" name="password" class="form-control" required="">
			<label>Level</label>
			<select name="level" class="form-control" required="">
				<?php foreach(userLevel() as $level => $desc): ?>
				<option value="<?= $level ?>" <?= isset($user)?$user->level==$level?$user->level:null:null ?>><?= $desc ?></option>
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