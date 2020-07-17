<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function AuthData()
{
	$CI = &get_instance();
    return $CI->auth->user();
}
function userLevel($level = null){
	$arr = [
			'1' => 'Sekertaris Jurusan',
			'2' => 'Kepala Laboratorium',
			'3' => 'Ketua Jurusan',
			'4' => 'Ka.Sub Bag TU',
			'5' => 'Administrator',
			];
	if(!empty($level)){
		return !empty($arr[$level])?$arr[$level]:"-";
	}
	return $arr;
}
function jurusanList(){
	$CI = &get_instance();
	return $CI->jurusan->getAll();
}
