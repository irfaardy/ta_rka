<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RDDKF extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->auth->protect([4,3]);

	}
	public function index() {
		$rddkf = $this->rddkf->getAll();
    	$params = array("title" => "RDDKF", 'rddkf' => $rddkf);
		$this->load->template('rddkf/index', $params);
	}

	function tambah() {
		$params = array("title" => "Tambah RDDKF", "obj" => null, "action" => base_url("/RDDKF/save"));
		$this->load->template('rddkf/form', $params);
	}

	function edit($id) {
		$obj = $this->rddkf->get($id);
		$params = array("title" => "Ubah Data RDDKF", "obj" => $obj, "action" => base_url("/RDDKF/update/$id"));
		$this->load->template('rddkf/form', $params);
	}

	function save() {
		$validator = $this->form_validation;
		$validator->set_rules($this->rddkf->rules());

		if(!$validator->run()){
			$this->session->set_flashdata('fail','Gagal menambahkan data rddkf. '.validation_errors());
			return redirect($this->agent->referrer());
		}
			$this->upload();
		
        	 	$upload_data = $this->upload->data(); 
  				$file_name =   $upload_data['file_name'];
                if($this->rddkf->create(['tahun' => $this->input->post('tahun'),'rddkf' => $_FILES['rddkf']['name']])){
					$this->session->set_flashdata('success','Berhasil Menambahkan data rddkf.');

					return redirect(base_url('/RDDKF'));
				} else{
					$this->session->set_flashdata('fail','Gagal menambahkan data rddkf.');
					return redirect(base_url('/RDDKF/tambah'));
				}
        

		
	}

	function update($id) {
		$validator = $this->form_validation;
		$validator->set_rules($this->rddkf->rules());

		if(!$validator->run()){
			$this->session->set_flashdata('fail','Gagal menambahkan data rddkf. '.validation_errors());
			return redirect(base_url('/RDDKF/tambah'));
		}

        $params = ['tahun' => $this->input->post('tahun')];
        if(!empty($_FILES['rddkf']['name'])){
			$this->upload();
        	$params = ['rddkf' => $_FILES['rddkf']['name']];
        }
		if($this->rddkf->update($id,$params)){
			$this->session->set_flashdata('success','Berhasil Mengubah data rddkf.');

			return redirect(base_url('/RDDKF'));
		} else{
			$this->session->set_flashdata('fail','Gagal Mengubah data rddkf.');
			return redirect(base_url('/RDDKF/tambah'));
		}
	}

	function delete($id) {
		$rddkf = $this->rddkf->get($id);
		if(empty($rddkf)){
			$this->session->set_flashdata('fail','Data RDDKF Tidak ditemukan.');
			return redirect(base_url('/RDDKF'));
		}

		if($this->rddkf->delete($id)){
			$file = './uploads/rddkf/'.$rddkf->rddkf;
			if(file_exists($file)){
				unlink($file);
			}
			$this->session->set_flashdata('success','Berhasil Menghapus data rddkf.');
			return redirect(base_url('/RDDKF'));
		} else{
			$this->session->set_flashdata('fail','Gagal Menghapus data rddkf.');
			return redirect(base_url('/RDDKF'));
		}
	}

	private function upload(){
		$config['upload_path']          = './uploads/rddkf/';
        $config['allowed_types']        = 'jpg|png|pdf|doc|docx|rtf';
        $config['max_size']             = 10000;//10MB

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('rddkf'))
        {
                $this->session->set_flashdata('fail',$this->upload->display_errors());
                return redirect($this->agent->referrer());
        }

        return true;
	}

}
