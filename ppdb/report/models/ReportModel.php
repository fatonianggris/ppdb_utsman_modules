<?php

class ReportModel extends CI_Model {

    //
    //------------------------------REPORT--------------------------------//

    public function get_data_export_form($id = '') {
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

        $sql = $this->db->get();
        return $sql->result_array();
    }

//
}

?>