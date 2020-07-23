<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h4>Tambah Rencana Kerja Anggaran</h4>
      <hr class="mb-4">
      <form class="" action="<?php echo $action ?>" method="post">
        <!-- set jurusan -->
        <input type="hidden" name="jurusan_id" value="<?php echo AuthData()->jurusan_id ?>">

        <!-- initial object (null or not) -->
        <?php $rka = rkaFields($obj); ?>

        <!-- include the list fields -->
        <?php $this->view("rka/_form", array('rka' => $rka, 'sasaran_mutu' => $sasaran_mutu)) ?>

        <hr class="my-4">
        <div class="form-group text-right">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="<?php echo base_url('/Rka') ?>" class="btn btn-default ml-1">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>
