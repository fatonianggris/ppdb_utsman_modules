<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here
        $this->load->model('RegisterModel');
        $this->load->library('form_validation');
        $this->load->library('pdfgenerator');

        $this->user_student = $this->session->userdata("sias-ppdb-student");
    }

    //
    //-------------------------------REGISTER------------------------------//
    //
    
    public function index() {
        $data['title'] = 'Sekolah Utsman | PPDB Sekolah Utsman ';
        $data['announcement'] = $this->RegisterModel->get_announcement();
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['schoolyear'] = $this->RegisterModel->get_schoolyear();
        $data['schedule'] = $this->RegisterModel->get_all_schedule();

        $this->load->view('ppdb_view_register', $data);
    }

    public function login_formulir() {
        $data['title'] = 'Sekolah Utsman | Login PPDB Sekolah Utsman ';
        $data['announcement'] = $this->RegisterModel->get_announcement();
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['schedule'] = $this->RegisterModel->get_all_schedule();

        $this->load->view('ppdb_view_login_formulir', $data);
    }

    public function check_email_ppdb() {

        $email = $this->input->post('email_orangtua');
        $check = $this->RegisterModel->get_email_ppdb($email);

        if ($check) {
            $isAvailable = false;
            echo json_encode(array(
                'valid' => $isAvailable,
            ));
        } else {
            $isAvailable = true;
            echo json_encode(array(
                'valid' => $isAvailable,
            ));
        }
    }

    public function auth_login_formulir() {

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        $userIp = $this->input->ip_address();

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('ppdb/register/login_formulir');
        } else {
            $cek_user = $this->RegisterModel->check_user($data);
            $data_user = $this->RegisterModel->data_user($data);

            if ($cek_user) {

                if (password_verify($data['password'], $cek_user[0]->password)) {

                    if ($this->googleCaptachStore($recaptchaResponse, $userIp) == 1) {

                        $this->session->set_userdata('sias-ppdb-student', $data_user);
                        redirect('ppdb/register/status_student_warning');
                    } else {

                        $this->session->set_flashdata('flash_message', err_msg('Maaf, Google Recaptcha terdapat kesalahan.'));
                        redirect('ppdb/register/login_formulir');
                    }
                } else {

                    $this->session->set_flashdata('flash_message', login_err('Mohon Maaf., Password anda salah!'));
                    redirect('ppdb/register/login_formulir');
                }
            } else {

                $this->session->set_flashdata('flash_message', login_err('Mohon Maaf., Username tidak ditemukan!'));
                redirect('ppdb/register/login_formulir');
            }
        }
    }

    public function login_announcement() {
        $data['title'] = 'Sekolah Utsman | Login PPDB Sekolah Utsman ';
        $data['announcement'] = $this->RegisterModel->get_announcement();
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['schedule'] = $this->RegisterModel->get_all_schedule();

        $this->load->view('ppdb_view_login_check_student_accept', $data);
    }

    public function auth_login_announcement() {

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
        $userIp = $this->input->ip_address();

        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('ppdb/register/login_announcement');
        } else {
            $cek_user = $this->RegisterModel->check_user($data);
            $data_user = $this->RegisterModel->data_user($data);

            if ($cek_user) {

                if (password_verify($data['password'], $cek_user[0]->password)) {

                    if ($this->googleCaptachStore($recaptchaResponse, $userIp) == 1) {

                        $this->session->set_userdata('sias-ppdb-student', $data_user);
                        redirect('ppdb/register/status_student_warning');
                    } else {

                        $this->session->set_flashdata('flash_message', err_msg('Maaf, Google Recaptcha terdapat kesalahan.'));
                        redirect('ppdb/register/login_announcement');
                    }
                } else {

                    $this->session->set_flashdata('flash_message', login_err('Mohon Maaf., Password anda salah!'));
                    redirect('ppdb/register/login_announcement');
                }
            } else {

                $this->session->set_flashdata('flash_message', login_err('Mohon Maaf., Username tidak ditemukan!'));
                redirect('ppdb/register/login_announcement');
            }
        }
    }

    public function check_status_payment() {
        $data['title'] = 'Sekolah Utsman | Cek Status Pembayaran Formulir Sekolah Utsman ';
        $data['announcement'] = $this->RegisterModel->get_announcement();
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['schedule'] = $this->RegisterModel->get_all_schedule();

        $this->load->view('ppdb_view_check_payment', $data);
    }

    public function reupload_payment() {
        $data['title'] = 'Sekolah Utsman | Cek Status Pembayaran Formulir Sekolah Utsman ';
        $data['announcement'] = $this->RegisterModel->get_announcement();
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['schedule'] = $this->RegisterModel->get_all_schedule();

        $this->load->view('ppdb_view_reupload_receipt', $data);
    }

    public function upload_payment_receipt() {
        $data['title'] = 'Sekolah Utsman | Upload Bukti Pembayaran Sekolah Utsman ';
        $data['announcement'] = $this->RegisterModel->get_announcement();
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['schedule'] = $this->RegisterModel->get_all_schedule();

        $this->load->view('ppdb_view_upload_reception', $data);
    }

    public function status_register_success($id = '') {
        $id = paramDecrypt($id);

        $data['title'] = 'Sekolah Utsman | Pembelian Formulir Pembayaran Sekolah Utsman ';
        $data['register'] = $this->RegisterModel->get_register_cost_id($id);
        $data['bank_account'] = $this->RegisterModel->get_bank_account($id);
        $data['page'] = $this->RegisterModel->get_page();
        $data['cost'] = $this->RegisterModel->get_cost_student($data['register'][0]->level_tingkat, $data['register'][0]->id_jalur, $data['register'][0]->jenis_kelamin, 1);
        $data['contact'] = $this->RegisterModel->get_contact();

        $check_no = $this->RegisterModel->check_no_register($id);

        if ($id != NULL && $id != "" && $check_no != FALSE && $check_no[0]->status_pendaftaran == 1 && $check_no[0]->status_pembayaran == 0) {
            $this->load->view('ppdb_view_register_success', $data);
        } else {
            $datas['title'] = 'ERROR | PAGE NOT FOUND';
            $this->load->view('error_404', $datas);
        }
    }

    public function status_payment_progress($id = '') {
        $id = paramDecrypt($id);

        $data['title'] = 'Sekolah Utsman | Status Pembayaran Sekolah Utsman ';
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['register'] = $this->RegisterModel->get_register_cost_id($id);

        $check_no = $this->RegisterModel->check_no_register($id);

        if ($id != NULL && $id != "" && $check_no != FALSE && $check_no[0]->status_pendaftaran == 2 && $check_no[0]->status_pembayaran == 1) {
            $this->load->view('ppdb_view_payment_progress', $data);
        } else {
            $datas['title'] = 'ERROR | PAGE NOT FOUND';
            $this->load->view('error_404', $datas);
        }
    }

    public function status_payment_warning($id = '') {
        $id = paramDecrypt($id);

        $data['title'] = 'Sekolah Utsman | Status Pembayaran Sekolah Utsman ';
        $data['register'] = $this->RegisterModel->get_register_cost_id($id);
        $data['bank_account'] = $this->RegisterModel->get_bank_account($id);
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['cost'] = $this->RegisterModel->get_cost_student($data['register'][0]->level_tingkat, $data['register'][0]->id_jalur, $data['register'][0]->jenis_kelamin, 1);

        $check_no = $this->RegisterModel->check_no_register($id);

        if ($id != NULL && $id != "" && $check_no != FALSE && $check_no[0]->status_pendaftaran == 1 && $check_no[0]->status_pembayaran == 0) {
            $this->load->view('ppdb_view_payment_warning', $data);
        } else {
            $datas['title'] = 'ERROR | PAGE NOT FOUND';
            $this->load->view('error_404', $datas);
        }
    }

    public function status_payment_success($id = '') {
        $id = paramDecrypt($id);

        $data['title'] = 'Sekolah Utsman | Status Pembayaran Sekolah Utsman ';
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['register'] = $this->RegisterModel->get_register_cost_id($id);

        $check_no = $this->RegisterModel->check_no_register($id);

        if ($id != NULL && $id != "" && $check_no != FALSE && $check_no[0]->status_pendaftaran == 3 && $check_no[0]->status_pembayaran == 2) {
            $this->load->view('ppdb_view_payment_success', $data);
        } else {
            $datas['title'] = 'ERROR | PAGE NOT FOUND';
            $this->load->view('error_404', $datas);
        }
    }

    public function status_payment_reject($id = '') {
        $id = paramDecrypt($id);

        $data['title'] = 'Sekolah Utsman | Status Pembayaran Sekolah Utsman ';
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['register'] = $this->RegisterModel->get_register_cost_id($id);

        $check_no = $this->RegisterModel->check_no_register($id);

        if ($id != NULL && $id != "" && $check_no != FALSE && $check_no[0]->status_pendaftaran == 3 && $check_no[0]->status_pembayaran == 3) {
            $this->load->view('ppdb_view_payment_reject', $data);
        } else {
            $datas['title'] = 'ERROR | PAGE NOT FOUND';
            $this->load->view('error_404', $datas);
        }
    }

    public function status_student_success($id = '') {
        $id = paramDecrypt($id);

        $data['title'] = 'Sekolah Utsman | Status Penerimaan Sekolah Utsman ';
        $data['formulir'] = $this->RegisterModel->get_formulir_id($id); //?
        $data['page'] = $this->RegisterModel->get_page();
        $data['bank_account'] = $this->RegisterModel->get_bank_account();
        $data['voucher'] = $this->RegisterModel->get_all_voucher();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['cost'] = $this->RegisterModel->get_cost_student($data['formulir'][0]->level_tingkat, $data['formulir'][0]->jalur, $data['formulir'][0]->jenis_kelamin, 2);

        if ($id == NULL || $id == "" && $this->session->userdata('sias-ppdb-student') == FALSE) {
            redirect('ppdb/register/login_announcement');
        } else {
            $this->load->view('ppdb_view_student_success', $data);
        }
    }

    public function status_student_reject($id = '') {
        $id = paramDecrypt($id);

        $data['title'] = 'Sekolah Utsman | Status Penerimaan Sekolah Utsman ';
        $data['formulir'] = $this->RegisterModel->get_formulir_id($id); //?
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();

        if ($id == NULL || $id == "" || $this->session->userdata('sias-ppdb-student') == FALSE) {
            redirect('ppdb/register/login_announcement');
        } else {
            $this->load->view('ppdb_view_student_reject', $data);
        }
    }

    public function status_student_progress($id = '') {
        $id = paramDecrypt($id);

        $data['title'] = 'Sekolah Utsman | Pengisian Formulir Sekolah Utsman ';
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['formulir'] = $this->RegisterModel->get_formulir_id($id);

        if ($id == NULL || $id == "" || $this->session->userdata('sias-ppdb-student') == FALSE) {

            redirect('ppdb/register/login_formulir');
        } else {

            if ($data['formulir'][0]->status_formulir == 0) {

                redirect('ppdb/register/status_fulfillment_formulir');
            } else {

                if ($id != NULL && $id != "" && $data['formulir'][0]->status_penerimaan == 0 && $data['formulir'][0]->status_formulir == 1) {

                    $this->load->view('ppdb_view_student_progress', $data);
                } elseif ($id != NULL && $id != "" && $data['formulir'][0]->status_penerimaan == 1 && $data['formulir'][0]->status_formulir == 1) {

                    redirect('ppdb/register/status_student_success/' . paramEncrypt($id));
                } elseif ($id != NULL && $id != "" && $data['formulir'][0]->status_penerimaan == 2 && $data['formulir'][0]->status_formulir == 1) {

                    redirect('ppdb/register/status_student_reject/' . paramEncrypt($id));
                } else {

                    $datas['title'] = 'ERROR | PAGE NOT FOUND';
                    $this->load->view('error_404', $datas);
                }
            }
        }
    }

    public function status_student_warning() {
        $data['title'] = 'Sekolah Utsman | Status Penerimaan Sekolah Utsman ';
        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();

        if ($this->session->userdata('sias-ppdb-student') == FALSE) {
            redirect('ppdb/register/login_announcement');
        } else {
            $form = $this->RegisterModel->get_formulir_id($this->user_student[0]->id_formulir);

            if ($form[0]->status_formulir == 0) {

                redirect('ppdb/register/status_fulfillment_formulir');
            } else {

                if ($form[0]->status_penerimaan == 0 && $form[0]->status_formulir == 1) {

                    $this->load->view('ppdb_view_student_warning', $data);
                } elseif ($form[0]->status_penerimaan == 1 && $form[0]->status_formulir == 1) {

                    redirect('ppdb/register/status_student_success/' . paramEncrypt($this->user_student[0]->id_formulir));
                } elseif ($form[0]->status_penerimaan == 2 && $form[0]->status_formulir == 1) {

                    redirect('ppdb/register/status_student_reject/' . paramEncrypt($this->user_student[0]->id_formulir));
                } else {

                    $datas['title'] = 'ERROR | PAGE NOT FOUND';
                    $this->load->view('error_404', $datas);
                }
            }
        }
    }

    public function status_fulfillment_formulir() {

        $data['title'] = 'Sekolah Utsman | Pengisian Formulir Sekolah Utsman ';
        $data['page'] = $this->RegisterModel->get_page();
        $data['provinsi'] = $this->RegisterModel->get_provinsi();
        $data['schoolyear'] = $this->RegisterModel->get_schoolyear();
        $data['contact'] = $this->RegisterModel->get_contact();

        if ($this->session->userdata('sias-ppdb-student') == FALSE) {
            redirect('ppdb/register/login_formulir');
        } else {

            $form = $this->RegisterModel->get_formulir_id($this->user_student[0]->id_formulir);

            if ($form[0]->status_formulir == 0) {
                $this->load->view('ppdb_view_fulfillment', $data);
            } else {
                redirect('ppdb/register/status_student_progress/' . paramEncrypt($this->user_student[0]->id_formulir));
            }
        }
    }

    public function print_invoice_formulir($id = '') {
        $id = paramDecrypt($id);

        $check_no = $this->RegisterModel->check_no_register($id);

        if ($id == '' or $id == NULL or $check_no == FALSE) {

            $this->session->set_flashdata('flash_message', err_msg('Maaf, Data Anda tidak ditemukan!'));
            redirect('ppdb/register/status_payment_success/' . paramEncrypt($id));
        } else {

            $data['invoice'] = $this->RegisterModel->get_register_cost_id($id);
            $data['page'] = $this->RegisterModel->get_page();
            $data['contact'] = $this->RegisterModel->get_contact();

            if ($data['invoice'][0]->status_pembayaran == NULL or $data['invoice'][0]->status_pembayaran == 0) {
                //add new data
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Anda belum melakukan pembayaran'));
                redirect('ppdb/register/status_payment_success/' . paramEncrypt($id));
            } else {

                $html = $this->load->view('pdf_template/invoice', $data, true);
                $this->pdfgenerator->generate($html, $id . '_bukti_invoice_pembayaran', 1);
            }
        }
    }

    //---------------------------------REGISTER------------------------------------//

    public function post_register() {

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nama_calon_siswa', 'Nama Peserta Didik', 'required');
        $this->form_validation->set_rules('level_tingkat', 'Tingkat/Jenjang', 'required');
        $this->form_validation->set_rules('id_jalur', 'Program', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('id_tahun_ajaran', 'Tahun Ajaran', 'required');
        $this->form_validation->set_rules('nama_orangtua', 'Nama OrangTua/Wali', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Siswa', 'required');
        $this->form_validation->set_rules('email_orangtua', 'Email Orang Tua', 'required');
        $this->form_validation->set_rules('nomor_wa', 'Nomor WhatsApp', 'required');
        $this->form_validation->set_rules('insight[]', 'Informasi', 'required');

        $ins = $data['insight'];
        $data['insight'] = implode(",", $ins);

        $data['nomor_pendaftaran'] = $data['level_tingkat'] . $data['id_jalur'] . mt_rand(1000, 9999);

        $check = $this->RegisterModel->get_email_ppdb($data['email_orangtua']);

        if ($check == TRUE) {

            $this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Email yang Anda inputkan terpakai..."));
            redirect('ppdb/register');
        } else {

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/register');
            } else {

                $input = $this->RegisterModel->insert_register($data);
                if ($input == true) {

                    redirect('ppdb/register/status_register_success/' . paramEncrypt($data['nomor_pendaftaran']));
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan.'));
                    redirect('ppdb/register');
                }
            }
        }
    }

    public function post_upload_payment_slip() {

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nomor_pendaftaran', 'Nomor Pendaftaran', 'required');
        $this->form_validation->set_rules('nomor_rekening', 'Nomor Rekening', 'required');
        $this->form_validation->set_rules('atas_nama_rekening', 'Atas Nama Rekening', 'required');

        $check_no = $this->RegisterModel->check_no_register($data['nomor_pendaftaran']);

        $jenjang = '';
        if ($check_no[0]->level_tingkat == 1) {
            $jenjang = 'KB';
        } elseif ($check_no[0]->level_tingkat == 2) {
            $jenjang = 'TK';
        } elseif ($check_no[0]->level_tingkat == 3) {
            $jenjang = 'SD';
        } elseif ($check_no[0]->level_tingkat == 4) {
            $jenjang = 'SMP';
        }

        if ($check_no == FALSE) {

            $this->session->set_flashdata('flash_message', err_msg('Maaf, Nomor Pendaftaran Anda tidak ditemukan!'));
            redirect('ppdb/register/upload_payment_receipt');
        } else {

            if ($check_no[0]->status_pembayaran == 0) {

                if ($this->form_validation->run() == FALSE) {

                    $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                    redirect('ppdb/register/upload_payment_receipt');
                } else {

                    $this->load->library('upload'); //load library upload file
                    $this->load->library('image_lib'); //load library image

                    if (!empty($_FILES['bukti_transfer'])) {

                        $path = 'uploads/pendaftaran/images/';
                        $path_thumb = 'uploads/pendaftaran/images/thumbs/';
                        //config upload file
                        $config['upload_path'] = $path;
                        $config['allowed_types'] = 'jpg|png|jpeg';
                        $config['max_size'] = 5048; //set limit
                        $config['overwrite'] = FALSE; //if have same name, add number
                        $config['remove_spaces'] = TRUE; //change space into _
                        $config['encrypt_name'] = TRUE;
                        //initialize config upload
                        $this->upload->initialize($config);

                        if ($this->upload->do_upload('bukti_transfer')) {//if success upload data
                            $result['upload'] = $this->upload->data();
                            $name = $result['upload']['file_name'];
                            $data['bukti_transfer'] = $path . $name;

                            $img['image_library'] = 'gd2';
                            $img['source_image'] = $path . $name;
                            $img['new_image'] = $path_thumb . $name;
                            $img['maintain_ratio'] = true;
                            $img['width'] = 1200;
                            $img['weight'] = 1200;

                            $this->image_lib->initialize($img);
                            if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                                $data['bukti_transfer_thumb'] = $path_thumb . $name;
                            } else {
                                $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                                redirect('ppdb/register/upload_payment_receipt');
                            }
                        } else {
                            $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                            redirect('ppdb/register/upload_payment_receipt');
                        }
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Silahkan Upload Bukti Pembayaran Anda.'));
                        redirect('ppdb/register/upload_payment_receipt');
                    }

                    $input = $this->RegisterModel->update_payment_slip($data['nomor_pendaftaran'], $data);

                    if ($input == true) {
                        $this->send_notification('PEMBAYARAN FORMULIR', ucwords(strtolower($check_no[0]->nama_calon_siswa)), $jenjang, $data['nomor_pendaftaran'], base_url() . 'ppdb/auth');

                        redirect('ppdb/register/status_payment_progress/' . paramEncrypt($data['nomor_pendaftaran']));
                    } else {

                        $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan.'));
                        redirect('ppdb/register/upload_payment_receipt');
                    }
                }
            } else {

                $this->session->set_flashdata('flash_message', warn_msg('Mohon Maaf, Anda telah upload pembayaran sebelumnya, Silahkan menunggu proses selanjutnya!'));
                redirect('ppdb/register/upload_payment_receipt');
            }
        }
    }

    public function post_upload_payment_ppdb() {

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nomor_formulir', 'Nomor Formulir', 'required');
        $this->form_validation->set_rules('nomor_rekening', 'Nomor Rekening', 'required');
        $this->form_validation->set_rules('atas_nama_rekening', 'Atas Nama Rekening', 'required');

        $id = paramDecrypt($data['id_formulir']);

        $check_no = $this->RegisterModel->check_no_formulir($data['nomor_formulir']);

        $jenjang = '';
        if ($check_no[0]->level_tingkat == 1) {
            $jenjang = 'KB';
        } elseif ($check_no[0]->level_tingkat == 2) {
            $jenjang = 'TK';
        } elseif ($check_no[0]->level_tingkat == 3) {
            $jenjang = 'SD';
        } elseif ($check_no[0]->level_tingkat == 4) {
            $jenjang = 'SMP';
        }

        if ($check_no == FALSE) {

            $this->session->set_flashdata('flash_message', err_msg('Maaf, Nomor Formulir Anda tidak ditemukan!'));
            redirect('ppdb/register/status_student_success/' . paramEncrypt($id));
        } else {

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/register/upload_payment_receipt');
            } else {
                $this->load->library('upload'); //load library upload file
                $this->load->library('image_lib'); //load library image

                if (!empty($_FILES['bukti_transfer'])) {

                    $path = 'uploads/pendaftaran/images/';
                    $path_thumb = 'uploads/pendaftaran/images/thumbs/';
                    //config upload file
                    $config['upload_path'] = $path;
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 5048; //set limit
                    $config['overwrite'] = FALSE; //if have same name, add number
                    $config['remove_spaces'] = TRUE; //change space into _
                    $config['encrypt_name'] = TRUE;
                    //initialize config upload
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('bukti_transfer')) {//if success upload data
                        $result['upload'] = $this->upload->data();
                        $name = $result['upload']['file_name'];
                        $data['bukti_transfer'] = $path . $name;

                        $img['image_library'] = 'gd2';
                        $img['source_image'] = $path . $name;
                        $img['new_image'] = $path_thumb . $name;
                        $img['maintain_ratio'] = true;
                        $img['width'] = 1200;
                        $img['weight'] = 1200;

                        $this->image_lib->initialize($img);
                        if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                            $data['bukti_transfer_thumb'] = $path_thumb . $name;
                        } else {
                            $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                            redirect('ppdb/register/status_student_success/' . paramEncrypt($id));
                        }
                    } else {
                        $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                        redirect('ppdb/register/status_student_success/' . paramEncrypt($id));
                    }
                } else {
                    $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Silahkan Upload Bukti Pembayaran Anda.'));
                    redirect('ppdb/register/status_student_success/' . paramEncrypt($id));
                }

                $input = $this->RegisterModel->update_payment_ppdb($data['nomor_formulir'], $data);

                if ($input == true) {
                    $this->send_notification('PEMBAYARAN UANG MASUK PPDB', ucwords(strtolower($check_no[0]->nama_lengkap)), $jenjang, $data['nomor_formulir'], base_url() . 'ppdb/auth');

                    redirect('ppdb/register/status_student_success/' . paramEncrypt($id));
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan.'));
                    redirect('ppdb/register/status_student_success/' . paramEncrypt($id));
                }
            }
        }
    }

    public function post_check_payment() {

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nomor_pendaftaran', 'Nama Peserta Didik', 'required');

        $register = $this->RegisterModel->get_register_id($data['nomor_pendaftaran']);

        if ($register == FALSE) {

            $this->session->set_flashdata('flash_message', err_msg('Maaf, Nomor Pendaftaran Anda tidak ditemukan!'));
            redirect('ppdb/register/check_status_payment');
        } else {

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/register/check_status_payment');
            } else {

                if ($data['nomor_pendaftaran']) {
                    if ($register[0]->status_pembayaran == 0) {
                        redirect('ppdb/register/status_payment_warning/' . paramEncrypt($data['nomor_pendaftaran']));
                    } else if ($register[0]->status_pembayaran == 1) {
                        redirect('ppdb/register/status_payment_progress/' . paramEncrypt($data['nomor_pendaftaran']));
                    } else if ($register[0]->status_pembayaran == 2) {
                        redirect('ppdb/register/status_payment_success/' . paramEncrypt($data['nomor_pendaftaran']));
                    } else if ($register[0]->status_pembayaran == 3) {
                        redirect('ppdb/register/status_payment_reject/' . paramEncrypt($data['nomor_pendaftaran']));
                    }
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan.'));
                    redirect('ppdb/register/check_status_payment');
                }
            }
        }
    }

    public function post_revision_payment_slip($id = '') {
        $id = paramDecrypt($id);

        $param = $this->input->post();

        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nomor_pendaftaran', 'Nomor Pendaftaran', 'required');
        $this->form_validation->set_rules('nomor_rekening', 'Nomor Rekening', 'required');
        $this->form_validation->set_rules('atas_nama_rekening', 'Atas Nama Rekening', 'required');

        $get_bukti_temp = explode('/', $data['bukti_transfer_temp']);
        $path_bukti_temp = $get_bukti_temp[3];

        $check_no = $this->RegisterModel->check_no_register($data['nomor_pendaftaran']);

        $jenjang = '';
        if ($check_no[0]->level_tingkat == 1) {
            $jenjang = 'KB';
        } elseif ($check_no[0]->level_tingkat == 2) {
            $jenjang = 'TK';
        } elseif ($check_no[0]->level_tingkat == 3) {
            $jenjang = 'SD';
        } elseif ($check_no[0]->level_tingkat == 4) {
            $jenjang = 'SMP';
        }

        if ($check_no == FALSE) {

            $this->session->set_flashdata('flash_message', err_msg('Maaf, Nomor Pendaftaran Anda tidak ditemukan!'));
            redirect('ppdb/register/status_payment_reject/' . paramEncrypt($id));
        } else {

            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/register/status_payment_reject/' . paramEncrypt($id));
            } else {
                $this->load->library('upload'); //load library upload file
                $this->load->library('image_lib'); //load library image

                if (!empty($_FILES['bukti_transfer']['tmp_name'])) {

                    $this->delete_bukti($path_bukti_temp); //delete existing file

                    $path = 'uploads/pendaftaran/images/';
                    $path_thumb = 'uploads/pendaftaran/images/thumbs/';
                    //config upload file
                    $config['upload_path'] = $path;
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 5048; //set without limit
                    $config['overwrite'] = FALSE; //if have same name, add number
                    $config['remove_spaces'] = TRUE; //change space into _
                    $config['encrypt_name'] = TRUE;
                    //initialize config upload
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('bukti_transfer')) {//if success upload data
                        $result['upload'] = $this->upload->data();
                        $name = $result['upload']['file_name'];
                        $data['bukti_transfer'] = $path . $name;

                        $img['image_library'] = 'gd2';
                        $img['source_image'] = $path . $name;
                        $img['new_image'] = $path_thumb . $name;
                        $img['maintain_ratio'] = true;
                        $img['width'] = 1200;
                        $img['weight'] = 1200;

                        $this->image_lib->initialize($img);
                        if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                            $data['bukti_transfer_thumb'] = $path_thumb . $name;
                        } else {
                            $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                            redirect('ppdb/register/status_payment_reject/' . paramEncrypt($id));
                        }
                    } else {
                        $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                        redirect('ppdb/register/status_payment_reject/' . paramEncrypt($id));
                    }
                } else {
                    $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Silahkan Upload Bukti Pembayaran Anda.'));
                    redirect('ppdb/register/status_payment_reject/' . paramEncrypt($id));
                }

                $input = $this->RegisterModel->update_revision_payment_slip($id, $data);

                if ($input == true) {
                    $this->send_notification('REVISI PEMBAYARAN FORMULIR', ucwords(strtolower($check_no[0]->nama_calon_siswa)), $jenjang, $data['nomor_pendaftaran'], base_url() . 'ppdb/auth');

                    redirect('ppdb/register/status_payment_progress/' . paramEncrypt($id));
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan.'));
                    redirect('ppdb/register/status_payment_reject/' . paramEncrypt($id));
                }
            }
        }
    }

    //----------------------------------MAILER-------------------------------------//


    public function send_mail_order_success() {
        $id = $this->input->post('id');
        $id = paramDecrypt($id);

        $data['page'] = $this->RegisterModel->get_page();
        $data['contact'] = $this->RegisterModel->get_contact();
        $data['bank_account'] = $this->RegisterModel->get_bank_account();
        $data['register'] = $this->RegisterModel->get_register_cost_id($id); //?

        $subjek = "PEMESANAN FORMULIR SEKOLAH UTSMAN";
        $content = $this->load->view('mailer_template/order', $data, true); // Ambil isi file content.php dan masukan ke variabel $content

        $sendmail = array(
            'email_penerima' => $data['register'][0]->email_orangtua,
            'subjek' => $subjek,
            'content' => $content,
        );

        $jenjang = '';
        if ($data['register'][0]->level_tingkat == 1) {
            $jenjang = 'KB';
        } elseif ($data['register'][0]->level_tingkat == 2) {
            $jenjang = 'TK';
        } elseif ($data['register'][0]->level_tingkat == 3) {
            $jenjang = 'SD';
        } elseif ($data['register'][0]->level_tingkat == 4) {
            $jenjang = 'SMP';
        }

        if ($data['register'][0]->status_email == 0) {
            $this->mailer->send($sendmail);
            $this->RegisterModel->update_status_email($id, 1);
            $this->send_notification('PENDAFTAR BARU', ucwords(strtolower($data['register'][0]->nama_calon_siswa)), $jenjang, $data['register'][0]->nomor_pendaftaran, base_url() . 'ppdb/auth');

            echo '1';
        } else {
            echo '0';
        }

        // Panggil fungsi send yang ada di librari Mailer
    }

    public function check_nisn_formulir() {
        $id = $this->input->post('id');
        $nisn = $this->input->post('nisn');

        $check = $this->RegisterModel->get_nisn_formulir($nisn);
        $check_old = $this->RegisterModel->get_formulir_id($id);

        if ($check == TRUE && $id == NULL) {
            $isAvailable = false;
            echo json_encode(array(
                'valid' => $isAvailable,
            ));
        } else if ($check == TRUE && $check_old[0]->nisn != $nisn) {
            $isAvailable = false;
            echo json_encode(array(
                'valid' => $isAvailable,
            ));
        } else if ($check == TRUE && $check_old[0]->nisn == $nisn) {
            $isAvailable = true;
            echo json_encode(array(
                'valid' => $isAvailable,
            ));
        } else if ($check == FALSE) {
            $isAvailable = true;
            echo json_encode(array(
                'valid' => $isAvailable,
            ));
        }
    }

    //---------------------------------------GET AJAX WILAYAH---------------------------------------//

    public function add_ajax_kab($id_prov = '', $id_kab = '') {

        $query = $this->db->get_where('wilayah_kabupaten', array('id_dati1' => $id_prov));
        $data = "<option ></option>";
        foreach ($query->result() as $value) {
            if ($id_kab != '' || $id_kab != NULL) {
                if ($id_kab == $value->id) {
                    $data .= "<option selected value='" . $value->id . "'>" . ucwords(strtolower($value->nama)) . " [" . strtoupper($value->administratif) . "]" . "</option>";
                } else {
                    $data .= "<option value='" . $value->id . "'>" . ucwords(strtolower($value->nama)) . " [" . strtoupper($value->administratif) . "]" . "</option>";
                }
            } else {
                $data .= "<option value='" . $value->id . "'>" . ucwords(strtolower($value->nama)) . " [" . strtoupper($value->administratif) . "]" . "</option>";
            }
        }
        echo $data;
    }

    function add_ajax_kec($id_prov = '', $id_kab = '', $id_kec = '') {

        $query = $this->db->get_where('wilayah_kecamatan', array('id_dati1' => $id_prov, 'id_dati2' => $id_kab));
        $data = "<option></option>";
        foreach ($query->result() as $value) {
            if ($id_kec != '' || $id_kec != NULL) {
                if ($id_kec == $value->id) {
                    $data .= "<option selected value='" . $value->id . "'>" . ucwords(strtolower($value->nama)) . "</option>";
                } else {
                    $data .= "<option value='" . $value->id . "'>" . ucwords(strtolower($value->nama)) . "</option>";
                }
            } else {
                $data .= "<option value='" . $value->id . "'>" . ucwords(strtolower($value->nama)) . "</option>";
            }
        }
        echo $data;
    }

    function add_ajax_des($id_prov = '', $id_kab = '', $id_kec = '', $id_des = '') {
        $query = $this->db->get_where('wilayah_desa', array('id_dati1' => $id_prov, 'id_dati2' => $id_kab, 'id_dati3' => $id_kec));
        $data = "<option></option>";
        foreach ($query->result() as $value) {
            if ($id_des != '' || $id_des != NULL) {
                if ($id_des == $value->id) {
                    $data .= "<option selected value='" . $value->id . "'>" . ucwords(strtolower($value->nama)) . " [" . strtoupper($value->administratif) . "]" . "</option>";
                } else {
                    $data .= "<option value='" . $value->id . "'>" . ucwords(strtolower($value->nama)) . " [" . strtoupper($value->administratif) . "]" . "</option>";
                }
            } else {
                $data .= "<option value='" . $value->id . "'>" . ucwords(strtolower($value->nama)) . " [" . strtoupper($value->administratif) . "]" . "</option>";
            }
        }
        echo $data;
    }

    //--------------------------------------------------------------------------//

    public function delete_bukti($name = '') {
        $path = './uploads/pendaftaran/images/';
        $path_thumb = './uploads/pendaftaran/images/thumbs/';
        @unlink($path . $name);
        @unlink($path_thumb . $name);
    }

    //--------------------------------------------------------------------------//

    public function edit_formulir($id = '') {
        $id = paramDecrypt($id);

        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nik', 'NIK Siswa', 'required');
        $this->form_validation->set_rules('nomor_formulir', 'Nomor Formulir Siswa', 'required');
        $this->form_validation->set_rules('nik', 'NIK Siswa', 'required');
        $this->form_validation->set_rules('no_akta_kelahiran', 'Nomor Akta Siswa', 'required');
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap Siswa', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Siswa', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Siswa', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('agama', 'Agama', 'required');
        $this->form_validation->set_rules('nomor_handphone', 'Nomor Handphone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('th_ajaran', 'Tahun Ajaran', 'required');

        $this->form_validation->set_rules('nama_ayah', 'Nama', 'required');
        $this->form_validation->set_rules('nik_ayah', 'NIK', 'required');
        $this->form_validation->set_rules('tempat_lahir_ayah', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tanggal_lahir_ayah', 'Tanggal Lahir ID', 'required');
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan', 'required');
        $this->form_validation->set_rules('pendidikan_ayah', 'Pendidikan', 'required');
        $this->form_validation->set_rules('penghasilan_ayah', 'Penghasilan', 'required');
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required');
        $this->form_validation->set_rules('nik_ibu', 'NIK Ibu', 'required');
        $this->form_validation->set_rules('tempat_lahir_ibu', 'Tempat Lahir Ibu', 'required');
        $this->form_validation->set_rules('tanggal_lahir_ibu', 'Tanggal Lahir Ibu', 'required');
        $this->form_validation->set_rules('pekerjaan_ibu', 'Pekerjaan Ibu', 'required');
        $this->form_validation->set_rules('pendidikan_ibu', 'Pendidikan Ibu', 'required');
        $this->form_validation->set_rules('penghasilan_ibu', 'Penghasilan Ibu', 'required');
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required');
        $this->form_validation->set_rules('nik_wali', 'NIK Wali', 'required');
        $this->form_validation->set_rules('tempat_lahir_wali', 'Tempat Lahir Wali', 'required');
        $this->form_validation->set_rules('tanggal_lahir_wali', 'Tanggal Lahir Wali', 'required');
        $this->form_validation->set_rules('pekerjaan_wali', 'Pekerjaan Wali', 'required');
        $this->form_validation->set_rules('pendidikan_wali', 'Pendidikan Wali', 'required');
        $this->form_validation->set_rules('penghasilan_wali', 'Penghasilan Wali', 'required');

        $this->form_validation->set_rules('alamat_rumah_kk', 'Alamat Rumah KK', 'required');
        $this->form_validation->set_rules('provinsi_kk', 'Provinsi KK', 'required');
        $this->form_validation->set_rules('kabupaten_kota_kk', 'Kabupaten/Kota KK', 'required');
        $this->form_validation->set_rules('kecamatan_kk', 'Kecamatan KK', 'required');
        $this->form_validation->set_rules('kelurahan_desa_kk', 'Kelurahan/Desa KK', 'required');
        $this->form_validation->set_rules('rt_kk', 'RT KK', 'required');
        $this->form_validation->set_rules('rw_kk', 'RW KK', 'required');
        $this->form_validation->set_rules('kodepos_kk', 'Kodepos KK', 'required');

        $this->form_validation->set_rules('alamat_rumah_dom', 'Alamat Rumah Domisili', 'required');
        $this->form_validation->set_rules('provinsi_dom', 'Provinsi Domisili', 'required');
        $this->form_validation->set_rules('kabupaten_kota_dom', 'Kabupaten/Kota Domisili', 'required');
        $this->form_validation->set_rules('kecamatan_dom', 'Kecamatan Domisili', 'required');
        $this->form_validation->set_rules('kelurahan_desa_dom', 'Kelurahan/Desa Domisili', 'required');
        $this->form_validation->set_rules('rt_dom', 'RT Domisili', 'required');
        $this->form_validation->set_rules('rw_dom', 'RW Domisili', 'required');
        $this->form_validation->set_rules('kodepos_dom', 'Kodepos Domisili', 'required');

        $this->form_validation->set_rules('alat_transportasi', 'Alat Transportasi', 'required');
        $this->form_validation->set_rules('jenis_tinggal', 'Jenis Tempat Tinggal', 'required');
        $this->form_validation->set_rules('jumlah_saudara', 'Jumlah Saudara', 'required');
        $this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required');

        $this->form_validation->set_rules('kebutuhan_khusus', 'Berkebutuhan Khusus', 'required');
        $this->form_validation->set_rules('level_tingkat', 'Tingkat Siswa', 'required');
        $this->form_validation->set_rules('jalur', 'Jalur Siswa', 'required');

        $jenjang = '';
        if ($data['level_tingkat'] == 1) {
            $jenjang = 'KB';
        } elseif ($data['level_tingkat'] == 2) {
            $jenjang = 'TK';
        } elseif ($data['level_tingkat'] == 3) {
            $jenjang = 'SD';
        } elseif ($data['level_tingkat'] == 4) {
            $jenjang = 'SMP';
        }

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
            redirect('ppdb/register/status_fulfillment_formulir'); //folder, controller, method
        } else {

            $this->load->library('upload'); //load library upload file
            $this->load->library('image_lib'); //load library image
            //foto siswa
            if (!empty($_FILES['foto_siswa']['name'])) {

                $path = 'uploads/student/images/';
                $path_thumb = 'uploads/student/images/thumbs/';

                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 3048; //set limit
                $config['overwrite'] = FALSE; //if have same name, add number
                $config['remove_spaces'] = TRUE; //change space into _
                $config['encrypt_name'] = TRUE;
                //initialize config upload
                $this->upload->initialize($config);

                if ($this->upload->do_upload('foto_siswa')) {//if success upload data
                    $result['upload'] = $this->upload->data();
                    $name = $result['upload']['file_name'];
                    $data['foto_siswa'] = $path . $name;

                    $img['image_library'] = 'gd2';
                    $img['source_image'] = $path . $name;
                    $img['new_image'] = $path_thumb . $name;
                    $img['maintain_ratio'] = true;
                    $img['width'] = 600;
                    $img['height'] = 600;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['foto_siswa_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('ppdb/register/status_fulfillment_formulir');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', err_msg("Maaf, Silahkan upload Foto Siswa terlebih dahulu."));
                    redirect('ppdb/register/status_fulfillment_formulir');
                }
            } else {
                $this->session->set_flashdata('flash_message', err_msg("Maaf, Upload Pas Foto 3X4 diperlukan."));
                redirect('ppdb/register/status_fulfillment_formulir');
            }
            //foto akta kelahiran
            if (!empty($_FILES['akta_kelahiran']['name'])) {

                $path = 'uploads/student/images/';
                $path_thumb = 'uploads/student/images/thumbs/';

                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 3048; //set limit
                $config['overwrite'] = FALSE; //if have same name, add number
                $config['remove_spaces'] = TRUE; //change space into _
                $config['encrypt_name'] = TRUE;
                //initialize config upload
                $this->upload->initialize($config);

                if ($this->upload->do_upload('akta_kelahiran')) {//if success upload data
                    $result['upload'] = $this->upload->data();
                    $name = $result['upload']['file_name'];
                    $data['akta_kelahiran'] = $path . $name;

                    $img['image_library'] = 'gd2';
                    $img['source_image'] = $path . $name;
                    $img['new_image'] = $path_thumb . $name;
                    $img['maintain_ratio'] = true;
                    $img['width'] = 600;
                    $img['height'] = 600;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['akta_kelahiran_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('ppdb/register/status_fulfillment_formulir');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', err_msg("Maaf, Silahkan upload Foto Akta Kelahiran terlebih dahulu."));
                    redirect('ppdb/register/status_fulfillment_formulir');
                }
            } else {
                $this->session->set_flashdata('flash_message', err_msg("Maaf, Upload Foto Akta Kelahiran diperlukan."));
                redirect('ppdb/register/status_fulfillment_formulir');
            }
            //foto kartu keluarga
            if (!empty($_FILES['kartu_keluarga']['name'])) {

                $path = 'uploads/student/images/';
                $path_thumb = 'uploads/student/images/thumbs/';

                //config upload file
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['max_size'] = 3048; //set limit
                $config['overwrite'] = FALSE; //if have same name, add number
                $config['remove_spaces'] = TRUE; //change space into _
                $config['encrypt_name'] = TRUE;
                //initialize config upload
                $this->upload->initialize($config);

                if ($this->upload->do_upload('kartu_keluarga')) {//if success upload data
                    $result['upload'] = $this->upload->data();
                    $name = $result['upload']['file_name'];
                    $data['kartu_keluarga'] = $path . $name;

                    $img['image_library'] = 'gd2';
                    $img['source_image'] = $path . $name;
                    $img['new_image'] = $path_thumb . $name;
                    $img['maintain_ratio'] = true;
                    $img['width'] = 600;
                    $img['height'] = 600;

                    $this->image_lib->initialize($img);
                    if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                        $data['kartu_keluarga_thumb'] = $path_thumb . $name;
                    } else {
                        $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                        redirect('ppdb/register/status_fulfillment_formulir');
                    }
                } else {
                    $this->session->set_flashdata('flash_message', err_msg("Maaf, Silahkan upload Foto Kartu Keluarga terlebih dahulu."));
                    redirect('ppdb/register/status_fulfillment_formulir');
                }
            } else {
                $this->session->set_flashdata('flash_message', err_msg("Maaf, Upload Foto Kartu Keluarga diperlukan."));
                redirect('ppdb/register/status_fulfillment_formulir');
            }

            $input = $this->RegisterModel->update_formulir($id, $data);
            if ($input == true) {
                $this->send_notification('PENGISIAN FORMULIR', ucwords(strtolower($data['nama_lengkap'])), $jenjang, $data['nomor_formulir'], base_url() . 'ppdb/auth');

                $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Data Siswa '$data[nama_lengkap]' ('$data[nomor_formulir]')  telah tersimpan."));
                redirect('ppdb/register/status_student_progress/' . paramEncrypt($id));
            } else {

                $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                redirect('ppdb/register/status_fulfillment_formulir');
            }
        }
    }

    public function logout_announcement() {
        $this->session->sess_destroy();
        $this->session->unset_userdata('sias-ppdb');

        redirect('ppdb/register/login_announcement');
    }

    public function logout_formulir() {
        $this->session->sess_destroy();
        $this->session->unset_userdata('sias-ppdb');

        redirect('ppdb/register/login_formulir');
    }

    public function googleCaptachStore($gpost = '', $ip_address = '') {

        $recaptchaResponse = $gpost;

        $userIp = $ip_address;
        $secret = $this->config->item('google_secret_key');
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        $status = json_decode($output, true);

        if ($status['success']) {
            return 1;
        } else {
            return 0;
        }
    }

    public function send_notification($title = '', $content = '', $jenjang = '', $nomor = '', $postlink = '') {
        $key = $this->RegisterModel->get_third_party_key(); //? 

        $data = array(
            "app_id" => $key[0]->onesignal_app_id_ppdb,
            "included_segments" => array('All'),
            "headings" => array(
                "en" => "$title"
            ),
            "contents" => array(
                "en" => "ATAS NAMA: $content - $jenjang ($nomor)"
            ),
            "url" => "$postlink"
        );

        // Print Output in JSON Format
        $data_string = json_encode($data);

        // API URL
        $url = "https://onesignal.com/api/v1/notifications";

        //Curl Headers
        $headers = array
            (
            "Authorization: Basic " . $key[0]->onesignal_auth_emp . "",
            'Content-Type: application/json; charset=utf-8'
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        // Variable for Print the Result
        $response = curl_exec($ch);

        curl_close($ch);

        if ($response) {
            echo '1';
        } else {
            echo '0';
        }
    }

}
