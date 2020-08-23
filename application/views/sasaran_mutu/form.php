<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h4>Input Sasaran Mutu</h4>
      <hr class="mb-4">
      <form class="" action="<?php echo base_url($action) ?>" method="post">
        <!-- set jurusan -->
        <input type="hidden" name="jurusan_id" value="<?php echo AuthData()->jurusan_id ?>">

        <!-- initial object (null or not) -->
        <?php $sasaran_mutu = sasaranMutuFields($obj); ?>

        <!-- include the list fields -->
        <?php $this->view("sasaran_mutu/_form", $sasaran_mutu) ?>

        <hr class="my-4">
        <div class="form-group text-right">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <a class="btn btn-danger ml-2" href="<?php echo base_url("/SasaranMutu") ?>">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>
