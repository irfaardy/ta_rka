<?php
class DetailKegiatan  extends CI_Model {
  private $table = "tb_detail_kegiatan";

  public function getAll($no_perencanaan) {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->join('tb_perencanaan', 'tb_perencanaan.no = tb_detail_kegiatan.no');
    $this->db->join('tb_mata_anggaran', 'tb_mata_anggaran.kode_rekening = tb_detail_kegiatan.kode_rekening');
    $this->db->where('tb_detail_kegiatan.no', $no_perencanaan);
    return $this->db->get()->result();
  }

	public function get($id) {
    return $this->db->where('no_detail', $id)->get($this->table)->row();
  }

  public function create($no_perencanaan) {
		$params = $this->input->post();
    $params['no'] = $no_perencanaan;
    $params['anggaran'] = $this->removeMasking($params['anggaran']);

		try{
			$this->db->insert($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
	}

  public function update($id) {
    $params = $this->input->post();
    $params['anggaran'] = $this->removeMasking($params['anggaran']);

		try{
      $this->db->where('no_detail', $id);
			$this->db->update($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

  public function delete($id) {
    $params = array('no_detail' => $id);

    try{
      $this->db->where('no_detail', $id);
      $this->db->delete($this->table, $params);
			return true;
		} catch(\Exception $e){
			return false;
		}
  }

  private function removeMasking($amount) {
    return str_replace(".", "", $amount);
  }
}
