<?php
class RDDKFModel  extends CI_Model {
	private $table = "tb_rddkf";

	public function rules(){
		return [
			[
				'field' => 'tahun',
				'label' => 'Tahun',
				'rules' => "required|is_unique[tb_rddkf.tahun]",
				'errors' => array(
          'is_unique' => 'Data pada tahun ini sudah tersedia',
        ),
			],

		];
	}

  public function getAll() {
  	 $this->db->where('jurusan_id', AuthData()->jurusan_id);
   	 return $this->db->get($this->table)->result();
  }

  public function get($id) {
  	 	$this->db->where('jurusan_id', AuthData()->jurusan_id);
    	return $this->db->where('kode_rddkf', $id)->get($this->table)->row();
  }

  public function create($params) {
		try{
			$params['jurusan_id'] = $this->auth->user()->jurusan_id;
			$this->db->insert($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
	}

  public function update($id,$params) {
		try{
		$params['jurusan_id'] = $this->auth->user()->jurusan_id;
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

	public function cekTahun($year) {
    $this->db->where('tahun', $year);
    return $this->db->get($this->table)->num_rows();
  }
}
