<?php

class RegisterModel extends CI_Model
{

    private $table_formulir = 'formulir';
    private $table_vformulir = 'view_formulir';
    private $table_register = 'pendaftaran';
    private $table_announcement = 'pengumuman_ppdb';
    private $table_general_page = 'general_page';
    private $table_contact = 'kontak';
    private $table_bank_account = 'alat_bayar';
    private $table_school_year = 'tahun_ajaran';
    private $table_provinsi = 'wilayah_provinsi';
    private $table_voucher = 'voucher';
    private $table_schedule = 'jadwal_ppdb';
    private $table_third_party = 'third_party_ppdb';

    public function get_third_party_key()
    {

        $this->db->select('*');
        $this->db->where('id_third_party_ppdb', 1);
        $sql = $this->db->get($this->table_third_party);
        return $sql->result();
    }

    public function get_all_schedule()
    {

        $this->db->select('*');
        $this->db->order_by('tanggal_jadwal DESC, jam_jadwal ASC');

        $sql = $this->db->get($this->table_schedule);
        return $sql->result();
    }

    public function get_email_ppdb($email = '')
    {

        $this->db->select('*');
        $this->db->where('email_orangtua', $email);

        $sql = $this->db->get($this->table_register);
        return $sql->result();
    }

    public function get_nisn_formulir($nisn = '')
    {

        $this->db->where('nisn', $nisn);

        $sql = $this->db->get($this->table_vformulir);
        return $sql->result();
    }

    public function check_no_register($id = '')
    {

        $this->db->select('nama_calon_siswa, level_tingkat, status_pendaftaran, status_pembayaran');
        $this->db->where('nomor_formulir', $id);

        $sql = $this->db->get($this->table_register);
        return $sql->result();
    }

    public function check_no_formulir($id = '')
    {

        $this->db->select('nama_lengkap, level_tingkat, status_formulir, status_pembayaran');
        $this->db->where('nomor_formulir', $id);

        $sql = $this->db->get($this->table_formulir);
        return $sql->result();
    }

    public function get_number_last_form($th = '')
    {

        $this->db->select('MAX(nomor_formulir) AS last_form');
        $this->db->where('id_tahun_ajaran', $th);

        $sql = $this->db->get($this->table_register);
        return $sql->result();
    }

    public function get_name_schoolyear($th = '')
    {

        $this->db->select("CONCAT(tahun_awal,' / ',tahun_akhir) AS tahun_ajaran");
        $this->db->where('id_tahun_ajaran', $th);

        $sql = $this->db->get($this->table_school_year);
        return $sql->result();
    }

    public function get_all_voucher()
    {

        $this->db->select('*');
        $this->db->order_by('inserted_at DESC');

        $sql = $this->db->get($this->table_voucher);
        return $sql->result();
    }

    public function check_user($value = '')
    {
        $this->db->where('nomor_formulir', $value['nomor_formulir']);
        $sql = $this->db->get($this->table_formulir);
        return $sql->result();
    }

    public function data_user($value = '')
    {
        $this->db->where('nomor_formulir', $value['nomor_formulir']);
        $sql = $this->db->get($this->table_vformulir);
        return $sql->result();
    }

    public function get_register_id($id = '')
    {
        $this->db->select("p.*,
                                CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran
                         ");
        $this->db->from('pendaftaran p');
        $this->db->join('tahun_ajaran t', 'p.id_tahun_ajaran = t.id_tahun_ajaran', 'left');

        $this->db->where('p.nomor_formulir', $id);

        $sql = $this->db->get();
        return $sql->result();
    }

    public function get_schoolyear()
    {

        $sql = $this->db->query("SELECT * FROM tahun_ajaran WHERE tahun_awal >= YEAR(CURDATE()) GROUP BY tahun_awal");

        return $sql->result();
    }

    public function get_announcement()
    {

        $this->db->select('*');
        $this->db->where('id_pengumuman_ppdb', 1);
        $sql = $this->db->get($this->table_announcement);
        return $sql->result();
    }

    public function get_bank_account()
    {

        $this->db->select('*');
        $this->db->where('status_alat_bayar', 1);
        $sql = $this->db->get($this->table_bank_account);
        return $sql->result();
    }

    public function get_cost_student($level_tingkat = '', $id_jalur = '', $id_jenis_kelamin = '', $jenis_biaya = '')
    {

        $this->db->select("b.*, jb.nama_opsi_biaya AS nama_biaya");
        $this->db->from('biaya b');
        $this->db->join('jenis_biaya jb', 'b.id_nama_biaya = jb.id_jenis_biaya', 'left');

        $this->db->where('b.level_tingkat', $level_tingkat);
        $this->db->where('b.id_jalur', $id_jalur);
        $this->db->where('b.id_jenis_kelamin', $id_jenis_kelamin);
        $this->db->where('b.jenis_biaya', $jenis_biaya);
        $this->db->order_by('b.inserted_at', 'ASC');

        $sql = $this->db->get();
        return $sql->result();
    }

    public function get_register_cost_id($id = '')
    {
        $this->db->select("p.*,
                                b.nominal,
                                jb.nama_opsi_biaya AS nama_biaya,
                                v.kode_voucher,
                                v.nama_voucher,
                                v.potongan,
                                v.jumlah_voucher,
                                v.masa_berlaku,
                                v.syarat_ketentuan,
                                CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran
                         ");
        $this->db->from('pendaftaran p');
        $this->db->join('biaya b', 'p.level_tingkat = b.level_tingkat AND p.id_jalur = b.id_jalur AND b.jenis_biaya = 1', 'left');
        $this->db->join('jenis_biaya jb', 'b.id_nama_biaya = jb.id_jenis_biaya', 'left');
        $this->db->join('tahun_ajaran t', 'p.id_tahun_ajaran = t.id_tahun_ajaran', 'left');
        $this->db->join('voucher v', 'p.id_voucher = v.id_voucher', 'left');

        $this->db->where('p.nomor_formulir', $id);

        $sql = $this->db->get();
        return $sql->result();
    }

    public function get_register_by_number($number = '')
    {
        $this->db->select("p.*,
                                CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                                DATE_FORMAT(p.inserted_at, '%d/%m/%Y') AS tanggal_isi
                         ");
        $this->db->from('pendaftaran p');
        $this->db->join('tahun_ajaran t', 'p.id_tahun_ajaran = t.id_tahun_ajaran', 'left');

        $this->db->where('p.nomor_formulir', $number);

        $sql = $this->db->get();
        return $sql->result();
    }

    public function get_formulir_id($id = '')
    {
        $this->db->select("f.*,
                                CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                                DATE_FORMAT(f.inserted_at, '%d/%m/%Y') AS tanggal_isi
                         ");
        $this->db->from('view_formulir f');
        $this->db->join('tahun_ajaran t', 'f.th_ajaran = t.id_tahun_ajaran', 'left');

        $this->db->where('f.id_formulir', $id);

        $sql = $this->db->get();
        return $sql->result();
    }

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

    public function update_status_email($id = '', $value = '')
    {
        $this->db->trans_begin();

        $data = array(
            'status_email' => $value,
        );

        $this->db->where('nomor_formulir', $id);
        $this->db->update($this->table_register, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_formulir($id = '', $value = '')
    {
        $this->db->trans_begin();

        $data = array(
            'foto_siswa' => $value['foto_siswa'],
            'foto_siswa_thumb' => $value['foto_siswa_thumb'],
            'akta_kelahiran' => $value['akta_kelahiran'],
            'akta_kelahiran_thumb' => $value['akta_kelahiran_thumb'],
            'kartu_keluarga' => $value['kartu_keluarga'],
            'kartu_keluarga_thumb' => $value['kartu_keluarga_thumb'],
            'updated_at' => date("Y-m-d H:i:s"),
            'status_formulir' => 1,
        );

        $this->db->where('id_formulir', $id);
        $this->db->update($this->table_formulir, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function insert_register($value = '')
    {
        $this->db->trans_begin();

        $data = array(
            'nama_calon_siswa' => $value['nama_calon_siswa'],
            'jenis_kelamin' => @$value['jenis_kelamin'],
            'nomor_formulir' => $value['nomor_formulir'],
            'level_tingkat' => $value['level_tingkat'],
            'id_jalur' => $value['id_jalur'],
            'id_tahun_ajaran' => $value['id_tahun_ajaran'],
            'email_orangtua' => $value['email_orangtua'],
            'nomor_wa' => $value['nomor_wa'],
            'insight' => $value['insight'],
        );
        $this->db->insert($this->table_register, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_register($number = '', $value = '')
    {
        $this->db->trans_begin();

        $data = array(
            'nisn' => $value['nisn'],
            'nik' => @$value['nik'],
            'no_akta_kelahiran' => @$value['no_akta_kelahiran'],
			'nomor_formulir' => $value['nomor_formulir'],
            'nama_calon_siswa' => $value['nama_lengkap'],
            'nama_panggilan' => @$value['nama_panggilan'],
            'tempat_lahir' => $value['tempat_lahir'],
            'tanggal_lahir' => $value['tanggal_lahir'],
            'jenis_kelamin' => $value['jenis_kelamin'],
            'agama' => $value['agama'],
            'rombel' => @$value['rombel'],
            'id_tahun_ajaran' => $value['id_tahun_ajaran'],
            'nomor_wa' => $value['nomor_handphone'],
            'nomor_telepon' => @$value['nomor_telepon'],
            'email_orangtua' => $value['email'],
            'nama_ayah' => @$value['nama_ayah'],
            'nik_ayah' => @$value['nik_ayah'],
            'tempat_lahir_ayah' => @$value['tempat_lahir_ayah'],
            'tanggal_lahir_ayah' => @$value['tanggal_lahir_ayah'],
            'pekerjaan_ayah' => @$value['pekerjaan_ayah'],
            'pendidikan_ayah' => @$value['pendidikan_ayah'],
            'penghasilan_ayah' => @$value['penghasilan_ayah'],
            'nama_ibu' => @$value['nama_ibu'],
            'nik_ibu' => @$value['nik_ibu'],
            'tempat_lahir_ibu' => @$value['tempat_lahir_ibu'],
            'tanggal_lahir_ibu' => @$value['tanggal_lahir_ibu'],
            'pekerjaan_ibu' => @$value['pekerjaan_ibu'],
            'pendidikan_ibu' => @$value['pendidikan_ibu'],
            'penghasilan_ibu' => @$value['penghasilan_ibu'],
            'status_wali' => @$value['status_wali'],
            'nama_wali' => @$value['nama_wali'],
            'nik_wali' => @$value['nik_wali'],
            'tempat_lahir_wali' => @$value['tempat_lahir_wali'],
            'tanggal_lahir_wali' => @$value['tanggal_lahir_wali'],
            'pekerjaan_wali' => @$value['pekerjaan_wali'],
            'pendidikan_wali' => @$value['pendidikan_wali'],
            'penghasilan_wali' => @$value['penghasilan_wali'],
            'alamat_rumah_kk' => $value['alamat_rumah_kk'],
            'provinsi_kk' => $value['provinsi_kk'],
            'kabupaten_kota_kk' => $value['kabupaten_kota_kk'],
            'kecamatan_kk' => $value['kecamatan_kk'],
            'kelurahan_desa_kk' => $value['kelurahan_desa_kk'],
            'rt_kk' => $value['rt_kk'],
            'rw_kk' => $value['rw_kk'],
            'kodepos_kk' => $value['kodepos_kk'],
            'status_alamat' => @$value['status_alamat'],
            'alamat_rumah_dom' => $value['alamat_rumah_dom'],
            'provinsi_dom' => $value['provinsi_dom'],
            'kabupaten_kota_dom' => $value['kabupaten_kota_dom'],
            'kecamatan_dom' => $value['kecamatan_dom'],
            'kelurahan_desa_dom' => $value['kelurahan_desa_dom'],
            'rt_dom' => $value['rt_dom'],
            'rw_dom' => $value['rw_dom'],
            'kodepos_dom' => $value['kodepos_dom'],
            'alat_transportasi' => $value['alat_transportasi'],
            'jenis_tinggal' => $value['jenis_tinggal'],
            'jarak_rumah_sekolah' => @$value['jarak_rumah_sekolah'],
            'jumlah_saudara' => $value['jumlah_saudara'],
            'anak_ke' => $value['anak_ke'],
            'nis_saudara' => @$value['nis_saudara'],
            'nama_saudara' => @$value['nama_saudara'],
            'kebutuhan_khusus' => $value['kebutuhan_khusus'],
            'tinggi_badan' => @$value['tinggi_badan'],
            'berat_badan' => @$value['berat_badan'],
            'level_tingkat' => @$value['level_tingkat'],
            'id_jalur' => $value['id_jalur'],
            'updated_at' => date("Y-m-d H:i:s"),
            'status_pendaftaran' => 1,
        );

        $this->db->where('nomor_formulir', $number);
        $this->db->update($this->table_register, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_payment_slip($id = '', $value = '')
    {
        $this->db->trans_begin();

        $data = array(
            'nomor_rekening' => $value['nomor_rekening'],
            'atas_nama_rekening' => $value['atas_nama_rekening'],
            'status_pembayaran' => 1,
            'bukti_transfer' => $value['bukti_transfer'],
            'bukti_transfer_thumb' => $value['bukti_transfer_thumb'],
            'status_pendaftaran' => 2,
            'updated_at' => date("Y-m-d H:i:s"),
        );

        $this->db->where('nomor_formulir', $id);
        $this->db->update($this->table_register, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_payment_ppdb($id = '', $value = '')
    {
        $this->db->trans_begin();

        $data = array(
            'nomor_rekening' => $value['nomor_rekening'],
            'atas_nama_rekening' => $value['atas_nama_rekening'],
            'status_pembayaran' => 1,
            'bukti_transfer' => $value['bukti_transfer'],
            'bukti_transfer_thumb' => $value['bukti_transfer_thumb'],
            'updated_at' => date("Y-m-d H:i:s"),
        );

        $this->db->where('nomor_formulir', $id);
        $this->db->update($this->table_formulir, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function update_revision_payment_slip($id = '', $value = '')
    {
        $this->db->trans_begin();

        $data = array(
            'nomor_rekening' => $value['nomor_rekening'],
            'atas_nama_rekening' => $value['atas_nama_rekening'],
            'status_pembayaran' => 1,
            'bukti_transfer' => $value['bukti_transfer'],
            'bukti_transfer_thumb' => $value['bukti_transfer_thumb'],
            'status_pendaftaran' => 2,
            'updated_at' => date("Y-m-d H:i:s"),
        );

        $this->db->where('nomor_formulir', $id);
        $this->db->update($this->table_register, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    //---------------------------------------GET AJAX WILAYAH---------------------------------------//

    public function get_provinsi()
    {
        $this->db->select('*');
        $sql = $this->db->get($this->table_provinsi);
        return $sql->result();
    }

    //----------------------------------------------------------------//
}
