<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rka extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([1,2]);
	}
	public function index() {
		$rka = $this->perencanaan->getAll();
    $params = array("title" => "Rencana Kerja Anggaran", 'rka' => $rka);
		$this->load->template('rka/index', $params);
	}

	public function status() {
		$rka = $this->perencanaan->getAll();
    $params = array("title" => "Rencana Kerja Anggaran", 'rka' => $rka);
		$this->load->template('rka/status_pengajuan', $params);
	}

	function tambah() {
		$sasaran_mutu = $this->sasaran_mutu->getAll();
		$params = array("title" => "Rencana Kerja Anggaran", "obj" => null, "action" => "/Rka/save", 'sasaran_mutu' => $sasaran_mutu);
		$this->load->template('rka/form', $params);
	}

	function edit($id) {
		$sasaran_mutu = $this->sasaran_mutu->getAll();
		$obj = $this->perencanaan->get($id);
		$params = array("title" => "Rencana Kerja Anggaran", "obj" => $obj, "action" => "/Rka/update/$id", 'sasaran_mutu' => $sasaran_mutu);
		$this->load->template('rka/form', $params);
	}

	function save() {
		$this->perencanaan->validate();
		if($this->perencanaan->create()){
			$this->session->set_flashdata('success','Berhasil Menambahkan data sasaran mutu.');
			$id = $this->db->insert_id();

			return redirect(base_url("/Kegiatan/tambah/$id"));
		} else{
			$this->session->set_flashdata('fail','Gagal menambahkan data sasaran mutu.');
			return redirect(base_url('/Rka/tambah'));
		}
	}

	function update($id) {
		if($this->perencanaan->update($id)){
			$this->session->set_flashdata('success','Berhasil Mengubah data sasaran mutu.');

			return redirect(base_url("/Rka"));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data sasaran mutu.');

			return redirect($this->agent->referrer());
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
