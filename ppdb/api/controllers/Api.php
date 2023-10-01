<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Api extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('ApiModel');
        $this->load->library('pdfgenerator');
    }

    //
    //-------------------------------DATA PPDB------------------------------//
    //

    public function accept_payment_ppdb()
    {
        $id = $this->input->post('nomor_formulir');

        $ciphering = "AES-128-CTR";
        $encryption_iv = substr(base64_decode($id), 0, 16);
        $encryption_key = openssl_digest(php_uname(), 'MD5', true);

        $id = openssl_decrypt(substr(base64_decode($id), 16, 23), $ciphering, $encryption_key, 0, $encryption_iv);

        $status = $this->ApiModel->get_formulir_by_number($id); //?z

        if ($status) {

            if ($status[0]->status_pembayaran == 2) {
                $this->print_invoice_ppdb_server($id);
            } else {
                $output = array("status" => false,
                    "messages" => "Maaf, Anda belum melakukan pembayaran. Silahkan coba lagi.",
                );
            }

            $data['page'] = $this->ApiModel->get_page();
            $data['contact'] = $this->ApiModel->get_contact();
            $data['formulir'] = $this->ApiModel->get_formulir_by_number($id); //?

            $jenjang = '';
            if ($data['formulir'][0]->level_tingkat == 1) {
                $jenjang = 'KB';
            } else if ($data['formulir'][0]->level_tingkat == 2) {
                $jenjang = 'TK';
            } else if ($data['formulir'][0]->level_tingkat == 3) {
                $jenjang = 'SD';
            } else if ($data['formulir'][0]->level_tingkat == 4) {
                $jenjang = 'SMP';
            } else if ($data['formulir'][0]->level_tingkat == 5) {
                $jenjang = 'KB-TK';
            } else if ($data['formulir'][0]->level_tingkat == 6) {
                $jenjang = 'DC';
            }

            $file = "./uploads/pendaftaran/files/" . $id . "_bukti_invoice_pembayaran_ppdb.pdf";

            $subjek = "PEMBAYARAN BIAYA MASUK DITERIMA";
            $content = $this->load->view('mailer_template/accepted', $data, true); // Ambil isi file content.php dan masukan ke variabel $content

            $sendmail = array(
                'email_penerima' => $data['formulir'][0]->email,
                'nomor_formulir' => $data['formulir'][0]->nomor_formulir,
                'subjek' => $subjek,
                'content' => $content,
                'files' => $file,
            );

            if ($data['formulir'][0]->status_pembayaran == 2) {

                $this->mailer->send_with_attachment($sendmail);

                @unlink($file);

                $this->send_notification_ppdb('PEMBAYARAN BIAYA MASUK', ucwords(strtolower($data['formulir'][0]->nama_lengkap)), $jenjang, $data['formulir'][0]->nomor_formulir, base_url() . 'ppdb/auth');

                $output = array("status" => true,
                    "messages" => "Berhasil, Pembayaran PPDB telah dikonfirmasi. Terima Kasih.",
                );
            } else {
                $output = array("status" => false,
                    "messages" => "Maaf, Anda belum melakukan pembayaran. Silahkan coba lagi.",
                );
            }

        } else {

            $output = array("status" => false,
                "messages" => "Maaf, Anda belum melakukan pembayaran. Silahkan coba lagi.",
            );
        }

        echo json_encode($output);
    }

    public function print_invoice_ppdb_server($id = '')
    {

        if ($id == '' or $id == null) {

            $output = array("status" => false,
                "messages" => "Maaf, Data Anda tidak ditemukan!. Silahkan coba lagi.",
            );
            echo json_encode($output);
        } else {

            $data['invoice'] = $this->ApiModel->get_formulir_by_number($id);
            $data['page'] = $this->ApiModel->get_page();
            $data['contact'] = $this->ApiModel->get_contact();
            $data['voucher'] = $this->ApiModel->get_all_voucher();
            $data['cost'] = $this->ApiModel->get_cost_student($data['invoice'][0]->level_tingkat, $data['invoice'][0]->jalur, $data['invoice'][0]->jenis_kelamin);

            if ($data['invoice'][0]->status_pembayaran == null or $data['invoice'][0]->status_pembayaran == 0) {

                $output = array("status" => false,
                    "messages" => "Maaf, Anda belum melakukan pembayaran. Silahkan coba lagi.",
                );
                echo json_encode($output);
            } else {

                $html = $this->load->view('pdf_template/invoice', $data, true);
                $this->pdfgenerator->generate($html, $id . '_bukti_invoice_pembayaran_ppdb', 0, './uploads/pendaftaran/files/', false);
            }
        }

    }

    public function send_notification_ppdb($title = '', $content = '', $jenjang = '', $nomor = '', $postlink = '')
    {
        $key = $this->ApiModel->get_third_party_key(); //?

        $data = array(
            "app_id" => $key[0]->onesignal_app_id_ppdb,
            "included_segments" => array('All'),
            "headings" => array(
                "en" => "$title",
            ),
            "contents" => array(
                "en" => "ATAS NAMA: $content - $jenjang ($nomor)",
            ),
            "url" => "$postlink",
        );

        // Print Output in JSON Format
        $data_string = json_encode($data);

        // API URL
        $url = "https://onesignal.com/api/v1/notifications";

        //Curl Headers
        $headers = array(
            "Authorization: Basic " . $key[0]->onesignal_auth_ppdb . "",
            'Content-Type: application/json; charset=utf-8',
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Variable for Print the Result
        $response = curl_exec($ch);

        curl_close($ch);

        if ($response) {
            echo '1';
        } else {
            echo '0';
        }
    }

    //------------------------------------------------------------------------------//
}
