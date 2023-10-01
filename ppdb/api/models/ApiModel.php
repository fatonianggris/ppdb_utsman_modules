<?php

class ApiModel extends CI_Model
{

    private $table_general_page = 'general_page';
    private $table_contact = 'kontak';
    private $table_third_party = 'third_party_ppdb';
    private $table_present_config = 'absen_config';
    private $table_present_emp = 'absensi_pegawai';
    private $table_schoolyear = 'tahun_ajaran';
	private $table_discount_rupiah = 'potongan_rupiah';

    //
    //-------------------------------AUTH------------------------------//
    //

    public function get_page()
    {

        $this->db->select('*');
        $this->db->where('id_general_page', 1);
        $sql = $this->db->get($this->table_general_page);
        return $sql->result();
    }

    public function get_contact()
    {

        $this->db->select('*');
        $this->db->where('id_kontak', 1);
        $sql = $this->db->get($this->table_contact);
        return $sql->result();
    }

    public function get_schoolyear()
    {

        $this->db->select('*');
        $this->db->where('status_tahun_ajaran', 1);
        $sql = $this->db->get($this->table_schoolyear);
        return $sql->result();
    }

    public function get_third_party_key()
    {

        $this->db->select('*');
        $this->db->where('id_third_party_ppdb', 1);
        $sql = $this->db->get($this->table_third_party);
        return $sql->result();
    }

    public function get_all_voucher()
    {

        $sql = $this->db->query("SELECT v.*,
                                (select count(f.id_voucher) from formulir f WHERE concat(',', f.id_voucher, ',') LIKE concat('%,', v.id_voucher, ',%')) as terpakai
                                FROM voucher v WHERE v.id_jenis_voucher=2");

        return $sql->result();
    }

    public function get_formulir_by_number($id = '')
    {
        $this->db->select("f.*,
                            CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                            DATE_FORMAT(f.inserted_at, '%d/%m/%Y') AS tanggal_isi");
        $this->db->from('formulir f');
        $this->db->join('tahun_ajaran t', 'f.th_ajaran = t.id_tahun_ajaran', 'left');
        $this->db->where('f.nomor_formulir', $id);
        $this->db->order_by('f.inserted_at', 'ASC');

        $sql = $this->db->get();
        return $sql->result();
    }

	public function get_discount_rupiah_by_id_form($id = '')
    {
        $this->db->select("*");
        $this->db->where('id_formulir', $id);

        $sql = $this->db->get($this->table_discount_rupiah);
        return $sql->result();
    }

	public function get_cost_student($level_tingkat = '', $id_jalur = '', $id_jenis_kelamin = '')
    {

        $this->db->select("b.*, jb.nama_opsi_biaya AS nama_biaya");
        $this->db->from('biaya b');
        $this->db->join('jenis_biaya jb', 'b.id_nama_biaya = jb.id_jenis_biaya', 'left');

        $this->db->where('b.level_tingkat', $level_tingkat);
        $this->db->where('b.id_jalur', $id_jalur);
        $this->db->where('b.id_jenis_kelamin', $id_jenis_kelamin);
        $this->db->where('b.jenis_biaya', '2');
        $this->db->order_by('b.inserted_at', 'ASC');

        $sql = $this->db->get();
        return $sql->result();
    }

    //----------------------------------------------------------------//
}
