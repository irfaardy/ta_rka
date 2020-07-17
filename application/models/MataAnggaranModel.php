<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataAnggaranModel extends CI_Model {
  private $table = "tb_mata_anggaran";

  public function getAll() {
    $this->db->where('jurusan_id', AuthData()->jurusan_id);
    return $this->db->get($this->table)->result();
  }

  public function get($id) {

    $this->db->where('jurusan_id', AuthData()->jurusan_id);
    return $this->db->where('kode_rekening', $id)->get($this->table)->row();
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
      $this->db->where('kode_rekening', $id);
			$this->db->update($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

  public function delete($id) {
    $params = array('kode_rekening' => $id);

    try{
      $this->db->where('kode_rekening', $id);
      $this->db->delete($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

}
