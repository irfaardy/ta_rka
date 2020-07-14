<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function bcrypt($plain_string)
{
   $hashed = password_hash($plain_string, PASSWORD_BCRYPT);

   return $hashed;
}