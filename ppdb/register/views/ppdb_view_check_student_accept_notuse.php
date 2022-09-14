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
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ppdb/dist/assets/media/logos/favicon.ico" />
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
						<p class="font-weight-bolder text-white"><?php echo $page[0]->greeting_website; ?>.</p>
						<!--end: Aside content-->
						<div class="alert <?php echo ($announcement[0]->status_pengumuman == 1) ? 'alert-danger' : 'alert-warning'; ?> mt-5 p-5 justify-content-top" role="alert">
							<h4 class="alert-heading font-weight-bolder"><?php echo $announcement[0]->nama_pengumuman; ?></h4>
							<div class="border-bottom border-white opacity-50 mb-5"></div>
							<p>
								<?php echo $announcement[0]->isi_pengumuman ?>
							</p>
						</div>
					</div>
					<!--begin: Aside footer for desktop-->
					<div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
						<div class="opacity-70 font-weight-bold text-white">© 2021 Sekolah Utsman</div>
						<div class="d-flex">

						</div>
					</div>
					<!--end: Aside footer for desktop-->
				</div>
				<!--end: Aside Container-->
			</div>
			<!--begin::Aside-->
			<!--begin::Content-->
			<div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">

				<!--begin::Content body-->
				<div class="d-flex flex-column-fluid flex-center mt-10 mt-lg-0">
					<!--begin::Signup-->
					<div class="login-form login-signin">
						<div class="text-center mb-10 mb-lg-10">
							<h3 class="font-size-h1 text-warning font-weight-bold">Cek Status Kelulusan Sisiwa</h3>
							<p class="text-dark-75 font-weight-bold">Isikan <b class="text-danger">USERNAME</b> yang telah Kami berikan dan kirimkan ke Email Anda. </p>
						</div>
						<!--begin::Form-->
						<form class="form px-admission" method="POST" action="<?php echo base_url(); ?>/ppdb/register/post_register" enctype="multipart/form-data" novalidate="novalidate" id="kt_check_admission">
							<div class="row ">
								<div class="col-xl-12 ">
									<div class="form-group">
										<label>Username</label>
										<input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Isikan Username" name="username" />
										<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan <b class="text-danger">Username</b> yang telah Anda dapatkan sebelumnya. </span>
									</div>
								</div>
							</div>
							<div class="form-group d-flex flex-wrap flex-center">
								<button id="kt_login_signin_submit" class="btn btn-warning font-weight-bold px-9 py-4 my-3 mx-4">Cek Status</button>
							</div>
						</form>
						<!--end::Form-->
					</div>
					<!--end::Signup-->

				</div>
				<!--end::Content body-->
				<!--begin::Content footer for mobile-->
				<div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
					<div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 Metronic</div>
					<div class="d-flex order-1 order-sm-2 my-2">
						<a href="#" class="text-dark-75 text-hover-primary">Privacy</a>
						<a href="#" class="text-dark-75 text-hover-primary ml-4">Legal</a>
						<a href="#" class="text-dark-75 text-hover-primary ml-4">Contact</a>
					</div>
				</div>
				<!--end::Content footer for mobile-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Login-->
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
	<!--begin::Page Scripts(used by this page)-->
	<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/check-admission.js"></script>
	<!--end::Page Scripts-->
</body>
<!--end::Body-->

</html>
