<?php if ($obj != null): ?>
  <div class="table-responsive mt-5">
    <table class="table table-bordered table-striped" id="jurusan">
      <thead>
        <tr>
          <th class="text-nowrap">No</th>
          <th class="text-nowrap">Nama</th>
          <th class="text-nowrap">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no='1'; foreach ($obj as $jurusan): ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo ($jurusan->nama) ? $jurusan->nama : "-"; ?></td>
            <!-- actions -->
            <td style="min-width: 200px;">
              <a href="<?php echo base_url('/jurusan/edit/'.$jurusan->id) ?>" class="btn btn-xs btn-warning">
                <i class="fas fa-edit fa-fw"></i>
                Edit
              </a>
              <button class="btn btn-xs btn-danger" data-action="<?php echo base_url('/jurusan/delete/'.$jurusan->id) ?>" data-delete>
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
