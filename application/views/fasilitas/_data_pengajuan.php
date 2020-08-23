<?php if ($obj != null): ?>
  <div class="table-responsive mt-5">
    <table class="table table-bordered table-striped" id="fasilitas" >
      <thead>
        <tr>
          <th class="text-nowrap">No</th>
          <th class="text-nowrap">Jenis Peralatan Laboratorium</th>
          <th class="text-nowrap">Banyaknya</th>
          <th class="text-nowrap">Anggaran(Rp)</th>

          <th class="text-nowrap">Total(Rp)</th>
          <?php if(AuthData()->level == 2 || AuthData()->level == 3 ):?>
            <th class="text-nowrap">Status</th>
          <?php endif;?>


        </tr>
      </thead>
      <tbody>
        <?php $no=1; $total=0; foreach ($obj as $fasilitas): $sub_total=$fasilitas->anggaran*$fasilitas->banyaknya;?>
          <tr>
            <td><?= $no ?></td>
            <td><?= ($fasilitas->jenis_peralatan) ? $fasilitas->jenis_peralatan : "-"; ?></td>
            <td><?= ($fasilitas->banyaknya) ? number_format($fasilitas->banyaknya) : "-"; ?></td>
            <td><?= ($fasilitas->anggaran) ? "Rp".number_format($fasilitas->anggaran) : "-"; ?></td>
            <td><?= "Rp".number_format($sub_total) ?></td>

            <td align="center" style="min-width: 200px;">
              <?php if($fasilitas->status == "DITERIMA"):?>
                <span class="badge badge-success"><i class="fas fa-check-circle mr-1"></i> DITERIMA</span>
              <?php elseif($fasilitas->status == "DITOLAK"):?>
                  <span class="badge badge-danger"><i class="fas fa-times-circle mr-1"></i> DITOLAK</span>
                 <?php else:?>
                  <span class="badge badge-secondary"><i class="fas fa-sync fa-spin mr-1"></i> PROSES PENGAJUAN</span>
                 <?php endif;?>
            </td>

          <?php  $no++; $total+=$sub_total ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php else: ?>
  <div class="d-block mt-5 text-center">
    <h4>Data Kosong</h4>
  </div>
<?php endif; ?>
