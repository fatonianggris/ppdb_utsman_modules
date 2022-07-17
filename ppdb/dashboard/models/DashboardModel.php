<?php

class DashboardModel extends CI_Model {

    private $table_general_page = 'general_page';
    private $table_school_year = 'tahun_ajaran';

    //
    //------------------------------COUNT--------------------------------//

    public function get_dashboard_insight() {
        $sql = $this->db->query("SELECT
                                        (
                                        SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            jenis_kelamin=1
                                    ) AS laki_laki,
                                    (
                                         SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            jenis_kelamin=2
                                    ) AS perempuan,
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
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        
                                    ) AS pendaftar,
                                    (
                                       SELECT
                                            COUNT(id_pendaftaran)
                                        FROM
                                            pendaftaran
                                        WHERE
                                            status_pembayaran>=1
                                    ) AS pembeli");
        return $sql->result();
    }

    //-----------------------------------------------------------------------//
    //
     public function get_register_insight() {
        $sql = $this->db->query("SELECT
                                    th.*,
                                    (
                                    SELECT
                                        COUNT(p.id_pendaftaran)
                                    FROM
                                        pendaftaran p
                                    WHERE
                                        p.id_tahun_ajaran = th.id_tahun_ajaran AND p.level_tingkat = 1
                                ) AS kb,
                                (
                                    SELECT
                                        COUNT(p.id_pendaftaran)
                                    FROM
                                        pendaftaran p
                                    WHERE
                                        p.id_tahun_ajaran = th.id_tahun_ajaran AND p.level_tingkat = 2
                                ) AS tk,
                                (
                                    SELECT
                                        COUNT(p.id_pendaftaran)
                                    FROM
                                        pendaftaran p
                                    WHERE
                                        p.id_tahun_ajaran = th.id_tahun_ajaran AND p.level_tingkat = 3
                                ) AS sd,
                                (
                                    SELECT
                                        COUNT(p.id_pendaftaran)
                                    FROM
                                        pendaftaran p
                                    WHERE
                                        p.id_tahun_ajaran = th.id_tahun_ajaran AND p.level_tingkat = 4
                                ) AS smp,
                                CONCAT(
                                    'TA. ',
                                    th.tahun_awal,
                                    '/',
                                    th.tahun_akhir
                                ) AS tahun_ajaran
                                FROM
                                    tahun_ajaran th
                                WHERE
                                    (th.tahun_awal BETWEEN(YEAR(CURDATE())-1) AND(YEAR(CURDATE()) +1)) AND th.semester = 'ganjil'
                                ORDER BY th.tahun_awal ASC");
        return $sql->result();
    }

    public function get_ppdb_insight() {
        $sql = $this->db->query("SELECT
                                        (
                                        SELECT
                                            COUNT(p.id_pendaftaran)
                                        FROM
                                            pendaftaran p
                                        WHERE
                                            CONCAT(',', p.insight, ',') LIKE '%,1,%'
                                    ) AS sosial_media,
                                    (
                                        SELECT
                                            COUNT(p.id_pendaftaran)
                                        FROM
                                            pendaftaran p
                                        WHERE
                                            CONCAT(',', p.insight, ',') LIKE '%,2,%'
                                    ) AS website,
                                    (
                                        SELECT
                                            COUNT(p.id_pendaftaran)
                                        FROM
                                            pendaftaran p
                                        WHERE
                                            CONCAT(',', p.insight, ',') LIKE '%,3,%'
                                    ) AS teman,
                                    (
                                        SELECT
                                            COUNT(p.id_pendaftaran)
                                        FROM
                                            pendaftaran p
                                        WHERE
                                            CONCAT(',', p.insight, ',') LIKE '%,4,%'
                                    ) AS iklan_fb,
                                    (
                                        SELECT
                                            COUNT(p.id_pendaftaran)
                                        FROM
                                            pendaftaran p
                                        WHERE
                                            CONCAT(',', p.insight, ',') LIKE '%,5,%'
                                    ) AS iklan_ig,
                                    (
                                        SELECT
                                            COUNT(p.id_pendaftaran)
                                        FROM
                                            pendaftaran p
                                        WHERE
                                            CONCAT(',', p.insight, ',') LIKE '%,6,%'
                                    ) AS iklan_google,
                                    (
                                        SELECT
                                            COUNT(p.id_pendaftaran)
                                        FROM
                                            pendaftaran p
                                        WHERE
                                            CONCAT(',', p.insight, ',') LIKE '%,7,%'
                                    ) AS berita,
                                    (
                                        SELECT
                                            COUNT(p.id_pendaftaran)
                                        FROM
                                            pendaftaran p
                                        WHERE
                                            CONCAT(',', p.insight, ',') LIKE '%,8,%'
                                    ) AS brosur");
        return $sql->result();
    }

    public function get_schoolyear_now() {

        $this->db->select("CONCAT(tahun_awal,'/',tahun_akhir) AS tahun_ajaran");
        $this->db->where("tahun_awal = YEAR(CURDATE())+1 AND semester = 'ganjil'");

        $sql = $this->db->get($this->table_school_year);
        return $sql->result();
    }

    public function get_general_page() {

        $this->db->select('*');
        $this->db->where('id_general_page', 1);
        $sql = $this->db->get($this->table_general_page);
        return $sql->result();
    }

    public function update_status_ppdb($value) {
        $this->db->trans_begin();

        $data = array(
            'status_ppdb' => $value,
            'updated_at' => date("Y-m-d H:i:s"),
        );

        $this->db->where('id_general_page', 1);
        $this->db->update($this->table_general_page, $data);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

//
}

?>