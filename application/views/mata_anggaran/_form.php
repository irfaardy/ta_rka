<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Kode Rekening</label>
    </div>
    <div class="col-9">
      <input type="text" maxlength="6" class="form-control" <?= !empty($kode_rekening)?"readonly='true' ":null ?> name="kode_rekening" value="<?php echo $kode_rekening ?>" />
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Nama Rekening</label>
    </div>
    <div class="col-9">
      <input type="text" class="form-control" name="nama_rekening" value="<?php echo $nama_rekening ?>" />
    </div>
  </div>
</div>

