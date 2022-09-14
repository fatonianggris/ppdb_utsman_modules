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
					<h2 class="text-white font-weight-bold my-2 mr-5">Pengumuman</h2>
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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Jadwal</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Tambah Pengumuman Jadwal</a>
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
								Tambah Pengumuman Jadwal
							</h3>
						</div>
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" action="<?php echo site_url('ppdb/announcement/schedule/post_schedule'); ?>" enctype="multipart/form-data" method="post" id="kt_add_schedule_form">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label>Nama Jadwal</label>
											<input type="text" name="nama_jadwal" class="form-control form-control-lg" placeholder="Isikan Nama Jadwal" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nama Jadwal</span>
										</div>
									</div>

									<div class="col-lg-2">
										<div class="form-group">
											<label>Tanggal Jadwal</label>
											<input type="text" name="tanggal_jadwal" id="kt_datepicker_1" class="form-control form-control-lg" placeholder="Isikan Tanggal Jadwal" readonly="" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Tanggal Jadwal</span>
										</div>
									</div>

									<div class="col-lg-2">
										<div class="form-group">
											<label>Jam Jadwal</label>
											<input type="text" name="jam_jadwal" id="kt_timepicker_2" class="form-control  form-control-lg" placeholder="Isikan Jam Jadwal" readonly="" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jam Jadwal</span>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label>Lokasi</label>
											<input type="text" name="lokasi" class="form-control  form-control-lg" placeholder="Isikan Lokasi" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Lokasi</span>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Keterangan</label>
											<textarea name="keterangan" id="kt-ckeditor-1"></textarea>
											<span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>isikan Keterangan Jadwal.</span>
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
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/add-schedule-ppdb.js"></script>
