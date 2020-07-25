<form action="<?php echo $url ?>" method="GET">
   <div class="row">
      <div class="col-md-3 col-sm-3">
        <select name="tahun" class="form-control" onchange="document.location.href=this.value"> 
              <option selected value="">Pilih</option>
              <?php foreach(yearSelect() as $y):?>
            <option value="?tahun=<?= $y ?>" <?= selectOptionSelected($y, $this->input->get('tahun')) ?>><?= $y ?></option>
            <?php endforeach;?>
            </select> 
      </div>
      
   </div>
</form>