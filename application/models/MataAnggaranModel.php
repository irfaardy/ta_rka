<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataAnggaranModel extends CI_Model {
  private $table = "tb_mata_anggaran";

  public function getAll() {
    return $this->db->get($this->table)->result();
  }

  public function get($id) {
    return $this->db->where('no_rekening', $id)->get($this->table)->row();
  }

  public function create() {
		$params = $this->input->post();

		try{
			$this->db->insert($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
	}

  public function update($id) {
    $params = $this->input->post();

		try{
			$this->db->update($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

  public function delete($id) {
    $params = array('no_rekening' => $id);

    try{
      $this->db->delete($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

}
