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
	public function create(){
		$params = $this->build_params();
		try{
			$this->db->insert($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
	}

	private function build_params(){
			 $params = 	[
                         'username' 	=> $this->session->userdata('username'),
                         'nama' 		=> $this->session->userdata('nama'),
                         'level' 		=> $this->session->userdata('level'),
                     	];
             return $params;
		}
}