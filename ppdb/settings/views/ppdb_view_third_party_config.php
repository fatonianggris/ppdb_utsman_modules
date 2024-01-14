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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Third Party</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Konfigurasi Third Party</a>
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
				<div class="col-lg-12">
					<!--begin::Card-->
					<div class="card card-custom" id="kt_form">
						<div class="card-header">
							<h3 class="card-title">
								Edit Konfigurasi Third Party
							</h3>
						</div>
						<!--begin::Form-->
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" action="<?php echo site_url('ppdb/settings/update_third_party'); ?>" enctype="multipart/form-data" method="post" id="kt_add_page_form">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12 text-center">
										<div class="form-group">
											<h5 class="text-center font-weight-bolder mb-5 text-danger">
												ONE SIGNAL (notifikasi)
										</div>
									</div>
								</div>
								<div class="row">

									<div class="col-lg-6">
										<div class="form-group">
											<label>One Signal App ID</label>
											<textarea class="form-control" placeholder="Isikan One Signal App ID" name="onesignal_app_id_ppdb" rows="4"><?php echo $thirdparty[0]->onesignal_app_id_ppdb; ?></textarea>
											<span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>isikan One Signal App ID</span>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>One Signal App ID Safari</label>
											<textarea class="form-control" placeholder="Isikan One Signal App ID" name="onesignal_app_id_ppdb_safari" rows="4"><?php echo $thirdparty[0]->onesignal_app_id_ppdb_safari; ?></textarea>
											<span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>isikan One Signal App ID</span>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-3">

									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>One Signal Auth Key</label>
											<input type="text" name="onesignal_auth_ppdb" value="<?php echo $thirdparty[0]->onesignal_auth_ppdb ?>" class="form-control  form-control-lg" placeholder="Isikan One Signal Auth Key" />
											<span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>isikan One Signal Auth Key</span>
										</div>
									</div>
									<div class="col-lg-3">

									</div>
								</div>
							</div>
							<div class="card-footer">
								<button id="kt_login_signin_submit" class="btn btn-success font-weight-bold py-4 col-lg-1 col-12">Simpan</button>
							</div>
						</form>
						<!--end::Form-->
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

