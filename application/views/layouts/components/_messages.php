<?php if(!empty($this->session->flashdata('fail'))){ ?>
          <div auto-close-alert class="alert alert-danger" align="center"><i class="fas fa-times-circle" aria-hidden="true"></i> <?= $this->session->flashdata('fail') ?></div>
<?php } ?>
<?php if(!empty($this->session->flashdata('success'))){ ?>
          <div auto-close-alert class="alert alert-success" align="center"><i class="fas fa-check-circle" aria-hidden="true"></i>  <?= $this->session->flashdata('success') ?></div>
 <?php } ?>
 <?php if(!empty($this->session->flashdata('warning'))){ ?>
          <div auto-close-alert class="alert alert-warning" align="center"><i class="fas fa-exclamation-triangle" aria-hidden="true"></i>  <?= $this->session->flashdata('warning') ?></div>
 <?php } ?>