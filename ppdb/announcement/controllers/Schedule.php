<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends MX_Controller {

    public function __construct() {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('sias-ppdb') == FALSE) {
            redirect('ppdb/auth');
        }
        $this->load->model('ScheduleModel');
        $this->load->library('form_validation');
    }

    //
    //-------------------------------SCHEDULE------------------------------//
    //
    
     public function list_schedule() {

        $data['title'] = 'Daftar Jadwal PPDB | SPPDB Admin Sekolah Utsman ';
        $data['nav_announ'] = 'menu-item-here';

        $data['schedule'] = $this->ScheduleModel->get_all_schedule(); //?  
        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_schedule', $data);
    }

    public function add_schedule() {

        $data['title'] = 'Tambah Jadwal PPDB | SPPDB Admin Sekolah Utsman ';
        $data['nav_announ'] = 'menu-item-here';

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_add_schedule', $data);
    }

    public function edit_schedule($id = '') {
        $id = paramDecrypt($id);
        $data['title'] = 'Edit Jadwal PPDB | SPPDB Admin Sekolah Utsman ';
        $data['nav_announ'] = 'menu-item-here';

        $check = $this->ScheduleModel->get_schedule_id($id);
        $data['schedule'] = $this->ScheduleModel->get_schedule_id($id);

        if ($check == FALSE or empty($id)) {
            $this->load->view('error_404', $data);
        } else {
            //edit data with id
            $this->template->load('template_ppdb/template_ppdb', 'ppdb_edit_schedule', $data);
        }
    }

    public function post_schedule() {

        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nama_jadwal', 'Nama Jadwal', 'required');
        $this->form_validation->set_rules('tanggal_jadwal', 'Tanggal Jadwal', 'required');
        $this->form_validation->set_rules('jam_jadwal', 'Jam Jadwal', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');

        $check = $this->ScheduleModel->check_schedule_duplicate($data['nama_jadwal']);

        if ($check == TRUE) {

            $this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Jadwal dengan Nama '$data[nama_jadwal]' Telah Tersedia..."));
            redirect('ppdb/announcement/schedule/add_schedule');
        } else {
            if ($this->form_validation->run() == FALSE) {
                //
                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/announcement/schedule/add_schedule');
            } else {

                // print_r($data);exit;    
                $input = $this->ScheduleModel->insert_schedule($data);
                if ($input == true) {

                    $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Jadwal '$data[nama_jadwal]' Telah Tersimpan.."));
                    redirect('ppdb/announcement/schedule/add_schedule');
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                    redirect('ppdb/announcement/schedule/add_schedule');
                }
            }
        }
    }

    public function update_schedule($id = '') {
        $id = paramDecrypt($id);
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $this->form_validation->set_rules('nama_jadwal', 'Nama Jadwal', 'required');
        $this->form_validation->set_rules('tanggal_jadwal', 'Tanggal Jadwal', 'required');
        $this->form_validation->set_rules('jam_jadwal', 'Jam Jadwal', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');

        $get_name = $this->ScheduleModel->get_schedule_id($id);
        $check = $this->ScheduleModel->check_schedule_duplicate($data['nama_jadwal']);

        if ($check == TRUE && $data['nama_jadwal'] != $get_name[0]->nama_jadwal) {

            $this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Jadwal dengan Nama '$data[nama_jadwal]' Telah Tersedia..."));
            redirect('ppdb/announcement/schedule/edit_schedule/' . paramEncrypt($id));
        } else {

            if ($this->form_validation->run() == FALSE) {
                //
                $this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
                redirect('ppdb/announcement/schedule/edit_schedule/' . paramEncrypt($id));
            } else {

                // print_r($data);exit;    
                $edit = $this->ScheduleModel->update_schedule($id, $data);
                if ($edit == true) {

                    $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Jadwal dengan Nama '$data[nama_jadwal]' Telah Terupdate.."));
                    redirect('ppdb/announcement/schedule/edit_schedule/' . paramEncrypt($id));
                } else {

                    $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
                    redirect('ppdb/announcement/schedule/edit_schedule/' . paramEncrypt($id));
                }
            }
        }
    }

    public function delete_schedule() {

        $param = $this->input->post('id');
        $id = $this->security->xss_clean($param);
        $id = paramDecrypt($id);

        $delete = $this->ScheduleModel->delete_schedule($id);

        if ($delete == true) {

            $this->session->set_flashdata('flash_message', succ_msg("Berhasil, Jadwal Telah Terhapus.."));
            redirect('ppdb/announcement/schedule/list_schedule');
        } else {

            $this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
            redirect('ppdb/announcement/schedule/list_schedule');
        }
    }

    //----------------------------------------------------------------//
}
