<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cost extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if ($this->session->userdata('sias-ppdb') == FALSE) {
			redirect('ppdb/auth');
		}
		$this->user_student = $this->session->userdata("sias-ppdb");

		if ($this->user_student[0]->role_akun != 1) {
			redirect('ppdb/dashboard');
		}
		$this->load->model('CostModel');
		$this->load->library('form_validation');
	}

	//
	//-------------------------------PAYMENT------------------------------//
	//
	public function list_cost()
	{

		$data['title'] = 'Control Panel | Biaya Sekolah Utsman';
		$data['nav_set'] = 'menu-item-here';
		$data['cost'] = $this->CostModel->get_all_cost();

		$this->template->load('template_ppdb/template_ppdb', 'ppdb_list_cost', $data);
	}


	public function edit_cost_guide()
	{

		$data['title'] = 'Control Panel | Biaya Sekolah Utsman';
		$data['nav_set'] = 'menu-item-here';
		$data['panduan'] = $this->CostModel->get_cost_guide_by_id(1);

		$this->template->load('template_ppdb/template_ppdb', 'ppdb_view_email_cost_archive', $data);
	}

	public function edit_cost($id = '')
	{
		$id = paramDecrypt($id);

		$check = $this->CostModel->get_cost_id($id);
		$data['cost'] = $this->CostModel->get_cost_id($id); //?   
		$data['option'] = $this->CostModel->get_option_cost(); //?   
		$data['nav_set'] = 'menu-item-here';

		if ($check == FALSE or empty($id)) {
			$this->load->view('error_404', $data);
		} else {
			//edit data with id
			$this->template->load('template_ppdb/template_ppdb', 'ppdb_edit_cost', $data);
		}
	}

	public function post_cost()
	{

		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		$this->form_validation->set_rules('jenis_biaya', 'Jenis Biaya', 'required');
		$this->form_validation->set_rules('level_tingkat', 'Jenjang Biaya', 'required');
		$this->form_validation->set_rules('id_jalur', 'Program Biaya', 'required');
		$this->form_validation->set_rules('id_jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('id_nama_biaya', 'Opsi Nama Biaya', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal Keseluruhan Biaya', 'required');

		$pieces = explode(",", $data['nama_biaya']);
		$data['nama_biaya'] = $pieces[1];

		$check = $this->CostModel->check_cost_duplicate($data['jenis_biaya'], $data['level_tingkat'], $data['id_jalur'], $data['id_jenis_kelamin'], $data['id_nama_biaya']);

		if ($check == TRUE) {

			$this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Nama Biaya untuk Program, Jenis Kelamin, Jenjang dan Jenis Biaya tersebut Telah Tersedia..."));
			redirect('ppdb/settings/cost/list_cost');
		} else {
			//print_r($param);exit;
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
				redirect('ppdb/settings/cost/list_cost');
			} else {


				$input = $this->CostModel->insert_cost($data);
				if ($input == true) {

					$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Nama Biaya Telah Tersimpan.."));
					redirect('ppdb/settings/cost/list_cost');
				} else {

					$this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan...'));
					redirect('ppdb/settings/cost/list_cost');
				}
			}
		}
	}

	public function update_cost($id = '')
	{

		$id = paramDecrypt($id);
		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		$this->form_validation->set_rules('jenis_biaya', 'Jenis Biaya', 'required');
		$this->form_validation->set_rules('level_tingkat', 'Jenjang Biaya', 'required');
		$this->form_validation->set_rules('id_jalur', 'Program Biaya', 'required');
		$this->form_validation->set_rules('id_nama_biaya', 'Opsi Nama Biaya', 'required');
		$this->form_validation->set_rules('id_jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('nominal', 'Nominal Keseluruhan Biaya', 'required');

		$get_name = $this->CostModel->get_cost_id($id);
		$check = $this->CostModel->check_cost_duplicate($data['jenis_biaya'], $data['level_tingkat'], $data['id_jalur'], $data['id_jenis_kelamin'], $data['id_nama_biaya']);

		if ($check == TRUE && $data['id_nama_biaya'] != $get_name[0]->nama_biaya && $data['jenis_biaya'] != $get_name[0]->jenis_biaya && $data['level_tingkat'] != $get_name[0]->level_tingkat && $data['id_jalur'] != $get_name[0]->id_jalur && $data['id_jenis_kelamin'] != $get_name[0]->id_jenis_kelamin) {

			$this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Nama Biaya untuk Program, Jenis Kelamin, Jenjang dan Jenis Biaya tersebut Telah Tersedia..."));
			redirect('ppdb/settings/cost/edit_cost/' . paramEncrypt($id));
		} else {

			if ($this->form_validation->run() == FALSE) {
				//
				$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
				redirect('ppdb/settings/cost/edit_cost/' . paramEncrypt($id));
			} else {

				$edit = $this->CostModel->update_cost($id, $data);
				if ($edit == true) {

					$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Nama Biaya Telah Terupdate.."));
					redirect('ppdb/settings/cost/edit_cost/' . paramEncrypt($id));
				} else {

					$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
					redirect('ppdb/settings/cost/edit_cost/' . paramEncrypt($id));
				}
			}
		}
	}

	public function update_cost_guide()
	{

		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		$data['file_panduan'] = $data['file_temp'];
		
		$get_file_temp = explode('/', $data['file_temp']);
		$path_file_temp = $get_file_temp[3];

		$this->form_validation->set_rules('nama_panduan', 'Nama Panduan', 'required');
		$this->form_validation->set_rules('keterangan_panduan', 'Keterangan Website', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
			redirect('ppdb/settings/cost/edit_cost_guide');
		} else {
			$this->load->library('upload'); //load library upload file
			
			if (!empty($_FILES['file_panduan']['tmp_name'])) {

				$this->delete_cost_guide($path_file_temp); //delete existing file

				$path = 'uploads/biaya/files/';
				//config upload file
				$config['upload_path'] = $path;
				$config['allowed_types'] = 'pdf';
				$config['max_size'] = 5048; //set without limit
				$config['overwrite'] = FALSE; //if have same name, add number
				$config['remove_spaces'] = TRUE; //change space into _
				$config['encrypt_name'] = TRUE;
				//initialize config upload
				$this->upload->initialize($config);

				if ($this->upload->do_upload('file_panduan')) { //if success upload data
					$result['upload'] = $this->upload->data();
					$name = $result['upload']['file_name'];
					$data['file_panduan'] = $path . $name;
					

				} else {
					$this->session->set_flashdata('flash_message', warn_msg($this->upload->display_errors()));
					redirect('ppdb/settings/cost/edit_cost_guide');
				}
			}
			// print_r($data);exit;    
			$edit = $this->CostModel->update_cost_guide($data,1);
			if ($edit == true) {
				$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Update Panduan Biaya Telah Terupdate..."));
				redirect('ppdb/settings/cost/edit_cost_guide');
			} else {
				$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
				redirect('ppdb/settings/cost/edit_cost_guide');
			}
		}
	}


	public function post_cost_option()
	{

		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		$this->form_validation->set_rules('id_kategori_biaya', 'Jenis Biaya', 'required');
		$this->form_validation->set_rules('nama_opsi_biaya', 'Nama Opsi Biaya', 'required');

		$check = $this->CostModel->check_cost_option_duplicate($data['id_kategori_biaya'], strtolower($data['nama_opsi_biaya']));

		if ($check == TRUE) {

			$this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Nama '$data[nama_opsi_biaya]' dan Jenis Biaya Telah Tersedia..."));
			redirect('ppdb/settings/cost/list_cost');
		} else {
			//print_r($param);exit;
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
				redirect('ppdb/settings/cost/list_cost');
			} else {

				$input = $this->CostModel->insert_cost_option($data);
				if ($input == true) {

					$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Nama '$data[nama_opsi_biaya]' Telah Tersimpan.."));
					redirect('ppdb/settings/cost/list_cost');
				} else {

					$this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan...'));
					redirect('ppdb/settings/cost/list_cost');
				}
			}
		}
	}

	public function update_cost_option($id = '')
	{

		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		$this->form_validation->set_rules('id_kategori_biaya', 'Jenis Biaya', 'required');
		$this->form_validation->set_rules('nama_opsi_biaya', 'Nama Opsi Biaya', 'required');

		$get_name = $this->CostModel->get_cost_option_id($id);
		$check = $this->CostModel->check_cost_option_duplicate($data['id_kategori_biaya'], strtolower($data['nama_opsi_biaya']));

		if ($check == TRUE && $data['nama_opsi_biaya'] != $get_name[0]->nama_opsi_biaya && $data['id_kategori_biaya'] != $get_name[0]->id_kategori_biaya) {

			$this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Nama '$data[nama_opsi_biaya]' dan Jenis Biaya Telah Tersedia..."));
			redirect('ppdb/settings/cost/list_cost/');
		} else {

			if ($this->form_validation->run() == FALSE) {
				//
				$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
				redirect('ppdb/settings/cost/list_cost/');
			} else {

				$edit = $this->CostModel->update_cost_option($id, $data);
				if ($edit == true) {

					$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Nama '$data[nama_opsi_biaya]' Telah Terupdate.."));
					redirect('ppdb/settings/cost/list_cost/');
				} else {

					$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
					redirect('ppdb/settings/cost/list_cost/');
				}
			}
		}
	}

	public function delete_cost()
	{

		$param = $this->input->post('id');
		$id = $this->security->xss_clean($param);
		$id = paramDecrypt($id);

		$data = $this->CostModel->get_cost_id($id);

		$delete = $this->CostModel->delete_cost($id);
		if ($delete == true) {

			$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Nama " . $data[0]->nama_biaya . " Telah Terhapus.."));
			redirect('ppdb/settings/cost/list_cost');
		} else {

			$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
			redirect('ppdb/settings/cost/list_cost');
		}
	}

	public function delete_cost_option()
	{

		$param = $this->input->post('id');
		$id = $this->security->xss_clean($param);

		$data = $this->CostModel->get_cost_option_id($id);

		$delete = $this->CostModel->delete_cost_option($id);
		if ($delete == true) {

			$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Nama " . $data[0]->nama_opsi_biaya . " Telah Terhapus.."));
			redirect('ppdb/settings/cost/list_cost');
		} else {

			$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
			redirect('ppdb/settings/cost/list_cost');
		}
	}

	public function delete_cost_guide($name = '')
	{
		$path = './uploads/biaya/files/';
		@unlink($path . $name);
	}

	//----------------------------------------------------------------//

	function add_ajax_sum_cost($id_jb = '', $id_jenjang = '', $id_pro = '', $id_jk = '')
	{
		$query = $this->CostModel->get_sum_cost_ajax($id_jb, $id_jenjang, $id_pro, $id_jk);

		$data_cost = array(
			'jb' => $id_jb,
			'jenjang' => $id_jenjang
		);

		$this->session->unset_userdata('cost');
		$this->session->set_userdata('cost', $data_cost);

		$data = "";
		foreach ($query->result() as $value) {

			$data .= 'Rp. ' . number_format($value->total_biaya, 0, ',', '.') . '';
		}
		echo $data;
	}

	public function add_ajax_cost_option_add($id_jenis_biaya = '')
	{

		$query = $this->db->get_where('jenis_biaya', array('id_kategori_biaya' => $id_jenis_biaya));
		$data = "<option value=''>Pilih Opsi Nama Biaya</option>";

		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->id_jenis_biaya . "'>" . ucwords(strtolower($value->nama_opsi_biaya)) . "</option>";
		}
		echo $data;
	}

	public function add_ajax_cost_option_edit($id_jenis_biaya = '', $id_nama_biaya = '')
	{

		$query = $this->db->get_where('jenis_biaya', array('id_kategori_biaya' => $id_jenis_biaya));
		$data = "<option value=''>Pilih Opsi Nama Biaya</option>";

		foreach ($query->result() as $value) {
			if ($value->id_jenis_biaya == $id_nama_biaya) {
				$data .= "<option selected value='" . $value->id_jenis_biaya . "'>" . ucwords(strtolower($value->nama_opsi_biaya)) . "</option>";
			} else {
				$data .= "<option value='" . $value->id_jenis_biaya . "'>" . ucwords(strtolower($value->nama_opsi_biaya)) . "</option>";
			}
		}
		echo $data;
	}
}
