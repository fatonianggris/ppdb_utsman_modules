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
	<!--end::Page Custom Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ppdb/dist/assets/media/logos/favicon.ico" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.css" rel="stylesheet" type="text/css" />
	<style>
		i {
			color: #ffffff;
		}
	</style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/bg-10.jpg)" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
			<!--begin::Aside-->
			<div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/utsman.jpg);">
				<!--begin: Aside Container-->
				<div class="d-flex flex-row-fluid flex-column justify-content-between">
					<!--begin: Aside header-->
					<a href="#" class="flex-column-auto mt-5 pb-lg-0 pb-10">
						<img src="<?php echo base_url() . $page[0]->logo_website; ?>" class="max-h-100px" alt="" />
					</a>
					<!--end: Aside header-->
					<!--begin: Aside content-->
					<div class="flex-column-fluid d-flex flex-column mt-5">
						<h3 class="font-size-h1 mb-5 text-white font-weight-bolder">SPPDB <?php echo $page[0]->nama_website; ?></h3>
						<p class="text-white font-weight-bolder"><?php echo $page[0]->greeting_website; ?>.</p>
						<!--end: Aside content-->
						<div class="alert <?php echo ($announcement[0]->status_pengumuman == 1) ? 'alert-danger' : 'alert-warning'; ?> mt-5 p-5 justify-content-top" role="alert">
							<h4 class="alert-heading font-weight-bolder"><?php echo $announcement[0]->nama_pengumuman; ?></h4>
							<div class="border-bottom border-white opacity-50 mb-5"></div>
							<p>
								<?php echo $announcement[0]->isi_pengumuman ?>
							</p>
							<a role="button" data-toggle="modal" data-target="#modal_view_schedule" class="btn btn-primary font-weight-bold px-6 py-3"><i class="fa fa-eye"></i>Lihat Jadwal PPDB</a>
						</div>
					</div>
					<!--begin: Aside footer for desktop-->
					<div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
						<div class="font-weight-bold text-white">© 2021 Sekolah Utsman</div>
						<div class="d-flex">

						</div>
					</div>
					<!--end: Aside footer for desktop-->
				</div>
				<!--end: Aside Container-->
			</div>
			<!--begin::Aside-->
			<!--begin::Content-->
			<div class="d-flex flex-column flex-row-fluid position-relative p-7 mt-5 overflow-hidden">
				<!--begin::Content body-->
				<div class="d-flex flex-column-fluid flex-center mt-5 mt-lg-0">
					<!--begin::Signup-->
					<div class="login-form login-signin">
						<div class="text-center mb-10 mb-lg-10">
							<h3 class="font-mobile display-4 text-warning font-weight-bolder">ALUR PPDB SEKOLAH UTSMAN</h3>
							<p class="text-dark-75 font-weight-bold">Silahkan <b class="text-danger">MENGIKUTI</b> alur PPDB Sekolah Utsman untuk memudahkan Anda, dengan meng-klik tombol di bawah ini. </p>
						</div>
						<!--begin::Form-->
						<div class="row">
							<div class="col-xl-12">
								<!--begin::Tiles Widget 13-->
								<div class="card card-custom bgi-no-repeat gutter-b" style="height: 185px; background-color: #663259; background-position: calc(100% + 0.5rem) 100%; background-size: 100% auto; background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/svg/patterns/taieri.svg)">
									<!--begin::Body-->
									<div class="card-body d-flex align-items-center">
										<div>
											<h3 class="text-white font-weight-bolder line-height-lg mb-5">Alur Pendaftaran Peserta Didik Baru
												<br />Sekolah Utsman 2022/2023
											</h3>
											<a href="<?php echo site_url("/ppdb/home/registration_flow"); ?>" class="btn btn-warning font-weight-bold px-6 py-3 mt-2 mr-3"><i class="fa fa-eye"></i>Lihat Alur PPDB</a>
											<a href="<?php echo $page[0]->url_tutorial_alur; ?>" target="_blank" class="btn btn-primary font-weight-bold px-6 py-3 mt-2 "><i class="fab fa-youtube "></i>Video Tutorial</a>

										</div>
									</div>
									<!--end::Body-->
								</div>
								<!--end::Tiles Widget 13-->
							</div>
						</div>
						<?php if ($page[0]->status_ppdb == 1) { ?>
							<!--end::Form-->
							<div class="text-center mb-10 mb-lg-10 mt-8">
								<h3 class="font-mobile display-4 text-warning font-weight-bolder">QUICK MENU</h3>
								<p class="text-dark-75 font-weight-bold">Berikut merupakan <b class="text-danger">MENU PINTAS</b> menuju halaman yang Anda butuhkan. </p>
							</div>
							<div class="row">
								<div class="col-xl-4 col-6 ">
									<!--begin::Tiles Widget 12-->
									<div class="card card-custom gutter-b text-center bg-primary" style="height: 180px">
										<div class="card-body ">
											<span class="svg-icon svg-icon-3x svg-icon-white ">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
														<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
														<rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
											<div class="font-weight-bolder font-size-sm mt-3 text-white">Pendaftaran Online Utsman</div>
											<a href="<?php echo site_url("/ppdb/register"); ?>" class="btn btn-light-primary btn-shadow-hover font-weight-bold mt-3"><i class="fa fa-cart-plus"></i> Beli</a>

										</div>
									</div>
									<!--end::Tiles Widget 12-->
								</div>
								<div class="col-xl-4 col-6">
									<!--begin::Tiles Widget 12-->
									<div class="card card-custom gutter-b text-center bg-primary" style="height: 180px">
										<div class="card-body">
											<span class="svg-icon svg-icon-3x svg-icon-white">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M5,7 L19,7 C20.1045695,7 21,7.8954305 21,9 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,9 C3,7.8954305 3.8954305,7 5,7 Z M12,17 C14.209139,17 16,15.209139 16,13 C16,10.790861 14.209139,9 12,9 C9.790861,9 8,10.790861 8,13 C8,15.209139 9.790861,17 12,17 Z" fill="#000000" />
														<rect fill="#000000" opacity="0.3" x="9" y="4" width="6" height="2" rx="1" />
														<circle fill="#000000" opacity="0.3" cx="12" cy="13" r="2" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
											<div class="text-white font-weight-bolder font-size-sm mt-3">Upload Bukti Pembayaran</div>
											<a href="<?php echo site_url("/ppdb/register/upload_payment_receipt"); ?>" class="btn btn-light-primary btn-shadow-hover font-weight-bold mt-3"><i class="fa fa-upload"></i> Upload</a>

										</div>
									</div>
									<!--end::Tiles Widget 12-->
								</div>
								<div class="col-xl-4 col-6">
									<!--begin::Tiles Widget 12-->
									<div class="card card-custom gutter-b text-center bg-primary" style="height: 180px">
										<div class="card-body">
											<span class="svg-icon svg-icon-3x svg-icon-white">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2" />
														<rect fill="#000000" x="2" y="8" width="20" height="3" />
														<rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
											<div class="text-white font-weight-bolder font-size-sm mt-3">Cek Status Pembayaran</div>
											<a href="<?php echo site_url("/ppdb/register/check_status_payment"); ?>" class="btn btn-light-primary btn-shadow-hover font-weight-bold mt-3"><i class="fa fa-check"></i> Cek</a>

										</div>
									</div>
									<!--end::Tiles Widget 12-->
								</div>
								<div class="col-xl-4 col-6 offset-xl-2">
									<!--begin::Tiles Widget 12-->
									<div class="card card-custom gutter-b text-center bg-primary" style="height: 180px">
										<div class="card-body">
											<span class="svg-icon svg-icon-3x svg-icon-white">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
														<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
											<div class="text-white font-weight-bolder font-size-sm mt-3">Isi Formulir Pendaftaran</div>
											<a href="<?php echo site_url("/ppdb/register/status_fulfillment_formulir"); ?>" class="btn btn-light-primary btn-shadow-hover font-weight-bold mt-3"><i class="fa fa-pen"></i> Isi</a>
										</div>
									</div>
									<!--end::Tiles Widget 12-->
								</div>
								<div class="col-xl-4 col-6">
									<!--begin::Tiles Widget 12-->
									<div class="card card-custom gutter-b text-center bg-primary" style="height: 180px">
										<div class="card-body">
											<span class="svg-icon svg-icon-3x svg-icon-white">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24"></polygon>
														<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
														<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
											<div class="text-white font-weight-bolder font-size-sm mt-3">Cek Status Penerimaan</div>
											<a href="<?php echo site_url("/ppdb/register/status_student_warning"); ?>" class="btn btn-light-primary btn-shadow-hover font-weight-bold mt-3"><i class="fa fa-check"></i> Cek</a>

										</div>
									</div>
									<!--end::Tiles Widget 12-->
								</div>

							</div>
						<?php } else { ?>
							<!--end::Form-->
							<div class="text-center mb-10 mb-lg-10 mt-8">
								<h3 class="font-mobile display-3 text-danger font-weight-boldest">PENDAFTARAN TELAH DITUTUP</h3>
								<p class="text-dark-75 font-weight-bold">Silahkan melihat <b class="text-danger">INFO PENGUMUMAN</b> untuk mengtahui informasi terkait PPDB Sekolah Utsman Atau hubungi Admin dibawah ini: </p>
							</div>
							<div class="col-lg-12 text-center">
								<div class="whatsapp_chat_support" id="example_7">
									<div class="wcs_button wcs_button_person" data-number="<?php echo "62" . substr($contact[0]->no_handphone, 1); ?>" data-default-msg="Assslamualaikum, permisi mau bertanya?">
										<div class="wcs_button_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>" alt="" style="background-color: white"></div>
										<div class="wcs_button_person_content">
											<div class="wcs_button_person_name">Admin TU &nbsp;/&nbsp; Sekolah Utsman</div>
											<div class="wcs_button_person_description">Butuh Bantuan? Chat via whatsApp</div>
											<div class="wcs_button_person_status">Saya Online</div>
										</div>
									</div>
								</div>

							</div>
						<?php } ?>
					</div>
					<!--end::Signup-->

				</div>
				<!--end::Content body-->
				<!--begin::Content footer for mobile-->
				<div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
					<div class="text-dark font-weight-bold order-2 order-sm-1 my-2">© 2021 Sekolah Utsman</div>

				</div>
				<!--end::Content footer for mobile-->
			</div>
			<!--end::Content-->
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
	<!--begin::Page Scripts(used by this page)-->
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/check-payment.js"></script>
	<!--end::Page Scripts-->
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.js"></script>
	<script>
		$('#example_1').whatsappChatSupport();
	</script>
	<script>
		$('#example_7').whatsappChatSupport();
	</script>

</body>
<div class="modal fade" id="modal_view_schedule" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Pengumuman Jadwal PPDB</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="timeline timeline-3">
					<div class="timeline-items">
						<?php
						if (!empty($schedule)) {
							foreach ($schedule as $key => $value) {
						?>
								<div class="timeline-item">
									<div class="timeline-media">
										<i class="flaticon2-calendar-1 text-primary"></i>
									</div>
									<div class="timeline-content">
										<div class="d-flex align-items-center justify-content-between mb-3">
											<div class="mr-2">
												<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">
													<?php echo ucwords(strtolower($value->nama_jadwal)); ?>
												</a>
												<span class="label label-light-success font-weight-bolder label-inline ml-2"><?php echo ucwords(strtolower($value->tanggal_jadwal)); ?></span>
												<span class="label label-light-primary font-weight-bolder label-inline ml-2"><?php echo ucwords(strtolower($value->jam_jadwal)); ?></span>
											</div>
										</div>
										<p class="p-0">
											<?php echo ucwords(strtolower($value->keterangan)); ?>
										</p>
										<div class="d-flex align-items-center justify-content-between mb-3">
											<div class="mr-2">
												<a href="#" class="text-warning text-hover-primary font-weight-bold">
													<li class="fa fa-map-marker "></li> Lokasi
												</a>
												<p class="p-0">
													<?php echo ucwords(strtolower($value->lokasi)); ?>
												</p>
											</div>
										</div>
									</div>
								</div>
						<?php
							}  //ngatur nomor urut
						}
						?>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
			</div>

		</div>
	</div>
</div>
<!--end::Body-->

</html>
