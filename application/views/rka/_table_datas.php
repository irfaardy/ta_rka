<!-- <?php# if ($obj != null): ?> -->
<?php if (true): ?>
  <div class="mt-5">
    <table class="table table-bordered table-striped display nowrap" id="tabel-rka" data-table-no-ordering style="width: 100%;">
      <thead>
        <tr>
          <th class="text-nowrap text-center align-middle" rowspan="2">No</th>
          <th class="text-nowrap text-center align-middle" rowspan="2">Kegiatan</th>
          <th class="text-nowrap text-center" colspan="12">Bulan</th>
          <th class="text-nowrap text-center" colspan="2">Anggaran</th>
          <th class="text-nowrap text-center align-middle" rowspan="2">Jumlah</th>
          <th class="text-nowrap text-center align-middle" rowspan="2">Aksi</th>
        </tr>
        <tr>
          <th class="text-center">Januari</th>
          <th class="text-center">Februari</th>
          <th class="text-center">Maret</th>
          <th class="text-center">April</th>
          <th class="text-center">Mei</th>
          <th class="text-center">Juni</th>
          <th class="text-center">Juli</th>
          <th class="text-center">Agustus</th>
          <th class="text-center">September</th>
          <th class="text-center">Oktober</th>
          <th class="text-center">November</th>
          <th class="text-center">Desember</th>
          <th class="text-center">Qty</th>
          <th class="text-center">Anggaran</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($obj as $perencanaan): ?>
          <tr>
            <td><?php echo $perencanaan->no ?></td>
            <td><?php echo $perencanaan->kegiatan ?></td>
            <td><?php echo $perencanaan->januari ?></td>
            <td><?php echo $perencanaan->februari ?></td>
            <td><?php echo $perencanaan->maret ?></td>
            <td><?php echo $perencanaan->april ?></td>
            <td><?php echo $perencanaan->mei ?></td>
            <td><?php echo $perencanaan->juni ?></td>
            <td><?php echo $perencanaan->juli ?></td>
            <td><?php echo $perencanaan->agustus ?></td>
            <td><?php echo $perencanaan->september ?></td>
            <td><?php echo $perencanaan->oktober ?></td>
            <td><?php echo $perencanaan->november ?></td>
            <td><?php echo $perencanaan->desember ?></td>
            <td>?</td>
            <td>?</td>
            <td>?</td>

            <!-- actions -->
            <td style="min-width: 200px;">
              <a href="<?php echo base_url('/Rka/edit/'.$perencanaan->no) ?>" class="btn btn-xs btn-warning">
                <i class="fas fa-edit fa-fw"></i>
                Edit
              </a>
              <button class="btn btn-xs btn-danger" data-action="<?php echo base_url('/Rka/delete/'.$perencanaan->no) ?>" data-delete>
                <i class="fas fa-trash fa-fw"></i>
                Hapus
              </a>
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
