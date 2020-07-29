<div class="container-fluid">
  <div class="row">
    <div class="col">
      <?php if (in_array(AuthData()->level, [4])): ?>
        <a href="<?php echo base_url('/RDDKF/tambah') ?>" class="btn btn-primary btn-sm float-right d-block"><i class="fas fa-plus fa-fw"></i> Tambah</a>
      <?php endif; ?>

      <!-- load table -->
      <?php $this->view('rddkf/_table_datas', array('obj' => $rddkf)); ?>
    </div>
  </div>
</div>
