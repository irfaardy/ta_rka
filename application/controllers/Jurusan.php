<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([5]);

	}
	public function index() {
		$jurusan = $this->jurusan->getAll();
    	$params = array("title" => "Kelola Jurusan", 'jurusan' => $jurusan);
		$this->load->template('jurusan/index', $params);
	}

	function tambah() {
		$params = array("title" => "Tambah Jurusan", "obj" => null, "action" => base_url("/jurusan/save"));
		$this->load->template('jurusan/form', $params);
	}

	function edit($id) {
		$obj = $this->jurusan->get($id);
		$params = array("title" => "Ubah Jurusan", "obj" => $obj, "action" => base_url("/jurusan/update/$id"));
		$this->load->template('jurusan/form', $params);
	}

	function save() {
		$validator = $this->form_validation;
		$validator->set_rules($this->jurusan->rules());

		if(!$validator->run()){
			$this->session->set_flashdata('fail','Gagal menambahkan data Jurusan. '.validation_errors());
			return redirect(base_url('/jurusan/tambah'));
		}

		if($this->jurusan->create()){
			$this->session->set_flashdata('success','Berhasil Menambahkan data Jurusan.');

			return redirect(base_url('/jurusan'));
		} else{
			$this->session->set_flashdata('fail','Gagal menambahkan data Jurusan.');
			return redirect(base_url('/jurusan/tambah'));
		}
	}

	function update($id) {
		if($this->jurusan->update($id)){
			$this->session->set_flashdata('success','Berhasil Mengubah data Jurusan.');

			return redirect(base_url('/jurusan'));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data Jurusan.');
			return redirect(base_url('/jurusan/tambah'));
		}
	}

	function delete($id) {
		if($this->jurusan->delete($id)){
			$this->session->set_flashdata('success','Berhasil Menghapus data Jurusan.');

			return redirect(base_url('/jurusan'));
		} else{
			$this->session->set_flashdata('fail','Gagal Menghapus data Jurusan.');
			return redirect(base_url('/jurusan'));
		}
	}

}
