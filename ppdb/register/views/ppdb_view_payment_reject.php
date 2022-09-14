<html lang="en">
<!--begin::Head-->

<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
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
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/fonts/dropify.css" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ppdb/dist/assets/media/logos/favicon.ico" />
	<link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.css" rel="stylesheet" type="text/css" />

	<style>
		.blockMsg {
			max-width: 75px;
		}
	</style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/bg-3.jpg');">
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
							<p class="font-mobile font-weight-boldest text-danger ">PEMBAYARAN GAGAL</p>
							<div class="font-weight-bold text-danger font-size-lg">Mohon maaf, Bukti Pembayaran Anda <b>TIDAK DAPAT KAMI VERIFIKASI</b>. </div>
						</div>
						<div class="table-responsive px-mobile">
							<table class="table table-light table-light-danger text-center">
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
						<div class="table-responsive  offset-mobile-2 mt-3 px-mobile">
							<table class="table table-light table-light-danger text-center">
								<thead>
									<tr>
										<th class="table-center ">*Alasan</th>
										<th class="table-center" style="width: 250px;">Bukti Lama</th>
									</tr>

								</thead>
								<tbody>
									<tr>
										<td class="table-center font-size-sm"><?php echo $register[0]->keterangan; ?></td>
										<td class="table-center font-size-sm"><?php echo ($register[0]->bukti_transfer != NULL) ? '<a href="#" type="button" class="bt btn-xs font-weight-bold" data-toggle="modal" data-target="#modal_bukti" > <span class="label label-md font-weight-boldest label-danger label-inline">Lihat Bukti</span></a>' : ''; ?></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="mt-6 mb-10">
							<div class="font-weight-bold text-danger font-size-lg mb-3">Bukti pembayaran anda <b>TIDAK SESUAI</b>, Mohon untuk upload kembali <b>BUKTI TRANSFER</b> yang sesuai.</div>
						</div>

						<form class="form px-mobile" method="POST" action="<?php echo site_url('/ppdb/register/post_revision_payment_slip/' . paramEncrypt($register[0]->nomor_pendaftaran)); ?>" enctype="multipart/form-data" novalidate="novalidate" id="kt_upload_payment">
							<?php echo $this->session->flashdata('flash_message'); ?>
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<div class="row">

								<div class="col-xl-2"></div>
								<div class="col-xl-4">
									<div class="form-group text-left">
										<label>Nomor Pendaftaran</label>
										<input class="form-control form-control-solid h-auto py-5 px-6" value="<?php echo $register[0]->nomor_pendaftaran; ?>" type="text" placeholder="Isikan Nomor Pendaftaran" name="nomor_pendaftaran" readonly="" />
									</div>
								</div>
								<div class="col-xl-4">
									<div class="form-group text-left">
										<label>Nomor Rekening Pembayaran</label>
										<input class="form-control form-control-solid h-auto py-5 px-6" value="<?php echo $register[0]->nomor_rekening; ?>" type="text" placeholder="Isikan Nomor Rekening Pembayaran" name="nomor_rekening" />
									</div>
								</div>
								<div class="col-xl-2"></div>
							</div>
							<div class="row">
								<div class="col-xl-2"></div>
								<div class="col-xl-8">
									<div class="form-group text-left">
										<label>Atas Nama Rekening Pembayaran</label>
										<input class="form-control form-control-solid h-auto py-5 px-6" value="<?php echo $register[0]->atas_nama_rekening; ?>" type="text" placeholder="Isikan Atas Nama Rekening Pembayaran" name="atas_nama_rekening" />
									</div>
								</div>
								<div class="col-xl-2"></div>
							</div>
							<div class="row">
								<div class="col-xl-2"></div>
								<div class="col-xl-8">
									<div class="form-group">
										<label></label>
										<input type="text" name="bukti_transfer_temp" value="<?php echo $register[0]->bukti_transfer ?>" style="display:none" />
										<input type="file" class="dropify" name="bukti_transfer" data-max-file-size="5M" data-height="250" data-allowed-file-extensions="png jpg jpeg" />
										<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>upload <b class="text-danger">BUKTI TRANSFER</b> berupa image/foto dengan format png, jpg, jpeg dan ukuran maksimum 5Mb. </span>
									</div>
								</div>
								<div class="col-xl-2"></div>
							</div>
							<button id="kt_login_signin_submit" class="btn btn-success font-weight-bold px-9 py-4 my-3 mx-4 mt-0">Upload Bukti</button>
							<a href="<?php echo site_url('ppdb/home'); ?>" type="button" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 ">
								<li class="fa fa-home font-size-h4"></li> Kembali ke Menu
							</a>

						</form>
					</div>
					<!--end::Login Sign in form-->

				</div>
			</div>
		</div>
		<!--end::Login-->
	</div>
	<div class="modal fade" id="modal_bukti" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Foto Bukti Transfer Lama</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i aria-hidden="true" class="ki ki-close"></i>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<img alt="Pic" class="col-12" src="<?php echo base_url() . $register[0]->bukti_transfer; ?>">
					</div>
				</div>
				<div class="modal-footer">
					<button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
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
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/upload-payment.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/dropify.js"></script>
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.js"></script>
	<script>
		$('#example_1').whatsappChatSupport();
	</script>
	<script>
		$('.dropify').dropify({
			messages: {
				'default': 'Klik atau Geser file Anda disini',
				'replace': 'Klik atau Geser file Anda untuk mengganti',
				'remove': 'Hapus',
				'error': 'Ooops, terjadi kesalahan.'
			}
		});
	</script>
</body>
<!--end::Body-->

</html>
