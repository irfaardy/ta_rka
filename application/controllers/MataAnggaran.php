<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataAnggaran extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([4,5]);

	}
	public function index() {
		$mata_anggaran = $this->mata_anggaran->getAll();
    	$params = array("title" => "Mata Anggaran", 'mata_anggaran' => $mata_anggaran);
		$this->load->template('mata_anggaran/index', $params);
	}

	function tambah() {
		$params = array("title" => "Mata Anggaran", "obj" => null, "action" => base_url("/MataAnggaran/save"));
		$this->load->template('mata_anggaran/form', $params);
	}

	function edit($id) {
		$obj = $this->mata_anggaran->get($id);
		$params = array("title" => "Mata Anggaran", "obj" => $obj, "action" => base_url("/MataAnggaran/update/$id"));
		$this->load->template('mata_anggaran/form', $params);
	}

	function save() {
		if($this->mata_anggaran->create()){
			$this->session->set_flashdata('success','Berhasil Menambahkan data Mata Anggaran.');

			return redirect(base_url('/MataAnggaran'));
		} else{
			$this->session->set_flashdata('fail','Gagal menambahkan data Mata Anggaran.');
			return redirect(base_url('/MataAnggaran/tambah'));
		}
	}

	function update($id) {
		if($this->mata_anggaran->update($id)){
			$this->session->set_flashdata('success','Berhasil Mengubah data Mata Anggaran.');

			return redirect(base_url('/MataAnggaran'));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data Mata Anggaran.');
			return redirect(base_url('/MataAnggaran/tambah'));
		}
	}

	function delete($id) {
		if($this->mata_anggaran->delete($id)){
			$this->session->set_flashdata('success','Berhasil Menghapus data Mata Anggaran.');

			return redirect(base_url('/MataAnggaran'));
		} else{
			$this->session->set_flashdata('fail','Gagal Menghapus data Mata Anggaran.');
			return redirect(base_url('/MataAnggaran'));
		}
	}

}
