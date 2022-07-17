<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('sias-ppdb') == FALSE) {
            redirect('ppdb/auth');
        }
        $this->user_student = $this->session->userdata("sias-ppdb");
        if ($this->user_student[0]->role_akun != 1) {
            redirect('ppdb/dashboard');
        }
        $this->load->model('BankAccountModel');
        $this->load->library('form_validation');
    }

    //
    //-------------------------------BANK ACCOUNT------------------------------//
    //
    public function list_bank_account() {

        $data['title'] = 'Control Panel | Rekening PPDB Sekolah Utsman';
        $data['nav_set'] = 'menu-item-here';
        $data['bank_account'] = $this->BankAccountModel->get_all_bank_account();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_account_bank', $data);
    }

    public function add_bank_account() {

        $data['title'] = 'Control Panel | Rekening PPDB Sekolah Utsman';
        $data['nav_set'] = 'menu-item-here';
        $this->template->load('template_ppdb/template_ppdb', 'ppdb_add_account_bank', $data);
    }

    public function edit_bank_account($id = '') {
        $id = paramDecrypt($id);

        $check = $this->BankAccountModel->get_bank_account_id($id);
        $data['bank_account'] = $this->BankAccountModel->get_bank_account_id($id); //?   
        $data['nav_set'] = 'menu-item-here';

        if ($check == FALSE or empty($id)) {
            $this->load->view('error_404', $data);
        } else {
            //edit data with id
            $this->template->load('template_ppdb/template_ppdb', 'ppdb_edit_account_bank', $data);
        }
    }

    public function post_bank_account() {

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('tipe_alatbayar', 'Tipe Alat Bayar', 'required');
        $this->form_validation->set_rules('nama_alatbayar', 'Nama Alat Bayar', 'required');
        $this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required');
        $this->form_validation->set_rules('nomor_alatbayar', 'Nomor Alat Bayar', 'required');

        $check = $this->BankAccountModel->check_bank_account_duplicate(strtolower($data['nama_alatbayar']));

        if ($check == TRUE) {

            $this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Alat Bayar '$data[nama_alatbayar]' Telah Tersedia..."));
            redirect('ppdb/settings/bank/add_bank_account');
        } else {
            //print_r($param);exit;
            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/settings/bank/add_bank_account'); //folder, controller, method
            } else {
                $this->load->library('upload'); //load library upload file
                $this->load->library('image_lib'); //load library image

                if (!empty($_FILES['logo_instansi'])) {

                    $path = 'uploads/alatbayar/images/';
                    $path_thumb = 'uploads/alatbayar/images/thumbs/';
                    //config upload file
                    $config['upload_path'] = $path;
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 1048; //set limit
                    $config['overwrite'] = FALSE; //if have same name, add number
                    $config['remove_spaces'] = TRUE; //change space into _
                    $config['encrypt_name'] = TRUE;
                    //initialize config upload
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('logo_instansi')) {//if success upload data
                        $result['upload'] = $this->upload->data();
                        $name = $result['upload']['file_name'];
                        $data['logo_instansi'] = $path . $name;

                        $img['image_library'] = 'gd2';
                        $img['source_image'] = $path . $name;
                        $img['new_image'] = $path_thumb . $name;
                        $img['maintain_ratio'] = true;
                        $img['width'] = 600;
                        $img['weight'] = 600;

                        $this->image_lib->initialize($img);
                        if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                            $data['logo_instansi_thumb'] = $path_thumb . $name;
                        } else {
                            $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                            redirect('ppdb/settings/bank/add_bank_account');
                        }
                    } else {
                        $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                        redirect('ppdb/settings/bank/add_bank_account');
                    }
                }

                $input = $this->BankAccountModel->insert_bank_account($data);
                if ($input == true) {

                    $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Alat Bayar '$data[nama_alatbayar]' Telah Tersimpan.."));
                    redirect('ppdb/settings/bank/add_bank_account');
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan...'));
                    redirect('ppdb/settings/bank/add_bank_account');
                }
            }
        }
    }

    public function update_bank_account($id = '') {

        $id = paramDecrypt($id);
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $data['logo_instansi'] = $data['logo_temp'];
        $data['logo_instansi_thumb'] = $data['logo_temp_thumb'];

        $get_logo_temp = explode('/', $data['logo_temp']);
        $path_logo_temp = $get_logo_temp[3];

        $this->form_validation->set_rules('tipe_alatbayar', 'Tipe Alat Bayar', 'required');
        $this->form_validation->set_rules('nama_alatbayar', 'Nama Alat Bayar', 'required');
        $this->form_validation->set_rules('atas_nama', 'Atas Nama', 'required');
        $this->form_validation->set_rules('nomor_alatbayar', 'Nomor Alat Bayar', 'required');

        $get_name = $this->BankAccountModel->get_bank_account_id($id);
        $check = $this->BankAccountModel->check_bank_account_duplicate(strtolower($data['nama_alatbayar']));

        if ($check == TRUE && $data['nama_alatbayar'] != $get_name[0]->nama_alatbayar) {

            $this->session->set_flashdata('flash_message', warn_msg("Maaf, Alat Bayar '$data[nama_alatbayar]' Telah Tersedia..."));
            redirect('ppdb/settings/bank/edit_bank_account/' . paramEncrypt($id));
        } else {

            if ($this->form_validation->run() == FALSE) {
                //
                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/settings/bank/edit_bank_account/' . paramEncrypt($id));
            } else {
                $this->load->library('upload'); //load library upload file
                $this->load->library('image_lib'); //load library image

                if (!empty($_FILES['logo_instansi']['tmp_name'])) {

                    $this->delete_file($path_logo_temp); //delete existing file

                    $path = 'uploads/alatbayar/images/';
                    $path_thumb = 'uploads/alatbayar/images/thumbs/';
                    //config upload file
                    $config['upload_path'] = $path;
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 1048; //set without limit
                    $config['overwrite'] = FALSE; //if have same name, add number
                    $config['remove_spaces'] = TRUE; //change space into _
                    $config['encrypt_name'] = TRUE;
                    //initialize config upload
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('logo_instansi')) {//if success upload data
                        $result['upload'] = $this->upload->data();
                        $name = $result['upload']['file_name'];
                        $data['logo_instansi'] = $path . $name;

                        $img['image_library'] = 'gd2';
                        $img['source_image'] = $path . $name;
                        $img['new_image'] = $path_thumb . $name;
                        $img['maintain_ratio'] = true;
                        $img['width'] = 600;
                        $img['weight'] = 600;

                        $this->image_lib->initialize($img);
                        if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                            $data['logo_instansi_thumb'] = $path_thumb . $name;
                        } else {
                            $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                            redirect('ppdb/settings/bank/edit_bank_account/' . paramEncrypt($id));
                        }
                    } else {
                        $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                        redirect('ppdb/settings/bank/edit_bank_account/' . paramEncrypt($id));
                    }
                }

                // print_r($data);exit;    
                $edit = $this->BankAccountModel->update_bank_account($id, $data);
                if ($edit == true) {

                    $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Alat Bayar '$data[nama_alatbayar]' Telah Terupdate.."));
                    redirect('ppdb/settings/bank/edit_bank_account/' . paramEncrypt($id));
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                    redirect('ppdb/settings/bank/edit_bank_account/' . paramEncrypt($id));
                }
            }
        }
    }

    public function activate_bank_account() {

        $param = $this->input->post('id');
        $id = $this->security->xss_clean($param);
        $id = paramDecrypt($id);

        $activate = $this->BankAccountModel->update_status_bank_account($id, 1);

        if ($activate == true) {
            $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Tahun Ajaran Telah Terupdate.."));
            redirect('ppdb/settings/bank/list_bank_account');
        } else {
            $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
            redirect('ppdb/settings/bank/list_bank_account');
        }
    }

    public function disable_bank_account() {

        $param = $this->input->post('id');
        $id = $this->security->xss_clean($param);

        $id = paramDecrypt($id);

        $activate = $this->BankAccountModel->update_status_bank_account($id, 0);

        if ($activate == true) {
            $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Tahun Ajaran Telah Terupdate.."));
            redirect('ppdb/settings/bank/list_bank_account');
        } else {
            $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
            redirect('ppdb/settings/bank/list_bank_account');
        }
    }

    public function delete_bank_account() {

        $param = $this->input->post('id');
        $id = $this->security->xss_clean($param);
        $id = paramDecrypt($id);

        $data = $this->BankAccountModel->get_bank_account_id($id);
        $data_img = explode('/', $data[0]->logo_instansi);
        $name_img = $data_img[3];

        $delete = $this->BankAccountModel->delete_bank_account($id);
        if ($delete == true) {
            $this->delete_file($name_img);
            $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Alat Bayar " . $data[0]->nama_alatbayar . " Telah Terhapus.."));
            redirect('ppdb/settings/bank/list_bank_account');
        } else {
            $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
            redirect('ppdb/settings/bank/list_bank_account');
        }
    }

    public function delete_file($name = '') {
        $path = './uploads/alatbayar/images/';
        $path_thumb = './uploads/alatbayar/images/thumbs/';
        @unlink($path . $name);
        @unlink($path_thumb . $name);
    }

    //----------------------------------------------------------------//
}
