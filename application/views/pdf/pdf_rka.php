<!DOCTYPE html>
<html>
<head>
	
<title>PROGRAM KERJA TAHUN ANGGARAN <?= $tahun ?></title>
<link rel="stylesheet" href="<?= assets('css/adminlte.min.css') ?>">
</head>
<body onload="window.print();">
	<style type="text/css">
		th {

			vertical-align: middle !important;
			align-items: center !important;
		}
		.text-center{
			font-weight: bold; 
		}
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
<table width="100%" class="table table-bordered">
	<div align="center"> <h3>PROGRAM KERJA TAHUN ANGGARAN <?= $tahun ?></h3>
<thead>
  <tr>
    <th class="text-center blue" rowspan="2">No</th>
    <th class="text-center blue"  valign="middle" rowspan="2">Kegiatan</th>
    <th class="text-center blue"  valign="middle" colspan="12">Bulan</th>
    <th class="text-center blue"  valign="middle"colspan="5">Anggaran</th>
  </tr>
  <tr>
    <td class="text-center blue">1</td>
    <td class="text-center blue">2</td>
    <td class="text-center blue">3</td>
    <td class="text-center blue">4</td>
    <td class="text-center blue">5</td>
    <td class="text-center blue">6</td>
    <td class="text-center blue">7</td>
    <td class="text-center blue">8</td>
    <td class="text-center blue">9</td>
    <td class="text-center blue">10</td>
    <td class="text-center blue">11</td>
    <td class="text-center blue">12</td>
    <td class="text-center blue">Mata Anggaran</td>
    <td class="text-center blue">Uraian</td>
    <td class="text-center blue">Qty</td>
    <td class="text-center blue">Anggaran</td>
    <td class="text-center blue">Jumlah</td>
  </tr>
  <tr>
    <td class="text-center blue">(1)</td>
    <td class="text-center blue">(2)</td>
    <td class="text-center blue" colspan="12">(3)</td>
    <td class="text-center blue">(4)</td>
    <td class="text-center blue">(5)</td>
    <td class="text-center blue">(6)</td>
    <td class="text-center blue">(7)</td>
    <td class="text-center blue">(8)</td>
  </tr>
</thead>
<tbody>
<?php $no = 0; 
$total = 0;?>
 <?php foreach($data as $d): $no++;?>

        <?php $dk_num = 0; 
        $dk_res=getDetailKegiatan($d->no);?>
    <?php foreach( $dk_res as $dk): ?>
        <?php if($dk_num == 0): ?>
          <tr>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?>><?= $no ?></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?>><?= $d->kegiatan ?></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->januari ? "gray":"white" ?>" ></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->februari ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->maret ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->april ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->mei ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->juni ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->juli ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->agustus ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->september ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->oktober ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->november ? "gray":"white" ?>"></td>
            <td <?= count($dk_res) > 0 ? 'rowspan="'.count($dk_res).'"': null ?> class="<?= $d->desember ? "gray":"white" ?>"></td>
            <td><?= $dk->kode_rekening ?></td>
            <td><?= $dk->uraian ?></td>
            <td><?= $dk->qty ?></td>
            <td>Rp.<?= number_format($dk->anggaran) ?></td>
            <td>Rp.<?= number_format($dk->anggaran*$dk->qty) ?></td>
          </tr>
          <?php else: ?>
            <tr>
                 <td><?= $dk->kode_rekening ?></td>
                <td><?= $dk->uraian ?></td>
                <td><?= $dk->qty ?></td>
                <td>Rp.<?= number_format($dk->anggaran) ?></td>
                <td>Rp.<?= number_format($dk->anggaran*$dk->qty) ?></td>
              </tr>
      <?php endif; ?>
        <?php $dk_num++; $total += $dk->anggaran*$dk->qty;?>
    <?php endforeach; ?>
<?php endforeach; ?>
  
</tbody>
<tfoot>
    <tr>
        <td></td>
        <td><b>Total Anggaran</b></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><b>Rp.<?= number_format($total) ?></b></td>

    </tr>
</tfoot>
</table>
<div align="right" style="margin-right: 80px;">
    <table >
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
    </div>
</body>
</html>