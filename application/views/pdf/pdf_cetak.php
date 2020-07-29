<link rel="stylesheet" href="<?= assets('css/adminlte.min.css') ?>">
<title>Laporan Pengajuan Fasilitas</title>
<table width="100%" class="table table-bordered">
<thead>
         <tr>
          <th class="text-nowrap">No</th>
          <th class="text-nowrap">Jenis Peralatan Laboratorium</th>
          <th class="text-nowrap">Banyaknya</th>
          <th class="text-nowrap">Anggaran(Rp)</th>
          <?php if(AuthData()->level == 3):?>
            <th class="text-nowrap">Tahun</th>
            <th class="text-nowrap">Status</th>
          <?php endif;?>
          <?php if(AuthData()->level == 4):?>
          <th class="text-nowrap">Total(Rp)</th>
            <?php endif;?>
        </tr>
      </thead>
       <tbody>
        <?php $no=1; $total=0; foreach ($data as $fasilitas): $sub_total=$fasilitas->anggaran*$fasilitas->banyaknya;?>
          <tr>
            <td><?= $no ?></td>
            <td><?= ($fasilitas->jenis_peralatan) ? $fasilitas->jenis_peralatan : "-"; ?></td>
            <td><?= ($fasilitas->banyaknya) ? number_format($fasilitas->banyaknya) : "-"; ?></td>
            <td><?= ($fasilitas->anggaran) ? "Rp".number_format($fasilitas->anggaran) : "-"; ?></td>
             <?php if(AuthData()->level == 3):?>
              <td><?= ($fasilitas->tahun) ? $fasilitas->tahun : "-"; ?></td>
              <td><?= ($fasilitas->status) ? $fasilitas->status : "-"; ?></td>
             
             <?php endif;?>
             <?php if(AuthData()->level == 4):?>
                    <td><?= "Rp".number_format($sub_total) ?></td>
             <?php endif;?>
           
          <?php  $no++; $total+=$sub_total ?>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
            <tr>
                <th colspan="<?php if(AuthData()->level == 3): echo 5; elseif(AuthData()->level == 4): echo 4; endif;?>" style="text-align:right">Total:</th>
                <th>Rp.<?= number_format($total) ?></th>
            </tr>
        </tfoot>
    </table>