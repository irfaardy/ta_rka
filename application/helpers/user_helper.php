<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function AuthData()
{
	$CI = &get_instance();
    return $CI->auth->user();
}
function userLevel(){
	$arr = [
			'1' => 'Sekertaris Jurusan',
			'2' => 'Ketua Laboratorium',
			'3' => 'Ketua Jurusan',
			'4' => 'Ka.Sub Bag TU',
			'5' => 'Administrator',
			];
	return $arr;
}