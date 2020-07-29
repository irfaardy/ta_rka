<?php if ($obj != null): ?>
  <div class="table-responsive mt-5">
    <table class="table table-bordered table-striped" id="rddkf">
      <thead>
        <tr>
          <th class="text-nowrap">No</th>
          <th class="text-nowrap">Tahun</th>
          <th class="text-nowrap">Nama File</th>
          <th class="text-nowrap">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no='1'; foreach ($obj as $rddkf): ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo ($rddkf->tahun) ? $rddkf->tahun : "-"; ?></td>
            <td><?php echo ($rddkf->rddkf) ? $rddkf->rddkf : "-"; ?></td>
            <!-- actions -->
            <td style="min-width: 200px;">
              <a href="<?= base_url('/Download/RDDKF/'.$rddkf->kode_rddkf) ?>" class="btn btn-xs btn-default">
                <i class="fas fa-download fa-fw"></i>
                Download
              </a>
              <?php if (in_array(AuthData()->level, [4])): ?>
                <a href="<?php echo base_url('/RDDKF/edit/'.$rddkf->kode_rddkf) ?>" class="btn btn-xs btn-warning">
                  <i class="fas fa-edit fa-fw"></i>
                  Edit
                </a>
                <button class="btn btn-xs btn-danger" data-action="<?php echo base_url('/RDDKF/delete/'.$rddkf->kode_rddkf) ?>" data-delete>
                  <i class="fas fa-trash fa-fw"></i>
                  Hapus
                </a>
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
