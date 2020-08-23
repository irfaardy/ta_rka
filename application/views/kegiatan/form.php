<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <h4>Tambah Detail Rencana Kerja Anggaran</h4>
      <hr class="mb-4">

      <form class="" action="<?php echo $action ?>" method="post">
        <!-- set jurusan -->
        <input type="hidden" name="jurusan_id" value="<?php echo AuthData()->jurusan_id ?>">

        <!-- initial object (null or not) -->
        <?php $detail_kegiatan = detailKegiatanFields($obj); ?>

        <!-- include the list fields -->
        <?php $this->view("kegiatan/_form", array('detail_kegiatan' => $detail_kegiatan, 'perencanaan' => $perencanaan, 'mata_anggaran' => $mata_anggaran)) ?>

        <hr class="my-4">
        <div class="form-group text-right">
          <button type="submit" class="btn btn-primary">Tambah</button>
          <a href="<?php echo base_url('/Kegiatan/index/'.$perencanaan->no) ?>" class="btn btn-danger ml-2">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>
