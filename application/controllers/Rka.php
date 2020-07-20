<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SasaranMutu extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([1,5]);
	}
	public function index() {
		$rka = $this->detail_kegiatan->getAll();
    $params = array("title" => "Rencana Kerja Anggaran", 'rka' => $sasaran_mutu);
		$this->load->template('rka/index', $params);
	}

	function tambah() {
		$params = array("title" => "Rencana Kerja Anggaran", "obj" => null, "action" => "/Rka/save");
		$this->load->template('rka/form', $params);
	}

	function edit($id) {
		$obj = $this->detail_kegiatan->get($id);
		$params = array("title" => "Rencana Kerja Anggaran", "obj" => $obj, "action" => "/Rka/update/$id");
		$this->load->template('rka/form', $params);
	}

	function save() {
		if($this->detail_kegiatan->create()){
			$this->session->set_flashdata('success','Berhasil Menambahkan data sasaran mutu.');

			return redirect(base_url('/Rka'));
		} else{
			$this->session->set_flashdata('fail','Gagal menambahkan data sasaran mutu.');
			return redirect(base_url('/Rka/tambah'));
		}
	}

	function update($id) {
		if($this->detail_kegiatan->update($id)){
			$this->session->set_flashdata('success','Berhasil Mengubah data sasaran mutu.');

			return redirect(base_url('/Rka'));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data sasaran mutu.');
			return redirect(base_url('/Rka/tambah'));
		}
	}

	function delete($id) {
		if($this->detail_kegiatan->delete($id)){
			$this->session->set_flashdata('success','Berhasil Menghapus data sasaran mutu.');

			return redirect(base_url('/Rka'));
		} else{
			$this->session->set_flashdata('fail','Gagal Menghapus data sasaran mutu.');
			return redirect(base_url('/Rka'));
		}
	}

}
