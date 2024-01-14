<?php

class QuotaModel extends CI_Model
{

    private $table_quota = 'kuota_pendaftar';

    //
    //-------------------------------SETTING------------------------------//
    //

    public function get_quota_dc_reg($id = '')
    {

        $this->db->select('*');
        $this->db->where('id_kuota', 6);
        $sql = $this->db->get($this->table_quota);
        return $sql->result();
    }

    public function get_quota_kb_reg($id = '')
    {

        $this->db->select('*');
        $this->db->where('id_kuota', 1);
        $sql = $this->db->get($this->table_quota);
        return $sql->result();
    }

    public function get_quota_tk_reg($id = '')
    {

        $this->db->select('*');
        $this->db->where('id_kuota', 2);
        $sql = $this->db->get($this->table_quota);
        return $sql->result();
    }

    public function get_quota_kbtk_reg($id = '')
    {

        $this->db->select('*');
        $this->db->where('id_kuota', 5);
        $sql = $this->db->get($this->table_quota);
        return $sql->result();
    }

    public function get_quota_sd_reg($id = '')
    {

        $this->db->select('*');
        $this->db->where('id_kuota', 3);
        $sql = $this->db->get($this->table_quota);
        return $sql->result();
    }

    public function get_quota_smp_reg($id = '')
    {

        $this->db->select('*');
        $this->db->where('id_kuota', 4);
        $sql = $this->db->get($this->table_quota);
        return $sql->result();
    }

    public function get_quota_sd_icp($id = '')
    {

        $this->db->select('*');
        $this->db->where('id_kuota', 7);
        $sql = $this->db->get($this->table_quota);
        return $sql->result();
    }

    public function update_quota($id = '', $status = '', $kuota = '', $keterangan = '')
    {
        $this->db->trans_begin();

        $data = array(
            'status_kuota' => $status,
            'jumlah_kuota' => $kuota,
            'keterangan' => $keterangan,
            'updated_at' => date("Y-m-d H:i:s"),
        );

        $this->db->where('id_kuota', $id);
        $this->db->update($this->table_quota, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_reserve($id = '', $status = '')
    {
        $this->db->trans_begin();

        $data = array(
            'status_cadangan' => $status,
            'updated_at' => date("Y-m-d H:i:s"),
        );

        $this->db->where('id_kuota', $id);
        $this->db->update($this->table_quota, $data);

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
