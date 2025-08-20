<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admission extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('sias-ppdb') == false) {
            redirect('ppdb/auth');
        }
        $this->load->model('AdmissionModel');
        $this->load->library('form_validation');
        $this->load->library('pdfgenerator');
    }

    //
    //-------------------------------ADMISSION------------------------------//
    //

    public function list_formulir_sold()
    {

        $data['title'] = 'Daftar Formulir | Pendaftaran PPDB Sekolah Utsman';
        $data['nav_adm'] = 'menu-item-here';
        $data['register'] = $this->AdmissionModel->get_register_all();
        $data['schoolyear'] = $this->AdmissionModel->get_schoolyear();
        $data['bank_account'] = $this->AdmissionModel->get_bank_account();
        $data['insight_sold'] = $this->AdmissionModel->get_formulir_sold();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_student_formulir', $data);
    }

    public function detail_formulir_sold($id = '')
    {
        $id = paramDecrypt($id);

        $data['title'] = 'Daftar Formulir | Pendaftaran PPDB Sekolah Utsman';
        $data['nav_adm'] = 'menu-item-here';
        $data['register'] = $this->AdmissionModel->get_register_id($id);

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_view_detail_student_formulir', $data);
    }

    public function detail_student_fulfillment($id = '')
    {
        $id = paramDecrypt($id);

        $data['title'] = 'Daftar Formulir | Pengisian PPDB Sekolah Utsman';
        $data['nav_adm'] = 'menu-item-here';
        $data['student'] = $this->AdmissionModel->get_detail_student_admission($id); //?

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_view_detail_student_fulfillment', $data);
    }

    public function detail_student_accepted($id = '')
    {
        $id = paramDecrypt($id);

        $data['title'] = 'Daftar Formulir | Penerimaan PPDB Sekolah Utsman';
        $data['nav_adm'] = 'menu-item-here';
        $data['student'] = $this->AdmissionModel->get_detail_student_admission($id); //?
        $data['voucher'] = $this->AdmissionModel->get_all_voucher();
        $data['cost'] = $this->AdmissionModel->get_cost_student($data['student'][0]->level_tingkat, $data['student'][0]->jalur, $data['student'][0]->jenis_kelamin);

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_view_detail_student_accepted', $data);
    }

    public function list_student_fulfillment()
    {

        $data['title'] = 'Control Panel | Pengisian PPDB Sekolah Utsman';
        $data['nav_adm'] = 'menu-item-here';
        $data['formulir'] = $this->AdmissionModel->get_all_formulir();
        $data['schoolyear'] = $this->AdmissionModel->get_schoolyear();
        $data['insight_fulfill'] = $this->AdmissionModel->get_formulir_fulflillment();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_student_fulfillment', $data);
    }

    public function list_student_admission()
    {

        $data['title'] = 'Daftar Formulir | Penerimaan Sekolah Utsman';
        $data['nav_acpt'] = 'menu-item-here';
        $data['formulir'] = $this->AdmissionModel->get_all_admission();
        $data['schoolyear'] = $this->AdmissionModel->get_schoolyear();
        $data['insight_admission'] = $this->AdmissionModel->get_student_admission();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_student_admission', $data);
    }

    public function student_admission($id = '')
    {
        $id = paramDecrypt($id);

        $data['title'] = 'Daftar Formulir | Konfirmasi Penerimaan PPDB Sekolah Utsman';
        $data['nav_acpt'] = 'menu-item-here';
        $data['student'] = $this->AdmissionModel->get_detail_student_admission($id);
        $data['voucher'] = $this->AdmissionModel->get_all_voucher();
        $data['bank_account'] = $this->AdmissionModel->get_bank_va_account();
        $data['cost'] = $this->AdmissionModel->get_cost_student($data['student'][0]->level_tingkat, $data['student'][0]->jalur, $data['student'][0]->jenis_kelamin);

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_view_detail_confirm_admission', $data);
    }

    public function list_student_accepted()
    {

        $data['title'] = 'Daftar Formulir | Penerimaan Sekolah Utsman';
        $data['nav_adm'] = 'menu-item-here';
        $data['formulir'] = $this->AdmissionModel->get_all_admission_accepted();
        $data['schoolyear'] = $this->AdmissionModel->get_schoolyear();
        $data['bank_account'] = $this->AdmissionModel->get_bank_account();
        $data['insight_accepted'] = $this->AdmissionModel->get_student_accepted();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_student_accepted', $data);
    }

    //----------------------------------MAILER-------------------------------------//

    public function accept_admission()
    {
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');

        $id = $this->input->post('id');

        $id = paramDecrypt($id);

        $data['page'] = $this->AdmissionModel->get_page();
        $data['contact'] = $this->AdmissionModel->get_contact();
        $data['formulir'] = $this->AdmissionModel->get_formulir_by_id($id); //?
        $data['voucher'] = $this->AdmissionModel->get_all_voucher();

        $check_number = $this->AdmissionModel->get_number_last_student($data['formulir'][0]->tahun_ajaran);

        $nomor_nis = '';

        if ($check_number[0]->last_nis) {
            $nomor_nis = intval($check_number[0]->last_nis) + 1;
        } else {
            $nomor_nis = substr($data['formulir'][0]->tahun_ajaran, 2, 2) . '001';
        }

        if (!empty($nomor_nis)) {

            $image_resource = Zend_Barcode::factory('code128', 'image', array('text' => $nomor_nis, 'barHeight' => 20, 'factor' => 1), array())->draw();
            $barcode_name = $nomor_nis . '.jpg';
            $image_dir = 'uploads/student/barcode/'; // penyimpanan file barcode
            $data['barcode'] = $image_dir . $barcode_name;
            imagejpeg($image_resource, $image_dir . $barcode_name);
        }

        $status_order = $this->AdmissionModel->insert_student($data['formulir'][0], $nomor_nis, $data['barcode']);

        if ($status_order == true) {

            $subjek = "PENGUMUMAN PENERIMAAN SISWA";
            $content = $this->load->view('mailer_template/accepted', $data, true); // Ambil isi file content.php dan masukan ke variabel $content

            $sendmail = array(
                'email_penerima' => $data['formulir'][0]->email,
                'subjek' => $subjek,
                'content' => $content,
            );
            $this->AdmissionModel->update_status_admisiion_formulir($id, 1);

            if ($data['formulir'][0]->status_penerimaan == 0) {
                $this->mailer->send($sendmail);
            } else {
                $output = [
                    "status" => false,
                    "messages"  => "Mohon Maaf, Terjadi kesalahan pengiriman email, Silahkan coba lagi."
                ];
            }
        } else {
            $output = [
                "status" => false,
                "messages"  => "Mohon Maaf, Terjadi kesalahan penerimaan admission, Silahkan coba lagi."
            ];
        }
        echo json_encode($output);
    }

    // public function accept_admission()
    // {
    //     $this->load->library('zend');
    //     $this->zend->load('Zend/Barcode');

    //     $id = $this->input->post('id');
    //     $id_voucher = $this->input->post('id_voucher');
    //     $level_tingkat = $this->input->post('level_tingkat');
    //     $data['total_biaya'] = $this->input->post('total_biaya');

    //     $id = paramDecrypt($id);

    //     $data['page'] = $this->AdmissionModel->get_page();
    //     $data['contact'] = $this->AdmissionModel->get_contact();
    //     $data['bank_account'] = $this->AdmissionModel->get_bank_account();
    //     $data['formulir'] = $this->AdmissionModel->get_formulir_by_id($id); //?
    //     $data['voucher'] = $this->AdmissionModel->get_all_voucher();
    //     $data['cost'] = $this->AdmissionModel->get_cost_student($data['formulir'][0]->level_tingkat, $data['formulir'][0]->jalur, $data['formulir'][0]->jenis_kelamin);
    //     $data['id_voucher'] = implode(",", $id_voucher);

    //     $check_number = $this->AdmissionModel->get_number_last_student($data['formulir'][0]->tahun_ajaran);

    //     $nomor_nis = '';

    //     if ($check_number[0]->last_nis) {
    //         $nomor_nis = intval($check_number[0]->last_nis) + 1;
    //     } else {
    //         $nomor_nis = substr($data['formulir'][0]->tahun_ajaran, 2, 2) . '001';
    //     }

    //     if (!empty($nomor_nis)) {

    //         $image_resource = Zend_Barcode::factory('code128', 'image', array('text' => $nomor_nis, 'barHeight' => 20, 'factor' => 1,), array())->draw();
    //         $barcode_name = $nomor_nis . '.jpg';
    //         $image_dir = 'uploads/student/barcode/'; // penyimpanan file barcode
    //         $data['barcode'] = $image_dir . $barcode_name;
    //         imagejpeg($image_resource, $image_dir . $barcode_name);
    //     }

    //     $subjek = "PENGUMUMAN PENERIMAAN CALON SISWA";
    //     $content = $this->load->view('mailer_template/accepted', $data, true); // Ambil isi file content.php dan masukan ke variabel $content

    //     $sendmail = array(
    //         'email_penerima' => $data['formulir'][0]->email,
    //         'subjek' => $subjek,
    //         'content' => $content,
    //     );

    //         $this->AdmissionModel->insert_student($data['formulir'][0], $nomor_nis, $data['barcode'], $data['total_biaya'], $level_tingkat);
    //         $this->AdmissionModel->update_status_formulir($id, $data['id_voucher'], $data['total_biaya'], 1);

    //     if ($data['formulir'][0]->status_penerimaan == 0) {

    //         $this->mailer->send($sendmail);
    //         echo '1';
    //     } else {
    //         echo '0';
    //     }

    //     // Panggil fungsi send yang ada di librari Mailer
    // }

    public function print_student_formulir($id = '')
    {
        $id = paramDecrypt($id);

        $check_no = $this->AdmissionModel->check_no_formulir($id);

        if ($id == '' or $id == null or $check_no == false) {

            $this->session->set_flashdata('flash_message', err_msg('Maaf, Data Anda tidak ditemukan!'));
            redirect('ppdb/admission/list_student_accepted');
        } else {

            $data['formulir'] = $this->AdmissionModel->get_detail_student_admission($id);
            $data['page'] = $this->AdmissionModel->get_page();
            $data['contact'] = $this->AdmissionModel->get_contact();

            if ($data['formulir'][0]->status_formulir == null or $data['formulir'][0]->status_formulir == 0) {
                //add new data
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Anda belum melakukan pengisian formulir'));
                redirect('ppdb/admission/list_student_accepted');
            } else {

                $html = $this->load->view('pdf_template/formulir', $data, true);
                $this->pdfgenerator->generate($html, $data['formulir'][0]->nomor_formulir . '_bukti_formulir_siswa', 1, '', true, 'A4', 'potrait');
            }
        }
    }

    public function export_student_formulir()
    {
        $this->load->library('zip');
        $this->load->helper('file');

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        if ($data['data_check'] == '' or $data['data_check'] == null || empty($data['data_check'] || !$data['data_check'])) {

            $this->session->set_flashdata('flash_message', warn_msg('Pilih/Centang data terlebih dahulu'));
            redirect('ppdb/admission/list_student_accepted');
        } else {
            $get_form = $this->AdmissionModel->get_data_student_admission($data['data_check']);
            $data['page'] = $this->AdmissionModel->get_page();
            $data['contact'] = $this->AdmissionModel->get_contact();

            $illegalChar = array(".", ",", "?", "!", ":", ";", "-", "+", "<", ">", "%", "~", "€", "$", "[", "]", "{", "}", "@", "&", "#", "*", "„", "|", "'", '"', " ");

            $path = FCPATH . '/uploads/student/report/form/';
            delete_files($path, true);
            rmdir($path);

            if (!file_exists($path)) {

                mkdir($path, 0777, true);

                if (!empty($get_form)) {
                    foreach ($get_form as $key => $value) {

                        $data['formulir'] = $this->AdmissionModel->get_detail_student_admission($value->id_formulir);
                        $filename = "FORMULIR_" . strtoupper(str_replace($illegalChar, '_', $data['formulir'][0]->nomor_formulir . '_' . strtoupper($data['formulir'][0]->nama_lengkap)));

                        $html = $this->load->view('pdf_template/formulir', $data, true);
                        $this->pdfgenerator->generate($html, $filename, 0, $path, false, 'A4', 'potrait');
                    }

                    $this->zip->read_dir($path, false);
                    $this->zip->download('KUMPULAN_FORMULIR_SISWA_' . date('d-m-Y') . '_(pdf)' . '.zip');
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Maaf, Data tidak ditemukan...'));
                    redirect('ppdb/admission/list_student_accepted');
                }
            } else {

                $this->session->set_flashdata('flash_message', err_msg('Maaf, Direktori sudah dibuat...'));
                redirect('ppdb/admission/list_student_accepted');
            }
        }
    }

    public function export_student_files()
    {
        $this->load->library('zip');
        $this->load->helper('file');

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        if ($data['data_check'] == '' or $data['data_check'] == null || empty($data['data_check'] || !$data['data_check'])) {

            $this->session->set_flashdata('flash_message', warn_msg('Pilih/Centang data terlebih dahulu'));
            redirect('ppdb/admission/list_student_accepted');
        } else {
            $get_file = $this->AdmissionModel->get_data_student_admission($data['data_check']);
            $data['page'] = $this->AdmissionModel->get_page();
            $data['contact'] = $this->AdmissionModel->get_contact();

            $illegalChar = array(".", ",", "?", "!", ":", ";", "-", "+", "<", ">", "%", "~", "€", "$", "[", "]", "{", "}", "@", "&", "#", "*", "„", "|", "'", '"', " ");

            $path = FCPATH . '/uploads/student/report/files/';
            delete_files($path, true);
            rmdir($path);

            if (!file_exists($path)) {

                mkdir($path, 0777, true);

                if (!empty($get_file)) {
                    foreach ($get_file as $key => $value) {

                        $data['formulir'] = $this->AdmissionModel->get_detail_student_admission($value->id_formulir);
                        $filename = "BERKAS_" . strtoupper(str_replace($illegalChar, '_', $data['formulir'][0]->nomor_formulir . '_' . strtoupper($data['formulir'][0]->nama_lengkap)));

                        $html = $this->load->view('pdf_template/berkas', $data, true);
                        $this->pdfgenerator->generate($html, $filename, 0, $path, false, 'A4', 'landscape');
                    }

                    $this->zip->read_dir($path, false);
                    $this->zip->download('KUMPULAN_BERKAS_SISWA_' . date('d-m-Y') . '_(pdf)' . '.zip');
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Maaf, Data tidak ditemukan...'));
                    redirect('ppdb/admission/list_student_accepted');
                }
            } else {

                $this->session->set_flashdata('flash_message', err_msg('Maaf, Direktori sudah dibuat...'));
                redirect('ppdb/admission/list_student_accepted');
            }
        }
    }

    //----------------------------------MAILER-------------------------------------//

    public function reject_admission()
    {
        $id = $this->input->post('id');

        $id = paramDecrypt($id);

        $data['page'] = $this->AdmissionModel->get_page();
        $data['contact'] = $this->AdmissionModel->get_contact();
        $data['formulir'] = $this->AdmissionModel->get_formulir_by_id($id); //?

        $status_admmision = $this->AdmissionModel->update_status_admisiion_formulir($id, 2);

        if ($status_admmision) {
            $subjek = "PENGUMUMAN PENERIMAAN SISWA";
            $content = $this->load->view('mailer_template/rejected', $data, true); // Ambil isi file content.php dan masukan ke variabel $content

            $sendmail = array(
                'email_penerima' => $data['formulir'][0]->email,
                'subjek' => $subjek,
                'content' => $content,
            );

            if ($data['formulir'][0]->status_penerimaan == 0) {
                $this->mailer->send($sendmail);
            } else {
                $output = [
                    "status" => false,
                    "messages" => "Mohon Maaf, Terjadi kesalahan pengiriman email., Silahkan coba lagi."
                ];
            }
        } else {
            $output = [
                "status" => false,
                "messages" => "Mohon Maaf, Terjadi kesalahan admisiion., Silahkan coba lagi."
            ];
        }

        echo json_encode($output);
    }

    public function delete_student_register()
    {

        $param = $this->input->post('id');
        $id = $this->security->xss_clean($param);
        $id = paramDecrypt($id);

        $data = $this->AdmissionModel->get_register_id($id);

        $delete = $this->AdmissionModel->delete_student_register($id);
        if ($delete == true) {
            $this->delete_bukti($data[0]->bukti_transfer);
            $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Calon Pendaftar atas nama " . $data[0]->nama_calon_pendaftar . " Telah Terhapus.."));
            redirect('ppdb/admission/list_formulir_sold');
        } else {

            $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
            redirect('ppdb/admission/list_formulir_sold');
        }
    }

    public function delete_student_formulir()
    {

        $param = $this->input->post('id');
        $id = $this->security->xss_clean($param);
        $id = paramDecrypt($id);

        $data = $this->AdmissionModel->get_formulir_by_id($id); //?

        $delete = $this->AdmissionModel->delete_student_formulir($id);
        if ($delete == true) {
            $this->delete_barcode($data[0]->barcode);
            $this->delete_foto($data[0]->foto_siswa);
            $this->delete_bukti($data[0]->bukti_transfer);
            $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Formulir atas nama " . $data[0]->nama_lengkap . " Telah Terhapus.."));
            redirect('ppdb/admission/list_formulir_sold');
        } else {
            $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
            redirect('ppdb/admission/list_formulir_sold');
        }
    }

    public function add_ajax_class($id_grad = '')
    {
        $query = $this->db->get_where('tingkat', array('level_tingkat' => $id_grad));
        $data = "";
        foreach ($query->result() as $value) {
            $data .= "<input type='hidden' id='level_tingkat' value='" . ($value->level_tingkat) . "'>" . strtoupper($value->nama_tingkat) . "";
            break;
        }
        echo $data;
    }

    public function delete_foto($name = '')
    {
        $path = './uploads/student/images/';
        $path_thumb = './uploads/student/images/thumbs/';
        @unlink($path . $name);
        @unlink($path_thumb . $name);
    }

    public function delete_barcode($name = '')
    {
        $path = './uploads/student/barcode/';
        @unlink($path . $name);
    }

    public function delete_bukti($name = '')
    {
        $path = './uploads/pendaftaran/images/';
        $path_thumb = './uploads/pendaftaran/images/thumbs/';
        @unlink($path . $name);
        @unlink($path_thumb . $name);
    }

    //----------------------------------------------------------------//
}
