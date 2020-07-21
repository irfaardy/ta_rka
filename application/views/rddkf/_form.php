<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">Tahun</label>
    </div>
    <div class="col-9">
    	<select name="tahun" class="form-control">
     <?php foreach(yearSelect() as $y):?>
     	<option value="<?= $y ?>" <?php if ($obj != null): echo selectOptionSelected($y, $obj->tahun); endif;?>><?= $y ?></option>
     <?php endforeach;?>
 	</select>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="row">
    <div class="col-3">
      <label for="">File</label><br><small class="font-italic">Maksimal 10 MB <br> Harus berupa jpg,png,pdf,docx,atau doc</small>
    </div>
    <div class="col-9">
    <input type="file" title="Maksimal 10 MB dan harus berupa jpg,png,pdf,docx,atau doc" class="form-control" name="rddkf"  accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
     <?php if ($obj != null): 
     	if($obj->rddkf != null):?>
    		<small class="font-italic">*Biarkan kosong jika tidak ingin mengubah file</small>
		<?php endif; ?>
	<?php endif; ?>
    </div>
  </div>
</div>

