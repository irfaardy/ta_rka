<?php
class JurusanModel  extends CI_Model {
	private $table = "tb_jurusan";
 public function getAll() {
    return $this->db->get($this->table)->result();
  }
  public function rules(){
  	return [
  			['field' => 'nama',
  			 'label' => 'Nama',
  			 'rules' => 'required',
  			]
  	];
  }
  public function get($id) {
    return $this->db->where('id', $id)->get($this->table)->row();
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
      $this->db->where('id', $id);
			$this->db->update($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

  public function delete($id) {
    $params = array('id' => $id);

    try{
      $this->db->where('id', $id);
      $this->db->delete($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }
}