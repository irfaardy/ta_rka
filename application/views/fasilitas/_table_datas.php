<?php if ($obj != null): ?>
  <div class="table-responsive mt-5">
    <table class="table table-bordered table-striped" id="fasilitas" >
      <thead>
        <tr>
          <th class="text-nowrap">No Fasilitas</th>
          <th class="text-nowrap">Jenis Fasilitas</th>
          <th class="text-nowrap">Banyaknya</th>
          <th class="text-nowrap">Anggaran</th>
          <th class="text-nowrap">Tahun</th>
          <th class="text-nowrap">Status</th>
          <th class="text-nowrap">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no='1'; foreach ($obj as $fasilitas): ?>
          <tr>
            <td><?= ($fasilitas->no_fasilitas) ? $fasilitas->no_fasilitas : "-"; ?></td>
            <td><?= ($fasilitas->jenis_peralatan) ? $fasilitas->jenis_peralatan : "-"; ?></td>
            <td><?= ($fasilitas->banyaknya) ? $fasilitas->banyaknya : "-"; ?></td>
            <td><?= ($fasilitas->anggaran) ? $fasilitas->anggaran : "-"; ?></td>
            <td><?= ($fasilitas->tahun) ? $fasilitas->tahun : "-"; ?></td>
            <td><?= ($fasilitas->status) ? $fasilitas->status : "-"; ?></td>
            <!-- actions -->
            <td style="min-width: 200px;">
              <a href="<?= base_url('/Fasilitas/edit/'.$fasilitas->no_fasilitas) ?>" class="btn btn-xs btn-warning">
                <i class="fas fa-edit fa-fw"></i>
                Edit
              </a>
              <?php if(!checkPerencanaan($fasilitas->no_fasilitas)):?>
              <button class="btn btn-xs btn-danger" data-action="<?= base_url('/Fasilitas/delete/'.$fasilitas->no_fasilitas) ?>" data-delete>
                <i class="fas fa-trash fa-fw"></i>
                Hapus
              </button>
              <?php else: ?>
                <button class="btn btn-xs btn-default" title='Sedang dipakai di perencanaan' disabled="">
                <i class="fas fa-trash fa-fw"></i>
                Hapus
              </button>
            <?php endif; ?>
            </td>
          <?php $no++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php else: ?>
  <div class="d-block mt-5 text-center">
    <h4>Data Kosong</h4>
  </div>
<?php endif; ?>
