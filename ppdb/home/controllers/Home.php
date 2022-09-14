<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('HomeModel');
		$this->load->library('form_validation');
	}

	//
	//-------------------------------AUTH------------------------------//
	//

	public function index()
	{

		$data['title'] = 'PPDB ONLINE | Sekolah Utsman';
		$data['announcement'] = $this->HomeModel->get_announcement();
		$data['page'] = $this->HomeModel->get_page();
		$data['contact'] = $this->HomeModel->get_contact();
		$data['schedule'] = $this->HomeModel->get_all_schedule();

		$this->load->view('ppdb_view_quick_menu', $data);
	}

	public function registration_flow()
	{

		$data['title'] = 'Control Panel | Alur PPDB Sekolah Utsman';
		$data['page'] = $this->HomeModel->get_page();
		$data['contact'] = $this->HomeModel->get_contact();

		$this->load->view('ppdb_view_flow', $data);
	}

	//----------------------------------------------------------------//
}
