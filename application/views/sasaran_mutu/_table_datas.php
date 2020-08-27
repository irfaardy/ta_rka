<div class="row mb-2">
  <div class="col-2">
    <form id="filter-year" action="<?php echo base_url('/SasaranMutu') ?>" method="get">
      <select class="form-control" name="tahun" onchange="submitForm()">
        <option value="">--Pilih Tahun--</option>
        <?php for ($i=2015; $i <= date("Y"); $i++): ?>
          <?php if (isset($_GET['tahun'])): ?>
            <option value="<?php echo $i ?>" <?php echo selectOptionSelected("2020", $_GET['tahun']) ?>><?php echo $i ?></option>
          <?php else: ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
          <?php endif; ?>
        <?php endfor; ?>
      </select>
    </form>
  </div>
</div>
<?php if ($obj != null): ?>
  <div class="mt-5">
    <table class="table table-bordered table-striped display nowrap" data-table id="sasaran_mutu">
      <thead>
        <tr>
          <th class="text-nowrap">No</th>
          <th class="text-nowrap">Sasaran Mutu</th>
          <th class="text-nowrap">Indikator</th>
          <th class="text-nowrap">Turunan</th>
          <th class="text-nowrap">Bobot (%)</th>
          <th class="text-nowrap">Target</th>
          <th class="text-nowrap">Akar Masalah</th>
          <th class="text-nowrap">Tindakan Koreksi Perbaikan</th>
          <th class="text-nowrap">Data Akhir Tahun</th>
          <th class="text-nowrap">TW 1</th>
          <th class="text-nowrap">TW 2</th>
          <th class="text-nowrap">TW 3</th>
          <th class="text-nowrap">TW 4</th>
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
              <a href="<?php echo base_url('/SasaranMutu/edit/'.$sasaran_mutu->no_sarmut) ?>" class="btn btn-xs btn-warning">
                <i class="fas fa-edit fa-fw"></i>
                Edit
              </a>
              <button class="btn btn-xs btn-danger" data-action="<?php echo base_url('/SasaranMutu/delete/'.$sasaran_mutu->no_sarmut) ?>" data-delete>
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

<script type="text/javascript">
  function submitForm() {
    $("#filter-year").submit();
  }
</script>
