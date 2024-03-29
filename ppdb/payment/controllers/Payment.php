<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        if ($this->session->userdata('sias-ppdb') == false) {
            redirect('ppdb/auth');
        }
        $this->load->model('PaymentModel');
        $this->load->library('form_validation');
        $this->load->library('pdfgenerator');
    }

    //
    //-------------------------------PAYMENT------------------------------//
    //

    public function list_formulir_payment()
    {

        $data['title'] = 'Daftar Pembayaran | Formulir PPDB Sekolah Utsman';
        $data['nav_pay'] = 'menu-item-here';
        $data['register'] = $this->PaymentModel->get_register_all();
        $data['schoolyear'] = $this->PaymentModel->get_schoolyear();
        $data['insight_confirm'] = $this->PaymentModel->get_formulir_confirm();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_payment_formulir', $data);
    }

    public function list_ppdb_payment()
    {

        $data['title'] = 'Daftar Pembayaran | Uang Masuk PPDB Sekolah Utsman';
        $data['nav_pay'] = 'menu-item-here';

        $data['formulir'] = $this->PaymentModel->get_all_formulir();
        $data['schoolyear'] = $this->PaymentModel->get_schoolyear();
        $data['insight_confirm'] = $this->PaymentModel->get_ppdb_confirm();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_payment_ppdb', $data);
    }

    public function list_bill_ppdb_payment()
    {

        $data['title'] = 'Daftar Tagihan | Uang Masuk PPDB Sekolah Utsman';
        $data['nav_pay'] = 'menu-item-here';

        $data['formulir'] = $this->PaymentModel->get_all_bill_formulir();
        $data['schoolyear'] = $this->PaymentModel->get_schoolyear();
        $data['insight_bill'] = $this->PaymentModel->get_ppdb_bill();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_list_payment_bill_ppdb', $data);
    }

    public function payment_confirm($id = '')
    {
        $id = paramDecrypt($id);

        $data['title'] = 'Konfirmasi Pembayaran | Formulir PPDB Sekolah Utsman';
        $data['nav_pay'] = 'menu-item-here';
        $data['register'] = $this->PaymentModel->get_formulir_cost_id($id);
        $data['voucher'] = $this->PaymentModel->get_all_voucher();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_view_confirm_payment', $data);
    }

    public function payment_confirm_ppdb($id = '')
    {
        $id = paramDecrypt($id);

        $data['title'] = 'Konfirmasi Pembayaran | Uang Masuk PPDB Sekolah Utsman';
        $data['nav_pay'] = 'menu-item-here';
        $data['formulir'] = $this->PaymentModel->get_formulir_by_id($id);
        $data['potongan'] = $this->PaymentModel->get_discount_rupiah_by_id_form($id);
        $data['cost'] = $this->PaymentModel->get_cost_student($data['formulir'][0]->level_tingkat, $data['formulir'][0]->jalur, $data['formulir'][0]->jenis_kelamin);
        $data['voucher'] = $this->PaymentModel->get_all_voucher();

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_view_confirm_payment_ppdb', $data);
    }

    public function payment_confirm_bill_ppdb($id = '')
    {
        $id = paramDecrypt($id);

        $data['title'] = 'Konfirmasi Pembayaran | Uang Masuk PPDB Sekolah Utsman';
        $data['nav_pay'] = 'menu-item-here';
        $data['formulir'] = $this->PaymentModel->get_formulir_by_id($id);
        $data['potongan'] = $this->PaymentModel->get_discount_rupiah_by_id_form($id);
        $data['cost'] = $this->PaymentModel->get_cost_student($data['formulir'][0]->level_tingkat, $data['formulir'][0]->jalur, $data['formulir'][0]->jenis_kelamin);
        $data['voucher'] = $this->PaymentModel->get_all_voucher();
        $data['bank_account'] = $this->PaymentModel->get_bank_va_account();
        $data['panduan'] = $this->PaymentModel->get_cost_guide_by_id(1);

        $this->template->load('template_ppdb/template_ppdb', 'ppdb_view_confirm_bill_ppdb', $data);
    }

    //----------------------------------MAILER-------------------------------------//

    public function accept_payment()
    {
        $id = $this->input->post('id');
        $id_voucher = $this->input->post('id_voucher');
        $id = paramDecrypt($id);

        $status = $this->PaymentModel->get_formulir_cost_id($id); //?z

        if ($status[0]->status_pembayaran == 1) {
            $this->PaymentModel->update_status_voucher_pembayaran($id, $id_voucher, 2);
            $this->print_invoice_formulir_server($id);
            echo '1';
        } else {
            echo '0';
        }

        $data['page'] = $this->PaymentModel->get_page();
        $data['contact'] = $this->PaymentModel->get_contact();
        $data['register'] = $this->PaymentModel->get_formulir_cost_id($id); //?
        $data['password'] = mt_rand(100000, 999999);

        $file = "./uploads/pendaftaran/files/" . $id . "_bukti_invoice_pembayaran_formulir.pdf";

        $subjek = "PEMBAYARAN FORMULIR DITERIMA";
        $content = $this->load->view('mailer_template/confirmed', $data, true); // Ambil isi file content.php dan masukan ke variabel $content

        $sendmail = array(
            'email_penerima' => $data['register'][0]->email_orangtua,
            'nomor_formulir' => $data['register'][0]->nomor_formulir,
            'subjek' => $subjek,
            'content' => $content,
            'files' => $file,
        );

        $this->PaymentModel->insert_to_formulir($data['register'][0], $data['password']);

        if ($data['register'][0]->status_pembayaran == 2) {
            $this->mailer->send_with_attachment($sendmail);
            // echo '1';
        } else {
            //echo '0';
        }
        @unlink($file);

    }

    public function accept_bill_ppdb()
    {

        $id = $this->input->post('id');
        $data['id_voucher'] = implode(",", $this->input->post('id_voucher'));
        $data['total_biaya'] = $this->input->post('total_biaya');
        $data['status_potongan'] = $this->input->post('status_potongan');

        $id = paramDecrypt($id);

        if ($data['status_potongan'] == 1) {
            $data['nama_potongan'] = $this->input->post('nama_potongan');
            $data['total_potongan'] = $this->input->post('total_potongan');

            $this->PaymentModel->insert_discount_rupiahs($id, $data['nama_potongan'], $data['total_potongan']);
        }

        $data['page'] = $this->PaymentModel->get_page();
        $data['contact'] = $this->PaymentModel->get_contact();
        $data['bank_account'] = $this->PaymentModel->get_bank_va_account();
        $data['formulir'] = $this->PaymentModel->get_formulir_by_id($id); //?
        $data['voucher'] = $this->PaymentModel->get_all_voucher();
        $data['cost'] = $this->PaymentModel->get_cost_student($data['formulir'][0]->level_tingkat, $data['formulir'][0]->jalur, $data['formulir'][0]->jenis_kelamin);
        $data['potongan'] = $this->PaymentModel->get_discount_rupiah_by_id_form($id); //?

        $subjek = "RINCIAN TAGIHAN SISWA UTSMAN";
        $content = $this->load->view('mailer_template/payment', $data, true); // Ambil isi file content.php dan masukan ke variabel $content

        $sendmail = array(
            'email_penerima' => $data['formulir'][0]->email,
            'subjek' => $subjek,
            'content' => $content,
        );

        $this->PaymentModel->update_status_payment_formulir($id, $data['id_voucher'], $data['total_biaya'], $data['status_potongan'], 1);

        if ($data['formulir'][0]->status_pembayaran == 0) {
            $this->mailer->send($sendmail);
            // echo '1';
        } else {
            // echo '0';
        }
    }

    public function print_invoice_formulir_server($id = '')
    {

        if ($id == '' or $id == null) {

            $this->session->set_flashdata('flash_message', warn_msg('Maaf, Data Anda tidak ditemukan!'));
            redirect('ppdb/payment/payment_confirm/' . paramEncrypt($id));
        } else {

            $data['invoice'] = $this->PaymentModel->get_formulir_cost_id($id);
            $data['page'] = $this->PaymentModel->get_page();
            $data['contact'] = $this->PaymentModel->get_contact();

            if ($data['invoice'][0]->status_pembayaran == null or $data['invoice'][0]->status_pembayaran == 0) {
                //add new data
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Anda belum melakukan pembayaran'));
                redirect('ppdb/payment/payment_confirm/' . paramEncrypt($id));
            } else {

                $html = $this->load->view('pdf_template/invoice', $data, true);
                $this->pdfgenerator->generate($html, $id . '_bukti_invoice_pembayaran_formulir', 0, './uploads/pendaftaran/files/', false);
            }
        }
    }

    public function accept_payment_ppdb()
    {
        $id = $this->input->post('id');
        $ket = $this->input->post('keterangan');
        $id = paramDecrypt($id);

        $data['page'] = $this->PaymentModel->get_page();
        $data['contact'] = $this->PaymentModel->get_contact();
        $data['formulir'] = $this->PaymentModel->get_formulir_by_id($id); //?
        $data['keterangan'] = $ket; //?

        $subjek = "PEMBAYARAN PPDB DITERIMA";
        $content = $this->load->view('mailer_template/accepted', $data, true); // Ambil isi file content.php dan masukan ke variabel $content

        $sendmail = array(
            'email_penerima' => $data['formulir'][0]->email,
            'subjek' => $subjek,
            'content' => $content,
        );

        $this->PaymentModel->update_status_keterangan_pembayaran_ppdb($id, $ket, 2);

        if ($data['formulir'][0]->status_pembayaran == 1) {
            $this->mailer->send($sendmail);
            //echo '1';
        } else {
            //echo '0';
        }

    }

    public function print_invoice_ppdb_server($id = '')
    {

        if ($id == '' or $id == null) {

            $this->session->set_flashdata('flash_message', warn_msg('Maaf, Data Anda tidak ditemukan!'));
            redirect('ppdb/payment/payment_confirm_ppdb/' . paramEncrypt($id));
        } else {

            $data['invoice'] = $this->PaymentModel->get_formulir_cost_id($id);
            $data['page'] = $this->PaymentModel->get_page();
            $data['contact'] = $this->PaymentModel->get_contact();

            if ($data['invoice'][0]->status_pembayaran == null or $data['invoice'][0]->status_pembayaran == 0) {
                //add new data
                $this->session->set_flashdata('flash_message', err_msg('Maaf, Anda belum melakukan pembayaran'));
                redirect('ppdb/payment/payment_confirm_ppdb/' . paramEncrypt($id));
            } else {

                $html = $this->load->view('pdf_template/invoice', $data, true);
                $this->pdfgenerator->generate($html, $id . '_bukti_invoice_pembayaran_ppdb', 0, './uploads/pendaftaran/files/', false);
            }
        }
    }

    //----------------------------------MAILER-------------------------------------//

    public function reject_payment()
    {
        $id = $this->input->post('id');
        $ket = $this->input->post('keterangan');
        $id = paramDecrypt($id);

        $data['page'] = $this->PaymentModel->get_page();
        $data['contact'] = $this->PaymentModel->get_contact();
        $data['register'] = $this->PaymentModel->get_formulir_cost_id($id); //?
        $data['keterangan'] = $ket; //?

        $subjek = "PEMBAYARAN DITOLAK";
        $content = $this->load->view('mailer_template/rejected', $data, true); // Ambil isi file content.php dan masukan ke variabel $content

        $sendmail = array(
            'email_penerima' => $data['register'][0]->email_orangtua,
            'subjek' => $subjek,
            'content' => $content,
        );

        $this->PaymentModel->update_status_keterangan_pembayaran($id, $ket, 3);
		
        if ($data['register'][0]->status_pembayaran == 1) {
            $this->mailer->send($sendmail);
            //echo '1';
        } else {
            //echo '0';
        }
    }

    //----------------------------------------------------------------//
}
