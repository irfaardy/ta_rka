<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SasaranMutuModel extends CI_Model {
  private $table = "tb_sasaran_mutu";

  public function getAll($year = null) {
    $this->db->where('jurusan_id', AuthData()->jurusan_id);

    if ($year != null) {
      $this->db->where('tahun', $year);
    }
    
    return $this->db->get($this->table)->result();
  }

  public function get($id) {
    $this->db->where('jurusan_id', AuthData()->jurusan_id);
    return $this->db->where('no_sarmut', $id)->get($this->table)->row();
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
      $this->db->where('no_sarmut', $id);
			$this->db->update($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

  public function delete($id) {
    $params = array('no_sarmut' => $id);

    try{
      $this->db->delete($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

}
