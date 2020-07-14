<?php
class UserModel  extends CI_Model {
	private $table = "tb_user";

	public function getAll(){
    	return $this->db->get($this->table)->result();
	}
	public function getBy($param){

		$this->db->where($param);
		return $this->db->get($this->table)->row();
	}

}