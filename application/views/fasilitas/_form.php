<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Jenis Peralatan</label>
    </div>
    <div class="col-9">
      <input type="text" class="form-control" name="jenis_peralatan" required="">
    <!--  <select name="jenis_peralatan" class="form-control">
       <?php foreach(jenisPeralatan() as $k => $v): ?>
        <option value="<?= $k ?>" <?php if ($obj != null): echo selectOptionSelected($k, $obj->jenis_peralatan); endif;?>><?= $v ?></option>
      <?php endforeach; ?>
     </select> -->
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Banyaknya</label>
    </div>
    <div class="col-9">
      <input type="number" required="" min="1" class="form-control" name="banyaknya" value="<?php echo $banyaknya ?>" />
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Anggaran</label>
    </div>
    <div class="col-9">
      <input type="number" required="" min="1" class="form-control" name="anggaran" value="<?php echo $banyaknya ?>" />
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Tahun</label>
    </div>
    <div class="col-9">
      <select name="tahun" class="form-control">
     <?php foreach(yearSelect() as $y):?>
      <option value="<?= $y ?>" <?= selectOptionSelected($y, $this->input->get('tahun')) ?> <?php if ($obj != null): echo selectOptionSelected($y, $obj->tahun); endif;?>><?= $y ?></option>
     <?php endforeach;?>
      </select>
    </div>
  </div>
</div>


