<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">No</label>
    </div>
    <div class="col-9">
      <input type="text" class="form-control" name="no" value="<?php echo $rka->no ?>" <?php echo ($rka->no == null ? "":"readonly") ?>/>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Sasaran Mutu</label>
    </div>
    <div class="col-9">
      <select class="form-control" name="no_sarmut">
        <option value="">--Pilih Sasaran Mutu--</option>
        <?php foreach ($sasaran_mutu as $obj): ?>
          <option value="<?php echo $obj->no_sarmut ?>" <?php echo selectOptionSelected($obj->no_sarmut, $rka->no_sarmut) ?>><?php echo $obj->sarmut ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Kegiatan</label>
    </div>
    <div class="col-9">
      <input type="text" class="form-control" name="kegiatan" value="<?php echo $rka->kegiatan ?>" />
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Bulan</label>
    </div>
    <div class="col-9">
      <div class="row">
        <?php foreach (listMonth() as $key => $value): ?>
          <div class="col-4 col-md-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="1" name="<?php echo $value ?>" id="<?php echo $value ?>" <?php echo checked(json_decode(json_encode($rka), true), $value) ?>>
              <label class="form-check-label text-capitalize" for="<?php echo $value ?>">
                <?php echo $value ?>
              </label>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
