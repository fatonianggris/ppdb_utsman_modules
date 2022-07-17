<?php

class SettingsModel extends CI_Model {

    private $table_mailer = 'mailer_config';
    private $table_general_page = 'general_page';
    private $table_contact = 'kontak';
    private $table_third_party = 'third_party_ppdb';

    //
    //-------------------------------SETTING------------------------------//
    //
    
    public function get_mail_config() {

        $this->db->select('*');
        $this->db->where('id_mailer', 1);
        $sql = $this->db->get($this->table_mailer);
        return $sql->result();
    }

    public function get_contact_config() {

        $this->db->select('*');
        $this->db->where('id_kontak', 1);
        $sql = $this->db->get($this->table_contact);
        return $sql->result();
    }

    public function get_third_party_config() {

        $this->db->select('*');
        $this->db->where('id_third_party_ppdb', 1);
        $sql = $this->db->get($this->table_third_party);
        return $sql->result();
    }

    public function get_page_config() {

        $this->db->select('*');
        $this->db->where('id_general_page', 1);
        $sql = $this->db->get($this->table_general_page);
        return $sql->result();
    }

    public function update_mailer($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'nama_pengirim' => strtoupper($value['nama_pengirim']),
            'host' => $value['host'],
            'email_induk' => $value['email_induk'],
            'password' => $value['password'],
            'port' => $value['port'],
            'smtp_auth' => $value['smtp_auth'],
            'smtp_secure' => $value['smtp_secure'],
            'updated_at' => date("Y-m-d H:i:s")
        );

        $this->db->where('id_mailer', $id);
        $this->db->update($this->table_mailer, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_contact($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'alamat' => $value['alamat'],
            'nomor_telephone' => $value['nomor_telephone'],
            'no_handphone' => @$value['no_handphone'],
            'no_handphone_tk' => @$value['no_handphone_tk'],
            'no_handphone_sd' => @$value['no_handphone_sd'],
            'no_handphone_smp' => @$value['no_handphone_smp'],
            'no_handphone_sma' => @$value['no_handphone_sma'],
            'email' => $value['email'],
            'jam_kerja' => $value['jam_kerja'],
            'akun_instagram' => $value['akun_instagram'],
            'akun_facebook' => $value['akun_facebook'],
            'akun_twitter' => $value['akun_twitter'],
            'akun_youtube' => $value['akun_youtube'],
            'url_website' => $value['url_website'],
            'updated_at' => date("Y-m-d H:i:s")
        );

        $this->db->where('id_kontak', $id);
        $this->db->update($this->table_contact, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_general_page($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'nama_website' => $value['nama_website'],
            'logo_website' => $value['logo_website'],
            'logo_website_thumb' => $value['logo_website_thumb'],
            'greeting_website' => $value['greeting_website'],
            'about_website' => $value['about_website'],
            'url_tutorial_alur' => $value['url_tutorial_alur'],
            'updated_at' => date("Y-m-d H:i:s")
        );

        $this->db->where('id_general_page', $id);
        $this->db->update($this->table_general_page, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_thirdparty_key($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'onesignal_app_id_ppdb' => @$value['onesignal_app_id_ppdb'],
            'onesignal_app_id_ppdb_safari' => @$value['onesignal_app_id_ppdb_safari'],
            'onesignal_auth_ppdb' => @$value['onesignal_auth_ppdb'],
            'updated_at' => date("Y-m-d H:i:s")
        );

        $this->db->where('id_third_party_ppdb', $id);
        $this->db->update($this->table_third_party, $data);

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