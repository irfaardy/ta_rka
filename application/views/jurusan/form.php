<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h5>Input Sasaran Mutu</h5>
        </div>
        <div class="card-body">
          <form class="" action="<?php echo $action ?>" method="post">
            <!-- initial object (null or not) -->
            <?php $jurusan = jurusanFields($obj); ?>

            <!-- include the list fields -->
            <?php $this->view("jurusan/_form", $jurusan) ?>

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
