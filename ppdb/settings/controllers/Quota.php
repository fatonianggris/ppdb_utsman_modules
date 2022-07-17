<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Quota extends MX_Controller {

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
        $this->load->model('QuotaModel');
        $this->load->library('form_validation');
    }

    //
    //-------------------------------AUTH------------------------------//
    //
    
    public function list_quota() {

        $data['title'] = 'Daftar Kuota | Sekolah Utsman';
        $data['announcement'] = $this->QuotaModel->get_announcement();
        $data['page'] = $this->QuotaModel->get_page();

        $this->load->view('ppdb_view_quick_menu', $data);
    }

    public function add_quota() {

        $data['title'] = 'Tambah Kuota | Sekolah Utsman';
        $data['page'] = $this->QuotaModel->get_page();

        $this->load->view('ppdb_view_flow', $data);
    }

    //----------------------------------------------------------------//
}
