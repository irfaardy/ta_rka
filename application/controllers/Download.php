<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect();

	}
	public function RDDKF($id) {
		$rddkf = $this->rddkf->get($id);
		if(empty($rddkf)){
			$this->session->set_flashdata('fail','Data RDDKF Tidak Ditemukan.');
			return redirect(base_url('/rddkf'));
		}
		$nama_file = './uploads/rddkf/'.$rddkf->rddkf;
		if(!file_exists($nama_file)){
			$this->session->set_flashdata('fail','File RDDKF Tidak Ditemukan.');
			return redirect(base_url('/rddkf'));
		}
		return force_download($nama_file,NULL);
	}

}
