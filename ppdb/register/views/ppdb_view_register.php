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
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/login/classic/login-1.css" rel="stylesheet"
        type="text/css" />

    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/prismjs/prismjs.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ppdb/dist/assets/media/logos/favicon.ico" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.css"
        rel="stylesheet" type="text/css" />
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
        padding: 0.43rem 0.42rem;
        background: #F3F6F9;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__rendered .select2-selection__choice {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0.20rem 0.75rem;
        font-size: 1rem;
        margin: 0.1rem 0.4rem 0.1rem 0;
        position: relative;
        float: left
            /*rtl:right*/
        ;
        color: #3F4254;
        background: #ffffff;
        border: 0;
        border-radius: 0.42rem;
    }

    .blockMsg {
        max-width: 75px;
    }

    .g-recaptcha {
        display: inline-block;
    }

    i {
        color: #ffffff;
    }
    </style>

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/bg-10.jpg)"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white"
            id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10"
                style="background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/utsman.jpg);">
                <!--begin: Aside Container-->
                <div class="d-flex flex-row-fluid flex-column justify-content-between">
                    <!--begin: Aside header-->
                    <a href="#" class="flex-column-auto mt-5 pb-lg-0 pb-10">
                        <img src="<?php echo base_url() . $page[0]->logo_website; ?>" class="max-h-100px" alt="" />
                    </a>
                    <!--end: Aside header-->
                    <!--begin: Aside content-->
                    <div class="flex-column-fluid d-flex flex-column mt-5">
                        <h3 class="font-size-h1 mb-5 text-white font-weight-bolder">SPPDB
                            <?php echo $page[0]->nama_website; ?></h3>
                        <p class="font-weight-bolder text-white"><?php echo $page[0]->greeting_website; ?>.</p>
                        <!--end: Aside content-->
                        <div class="alert <?php echo ($announcement[0]->status_pengumuman == 1) ? 'alert-danger' : 'alert-warning'; ?> mt-5 p-5 justify-content-top"
                            role="alert">
                            <h4 class="alert-heading font-weight-bolder">
                                <?php echo $announcement[0]->nama_pengumuman; ?></h4>
                            <div class="border-bottom border-white opacity-50 mb-5"></div>
                            <p>
                                <?php echo $announcement[0]->isi_pengumuman ?>
                            </p>
                            <a role="button" data-toggle="modal" data-target="#modal_view_schedule"
                                class="btn btn-primary font-weight-bold px-6 py-3"><i class="fa fa-eye"></i>Lihat Jadwal
                                PPDB</a>

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
                    <div class="login-form login-signin" id="kt_form">
                        <div class="text-center mb-5 mb-lg-5">
                            <h3 class="font-size-h1 text-warning font-weight-bolder">Pembelian Formulir</h3>
                            <p class="text-dark-75 font-weight-bold">Isikan Identitas Anda Untuk Informasi Pembelian
                                Formulir Pada Sistem Kami. </p>
                        </div>
                        <!-- <div class="alert alert-custom alert-light-danger alert-shadow fade show mb-5 mb-lg-5" role="alert">
							<div class="alert-icon">
								<span class="svg-icon svg-icon-danger svg-icon-xl">

									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"></rect>
											<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
											<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
											<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
										</g>
									</svg>

								</span>
							</div>
							<div class="alert-text"><b>Mohon Maaf, pendaftaran KB,TK dan SD-ICP telah ditutup karena kuota terpenuhi. Terima kasih. </b></div>
						</div> -->
                        <?php echo $this->session->flashdata('flash_message'); ?>
                        <!--begin::Form-->
                        <form class="form" method="POST" action="<?php echo base_url(); ?>/ppdb/register/post_register"
                            enctype="multipart/form-data" novalidate="novalidate" id="kt_register_form">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div id="info_register">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Email OrangTua/Wali/Siswa</label>
                                        <input class="form-control form-control-solid form-control-lg" type="text"
                                            onkeyup="check_email_used(this.value)"
                                            value="<?php echo set_value('email_orangtua'); ?>"
                                            placeholder="Isikan Email Orangtua/Wali/Siswa" name="email_orangtua" />
                                        <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI,
                                            </b>pastikan Email OrangTua/Wali/Siswa <b class="text-danger">AKTIF</b>,
                                            Sistem Kami akan menggunakan Email Anda sebagai notifikasi/pemberitahuan
                                            selanjutnya. </span>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Nomor WhatsApp OrangTua/Wali/Siswa</label>
                                        <input class="form-control form-control-solid form-control-lg" type="text"
                                            value="<?php echo set_value('nomor_wa'); ?>"
                                            placeholder="Isikan Nomor WA OrangTua/Wali/Siswa" name="nomor_wa" />
                                        <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI,
                                            </b>pastikan Nomor WA OrangTua/Wali/Siswa <b class="text-danger">AKTIF</b>,
                                            Sistem Kami akan menggunakan Nomor WA Anda sebagai notifikasi selanjutnya.
                                            Contoh: 08956742538</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label>Jenjang Siswa</label>
                                        <select name="level_tingkat" id="tingkat"
                                            class="form-control form-control-solid form-control-lg">
                                            <option value="">Jenjang</option>
                                            <option value="6">DC</option>
                                            <option value="1">KB</option>
                                            <option value="5">KB-TK</option>
                                            <option value="2">TK</option>
                                            <option value="3">SD</option>
                                            <option value="4">SMP</option>
                                        </select>
                                        <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih
                                            Jenjang Siswa</span>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="form-group">
                                        <label>Program</label>
                                        <select name="id_jalur" id="jalur"
                                            class="form-control form-control-solid form-control-lg">
                                            <option value="">Program</option>
                                            <option value="1">Reguler</option>
                                            <option value="2" disabled>ICP</option>
                                        </select>
                                        <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih
                                            Program Siswa </span>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Pilih Tahun Ajaran</label>
                                        <select name="id_tahun_ajaran"
                                            class="form-control form-control-solid form-control-lg">
                                            <option value="">Pilih Tahun Ajaran</option>
                                            <?php
if (!empty($schoolyear)) {
    foreach ($schoolyear as $key => $value_sch) {
        if ($value_sch->tahun_awal > (date("Y"))) {
            ?>
                                            <option value="<?php echo $value_sch->id_tahun_ajaran; ?>">
                                                <?php echo $value_sch->tahun_awal; ?>/<?php echo $value_sch->tahun_akhir; ?>
                                                (INDEN)</option>
                                            <?php } else {
            ?>
                                            <option value="<?php echo $value_sch->id_tahun_ajaran; ?>">
                                                <?php echo $value_sch->tahun_awal; ?>/<?php echo $value_sch->tahun_akhir; ?>
                                            </option>
                                            <?php
}
    }
}
?>
                                        </select> <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI,
                                            </b>isikan Tahun Ajaran yang akan Anda Daftar, Status <b
                                                class="text-danger">INDEN</b> jika Anda memilih diatas Tahun Ajaran
                                            sekarang</span>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Asal Sekolah Siswa</label>
                                        <input class="form-control form-control-solid form-control-lg"
                                            value="<?php echo set_value('asal_sekolah'); ?>" type="text"
                                            placeholder="Isikan Asal Sekolah" name="asal_sekolah" />
                                        <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI,
                                            </b>isikan Nama Asal Sekolah jika Siswa pernah bersekolah.</span>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div id="content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin"
                                            class="form-control form-control-solid form-control-lg">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                        <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih
                                            Jenis Kelamin Siswa </span>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="form-group">
                                        <label>Nama Siswa</label>
                                        <input class="form-control form-control-solid form-control-lg" type="text"
                                            value="<?php echo set_value('nama_calon_siswa'); ?>"
                                            placeholder="Isikan Nama Lengkap Siswa" name="nama_calon_siswa" />
                                        <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI,
                                            </b>isikan Nama Siswa Sesuai Akta Kelahiran</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label>Anda Mengetahui Informasi Sekolah Utsman Dari?</label>
                                        <select name="insight[]" id="kt_select2_3"
                                            class="form-control form-control-lg form-control-solid select2"
                                            multiple="multiple">
                                            <option value="1">Sosial Media Sekolah Utsman</option>
                                            <option value="2">Website Sekolah Utsman</option>
                                            <option value="3">Teman/Saudara/Kerabat</option>
                                            <option value="4">Iklan Facebook</option>
                                            <option value="5">Iklan Instagram</option>
                                            <option value="6">Iklan Google</option>
                                            <option value="7">Berita/Surat Kabar</option>
                                            <option value="8">Brosur/Banner/Baliho</option>
                                        </select> <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI,
                                            </b>isikan Informasi yang Anda dapatkan, boleh lebih dari satu</span>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="checkbox mb-0">
                                    <input type="checkbox" name="setuju" />
                                    <span class="mr-3"></span> Menyatakan dengan sesungguhnya bahwa seluruh data yang
                                    telah dientri adalah benar sesuai dengan kondisi riil yang ada</label>
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center">
                                <button id="kt_login_signin_submit"
                                    class="btn btn-success font-weight-bold px-9 py-4 my-3 mx-4">Daftar</button>
                                <a href="<?php echo site_url('ppdb/home'); ?>" type="button"
                                    class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 ">
                                    <li class="fa fa-home font-size-h4"></li> Kembali ke Menu
                                </a>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signup-->
                </div>
                <!--end::Content body-->
                <!--begin::Content footer for mobile-->
                <div
                    class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                    <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 Sekolah Utsman</div>
                    <div class="d-flex order-1 order-sm-2 my-2">
                    </div>
                </div>
                <!--end::Content footer for mobile-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <div class="modal fade" id="modal_register" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Draft Formulir Dengan Email Anda </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <!--begin::Table-->
                    <span class="form-text text-dark pb-7"><b class="text-danger">*Berikut merupakan daftar pengisian
                            FORMULIR yang belum anda selesaikan, Klik "ISI" untuk melanjutkan!</b></span>
                    <div class="table-responsive">
                        <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                            <thead>
                                <tr class="text-left text-uppercase">
                                    <th style="min-width: 250px">
                                        <span class="text-dark-75">Nama & No Formulir</span>
                                    </th>
                                    <th style="min-width: 100px">Jenjang</th>
                                    <th style="min-width: 100px">Program</th>
                                    <th style="min-width: 100px">Email</th>
                                    <th style="min-width: 130px">No WhatsApp</th>
                                    <th style="min-width: 100px">Tahun Ajaran</th>
                                    <th style="min-width: 80px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tb_register">
                            </tbody>
                        </table>
                    </div>
                    <!--end::Table-->
                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-danger font-weight-bold" data-dismiss="modal"><i
                            class="fa fa-times"></i> TETAP BIKIN BARU</button>
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
                <?php if ($contact[0]->no_handphone_tk != "" or $contact[0]->no_handphone_tk != null) {?>
                <div class="wcs_popup_person"
                    data-number="<?php echo "62" . substr($contact[0]->no_handphone_tk, 1); ?>"
                    data-default-msg="Assslamualaikum, permisi mau bertanya?">
                    <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>"
                            alt=""></div>
                    <div class="wcs_popup_person_content">
                        <div class="wcs_popup_person_name">Admin KB-TK</div>
                        <div class="wcs_popup_person_description">Petugas PPDB KB-TK</div>
                        <div class="wcs_popup_person_status">Sedang Online</div>
                    </div>
                </div>
                <?php }
if ($contact[0]->no_handphone_sd != "" or $contact[0]->no_handphone_sd != null) {?>
                <div class="wcs_popup_person"
                    data-number="<?php echo "62" . substr($contact[0]->no_handphone_sd, 1); ?>"
                    data-default-msg="Assslamualaikum, permisi mau bertanya?">
                    <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>"
                            alt=""></div>
                    <div class="wcs_popup_person_content">
                        <div class="wcs_popup_person_name">Admin SD</div>
                        <div class="wcs_popup_person_description">Petugas PPDB SD</div>
                        <div class="wcs_popup_person_status">Sedang Online</div>
                    </div>
                </div>
                <?php }
if ($contact[0]->no_handphone_smp != "" or $contact[0]->no_handphone_smp != null) {?>
                <div class="wcs_popup_person"
                    data-number="<?php echo "62" . substr($contact[0]->no_handphone_smp, 1); ?>"
                    data-default-msg="Assslamualaikum, permisi mau bertanya?">
                    <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>"
                            alt=""></div>
                    <div class="wcs_popup_person_content">
                        <div class="wcs_popup_person_name">Admin SMP</div>
                        <div class="wcs_popup_person_description">Petugas PPDB SMP</div>
                        <div class="wcs_popup_person_status">Sedang Online</div>
                    </div>
                </div>
                <?php }
if ($contact[0]->no_handphone_sma != "" or $contact[0]->no_handphone_sma != null) {?>
                <div class="wcs_popup_person"
                    data-number="<?php echo "62" . substr($contact[0]->no_handphone_sma, 1); ?>"
                    data-default-msg="Assslamualaikum, permisi mau bertanya?">
                    <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>"
                            alt=""></div>
                    <div class="wcs_popup_person_content">
                        <div class="wcs_popup_person_name">Admin SMA</div>
                        <div class="wcs_popup_person_description">Petugas PPDB SMA</div>
                        <div class="wcs_popup_person_status">Sedang Online</div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <script>
    var base_url = '<?php echo base_url(); ?>';
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
    <!--begin::Page Scripts(used by this page)-->
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/register-ppdb.js"></script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/select2.js"></script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.js">
    </script>
    <!--end::Page Scripts-->

    <script>
    var SITE_URL = "<?php echo base_url(); ?>";

    function check_email_used(email) {
        $.ajax({
            type: "post",
            url: "<?php echo site_url("/ppdb/register/check_email_register") ?>",
            data: {
                email: email
            },
            dataType: 'html',
            success: function(data) {
                $('#info_register').empty();
                var obj_data = jQuery.parseJSON(data);

                if (obj_data.status) {
                    console.log(obj_data.data);
                    var html = "";

                    for (var i = 0; i < obj_data.data.length; i++) {

                        if (obj_data.data[i].level_tingkat == "1") {
                            var bg_color = "label-success";
                            var tingkat = "KB"
                        } else if (obj_data.data[i].level_tingkat == "2") {
                            var bg_color = "label-warning";
                            var tingkat = "TK"
                        } else if (obj_data.data[i].level_tingkat == "3") {
                            var bg_color = "label-danger";
                            var tingkat = "SD"
                        } else if (obj_data.data[i].level_tingkat == "4") {
                            var bg_color = "label-primary";
                            var tingkat = "SMP"
                        } else if (obj_data.data[i].level_tingkat == "5") {
                            var bg_color = "label-default";
                            var tingkat = "KB-TK"
                        } else if (obj_data.data[i].level_tingkat == "6") {
                            var bg_color = "label-info";
                            var tingkat = "DC"
                        }

                        if (obj_data.data[i].id_jalur != "1") {
                            var jalur = "REGULER";
                        } else if (obj_data.data[i].id_jalur == "2") {
                            var jalur = "ICP";
                        }

                        html +=
                            "<tr>" +
                            "<td>" +
                            `<div class="d-flex align-items-center">
									<div class="symbol symbol-40 symbol-warning mr-4 label-danger">
										<span class="symbol-label font-size-h4 font-weight-bold">
											<i class="fa fa-user"></i>
										</span>
									</div>
									<div class="pt-4">
										<span class="text-red font-weight-bolder font-size-lg">
											${obj_data.data[i].nama_calon_siswa}
										</span>
										<p class="text-danger font-size-sm font-weight-bold">
											${obj_data.data[i].nomor_formulir}
										</p>
									</div>
								</div>` +
                            "</td>" +
                            "<td class='font-weight-bolder'>" +
                            `<span class="label label-lg font-weight-bolder ${bg_color} label-inline">
									${tingkat}
								</span>` +
                            "</td>" +
                            "<td class='font-weight-bolder'>" +
                            `<span class="label label-lg font-weight-bolder label-default label-inline">
									${jalur}
								</span>` +
                            "</td>" +
                            "<td>" +
                            `<span class="text-dark-75 font-weight-bolder d-block font-size-lg">
									${obj_data.data[i].email_orangtua}
								</span>` +
                            "</td>" +
                            "<td>" +
                            `<span class="text-dark-75 font-weight-bolder d-block font-size-lg">
									${obj_data.data[i].nomor_wa}
								</span>` +
                            "</td>" +
                            "<td>" +
                            `<span class="text-dark-75 font-weight-bolder d-block font-size-lg">
									${obj_data.data[i].tahun_ajaran}
								</span>` +
                            "</td>" +
                            '<td>' +
                            `<a href="${SITE_URL}/ppdb/register/status_fulfillment_register/${obj_data.data[i].nomor_formulir_enc}" class="btn btn-light-primary btn-sm font-weight-bolder font-size-sm">
									<i class="fa fa-pen"></i> ISI
								</a>` +
                            "</td>" +
                            "</tr>";
                    }
                    $("#tb_register").html(html);
                    $("#modal_register").modal('show')
                    $('<span class="form-text text-dark"><b class="text-danger">*Email yang Anda daftarkan belum melanjutkan pengisian FORMULIR sebelumnya, <a href="#" class="font-weight-bold" data-toggle="modal" data-target="#modal_register">KLIK DISINI</a> untuk melanjutkan!</b></span>')
                        .appendTo('#info_register');
                } else {
                    console.log("empty")
                }
            },
            error: function(result) {
                console.log(result);
            }
        });

    }
    </script>
    <script>
    $('#kt_select2_3').select2({
        placeholder: "Pilih semua yang sesuai",
    });
    var id_ting;
    $("#tingkat").change(function() {
        id_ting = $(this).val();
        if (id_ting == 3) {
            $("select[name='id_jalur']").prop('selectedIndex', 0);
            $("select[name='id_jalur'] option[value='2']").prop("disabled", false);
        } else {
            $("select[name='id_jalur']").prop('selectedIndex', 0);
            $("select[name='id_jalur'] option[value='2']").prop("disabled", true);
        }
        return false;
    });
    var id_jalur;
    $("#jalur").change(function() {
        id_jalur = $(this).val();
        if (id_jalur == 2) {
            Swal.fire("Pemberitahuan!",
                "Siswa yang dinyatakan tidak lolos program ICP, akan dialihkan ke program Reguler dengan biaya mengikuti program Reguler. Terima kasih!",
                "warning");
            $('<span class="form-text text-dark"><b class="text-danger">*Siswa yang dinyatakan tidak lolos program ICP, akan dialihkan ke program Reguler dengan biaya mengikuti program Reguler. Terima kasih!</b></span>')
                .appendTo('#content');
        } else {
            $('#content').empty();
        }
        return false;
    });
    $('#example_1').whatsappChatSupport();
    </script>
</body>
<div class="modal fade" id="modal_view_schedule" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
    role="dialog">
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
                                        <span
                                            class="label label-light-success font-weight-bolder label-inline ml-2"><?php echo ucwords(strtolower($value->tanggal_jadwal)); ?></span>
                                        <span
                                            class="label label-light-primary font-weight-bolder label-inline ml-2"><?php echo ucwords(strtolower($value->jam_jadwal)); ?></span>
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
} //ngatur nomor urut
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
