<?php

class CostModel extends CI_Model {

    private $table_cost = 'biaya';
    private $table_option_cost = 'jenis_biaya';

    //
    //-------------------------------AUTH------------------------------//
    //
    
    public function check_cost_duplicate($jenis_biaya = '', $level_tingkat = '', $id_jalur = '', $id_jenis_kelamin = '', $id_nama_biaya = '') {
        $this->db->where('jenis_biaya', $jenis_biaya);
        $this->db->where('level_tingkat', $level_tingkat);
        $this->db->where('id_jalur', $id_jalur);
        $this->db->where('id_jenis_kelamin', $id_jenis_kelamin);
        $this->db->where('id_nama_biaya', $id_nama_biaya);

        $sql = $this->db->get($this->table_cost);
        return $sql->result();
    }

    public function check_cost_option_duplicate($jenis_biaya = '', $nama_biaya = '') {
        $this->db->where('id_kategori_biaya', $jenis_biaya);
        $this->db->where('nama_opsi_biaya', $nama_biaya);

        $sql = $this->db->get($this->table_option_cost);
        return $sql->result();
    }

    public function get_all_cost() {
        $this->db->select("b.*, jb.nama_opsi_biaya AS nama_biaya");

        $this->db->from('biaya b');
        $this->db->join('jenis_biaya jb', 'b.id_nama_biaya = jb.id_jenis_biaya', 'left');
        $this->db->order_by('b.inserted_at DESC');

        $sql = $this->db->get();
        return $sql->result();
    }

    public function get_option_cost() {
        $this->db->select('*');
        $sql = $this->db->get($this->table_option_cost);
        return $sql->result();
    }

    public function get_cost_id($id = '') {
        $this->db->where('id_biaya', $id);
        $sql = $this->db->get($this->table_cost);
        return $sql->result();
    }

    public function get_cost_option_id($id = '') {
        $this->db->where('id_jenis_biaya', $id);
        $sql = $this->db->get($this->table_option_cost);
        return $sql->result();
    }

    public function get_sum_cost_ajax($id_jb = '', $id_jenjang = '', $id_pro = '', $id_jk = '') {

        $this->db->select("SUM(b.nominal) AS total_biaya");
        $this->db->from('biaya b');

        if ($id_jb != 0) {

            $this->db->where('b.jenis_biaya', $id_jb);
        }

        if ($id_jenjang != 0) {

            $this->db->where('b.level_tingkat', $id_jenjang);
        }

        if ($id_pro != 0) {

            $this->db->where('b.id_jalur', $id_pro);
        }
        if ($id_jk != 0) {

            $this->db->where('b.id_jenis_kelamin', $id_jk);
        }

        $sql = $this->db->get();
        return $sql;
    }

    public function insert_cost($value = '') {
        $this->db->trans_begin();

        $data = array(
            'jenis_biaya' => $value['jenis_biaya'],
            'level_tingkat' => $value['level_tingkat'],
            'id_jalur' => $value['id_jalur'],
            'id_jenis_kelamin' => $value['id_jenis_kelamin'],
            'id_nama_biaya' => $value['id_nama_biaya'],
            'nominal' => $value['nominal'],
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

    public function insert_cost_option($value = '') {
        $this->db->trans_begin();

        $data = array(
            'id_kategori_biaya' => $value['id_kategori_biaya'],
            'nama_opsi_biaya' => $value['nama_opsi_biaya'],
        );
        $this->db->insert($this->table_option_cost, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_cost($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'jenis_biaya' => $value['jenis_biaya'],
            'level_tingkat' => $value['level_tingkat'],
            'id_jalur' => $value['id_jalur'],
            'id_jenis_kelamin' => $value['id_jenis_kelamin'],
            'id_nama_biaya' => $value['id_nama_biaya'],
            'nominal' => $value['nominal'],
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

    public function update_cost_option($id = '', $value = '') {
        $this->db->trans_begin();

        $data = array(
            'id_kategori_biaya' => $value['id_kategori_biaya'],
            'nama_opsi_biaya' => $value['nama_opsi_biaya'],
        );

        $this->db->where('id_jenis_biaya', $id);
        $this->db->update($this->table_option_cost, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function delete_cost($value) {
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

    public function delete_cost_option($value) {
        $this->db->trans_begin();

        $this->db->where('id_jenis_biaya', $value);
        $this->db->delete($this->table_option_cost);

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