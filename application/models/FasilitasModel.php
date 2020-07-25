<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FasilitasModel extends CI_Model {
  private $table = "tb_fasilitas";
  private $primary = "no_fasilitas";

  public function getAll($where=null) {
    $this->db->where('jurusan_id', AuthData()->jurusan_id);
    if(!empty($where)){
      $this->db->where($where);
    }
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
  public function approve($id) {
    $params['jurusan_id'] = $this->auth->user()->jurusan_id;
    $params[$this->primary] = $id;

    try{
      $this->db->where($params);
      $this->db->update($this->table, ['status'=>'DITERIMA']);
      return true;
    } catch(\Exception $e){
      return false;
    }
  }
  public function revoke($id) {
    $params['jurusan_id'] = $this->auth->user()->jurusan_id;
    $params[$this->primary] = $id;

    try{
      $this->db->where($params);
      $this->db->update($this->table, ['status'=>'DITOLAK']);
      return true;
    } catch(\Exception $e){
      return false;
    }
  }

  public function delete($id) {
    $params = array($this->primary => $id);

    try{
      $this->db->where($this->primary, $id);
      $this->db->delete($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }
  
  ///Validator///
 
  private function rules(){
    return [
      [
        'field' => 'jenis_peralatan',
        'label' => 'Jenis Peralatan',
        'rules' => 'required',
        
      ], [
        'field' => 'banyaknya',
        'label' => 'Banyaknya',
        'rules' => 'required|integer',
      ],[
        'field' => 'anggaran',
        'label' => 'Anggaran',
        'rules' => 'required|numeric',
      ],[
        'field' => 'tahun',
        'label' => 'Tahun',
        'rules' => 'required|integer',
      ],
    
    ];
  }
  public function validate(){
      $validator = $this->form_validation;
      $validator->set_rules($this->rules());

      if(!$validator->run()){
        $this->session->set_flashdata('fail','Gagal menambahkan data Mata Anggaran. '.validation_errors());
        return redirect($this->agent->referrer());
      }
  }
}
