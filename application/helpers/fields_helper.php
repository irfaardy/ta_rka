<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function userFields($params = null) {
  if ($params == null) {
    return (object) array('id' => null, 'username' => null, 'jurusan_id' => null, 'nama' => null, 'level' => null, 'password' => null);
  }else {
    return $params;
  }
}

function sasaranMutuFields($params = null) {
  if ($params == null) {
    return array('sarmut' => null, 'indikator' => null, 'turunan' => null, 'bobot' => null, 'target' => null, 'akar_masalah' => null, 'tkp' => null, 'd_akhir_tahun' => null, 'tw1' => null, 'tw2' => null, 'tw3' => null, 'tw4' => null);
  }else {
    return $params;
  }
}
function jurusanFields($params = null) {
  if ($params == null) {
    return array('nama' => null);
  }else {
    return $params;
  }
}

function  rddkfFields($params = null) {
  if ($params == null) {
    return array('tahun' => null,'file' => null,);
  }else {
    return $params;
  }
}
function mataAnggaranFields($params = null) {
  if ($params == null) {
    return array('kode_rekening' => null,'nama_rekening' => null);
  }else {
    return $params;
  }
}

function fasilitasFields($params = null) {
  if ($params == null) {
    return array('jenis_peralatan' => null,'banyaknya' => null,'anggaran' => null,'tahun' => null,'status' => null);
  }else {
    return $params;
  }
}

function selectOptionSelected($value, $current_value) {
  if ($value == $current_value) {
    return "selected";
  }

}

function yearSelect(){
  $mulai  =date('Y', strtotime('-20 year'));
  $selesai = date('Y');
  $years = [];
  for($selesai; $selesai >= $mulai; $selesai--) {
    $years[] =$selesai;
  }
  return $years;
}

function jenisPeralatan(){
  $jenis = ['alat_ukur' => 'Alat Ukur','pertukangan' => 'Pertukangan', 'elektronik' => 'Elektronik','kimia' => 'Kimia'];
  return $jenis;
}

function checkPerencanaan($kode_rekening){
  $CI = &get_instance();
  $cek = $CI->perencanaan->cekKodeRekening($kode_rekening);
  if($cek > 0){
    return true;
  }
    return false;
}