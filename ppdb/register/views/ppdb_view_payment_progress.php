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

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/bg-3.jpg'); ">
				<div class="login-form text-center p-7 position-relative overflow-hidden">
					<!--begin::Login Header-->
					<div class="d-flex flex-center mb-5">
						<a href="#">
							<img src="<?php echo base_url() . $page[0]->logo_website; ?>" class="max-h-105px" alt="" />
						</a>
					</div>
					<!--end::Login Header-->
					<!--begin::Login Sign in form-->
					<div class="login-signin">
						<div class="mb-10 ">
							<p class="font-mobile font-weight-boldest text-warning ">PEMBAYARAN ANDA SEDANG DIPROSES!</p>
							<div class="font-weight-bold text-danger font-size-lg">Terimakasih telah melakukan pembayaran. Bukti Pembayaran Anda sedang dalam <b> PROSES VERIFIKASI.</b></div>
						</div>
						<div class="table-responsive px-mobile">
							<table class="table table-light table-light-warning text-center">
								<thead>
									<tr>
										<th class="table-center">NOMOR PENDAFTARAN</th>
										<th class="table-center">Nama Calon Siswa</th>
										<th class="table-center">Nama OrangTua/Wali</th>
										<th class="table-center">Email</th>
										<th class="table-center">Nomor WA/HP</th>
										<td class="table-center">Jenjang</td>
										<td class="table-center">Program</td>
										<td class="table-center">TA</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="font-weight-boldest table-center font-size-sm"><?php echo $register[0]->nomor_pendaftaran ?></td>
										<td class="table-center font-size-sm"><?php echo $register[0]->nama_calon_siswa; ?></td>
										<td class="table-center font-size-sm"><?php echo $register[0]->nama_orangtua; ?></td>
										<td class="table-center font-size-sm"><?php echo $register[0]->email_orangtua; ?></td>
										<td class="table-center font-size-sm"><?php echo $register[0]->nomor_wa; ?></td>
										<td class="table-center font-size-sm">
											<span class="label label-md font-weight-boldest label-primary label-inline">
												<?php
												if ($register[0]->level_tingkat == 1) {
													echo 'KB';
												} else if ($register[0]->level_tingkat == 2) {
													echo 'TK';
												} else if ($register[0]->level_tingkat == 3) {
													echo 'SD';
												} else if ($register[0]->level_tingkat == 4) {
													echo 'SMP';
												} else if ($register[0]->level_tingkat == 5) {
													echo 'KB-TK';
												} else if ($register[0]->level_tingkat == 6) {
													echo 'DC';
												}
												?>
											</span>
										</td>
										<td class="table-center font-size-sm">
											<span class="label label-md font-weight-boldest label-default label-inline">
												<?php
												if ($register[0]->id_jalur == 1) {
													echo 'REGULER';
												} elseif ($register[0]->id_jalur == 2) {
													echo 'ICP';
												}
												?>
											</span>
										</td>
										<td class="table-center font-size-sm font-weight-bold"><?php echo $register[0]->tahun_ajaran; ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="mt-10">
							<div class="font-weight-bold text-danger font-size-lg"><b> STATUS PEMBAYARAN </b> Anda dapat dilihat paling lambat 2 x 24 jam setelah anda menerima notifikasi ini. Terimakasih</div>
						</div>
						<a href="<?php echo site_url('ppdb/home'); ?>" type="button" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 ">
							<li class="fa fa-home font-size-h4"></li> Kembali ke Menu
						</a>
					</div>
					<!--end::Login Sign in form-->

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
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.js"></script>
	<script>
		$('#example_1').whatsappChatSupport();
	</script>
</body>
<!--end::Body-->

</html>
