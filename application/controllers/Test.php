<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		$this->load->library('auth');
		if(!$this->auth->check()){
			$this->auth->logout();
		}
	}
	public function index()
	{

		$this->load->template('dashboard/index');
	}
	
}
