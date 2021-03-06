<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitas extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([4,2,3]);

	}
	public function index() {
		$where = ['tahun' => !empty($this->input->get('tahun'))?$this->input->get('tahun'):date("Y")];
		if(AuthData()->level == 3){
			$title = "Data Pengajuan Fasilitas Laboratorium";
			$where['status'] = null;
		} else{
			$title = "Fasilitas Laboratorium";
		}
		$fasilitas = $this->fasilitas->getAll($where);

    	$params = array("title" => $title , 'fasilitas' => $fasilitas);
		$this->load->template('fasilitas/index', $params);
	}
	public function ditolak() {
		$this->auth->protect([3]);
		$where = ['tahun' => !empty($this->input->get('tahun'))?$this->input->get('tahun'):date("Y")];

		$title = "Data Pengajuan Fasilitas Laboratorium Ditolak";
		$where['status'] = "DITOLAK";

		$fasilitas = $this->fasilitas->getAll($where);

    	$params = array("title" => $title , 'fasilitas' => $fasilitas);
		$this->load->template('fasilitas/index_ditolak', $params);
	}

	function tambah() {
		$this->auth->protect([2]);
		$params = array("title" => "Tambah Fasilitas Laboratorium", "obj" => null, "action" => base_url("/Fasilitas/save"));
		$this->load->template('fasilitas/form', $params);
	}

	function edit($id) {
		$this->auth->protect([2,3]);
		$obj = $this->fasilitas->get($id);
		if ($this->input->get('f') == "ditolak") {
			$action = base_url("/Fasilitas/update/$id?f=ditolak");
		}else{
			$action = base_url("/Fasilitas/update/$id");
		}
		$params = array("title" => "Ubah Fasilitas Laboratorium", "obj" => $obj, "action" => $action);
		$this->load->template('fasilitas/form', $params);
	}

	function save() {
		$this->auth->protect([2]);
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
		$this->auth->protect([2,3]);
		if($this->fasilitas->update($id, $this->input->get('f'))){
			$this->session->set_flashdata('success','Berhasil Mengubah data Fasilitas.');

			if ($this->input->get('f') == 'ditolak') {
				return redirect(base_url('/Fasilitas/ditolak'));
			}else{
				return redirect(base_url('/Fasilitas'));
			}

		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data Fasilitas.');

			if ($this->input->get('f') == 'ditolak') {
				return redirect(base_url("/Fasilitas/edit/$id?f=ditolak"));
			}else{
				return redirect(base_url("/Fasilitas/edit/$id"));
			}
		}
	}

	function delete($id) {
		$this->auth->protect([2]);
		if($this->fasilitas->delete($id)){
			$this->session->set_flashdata('success','Berhasil Menghapus data Fasilitas.');
		} else{
			$this->session->set_flashdata('fail','Gagal Menghapus data Fasilitas.');
		}

		if ($this->input->get('f') == 'ditolak') {
			return redirect(base_url('/Fasilitas/ditolak'));
		}else{
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
        $this->pdf->load_view('pdf/pdf_cetak', ['data'=>$data,'tahun'=>$this->input->get('tahun')]);

	}
	public function approve($id){
		$obj = $this->fasilitas->get($id);
		if(empty($obj)){
			$this->session->set_flashdata('fail','Data tidak ditemukan');
			return redirect(base_url('/Fasilitas'));
		}
		$this->fasilitas->approve($id);
		$this->session->set_flashdata('success','Berhasil Menyetujui Fasilitas.');

		return redirect(base_url('/Fasilitas'));
	}
	public function revoke($id){
		$obj = $this->fasilitas->get($id);
		if(empty($obj)){
			$this->session->set_flashdata('fail','Data tidak ditemukan');
			return redirect(base_url('/Fasilitas'));
		}
		$this->fasilitas->revoke($id);
		$this->session->set_flashdata('success','Berhasil Menolak Fasilitas.');

		return redirect(base_url('/Fasilitas'));
	}
	public function status(){
		$where = ['tahun' => !empty($this->input->get('tahun'))?$this->input->get('tahun'):date("Y")];
			$title = "Status Pengajuan Fasilitas";
		$fasilitas = $this->fasilitas->getAll($where);

    	$params = array("title" => $title , 'fasilitas' => $fasilitas);
		$this->load->template('fasilitas/index_pengajuan', $params);
	}

}
