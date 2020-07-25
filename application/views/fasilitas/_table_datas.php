<?php if ($obj != null): ?>
  <div class="table-responsive mt-5">
    <table class="table table-bordered table-striped" id="fasilitas" >
      <thead>
        <tr>
          <th class="text-nowrap">No</th>
          <th class="text-nowrap">Jenis Peralatan Laboratorium</th>
          <th class="text-nowrap">Banyaknya</th>
          <th class="text-nowrap">Anggaran(Rp)</th>
       
          <?php if(AuthData()->level == 2 || AuthData()->level == 3 ):?>
            <th class="text-nowrap">Aksi</th>
          <?php endif;?>
         
          <th class="text-nowrap">Total(Rp)</th>
       
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
             <?php if(AuthData()->level == 2):?>
             
               <!-- actions -->
            <td style="min-width: 200px;">
              <a href="<?= base_url('/Fasilitas/edit/'.$fasilitas->no_fasilitas) ?>" class="btn btn-xs btn-warning">
                <i class="fas fa-edit fa-fw"></i>
                Edit
              </a>
             
              <button class="btn btn-xs btn-danger" data-action="<?= base_url('/Fasilitas/delete/'.$fasilitas->no_fasilitas) ?>" data-delete>
                <i class="fas fa-trash fa-fw"></i>
                Hapus
              </button>
            </td>
             <?php endif;?>
               <?php if(AuthData()->level == 3):?>
             
               <!-- actions -->
            <td style="min-width: 200px;">
              <a href="<?= base_url('/Fasilitas/edit/'.$fasilitas->no_fasilitas) ?>" class="btn btn-xs btn-warning">
                <i class="fas fa-check-circle fa-fw"></i>
                Edit
              </a>
             
              <button class="btn btn-xs btn-danger" data-action="<?= base_url('/Fasilitas/delete/'.$fasilitas->no_fasilitas) ?>" data-delete>
                <i class="fas fa-times-circle fa-fw"></i>
                Hapus
              </button>
            </td>
             <?php endif;?>
           
          <?php  $no++; $total+=$sub_total ?>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
            <tr>
                <th colspan="<?php if(AuthData()->level == 2): echo 5; elseif(AuthData()->level == 4): echo 4; endif;?>" style="text-align:right">Total:</th>
                <th>Rp.<?= number_format($total) ?></th>
            </tr>
        </tfoot>
    </table>
  </div>
<?php else: ?>
  <div class="d-block mt-5 text-center">
    <h4>Data Kosong</h4>
  </div>
<?php endif; ?>
