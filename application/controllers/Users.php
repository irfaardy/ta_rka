<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect();
	}
	public function index()
	{
		$user = $this->user->getAll();
		$this->load->template('kelola_user/index',['title' => 'Kelola User','user' => $user]);
	}

	public function create()
	{
		
		$this->load->template('kelola_user/form',['title' => 'Tambah User']);
	}
	
}
