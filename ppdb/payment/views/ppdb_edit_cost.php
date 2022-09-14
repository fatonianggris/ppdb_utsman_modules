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
					<h2 class="text-white font-weight-bold my-2 mr-5">Biaya</h2>
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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Biaya</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Edit Biaya Sekolah</a>
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
					<a href="#" class="btn btn-light-danger font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-backward"></i>Kembali</a>
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
								Edit Biaya Sekolah
							</h3>
						</div>
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" action="<?php echo site_url('ppdb/payment/cost/update_cost/' . paramEncrypt($cost[0]->id_biaya)); ?>" enctype="multipart/form-data" method="post" id="kt_add_cost_form">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-2">
										<div class="form-group">
											<label>Jenis Biaya</label>
											<select name="jenis_biaya" class="form-control form-control-lg">
												<option value="<?php echo $cost[0]->jenis_biaya; ?>" selected="">
													<?php
													if ($cost[0]->jenis_biaya == 1) {
														echo 'Pendaftaran';
													} else if ($cost[0]->jenis_biaya == 2) {
														echo 'Uang Masuk';
													}
													?>
												</option>
												<option value="1">Pendaftaran</option>
												<option value="2">Uang Masuk</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jenis Biaya Sekolah</span>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label>Jenis Kelamin</label>
											<select name="id_jenis_kelamin" class="form-control form-control-lg">
												<option value="<?php echo $cost[0]->id_jenis_kelamin; ?>" selected="">
													<?php
													if ($cost[0]->id_jenis_kelamin == 1) {
														echo 'Laki-laki';
													} else if ($cost[0]->id_jenis_kelamin == 2) {
														echo 'Perempuan';
													}
													?>
												</option>
												<option value="1">Laki-laki</option>
												<option value="2">Perempuan</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jenis Biaya Sekolah</span>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label>Jenjang</label>
											<select name="level_tingkat" id="tingkat" class="form-control form-control-lg">
												<option value="<?php echo $cost[0]->level_tingkat; ?>" selected="">
													<?php
													if ($cost[0]->level_tingkat == 1) {
														echo 'KB';
													} else if ($cost[0]->level_tingkat == 2) {
														echo 'TK';
													} else if ($cost[0]->level_tingkat == 3) {
														echo 'SD';
													} else if ($cost[0]->level_tingkat == 4) {
														echo 'SMP';
													} else if ($cost[0]->level_tingkat == 5) {
														echo 'KB-TK';
													} else if ($cost[0]->level_tingkat == 6) {
														echo 'DC';
													}
													?>
												</option>
												<option value="6">DC</option>
												<option value="1">KB</option>
												<option value="5">KB-TK</option>
												<option value="2">TK</option>
												<option value="3">SD</option>
												<option value="4">SMP</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jenjang Biaya</span>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label>Program</label>
											<select name="id_jalur" id="jalur" class="form-control form-control-lg">
												<option value="<?php echo $cost[0]->id_jalur; ?>" selected="">
													<?php
													if ($cost[0]->id_jalur == 1) {
														echo 'Reguler';
													} else if ($cost[0]->id_jalur == 2) {
														echo 'ICP';
													}
													?>
												</option>
												<option value="1">Reguler</option>
												<option value="2">ICP</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Program</span>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label>Nama Biaya</label>
											<input type="text" name="nama_biaya" value="<?php echo $cost[0]->nama_biaya; ?>" class="form-control  form-control-lg" placeholder="Isikan Nama Biaya" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nama Biaya</span>
										</div>
									</div>
									<div class="col-lg-2">
										<div class="form-group">
											<label>Nominal Keseluruhan Biaya</label>
											<input type="text" name="nominal" value="<?php echo $cost[0]->nominal; ?>" class="form-control  form-control-lg" placeholder="Isikan Nominal Keseluruhan Biaya" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nominal Keseluruhan Biaya</span>
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-lg-12">
										<div class="form-group">
											<label>Upload Foto Rincian Biaya</label>
											<input type="text" name="foto_temp" value="<?php echo $cost[0]->foto_biaya ?>" style="display:none" />
											<input type="text" name="foto_temp_thumb" value="<?php echo $cost[0]->foto_biaya_thumb; ?>" style="display:none" />

											<?php if ($cost[0]->foto_biaya != NULL) { ?>
												<input type="file" id="input-file-now" name="foto_biaya" data-default-file="<?php echo base_url() . $cost[0]->foto_biaya; ?>" class="dropify" data-max-file-size="2M" data-height="300" data-allowed-file-extensions="jpeg jpg png" />
											<?php } else { ?>
												<input type="file" id="input-file-now" name="foto_biaya" class="dropify" data-max-file-size="2M" data-height="300" data-allowed-file-extensions="jpeg jpg png" />
											<?php } ?>
											<span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>berformat jpg, png, jpeg, dan berukuran dibawah 2Mb.</span>
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
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/add-cost-ppdb.js"></script>s
