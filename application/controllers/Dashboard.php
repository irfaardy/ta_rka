<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->auth->protect();
	}
	public function index()
	{

		$this->load->template('dashboard/index');
	}
	
}
