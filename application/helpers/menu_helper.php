<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function admin_menus() {
  $CI = &get_instance();
  $list = [
    array(
      'text' => 'Home',
      'icon' => 'fas fa-home',
      'url'  => base_url('/'),
      'user' => [1, 2, 3, 4, 5]
    ),
    array(
      'text' => 'Kelola User',
      'icon' => 'fas fa-users',
      'url'  => base_url('/users'),
      'user' => [5]
    ),
    array(
      'text' => 'Kelola Mata Anggaran',
      'icon' => 'fas fa-list',
      'url'  => base_url('/MataAnggaran'),
      'user' => [4]
    ),
    array(
      'text' => 'Kelola Sasaran Mutu',
      'icon' => 'fas fa-list',
      'url'  => base_url('/SasaranMutu'),
      'user' => [3]
    ),
    array(
      'text' => 'RKA',
      'icon' => 'fas fa-clipboard-list',
      'url'  => base_url('#'),
      'user' => [2, 1]
    ),
    array(
      'text' => 'Status RKA',
      'icon' => 'fas fa-clipboard-check',
      'url'  => base_url('#'),
      'user' => [2, 1]
    ),
    array(
      'text' => 'Kegiatan RKA',
      'icon' => 'fas fa-calendar',
      'url'  => base_url('#'),
      'user' => [3]
    ),
    array(
      'text' => 'Persetujuan RKA',
      'icon' => 'fas fa-calendar-check',
      'url'  => base_url('#'),
      'user' => [3]
    ),
    array(
      'text' => 'Cetak RKA',
      'icon' => 'fas fa-print',
      'url'  => base_url('#'),
      'user' => [5, 4]
    ),
    array(
      'text' => 'RDDKF',
      'icon' => 'fas fa-bars',
      'url'  => base_url('#'),
      'user' => [5, 4, 3]
    ),
    array(
      'text' => 'Logout',
      'icon' => 'fas fa-sign-out-alt',
      'url'  => base_url('/logout?token='.$CI->session->login_token),
      'user' => [1, 2, 3, 4, 5]
    ),
  ];

  return $list;
}
