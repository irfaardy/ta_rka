<?php if (true): ?>
  <div class="mt-5">
    <table class="table table-bordered table-striped display nowrap" id="tabel-rka" data-table-no-ordering style="width: 100%;">
      <thead>
        <tr>
          <th class="text-nowrap text-center align-middle" rowspan="2">No</th>
          <th class="text-nowrap text-center align-middle" rowspan="2">Kegiatan</th>
          <th class="text-nowrap text-center align-middle" rowspan="2">Sasaran Mutu</th>
          <th class="text-nowrap text-center" colspan="12">Bulan</th>
          <th class="text-nowrap text-center" rowspan="2">Anggaran (Rp.)</th>
          <th class="text-nowrap text-center align-middle" rowspan="2">&nbsp;</th>
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
        <?php $i=1; $total=0; foreach ($obj as $perencanaan): ?>
          <tr>
            <td><?php echo $i ?></td>
            <td style="min-width:200px !important; max-width: 450px !important; white-space: normal;"><?php echo $perencanaan->kegiatan ?></td>
            <td style="min-width:200px !important; max-width: 450px !important; white-space: normal;"><?php echo $perencanaan->sarmut ?></td>
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
            <td class="text-center">
              <?php
                $amount = totalDetailRka($perencanaan->no);
                $total += $amount;
                echo "Rp. ".number_format($amount);
              ?>
            </td>
            <!-- actions -->
            <td style="min-width: 200px;" class="text-center">
            <?php if(AuthData()->level != 4): ?>
              <?php if ($perencanaan->status_kajur == FALSE OR empty($perencanaan->status_kajur)): ?>
                <a href="<?php echo base_url('/Kegiatan/index/'.$perencanaan->no) ?>" class="btn btn-xs btn-default">
                  <i class="fas fa-clipboard-list fa-fw"></i>
                  Detail Kegiatan
                </a>
              <?php elseif (in_array(AuthData()->level, [3])): ?>
                <b><?php echo status_kajur($perencanaan->status_kajur) ?></b>
              <?php endif; ?>


             <?php endif; ?>
              <?php if (in_array(AuthData()->level, [1,2])): ?>
                <?php if ($perencanaan->status_kajur == 0): ?>

                  <a href="<?php echo base_url('/Rka/edit/'.$perencanaan->no) ?>" class="btn btn-xs btn-warning">
                    <i class="fas fa-edit fa-fw"></i>
                    Edit
                  </a>
                  <button class="btn btn-xs btn-danger" data-action="<?php echo base_url('/Rka/delete/'.$perencanaan->no) ?>" data-delete>
                    <i class="fas fa-trash fa-fw"></i>
                    Hapus
                  </a>
                <?php else: ?>
                  <b><?php echo status_kajur($perencanaan->status_kajur) ?></b>
                <?php endif; ?>
              <?php elseif(in_array(AuthData()->level, [3]) && in_array($perencanaan->status_kajur, ['0',null])): ?>
                <a href="<?php echo base_url('/Rka/update_status/'.$perencanaan->no.'/1') ?>" class="btn btn-xs btn-success">
                  <i class="fas fa-check fa-fw"></i>
                  Setujui
                </a>
                <a href="<?php echo base_url('/Rka/update_status/'.$perencanaan->no.'/2') ?>" class="btn btn-xs btn-danger">
                  <i class="fas fa-times fa-fw"></i>
                  Tolak
                </a>
              <?php endif; ?>
            </td>
        <?php $i++; endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="15" style="text-align:right">Total Anggaran:</th>
          <th>Rp.<?= number_format($total) ?></th>
          <th>&nbsp;</th>
        </tr>
      </tfoot>
    </table>
  </div>
<?php else: ?>
  <div class="d-block mt-5 text-center">
    <h4>Data Kosong</h4>
  </div>
<?php endif; ?>
