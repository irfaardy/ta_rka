<link rel="stylesheet" href="<?= assets('css/adminlte.min.css') ?>">
<title>Laporan Pengajuan Fasilitas</title>
<style type="text/css">
  .blue{
              background-image: url('<?= assets('img/blue.jpg') ?>') !important; 
            background-size: cover;
    }
        
  .gray {
      background-image: url('<?= assets('img/gray.png') ?>') !important; 
      background-size: cover;
  }
  .white {
      background-color: white;
  }
</style>
 <div align="center"> <h3>LAPORAN PENGAJUAN FASILITAS TAHUN <?= $tahun ?></h3></div>
<table width="100%" class="table table-bordered">
<thead>
         <tr bgcolor="lightblue" align="center">
          <th class="text-nowrap blue" align="center">No</th>
          <th class="text-nowrap blue" align="center">Jenis Peralatan Laboratorium</th>
          <th class="text-nowrap blue" align="center">Banyaknya</th>
          <th class="text-nowrap blue" align="center">Anggaran(Rp)</th>
          <?php if(AuthData()->level == 3):?>
            <th class="text-nowrap blue" align="center">Tahun</th>
            <th class="text-nowrap blue" >Status</th>
          <?php endif;?>
          <?php if(AuthData()->level == 4):?>
          <th class="text-nowrap blue" align="center">Total(Rp)</th>
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
    <table width="100%">
    <tr>
        <td width="75%"></td>
        <td width="25%"> <table >
        <tr>
            <td align="right">Cimahi, <?= now() ?></td>
        </tr>
        <tr>
            <td align="right">Ketua Program Studi Informatika</td>
        </tr> 
        <tr>
            <td>
                <br>
                <br>
                <br>
                <br>

            </td>
        </tr> 
        <tr>
            <td align="right">Wina Witanti S.T., M.T.,</td>
        </tr>
    </table></td>
    </tr>
</table>