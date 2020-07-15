<?php if ($obj != null): ?>
  <div class="table-responsive mt-5">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th class="text-nowrap">No</th>
          <th class="text-nowrap">Sasaran Mutu</th>
          <th class="text-nowrap">Indikator</th>
          <th class="text-nowrap">Turunan</th>
          <th class="text-nowrap">Bobot (%)</th>
          <th class="text-nowrap">target</th>
          <th class="text-nowrap">akar_masalah</th>
          <th class="text-nowrap">tkp</th>
          <th class="text-nowrap">d_akhir_taun</th>
          <th class="text-nowrap">tkw1</th>
          <th class="text-nowrap">tkw2</th>
          <th class="text-nowrap">tkw3</th>
          <th class="text-nowrap">tkw4</th>
          <th>&nbsp;</th>
        </tr>
      </thead>
      <tbody>
        <?php $no='1'; foreach ($obj as $sasaran_mutu): ?>
          <tr>
            <td><?php echo $no ?></td>
            <td><?php echo ($sasaran_mutu->sarmut) ? $sasaran_mutu->sarmut : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->indikator) ? $sasaran_mutu->indikator : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->turunan) ? $sasaran_mutu->turunan : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->bobot) ? $sasaran_mutu->bobot : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->target) ? $sasaran_mutu->target : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->akar_masalah) ? $sasaran_mutu->akar_masalah : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->tkp) ? $sasaran_mutu->tkp : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->d_akhir_tahun) ? $sasaran_mutu->d_akhir_tahun : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->tw1) ? $sasaran_mutu->tw1 : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->tw2) ? $sasaran_mutu->tw2 : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->tw3) ? $sasaran_mutu->tw3 : "-"; ?></td>
            <td><?php echo ($sasaran_mutu->tw4) ? $sasaran_mutu->tw4 : "-"; ?></td>
            <!-- actions -->
            <td style="min-width: 200px;">
              <a href="<?php echo base_url('/sasaranmutu/edit/'.$sasaran_mutu->no_sarmut) ?>" class="btn btn-xs btn-warning">
                <i class="fas fa-edit fa-fw"></i>
                Edit
              </a>
              <button class="btn btn-xs btn-danger" data-action="<?php echo base_url('/sasaranmutu/delete/'.$sasaran_mutu->no_sarmut) ?>" data-delete>
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
