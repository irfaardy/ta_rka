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
	public function update($where){

		
		$params = $this->build_params();
		$this->db->where($where);
		return $this->db->update($this->table,$params);
	}

	public function delete($where){
		$params = $this->build_params();
		$this->db->where($where);
		return $this->db->delete($this->table);
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
                         'username' 	=> $this->input->post('username'),
                         'nama' 		=> $this->input->post('nama'),
                         'password' 	=> bcrypt($this->input->post('password')),
                         'level' 		=> $this->input->post('level'),
                     	];
             return $params;
		}
}