<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function admin_menus() {
  $CI = &get_instance();
  $list = [
    array(
      'text' => 'Kelola User',
      'icon' => 'fas fa-user',
      'url'  => '/user'
    ),
    array(
      'text' => 'Logout',
      'icon' => 'fas fa-sign-out-alt',
      'url'  => '/logout?token='.$CI->session->login_token
    ),
  ];

  return $list;
}
