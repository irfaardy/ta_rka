<?php if(!empty($this->session->flashdata('fail'))){ ?>
          <div class="alert alert-danger" align="center"><i class="fas fa-exclamation-triangle" aria-hidden="true"></i> <?= $this->session->flashdata('fail') ?></div>
<?php } ?>
<?php if(!empty($this->session->flashdata('success'))){ ?>
          <div class="alert alert-success" align="center"><i class="fas fa-check-circle" aria-hidden="true"></i>  <?= $this->session->flashdata('success') ?></div>
 <?php } ?>