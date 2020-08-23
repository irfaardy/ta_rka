<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SasaranMutu extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([3,5]);
	}
	public function index() {
		$year = $this->input->get('tahun');
		$sasaran_mutu = $this->sasaran_mutu->getAll($year);
    $params = array("title" => "Sasaran Mutu", 'sasaran_mutu' => $sasaran_mutu);
		$this->load->template('sasaran_mutu/index', $params);
	}

	function tambah() {
		$params = array("title" => "Tambah Sasaran Mutu", "obj" => null, "action" => base_url("/SasaranMutu/save"));
		$this->load->template('sasaran_mutu/form', $params);
	}

	function edit($id) {
		$obj = $this->sasaran_mutu->get($id);
		$params = array("title" => "Ubah Sasaran Mutu", "obj" => $obj, "action" => base_url("/SasaranMutu/update/$id"));
		$this->load->template('sasaran_mutu/form', $params);
	}

	function save() {
		if($this->sasaran_mutu->create()){
			$this->session->set_flashdata('success','Berhasil Menambahkan data sasaran mutu.');

			return redirect(base_url('/SasaranMutu'));
		} else{
			$this->session->set_flashdata('fail','Gagal menambahkan data sasaran mutu.');
			return redirect(base_url('/SasaranMutu/tambah'));
		}
	}

	function update($id) {
		if($this->sasaran_mutu->update($id)){
			$this->session->set_flashdata('success','Berhasil Mengubah data sasaran mutu.');

			return redirect(base_url('/SasaranMutu'));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data sasaran mutu.');
			return redirect(base_url('/SasaranMutu/tambah'));
		}
	}

	function delete($id) {
		if($this->sasaran_mutu->delete($id)){
			$this->session->set_flashdata('success','Berhasil Menghapus data sasaran mutu.');

			return redirect(base_url('/SasaranMutu'));
		} else{
			$this->session->set_flashdata('fail','Gagal Menghapus data sasaran mutu.');
			return redirect(base_url('/SasaranMutu'));
		}
	}

}
