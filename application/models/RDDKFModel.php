<?php
class RDDKFModel  extends CI_Model {
	private $table = "tb_rddkf";

	public function rules(){
		return [
			[
				'field' => 'tahun',
				'label' => 'Tahun',
				'rules' => 'required',
			],
		
		];
	}

  public function getAll() {
   	 return $this->db->get($this->table)->result();
  }

  public function get($id) {
    	return $this->db->where('kode_rddkf', $id)->get($this->table)->row();
  }

  public function create($params) {
		try{
			$this->db->insert($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
	}

  public function update($id,$params) {

		try{
      $this->db->where('kode_rddkf', $id);
			$this->db->update($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

  public function delete($id) {
    $params = array('kode_rddkf' => $id);

    try{
      $this->db->where('kode_rddkf', $id);
      $this->db->delete($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }
}
