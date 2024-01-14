<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Quota extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('sias-ppdb') == false) {
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

    public function settings_quota()
    {

        $data['title'] = 'Daftar Kuota | Sekolah Utsman';
        $data['nav_set'] = 'menu-item-here';

        $data['quota_dc_reg'] = $this->QuotaModel->get_quota_dc_reg(6);
        $data['quota_kb_reg'] = $this->QuotaModel->get_quota_kb_reg(1);
        $data['quota_tk_reg'] = $this->QuotaModel->get_quota_tk_reg(2);
        $data['quota_kbtk_reg'] = $this->QuotaModel->get_quota_kbtk_reg(5);
        $data['quota_sd_reg'] = $this->QuotaModel->get_quota_sd_reg(3);
        $data['quota_smp_reg'] = $this->QuotaModel->get_quota_smp_reg(4);
        $data['quota_sd_icp'] = $this->QuotaModel->get_quota_sd_icp(7);

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_view_quota_register', $data);
    }
    //----------------------------------------------------------------//

    public function edit_dc_reg_quota()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_quota(6, $status, $data['kuota'], $data['keterangan']);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Kuota DC Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Kuota DC Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_kb_reg_quota()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_quota(1, $status, $data['kuota'], $data['keterangan']);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Kuota KB Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Kuota KB Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_tk_reg_quota()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_quota(2, $status, $data['kuota'], $data['keterangan']);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Kuota TK Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Kuota TK Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_kbtk_reg_quota()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_quota(5, $status, $data['kuota'], $data['keterangan']);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Kuota KBTK Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Kuota KBTK Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_sd_reg_quota()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_quota(3, $status, $data['kuota'], $data['keterangan']);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Kuota SD Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Kuota SD Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_smp_reg_quota()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_quota(4, $status, $data['kuota'], $data['keterangan']);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Kuota SMP Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Kuota SMP Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_sd_icp_quota()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_quota(7, $status, $data['kuota'], $data['keterangan']);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Kuota SD ICP berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Kuota SD ICP gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_dc_reg_cad()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_reserve(6, $status);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Cadangan DC Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Cadangan DC Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_kb_reg_cad()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_reserve(1, $status);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Cadangan KB Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Cadangan KB Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_tk_reg_cad()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_reserve(2, $status);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Cadangan TK Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Cadangan TK Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_kbtk_reg_cad()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_reserve(5, $status);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Cadangan KBTK Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Cadangan KBTK Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_sd_reg_cad()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_reserve(3, $status);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Cadangan SD Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Cadangan SD Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_smp_reg_cad()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_reserve(4, $status);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Cadangan SMP Reguler berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Cadangan SMP Reguler gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }

    public function edit_sd_icp_cad()
    {
        $param = $this->input->post();
        $data = $this->security->xss_clean($param);

        $token = $this->security->get_csrf_hash();

        if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
            $output = array("status" => false,
                "token" => $token,
                "messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
            );
        } else {

            $status = paramDecrypt($data['id']);
            $edit = $this->QuotaModel->update_reserve(7, $status);

            if ($edit == true) {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Berhasil!, Update Cadangan SD ICP berhasil diubah, Silahkan cek ulang.",
                );

            } else {
                $output = array("status" => true,
                    "token" => $token,
                    "messages" => "Mohon Maaf!, Update Cadangan SD ICP gagal diubah, Silahkan cek ulang.",
                );
            }
        }
        echo json_encode($output);
    }
}
