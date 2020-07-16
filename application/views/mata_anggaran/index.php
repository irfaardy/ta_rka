<div class="container-fluid">
  <div class="row">
    <div class="col">
      <a href="<?php echo base_url('/MataAnggaran/tambah') ?>" class="btn btn-primary btn-sm float-right d-block"><i class="fas fa-plus fa-fw"></i> Tambah</a>

      <!-- load table -->
      <?php $this->view('mata_anggaran/_table_datas', array('obj' => $mata_anggaran)); ?>
    </div>
  </div>
</div>
