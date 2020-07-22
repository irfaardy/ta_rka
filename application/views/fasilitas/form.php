<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h4>Input Fasilitas</h4>
      <hr class="mb-4">

      <form class="" action="<?php echo $action ?>" method="post">
        <!-- initial object (null or not) -->
        <?php $fasilitas = fasilitasFields($obj); ?>

        <!-- include the list fields -->
        <?php $this->view("fasilitas/_form", $fasilitas) ?>

        <hr class="my-4">
        <div class="form-group text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
