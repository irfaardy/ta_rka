<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function admin_menus() {
  $CI = &get_instance();
  $list = [
    array(
      'text' => 'Home',
      'icon' => 'fas fa-home',
      'url'  => base_url('/'),
      'dropdown_menus' => null,
      'user' => [1, 2, 3, 4, 5]
    ),
    array(
      'text' => 'Kelola User',
      'icon' => 'fas fa-users',
      'url'  => base_url('/Users'),
      'dropdown_menus' => null,
      'user' => [5]
    ),
    array(
      'text' => 'Kelola Jurusan',
      'icon' => 'fas fa-university',
      'url'  => base_url('/Jurusan'),
      'dropdown_menus' => null,
      'user' => [5]
    ),
    array(
      'text' => 'Kelola Mata Anggaran',
      'icon' => 'fas fa-list',
      'url'  => base_url('/MataAnggaran'),
      'dropdown_menus' => null,
      'user' => [4]
    ),
    array(
      'text' => 'Kelola Sasaran Mutu',
      'icon' => 'fas fa-list',
      'url'  => base_url('/SasaranMutu'),
      'dropdown_menus' => null,
      'user' => [3]
    ),
    array(
      'text' => 'RKA',
      'icon' => 'fas fa-clipboard-list',
      'url'  => base_url('/Rka'),
      'dropdown_menus' => null,
      'user' => [2, 1]
    ),
    array(
      'text' => 'Fasilitas Laboratorium',
      'icon' => 'fas fa-list',
      'url'  => base_url('/Fasilitas'),
      'dropdown_menus' => null,
      'user' => [2]
    ),
    array(
      'text' => 'Status RKA',
      'icon' => 'fas fa-clipboard-check',
      'url'  => base_url('/Rka/status'),
      'dropdown_menus' => null,
      'user' => [1]
    ),
    array(
      'text' => 'Status Pengajuan',
      'icon' => 'fas fa-clipboard-list',
      'url'  => base_url('#'),
      'dropdown_menus' => [
        [ 'text' => 'Rka',
          'url'  => base_url('/Rka/status'),
          'user' => [4]
        ],
        [ 'text' => 'Fasilitas',
          'url'  => base_url('#'),
          'user' => [4]
        ],
      ],
      'user' => [2]
    ),
     array(
      'text' => 'Pengajuan Fasilitas Lab',
      'icon' => 'fas fa-clipboard-list',
      'url'  => base_url('#'),
      'dropdown_menus' => [
        [ 'text' => 'Data Pengajuan',
          'url'  => base_url('/Fasilitas/'),
          'user' => [3]
        ],
        [ 'text' => 'Pengajuan Ditolak',
          'url'  => base_url('/Fasilitas/ditolak'),
          'user' => [3]
        ],
      ],
      'user' => [3]
    ),
    array(
      'text' => 'Lihat RDKFF',
      'icon' => 'far fa-list-alt',
      'url'  => base_url('#'),
      'dropdown_menus' => null,
      'user' => [2, 1]
    ),
    array(
      'text' => 'Kegiatan RKA',
      'icon' => 'fas fa-calendar',
      'url'  => base_url('#'),
      'dropdown_menus' => null,
      'user' => [3]
    ),
    array(
      'text' => 'Persetujuan RKA',
      'icon' => 'fas fa-calendar-check',
      'url'  => base_url('#'),
      'dropdown_menus' => null,
      'user' => [3]
    ),
    array(
      'text' => 'Cetak Laporan',
      'icon' => 'fas fa-print',
      'url'  => base_url('#'),
      'dropdown_menus' => [
        [ 'text' => 'Cetak Laporan Fasilitas',
          'url'  => base_url('/Fasilitas'),
          'user' => [4]
        ],
        [ 'text' => 'Cetak Laporan RKA',
          'url'  => base_url('#'),
          'user' => [4]
        ],
      ],
      'user' => [4]
    ),
    array(
      'text' => 'Kelola RDDKF',
      'icon' => 'fas fa-bars',
      'url'  => base_url('/RDDKF'),
      'dropdown_menus' => null,
      'user' => [4, 3]
    ),
    array(
      'text' => 'Logout',
      'icon' => 'fas fa-sign-out-alt',
      'url'  => base_url('/logout?token='.$CI->session->login_token),
      'dropdown_menus' => null,
      'user' => [1, 2, 3, 4, 5]
    ),
  ];

  return $list;
}
