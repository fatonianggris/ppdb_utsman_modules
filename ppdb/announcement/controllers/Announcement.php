<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Announcement extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if ($this->session->userdata('sias-ppdb') == FALSE) {
			redirect('ppdb/auth');
		}
		$this->load->model('AnnouncementModel');
		$this->load->library('form_validation');
	}

	//
	//-------------------------------AUTH------------------------------//
	//

	public function edit_announcement()
	{

		$data['title'] = 'Control Panel | Pengumuman Login Admin ';
		$data['nav_announ'] = 'menu-item-here';

		$data['announcement'] = $this->AnnouncementModel->get_announcement_config(); //?  
		$this->template->load('template_ppdb/template_ppdb', 'ppdb_view_announcement', $data);
	}

	public function update_announcement()
	{

		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		$this->form_validation->set_rules('nama_pengumuman', 'Nama Pengumuman', 'required');
		$this->form_validation->set_rules('status_pengumuman', 'Status Pengumuman', 'required');
		$this->form_validation->set_rules('isi_pengumuman', 'Isi Pengumuman', 'required');

		if ($this->form_validation->run() == FALSE) {
			//
			$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
			redirect('ppdb/announcement/edit_announcement');
		} else {

			// print_r($data);exit;    
			$edit = $this->AnnouncementModel->update_announcement(1, $data);
			if ($edit == true) {

				$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Pengumuman Website Telah Terupdate.."));
				redirect('ppdb/announcement/edit_announcement');
			} else {

				$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
				redirect('ppdb/announcement/edit_announcement');
			}
		}
	}

	//----------------------------------------------------------------//
}
