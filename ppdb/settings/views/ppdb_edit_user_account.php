<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
		<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-1">
				<!--begin::Heading-->
				<div class="d-flex flex-column">
					<!--begin::Title-->
					<h2 class="text-white font-weight-bold my-2 mr-5">Pengaturan</h2>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<div class="d-flex align-items-center font-weight-bold my-2">
						<!--begin::Item-->
						<a href="#" class="opacity-75 hover-opacity-100">
							<i class="flaticon2-shelter text-white icon-1x"></i>
						</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Akun</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Edit Akun Admin</a>
						<!--end::Item-->
					</div>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Heading-->
			</div>
			<!--end::Info-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">

				<!--begin::Dropdown-->
				<div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="top">
					<a onclick="window.history.back();" class="btn btn-light-danger font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-backward"></i>Kembali</a>
				</div>
				<!--end::Dropdown-->
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Notice-->
			<?php echo $this->session->flashdata('flash_message'); ?>
			<!--end::Notice-->
			<div class="row">
				<div class="col-lg-12" id="kt_form">
					<!--begin::Card-->
					<div class="card card-custom">
						<div class="card-header">
							<h3 class="card-title">
								Edit Akun Admin
							</h3>
						</div>
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" action="<?php echo site_url('ppdb/settings/account/update_account/' . paramEncrypt($account[0]->id_akun_ppdb)); ?>" enctype="multipart/form-data" method="post" id="kt_add_account_form">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Nama Akun</label>
											<input type="text" name="nama_akun" value="<?php echo $account[0]->nama_akun; ?>" class="form-control form-control-lg" placeholder="Isikan Nama Akun" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nama akun</span>
										</div>
									</div>

									<div class="col-lg-3">
										<div class="form-group">
											<label>Role Akun</label>
											<select name="role_akun" id="id_jenis_voucher" class="form-control form-control-lg">
												<option value="<?php echo $account[0]->role_akun; ?>" selected="">
													<?php
													if ($account[0]->role_akun == 1) {
														echo 'Admin';
													} else if ($account[0]->role_akun == 2) {
														echo 'Panitia';
													}
													?>
												</option>
												<option value="1">Admin</option>
												<option value="2">Panitia</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Role Akun</span>
										</div>
									</div>

									<div class="col-lg-3">
										<div class="form-group">
											<label>Email Akun</label>
											<input type="text" name="email_akun" value="<?php echo $account[0]->email_akun; ?>" class="form-control  form-control-lg" placeholder="Isikan Email Akun" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Email Akun</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label>Nomor Handphone</label>
											<input type="text" name="nomor_handphone_akun" value="<?php echo $account[0]->nomor_handphone_akun; ?>" class="form-control  form-control-lg" placeholder="Isikan Nomor Handphone" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nomor Handphone</span>
										</div>
									</div>
									<div class="col-lg-2 mb-3">
										<label>Ubah password?</label>
										<div class="input-group">
											<input data-switch="true" class="ubahpass" data-size="large" type="checkbox" data-on-text="Ya" data-off-text="Tidak" />
										</div>
										<span class="form-text text-dark"><b class="text-danger"></b>*Aktifkan jika ingin mengubah password</span>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Password Baru</label>
											<input type="password" name="password" class="form-control  form-control-lg" placeholder="Isikan Password Baru" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Password Baru</span>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Konfirmasi Password Baru</label>
											<input type="password" name="cf_password" class="form-control  form-control-lg" placeholder="Isikan Password Baru" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Password Baru</span>
										</div>
									</div>
								</div>

							</div>
							<div class="card-footer">
								<button id="kt_login_signin_submit" class="btn btn-success font-weight-bold px-9 py-4 my-3 mx-4">Simpan</button>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card-->
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/add-account-ppdb-edit.js"></script>


<script>
	$(document).ready(function() {
		var id_cost;

		$("#id_jenis_voucher").change(function() {
			id_cost = $(this).val();
			var url = "<?php echo site_url('/ppdb/settings/voucher/add_ajax_cost_option_add'); ?>/" + id_cost;
			$('#id_nama_biaya').load(url);
			return false;
		});

	});
</script>
