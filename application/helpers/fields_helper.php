<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function sasaranMutuFields($params = null) {
  if ($params == null) {
    return array('sarmut' => null, 'indikator' => null, 'turunan' => null, 'bobot' => null, 'target' => null, 'akar_masalah' => null, 'tkp' => null, 'd_akhir_tahun' => null, 'tw1' => null, 'tw2' => null, 'tw3' => null, 'tw4' => null);
  }else {
    return $params;
  }
}