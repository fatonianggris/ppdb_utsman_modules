<html lang="en">
<!--begin::Head-->

<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?> </title>
	<meta name="description" content="<?php echo $title; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="canonical" href="<?php echo base_url(); ?>" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Custom Styles(used by this page)-->
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/login/classic/login-2.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/wizard/wizard-2.css" rel="stylesheet" type="text/css">

	<!--end::Page Custom Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/fonts/dropify.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ppdb/dist/assets/media/logos/favicon.ico" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.css" rel="stylesheet" type="text/css" />

	<style>
		.select2-container {
			box-sizing: border-box;
			display: block;
			margin: 0;
			position: relative;
			vertical-align: middle;
		}

		.select2-container--default .select2-selection--single,
		.select2-container--default .select2-selection--multiple {
			display: flex;
			align-items: center;
			justify-content: space-between;
			border: 1px solid #E4E6EF;
			outline: none !important;
			border-radius: 0.42rem;
			height: auto;
			line-height: 0;
			padding: 0.23rem 0.42rem;
			background: #F3F6F9;
		}

		.blockquote {
			margin-bottom: 1rem;
			font-size: 1rem;
		}

		.select2-container--default.select2-container--disabled .select2-selection--multiple,
		.select2-container--default.select2-container--disabled .select2-selection--single {
			cursor: not-allowed;
			background-color: #f3f6f9;
			opacity: 1;
		}


		.blockMsg {
			max-width: 75px;
		}
	</style>
</head>
<!--end::Head-->
<!--begin::Body-->
<?php $user = $this->session->userdata('sias-ppdb-student'); ?>

<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/bg-3.jpg');">
				<div class="login-form p-7 position-relative overflow-hidden">
					<!--begin::Login Header-->
					<div class="d-flex flex-center mb-5">
						<a href="#">
							<img src="<?php echo base_url() . $page[0]->logo_website; ?>" class="max-h-120px" alt="" />
						</a>
					</div>
					<div class="mb-10 text-center">
						<p class="font-mobile font-weight-boldest text-success ">Upload Berkas Formulir!</p>
						<div class="font-weight-bold text-success font-size-lg">Silahakn upload berkas formulir data diri Anda, Berikut merupakan kolom formulir pengisian:</div>
					</div>
					<!--end::Login Header-->
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Notice-->
							<?php echo $this->session->flashdata('flash_message'); ?>
							<!--end::Notice-->
							<div class="card card-custom bg-warning-o-50 ">
								<div class="card-body p-0">
									<!--begin: Wizard-->
									<div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
										<!--begin: Wizard Nav-->
										<div class="wizard-nav border-right py-5 px-5 py-lg-15 px-lg-10">
											<!--begin::Wizard Step 1 Nav-->
											<div class="wizard-steps">
												<!--begin::Wizard Step 1 Nav-->
												<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
													<div class="wizard-wrapper">
														<div class="wizard-icon">
															<span class="svg-icon svg-icon-2x">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1" />
																		<path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</div>
														<div class="wizard-label">
															<h3 class="wizard-title">Upload Berkas</h3>
															<div class="wizard-desc">Upload Syarat Berkas Formulir</div>
														</div>
													</div>
												</div>
												<!--end::Wizard Step 1 Nav-->
												<!--begin::Wizard Step 2 Nav-->
												<div class="wizard-step" data-wizard-type="step">
													<div class="wizard-wrapper">
														<div class="wizard-icon">
															<span class="svg-icon svg-icon-2x">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,3 L11,11 C11,11.0862364 11.0109158,11.1699233 11.0314412,11.2497543 C10.4163437,11.5908673 10,12.2468125 10,13 C10,14.1045695 10.8954305,15 12,15 C13.1045695,15 14,14.1045695 14,13 C14,12.2468125 13.5836563,11.5908673 12.9685588,11.2497543 C12.9890842,11.1699233 13,11.0862364 13,11 L13,3 L17.7925828,12.5851656 C17.9241309,12.8482619 17.9331722,13.1559315 17.8173006,13.4262985 L15.1298744,19.6969596 C15.051085,19.8808016 14.870316,20 14.6703019,20 L9.32969808,20 C9.12968402,20 8.94891496,19.8808016 8.87012556,19.6969596 L6.18269936,13.4262985 C6.06682778,13.1559315 6.07586907,12.8482619 6.2074172,12.5851656 L11,3 Z" fill="#000000" />
																		<path d="M10,21 L14,21 C14.5522847,21 15,21.4477153 15,22 L15,23 L9,23 L9,22 C9,21.4477153 9.44771525,21 10,21 Z" fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</div>
														<div class="wizard-label">
															<h3 class="wizard-title">Pernyataan dan Persetujuan</h3>
															<div class="wizard-desc">Konfirmasi Pernyataan dan Persetujuan</div>
														</div>
													</div>
												</div>
												<!--end::Wizard Step 2 Nav-->
											</div>
										</div>
										<!--end: Wizard Nav-->
										<!--begin: Wizard Body-->
										<div class="wizard-body py-5 px-5 py-lg-15 px-lg-15">
											<!--begin: Wizard Form-->
											<div class="row px-4">
												<div class="col-xl-12">
													<form class="form" method="POST" action="<?php echo site_url('/ppdb/register/edit_formulir/' . paramEncrypt($user[0]->id_formulir)); ?>" enctype="multipart/form-data" id="kt_form_student">
														<input type="hidden" class="txt_csrfname" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">							
														<!--begin::Wizard Step 1-->
														<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
															<h3 class="mb-20 font-weight-bold text-dark">Upload Berkas:</h3>
															<div class="row ">
																<div class="col-xl-4">
																	<div class="form-group ">
																		<label>Upload Pas Foto 3x4</label>
																		<input type="file" class="dropify_pf" name="foto_siswa" data-max-file-size="3M" data-height="200" data-allowed-file-extensions="png jpg jpeg" />
																		<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>format file png,jpg,jpeg dan ukuran < 3Mb</span>
																	</div>
																</div>
																<div class="col-xl-8">
																	<div class="form-group ">
																		<label>Foto Akta Kelahiran</label>
																		<input type="file" class="dropify_ak" name="akta_kelahiran" data-max-file-size="3M" data-height="200" data-allowed-file-extensions="png jpg jpeg" />

																		<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>format file png,jpg,jpeg dan ukuran < 3Mb</span>
																	</div>
																</div>
															</div>
															<div class="row mt-5">
																<div class="col-xl-12">
																	<div class="form-group ">
																		<label>Foto Kartu Keluarga</label>
																		<input type="file" class="dropify_kk" name="kartu_keluarga" data-max-file-size="3M" data-height="200" data-allowed-file-extensions="png jpg jpeg" />
																		<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>format file png,jpg,jpeg dan ukuran < 3Mb</span>
																	</div>
																</div>
															</div>
															<!--end::Input-->
														</div>
														<!--end::Wizard Step 1-->
														<!--begin::Wizard Step 6-->
														<div class="pb-5" data-wizard-type="step-content">
															<h3 class="mb-20 font-weight-bold text-dark">Pernyataan dan Persetujuan:</h3>
															<div class="row mt-5">
																<div class="col-xl-1">
																	<!--begin::Input-->
																	<div class="form-group">
																		<div class="checkbox-inline">
																			<label class="checkbox checkbox-lg">
																				<input type="checkbox" name="persetujuan_1">
																				<span></span>
																			</label>
																		</div>
																	</div>
																</div>
																<!--end::Input-->
																<div class="col-xl-11">
																	<!--begin::Input-->
																	<div class="form-group">
																		<blockquote class="blockquote">
																			<p class="mb-0">
																				Menyatakan dengan sesungguhnya bahwa seluruh data yang telah dientri dan dikirimkan ke
																				<b>Sekolah Islam Tepadu Utsman</b> melalui aplikasi Sistem Penerimaan Peserta Didik Baru (SPPDB)
																				adalah benar sesuai dengan kondisi riil yang ada.
																			</p>
																		</blockquote>
																	</div>
																</div>
															</div>

															<div class="row mt-5">
																<div class="col-xl-1">
																	<!--begin::Input-->
																	<div class="form-group">
																		<div class="checkbox-inline">
																			<label class="checkbox checkbox-lg">
																				<input type="checkbox" name="persetujuan_2">
																				<span></span>
																			</label>
																		</div>
																	</div>
																</div>
																<!--end::Input-->
																<div class="col-xl-11">
																	<!--begin::Input-->
																	<div class="form-group">
																		<blockquote class="blockquote">
																			<p class="mb-0">
																				Apabila ternyata data yang diinputkan tersebut tidak benar atau palsu,
																				maka siswa bersedia menerima sanksi dan konsekuensi sesuai ketentuan <b>Sekolah Islam Terpadu Utsman</b>
																			</p>
																		</blockquote>
																	</div>
																</div>
															</div>
															<div class="row mb-10">
																<div class="col-xl-1">
																</div>
																<!--end::Input-->
																<div class="col-xl-11">
																	<!--begin::Input-->
																	<div class="form-group">
																		<span class="form-text text-dark"><b class="text-danger">*WAJIB DICENTANG, </b>Silahkan mencentang jika Anda setuju</span>
																	</div>
																</div>
															</div>
															<!--end::Input-->
														</div>
														<!--end::Wizard Step 6-->
														<!--begin: Wizard Actions-->
														<div class="d-flex justify-content-between border-top mt-5">
															<div class="mr-2">
																<button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
															</div>
															<div>
																<button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
																<button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
															</div>
														</div>
														<!--end: Wizard Actions-->
													</form>
												</div>
												<!--end: Wizard-->
											</div>
											<!--end: Wizard Form-->
										</div>
										<!--end: Wizard Body-->
									</div>
									<!--end: Wizard-->
								</div>
							</div>
							<div class="mb-10 text-center">
								<a href="<?php echo site_url("ppdb/register/logout_formulir"); ?>" class="btn btn-warning font-weight-bold px-9 py-4 my-3 mx-4 mt-8 mt-10">Keluar</a>
							</div>
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
				</div>
			</div>
		</div>
		<!--end::Login-->
	</div>
	<div class="whatsapp_chat_support wcs_fixed_right" id="example_1">
		<div class="wcs_button_label">
			Butuh bantuan? Hubungi Kami
		</div>
		<div class="wcs_button wcs_button_circle">
			<span class="fa fa-phone"></span>
		</div>

		<div class="wcs_popup">
			<div class="wcs_popup_close">
				<span class="far fa-times-circle mt-2"></span>
			</div>
			<div class="wcs_popup_header">
				<strong>Butuh bantuan? Kontak Kami </strong>
				<br>
				<div class="wcs_popup_header_description">Pilih salah satu <b>Admin PPDB</b> dibawah ini</div>
			</div>
			<div class="wcs_popup_person_container">
				<?php if ($contact[0]->no_handphone_tk != "" or $contact[0]->no_handphone_tk != NULL) { ?>
					<div class="wcs_popup_person" data-number="<?php echo "62" . substr($contact[0]->no_handphone_tk, 1); ?>" data-default-msg="Assslamualaikum, permisi mau bertanya?">
						<div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>" alt=""></div>
						<div class="wcs_popup_person_content">
							<div class="wcs_popup_person_name">Admin KB-TK</div>
							<div class="wcs_popup_person_description">Petugas PPDB KB-TK</div>
							<div class="wcs_popup_person_status">Sedang Online</div>
						</div>
					</div>
				<?php }
				if ($contact[0]->no_handphone_sd != "" or $contact[0]->no_handphone_sd != NULL) { ?>
					<div class="wcs_popup_person" data-number="<?php echo "62" . substr($contact[0]->no_handphone_sd, 1); ?>" data-default-msg="Assslamualaikum, permisi mau bertanya?">
						<div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>" alt=""></div>
						<div class="wcs_popup_person_content">
							<div class="wcs_popup_person_name">Admin SD</div>
							<div class="wcs_popup_person_description">Petugas PPDB SD</div>
							<div class="wcs_popup_person_status">Sedang Online</div>
						</div>
					</div>
				<?php }
				if ($contact[0]->no_handphone_smp != "" or $contact[0]->no_handphone_smp != NULL) { ?>
					<div class="wcs_popup_person" data-number="<?php echo "62" . substr($contact[0]->no_handphone_smp, 1); ?>" data-default-msg="Assslamualaikum, permisi mau bertanya?">
						<div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>" alt=""></div>
						<div class="wcs_popup_person_content">
							<div class="wcs_popup_person_name">Admin SMP</div>
							<div class="wcs_popup_person_description">Petugas PPDB SMP</div>
							<div class="wcs_popup_person_status">Sedang Online</div>
						</div>
					</div>
				<?php }
				if ($contact[0]->no_handphone_sma != "" or $contact[0]->no_handphone_sma != NULL) { ?>
					<div class="wcs_popup_person" data-number="<?php echo "62" . substr($contact[0]->no_handphone_sma, 1); ?>" data-default-msg="Assslamualaikum, permisi mau bertanya?">
						<div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>" alt=""></div>
						<div class="wcs_popup_person_content">
							<div class="wcs_popup_person_name">Admin SMA</div>
							<div class="wcs_popup_person_description">Petugas PPDB SMA</div>
							<div class="wcs_popup_person_status">Sedang Online</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<!--end::Main-->
	<script>
		var HOST_URL = "<?php echo base_url(); ?>"
	</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1200
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#6993FF",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#8950FC",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#F3F6F9",
						"dark": "#212121"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#E1E9FF",
						"secondary": "#ECF0F3",
						"success": "#C9F7F5",
						"info": "#EEE5FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#212121",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#ECF0F3",
					"gray-300": "#E5EAEE",
					"gray-400": "#D6D6E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#80808F",
					"gray-700": "#464E5F",
					"gray-800": "#1B283F",
					"gray-900": "#212121"
				}
			},
			"font-family": "Poppins"
		};
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/scripts.bundle.js"></script>
	<!--end::Global Theme Bundle-->
	<!--end::Page Scripts-->
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/select2.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/wizard/wizard-formulir.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/bootstrap-switch.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/jquery-mask.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/bootstrap-maxlength.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/file-upload/image-input-emp.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/dropify.js"></script>

	<script>
		$(document).ready(function() {
			$('.dropify_ak').dropify({
				messages: {
					'default': 'Klik atau Geser file Anda disini',
					'replace': 'Klik atau Geser file Anda untuk mengganti',
					'remove': 'Hapus',
					'error': 'Ooops, terjadi kesalahan.'
				}
			});
			$('.dropify_kk').dropify({
				messages: {
					'default': 'Klik atau Geser file Anda disini',
					'replace': 'Klik atau Geser file Anda untuk mengganti',
					'remove': 'Hapus',
					'error': 'Ooops, terjadi kesalahan.'
				}
			});
			$('.dropify_pf').dropify({
				messages: {
					'default': 'Klik atau Geser file Anda disini',
					'replace': 'Klik atau Geser file Anda untuk mengganti',
					'remove': 'Hapus',
					'error': 'Ooops, terjadi kesalahan.'
				}
			});
		});
	</script>

	<script>
		$('#example_1').whatsappChatSupport();
	</script>
</body>
<!--end::Body-->

</html>
