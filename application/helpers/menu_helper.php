<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function admin_menus() {
  $CI = &get_instance();
  $list = [
    array(
      'text' => 'Kelola User',
      'icon' => 'fas fa-users',
      'url'  => base_url('/users')
    ),

    array(
      'text' => 'Kelola Mata Anggaran',
      'icon' => 'fas fa-list',
      'url'  => base_url('/mataanggaran')
    ),
    array(
      'text' => 'Kelola Sasaran Mutu',
      'icon' => 'fas fa-list',
      'url'  => base_url('/sasaranmutu')
    ),
    array(
      'text' => 'Kegiatan RKA',
      'icon' => 'fas fa-calendar',
      'url'  => base_url('#')
    ),
    array(
      'text' => 'Persetujuan RKA',
      'icon' => 'fas fa-calendar-check',
      'url'  => base_url('#')
    ),
    array(
      'text' => 'RDDKF',
      'icon' => 'fas fa-bars',
      'url'  => base_url('#')
    ),
    array(
      'text' => 'Logout',
      'icon' => 'fas fa-sign-out-alt',
      'url'  => base_url('/logout?token='.$CI->session->login_token)
    ),
  ];

  return $list;
}
