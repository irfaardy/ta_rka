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

      <!-- load table -->
      <?php $this->view('fasilitas/_status_table_datas', array('obj' => $fasilitas)); ?>
    </div>
  </div>
</div>
