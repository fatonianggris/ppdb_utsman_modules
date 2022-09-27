<?php

class AdmissionModel extends CI_Model
{

	private $table_formulir = 'formulir';
	private $table_student = 'siswa';
	private $table_register = 'pendaftaran';
	private $table_announcement = 'pengumuman_ppdb';
	private $table_general_page = 'general_page';
	private $table_contact = 'kontak';
	private $table_bank_account = 'alat_bayar';
	private $table_school_year = 'tahun_ajaran';
	private $table_cost = 'biaya';
	private $table_voucher = 'voucher';

	public function get_formulir_sold()
	{
		$sql = $this->db->query("SELECT
                                        (
                                        SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            status_pembayaran>=1
                                    ) AS sudah_dibayar,
                                    (
                                         SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            status_pembayaran=0
                                    ) AS belum_dibayar,
                                    (
                                       SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            level_tingkat=1
                                    ) AS kb,
                                    (
                                       SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            level_tingkat=2
                                    ) AS tk,
                                    (
                                       SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            level_tingkat=3
                                    ) AS sd,
                                    (
                                       SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            level_tingkat=4
                                    ) AS smp");
		return $sql->result();
	}

	public function get_formulir_fulflillment()
	{
		$sql = $this->db->query("SELECT
                                        (
                                        SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            status_formulir>=1
                                    ) AS sudah_mengisi,
                                    (
                                         SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            status_formulir=0
                                    ) AS belum_mengisi,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            level_tingkat=1
                                    ) AS kb,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            level_tingkat=2
                                    ) AS tk,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            level_tingkat=3
                                    ) AS sd,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            level_tingkat=4
                                    ) AS smp");
		return $sql->result();
	}

	public function get_student_accepted()
	{
		$sql = $this->db->query("SELECT
                                        (
                                        SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            jenis_kelamin=1 AND status_formulir=1
                                    ) AS laki_laki,
                                    (
                                         SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            jenis_kelamin=2 AND status_formulir=1
                                    ) AS perempuan,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            level_tingkat=1 AND status_formulir=1
                                    ) AS kb,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            level_tingkat=2 AND status_formulir=1
                                    ) AS tk,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            level_tingkat=3 AND status_formulir=1
                                    ) AS sd,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            level_tingkat=4 AND status_formulir=1
                                    ) AS smp");
		return $sql->result();
	}

	public function get_student_admission()
	{
		$sql = $this->db->query("SELECT
                                        (
                                        SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            jenis_kelamin=1
                                    ) AS laki_laki,
                                    (
                                         SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            jenis_kelamin=2
                                    ) AS perempuan,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            status_penerimaan=0
                                    ) AS proses_observasi,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            status_penerimaan=1
                                    ) AS diterima,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            status_penerimaan=2
                                    ) AS ditolak,
                                    (
                                       SELECT
                                            COUNT(id_formulir)
                                        FROM
                                            formulir
                                        WHERE
                                            status_penerimaan>=0
                                    ) AS total_peserta");
		return $sql->result();
	}

	//
	//-------------------------------ADMISSION------------------------------//
	//

	public function get_page()
	{

		$this->db->select('*');
		$this->db->where('id_general_page', 1);
		$sql = $this->db->get($this->table_general_page);
		return $sql->result();
	}

	public function check_no_formulir($id = '')
	{

		$this->db->select('status_formulir, status_pembayaran');
		$this->db->where('id_formulir', $id);

		$sql = $this->db->get($this->table_formulir);
		return $sql->result();
	}

	public function get_contact()
	{

		$this->db->select('*');
		$this->db->where('id_kontak', 1);
		$sql = $this->db->get($this->table_contact);
		return $sql->result();
	}

	public function get_bank_account()
	{

		$this->db->select('*');
		$this->db->where('status_alat_bayar', 1);
		$sql = $this->db->get($this->table_bank_account);
		return $sql->result();
	}

	public function get_number_last_student($th = '')
	{

		$this->db->select('MAX(nis) AS last_nis');
		$this->db->where('th_ajaran', $th);

		$sql = $this->db->get($this->table_student);
		return $sql->result();
	}

	public function get_schoolyear()
	{

		$sql = $this->db->query("SELECT * FROM tahun_ajaran WHERE tahun_awal >= YEAR(CURDATE()) GROUP BY tahun_awal");

		return $sql->result();
	}

	public function get_all_voucher()
	{

		$sql = $this->db->query("SELECT v.*,
                                (select count(f.id_voucher) from formulir f WHERE concat(',', f.id_voucher, ',') LIKE concat('%,', v.id_voucher, ',%')) as terpakai 
                                FROM voucher v WHERE v.id_jenis_voucher=2");

		return $sql->result();
	}

	public function get_register_all()
	{
		$this->db->select("p.*,       
                                b.nominal,
                                CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                                DATE_FORMAT(p.inserted_at, '%d/%m/%Y') AS tanggal_masuk, 
                         ");
		$this->db->from('pendaftaran p');
		$this->db->join('biaya b', 'p.level_tingkat = b.level_tingkat AND p.id_jalur = b.id_jalur AND b.id_jenis_kelamin=p.jenis_kelamin AND b.jenis_biaya = 1', 'left');
		$this->db->join('tahun_ajaran t', 'p.id_tahun_ajaran = t.id_tahun_ajaran', 'left');
		$this->db->order_by('p.id_pendaftaran', 'DESC');

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

	public function delete_student_register($value)
	{
		$this->db->trans_begin();

		$this->db->where('id_pendaftaran', $value);
		$this->db->delete($this->table_register);

		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
	}

	public function delete_student_formulir($value)
	{
		$this->db->trans_begin();

		$this->db->where('id_formulir', $value);
		$this->db->delete($this->table_formulir);

		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			return false;
		} else {
			$this->db->trans_commit();
			return true;
		}
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

		$this->db->where('p.nomor_pendaftaran', $id);

		$sql = $this->db->get();
		return $sql->result();
	}

	public function get_all_formulir()
	{
		$this->db->select("f.*,                          
                            CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                            DATE_FORMAT(f.inserted_at, '%d/%m/%Y') AS tanggal_isi");
		$this->db->from('view_formulir f');
		$this->db->join('tahun_ajaran t', 'f.th_ajaran = t.id_tahun_ajaran', 'left');
		$this->db->order_by('inserted_at', 'ASC');

		$sql = $this->db->get();
		return $sql->result();
	}

	public function get_all_admission()
	{
		$this->db->select("f.*,                          
                            CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                            DATE_FORMAT(f.inserted_at, '%d/%m/%Y') AS tanggal_isi");
		$this->db->from('view_formulir f');
		$this->db->join('tahun_ajaran t', 'f.th_ajaran = t.id_tahun_ajaran', 'left');
		$this->db->where('status_formulir', 1);
		$this->db->order_by('inserted_at', 'ASC');

		$sql = $this->db->get();
		return $sql->result();
	}

	public function get_all_admission_accepted()
	{
		$this->db->select("f.*,                          
                            CONCAT(t.tahun_awal,'/',t.tahun_akhir) AS tahun_ajaran,
                            DATE_FORMAT(f.inserted_at, '%d/%m/%Y') AS tanggal_isi");
		$this->db->from('view_formulir f');
		$this->db->join('tahun_ajaran t', 'f.th_ajaran = t.id_tahun_ajaran', 'left');
		$this->db->where('status_formulir', 1);
		$this->db->where('status_penerimaan', 1);
		$this->db->order_by('inserted_at', 'ASC');

		$sql = $this->db->get();
		return $sql->result();
	}

	public function update_status_formulir($id = '', $id_voucher = '', $biaya = '', $status = '')
	{
		$this->db->trans_begin();

		$data = array(
			'id_voucher' => $id_voucher,
			'total_biaya' => $biaya,
			'status_penerimaan' => $status,
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

	public function get_detail_student_admission($id = '')
	{
		$this->db->select("s.*, 
                                wpagt.nama AS nama_provinsi_kk,                                    
                                wkbagt.nama AS nama_kabupaten_kota_kk,
                                wkbagt.administratif AS nama_kabupaten_kota_kk_adm,
                                wkagt.nama AS nama_kecamatan_kk,
                                wdagt.nama AS nama_kelurahan_desa_kk, 
                                wdagt.administratif AS nama_kelurahan_desa_kk_adm,                                
                                wpasl.nama AS nama_provinsi_dom,                                    
                                wkbasl.nama AS nama_kabupaten_kota_dom,
                                wkbasl.administratif AS nama_kabupaten_kota_dom_adm,
                                wkasl.nama AS nama_kecamatan_dom,
                                wdasl.nama AS nama_kelurahan_desa_dom, 
                                wdasl.administratif AS nama_kelurahan_desa_dom_adm,
                                k.nama_kelas,
                                CONCAT(ta.tahun_awal,'/',ta.tahun_akhir) AS tahun_ajaran,
                                ta.nama_tahun_ajaran
                         ");
		$this->db->from('view_formulir s');

		$this->db->join('wilayah_desa wdagt', 's.kelurahan_desa_kk = wdagt.id AND s.provinsi_kk = wdagt.id_dati1 AND s.kabupaten_kota_kk = wdagt.id_dati2 AND s.kecamatan_kk = wdagt.id_dati3', 'left');
		$this->db->join('wilayah_kecamatan wkagt', 's.kecamatan_kk = wkagt.id AND s.provinsi_kk = wkagt.id_dati1 AND s.kabupaten_kota_kk = wkagt.id_dati2', 'left');
		$this->db->join('wilayah_kabupaten wkbagt', 's.kabupaten_kota_kk = wkbagt.id AND s.provinsi_kk = wkbagt.id_dati1', 'left');
		$this->db->join('wilayah_provinsi wpagt', 's.provinsi_kk = wpagt.id', 'left');

		$this->db->join('wilayah_desa wdasl', 's.kelurahan_desa_dom = wdasl.id AND s.provinsi_dom = wdasl.id_dati1 AND s.kabupaten_kota_dom = wdasl.id_dati2 AND s.kecamatan_dom = wdasl.id_dati3', 'left');
		$this->db->join('wilayah_kecamatan wkasl', 's.kecamatan_dom = wkasl.id AND s.provinsi_dom = wkasl.id_dati1 AND s.kabupaten_kota_dom = wkasl.id_dati2', 'left');
		$this->db->join('wilayah_kabupaten wkbasl', 's.kabupaten_kota_dom = wkbasl.id AND s.provinsi_dom = wkbasl.id_dati1', 'left');
		$this->db->join('wilayah_provinsi wpasl', 's.provinsi_dom = wpasl.id', 'left');

		$this->db->join('kelas k', 's.id_kelas = k.id_kelas', 'left');
		$this->db->join('tahun_ajaran ta', 's.th_ajaran = ta.id_tahun_ajaran', 'left');
		$this->db->where('s.id_formulir', $id);
		//$this->db->order_by('p.inserted_at DESC');

		$sql = $this->db->get();
		return $sql->result();
	}

	public function get_data_student_admission($id = '')
	{
		$this->db->select("s.*, 
                                wpagt.nama AS nama_provinsi_kk,                                    
                                wkbagt.nama AS nama_kabupaten_kota_kk,
                                wkbagt.administratif AS nama_kabupaten_kota_kk_adm,
                                wkagt.nama AS nama_kecamatan_kk,
                                wdagt.nama AS nama_kelurahan_desa_kk, 
                                wdagt.administratif AS nama_kelurahan_desa_kk_adm,                                
                                wpasl.nama AS nama_provinsi_dom,                                    
                                wkbasl.nama AS nama_kabupaten_kota_dom,
                                wkbasl.administratif AS nama_kabupaten_kota_dom_adm,
                                wkasl.nama AS nama_kecamatan_dom,
                                wdasl.nama AS nama_kelurahan_desa_dom, 
                                wdasl.administratif AS nama_kelurahan_desa_dom_adm,
                                k.nama_kelas,
                                CONCAT(ta.tahun_awal,'/',ta.tahun_akhir) AS tahun_ajaran,
                                ta.nama_tahun_ajaran
                         ");
		$this->db->from('view_formulir s');

		$this->db->join('wilayah_desa wdagt', 's.kelurahan_desa_kk = wdagt.id AND s.provinsi_kk = wdagt.id_dati1 AND s.kabupaten_kota_kk = wdagt.id_dati2 AND s.kecamatan_kk = wdagt.id_dati3', 'left');
		$this->db->join('wilayah_kecamatan wkagt', 's.kecamatan_kk = wkagt.id AND s.provinsi_kk = wkagt.id_dati1 AND s.kabupaten_kota_kk = wkagt.id_dati2', 'left');
		$this->db->join('wilayah_kabupaten wkbagt', 's.kabupaten_kota_kk = wkbagt.id AND s.provinsi_kk = wkbagt.id_dati1', 'left');
		$this->db->join('wilayah_provinsi wpagt', 's.provinsi_kk = wpagt.id', 'left');

		$this->db->join('wilayah_desa wdasl', 's.kelurahan_desa_dom = wdasl.id AND s.provinsi_dom = wdasl.id_dati1 AND s.kabupaten_kota_dom = wdasl.id_dati2 AND s.kecamatan_dom = wdasl.id_dati3', 'left');
		$this->db->join('wilayah_kecamatan wkasl', 's.kecamatan_dom = wkasl.id AND s.provinsi_dom = wkasl.id_dati1 AND s.kabupaten_kota_dom = wkasl.id_dati2', 'left');
		$this->db->join('wilayah_kabupaten wkbasl', 's.kabupaten_kota_dom = wkbasl.id AND s.provinsi_dom = wkbasl.id_dati1', 'left');
		$this->db->join('wilayah_provinsi wpasl', 's.provinsi_dom = wpasl.id', 'left');

		$this->db->join('kelas k', 's.id_kelas = k.id_kelas', 'left');
		$this->db->join('tahun_ajaran ta', 's.th_ajaran = ta.id_tahun_ajaran', 'left');
		$this->db->where_in('s.id_formulir', $id);
		$this->db->order_by('s.inserted_at DESC');

		$sql = $this->db->get();
		return $sql->result();
	}

	public function insert_student($value = '', $nis = '', $barcode = '', $total_biaya_du = '', $level_tingkat = '')
	{
		$this->db->trans_begin();

		$data = array(
			'nisn' => $value->nisn,
			'nis' => $nis,
			'nik' => @$value->nik,
			'no_akta_kelahiran' => @$value->no_akta_kelahiran,
			'password' => $value->password,
			'nama_lengkap' => $value->nama_lengkap,
			'nama_panggilan' => @$value->nama_panggilan,
			'tempat_lahir' => $value->tempat_lahir,
			'tanggal_lahir' => $value->tanggal_lahir,
			'jenis_kelamin' => $value->jenis_kelamin,
			'agama' => $value->agama,
			'rombel' => @$value->rombel,
			'th_ajaran' => $value->th_ajaran,
			'nomor_handphone' => $value->nomor_handphone,
			'nomor_telepon' => @$value->nomor_telepon,
			'email' => $value->email,
			'nama_ayah' => @$value->nama_ayah,
			'nik_ayah' => @$value->nik_ayah,
			'tempat_lahir_ayah' => @$value->tempat_lahir_ayah,
			'tanggal_lahir_ayah' => @$value->tanggal_lahir_ayah,
			'pekerjaan_ayah' => @$value->pekerjaan_ayah,
			'pendidikan_ayah' => @$value->pendidikan_ayah,
			'penghasilan_ayah' => @$value->penghasilan_ayah,
			'nama_ibu' => @$value->nama_ibu,
			'nik_ibu' => @$value->nik_ibu,
			'tempat_lahir_ibu' => @$value->tempat_lahir_ibu,
			'tanggal_lahir_ibu' => @$value->tanggal_lahir_ibu,
			'pekerjaan_ibu' => @$value->pekerjaan_ibu,
			'pendidikan_ibu' => @$value->pendidikan_ibu,
			'penghasilan_ibu' => @$value->penghasilan_ibu,
			'status_wali' => @$value->status_wali,
			'nama_wali' => @$value->nama_wali,
			'nik_wali' => @$value->nik_wali,
			'tempat_lahir_wali' => @$value->tempat_lahir_wali,
			'tanggal_lahir_wali' => @$value->tanggal_lahir_wali,
			'pekerjaan_wali' => @$value->pekerjaan_wali,
			'pendidikan_wali' => @$value->pendidikan_wali,
			'penghasilan_wali' => @$value->penghasilan_wali,
			'alamat_rumah_kk' => $value->alamat_rumah_kk,
			'provinsi_kk' => $value->provinsi_kk,
			'kabupaten_kota_kk' => $value->kabupaten_kota_kk,
			'kecamatan_kk' => $value->kecamatan_kk,
			'kelurahan_desa_kk' => $value->kelurahan_desa_kk,
			'rt_kk' => $value->rt_kk,
			'rw_kk' => $value->rw_kk,
			'kodepos_kk' => $value->kodepos_kk,
			'status_alamat' => @$value->status_alamat,
			'alamat_rumah_dom' => $value->alamat_rumah_dom,
			'provinsi_dom' => $value->provinsi_dom,
			'kabupaten_kota_dom' => $value->kabupaten_kota_dom,
			'kecamatan_dom' => $value->kecamatan_dom,
			'kelurahan_desa_dom' => $value->kelurahan_desa_dom,
			'rt_dom' => $value->rt_dom,
			'rw_dom' => $value->rw_dom,
			'kodepos_dom' => $value->kodepos_dom,
			'alat_transportasi' => $value->alat_transportasi,
			'jenis_tinggal' => $value->jenis_tinggal,
			'jarak_rumah_sekolah' => @$value->jarak_rumah_sekolah,
			'jumlah_saudara' => $value->jumlah_saudara,
			'anak_ke' => $value->anak_ke,
			'nis_saudara' => @$value->nis_saudara,
			'nama_saudara' => @$value->nama_saudara,
			'kebutuhan_khusus' => $value->kebutuhan_khusus,
			'tinggi_badan' => @$value->tinggi_badan,
			'berat_badan' => @$value->berat_badan,
			'level_tingkat' => $value->level_tingkat,
			'level_tingkat' => $level_tingkat,
			'jalur' => $value->jalur,
			'foto_siswa' => @$value->foto_siswa,
			'foto_siswa_thumb' => @$value->foto_siswa_thumb,
			'kartu_keluarga' => @$value->kartu_keluarga,
			'kartu_keluarga_thumb' => @$value->kartu_keluarga_thumb,
			'akta_kelahiran' => @$value->akta_kelahiran,
			'akta_kelahiran_thumb' => @$value->akta_kelahiran_thumb,
			'barcode' => $barcode,
			'nominal_tagihan_du' => $total_biaya_du
		);

		$this->db->insert($this->table_student, $data);

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
