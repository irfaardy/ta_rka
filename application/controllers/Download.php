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
		if(mime_content_type($nama_file)=="application/pdf"){
			header('Content-type: application/pdf');
			header('Content-Disposition: inline; filename="' . $rddkf->rddkf . '"');
			header('Content-Transfer-Encoding: binary');
			header('Content-Length: ' . filesize($nama_file));
			header('Accept-Ranges: bytes');
		
			return readfile($nama_file);
		} elseif(mime_content_type($nama_file)=="image/jpeg" || mime_content_type($nama_file)=="image/png"){
			 header("Content-type: image/jpeg");
			 return readfile($nama_file);
		} else{
			return force_download($nama_file, NULL);
		}
	}

}
