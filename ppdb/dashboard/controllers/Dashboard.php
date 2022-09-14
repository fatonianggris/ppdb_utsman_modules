<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if ($this->session->userdata('sias-ppdb') == FALSE) {
			redirect('ppdb/auth');
		}
		$this->load->model('DashboardModel');
	}

	//
	//-------------------------------DASHBOARD------------------------------//
	//

	public function index()
	{
		$data['title'] = 'Control Panel | Dashboard Sekolah Utsman';
		$data['nav_dash'] = 'menu-item-here';
		$data['insight_dash'] = $this->DashboardModel->get_dashboard_insight();
		$data['insight_register'] = $this->DashboardModel->get_register_insight();
		$data['insight_ppdb'] = $this->DashboardModel->get_ppdb_insight();
		$data['page'] = $this->DashboardModel->get_general_page();
		$data['schoolyear'] = $this->DashboardModel->get_schoolyear_now();

		$this->template->load('template_ppdb/template_ppdb', 'ppdb_view_dashboard', $data);
		//$this->template->load('template_admin/template_admin', 'under_dev', $data);
	}

	public function change_status_ppdb()
	{

		$param = $this->input->post('id');
		$id = $this->security->xss_clean($param);
		$id = paramDecrypt($id);

		$update = $this->DashboardModel->update_status_ppdb($id);

		if ($update == true) {
			$this->session->set_flashdata('flash_message', succ_msg("Berhasil, PPDB Telah Diupdate.."));
			redirect('ppdb/dashboard');
		} else {

			$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
			redirect('ppdb/dashboard');
		}
	}

	//-----------------------------------------------------------------------//
	//
}
