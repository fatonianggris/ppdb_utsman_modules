<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('AuthModel');
		$this->load->library('form_validation');
	}

	//
	//-------------------------------AUTH------------------------------//
	//

	public function index()
	{
		if ($this->session->userdata('sias-ppdb') == TRUE) {
			redirect('ppdb/dashboard');
		}
		$data['title'] = 'Control Panel | Login Admin PPDB ';
		$data['page'] = $this->AuthModel->get_page();
		$this->load->view('ppdb_auth_login', $data);
	}

	public function login()
	{
		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
		$userIp = $this->input->ip_address();

		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
			redirect('ppdb/auth');
		} else {
			$cek_user = $this->AuthModel->check_user($data);
			$data_user = $this->AuthModel->data_user($data);

			if ($cek_user) {

				if (password_verify($data['password'], $cek_user[0]->password)) {

					if ($this->googleCaptachStore($recaptchaResponse, $userIp) == 1) {

						$this->session->set_userdata('sias-ppdb', $data_user);
						redirect('ppdb/dashboard');
					} else {

						$this->session->set_flashdata('flash_message', err_msg('Maaf, Google Recaptcha terdapat kesalahan.'));
						redirect('ppdb/auth');
					}
				} else {
					$this->session->set_flashdata('flash_message', login_err('Mohon Maaf., Password anda salah!'));
					redirect('ppdb/auth');
				}
			} else {
				$this->session->set_flashdata('flash_message', login_err('Mohon Maaf., Email tidak ditemukan!'));
				redirect('ppdb/auth');
			}
		}
	}

	public function googleCaptachStore($gpost = '', $ip_address = '')
	{

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

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('sias-ppdb');

		redirect('ppdb/auth');
	}

	//----------------------------------------------------------------//
}
