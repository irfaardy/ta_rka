<div class="container-fluid">
  <div class="row">
    <div class="col">
    	<?php if(AuthData()->level == 4): ?>
    		<!-- Cetak Data -->
    	 <?php $this->view('fasilitas/_cetak', array('url' => base_url('/Fasilitas/cetak'))); ?>
    	
    	<?php endif; ?>
      <?php if(AuthData()->level == 2): ?>
        <!-- Cetak Data -->
       <?php $this->view('fasilitas/_tahun', array('url' => base_url('/Fasilitas/'))); ?>
      
      <?php endif; ?>
      <?php if(AuthData()->level == 2): ?>
     <a href="<?= base_url('/Fasilitas/tambah') ?><?php if(!empty($this->input->get('tahun'))): ?><?= '?tahun='.$this->input->get('tahun') ?><?php endif; ?>" class="btn btn-primary btn-sm float-right d-block"><i class="fas fa-plus fa-fw"></i> Tambah</a>
      <?php endif; ?>

      <!-- load table -->
      <?php $this->view('fasilitas/_table_datas_ditolak', array('obj' => $fasilitas)); ?>
    </div>
  </div>
</div>
