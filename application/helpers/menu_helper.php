<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function admin_menus() {
  $CI = &get_instance();
  $list = [
    array(
      'text' => 'Kelola User',
      'icon' => 'fas fa-user',
      'url'  => base_url('/users')
    ),

    array(
      'text' => 'Kelola Mata Anggaran',
      'icon' => 'fas fa-user',
      'url'  => base_url('/mataanggaran')
    ),
    array(
      'text' => 'Logout',
      'icon' => 'fas fa-sign-out-alt',
      'url'  => base_url('/logout?token='.$CI->session->login_token)
    ),
  ];

  return $list;
}
