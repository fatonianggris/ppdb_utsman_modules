<?php

class ScheduleModel extends CI_Model {

    private $table_schedule = 'jadwal_ppdb';

    //
    //-------------------------------SETTING------------------------------//
    //
    
     public function check_schedule_duplicate($kode = '') {

        $this->db->where('nama_jadwal', $kode);

        $sql = $this->db->get($this->table_schedule);
        return $sql->result();
    }

    public function get_all_schedule() {

        $this->db->select('*');
        $this->db->order_by('tanggal_jadwal DESC, jam_jadwal ASC');

        $sql = $this->db->get($this->table_schedule);
        return $sql->result();
    }

    public function get_schedule_id($id = '') {
        $this->db->where('id_jadwal_ppdb', $id);
        $sql = $this->db->get($this->table_schedule);
        return $sql->result();
    }

    public function insert_schedule($value = '') {
        $this->db->trans_begin();

        $data = array(
            'nama_jadwal' => strtoupper($value['nama_jadwal']),
            'tanggal_jadwal' => $value['tanggal_jadwal'],
            'jam_jadwal' => $value['jam_jadwal'],
            'lokasi' => $value['lokasi'],
            'keterangan' => @$value['keterangan'],
            'lokasi' => @$value['lokasi'],
        );

        $this->db->insert($this->table_schedule, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_schedule($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'nama_jadwal' => strtoupper($value['nama_jadwal']),
            'tanggal_jadwal' => $value['tanggal_jadwal'],
            'jam_jadwal' => $value['jam_jadwal'],
            'lokasi' => $value['lokasi'],
            'keterangan' => @$value['keterangan'],
            'lokasi' => @$value['lokasi'],
            'updated_at' => date("Y-m-d H:i:s")
        );

        $this->db->where('id_jadwal_ppdb', $id);
        $this->db->update($this->table_schedule, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function delete_schedule($value) {
        $this->db->trans_begin();

        $this->db->where('id_jadwal_ppdb', $value);
        $this->db->delete($this->table_schedule);

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

?>