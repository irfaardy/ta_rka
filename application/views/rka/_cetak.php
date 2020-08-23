<form action="<?php echo $url ?>" target="_blank" method="GET">
   <div class="row">
      <div class="col-md-1 col-sm-1">
         <select name="tahun" class="form-control">
            <?php foreach(yearSelect() as $y):?>
            <option value="<?= $y ?>"><?= $y ?></option>
            <?php endforeach;?>
         </select>
      </div>
      <div class="col-md-2 col-sm-2">
         <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-print"></i> Cetak</button>
      </div>
   </div>
</form>