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
		$this->user_student = $this->session->userdata("sias-ppdb");

		if ($this->user_student[0]->role_akun != 1) {
			redirect('ppdb/dashboard');
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
		$data['nav_set'] = 'menu-item-here';
		$data['voucher'] = $this->VoucherModel->get_all_voucher();

		$this->template->load('template_ppdb/template_ppdb', 'ppdb_list_voucher', $data);
	}

	public function add_voucher()
	{

		$data['title'] = 'Control Panel | Voucher PPDB Sekolah Utsman';
		$data['nav_set'] = 'menu-item-here';
		$this->template->load('template_ppdb/template_ppdb', 'ppdb_add_voucher', $data);
	}

	public function edit_voucher($id = '')
	{
		$id = paramDecrypt($id);

		$check = $this->VoucherModel->get_voucher_id($id);
		$data['voucher'] = $this->VoucherModel->get_voucher_id($id); //?   
		$data['nav_set'] = 'menu-item-here';

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
		$this->form_validation->set_rules('id_jenis_voucher', 'Jenis Voucher', 'required');
		$this->form_validation->set_rules('id_nama_biaya', 'Potongan Voucher Pada Biaya', 'required');
		$this->form_validation->set_rules('potongan', 'Potongan Voucher', 'required');
		$this->form_validation->set_rules('jumlah_voucher', 'Jumlah Voucher', 'required');
		$this->form_validation->set_rules('masa_berlaku', 'Masa berlaku Voucher', 'required');

		$check = $this->VoucherModel->check_voucher_duplicate($data['kode_voucher']);

		if ($check == TRUE) {

			$this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Voucher dengan kode '$data[kode_voucher]' Telah Tersedia..."));
			redirect('ppdb/settings/voucher/add_voucher');
		} else {
			//print_r($param);exit;
			if ($this->form_validation->run() == FALSE) {

				$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
				redirect('ppdb/settings/voucher/add_voucher');
			} else {

				$input = $this->VoucherModel->insert_voucher($data);
				if ($input == true) {

					$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Voucher dengan kode '$data[kode_voucher]' Telah Tersimpan.."));
					redirect('ppdb/settings/voucher/add_voucher');
				} else {

					$this->session->set_flashdata('flash_message', err_msg('Mohon Maaf, Terjadi kesalahan...'));
					redirect('ppdb/settings/voucher/add_voucher');
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
		$this->form_validation->set_rules('id_jenis_voucher', 'Jenis Voucher', 'required');
		$this->form_validation->set_rules('id_nama_biaya', 'Potongan Voucher Pada Biaya', 'required');
		$this->form_validation->set_rules('potongan', 'Potongan Voucher', 'required');
		$this->form_validation->set_rules('jumlah_voucher', 'Jumlah Voucher', 'required');
		$this->form_validation->set_rules('masa_berlaku', 'Masa berlaku Voucher', 'required');

		$get_name = $this->VoucherModel->get_voucher_id($id);
		$check = $this->VoucherModel->check_voucher_duplicate($data['kode_voucher']);

		if ($check == TRUE && $data['kode_voucher'] != $get_name[0]->kode_voucher) {

			$this->session->set_flashdata('flash_message', warn_msg("Mohon Maaf, Voucher dengan kode '$data[kode_voucher]' Telah Tersedia..."));
			redirect('ppdb/settings/voucher/edit_voucher/' . paramEncrypt($id));
		} else {

			if ($this->form_validation->run() == FALSE) {
				//
				$this->session->set_flashdata('flash_message', warn_msg(validation_errors()));
				redirect('ppdb/settings/voucher/edit_voucher/' . paramEncrypt($id));
			} else {

				// print_r($data);exit;    
				$edit = $this->VoucherModel->update_voucher($id, $data);
				if ($edit == true) {

					$this->session->set_flashdata('flash_message', succ_msg("Berhasil, Voucher dengan kode '$data[kode_voucher]' Telah Terupdate.."));
					redirect('ppdb/settings/voucher/edit_voucher/' . paramEncrypt($id));
				} else {

					$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
					redirect('ppdb/settings/voucher/edit_voucher/' . paramEncrypt($id));
				}
			}
		}
	}

	public function change_voucher()
	{
		$param = $this->input->post();
		$data = $this->security->xss_clean($param);

		if ($data['id'] == '' or $data['id'] == null || empty($data['id'] || !$data['id'])) {
			$output = array(
				"status" => false,
				"messages" => "Mohon Maaf!, Nilai ID tidak ditemukan. Silahkan cek ulang.",
			);
		} else {

			$id = paramDecrypt($data['id']);
			$id_nama_biaya = paramDecrypt($data['id_nama_biaya']);

			$edit = $this->VoucherModel->change_voucher_active($id, $id_nama_biaya, $data['value']);

			if ($edit == true) {
				$this->deactivate_expired_and_empty_voucher();
				$output = array(
					"status" => true,
					"messages" => "Berhasil!, Update Status Aktif Voucher " . $data['kode_voucher'] . " berhasil diubah, Silahkan cek ulang.",
				);
			} else {
				$output = array(
					"status" => true,
					"messages" => "Mohon Maaf!, Update Status Aktif Voucher " . $data['kode_voucher'] . " gagal diubah, Silahkan cek ulang.",
				);
			}
		}
		echo json_encode($output);
	}

	public function deactivate_expired_and_empty_voucher()
	{
		$vouchers = $this->db->get('voucher')->result();

		foreach ($vouchers as $v) {
			$deactivate = false;

			// ✅ Cek expired
			if (!empty($v->masa_berlaku)) {
				$exp = DateTime::createFromFormat('d/m/Y', $v->masa_berlaku);
				if ($exp) {
					$exp_date = $exp->format('Y-m-d');
					if (strtotime($exp_date) < strtotime(date('Y-m-d'))) {
						$deactivate = true;
					}
				}
			}

			// ✅ Cek jika jumlah_voucher = 0
			if ($v->jumlah_voucher <= 0) {
				$deactivate = true;
			}

			// ✅ Update status jika salah satu kondisi terpenuhi
			if ($deactivate) {
				$this->db->where('id_voucher', $v->id_voucher)
					->update('voucher', ['status_aktif' => '0']);
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
			redirect('ppdb/settings/voucher/list_voucher');
		} else {

			$this->session->set_flashdata('flash_message', err_msg('Maaf, Terjadi kesalahan...'));
			redirect('ppdb/settings/voucher/list_voucher');
		}
	}

	public function add_ajax_cost_option_add($id_jenis_biaya = '')
	{

		$query = $this->db->get_where('jenis_biaya', array('id_kategori_biaya' => $id_jenis_biaya));
		$data = "<option value=''>Pilih Opsi Tujuan Potongan Biaya</option>";

		foreach ($query->result() as $value) {
			$data .= "<option value='" . $value->id_jenis_biaya . "'>" . ucwords(strtolower($value->nama_opsi_biaya)) . "</option>";
		}
		echo $data;
	}

	public function add_ajax_cost_option_edit($id_jenis_biaya = '', $id_nama_biaya = '')
	{

		$query = $this->db->get_where('jenis_biaya', array('id_kategori_biaya' => $id_jenis_biaya));
		$data = "<option value=''>Pilih Opsi Tujuan Potongan Biaya</option>";

		foreach ($query->result() as $value) {
			if ($value->id_jenis_biaya == $id_nama_biaya) {
				$data .= "<option selected value='" . $value->id_jenis_biaya . "'>" . ucwords(strtolower($value->nama_opsi_biaya)) . "</option>";
			} else {
				$data .= "<option value='" . $value->id_jenis_biaya . "'>" . ucwords(strtolower($value->nama_opsi_biaya)) . "</option>";
			}
		}
		echo $data;
	}

	//----------------------------------------------------------------//
}
