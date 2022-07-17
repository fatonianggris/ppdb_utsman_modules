<?php

class HomeModel extends CI_Model {

    private $table_contact = 'kontak';
    private $table_announcement = 'pengumuman_ppdb';
    private $table_general_page = 'general_page';
    private $table_schedule = 'jadwal_ppdb';

    //
    //-------------------------------AUTH------------------------------//
    //
    
    public function get_contact() {

        $this->db->select('*');
        $this->db->where('id_kontak', 1);
        $sql = $this->db->get($this->table_contact);
        return $sql->result();
    }

    public function get_all_schedule() {

        $this->db->select('*');
        $this->db->order_by('tanggal_jadwal DESC, jam_jadwal ASC');

        $sql = $this->db->get($this->table_schedule);
        return $sql->result();
    }

    public function get_announcement() {

        $this->db->select('*');
        $this->db->where('id_pengumuman_ppdb', 1);
        $sql = $this->db->get($this->table_announcement);
        return $sql->result();
    }

    public function get_page() {

        $this->db->select('*');
        $this->db->where('id_general_page', 1);
        $sql = $this->db->get($this->table_general_page);
        return $sql->result();
    }

    //----------------------------------------------------------------//
}

?>