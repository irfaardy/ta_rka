<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col">
          <h4>Daftar Detail Rencana Kerja Anggaran</h4>
        </div>
        <div class="col text-right">
          <a href="<?php echo base_url('/Rka') ?>" class="btn btn-default btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
      <hr class="mb-4">

      <div class="text-left mb-3">
        <a href="<?php echo base_url('/Kegiatan/tambah/'.$no_perencanaan) ?>" class="btn btn-primary btn-md"><i class="fas fa-plus fa-fw"></i> Tambah Detail</a>
      </div>

      <?php if (count($daftar_kegiatan) > 0): ?>
        <div class="row">
          <?php $i = 1; foreach ($daftar_kegiatan as $obj): ?>
            <div class="col-12 col-md-6">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="mb-0">Detail Kegiatan <?php echo $i ?></h5>
                    </div>
                    <div class="col text-right">
                      <a href="<?php echo base_url('/Kegiatan/edit/'.$obj->no.'/'.$obj->no_detail) ?>" class="btn btn-warning btn-xs"><i class="far fa-edit fa-fw"></i> Edit</a>
                      <button data-action="<?php echo base_url('/Kegiatan/delete/'.$obj->no.'/'.$obj->no_detail) ?>" data-delete class="btn btn-danger btn-xs"><i class="fas fa-trash fa-fw"></i> Hapus</a>
                    </div>
                  </div>
                  --
                  <?php $this->view('kegiatan/_card', array('obj' => $obj)) ?>
                </div>
              </div>
            </div>
          <?php $i++; endforeach; ?>
        <?php else: ?>
          <div class="col text-center">
            <h4 class="my-4">Detail Kegiatan Belum Ada</h4>
          </div>
        <?php endif; ?>
        </div>
    </div>
  </div>
</div>
