<?php

class BankAccountModel extends CI_Model {

    private $table_bank_account = 'alat_bayar';

    //
    //-------------------------------BANK ACCOUNT------------------------------//
    //
   
    public function check_bank_account_duplicate($nama = '') {
        $this->db->where('nama_alatbayar', $nama);
        $sql = $this->db->get($this->table_bank_account);
        return $sql->result();
    }

    public function get_all_bank_account() {
        $this->db->select('*');
        $sql = $this->db->get($this->table_bank_account);
        return $sql->result();
    }

    public function get_bank_account_id($id = '') {
        $this->db->where('id_alat_bayar', $id);
        $sql = $this->db->get($this->table_bank_account);
        return $sql->result();
    }

    public function update_status_bank_account($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'status_alat_bayar' => $value,
        );

        $this->db->where('id_alat_bayar', $id);
        $this->db->update($this->table_bank_account, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function insert_bank_account($value = '') {
        $this->db->trans_begin();

        $data = array(
            'tipe_alatbayar' => $value['tipe_alatbayar'],
            'nama_alatbayar' => $value['nama_alatbayar'],
            'atas_nama' => $value['atas_nama'],
            'nomor_alatbayar' => $value['nomor_alatbayar'],
            'logo_instansi' => @$value['logo_instansi'],
            'logo_instansi_thumb' => @$value['logo_instansi_thumb'],
            'catatan_transfer' => @$value['catatan_transfer'],
            'petunjuk_transfer' => @$value['petunjuk_transfer']
        );
        $this->db->insert($this->table_bank_account, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_bank_account($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'tipe_alatbayar' => $value['tipe_alatbayar'],
            'nama_alatbayar' => $value['nama_alatbayar'],
            'atas_nama' => $value['atas_nama'],
            'nomor_alatbayar' => $value['nomor_alatbayar'],
            'logo_instansi' => @$value['logo_instansi'],
            'logo_instansi_thumb' => @$value['logo_instansi_thumb'],
            'catatan_transfer' => @$value['catatan_transfer'],
            'petunjuk_transfer' => @$value['petunjuk_transfer'],
            'updated_at' => date("Y-m-d H:i:s")
        );

        $this->db->where('id_alat_bayar', $id);
        $this->db->update($this->table_bank_account, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function delete_bank_account($value) {
        $this->db->trans_begin();

        $this->db->where('id_alat_bayar', $value);
        $this->db->delete($this->table_bank_account);

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