<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Voucher extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if ($this->session->userdata('sias-ppdb') == FALSE) {
			redirect('ppdb/auth');
		}
		$this->load->model('VoucherModel');
		$this->load->library('form_validation');
	}

	//
	//-------------------------------PAYMENT------------------------------//
	//
	public function list_voucher()
	{

		$data['title'] = 'Control Panel | Voucher Sekolah Utsman';
		$data['nav_pay'] = 'menu-item-here';
		$data['voucher'] = $this->VoucherModel->get_all_voucher();

		$this->template->load('template_ppdb/template_ppdb', 'ppdb_list_voucher', $data);
	}

	public function add_voucher()
	{

		$data['title'] = 'Control Panel | Voucher PPDB Sekolah Utsman';
		$data['nav_pay'] = 'menu-item-here';
		$this->template->load('template_ppdb/template_ppdb', 'ppdb_add_voucher', $data);
	}

	public function edit_voucher($id = '')
	{
		$id = paramDecrypt($id);

		$check = $this->VoucherModel->get_voucher_id($id);
		$data['voucher'] = $this->VoucherModel->get_voucher_id($id); //?    

		if ($check == FALSE or empty($id)) {
			$this->load->view('error_404', $data);
		} else {
			//edit data with id
			$this->template->load('template_ppdb/template_ppdb', 'ppdb_edit_voucher', $data);
		}
	}

	public function post_voucher()
	{

		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		$this->form_validation->set_rules('kode_voucher', 'Kode Voucher', 'required');
		$this->form_validation->set_rules('nama_voucher', 'Nama Voucher', 'required');
		$this->form_validation->set_rules('potongan', 'Potongan Voucher', 'required');
		$this->form_validation->set_rules('jumlah_voucher', 'Jumlah Voucher', 'required');
		$this->form_validation->set_rules('masa_berlaku', 'Masa berlaku Voucher', 'required');

		$check = $this->VoucherModel->check_voucher_duplicate($data['kode_voucher']);

		if ($check == TRUE) {

			$this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Voucher dengan kode '$data[kode_voucher]' Telah Tersedia..."));
			redirect('ppdb/payment/voucher/add_voucher');
		} else {
			//print_r($param);exit;
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
				redirect('ppdb/payment/voucher/add_voucher');
			} else {

				$input = $this->VoucherModel->insert_voucher($data);
				if ($input == true) {

					$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Voucher dengan kode '$data[kode_voucher]' Telah Tersimpan.."));
					redirect('ppdb/payment/voucher/add_voucher');
				} else {

					$this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan...'));
					redirect('ppdb/payment/voucher/add_voucher');
				}
			}
		}
	}

	public function update_voucher($id = '')
	{

		$id = paramDecrypt($id);
		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		$this->form_validation->set_rules('kode_voucher', 'Kode Voucher', 'required');
		$this->form_validation->set_rules('nama_voucher', 'Nama Voucher', 'required');
		$this->form_validation->set_rules('potongan', 'Potongan Voucher', 'required');
		$this->form_validation->set_rules('jumlah_voucher', 'Jumlah Voucher', 'required');
		$this->form_validation->set_rules('masa_berlaku', 'Masa berlaku Voucher', 'required');

		$get_name = $this->VoucherModel->get_voucher_id($id);
		$check = $this->VoucherModel->check_voucher_duplicate($data['kode_voucher']);

		if ($check == TRUE && $data['kode_voucher'] != $get_name[0]->kode_voucher) {

			$this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Voucher dengan kode '$data[kode_voucher]' Telah Tersedia..."));
			redirect('ppdb/payment/voucher/edit_voucher/' . paramEncrypt($id));
		} else {

			if ($this->form_validation->run() == FALSE) {
				//
				$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
				redirect('ppdb/payment/voucher/edit_voucher/' . paramEncrypt($id));
			} else {

				// print_r($data);exit;    
				$edit = $this->VoucherModel->update_voucher($id, $data);
				if ($edit == true) {

					$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Voucher dengan kode '$data[kode_voucher]' Telah Terupdate.."));
					redirect('ppdb/payment/voucher/edit_voucher/' . paramEncrypt($id));
				} else {

					$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
					redirect('ppdb/payment/voucher/edit_voucher/' . paramEncrypt($id));
				}
			}
		}
	}

	public function delete_voucher()
	{

		$param = $this->input->post('id');
		$id = $this->security->xss_clean($param);
		$id = paramDecrypt($id);

		$data = $this->VoucherModel->get_voucher_id($id);
		$delete = $this->VoucherModel->delete_voucher($id);

		if ($delete == true) {

			$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Voucher dengan kode " . $data[0]->kode_voucher . " Telah Terhapus.."));
			redirect('ppdb/payment/voucher/list_voucher');
		} else {

			$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
			redirect('ppdb/payment/voucher/list_voucher');
		}
	}

	//----------------------------------------------------------------//
}
