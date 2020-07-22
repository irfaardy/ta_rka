<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataAnggaranModel extends CI_Model {
  private $table = "tb_fasilitas";
  private $primary = "no_fasilitas";

  public function getAll() {
    $this->db->where('jurusan_id', AuthData()->jurusan_id);
    return $this->db->get($this->table)->result();
  }

  public function get($id) {

    $this->db->where('jurusan_id', AuthData()->jurusan_id);
    return $this->db->where($this->primary, $id)->get($this->table)->row();
  }

  public function create() {
		$params = $this->input->post();
		$params['jurusan_id'] = $this->auth->user()->jurusan_id;
		try{
			$this->db->insert($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
	}

  public function update($id) {
    $params = $this->input->post();
    $params['jurusan_id'] = $this->auth->user()->jurusan_id;

		try{
      $this->db->where($this->primary, $id);
			$this->db->update($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

  public function delete($id) {
    $params = array($this->primary => $id);

    try{
      $this->db->where('kode_rekening', $id);
      $this->db->delete($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }
  
  ///Validator///
  private function checkPrimary(){
    $cek = $this->get($this->input->post($this->primary));
    if(empty($cek)){
      return true;
    }
      return false;
  }
  private function rules(){
    return [
      [
        'field' => 'kode_rekening',
        'label' => 'Kode Rekening',
        'rules' => 'required|integer',
        
      ], [
        'field' => 'nama_rekening',
        'label' => 'Nama Rekening',
        'rules' => 'required',
      ],
    
    ];
  }
  public function validate(){
    if($this->checkPrimary()){
      $validator = $this->form_validation;
      $validator->set_rules($this->rules());

      if(!$validator->run()){
        $this->session->set_flashdata('fail','Gagal menambahkan data Mata Anggaran. '.validation_errors());
        return redirect($this->agent->referrer());
      }
    } else{
       $this->session->set_flashdata('fail','Kode Rekening sudah ada.');
        return redirect($this->agent->referrer());
    }
  }
}
