<?php if (true): ?>
  <div class="mt-2">
    <table class="table table-bordered display nowrap" id="tabel-rka" data-table-no-ordering style="width: 100%;">
      <thead>
        <tr>
          <th class="text-nowrap text-center align-middle" rowspan="2">No</th>
          <th class="text-nowrap text-center align-middle" rowspan="2">Kegiatan</th>
          <th class="text-nowrap text-center" colspan="12">Bulan</th>
          <th class="text-nowrap text-center align-middle" rowspan="2">Status</th>
        </tr>
        <tr>
          <th class="text-center" style="min-width: 70px">Januari</th>
          <th class="text-center" style="min-width: 70px">Februari</th>
          <th class="text-center" style="min-width: 70px">Maret</th>
          <th class="text-center" style="min-width: 70px">April</th>
          <th class="text-center" style="min-width: 70px">Mei</th>
          <th class="text-center" style="min-width: 70px">Juni</th>
          <th class="text-center" style="min-width: 70px">Juli</th>
          <th class="text-center" style="min-width: 70px">Agustus</th>
          <th class="text-center" style="min-width: 70px">September</th>
          <th class="text-center" style="min-width: 70px">Oktober</th>
          <th class="text-center" style="min-width: 70px">November</th>
          <th class="text-center border-right" style="min-width: 70px">Desember</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($obj as $perencanaan): ?>
          <tr class="<?php echo status_color($perencanaan->status_kajur) ?>">
            <td><?php echo $perencanaan->no ?></td>
            <td><?php echo $perencanaan->kegiatan ?></td>
            <td class="text-center"><?php echo ($perencanaan->januari ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->februari ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->maret ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->april ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->mei ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->juni ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->juli ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->agustus ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->september ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->oktober ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->november ? "<i class='fas fa-check'>" : "-") ?></td>
            <td class="text-center"><?php echo ($perencanaan->desember ? "<i class='fas fa-check'>" : "-") ?></td>

            <!-- actions -->
            <td style="min-width: 80px;">
              <b><?php echo status_kajur($perencanaan->status_kajur) ?></b>
            </td>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php else: ?>
  <div class="d-block mt-5 text-center">
    <h4>Data Kosong</h4>
  </div>
<?php endif; ?>
