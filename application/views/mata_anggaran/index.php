<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <a href="<?php echo base_url('/mataanggaran/tambah') ?>" class="btn btn-primary btn-sm float-right d-block"><i class="fas fa-plus fa-fw"></i> Tambah</a>

          <!-- load table -->
          <?php $this->view('mata_anggaran/_table_datas', array('obj' => $mata_anggaran)); ?>
        </div>
      </div>
    </div>
  </div>
</div>