<?php if ($obj != null): ?>
  <div class="table-responsive mt-5">
    <table class="table table-bordered table-striped" id="mata_anggaran">
      <thead>
        <tr>
          <th class="text-nowrap">No</th>
          <th class="text-nowrap">Kode Rekening</th>
          <th class="text-nowrap">Nama Rekening</th>
          <th class="text-nowrap">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no='1'; foreach ($obj as $mata_anggaran): ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= ($mata_anggaran->kode_rekening) ? $mata_anggaran->kode_rekening : "-"; ?></td>
            <td><?= ($mata_anggaran->nama_rekening) ? $mata_anggaran->nama_rekening : "-"; ?></td>
            <!-- actions -->
            <td style="min-width: 200px;">
              <a href="<?= base_url('/sasaranmutu/edit/'.$mata_anggaran->kode_rekening) ?>" class="btn btn-xs btn-warning">
                <i class="fas fa-edit fa-fw"></i>
                Edit
              </a>
              <button class="btn btn-xs btn-danger" data-action="<?= base_url('/sasaranmutu/delete/'.$mata_anggaran->kode_rekening) ?>" data-delete>
                <i class="fas fa-trash fa-fw"></i>
                Hapus
              </a>
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
