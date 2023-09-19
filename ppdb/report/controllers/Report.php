<?php

defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;

class Report extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('sias-ppdb') == false) {
            redirect('ppdb/auth');
        }
        $this->load->model('ReportModel');
        $this->load->library('form_validation');
    }

    //---------------------------EKSPORT DATA MAHASISWA---------------------------------//

    public function export_data_csv()
    {
        $this->load->helper('download');

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $extension = 'csv';

        $fileName = 'DATA_SISWA_' . date('d-m-Y');

        //var_dump($data['data_check']);exit;

        if ($data['data_check'] == '' or $data['data_check'] == null || empty($data['data_check'] || !$data['data_check'])) {

            $this->session->set_flashdata('flash_message', warn_msg('Pilih/Centang data terlebih dahulu'));
            redirect('ppdb/admission/list_student_accepted');
        } else {

            if (!empty($extension)) {
                $extension = $extension;
            } elseif ($extension == 'xlsx') {
                $extension = 'xlsx';
            } else {
                $extension = 'xls';
            }

            $data_arr = explode(",", $data['data_check']);

            $empInfo = $this->ReportModel->get_data_export_form($data_arr);
            //            var_dump($empInfo);
            //            exit;
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A1', 'NISN');
            $sheet->setCellValue('B1', 'Nomor Formulir');
            $sheet->setCellValue('C1', 'NIK');
            $sheet->setCellValue('D1', 'Jenjang');
            $sheet->setCellValue('E1', 'Program');
            $sheet->setCellValue('F1', 'Nomor Akta');
            $sheet->setCellValue('G1', 'Nama Lengkap');
            $sheet->setCellValue('H1', 'Nama Panggilan');
            $sheet->setCellValue('I1', 'Jenis Kelamin');
            $sheet->setCellValue('J1', 'Tempat Lahir');
            $sheet->setCellValue('K1', 'Tanggal Lahir');
            $sheet->setCellValue('L1', 'Agama');
            $sheet->setCellValue('M1', 'Tinggi Badan');
            $sheet->setCellValue('N1', 'Berat Badan');
            $sheet->setCellValue('O1', 'Berkebutuhan Khusus');
            $sheet->setCellValue('P1', 'Nomor Telepon');
            $sheet->setCellValue('Q1', 'Nomor Handphone');
            $sheet->setCellValue('R1', 'Jarak Rumah');
            $sheet->setCellValue('S1', 'Alat Transportasi');
            $sheet->setCellValue('T1', 'Jumlah Saudara');
            $sheet->setCellValue('U1', 'Anak Ke');
            $sheet->setCellValue('V1', 'NIS Saudara');
            $sheet->setCellValue('W1', 'Nama Saudara');
            $sheet->setCellValue('X1', 'Email');
            $sheet->setCellValue('Y1', 'Rombel');
            $sheet->setCellValue('Z1', 'Nama Ayah');
            $sheet->setCellValue('AA1', 'NIK Ayah');
            $sheet->setCellValue('AB1', 'Tempat Lahir Ayah');
            $sheet->setCellValue('AC1', 'Tanggal Lahir Ayah');
            $sheet->setCellValue('AD1', 'Pekerjaan Ayah');
            $sheet->setCellValue('AE1', 'Pendidikan Ayah');
            $sheet->setCellValue('AF1', 'Penghasilan Ayah');
            $sheet->setCellValue('AG1', 'Nama Ibu');
            $sheet->setCellValue('AH1', 'NIK Ibu');
            $sheet->setCellValue('AI1', 'Tempat Lahir Ibu');
            $sheet->setCellValue('AJ1', 'Tanggal Lahir Ibu');
            $sheet->setCellValue('AK1', 'Pekerjaan Ibu');
            $sheet->setCellValue('AL1', 'Pendidikan Ibu');
            $sheet->setCellValue('AM1', 'Penghasilan Ibu');
            $sheet->setCellValue('AN1', 'Nama Wali');
            $sheet->setCellValue('AO1', 'NIK Wali');
            $sheet->setCellValue('AP1', 'Tempat Lahir Wali');
            $sheet->setCellValue('AQ1', 'Tanggal Lahir Wali');
            $sheet->setCellValue('AR1', 'Pekerjaan Wali');
            $sheet->setCellValue('AS1', 'Pendidikan Wali');
            $sheet->setCellValue('AT1', 'Penghasilan Wali');
            $sheet->setCellValue('AU1', 'Jenis Tinggal');
            $sheet->setCellValue('AV1', 'Alamat Rumah KK');
            $sheet->setCellValue('AW1', 'RT KK');
            $sheet->setCellValue('AX1', 'RW KK');
            $sheet->setCellValue('AY1', 'Kelurahan/Desa KK');
            $sheet->setCellValue('AZ1', 'Kecamatan KK');
            $sheet->setCellValue('BA1', 'Kabupaten/Kota KK');
            $sheet->setCellValue('BB1', 'Provinsi KK');
            $sheet->setCellValue('BC1', 'Kodepos KK');
            $sheet->setCellValue('BD1', 'Alamat Rumah Domisili');
            $sheet->setCellValue('BE1', 'RT Domisili');
            $sheet->setCellValue('BF1', 'RW Domisili');
            $sheet->setCellValue('BG1', 'Kelurahan/Desa Domisili');
            $sheet->setCellValue('BH1', 'Kecamatan Domisili');
            $sheet->setCellValue('BI1', 'Kabupaten/Kota Domisili');
            $sheet->setCellValue('BJ1', 'Provinsi Domisili');
            $sheet->setCellValue('BK1', 'Kodepos Domisili');
            $sheet->setCellValue('BL1', 'Tahun Ajaran');

            $rowCount = 2;

            foreach ($empInfo as $element) {

                $berkebutuhan = '';
                if ($element['kebutuhan_khusus'] == 0) {
                    $berkebutuhan = 'Tidak';
                } else if ($element['kebutuhan_khusus'] == 1) {
                    $berkebutuhan = 'Iya';
                }

                $program = '';
                if ($element['jalur'] == 1) {
                    $program = 'REGULER';
                } else if ($element['jalur'] == 2) {
                    $program = 'ICP';
                }

                $jenjang = '';
                if ($element['level_tingkat'] == 1) {
                    $jenjang = 'KB';
                } else if ($element['level_tingkat'] == 2) {
                    $jenjang = 'TK';
                } else if ($element['level_tingkat'] == 3) {
                    $jenjang = 'SD';
                } else if ($element['level_tingkat'] == 4) {
                    $jenjang = 'SMP';
                } else if ($element['level_tingkat'] == 5) {
                    $jenjang = 'KB-TK';
                } else if ($element['level_tingkat'] == 6) {
                    $jenjang = 'DC';
                }

                $jenis_kelamin = '';
                if ($element['jenis_kelamin'] == 1) {
                    $jenis_kelamin = 'Laki-laki';
                } else if ($element['jenis_kelamin'] == 2) {
                    $jenis_kelamin = 'Perempuan';
                }

                $agama = '';
                if ($element['agama'] == 1) {
                    $agama = 'Islam';
                } else if ($element['agama'] == 2) {
                    $agama = 'Kristen';
                } else if ($element['agama'] == 3) {
                    $agama = 'Hindu';
                } else if ($element['agama'] == 4) {
                    $agama = 'Budha';
                } else if ($element['agama'] == 5) {
                    $agama = 'Lainnya';
                }

                $pendidikan_ayah = '';
                if ($element['pendidikan_ayah'] == 1) {
                    $pendidikan_ayah = 'Tidak Sekolah';
                } else if ($element['pendidikan_ayah'] == 2) {
                    $pendidikan_ayah = 'SD';
                } else if ($element['pendidikan_ayah'] == 3) {
                    $pendidikan_ayah = 'SLTP';
                } else if ($element['pendidikan_ayah'] == 4) {
                    $pendidikan_ayah = 'SLTA';
                } else if ($element['pendidikan_ayah'] == 5) {
                    $pendidikan_ayah = 'D-I/D-II';
                } else if ($element['pendidikan_ayah'] == 6) {
                    $pendidikan_ayah = 'D-III';
                } else if ($element['pendidikan_ayah'] == 7) {
                    $pendidikan_ayah = 'D-IV/S1';
                } else if ($element['pendidikan_ayah'] == 8) {
                    $pendidikan_ayah = 'S2/S3';
                }

                $pendidikan_ibu = '';
                if ($element['pendidikan_ibu'] == 1) {
                    $pendidikan_ibu = 'Tidak Sekolah';
                } else if ($element['pendidikan_ibu'] == 2) {
                    $pendidikan_ibu = 'SD';
                } else if ($element['pendidikan_ibu'] == 3) {
                    $pendidikan_ibu = 'SLTP';
                } else if ($element['pendidikan_ibu'] == 4) {
                    $pendidikan_ibu = 'SLTA';
                } else if ($element['pendidikan_ibu'] == 5) {
                    $pendidikan_ibu = 'D-I/D-II';
                } else if ($element['pendidikan_ibu'] == 6) {
                    $pendidikan_ibu = 'D-III';
                } else if ($element['pendidikan_ibu'] == 7) {
                    $pendidikan_ibu = 'D-IV/S1';
                } else if ($element['pendidikan_ibu'] == 8) {
                    $pendidikan_ibu = 'S2/S3';
                }

                $pendidikan_wali = '';
                if ($element['pendidikan_wali'] == 1) {
                    $pendidikan_wali = 'Tidak Sekolah';
                } else if ($element['pendidikan_wali'] == 2) {
                    $pendidikan_wali = 'SD';
                } else if ($element['pendidikan_wali'] == 3) {
                    $pendidikan_wali = 'SLTP';
                } else if ($element['pendidikan_wali'] == 4) {
                    $pendidikan_wali = 'SLTA';
                } else if ($element['pendidikan_wali'] == 5) {
                    $pendidikan_wali = 'D-I/D-II';
                } else if ($element['pendidikan_wali'] == 6) {
                    $pendidikan_wali = 'D-III';
                } else if ($element['pendidikan_wali'] == 7) {
                    $pendidikan_wali = 'D-IV/S1';
                } else if ($element['pendidikan_wali'] == 8) {
                    $pendidikan_wali = 'S2/S3';
                }

                $penghasilan_ayah = '';
                if ($element['penghasilan_ayah'] == 1) {
                    $penghasilan_ayah = 'Kurang dari Rp. 1.500.000';
                } else if ($element['penghasilan_ayah'] == 2) {
                    $penghasilan_ayah = 'Rp. 1.500.000 - Rp. 2.500.000';
                } else if ($element['penghasilan_ayah'] == 3) {
                    $penghasilan_ayah = 'Rp. 2.500.000 - RP. 3.500.000';
                } else if ($element['penghasilan_ayah'] == 4) {
                    $penghasilan_ayah = 'Rp. 3.500.000 - Rp. 4.500.000';
                } else if ($element['penghasilan_ayah'] == 5) {
                    $penghasilan_ayah = 'Rp. 4.500.000 - Rp. 5.500.000';
                } else if ($element['penghasilan_ayah'] == 6) {
                    $penghasilan_ayah = 'Lebih dari Rp. 5.500.000';
                }

                $penghasilan_ibu = '';
                if ($element['penghasilan_ibu'] == 1) {
                    $penghasilan_ibu = 'urang dari Rp. 1.500.000';
                } else if ($element['penghasilan_ibu'] == 2) {
                    $penghasilan_ibu = 'Rp. 1.500.000 - Rp. 2.500.000';
                } else if ($element['penghasilan_ibu'] == 3) {
                    $penghasilan_ibu = 'Rp. 2.500.000 - RP. 3.500.000';
                } else if ($element['penghasilan_ibu'] == 4) {
                    $penghasilan_ibu = 'Rp. 3.500.000 - Rp. 4.500.000';
                } else if ($element['penghasilan_ibu'] == 5) {
                    $penghasilan_ibu = 'Rp. 4.500.000 - Rp. 5.500.000';
                } else if ($element['penghasilan_ibu'] == 6) {
                    $penghasilan_ibu = 'Lebih dari Rp. 5.500.000';
                }

                $penghasilan_wali = '';
                if ($element['penghasilan_wali'] == 1) {
                    $penghasilan_wali = 'urang dari Rp. 1.500.000';
                } else if ($element['penghasilan_wali'] == 2) {
                    $penghasilan_wali = 'Rp. 1.500.000 - Rp. 2.500.000';
                } else if ($element['penghasilan_wali'] == 3) {
                    $penghasilan_wali = 'Rp. 2.500.000 - RP. 3.500.000';
                } else if ($element['penghasilan_wali'] == 4) {
                    $penghasilan_wali = 'Rp. 3.500.000 - Rp. 4.500.000';
                } else if ($element['penghasilan_wali'] == 5) {
                    $penghasilan_wali = 'Rp. 4.500.000 - Rp. 5.500.000';
                } else if ($element['penghasilan_wali'] == 6) {
                    $penghasilan_wali = 'Lebih dari Rp. 5.500.000';
                }

                $sheet->setCellValue('A' . $rowCount, $element['nisn']);
                $sheet->setCellValue('B' . $rowCount, $element['nomor_formulir']);
                $sheet->setCellValue('C' . $rowCount, $element['nik']);
                $sheet->setCellValue('D' . $rowCount, $jenjang);
                $sheet->setCellValue('E' . $rowCount, $program);
                $sheet->setCellValue('F' . $rowCount, $element['no_akta_kelahiran']);
                $sheet->setCellValue('G' . $rowCount, $element['nama_lengkap']);
                $sheet->setCellValue('H' . $rowCount, $element['nama_panggilan']);
                $sheet->setCellValue('I' . $rowCount, $jenis_kelamin);
                $sheet->setCellValue('J' . $rowCount, $element['tempat_lahir']);
                $sheet->setCellValue('K' . $rowCount, $element['tanggal_lahir']);
                $sheet->setCellValue('L' . $rowCount, $agama);
                $sheet->setCellValue('M' . $rowCount, $element['tinggi_badan']);
                $sheet->setCellValue('N' . $rowCount, $element['berat_badan']);
                $sheet->setCellValue('O' . $rowCount, $berkebutuhan);
                $sheet->setCellValue('P' . $rowCount, $element['nomor_telepon']);
                $sheet->setCellValue('Q' . $rowCount, $element['nomor_handphone']);
                $sheet->setCellValue('R' . $rowCount, $element['jarak_rumah_sekolah']);
                $sheet->setCellValue('S' . $rowCount, $element['alat_transportasi']);
                $sheet->setCellValue('T' . $rowCount, $element['jumlah_saudara']);
                $sheet->setCellValue('U' . $rowCount, $element['anak_ke']);
                $sheet->setCellValue('V' . $rowCount, $element['nis_saudara']);
                $sheet->setCellValue('W' . $rowCount, $element['nama_saudara']);
                $sheet->setCellValue('X' . $rowCount, $element['email']);
                $sheet->setCellValue('Y' . $rowCount, $element['rombel']);
                $sheet->setCellValue('Z' . $rowCount, $element['nama_ayah']);
                $sheet->setCellValue('AA' . $rowCount, $element['nik_ayah']);
                $sheet->setCellValue('AB' . $rowCount, $element['tempat_lahir_ayah']);
                $sheet->setCellValue('AC' . $rowCount, $element['tanggal_lahir_ayah']);
                $sheet->setCellValue('AD' . $rowCount, $element['pekerjaan_ayah']);
                $sheet->setCellValue('AE' . $rowCount, $pendidikan_ayah);
                $sheet->setCellValue('AF' . $rowCount, $penghasilan_ayah);
                $sheet->setCellValue('AG' . $rowCount, $element['nama_ibu']);
                $sheet->setCellValue('AH' . $rowCount, $element['nik_ibu']);
                $sheet->setCellValue('AI' . $rowCount, $element['tempat_lahir_ibu']);
                $sheet->setCellValue('AJ' . $rowCount, $element['tanggal_lahir_ibu']);
                $sheet->setCellValue('AK' . $rowCount, $element['pekerjaan_ibu']);
                $sheet->setCellValue('AL' . $rowCount, $pendidikan_ibu);
                $sheet->setCellValue('AM' . $rowCount, $penghasilan_ibu);
                $sheet->setCellValue('AN' . $rowCount, $element['nama_wali']);
                $sheet->setCellValue('AO' . $rowCount, $element['nik_wali']);
                $sheet->setCellValue('AP' . $rowCount, $element['tempat_lahir_wali']);
                $sheet->setCellValue('AQ' . $rowCount, $element['tanggal_lahir_wali']);
                $sheet->setCellValue('AR' . $rowCount, $element['pekerjaan_wali']);
                $sheet->setCellValue('AS' . $rowCount, $pendidikan_wali);
                $sheet->setCellValue('AT' . $rowCount, $penghasilan_wali);
                $sheet->setCellValue('AU' . $rowCount, $element['jenis_tinggal']);
                $sheet->setCellValue('AV' . $rowCount, preg_replace('/,/', '.', $element['alamat_rumah_kk']));
                $sheet->setCellValue('AW' . $rowCount, $element['rt_kk']);
                $sheet->setCellValue('AX' . $rowCount, $element['rw_kk']);
                $sheet->setCellValue('AY' . $rowCount, $element['nama_kelurahan_desa_kk']);
                $sheet->setCellValue('AZ' . $rowCount, $element['nama_kecamatan_kk']);
                $sheet->setCellValue('BA' . $rowCount, $element['nama_kabupaten_kota_kk']);
                $sheet->setCellValue('BB' . $rowCount, $element['nama_provinsi_kk']);
                $sheet->setCellValue('BC' . $rowCount, $element['kodepos_kk']);
                $sheet->setCellValue('BD' . $rowCount, preg_replace('/,/', '.', $element['alamat_rumah_dom']));
                $sheet->setCellValue('BE' . $rowCount, $element['rt_dom']);
                $sheet->setCellValue('BF' . $rowCount, $element['rw_dom']);
                $sheet->setCellValue('BG' . $rowCount, $element['nama_kelurahan_desa_dom']);
                $sheet->setCellValue('BH' . $rowCount, $element['nama_kecamatan_dom']);
                $sheet->setCellValue('BI' . $rowCount, $element['nama_kabupaten_kota_dom']);
                $sheet->setCellValue('BJ' . $rowCount, $element['nama_provinsi_dom']);
                $sheet->setCellValue('BK' . $rowCount, $element['kodepos_dom']);
                $sheet->setCellValue('BL' . $rowCount, $element['tahun_ajaran']);

                $rowCount++;
            }

            if ($extension == 'csv') {
                $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
                $fileName = $fileName . '.csv';
            } elseif ($extension == 'xlsx') {
                $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
                $fileName = $fileName . '.xlsx';
            } else {
                $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xls($spreadsheet);
                $fileName = $fileName . '.xls';
            }

            $this->output->set_header('Content-Type: application/vnd.ms-excel');
            $this->output->set_header("Content-type: application/csv");
            $this->output->set_header('Cache-Control: max-age=0');
            header('Content-Disposition: attachment;filename="' . $fileName . '"');
            $writer->save('php://output');
        }
    }

    public function export_data_register_csv()
    {
        $this->load->helper('download');

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $extension = 'csv';

        $fileName = 'DATA_PEMBELIAN_FORMULIR_' . date('d-m-Y');

        //var_dump($data['data_check']);exit;

        if ($data['data_check'] == '' or $data['data_check'] == null || empty($data['data_check'] || !$data['data_check'])) {

            $this->session->set_flashdata('flash_message', warn_msg('Pilih/Centang data terlebih dahulu'));
            redirect('ppdb/admission/list_formulir_sold');
        } else {

            if (!empty($extension)) {
                $extension = $extension;
            } elseif ($extension == 'xlsx') {
                $extension = 'xlsx';
            } else {
                $extension = 'xls';
            }

            $data_arr = explode(",", $data['data_check']);

            $empInfo = $this->ReportModel->get_data_export_register($data_arr);
            //            var_dump($empInfo);
            //            exit;
            $spreadsheet = new Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A1', 'NISN');
            $sheet->setCellValue('B1', 'Nomor Formulir');
            $sheet->setCellValue('C1', 'NIK');
            $sheet->setCellValue('D1', 'Jenjang');
            $sheet->setCellValue('E1', 'Program');
            $sheet->setCellValue('F1', 'Nomor Akta');
            $sheet->setCellValue('G1', 'Nama Lengkap');
            $sheet->setCellValue('H1', 'Nama Panggilan');
            $sheet->setCellValue('I1', 'Jenis Kelamin');
            $sheet->setCellValue('J1', 'Tempat Lahir');
            $sheet->setCellValue('K1', 'Tanggal Lahir');
            $sheet->setCellValue('L1', 'Agama');
            $sheet->setCellValue('M1', 'Tinggi Badan');
            $sheet->setCellValue('N1', 'Berat Badan');
            $sheet->setCellValue('O1', 'Berkebutuhan Khusus');
            $sheet->setCellValue('P1', 'Nomor Telepon');
            $sheet->setCellValue('Q1', 'Nomor Handphone');
            $sheet->setCellValue('R1', 'Jarak Rumah');
            $sheet->setCellValue('S1', 'Alat Transportasi');
            $sheet->setCellValue('T1', 'Jumlah Saudara');
            $sheet->setCellValue('U1', 'Anak Ke');
            $sheet->setCellValue('V1', 'NIS Saudara');
            $sheet->setCellValue('W1', 'Nama Saudara');
            $sheet->setCellValue('X1', 'Email');
            $sheet->setCellValue('Y1', 'Rombel');
            $sheet->setCellValue('Z1', 'Nama Ayah');
            $sheet->setCellValue('AA1', 'NIK Ayah');
            $sheet->setCellValue('AB1', 'Tempat Lahir Ayah');
            $sheet->setCellValue('AC1', 'Tanggal Lahir Ayah');
            $sheet->setCellValue('AD1', 'Pekerjaan Ayah');
            $sheet->setCellValue('AE1', 'Pendidikan Ayah');
            $sheet->setCellValue('AF1', 'Penghasilan Ayah');
            $sheet->setCellValue('AG1', 'Nama Ibu');
            $sheet->setCellValue('AH1', 'NIK Ibu');
            $sheet->setCellValue('AI1', 'Tempat Lahir Ibu');
            $sheet->setCellValue('AJ1', 'Tanggal Lahir Ibu');
            $sheet->setCellValue('AK1', 'Pekerjaan Ibu');
            $sheet->setCellValue('AL1', 'Pendidikan Ibu');
            $sheet->setCellValue('AM1', 'Penghasilan Ibu');
            $sheet->setCellValue('AN1', 'Nama Wali');
            $sheet->setCellValue('AO1', 'NIK Wali');
            $sheet->setCellValue('AP1', 'Tempat Lahir Wali');
            $sheet->setCellValue('AQ1', 'Tanggal Lahir Wali');
            $sheet->setCellValue('AR1', 'Pekerjaan Wali');
            $sheet->setCellValue('AS1', 'Pendidikan Wali');
            $sheet->setCellValue('AT1', 'Penghasilan Wali');
            $sheet->setCellValue('AU1', 'Jenis Tinggal');
            $sheet->setCellValue('AV1', 'Alamat Rumah KK');
            $sheet->setCellValue('AW1', 'RT KK');
            $sheet->setCellValue('AX1', 'RW KK');
            $sheet->setCellValue('AY1', 'Kelurahan/Desa KK');
            $sheet->setCellValue('AZ1', 'Kecamatan KK');
            $sheet->setCellValue('BA1', 'Kabupaten/Kota KK');
            $sheet->setCellValue('BB1', 'Provinsi KK');
            $sheet->setCellValue('BC1', 'Kodepos KK');
            $sheet->setCellValue('BD1', 'Alamat Rumah Domisili');
            $sheet->setCellValue('BE1', 'RT Domisili');
            $sheet->setCellValue('BF1', 'RW Domisili');
            $sheet->setCellValue('BG1', 'Kelurahan/Desa Domisili');
            $sheet->setCellValue('BH1', 'Kecamatan Domisili');
            $sheet->setCellValue('BI1', 'Kabupaten/Kota Domisili');
            $sheet->setCellValue('BJ1', 'Provinsi Domisili');
            $sheet->setCellValue('BK1', 'Kodepos Domisili');
            $sheet->setCellValue('BL1', 'Asal Sekolah');
            $sheet->setCellValue('BM1', 'Tahun Ajaran');

            $rowCount = 2;

            foreach ($empInfo as $element) {

                $berkebutuhan = '';
                if ($element['kebutuhan_khusus'] == 0) {
                    $berkebutuhan = 'Tidak';
                } else if ($element['kebutuhan_khusus'] == 1) {
                    $berkebutuhan = 'Iya';
                }

                $program = '';
                if ($element['id_jalur'] == 1) {
                    $program = 'REGULER';
                } else if ($element['id_jalur'] == 2) {
                    $program = 'ICP';
                }

                $jenjang = '';
                if ($element['level_tingkat'] == 1) {
                    $jenjang = 'KB';
                } else if ($element['level_tingkat'] == 2) {
                    $jenjang = 'TK';
                } else if ($element['level_tingkat'] == 3) {
                    $jenjang = 'SD';
                } else if ($element['level_tingkat'] == 4) {
                    $jenjang = 'SMP';
                } else if ($element['level_tingkat'] == 5) {
                    $jenjang = 'KB-TK';
                } else if ($element['level_tingkat'] == 6) {
                    $jenjang = 'DC';
                }

                $jenis_kelamin = '';
                if ($element['jenis_kelamin'] == 1) {
                    $jenis_kelamin = 'Laki-laki';
                } else if ($element['jenis_kelamin'] == 2) {
                    $jenis_kelamin = 'Perempuan';
                }

                $agama = '';
                if ($element['agama'] == 1) {
                    $agama = 'Islam';
                } else if ($element['agama'] == 2) {
                    $agama = 'Kristen';
                } else if ($element['agama'] == 3) {
                    $agama = 'Hindu';
                } else if ($element['agama'] == 4) {
                    $agama = 'Budha';
                } else if ($element['agama'] == 5) {
                    $agama = 'Lainnya';
                }

                $pendidikan_ayah = '';
                if ($element['pendidikan_ayah'] == 1) {
                    $pendidikan_ayah = 'Tidak Sekolah';
                } else if ($element['pendidikan_ayah'] == 2) {
                    $pendidikan_ayah = 'SD';
                } else if ($element['pendidikan_ayah'] == 3) {
                    $pendidikan_ayah = 'SLTP';
                } else if ($element['pendidikan_ayah'] == 4) {
                    $pendidikan_ayah = 'SLTA';
                } else if ($element['pendidikan_ayah'] == 5) {
                    $pendidikan_ayah = 'D-I/D-II';
                } else if ($element['pendidikan_ayah'] == 6) {
                    $pendidikan_ayah = 'D-III';
                } else if ($element['pendidikan_ayah'] == 7) {
                    $pendidikan_ayah = 'D-IV/S1';
                } else if ($element['pendidikan_ayah'] == 8) {
                    $pendidikan_ayah = 'S2/S3';
                }

                $pendidikan_ibu = '';
                if ($element['pendidikan_ibu'] == 1) {
                    $pendidikan_ibu = 'Tidak Sekolah';
                } else if ($element['pendidikan_ibu'] == 2) {
                    $pendidikan_ibu = 'SD';
                } else if ($element['pendidikan_ibu'] == 3) {
                    $pendidikan_ibu = 'SLTP';
                } else if ($element['pendidikan_ibu'] == 4) {
                    $pendidikan_ibu = 'SLTA';
                } else if ($element['pendidikan_ibu'] == 5) {
                    $pendidikan_ibu = 'D-I/D-II';
                } else if ($element['pendidikan_ibu'] == 6) {
                    $pendidikan_ibu = 'D-III';
                } else if ($element['pendidikan_ibu'] == 7) {
                    $pendidikan_ibu = 'D-IV/S1';
                } else if ($element['pendidikan_ibu'] == 8) {
                    $pendidikan_ibu = 'S2/S3';
                }

                $pendidikan_wali = '';
                if ($element['pendidikan_wali'] == 1) {
                    $pendidikan_wali = 'Tidak Sekolah';
                } else if ($element['pendidikan_wali'] == 2) {
                    $pendidikan_wali = 'SD';
                } else if ($element['pendidikan_wali'] == 3) {
                    $pendidikan_wali = 'SLTP';
                } else if ($element['pendidikan_wali'] == 4) {
                    $pendidikan_wali = 'SLTA';
                } else if ($element['pendidikan_wali'] == 5) {
                    $pendidikan_wali = 'D-I/D-II';
                } else if ($element['pendidikan_wali'] == 6) {
                    $pendidikan_wali = 'D-III';
                } else if ($element['pendidikan_wali'] == 7) {
                    $pendidikan_wali = 'D-IV/S1';
                } else if ($element['pendidikan_wali'] == 8) {
                    $pendidikan_wali = 'S2/S3';
                }

                $penghasilan_ayah = '';
                if ($element['penghasilan_ayah'] == 1) {
                    $penghasilan_ayah = 'Kurang dari Rp. 1.500.000';
                } else if ($element['penghasilan_ayah'] == 2) {
                    $penghasilan_ayah = 'Rp. 1.500.000 - Rp. 2.500.000';
                } else if ($element['penghasilan_ayah'] == 3) {
                    $penghasilan_ayah = 'Rp. 2.500.000 - RP. 3.500.000';
                } else if ($element['penghasilan_ayah'] == 4) {
                    $penghasilan_ayah = 'Rp. 3.500.000 - Rp. 4.500.000';
                } else if ($element['penghasilan_ayah'] == 5) {
                    $penghasilan_ayah = 'Rp. 4.500.000 - Rp. 5.500.000';
                } else if ($element['penghasilan_ayah'] == 6) {
                    $penghasilan_ayah = 'Lebih dari Rp. 5.500.000';
                }

                $penghasilan_ibu = '';
                if ($element['penghasilan_ibu'] == 1) {
                    $penghasilan_ibu = 'urang dari Rp. 1.500.000';
                } else if ($element['penghasilan_ibu'] == 2) {
                    $penghasilan_ibu = 'Rp. 1.500.000 - Rp. 2.500.000';
                } else if ($element['penghasilan_ibu'] == 3) {
                    $penghasilan_ibu = 'Rp. 2.500.000 - RP. 3.500.000';
                } else if ($element['penghasilan_ibu'] == 4) {
                    $penghasilan_ibu = 'Rp. 3.500.000 - Rp. 4.500.000';
                } else if ($element['penghasilan_ibu'] == 5) {
                    $penghasilan_ibu = 'Rp. 4.500.000 - Rp. 5.500.000';
                } else if ($element['penghasilan_ibu'] == 6) {
                    $penghasilan_ibu = 'Lebih dari Rp. 5.500.000';
                }

                $penghasilan_wali = '';
                if ($element['penghasilan_wali'] == 1) {
                    $penghasilan_wali = 'urang dari Rp. 1.500.000';
                } else if ($element['penghasilan_wali'] == 2) {
                    $penghasilan_wali = 'Rp. 1.500.000 - Rp. 2.500.000';
                } else if ($element['penghasilan_wali'] == 3) {
                    $penghasilan_wali = 'Rp. 2.500.000 - RP. 3.500.000';
                } else if ($element['penghasilan_wali'] == 4) {
                    $penghasilan_wali = 'Rp. 3.500.000 - Rp. 4.500.000';
                } else if ($element['penghasilan_wali'] == 5) {
                    $penghasilan_wali = 'Rp. 4.500.000 - Rp. 5.500.000';
                } else if ($element['penghasilan_wali'] == 6) {
                    $penghasilan_wali = 'Lebih dari Rp. 5.500.000';
                }

                $sheet->setCellValue('A' . $rowCount, $element['nisn']);
                $sheet->setCellValue('B' . $rowCount, $element['nomor_formulir']);
                $sheet->setCellValue('C' . $rowCount, $element['nik']);
                $sheet->setCellValue('D' . $rowCount, $jenjang);
                $sheet->setCellValue('E' . $rowCount, $program);
                $sheet->setCellValue('F' . $rowCount, $element['no_akta_kelahiran']);
                $sheet->setCellValue('G' . $rowCount, $element['nama_calon_siswa']);
                $sheet->setCellValue('H' . $rowCount, $element['nama_panggilan']);
                $sheet->setCellValue('I' . $rowCount, $jenis_kelamin);
                $sheet->setCellValue('J' . $rowCount, $element['tempat_lahir']);
                $sheet->setCellValue('K' . $rowCount, $element['tanggal_lahir']);
                $sheet->setCellValue('L' . $rowCount, $agama);
                $sheet->setCellValue('M' . $rowCount, $element['tinggi_badan']);
                $sheet->setCellValue('N' . $rowCount, $element['berat_badan']);
                $sheet->setCellValue('O' . $rowCount, $berkebutuhan);
                $sheet->setCellValue('P' . $rowCount, $element['nomor_telepon']);
                $sheet->setCellValue('Q' . $rowCount, $element['nomor_wa']);
                $sheet->setCellValue('R' . $rowCount, $element['jarak_rumah_sekolah']);
                $sheet->setCellValue('S' . $rowCount, $element['alat_transportasi']);
                $sheet->setCellValue('T' . $rowCount, $element['jumlah_saudara']);
                $sheet->setCellValue('U' . $rowCount, $element['anak_ke']);
                $sheet->setCellValue('V' . $rowCount, $element['nis_saudara']);
                $sheet->setCellValue('W' . $rowCount, $element['nama_saudara']);
                $sheet->setCellValue('X' . $rowCount, $element['email_orangtua']);
                $sheet->setCellValue('Y' . $rowCount, $element['rombel']);
                $sheet->setCellValue('Z' . $rowCount, $element['nama_ayah']);
                $sheet->setCellValue('AA' . $rowCount, $element['nik_ayah']);
                $sheet->setCellValue('AB' . $rowCount, $element['tempat_lahir_ayah']);
                $sheet->setCellValue('AC' . $rowCount, $element['tanggal_lahir_ayah']);
                $sheet->setCellValue('AD' . $rowCount, $element['pekerjaan_ayah']);
                $sheet->setCellValue('AE' . $rowCount, $pendidikan_ayah);
                $sheet->setCellValue('AF' . $rowCount, $penghasilan_ayah);
                $sheet->setCellValue('AG' . $rowCount, $element['nama_ibu']);
                $sheet->setCellValue('AH' . $rowCount, $element['nik_ibu']);
                $sheet->setCellValue('AI' . $rowCount, $element['tempat_lahir_ibu']);
                $sheet->setCellValue('AJ' . $rowCount, $element['tanggal_lahir_ibu']);
                $sheet->setCellValue('AK' . $rowCount, $element['pekerjaan_ibu']);
                $sheet->setCellValue('AL' . $rowCount, $pendidikan_ibu);
                $sheet->setCellValue('AM' . $rowCount, $penghasilan_ibu);
                $sheet->setCellValue('AN' . $rowCount, $element['nama_wali']);
                $sheet->setCellValue('AO' . $rowCount, $element['nik_wali']);
                $sheet->setCellValue('AP' . $rowCount, $element['tempat_lahir_wali']);
                $sheet->setCellValue('AQ' . $rowCount, $element['tanggal_lahir_wali']);
                $sheet->setCellValue('AR' . $rowCount, $element['pekerjaan_wali']);
                $sheet->setCellValue('AS' . $rowCount, $pendidikan_wali);
                $sheet->setCellValue('AT' . $rowCount, $penghasilan_wali);
                $sheet->setCellValue('AU' . $rowCount, $element['jenis_tinggal']);
                $sheet->setCellValue('AV' . $rowCount, preg_replace('/,/', '.', $element['alamat_rumah_kk']));
                $sheet->setCellValue('AW' . $rowCount, $element['rt_kk']);
                $sheet->setCellValue('AX' . $rowCount, $element['rw_kk']);
                $sheet->setCellValue('AY' . $rowCount, $element['nama_kelurahan_desa_kk']);
                $sheet->setCellValue('AZ' . $rowCount, $element['nama_kecamatan_kk']);
                $sheet->setCellValue('BA' . $rowCount, $element['nama_kabupaten_kota_kk']);
                $sheet->setCellValue('BB' . $rowCount, $element['nama_provinsi_kk']);
                $sheet->setCellValue('BC' . $rowCount, $element['kodepos_kk']);
                $sheet->setCellValue('BD' . $rowCount, preg_replace('/,/', '.', $element['alamat_rumah_dom']));
                $sheet->setCellValue('BE' . $rowCount, $element['rt_dom']);
                $sheet->setCellValue('BF' . $rowCount, $element['rw_dom']);
                $sheet->setCellValue('BG' . $rowCount, $element['nama_kelurahan_desa_dom']);
                $sheet->setCellValue('BH' . $rowCount, $element['nama_kecamatan_dom']);
                $sheet->setCellValue('BI' . $rowCount, $element['nama_kabupaten_kota_dom']);
                $sheet->setCellValue('BJ' . $rowCount, $element['nama_provinsi_dom']);
                $sheet->setCellValue('BK' . $rowCount, $element['kodepos_dom']);
                $sheet->setCellValue('BL' . $rowCount, $element['asal_sekolah']);
                $sheet->setCellValue('BM' . $rowCount, $element['tahun_ajaran']);

                $rowCount++;
            }

            if ($extension == 'csv') {
                $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
                $fileName = $fileName . '.csv';
            } elseif ($extension == 'xlsx') {
                $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
                $fileName = $fileName . '.xlsx';
            } else {
                $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xls($spreadsheet);
                $fileName = $fileName . '.xls';
            }

            $this->output->set_header('Content-Type: application/vnd.ms-excel');
            $this->output->set_header("Content-type: application/csv");
            $this->output->set_header('Cache-Control: max-age=0');
            header('Content-Disposition: attachment;filename="' . $fileName . '"');
            $writer->save('php://output');
        }
    }

    //-----------------------------------------------------------------------//
    //
}
