<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h4><?= empty($obj)?"Input":"Ubah"?> Mata Anggaran</h4>
      <hr class="mb-4">

      <form class="" action="<?php echo $action ?>" method="post">
        <!-- initial object (null or not) -->
        <?php $mata_anggaran = mataAnggaranFields($obj); ?>

        <!-- include the list fields -->
        <?php $this->view("mata_anggaran/_form", $mata_anggaran) ?>

        <hr class="my-4">
        <div class="form-group text-right">
          <a href="<?= base_url('/MataAnggaran') ?>" type="submit" class="btn btn-warning">Batal</a>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
