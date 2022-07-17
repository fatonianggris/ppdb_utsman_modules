<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cost extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('sias-ppdb') == FALSE) {
            redirect('ppdb/auth');
        }
        $this->load->model('CostModel');
        $this->load->library('form_validation');
    }

    //
    //-------------------------------PAYMENT------------------------------//
    //
    public function list_cost() {

        $data['title'] = 'Control Panel | Biaya Sekolah Utsman';
        $data['nav_pay'] = 'menu-item-here';
        $data['cost'] = $this->CostModel->get_all_cost();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_cost', $data);
    }

    public function add_cost() {

        $data['title'] = 'Control Panel | Biaya PPDB Sekolah Utsman';
        $data['nav_pay'] = 'menu-item-here';
        $this->template->load('template_ppdb/template_ppdb', 'ppdb_add_cost', $data);
    }

    public function edit_cost($id = '') {
        $id = paramDecrypt($id);

        $check = $this->CostModel->get_cost_id($id);
        $data['cost'] = $this->CostModel->get_cost_id($id); //?    

        if ($check == FALSE or empty($id)) {
            $this->load->view('error_404', $data);
        } else {
            //edit data with id
            $this->template->load('template_ppdb/template_ppdb', 'ppdb_edit_cost', $data);
        }
    }

    public function post_cost() {

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('jenis_biaya', 'Jenis Biaya', 'required');
        $this->form_validation->set_rules('level_tingkat', 'Jenjang Biaya', 'required');
        $this->form_validation->set_rules('id_jalur', 'Program Biaya', 'required');
        $this->form_validation->set_rules('id_jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('nama_biaya', 'Nama Biaya', 'required');
        $this->form_validation->set_rules('nominal', 'Nominal Keseluruhan Biaya', 'required');

        $check = $this->CostModel->check_cost_duplicate($data['jenis_biaya'], $data['level_tingkat'], $data['id_jalur'], $data['id_jenis_kelamin']);

        if ($check == TRUE) {

            $this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Biaya untuk Program dan Jenjang tersebut Telah Tersedia..."));
            redirect('ppdb/payment/cost/add_cost');
        } else {
            //print_r($param);exit;
            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/payment/cost/add_cost');
            } else {
                $this->load->library('upload'); //load library upload file
                $this->load->library('image_lib'); //load library image

                if (!empty($_FILES['foto_biaya']['name'])) {

                    $path = 'uploads/biaya/images/';
                    $path_thumb = 'uploads/biaya/images/thumbs/';
                    //config upload file
                    $config['upload_path'] = $path;
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 2048; //set limit
                    $config['overwrite'] = FALSE; //if have same name, add number
                    $config['remove_spaces'] = TRUE; //change space into _
                    $config['encrypt_name'] = TRUE;
                    //initialize config upload
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('foto_biaya')) {//if success upload data
                        $result['upload'] = $this->upload->data();
                        $name = $result['upload']['file_name'];
                        $data['foto_biaya'] = $path . $name;

                        $img['image_library'] = 'gd2';
                        $img['source_image'] = $path . $name;
                        $img['new_image'] = $path_thumb . $name;
                        $img['maintain_ratio'] = true;
                        $img['width'] = 600;
                        $img['weight'] = 600;

                        $this->image_lib->initialize($img);
                        if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                            $data['foto_biaya_thumb'] = $path_thumb . $name;
                        } else {
                            $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                            redirect('ppdb/payment/cost/add_cost');
                        }
                    } else {
                        $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                        redirect('ppdb/payment/cost/add_cost');
                    }
                }

                $input = $this->CostModel->insert_cost($data);
                if ($input == true) {

                    $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Biaya '$data[nama_biaya]' Telah Tersimpan.."));
                    redirect('ppdb/payment/cost/add_cost');
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan...'));
                    redirect('ppdb/payment/cost/add_cost');
                }
            }
        }
    }

    public function update_cost($id = '') {

        $id = paramDecrypt($id);
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $data['foto_biaya'] = $data['foto_temp'];
        $data['foto_biaya_thumb'] = $data['foto_temp_thumb'];

        $get_foto_temp = explode('/', $data['foto_temp']);
        $path_foto_temp = $get_foto_temp[3];

        $this->form_validation->set_rules('jenis_biaya', 'Jenis Biaya', 'required');
        $this->form_validation->set_rules('level_tingkat', 'Jenjang Biaya', 'required');
        $this->form_validation->set_rules('id_jalur', 'Program Biaya', 'required');
        $this->form_validation->set_rules('nama_biaya', 'Nama Biaya', 'required');
        $this->form_validation->set_rules('nominal', 'Nominal Keseluruhan Biaya', 'required');

        $get_name = $this->CostModel->get_cost_id($id);
        $check = $this->CostModel->check_cost_duplicate($data['jenis_biaya'], $data['level_tingkat'], $data['id_jalur'], $data['id_jenis_kelamin']);

        if ($check == TRUE && $data['jenis_biaya'] != $get_name[0]->jenis_biaya && $data['level_tingkat'] != $get_name[0]->level_tingkat && data['id_jalur'] != $get_name[0]->id_jalur & data['id_jenis_kelamin'] != $get_name[0]->id_jenis_kelamin) {

            $this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Biaya untuk Program dan Jenjang tersebut Telah Tersedia..."));
            redirect('ppdb/payment/cost/edit_cost/' . paramEncrypt($id));
        } else {

            if ($this->form_validation->run() == FALSE) {
                //
                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/payment/cost/edit_cost/' . paramEncrypt($id));
            } else {
                $this->load->library('upload'); //load library upload file
                $this->load->library('image_lib'); //load library image

                if (!empty($_FILES['foto_biaya']['tmp_name'])) {

                    $this->delete_file($path_foto_temp); //delete existing file

                    $path = 'uploads/biaya/images/';
                    $path_thumb = 'uploads/biaya/images/thumbs/';
                    //config upload file
                    $config['upload_path'] = $path;
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $config['max_size'] = 2048; //set without limit
                    $config['overwrite'] = FALSE; //if have same name, add number
                    $config['remove_spaces'] = TRUE; //change space into _
                    $config['encrypt_name'] = TRUE;
                    //initialize config upload
                    $this->upload->initialize($config);

                    if ($this->upload->do_upload('foto_biaya')) {//if success upload data
                        $result['upload'] = $this->upload->data();
                        $name = $result['upload']['file_name'];
                        $data['foto_biaya'] = $path . $name;

                        $img['image_library'] = 'gd2';
                        $img['source_image'] = $path . $name;
                        $img['new_image'] = $path_thumb . $name;
                        $img['maintain_ratio'] = true;
                        $img['width'] = 600;
                        $img['weight'] = 600;

                        $this->image_lib->initialize($img);
                        if ($this->image_lib->resize()) {//if success to resize (create thumbs)
                            $data['foto_biaya_thumb'] = $path_thumb . $name;
                        } else {
                            $this->session->set_flashdata('flash_message', err_msg($this->image_lib->display_errors()));
                            redirect('ppdb/payment/cost/edit_cost/' . paramEncrypt($id));
                        }
                    } else {
                        $this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
                        redirect('ppdb/payment/cost/edit_cost/' . paramEncrypt($id));
                    }
                }

                // print_r($data);exit;    
                $edit = $this->CostModel->update_cost($id, $data);
                if ($edit == true) {

                    $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Biaya '$data[nama_biaya]' Telah Terupdate.."));
                    redirect('ppdb/payment/cost/edit_cost/' . paramEncrypt($id));
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                    redirect('ppdb/payment/cost/edit_cost/' . paramEncrypt($id));
                }
            }
        }
    }

    public function delete_cost() {

        $param = $this->input->post('id');
        $id = $this->security->xss_clean($param);
        $id = paramDecrypt($id);

        $data = $this->CostModel->get_cost_id($id);
        $data_img = explode('/', $data[0]->foto_biaya);
        $name_img = $data_img[3];

        $delete = $this->CostModel->delete_cost($id);
        if ($delete == true) {

            $this->delete_file($name_img);
            $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Biaya " . $data[0]->foto_biaya . " Telah Terhapus.."));
            redirect('ppdb/payment/cost/list_cost');
        } else {

            $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
            redirect('ppdb/payment/cost/list_cost');
        }
    }

    public function delete_file($name = '') {
        $path = './uploads/biaya/images/';
        $path_thumb = './uploads/biaya/images/thumbs/';
        @unlink($path . $name);
        @unlink($path_thumb . $name);
    }

    //----------------------------------------------------------------//
}
