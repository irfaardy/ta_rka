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

function rddkfFields($params = null) {
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

function rkaFields($params = null) {
  if ($params == null) {
    return (object) array('no' => null, 'no_sarmut' => null, 'kegiatan' => null, 'januari' => null, 'februari' => null, 'maret' => null, 'april' => null, 'mei' => null, 'juni' => null, 'juli' => null, 'agustus' => null, 'september' => null, 'oktober' => null, 'november' => null, 'desember' => null);
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

function detailKegiatanFields($params = null) {
  if ($params == null) {
    return (object) array('no_detail' => null, 'no' => null, 'kode_rekening' => null, 'uraian' => null, 'qty' => null, 'anggaran' => null, 'jurusan_id' => null, 'status_kajur');
  }else {
    return $params;
  }
}

function selectOptionSelected($value, $current_value) {
  if ($value == $current_value) {
    return "selected";
  }
}

function checked($rka, $value) {
  if ($rka[$value] == 1) {
    return "checked";
  }
}

function yearSelect(){
  $mulai  =date('Y', strtotime('-4 year'));
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

function listMonth() {
  return array('januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember');
}

function money($amount) {
  return "Rp. " . number_format($amount, 0, ',', '.');
}

function status_kajur($status) {
  if ($status == 2) {
    return "Ditolak";
  }else {
    return ($status ? "Diterima" : "Dalam Proses");
  }
}

function status_color($status) {
  if ($status == 2) {
    return "table-danger";
  }else if($status == 1) {
    return "table-success";
  }else {
    return "";
  }
}

  function getDetailKegiatan($no){
     $CI = &get_instance();
     return $CI->detail_kegiatan->getAll($no);
  }

  function now(){
    $y = date("Y");
    $m = date("m");
    $d = date("d");

    switch($m){
      case "01":
        $m = "Januari";
      break;
      case "02":
        $m = "Februari";
      break;
      case "03":
        $m = "Maret";
      break;
      case "04":
        $m = "April";
      break;
      case "05":
        $m = "Mei";
      break;
      case "06":
        $m = "Juni";
      break;
      case "07":
        $m = "Juli";
      break;
      case "08":
        $m = "Agustus";
      break;
      case "09":
        $m = "September";
      break;
      case "10":
        $m = "Oktober";
      break;
      case "11":
        $m = "November";
      break;
      case "12":
        $m = "Desember";
      break;
      default:
       $m = "N/A";
       break;
    }
    return $d.' '.$m.' '.$y;
  }
