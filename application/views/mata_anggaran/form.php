<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h5>Input Mata Anggaran</h5>
        </div>
        <div class="card-body">
          <form class="" action="<?php echo $action ?>" method="post">
            <!-- initial object (null or not) -->
            <?php $mata_anggaran = mataAnggaranFields($obj); ?>

            <!-- include the list fields -->
            <?php $this->view("mata_anggaran/_form", $mata_anggaran) ?>

            <hr class="my-4">
            <div class="form-group text-right">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
