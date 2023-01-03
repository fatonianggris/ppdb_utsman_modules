<?php

class VoucherModel extends CI_Model
{

	private $table_voucher = 'voucher';

	//
	//-------------------------------VOUCHER------------------------------//
	//

	public function check_voucher_duplicate($kode = '')
	{

		$this->db->where('kode_voucher', $kode);

		$sql = $this->db->get($this->table_voucher);
		return $sql->result();
	}

	public function get_all_voucher()
	{

		$sql = $this->db->query("SELECT v.*,
                                (SELECT count(f.id_voucher) from formulir f WHERE concat(',', f.id_voucher, ',') LIKE concat('%,', v.id_voucher, ',%')) as terpakai
                                FROM voucher v");

		return $sql->result();
	}

	public function get_voucher_id($id = '')
	{
		$this->db->where('id_voucher', $id);
		$sql = $this->db->get($this->table_voucher);
		return $sql->result();
	}

	public function insert_voucher($value = '')
	{
		$this->db->trans_begin();

		$data = array(
			'kode_voucher' => strtoupper($value['kode_voucher']),
			'nama_voucher' => $value['nama_voucher'],
			'potongan' => $value['potongan'],
			'jumlah_voucher' => $value['jumlah_voucher'],
			'id_jenis_voucher' => $value['id_jenis_voucher'],
			'id_nama_biaya' => $value['id_nama_biaya'],
			'masa_berlaku' => $value['masa_berlaku'],
			'syarat_ketentuan' => @$value['syarat_ketentuan'],
		);

		$this->db->insert($this->table_voucher, $data);

		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function update_voucher($id = '', $value = '')
	{
		$this->db->trans_begin();

		$data = array(
			'kode_voucher' => strtoupper($value['kode_voucher']),
			'nama_voucher' => $value['nama_voucher'],
			'potongan' => $value['potongan'],
			'jumlah_voucher' => $value['jumlah_voucher'],
			'masa_berlaku' => $value['masa_berlaku'],
			'id_jenis_voucher' => $value['id_jenis_voucher'],
			'id_nama_biaya' => $value['id_nama_biaya'],
			'syarat_ketentuan' => @$value['syarat_ketentuan'],
			'updated_at' => date("Y-m-d H:i:s")
		);

		$this->db->where('id_voucher', $id);
		$this->db->update($this->table_voucher, $data);

		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function delete_voucher($value)
	{
		$this->db->trans_begin();

		$this->db->where('id_voucher', $value);
		$this->db->delete($this->table_voucher);

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
