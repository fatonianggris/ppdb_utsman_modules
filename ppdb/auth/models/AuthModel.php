<?php

class AuthModel extends CI_Model {

    private $table_akun = 'akun_ppdb';
    private $table_general_page = 'general_page';

    //
    //-------------------------------AUTH------------------------------//
    //
    

    public function check_user($value = '') {
        $this->db->where('email_akun', $value['email']);
        $sql = $this->db->get($this->table_akun);
        return $sql->result();
    }

    public function data_user($value = '') {
        $this->db->select('id_akun_ppdb, nama_akun, email_akun, nomor_handphone_akun, role_akun, updated_at, inserted_at, status_akun');
        $this->db->where('email_akun', $value['email']);
        $sql = $this->db->get($this->table_akun);
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