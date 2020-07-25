<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([4,3,2]);

	}
	public function index() {
		$fasilitas = $this->fasilitas->getAll(['tahun' => date("Y")]);
    	$params = array("title" => "Laporan Fasilitas Laboratorium", 'fasilitas' => $fasilitas);
		$this->load->template('fasilitas/index', $params);
	}

	function tambah() {
		$this->auth->protect([3]);
		$params = array("title" => "Fasilitas", "obj" => null, "action" => base_url("/Fasilitas/save"));
		$this->load->template('fasilitas/form', $params);
	}

	function edit($id) {
		$this->auth->protect([3]);
		$obj = $this->fasilitas->get($id);
		$params = array("title" => "Fasilitas", "obj" => $obj, "action" => base_url("/Fasilitas/update/$id"));
		$this->load->template('fasilitas/form', $params);
	}

	function save() {
		$this->auth->protect([3]);
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
		$this->auth->protect([3]);
		if($this->fasilitas->update($id)){
			$this->session->set_flashdata('success','Berhasil Mengubah data Fasilitas.');

			return redirect(base_url('/Fasilitas'));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data Fasilitas.');
			return redirect(base_url('/Fasilitas/tambah'));
		}
	}

	function delete($id) {
		$this->auth->protect([3]);
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

	public function cetak(){
		if(empty($this->input->get('tahun'))){
			$this->session->set_flashdata('fail','Mohon pilih tahun.');
			return redirect(base_url('/Fasilitas'));
		}
        $data = $this->fasilitas->getAll(['tahun' => $this->input->get('tahun')]);
        if(empty($data)){
        	$this->session->set_flashdata('fail','Tidak ada data di tahun '.$this->input->get('tahun'));
			return redirect(base_url('/Fasilitas'));
        }
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Laporan_Fasilitas_".$this->input->get('tahun').".pdf";
        $this->pdf->load_view('pdf/pdf_cetak', ['data'=>$data]);

	}

}
