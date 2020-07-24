<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Kegiatan</label>
    </div>
    <div class="col-9">
      <input type="text" class="form-control" value="<?php echo $perencanaan->kegiatan ?>" disabled />
    </div>
  </div>
</div>

<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Mata Anggaran</label>
    </div>
    <div class="col-9">
      <select class="form-control" name="kode_rekening">
        <option value="">--Pilih--</option>
        <?php foreach ($mata_anggaran as $obj): ?>
          <option value="<?php echo $obj->kode_rekening ?>" <?php echo selectOptionSelected($obj->kode_rekening, $detail_kegiatan->kode_rekening) ?>><?php echo $obj->nama_rekening ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
</div>

<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Deskripsi Kegiatan</label>
    </div>
    <div class="col-9">
      <textarea name="uraian" rows="4" class="form-control"><?php echo $detail_kegiatan->uraian ?></textarea>
    </div>
  </div>
</div>

<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Qty</label>
    </div>
    <div class="col-2">
      <input type="number" class="form-control" name="qty" value="<?php echo $detail_kegiatan->qty ?>" min="0"/>
    </div>
  </div>
</div>

<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Anggaran (Rp)</label>
    </div>
    <div class="col-9">
      <input type="text" class="form-control" name="anggaran" data-money value="<?php echo $detail_kegiatan->anggaran ?>" />
    </div>
  </div>
</div>
