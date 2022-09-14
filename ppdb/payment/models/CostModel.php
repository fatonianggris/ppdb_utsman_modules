<?php

class CostModel extends CI_Model
{

	private $table_cost = 'biaya';

	//
	//-------------------------------AUTH------------------------------//
	//

	public function check_cost_duplicate($jenis_biaya = '', $level_tingkat = '', $id_jalur = '', $id_jenis_kelamin = '')
	{
		$this->db->where('jenis_biaya', $jenis_biaya);
		$this->db->where('level_tingkat', $level_tingkat);
		$this->db->where('id_jalur', $id_jalur);
		$this->db->where('id_jenis_kelamin', $id_jenis_kelamin);

		$sql = $this->db->get($this->table_cost);
		return $sql->result();
	}

	public function get_all_cost()
	{
		$this->db->select('*');
		$sql = $this->db->get($this->table_cost);
		return $sql->result();
	}

	public function get_cost_id($id = '')
	{
		$this->db->where('id_biaya', $id);
		$sql = $this->db->get($this->table_cost);
		return $sql->result();
	}

	public function insert_cost($value = '')
	{
		$this->db->trans_begin();

		$data = array(
			'jenis_biaya' => $value['jenis_biaya'],
			'level_tingkat' => $value['level_tingkat'],
			'id_jalur' => $value['id_jalur'],
			'id_jenis_kelamin' => $value['id_jenis_kelamin'],
			'nama_biaya' => $value['nama_biaya'],
			'nominal' => $value['nominal'],
			'foto_biaya' => @$value['foto_biaya'],
			'foto_biaya_thumb' => @$value['foto_biaya_thumb']
		);
		$this->db->insert($this->table_cost, $data);

		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function update_cost($id = '', $value = '')
	{
		$this->db->trans_begin();

		$data = array(
			'jenis_biaya' => $value['jenis_biaya'],
			'level_tingkat' => $value['level_tingkat'],
			'id_jalur' => $value['id_jalur'],
			'id_jenis_kelamin' => $value['id_jenis_kelamin'],
			'nama_biaya' => $value['nama_biaya'],
			'nominal' => $value['nominal'],
			'foto_biaya' => @$value['foto_biaya'],
			'foto_biaya_thumb' => @$value['foto_biaya_thumb'],
			'updated_at' => date("Y-m-d H:i:s")
		);

		$this->db->where('id_biaya', $id);
		$this->db->update($this->table_cost, $data);

		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function delete_cost($value)
	{
		$this->db->trans_begin();

		$this->db->where('id_biaya', $value);
		$this->db->delete($this->table_cost);

		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	//----------------------------------------------------------------//
}
