<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function AuthData()
{
	$CI = &get_instance();
    return $CI->auth->user();
}