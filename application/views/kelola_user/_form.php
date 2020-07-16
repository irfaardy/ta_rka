<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Nama</label>
    </div>
    <div class="col-9">
      <input type="text" class="form-control" name="nama" value="<?php echo $user->nama ?>" />
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Username</label>
    </div>
    <div class="col-9">
      <input type="text" class="form-control" name="username" value="<?php echo $user->username ?>" />
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Jurusan</label>
    </div>
    <div class="col-9">
      <select class="form-control" name="jurusan_id">
        <option value="">-- Pilih Jurusan --</option>
        <?php foreach ($daftar_jurusan as $jurusan): ?>
          <option value="<?php echo $jurusan->id ?>" <?php echo selectOptionSelected($jurusan->id, $user->jurusan_id) ?>><?php echo $jurusan->nama ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Level</label>
    </div>
    <div class="col-9">
      <select name="level" class="form-control" required="">
				<?php foreach(userLevel() as $id_level => $label): ?>
  				<option value="<?= $id_level ?>" <?php echo selectOptionSelected($id_level, $user->level) ?>><?= $label ?></option>
  			<?php endforeach; ?>
  		</select>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Password</label>
    </div>
    <div class="col-9">
      <input type="password" class="form-control" name="password" />
      <?php if ($user->id != null): ?>
        <small class="font-italic">*Biarkan kosong jika tidak ingin mengubah password</small>
      <?php endif; ?>
    </div>
  </div>
</div>
