<?php

class PaymentModel extends CI_Model
{

	private $table_voucher = 'voucher';
	private $table_formulir = 'formulir';
	private $table_register = 'pendaftaran';
	private $table_announcement = 'pengumuman_ppdb';
	private $table_general_page = 'general_page';
	private $table_contact = 'kontak';
	private $table_bank_account = 'alat_bayar';
	private $table_school_year = 'tahun_ajaran';

	public function get_formulir_confirm()
	{
		$sql = $this->db->query("SELECT
                                        (
                                        SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            status_pembayaran>=1
                                    ) AS total_bukti,
                                    (
                                         SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            status_pembayaran=1
                                    ) AS proses_verifikasi,
                                    (
                                       SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            status_pembayaran=2
                                    ) AS diterima,
                                    (
                                       SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            status_pembayaran=3
                                    ) AS ditolak");
		return $sql->result();
	}

	public function get_ppdb_confirm()
	{
		$sql = $this->db->query("SELECT
                                        (
                                        SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir   
                                        WHERE
                                            status_pembayaran>=1
                                    ) AS total_bukti,
                                    (
                                         SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            status_pembayaran=1
                                    ) AS proses_verifikasi,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            status_pembayaran=2
                                    ) AS diterima,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            status_pembayaran=3
                                    ) AS ditolak");
		return $sql->result();
	}

	//
	//-------------------------------PAYMENT------------------------------//
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

	public function get_number_last_form($th = '')
	{

		$this->db->select('MAX(nomor_formulir) AS last_form');
		$this->db->where('th_ajaran', $th);

		$sql = $this->db->get($this->table_formulir);
		return $sql->result();
	}

	public function get_all_voucher()
	{

		$sql = $this->db->query("SELECT v.*,
                                (select count(f.id_voucher) from formulir f WHERE concat(',', f.id_voucher, ',') LIKE concat('%,', v.id_voucher, ',%')) as terpakai 
                                FROM voucher v WHERE v.id_jenis_voucher=2");

		return $sql->result();
	}

	public function get_all_formulir()
	{
		$this->db->select("f.*,
                            CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                            DATE_FORMAT(f.inserted_at, '%d/%m/%Y') AS tanggal_isi");
		$this->db->from('view_formulir f');
		$this->db->join('tahun_ajaran t', 'f.th_ajaran = t.id_tahun_ajaran', 'left');
		$this->db->where('f.status_pembayaran >=', 1);
		$this->db->order_by('f.updated_at', 'ASC');

		$sql = $this->db->get();
		return $sql->result();
	}

	public function get_schoolyear()
	{

		$sql = $this->db->query("SELECT * FROM tahun_ajaran WHERE tahun_awal >= YEAR(CURDATE()) OR tahun_awal = (YEAR(CURDATE())-1) GROUP BY tahun_awal");

		return $sql->result();
	}

	public function get_formulir_by_id($id = '')
	{
		$this->db->select("f.*,
                            CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                            DATE_FORMAT(f.inserted_at, '%d/%m/%Y') AS tanggal_isi");
		$this->db->from('formulir f');
		$this->db->join('tahun_ajaran t', 'f.th_ajaran = t.id_tahun_ajaran', 'left');
		$this->db->where('f.id_formulir', $id);
		$this->db->order_by('f.inserted_at', 'ASC');

		$sql = $this->db->get();
		return $sql->result();
	}

	public function get_register_all()
	{
		$this->db->select("p.*,
                                CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                                DATE_FORMAT(p.inserted_at, '%Y/%m/%d') AS tanggal_masuk, 
                                v.kode_voucher
                         ");
		$this->db->from('pendaftaran p');
		$this->db->join('tahun_ajaran t', 'p.id_tahun_ajaran = t.id_tahun_ajaran', 'left');
		$this->db->join('voucher v', 'p.id_voucher = v.id_voucher', 'left');
		$this->db->where('p.status_pembayaran >=', 1);
		$this->db->order_by('updated_at', 'ASC');

		$sql = $this->db->get();
		return $sql->result();
	}

	public function get_formulir_cost_id($id = '')
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

	public function insert_to_formulir($value = '', $password = '')
	{
		$this->db->trans_begin();

		$data = array(
			'nomor_formulir' => $value->nomor_formulir,
			'id_voucher' => $value->id_voucher,
			'nisn' => $value->nisn,
            'nik' => $value->nik,
            'no_akta_kelahiran' => $value->no_akta_kelahiran,
			'password' => password_hash($password, PASSWORD_DEFAULT, array('cost' => 12)),
			'nama_lengkap' => $value->nama_calon_siswa,
            'nama_panggilan' => $value->nama_panggilan,
            'tempat_lahir' => $value->tempat_lahir,
            'tanggal_lahir' => $value->tanggal_lahir,
            'jenis_kelamin' => $value->jenis_kelamin,
            'agama' => $value->agama,
            'rombel' => $value->rombel,
            'th_ajaran' => $value->id_tahun_ajaran,
            'nomor_handphone' => $value->nomor_wa,
            'nomor_telepon' => $value->nomor_telepon,
            'email' => $value->email_orangtua,
            'nama_ayah' => $value->nama_ayah,
            'nik_ayah' => $value->nik_ayah,
            'tempat_lahir_ayah' => $value->tempat_lahir_ayah,
            'tanggal_lahir_ayah' => $value->tanggal_lahir_ayah,
            'pekerjaan_ayah' => $value->pekerjaan_ayah,
            'pendidikan_ayah' => $value->pendidikan_ayah,
            'penghasilan_ayah' => $value->penghasilan_ayah,
            'nama_ibu' => $value->nama_ibu,
            'nik_ibu' => $value->nik_ibu,
            'tempat_lahir_ibu' => $value->tempat_lahir_ibu,
            'tanggal_lahir_ibu' => $value->tanggal_lahir_ibu,
            'pekerjaan_ibu' => $value->pekerjaan_ibu,
            'pendidikan_ibu' => $value->pendidikan_ibu,
            'penghasilan_ibu' => $value->penghasilan_ibu,
            'status_wali' => $value->status_wali,
            'nama_wali' => $value->nama_wali,
            'nik_wali' => $value->nik_wali,
            'tempat_lahir_wali' => $value->tempat_lahir_wali,
            'tanggal_lahir_wali' => $value->tanggal_lahir_wali,
            'pekerjaan_wali' => $value->pekerjaan_wali,
            'pendidikan_wali' => $value->pendidikan_wali,
            'penghasilan_wali' => $value->penghasilan_wali,
            'alamat_rumah_kk' => $value->alamat_rumah_kk,
            'provinsi_kk' => $value->provinsi_kk,
            'kabupaten_kota_kk' => $value->kabupaten_kota_kk,
            'kecamatan_kk' => $value->kecamatan_kk,
            'kelurahan_desa_kk' => $value->kelurahan_desa_kk,
            'rt_kk' => $value->rt_kk,
            'rw_kk' => $value->rw_kk,
            'kodepos_kk' => $value->kodepos_kk,
            'status_alamat' => $value->status_alamat,
            'alamat_rumah_dom' => $value->alamat_rumah_dom,
            'provinsi_dom' => $value->provinsi_dom,
            'kabupaten_kota_dom' => $value->kabupaten_kota_dom,
            'kecamatan_dom' => $value->kecamatan_dom,
            'kelurahan_desa_dom' =>$value->kelurahan_desa_dom,
            'rt_dom' => $value->rt_dom,
            'rw_dom' => $value->rw_dom,
            'kodepos_dom' => $value->kodepos_dom,
            'alat_transportasi' => $value->alat_transportasi,
            'jenis_tinggal' => $value->jenis_tinggal,
            'jarak_rumah_sekolah' => $value->jarak_rumah_sekolah,
            'jumlah_saudara' => $value->jumlah_saudara,
            'anak_ke' => $value->anak_ke,
            'nis_saudara' => $value->nis_saudara,
            'nama_saudara' => $value->nama_saudara,
            'kebutuhan_khusus' => $value->kebutuhan_khusus,
            'tinggi_badan' => $value->tinggi_badan,
            'berat_badan' => $value->berat_badan,
            'level_tingkat' => $value->level_tingkat,
            'jalur' => $value->id_jalur,
            'updated_at' => date("Y-m-d H:i:s")
				);

		$this->db->insert($this->table_formulir, $data);

		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function update_status_voucher_pembayaran($id = '', $id_voucher = '', $value = '')
	{
		$this->db->trans_begin();

		$data = array(
			'id_voucher' => $id_voucher,
			'status_pembayaran' => $value,
			'status_pendaftaran' => 3,
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

	public function update_status_keterangan_pembayaran($id = '', $ket = '', $value = '')
	{
		$this->db->trans_begin();

		$data = array(
			'status_pembayaran' => $value,
			'keterangan' => $ket,
			'status_pendaftaran' => 3,
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

	public function update_status_keterangan_pembayaran_ppdb($id = '', $ket = '', $value = '')
	{
		$this->db->trans_begin();

		$data = array(
			'status_pembayaran' => $value,
			'keterangan' => $ket,
			'updated_at' => date("Y-m-d H:i:s"),
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

	//----------------------------------------------------------------//
}
