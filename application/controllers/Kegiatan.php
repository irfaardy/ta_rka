<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([1,5]);
	}

	function index($no_perencanaan) {
		$obj = $this->detail_kegiatan->getAll($no_perencanaan);

		$params = array("title" => "Rencana Kerja Anggaran", "daftar_kegiatan" => $obj, "no_perencanaan" => $no_perencanaan);
		$this->load->template('kegiatan/daftar_kegiatan', $params);
	}

	function tambah($no_perencanaan) {
		$mata_anggaran = $this->mata_anggaran->getAll();
		$perencanaan = $this->perencanaan->get($no_perencanaan);
		$params = array("title" => "Rencana Kerja Anggaran",
			"obj" => [],
			"action" => "/Kegiatan/save/$no_perencanaan",
			"perencanaan" => $perencanaan,
			"mata_anggaran" => $mata_anggaran);
		$this->load->template('kegiatan/form', $params);
	}

	function edit($no_perencanaan, $id) {
		$mata_anggaran = $this->mata_anggaran->getAll();
		$perencanaan = $this->perencanaan->get($no_perencanaan);
		$obj = $this->detail_kegiatan->get($id);
		$params = array("title" => "Rencana Kerja Anggaran",
			"obj" => $obj,
			"action" => "/Kegiatan/update/$no_perencanaan/$id",
			"perencanaan" => $perencanaan,
			"mata_anggaran" => $mata_anggaran);
		$this->load->template('kegiatan/form', $params);
	}

	function save($no_perencanaan) {
		if($this->detail_kegiatan->create($no_perencanaan)){
			$this->session->set_flashdata('success','Berhasil Menambahkan data sasaran mutu.');

			return redirect(base_url('/Kegiatan/index/'.$no_perencanaan));
		} else{
			$this->session->set_flashdata('fail','Gagal menambahkan data sasaran mutu.');
			return redirect(base_url('/Kegiatan/tambah/'.$no_perencanaan));
		}
	}

	function update($no_perencanaan, $id) {
		if($this->detail_kegiatan->update($id)){
			$this->session->set_flashdata('success','Berhasil Mengubah data sasaran mutu.');

			return redirect(base_url('/Kegiatan/index/'.$no_perencanaan));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data sasaran mutu.');
			return redirect(base_url('/Kegiatan/edit/'.$no_perencanaan));
		}
	}

	function delete($no_perencanaan, $id) {
		if($this->detail_kegiatan->delete($id)){
			$this->session->set_flashdata('success','Berhasil Menghapus Detail Kegiatan.');
		} else{
			$this->session->set_flashdata('fail','Gagal Menghapus Detail Kegiatan.');
		}

		return redirect(base_url('/Kegiatan/index/'.$no_perencanaan));
	}

}
