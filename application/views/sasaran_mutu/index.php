<div class="container-fluid">
  <div class="row">
    <div class="col">
      <a href="<?php echo base_url('/SasaranMutu/tambah') ?>" class="btn btn-primary btn-sm float-right d-block"><i class="fas fa-plus fa-fw"></i> Tambah</a>

      <!-- load table -->
      <?php $this->view('sasaran_mutu/_table_datas', array('obj' => $sasaran_mutu)); ?>
    </div>
  </div>
</div>
