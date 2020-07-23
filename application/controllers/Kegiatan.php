<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([1,5]);
	}

	function tambah($no_kegiatan) {
		$sasaran_mutu = $this->sasaran_mutu->getAll();
		$params = array("title" => "Rencana Kerja Anggaran", "obj" => null, "action" => "/Rka/save", 'sasaran_mutu' => $sasaran_mutu);
		$this->load->template('rka/form', $params);
	}

	function edit($no_kegiatan, $id) {
		$sasaran_mutu = $this->sasaran_mutu->getAll();
		$obj = $this->perencanaan->get($id);
		$params = array("title" => "Rencana Kerja Anggaran", "obj" => $obj, "action" => "/Rka/update/$id", 'sasaran_mutu' => $sasaran_mutu);
		$this->load->template('rka/form', $params);
	}

	function save($no_kegiatan) {
		if($this->perencanaan->create()){
			$this->session->set_flashdata('success','Berhasil Menambahkan data sasaran mutu.');

			return redirect(base_url('/Rka'));
		} else{
			$this->session->set_flashdata('fail','Gagal menambahkan data sasaran mutu.');
			return redirect(base_url('/Rka/tambah'));
		}
	}

	function update($id) {
		if($this->perencanaan->update($id)){
			$this->session->set_flashdata('success','Berhasil Mengubah data sasaran mutu.');

			return redirect(base_url('/Rka'));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data sasaran mutu.');
			return redirect(base_url('/Rka/tambah'));
		}
	}

	function delete($id) {
		if($this->perencanaan->delete($id)){
			$this->session->set_flashdata('success','Berhasil Menghapus data sasaran mutu.');

			return redirect(base_url('/Rka'));
		} else{
			$this->session->set_flashdata('fail','Gagal Menghapus data sasaran mutu.');
			return redirect(base_url('/Rka'));
		}
	}

}
