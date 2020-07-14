<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SasaranMutu extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect();
	}
	public function index() {
    $params = array("pageTitle" => "Sasaran Mutu");
		$this->load->template('sasaranMutu/index', $params);
	}

}
