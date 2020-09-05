<div class="row">
  <div class="col-4">
    <b>Kegiatan</b>
  </div>
  <div class="col-8">
    <p>: <?php echo $obj->kegiatan ?></p>
  </div>

  <div class="col-4">
    <b>Mata Anggaran</b>
  </div>
  <div class="col-8">
    <p>: <?php echo $obj->nama_rekening ?></p>
  </div>

  <div class="col-4">
    <b>Deskripsi Kegiatan</b>
  </div>
  <div class="col-8">
    <p>: <?php echo $obj->uraian ?></p>
  </div>

  <div class="col-4">
    <b>Qty</b>
  </div>
  <div class="col-8">
    <p>: <?php echo $obj->qty ?></p>
  </div>

  <div class="col-4">
    <b>Anggaran</b>
  </div>
  <div class="col-8">
    <p>: <?php echo money($obj->anggaran) ?></p>
  </div> 
  <div class="col-4">
    <b>Total Anggaran</b>
  </div>
  <div class="col-8">
    <p>: <?php echo money($obj->anggaran*$obj->qty) ?></p>
  </div>
</div>
