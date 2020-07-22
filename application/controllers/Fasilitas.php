<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([4]);

	}
	public function index() {
		$fasilitas = $this->fasilitas->getAll();
    	$params = array("title" => "Fasilitas", 'fasilitas' => $fasilitas);
		$this->load->template('fasilitas/index', $params);
	}

	function tambah() {
		$params = array("title" => "Fasilitas", "obj" => null, "action" => base_url("/Fasilitas/save"));
		$this->load->template('fasilitas/form', $params);
	}

	function edit($id) {
		$obj = $this->fasilitas->get($id);
		$params = array("title" => "Fasilitas", "obj" => $obj, "action" => base_url("/Fasilitas/update/$id"));
		$this->load->template('fasilitas/form', $params);
	}

	function save() {
		$this->fasilitas->validate();
		if($this->fasilitas->create()){
			$this->session->set_flashdata('success','Berhasil Menambahkan data Fasilitas.');

			return redirect(base_url('/Fasilitas'));
		} else{
			$this->session->set_flashdata('fail','Gagal menambahkan data Fasilitas.');
			return redirect(base_url('/Fasilitas/tambah'));
		}
	}

	function update($id) {
		if($this->fasilitas->update($id)){
			$this->session->set_flashdata('success','Berhasil Mengubah data Fasilitas.');

			return redirect(base_url('/Fasilitas'));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data Fasilitas.');
			return redirect(base_url('/Fasilitas/tambah'));
		}
	}

	function delete($id) {
		if(checkPerencanaan($id)){
			$this->session->set_flashdata('fail','Tidak dapat menghapus Fasilitas. Karena sedang dipakai di perencanaan.');
			return redirect(base_url('/Fasilitas'));
		}
		if($this->fasilitas->delete($id)){
			$this->session->set_flashdata('success','Berhasil Menghapus data Fasilitas.');

			return redirect(base_url('/Fasilitas'));
		} else{
			$this->session->set_flashdata('fail','Gagal Menghapus data Fasilitas.');
			return redirect(base_url('/Fasilitas'));
		}
	}

}
