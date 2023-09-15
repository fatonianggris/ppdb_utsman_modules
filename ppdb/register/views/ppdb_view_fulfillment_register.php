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
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/login/classic/login-2.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/wizard/wizard-2.css" rel="stylesheet"
        type="text/css">

    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/prismjs/prismjs.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/fonts/dropify.css" rel="stylesheet"
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

<body id="kt_body"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
                style="background-image: url('<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/bg-3.jpg');">
                <div class="login-form p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-5">
                        <a href="#">
                            <img src="<?php echo base_url() . $page[0]->logo_website; ?>" class="max-h-120px" alt="" />
                        </a>
                    </div>
                    <div class="mb-10 text-center">
                        <p class="font-mobile font-weight-boldest text-success ">Pengisian Formulir!</p>
                        <div class="font-weight-bold text-success font-size-lg">Silahakn mengisi formulir data diri
                            Anda, Berikut merupakan kolom formulir pengisian:</div>

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
                                    <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first"
                                        data-wizard-clickable="false">
                                        <!--begin: Wizard Nav-->
                                        <div class="wizard-nav border-right py-5 px-5 py-lg-15 px-lg-10">
                                            <!--begin::Wizard Step 1 Nav-->
                                            <div class="wizard-steps">
                                                <div class="wizard-step" data-wizard-type="step"
                                                    data-wizard-state="current">
                                                    <div class="wizard-wrapper">
                                                        <div class="wizard-icon">
                                                            <span class="svg-icon svg-icon-2x">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path
                                                                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <div class="wizard-label">
                                                            <h3 class="wizard-title">Biodata Siswa</h3>
                                                            <div class="wizard-desc">Tambahkan Data Diri Siswa</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 1 Nav-->
                                                <!--begin::Wizard Step 2 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-wrapper">
                                                        <div class="wizard-icon">
                                                            <span class="svg-icon svg-icon-2x">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Compass.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                                        <path
                                                                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                            fill="#000000" fill-rule="nonzero"
                                                                            opacity="0.3" />
                                                                        <path
                                                                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <div class="wizard-label">
                                                            <h3 class="wizard-title">Biodata Orang Tua</h3>
                                                            <div class="wizard-desc">Tambahkan Data Orangtua Siswa</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 2 Nav-->
                                                <!--begin::Wizard Step 3 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-wrapper">
                                                        <div class="wizard-icon">
                                                            <span class="svg-icon svg-icon-2x">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z"
                                                                            fill="#000000" fill-rule="nonzero" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <div class="wizard-label">
                                                            <h3 class="wizard-title">Data Alamat Siswa</h3>
                                                            <div class="wizard-desc">Tambahkan Data Alamat Siswa</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 3 Nav-->
                                                <!--begin::Wizard Step 4 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-wrapper">
                                                        <div class="wizard-icon">
                                                            <span class="svg-icon svg-icon-2x">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                        <path
                                                                            d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z"
                                                                            fill="#000000" />
                                                                        <path
                                                                            d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z"
                                                                            fill="#000000" />
                                                                        <path
                                                                            d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z"
                                                                            fill="#000000" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <div class="wizard-label">
                                                            <h3 class="wizard-title">Data Periodik</h3>
                                                            <div class="wizard-desc">Tambahkan Data Periodik Siswa</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 4 Nav-->
                                                <!--begin::Wizard Step 5 Nav-->
                                                <div class="wizard-step" data-wizard-type="step">
                                                    <div class="wizard-wrapper">
                                                        <div class="wizard-icon">
                                                            <span class="svg-icon svg-icon-2x">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                        <path
                                                                            d="M11,3 L11,11 C11,11.0862364 11.0109158,11.1699233 11.0314412,11.2497543 C10.4163437,11.5908673 10,12.2468125 10,13 C10,14.1045695 10.8954305,15 12,15 C13.1045695,15 14,14.1045695 14,13 C14,12.2468125 13.5836563,11.5908673 12.9685588,11.2497543 C12.9890842,11.1699233 13,11.0862364 13,11 L13,3 L17.7925828,12.5851656 C17.9241309,12.8482619 17.9331722,13.1559315 17.8173006,13.4262985 L15.1298744,19.6969596 C15.051085,19.8808016 14.870316,20 14.6703019,20 L9.32969808,20 C9.12968402,20 8.94891496,19.8808016 8.87012556,19.6969596 L6.18269936,13.4262985 C6.06682778,13.1559315 6.07586907,12.8482619 6.2074172,12.5851656 L11,3 Z"
                                                                            fill="#000000" />
                                                                        <path
                                                                            d="M10,21 L14,21 C14.5522847,21 15,21.4477153 15,22 L15,23 L9,23 L9,22 C9,21.4477153 9.44771525,21 10,21 Z"
                                                                            fill="#000000" opacity="0.3" />
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                        </div>
                                                        <div class="wizard-label">
                                                            <h3 class="wizard-title">Pernyataan dan Persetujuan</h3>
                                                            <div class="wizard-desc">Konfirmasi Pernyataan dan
                                                                Persetujuan</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Wizard Step 5 Nav-->
                                            </div>
                                        </div>
                                        <!--end: Wizard Nav-->
                                        <!--begin: Wizard Body-->
                                        <div class="wizard-body py-5 px-5 py-lg-15 px-lg-15">
                                            <!--begin: Wizard Form-->
                                            <div class="row px-4">
                                                <div class="col-xl-12">
                                                    <form class="form" method="POST"
                                                        action="<?php echo site_url('/ppdb/register/post_final_registration/' . paramEncrypt($register[0]->nomor_formulir)); ?>"
                                                        enctype="multipart/form-data" id="kt_form_student">
                                                        <input type="hidden" class="txt_csrfname"
                                                            name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                                            value="<?php echo $this->security->get_csrf_hash(); ?>">
                                                        <!--begin::Wizard Step 1-->
                                                        <div class="pb-5" data-wizard-type="step-content"
                                                            data-wizard-state="current">
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi
                                                                Personal Siswa:</h3>
                                                            <div class="row">

                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>NISN</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-user"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="nisn"
                                                                                value="<?php echo @$register[0]->nisn; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                id="kt_maxlength_nisn" maxlength="10"
                                                                                placeholder="Inputkan NISN Siswa" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI JIKA
                                                                                ADA, </b>isikan NISN jika Ada</span>
                                                                        <small id="info"
                                                                            class="form-control-feedback"></small>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Nomor Formulir Calon Siswa</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-file-text"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="nomor_formulir"
                                                                                readonly=""
                                                                                value="<?php echo @$register[0]->nomor_formulir; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                placeholder="Nomor Formulir Calon Siswa" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*AUTO
                                                                                GENERATE</b></span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>

                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>NIK Siswa</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-credit-card"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="nik"
                                                                                value="<?php echo @$register[0]->nik; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                id="kt_maxlength_nik" maxlength="16"
                                                                                placeholder="Inputkan NIK Siswa" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan NIK Siswa yang ada di KK</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>No. Akta Kelahiran</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-file-text"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="no_akta_kelahiran"
                                                                                value="<?php echo @$register[0]->no_akta_kelahiran; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                placeholder="Inputkan Nomor Akra Kelahiran" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan No. Akta Kelahiran siswa</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-8">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap Siswa</label>
                                                                        <input type="text" name="nama_lengkap"
                                                                            value="<?php echo @$register[0]->nama_calon_siswa; ?>"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            placeholder="Inputkan Nama Lengkap Siswa" />
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Nama Lengkap sesuai akta
                                                                            kelahiran</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Nama Panggilan Siswa</label>
                                                                        <input type="text" name="nama_panggilan"
                                                                            value="<?php echo @$register[0]->nama_panggilan; ?>"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            placeholder="Inputkan Nama Panggilan Siswa" />
                                                                        <span class="form-text text-dark"><b>*TIDAK
                                                                                WAJIB DIISI, </b>isikan Nama Panggilan
                                                                            siswa jika ada</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-5">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Tempat Lahir</label>
                                                                        <input type="text" name="tempat_lahir"
                                                                            value="<?php echo @$register[0]->tempat_lahir; ?>"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            placeholder="Inputkan Tempat Lahir Siswa" />
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tempat Lahir sesuai akta
                                                                            kelahiran</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Tanggal Lahir</label>
                                                                        <div class="input-group input-group-lg input-group-solid"
                                                                            id="kt_daterangepicker_5">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="tanggal_lahir"
                                                                                value="<?php echo @$register[0]->tanggal_lahir; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                readonly="readonly"
                                                                                placeholder="Inputkan Tanggal Lahir" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tanggal Lahir sesuai akta
                                                                            kelahiran</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <!--begin::Select-->
                                                                    <div class="form-group">
                                                                        <label>Jenis Kelamin</label>
                                                                        <select name="jenis_kelamin"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <?php if (@$register[0]->jenis_kelamin == "" or @$register[0]->jenis_kelamin == null) {?>
                                                                            <option value="">Pilih JK</option>
                                                                            <?php } else {?>
                                                                            <option
                                                                                value="<?php echo $register[0]->jenis_kelamin; ?>"
                                                                                selected>
                                                                                <?php
if ($register[0]->jenis_kelamin == 1) {
    echo 'Laki-Laki';
} else if ($register[0]->jenis_kelamin == 2) {
    echo 'Perempuan';
}
    ?>
                                                                            </option>
                                                                            <?php }?>
                                                                            <option value="1">Laki-Laki</option>
                                                                            <option value="2">Perempuan</option>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Jenis Kelamin</span>
                                                                    </div>
                                                                    <!--end::Select-->
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-3">
                                                                    <!--begin::Select-->
                                                                    <div class="form-group">
                                                                        <label>Agama</label>
                                                                        <select name="agama"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <?php if (@$register[0]->agama == "" or @$register[0]->agama == null) {?>
                                                                            <option value="">Pilih Agama</option>
                                                                            <?php } else {?>
                                                                            <option
                                                                                value="<?php echo @$register[0]->agama; ?>"
                                                                                selected>
                                                                                <?php
if ($register[0]->agama == 1) {
    echo 'Islam';
} else if ($register[0]->agama == 2) {
    echo 'Kristen';
} else if ($register[0]->agama == 3) {
    echo 'Hindu';
} else if ($register[0]->agama == 4) {
    echo 'Budha';
} else if ($register[0]->agama == 5) {
    echo 'Lainnya.';
}
    ?>
                                                                            </option>
                                                                            <?php }?>

                                                                            <option value="1">Islam</option>
                                                                            <option value="2">Kristen</option>
                                                                            <option value="3">Hindu</option>
                                                                            <option value="4">Budha</option>
                                                                            <option value="5">Lainnya.</option>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Agama siswa</span>
                                                                    </div>
                                                                    <!--end::Select-->
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>RomBel</label>
                                                                        <input name="rombel" type="text"
                                                                            value="<?php echo @$register[0]->rombel; ?>"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            placeholder="Inputkan Rombel Siswa" />
                                                                        <span class="form-text text-dark"><b>*TIDAK
                                                                                WAJIB, </b>isikan RomBel
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-group">
                                                                        <label>Tahun Ajaran</label>
                                                                        <select name="id_tahun_ajaran"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <?php
if (!empty($schoolyear)) {
    foreach ($schoolyear as $key => $value_sch) {
        if ($register[0]->id_tahun_ajaran == $value_sch->id_tahun_ajaran) {
            ?>
                                                                            <option
                                                                                value="<?php echo @$value_sch->id_tahun_ajaran; ?>"
                                                                                selected>
                                                                                <?php echo ucwords(strtolower($value_sch->tahun_awal . "/" . $value_sch->tahun_akhir)); ?>
                                                                            </option>
                                                                            <?php
} else {?>
                                                                            <option
                                                                                value="<?php echo @$value_sch->id_tahun_ajaran; ?>">
                                                                                <?php echo ucwords(strtolower($value_sch->tahun_awal . "/" . $value_sch->tahun_akhir)); ?>
                                                                            </option>
                                                                            <?php }
    }
}
?>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tahun Ajaran</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Asal Sekolah</label>
                                                                        <input name="asal_sekolah" type="text"
                                                                            value="<?php echo @$register[0]->asal_sekolah; ?>"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            placeholder="Inputkan Asal Sekolah Siswa" />
                                                                        <span class="form-text text-dark"><b>*TIDAK
                                                                                WAJIB DIISI, </b>isikan Asal Sekolah
                                                                            jika pernah bersekolah</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>

                                                            <div class="separator separator-dashed my-5"></div>
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi
                                                                Kontak Siswa:</h3>

                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Nomor HP Siswa/Orangtua</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span
                                                                                    class="input-group-text font-weight-bold">
                                                                                    (62)
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="nomor_handphone"
                                                                                value="<?php echo @$register[0]->nomor_wa; ?>"
                                                                                id="kt_maxlength_nohp"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                maxlength="13" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Nomor HP Siswa/Orangtua, Contoh:
                                                                            089526352763</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Nomor Telepon</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-phone"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="nomor_telepon"
                                                                                value="<?php echo @$register[0]->nomor_telepon; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Nomor Telepon" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b>*TIDAK
                                                                                WAJIB DIISI, </b>isikan Nomor Telepon
                                                                            jika ada</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Email Siswa/Orangtua</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="email" type="email_orangtua"
                                                                                value="<?php echo @$register[0]->email_orangtua; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Email Siswa"
                                                                                readonly="" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Email Siswa/Orangtua</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 1-->
                                                        <!--begin: Wizard Step 2-->
                                                        <div class="pb-5" data-wizard-type="step-content">
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi Ayah
                                                                Siswa:</h3>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap Ayah</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input type="text" name="nama_ayah"
                                                                                value="<?php echo @$register[0]->nama_ayah; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                placeholder="Inputkan Nama Lengkap Ayah" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Nama Lengkap Ayah</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>NIK KTP</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-credit-card"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="nik_ayah"
                                                                                value="<?php echo @$register[0]->nik_ayah; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                id="kt_maxlength_nik_ayah"
                                                                                maxlength="16"
                                                                                placeholder="Inputkan NIK Ayah" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan NIK Ayah sesuai KTP</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <!--begin::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Tempat Lahir Ayah</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="tempat_lahir_ayah" type="text"
                                                                                value="<?php echo @$register[0]->tempat_lahir_ayah; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Tempat Lahir" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tempat Lahir Ayah</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Tanggal Lahir Ayah</label>
                                                                        <div class="input-group input-group-lg input-group-solid"
                                                                            id="kt_daterangepicker_ayah">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input name="tanggal_lahir_ayah" type="text"
                                                                                value="<?php echo @$register[0]->tanggal_lahir_ayah; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                readonly="readonly"
                                                                                placeholder="Inputkan Tanggal Lahir Ayah" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tanggal Lahir Ayah</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Pekerjaan Ayah</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input type="text" name="pekerjaan_ayah"
                                                                                value="<?php echo @$register[0]->pekerjaan_ayah; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Pekerjaan Ayah" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Pekerjaan Ayah</span>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-5">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Pendidikan Ayah</label>
                                                                        <!--begin::Select-->
                                                                        <select name="pendidikan_ayah"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <?php if (@$register[0]->pendidikan_ayah == "" or @$register[0]->pendidikan_ayah == null) {?>
                                                                            <option value="">Pilih Pendidikan Ayah
                                                                            </option>
                                                                            <?php } else {?>
                                                                            <option
                                                                                value="<?php echo @$register[0]->pendidikan_ayah; ?>"
                                                                                selected>
                                                                                <?php
if ($register[0]->pendidikan_ayah == 1) {
    echo 'Tidak Sekolah';
} else if ($register[0]->pendidikan_ayah == 2) {
    echo 'SD';
} else if ($register[0]->pendidikan_ayah == 3) {
    echo 'SLTP';
} else if ($register[0]->pendidikan_ayah == 4) {
    echo 'SLTA';
} else if ($register[0]->pendidikan_ayah == 5) {
    echo 'D-I/D-II';
} else if ($register[0]->pendidikan_ayah == 6) {
    echo 'D-III';
} else if ($register[0]->pendidikan_ayah == 7) {
    echo 'D-IV/S1';
} else if ($register[0]->pendidikan_ayah == 8) {
    echo 'S2/S3';
}
    ?>
                                                                            </option>
                                                                            <?php }?>

                                                                            <option value="1">Tidak Sekolah</option>
                                                                            <option value="2">SD</option>
                                                                            <option value="3">SLTP</option>
                                                                            <option value="4">SLTA</option>
                                                                            <option value="5">D-I/D-II</option>
                                                                            <option value="6">D-III</option>
                                                                            <option value="7">D-IV/S1</option>
                                                                            <option value="8">S2/S3</option>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Pendidikan Ayah</span>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-5">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Penghasilan Ayah</label>
                                                                        <select name="penghasilan_ayah"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <?php if (@$register[0]->penghasilan_ayah == "" or @$register[0]->penghasilan_ayah == null) {?>
                                                                            <option value="">Pilih Penghasilan Ayah
                                                                            </option>
                                                                            <?php } else {?>
                                                                            <option
                                                                                value="<?php echo @$register[0]->penghasilan_ayah; ?>"
                                                                                selected>
                                                                                <?php
if ($register[0]->penghasilan_ayah == 1) {
    echo 'Kurang dari Rp. 1.500.000';
} else if ($register[0]->penghasilan_ayah == 2) {
    echo 'Rp. 1.500.000 - Rp.2.500.000';
} else if ($register[0]->penghasilan_ayah == 3) {
    echo 'Rp. 2.500.000 - RP.3.500.000';
} else if ($register[0]->penghasilan_ayah == 4) {
    echo 'Rp. 3.500.000 - Rp.4.500.000';
} else if ($register[0]->penghasilan_ayah == 5) {
    echo 'Rp. 4.500.000 - Rp.5.500.000';
} else if ($register[0]->penghasilan_ayah == 6) {
    echo 'Lebih dari Rp. 5.500.000';
}
    ?>
                                                                            </option>
                                                                            <?php }?>

                                                                            <option value="1">Kurang dari Rp. 1.500.000
                                                                            </option>
                                                                            <option value="2">Rp. 1.500.000 - Rp.
                                                                                2.500.000</option>
                                                                            <option value="3">Rp. 2.500.000 - RP.
                                                                                3.500.000</option>
                                                                            <option value="4">Rp. 3.500.000 - Rp.
                                                                                4.500.000</option>
                                                                            <option value="5">Rp. 4.500.000 - Rp.
                                                                                5.500.000</option>
                                                                            <option value="6">Lebih dari Rp. 5.500.000
                                                                            </option>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Penghasilan Ayah</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <label>Jadikan Wali?</label>
                                                                    <span class="switch switch-lg switch-icon">
                                                                        <label>
                                                                            <?php if (@$register[0]->status_wali == "" or @$register[0]->status_wali == null or @$register[0]->status_wali == 0) {?>
                                                                            <input type="checkbox" id="wali_ayah"
                                                                                name="status_wali" value="1">
                                                                            <span></span>
                                                                            <?php } else if (@$register[0]->status_wali == 1) {?>
                                                                            <input type="checkbox" checked
                                                                                id="wali_ayah" name="status_wali"
                                                                                value="1">
                                                                            <span></span>
                                                                            <?php } else if (@$register[0]->status_wali == 2) {?>
                                                                            <input type="checkbox" id="wali_ayah"
                                                                                name="status_wali" disabled>
                                                                            <span></span>
                                                                            <?php }?>
                                                                        </label>
                                                                    </span>
                                                                    <small id="info_checkbox_ayah"
                                                                        class="fv-plugins-message-container text-danger"></small>
                                                                </div>
                                                            </div>

                                                            <div class="separator separator-dashed my-5"></div>
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi Ibu
                                                                Siswa:</h3>

                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap Ibu</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input type="text" name="nama_ibu"
                                                                                value="<?php echo @$register[0]->nama_ibu; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                placeholder="Inputkan Nama Lengkap Ibu" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Nama Lengkap Ibu</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>NIK KTP</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-credit-card"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="nik_ibu"
                                                                                value="<?php echo @$register[0]->nik_ibu; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                id="kt_maxlength_nik_ibu" maxlength="16"
                                                                                placeholder="Inputkan NIK Ibu" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan NIK Ibu sesuai KTP</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <!--begin::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Tempat Lahir Ibu</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="tempat_lahir_ibu" type="text"
                                                                                value="<?php echo @$register[0]->tempat_lahir_ibu; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Tempat Lahir" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tempat Lahir Ibu</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Tanggal Lahir Ibu</label>
                                                                        <div class="input-group input-group-lg input-group-solid"
                                                                            id="kt_daterangepicker_ibu">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="tanggal_lahir_ibu"
                                                                                value="<?php echo @$register[0]->tanggal_lahir_ibu; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                readonly="readonly"
                                                                                placeholder="Inputkan Tanggal Lahir Ibu" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tanggal Lahir Ibu</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Pekerjaan Ibu</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="pekerjaan_ibu" type="text"
                                                                                value="<?php echo @$register[0]->pekerjaan_ibu; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Pekerjaan Ibu" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Pekerjaan Ibu</span>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-5">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Pendidikan Ibu</label>
                                                                        <!--begin::Select-->
                                                                        <select name="pendidikan_ibu"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <?php if (@$register[0]->pendidikan_ibu == "" or @$register[0]->pendidikan_ibu == null) {?>
                                                                            <option value="">Pilih Pendidikan Ibu
                                                                            </option>
                                                                            <?php } else {?>
                                                                            <option
                                                                                value="<?php echo @$register[0]->pendidikan_ibu; ?>"
                                                                                selected>
                                                                                <?php
if ($register[0]->pendidikan_ibu == 1) {
    echo 'Tidak Sekolah';
} else if ($register[0]->pendidikan_ibu == 2) {
    echo 'SD';
} else if ($register[0]->pendidikan_ibu == 3) {
    echo 'SLTP';
} else if ($register[0]->pendidikan_ibu == 4) {
    echo 'SLTA';
} else if ($register[0]->pendidikan_ibu == 5) {
    echo 'D-I/D-II';
} else if ($register[0]->pendidikan_ibu == 6) {
    echo 'D-III';
} else if ($register[0]->pendidikan_ibu == 7) {
    echo 'D-IV/S1';
} else if ($register[0]->pendidikan_ibu == 8) {
    echo 'S2/S3';
}
    ?>
                                                                            </option>
                                                                            <?php }?>
                                                                            <option value="1">Tidak Sekolah</option>
                                                                            <option value="2">SD</option>
                                                                            <option value="3">SLTP</option>
                                                                            <option value="4">SLTA</option>
                                                                            <option value="5">D-I/D-II</option>
                                                                            <option value="6">D-III</option>
                                                                            <option value="7">D-IV/S1</option>
                                                                            <option value="8">S2/S3</option>
                                                                        </select>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Pendidikan Ibu</span>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-5">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Penghasilan Ibu</label>
                                                                        <select name="penghasilan_ibu"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <?php if (@$register[0]->penghasilan_ibu == "" or @$register[0]->penghasilan_ibu == null) {?>
                                                                            <option value="">Pilih Penghasilan Ibu
                                                                            </option>
                                                                            <?php } else {?>
                                                                            <option
                                                                                value="<?php echo @$register[0]->penghasilan_ibu; ?>"
                                                                                selected>
                                                                                <?php
if ($register[0]->penghasilan_ibu == 1) {
    echo 'Kurang dari Rp. 1.500.000';
} else if ($register[0]->penghasilan_ibu == 2) {
    echo 'Rp. 1.500.000 - Rp.2.500.000';
} else if ($register[0]->penghasilan_ibu == 3) {
    echo 'Rp. 2.500.000 - RP.3.500.000';
} else if ($register[0]->penghasilan_ibu == 4) {
    echo 'Rp. 3.500.000 - Rp.4.500.000';
} else if ($register[0]->penghasilan_ibu == 5) {
    echo 'Rp. 4.500.000 - Rp.5.500.000';
} else if ($register[0]->penghasilan_ibu == 6) {
    echo 'Lebih dari Rp. 5.500.000';
}
    ?>
                                                                            </option>
                                                                            <?php }?>

                                                                            <option value="1"> Kurang dari Rp. 1.500.000
                                                                            </option>
                                                                            <option value="2">Rp. 1.500.000 - Rp.
                                                                                2.500.000</option>
                                                                            <option value="3">Rp. 2.500.000 - RP.
                                                                                3.500.000</option>
                                                                            <option value="4">Rp. 3.500.000 - Rp.
                                                                                4.500.000</option>
                                                                            <option value="5">Rp. 4.500.000 - Rp.
                                                                                5.500.000</option>
                                                                            <option value="6"> Lebih dari Rp. 5.500.000
                                                                            </option>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Penghasilan Ibu</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <label>Jadikan Wali?</label>
                                                                    <span class="switch switch-lg switch-icon">
                                                                        <label>
                                                                            <?php if (@$register[0]->status_wali == "" or @$register[0]->status_wali == null or @$register[0]->status_wali == 0) {?>
                                                                            <input type="checkbox" id="wali_ibu"
                                                                                name="status_wali" value="2">
                                                                            <span></span>
                                                                            <?php } else if (@$register[0]->status_wali == 2) {?>
                                                                            <input type="checkbox" id="wali_ibu" checked
                                                                                name="status_wali" value="2">
                                                                            <span></span>
                                                                            <?php } else if (@$register[0]->status_wali == 1) {?>
                                                                            <input type="checkbox" id="wali_ibu"
                                                                                disabled name="status_wali">
                                                                            <span></span>
                                                                            <?php }?>
                                                                        </label>
                                                                    </span>
                                                                    <small id="info_checkbox_ibu"
                                                                        class="fv-plugins-message-container text-danger"></small>
                                                                </div>
                                                            </div>

                                                            <div class="separator separator-dashed my-5"></div>
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi Wali
                                                                Siswa:</h3>

                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap Wali</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="nama_wali" type="text"
                                                                                value="<?php echo @$register[0]->nama_wali; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                placeholder="Inputkan Nama Lengkap Wali" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Nama Lengkap Wali</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>NIK KTP</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-credit-card"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input name="nik_wali" type="text"
                                                                                value="<?php echo @$register[0]->nik_wali; ?>"
                                                                                class="form-control form-control-solid form-control-lg"
                                                                                id="kt_maxlength_nik_wali"
                                                                                maxlength="16"
                                                                                placeholder="Inputkan NIK Wali" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan NIK Wali sesuai KTP</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <!--begin::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Tempat Lahir Wali</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="tempat_lahir_wali" type="text"
                                                                                value="<?php echo @$register[0]->tempat_lahir_wali; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Tempat Lahir" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tempat Lahir Wali</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Tanggal Lahir Wali</label>
                                                                        <div class="input-group input-group-lg input-group-solid"
                                                                            id="kt_daterangepicker_wali">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input type="text" name="tanggal_lahir_wali"
                                                                                value="<?php echo @$register[0]->tanggal_lahir_wali; ?>"
                                                                                class="form-control input-group-lg input-group-solid"
                                                                                readonly=""
                                                                                placeholder="Inputkan Tanggal Lahir Wali" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tanggal Lahir Wali</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Pekerjaan Wali</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="pekerjaan_wali" type="text"
                                                                                value="<?php echo @$register[0]->pekerjaan_wali; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Pekerjaan Wali" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Pekerjaan Wali</span>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-5">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Pendidikan Wali</label>
                                                                        <!--begin::Select-->
                                                                        <select name="pendidikan_wali"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <?php if (@$register[0]->pendidikan_wali == "" or @$register[0]->pendidikan_wali == null) {?>
                                                                            <option value="">Pilih Pendidikan Wali
                                                                            </option>
                                                                            <?php } else {?>
                                                                            <option
                                                                                value="<?php echo @$register[0]->pendidikan_wali; ?>"
                                                                                selected>
                                                                                <?php
if ($register[0]->pendidikan_wali == 1) {
    echo 'Tidak Sekolah';
} else if ($register[0]->pendidikan_wali == 2) {
    echo 'SD';
} else if ($register[0]->pendidikan_wali == 3) {
    echo 'SLTP';
} else if ($register[0]->pendidikan_wali == 4) {
    echo 'SLTA';
} else if ($register[0]->pendidikan_wali == 5) {
    echo 'D-I/D-II';
} else if ($register[0]->pendidikan_wali == 6) {
    echo 'D-III';
} else if ($register[0]->pendidikan_wali == 7) {
    echo 'D-IV/S1';
} else if ($register[0]->pendidikan_wali == 8) {
    echo 'S2/S3';
}
    ?>
                                                                            </option>
                                                                            <?php }?>
                                                                            <option value="1">Tidak Sekolah</option>
                                                                            <option value="2">SD</option>
                                                                            <option value="3">SLTP</option>
                                                                            <option value="4">SLTA</option>
                                                                            <option value="5">D-I/D-II</option>
                                                                            <option value="6">D-III</option>
                                                                            <option value="7">D-IV/S1</option>
                                                                            <option value="8">S2/S3</option>
                                                                        </select>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Pendidikan Wali</span>
                                                                        <!--end::Select-->
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-5">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Penghasilan Wali</label>
                                                                        <select name="penghasilan_wali"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <?php if (@$register[0]->penghasilan_wali == "" or @$register[0]->penghasilan_wali == null) {?>
                                                                            <option value="">Pilih Penghasilan nik_wali
                                                                            </option>
                                                                            <?php } else {?>
                                                                            <option
                                                                                value="<?php echo @$register[0]->penghasilan_wali; ?>"
                                                                                selected>
                                                                                <?php
if ($register[0]->penghasilan_wali == 1) {
    echo 'Kurang dari Rp. 1.500.000';
} else if ($register[0]->penghasilan_wali == 2) {
    echo 'Rp. 1.500.000 - Rp.2.500.000';
} else if ($register[0]->penghasilan_wali == 3) {
    echo 'Rp. 2.500.000 - RP.3.500.000';
} else if ($register[0]->penghasilan_wali == 4) {
    echo 'Rp. 3.500.000 - Rp.4.500.000';
} else if ($register[0]->penghasilan_wali == 5) {
    echo 'Rp. 4.500.000 - Rp.5.500.000';
} else if ($register[0]->penghasilan_wali == 6) {
    echo 'Lebih dari Rp. 5.500.000';
}
    ?>
                                                                            </option>
                                                                            <?php }?>

                                                                            <option value="1"> Kurang dari Rp. 1.500.000
                                                                            </option>
                                                                            <option value="2">Rp. 1.500.000 - Rp.
                                                                                2.500.000</option>
                                                                            <option value="3">Rp. 2.500.000 - RP.
                                                                                3.500.000</option>
                                                                            <option value="4">Rp. 3.500.000 - Rp.
                                                                                4.500.000</option>
                                                                            <option value="5">Rp. 4.500.000 - Rp.
                                                                                5.500.000</option>
                                                                            <option value="6"> Lebih dari Rp. 5.500.000
                                                                            </option>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Penghasilan Wali</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <h6 id="info_wali" class="font-size-h6"></h6>
                                                        </div>
                                                        <!--end: Wizard Step 2-->
                                                        <!--begin: Wizard Step 3-->
                                                        <div class="pb-5" data-wizard-type="step-content">
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi
                                                                Alamat KK:</h3>
                                                            <!--begin::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="form-group ">
                                                                        <label>Alamat KK Lengkap</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <textarea class="form-control"
                                                                                name="alamat_rumah_kk"
                                                                                rows="3"><?php echo @$register[0]->alamat_rumah_kk; ?></textarea>
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Alamat KK Lengkap</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group ">
                                                                        <label>Provinsi KK</label>
                                                                        <select name="provinsi_kk" id="provinsi_kk"
                                                                            class="form-control form-control-lg form-control-solid select2">
                                                                            <?php if (@$register[0]->provinsi_kk == "" or @$register[0]->provinsi_kk == null) {?>
                                                                            <option value="">Pilih Provinsi</option>
                                                                            <?php } else {?>

                                                                            <option
                                                                                value="<?php echo $register[0]->provinsi_kk; ?>"
                                                                                selected="">
                                                                                <?php echo ucwords(strtolower($register[0]->nama_provinsi_kk)); ?>
                                                                            </option>
                                                                            <?php }?>

                                                                            <?php
if (!empty($provinsi)) {
    foreach ($provinsi as $key => $value_prov_kk) {
        ?>
                                                                            <option
                                                                                value="<?php echo $value_prov_kk->id; ?>">
                                                                                <?php echo ucwords(strtolower($value_prov_kk->nama)); ?>
                                                                            </option>
                                                                            <?php
}
}
?>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>pilih Provinsi</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group ">
                                                                        <label>Kabupaten/Kota KK</label>
                                                                        <select name="kabupaten_kota_kk"
                                                                            id="kabupaten_kota_kk"
                                                                            class="form-control form-control-lg form-control-solid select2">
                                                                            <option value="">Pilih Kabupaten/Kota
                                                                            </option>

                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>pilih Kabupaten/Kota</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group ">
                                                                        <label>Kecamatan KK</label>
                                                                        <select name="kecamatan_kk" id="kecamatan_kk"
                                                                            class="form-control form-control-lg form-control-solid select2">
                                                                            <option value="">Pilih Kecamatan</option>

                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>pilih Kecamatan</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group ">
                                                                        <label>Kelurahan/Desa KK</label>
                                                                        <select name="kelurahan_desa_kk"
                                                                            id="kelurahan_desa_kk"
                                                                            class="form-control form-control-lg  form-control-solid select2">
                                                                            <option value="">Pilih Kelurahan/Desa
                                                                            </option>

                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>pilih Desa/kelurahan</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-2">
                                                                    <div class="form-group ">
                                                                        <label>RT KK</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="rt_kk" type="text"
                                                                                value="<?php echo @$register[0]->rt_kk; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                id="kt_maxlength_rt" maxlength="3" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan RT</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <div class="form-group ">
                                                                        <label>RW KK</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="rw_kk" type="text"
                                                                                value="<?php echo @$register[0]->rw_kk; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                id="kt_maxlength_rw" maxlength="3" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan RW</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-group">
                                                                        <label>Kodepos KK</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="kodepos_kk" type="text"
                                                                                value="<?php echo @$register[0]->kodepos_kk; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                id="kt_maxlength_kodepos"
                                                                                maxlength="6" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Kodepos</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <label>Jadikan Alamat Domisili?</label>
                                                                    <span class="switch switch-lg switch-icon">
                                                                        <label>
                                                                            <?php if (@$register[0]->status_alamat == "" or @$register[0]->status_alamat == null or @$register[0]->status_alamat == 0) {?>
                                                                            <input type="checkbox" id="alamat"
                                                                                name="status_alamat" value="1">
                                                                            <span></span>
                                                                            <?php } else if (@$register[0]->status_alamat == 1) {?>
                                                                            <input type="checkbox" id="alamat" checked
                                                                                name="status_alamat" value="1">
                                                                            <span></span>
                                                                            <?php }?>
                                                                        </label>
                                                                    </span>
                                                                    <small id="info_checkbox_alamat"
                                                                        class="fv-plugins-message-container text-danger"></small>
                                                                </div>
                                                                <div class="col-xl-1">
                                                                </div>
                                                            </div>
                                                            <div class="separator separator-dashed my-5"></div>
                                                            <!--end::Input-->
                                                            <!--begin::Input-->
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi
                                                                Alamat Domisili Sekarang:</h3>
                                                            <!--end::Input-->
                                                            <!--begin::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="form-group ">
                                                                        <label>Alamat Domisili Sekarang Lengkap</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <textarea class="form-control"
                                                                                name="alamat_rumah_dom" rows="3"><?php echo @$register[0]->alamat_rumah_dom; ?>
																			</textarea>
                                                                        </div>

                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Alamat Domisili Lengkap</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group ">
                                                                        <label>Provinsi Domisili</label>
                                                                        <select name="provinsi_dom" id="provinsi_dom"
                                                                            class="form-control form-control-lg form-control-solid select2">
                                                                            <?php if (@$register[0]->provinsi_dom == "" or @$register[0]->provinsi_dom == null) {?>
                                                                            <option value="">Pilih Provinsi</option>
                                                                            <?php } else {?>

                                                                            <option
                                                                                value="<?php echo $register[0]->provinsi_dom; ?>"
                                                                                selected="">
                                                                                <?php echo ucwords(strtolower($register[0]->nama_provinsi_dom)); ?>
                                                                            </option>
                                                                            <?php }?>
                                                                            <?php
if (!empty($provinsi)) {
    foreach ($provinsi as $key => $value_prov_dom) {
        ?>
                                                                            <option
                                                                                value="<?php echo $value_prov_dom->id; ?>">
                                                                                <?php echo ucwords(strtolower($value_prov_dom->nama)); ?>
                                                                            </option>
                                                                            <?php
}
}
?>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>pilih Provinsi</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group ">
                                                                        <label>Kabupaten/Kota Domisili</label>
                                                                        <select name="kabupaten_kota_dom"
                                                                            id="kabupaten_kota_dom"
                                                                            class="form-control form-control-lg  form-control-solid select2">
                                                                            <option value="">Pilih Kabupaten/Kota
                                                                            </option>

                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>pilih Kabupaten/Kota</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group ">
                                                                        <label>Kecamatan Domisili</label>
                                                                        <select name="kecamatan_dom" id="kecamatan_dom"
                                                                            class="form-control form-control-lg form-control-solid select2">
                                                                            <option value="">Pilih Kecamatan</option>

                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>pilih Kecamatan</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group ">
                                                                        <label>Kelurahan/Desa Domisili</label>
                                                                        <select name="kelurahan_desa_dom"
                                                                            id="kelurahan_desa_dom"
                                                                            class="form-control form-control-lg  form-control-solid select2">
                                                                            <option value="">Pilih Kelurahan/Desa
                                                                            </option>

                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>pilih Kelurahan/Desa</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-2">
                                                                    <div class="form-group ">
                                                                        <label>RT Dom.</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="rt_dom" type="text"
                                                                                value="<?php echo @$register[0]->rt_dom; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="RT"
                                                                                id="kt_maxlength_rt_dom"
                                                                                maxlength="3" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan RT</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">
                                                                    <div class="form-group ">
                                                                        <label>RW Dom.</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="rw_dom" type="text"
                                                                                value="<?php echo @$register[0]->rw_dom; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="RW"
                                                                                id="kt_maxlength_rw_dom"
                                                                                maxlength="3" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan RW</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-group">
                                                                        <label>Kodepos Domisili</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="kodepos_dom" type="text"
                                                                                value="<?php echo @$register[0]->kodepos_dom; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Kodepos"
                                                                                id="kt_maxlength_kodepos_dom"
                                                                                maxlength="6" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Kodepos</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-1">
                                                                </div>
                                                            </div>
                                                            <!--end::Select-->
                                                            <h6 id="info_alamat" class="font-size-h6"></h6>
                                                        </div>
                                                        <!--end: Wizard Step 3-->
                                                        <!--begin::Wizard Step 4-->
                                                        <div class="pb-5" data-wizard-type="step-content">
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi
                                                                Periodik Siswa:</h3>
                                                            <!--begin::Input-->
                                                            <div class="row">
                                                                <div class="col-xl-3">
                                                                    <div class="form-group">
                                                                        <label>Alat Transportasi</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="alat_transportasi" type="text"
                                                                                value="<?php echo @$register[0]->alat_transportasi; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Transportasi" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Alat Transportasi Siswa</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-5">
                                                                    <div class="form-group">
                                                                        <label>Jenis Tempat Tinggal</label>
                                                                        <select name="jenis_tinggal"
                                                                            class="form-control form-control-solid form-control-lg">

                                                                            <?php if (@$register[0]->jenis_tinggal == "" or @$register[0]->jenis_tinggal == null) {?>
                                                                            <option value="">Pilih Jenis Tempat Tinggal
                                                                            </option>
                                                                            <?php } else {?>
                                                                            <option
                                                                                value="<?php echo @$register[0]->jenis_tinggal; ?>"
                                                                                selected>
                                                                                <?php
if ($register[0]->jenis_tinggal == 1) {
    echo 'Bersama Orangtua';
} else if ($register[0]->jenis_tinggal == 2) {
    echo 'Asrama';
} else if ($register[0]->jenis_tinggal == 3) {
    echo 'Kos';
} else if ($register[0]->jenis_tinggal == 4) {
    echo 'Bersama Nenek/Kakek';
} else if ($register[0]->jenis_tinggal == 5) {
    echo 'Bersama Wali';
} else if ($register[0]->jenis_tinggal == 6) {
    echo 'Lainnya';
}
    ?>
                                                                            </option>
                                                                            <?php }?>
                                                                            <option value="1">Bersama Orangtua</option>
                                                                            <option value="2">Asrama</option>
                                                                            <option value="3">Kos</option>
                                                                            <option value="4">Bersama Nenek/Kakek
                                                                            </option>
                                                                            <option value="5">Bersama Wali</option>
                                                                            <option value="6">Lainnya</option>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Jenis Tempat Tinggal Siswa</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Jarak Rumah ke Sekolah</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="jarak_rumah_sekolah"
                                                                                value="<?php echo @$register[0]->jarak_rumah_sekolah; ?>"
                                                                                type="text"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Jarak Rumah - Sekolah" />
                                                                            <div class="input-group-prepend">
                                                                                <span
                                                                                    class="input-group-text font-weight-bolder">.Km</span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="form-text text-dark"><b>*TIDAK
                                                                                WAJIB DIISI, </b>isikan Jarak Rumah ke
                                                                            Sekolah</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <h6 class="ml-4 mb-5 mt-5 text-danger">Punya Saudara
                                                                    Kandung yang bersekolah di Sekolah Utsman? *isikan
                                                                    jika ada</h6>
                                                                <div class="col-xl-4">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Nama NIS Saudara</label>
                                                                        <input type="text" name="nis_saudara"
                                                                            value="<?php echo @$register[0]->nis_saudara; ?>"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            placeholder="Inputkan NIS Saudara Kandung" />
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-dark">*TIDAK WAJIB DIISI,
                                                                            </b>isikan NIS Saudara Kandung yang
                                                                            bersekolah di Utsman</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                                <div class="col-xl-8">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Nama Lengkap Saudara</label>
                                                                        <input type="text" name="nama_saudara"
                                                                            value="<?php echo @$register[0]->nama_saudara; ?>"
                                                                            class="form-control form-control-solid form-control-lg"
                                                                            placeholder="Inputkan Nama Saudara Kandung" />
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-dark">*TIDAK WAJIB DIISI,
                                                                            </b>isikan Nama Saudara Kandung yang
                                                                            bersekolah di Utsman</span>
                                                                    </div>
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Jumlah Saudara</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="jumlah_saudara" type="text"
                                                                                value="<?php echo @$register[0]->jumlah_saudara; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Jumlah Saudara" />
                                                                            <div class="input-group-prepend">
                                                                                <span
                                                                                    class="input-group-text font-weight-bolder">.Sdr</span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Jumlah Saudara</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Anak Ke-</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <div class="input-group-prepend">
                                                                                <span class="input-group-text">
                                                                                    <i class="la la-user"></i>
                                                                                </span>
                                                                            </div>
                                                                            <input name="anak_ke" type="text"
                                                                                value="<?php echo @$register[0]->anak_ke; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Anak ke-" />
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Siswa Anak ke</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-2">

                                                                </div>
                                                                <div class="col-xl-2">

                                                                </div>
                                                            </div>
                                                            <div class="separator separator-dashed my-5"></div>
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi
                                                                Jasmani Siswa:</h3>
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Berkebutuhan Khusus</label>
                                                                        <div class="radio-inline">
                                                                            <label class="radio radio-lg">
                                                                                <input type="radio"
                                                                                    name="kebutuhan_khusus"
                                                                                    checked="checked" value="0">
                                                                                <span></span>Tidak</label>
                                                                            <label class="radio radio-lg">
                                                                                <input type="radio"
                                                                                    name="kebutuhan_khusus" disabled
                                                                                    value="1">
                                                                                <span></span>Ya</label>
                                                                        </div>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>pilih salah satu</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Tinggi Badan</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="tinggi_badan" type="text"
                                                                                value="<?php echo @$register[0]->tinggi_badan; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Tinggi Badan" />
                                                                            <div class="input-group-append">
                                                                                <span
                                                                                    class="input-group-text font-weight-bolder">.Cm</span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="form-text text-dark"><b>*TIDAK
                                                                                WAJIB DIISI, </b>isikan Tinggi Badan
                                                                            Siswa</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Berat Badan</label>
                                                                        <div
                                                                            class="input-group input-group-lg input-group-solid">
                                                                            <input name="berat_badan" type="text"
                                                                                value="<?php echo @$register[0]->berat_badan; ?>"
                                                                                class="form-control form-control-lg form-control-solid"
                                                                                placeholder="Inputkan Berat Badan" />
                                                                            <div class="input-group-append">
                                                                                <span
                                                                                    class="input-group-text font-weight-bolder">.Kg</span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="form-text text-dark"><b>*TIDAK
                                                                                WAJIB DIISI, </b>isikan Berat Badan
                                                                            Siswa</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                            <div class="separator separator-dashed my-5"></div>
                                                            <h3 class="mb-10 font-weight-bold text-dark">Informasi
                                                                Jenjang Siswa:</h3>
                                                            <?php
if ($register[0]->id_jalur == 2) {?>
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*Siswa yang
                                                                                dinyatakan tidak lolos program ICP, akan
                                                                                dialihkan ke program Reguler dengan
                                                                                biaya mengikuti program Reguler. Terima
                                                                                kasih!</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php
}?>
                                                            <div class="row">
                                                                <div class="col-xl-4">
                                                                    <div class="form-group">
                                                                        <label>Tingkat Siswa</label>
                                                                        <select name="level_tingkat" id="tingkat"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <option
                                                                                value="<?php echo $register[0]->level_tingkat; ?>"
                                                                                selected>
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
                                                                            </option>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Tingkat Siswa</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4 mb-3">
                                                                    <div class="form-group">
                                                                        <label>Jalur Siswa</label>
                                                                        <select name="id_jalur"
                                                                            class="form-control form-control-solid form-control-lg">
                                                                            <option
                                                                                value="<?php echo $register[0]->id_jalur; ?>"
                                                                                selected="">
                                                                                <?php
if ($register[0]->id_jalur == 1) {
    echo 'Reguler';
} else if ($register[0]->id_jalur == 2) {
    echo 'ICP';
}
?>
                                                                            </option>
                                                                        </select>
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DIISI,
                                                                            </b>isikan Jalur Siswa</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Wizard Step 4-->
                                                        <!--begin::Wizard Step 6-->
                                                        <div class="pb-5" data-wizard-type="step-content">
                                                            <h3 class="mb-20 font-weight-bold text-dark">Pernyataan dan
                                                                Persetujuan:</h3>
                                                            <div class="row mt-5">
                                                                <div class="col-xl-1">
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <div class="checkbox-inline">
                                                                            <label class="checkbox checkbox-lg">
                                                                                <input type="checkbox"
                                                                                    name="persetujuan_1"
                                                                                    id="persetujuan_one">
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
                                                                                Menyatakan dengan sesungguhnya bahwa
                                                                                seluruh data yang telah dientri dan
                                                                                dikirimkan ke
                                                                                <b>Sekolah Islam Tepadu Utsman</b>
                                                                                melalui aplikasi Sistem Penerimaan
                                                                                Peserta Didik Baru (SPPDB)
                                                                                adalah benar sesuai dengan kondisi riil
                                                                                yang ada.
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
                                                                                <input type="checkbox"
                                                                                    name="persetujuan_2"
                                                                                    id="persetujuan_two">
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
                                                                                Apabila ternyata data yang diinputkan
                                                                                tersebut tidak benar atau palsu,
                                                                                maka siswa bersedia menerima sanksi dan
                                                                                konsekuensi sesuai ketentuan <b>Sekolah
                                                                                    Islam Terpadu Utsman</b>
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
                                                                        <span class="form-text text-dark"><b
                                                                                class="text-danger">*WAJIB DICENTANG,
                                                                            </b>Silahkan mencentang jika Anda
                                                                            setuju</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Wizard Step 6-->
                                                        <!--begin: Wizard Actions-->
                                                        <div class="d-flex justify-content-between border-top mt-5">
                                                            <div class="mr-2">
                                                                <button type="button"
                                                                    class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4"
                                                                    data-wizard-type="action-prev">Previous</button>
                                                            </div>
                                                            <div>
                                                                <button type="button"
                                                                    class="btn btn-success font-weight-bolder text-uppercase px-9 py-4"
                                                                    data-wizard-type="action-submit">Submit</button>
                                                                <button type="button"
                                                                    class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4"
                                                                    data-wizard-type="action-next">Next</button>
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
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/wizard/wizard-register.js"></script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/bootstrap-switch.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/jquery-mask.js"></script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js">
    </script>
    <script
        src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/bootstrap-daterangepicker.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/forms/widgets/bootstrap-maxlength.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/dropify.js"></script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/features/miscellaneous/toastr.js"></script>

    <script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    var csrfName = $('.txt_csrfname').attr('name');
    var csrfHash = $('.txt_csrfname').val(); // CSRF hash

    function post_personal_contact_student() {
        $.ajax({
            type: "post",
            url: "<?php echo site_url("/ppdb/register/edit_personal_contact/" . paramEncrypt($register[0]->nomor_formulir)) ?>",
            data: {
                nisn: $('[name=nisn]').val(),
                nik: $('[name=nik]').val(),
                nomor_formulir: $('[name=nomor_formulir]').val(),
                no_akta_kelahiran: $('[name=no_akta_kelahiran]').val(),
                nama_lengkap: $('[name=nama_lengkap]').val(),
                nama_panggilan: $('[name=nama_panggilan]').val(),
                tempat_lahir: $('[name=tempat_lahir]').val(),
                tanggal_lahir: $('[name=tanggal_lahir]').val(),
                jenis_kelamin: $('[name=jenis_kelamin]').val(),
                agama: $('[name=agama]').val(),
                rombel: $('[name=rombel]').val(),
                id_tahun_ajaran: $('[name=id_tahun_ajaran]').val(),
                asal_sekolah: $('[name=asal_sekolah]').val(),
                nomor_handphone: $('[name=nomor_handphone]').val(),
                nomor_telepon: $('[name=nomor_telepon]').val(),
                email: $('[name=email]').val(),
                [csrfName]: csrfHash
            },
            dataType: 'html',
            success: function(data) {
                var obj_data = jQuery.parseJSON(data);

                $('.txt_csrfname').val(obj_data.token);
                csrfHash = obj_data.token;

                if (obj_data.status) {
                    toastr.success(obj_data.messages, "Berhasil!");
                } else {
                    toastr.warning(obj_data.messages, "Peringatan!");
                }

            },
            error: function(result) {
                toastr.error("Data gagal disimpan di dalam draft.", "Peringatan!");
            }
        });

    }

    var status_wali = "<?php echo @$register[0]->status_wali; ?>";

    $('#wali_ayah').on('change', function() { // on change of state
        if (this.checked) // if changed state is "CHECKED"
        {
            status_wali = 1;
        } else {
            status_wali = "";
        }
    })

    $('#wali_ibu').on('change', function() { // on change of state
        if (this.checked) // if changed state is "CHECKED"
        {
            status_wali = 2;
        } else {
            status_wali = "";
        }
    })

    function post_parents_student() {
        $.ajax({
            type: "post",
            url: "<?php echo site_url("/ppdb/register/edit_parents_info/" . paramEncrypt($register[0]->nomor_formulir)) ?>",
            data: {
                nama_ayah: $('[name=nama_ayah]').val(),
                nik_ayah: $('[name=nik_ayah]').val(),
                tempat_lahir_ayah: $('[name=tempat_lahir_ayah]').val(),
                tanggal_lahir_ayah: $('[name=tanggal_lahir_ayah]').val(),
                pekerjaan_ayah: $('[name=pekerjaan_ayah]').val(),
                pendidikan_ayah: $('[name=pendidikan_ayah]').val(),
                penghasilan_ayah: $('[name=penghasilan_ayah]').val(),
                nama_ibu: $('[name=nama_ibu]').val(),
                nik_ibu: $('[name=nik_ibu]').val(),
                tempat_lahir_ibu: $('[name=tempat_lahir_ibu]').val(),
                tanggal_lahir_ibu: $('[name=tanggal_lahir_ibu]').val(),
                pekerjaan_ibu: $('[name=pekerjaan_ibu]').val(),
                pendidikan_ibu: $('[name=pendidikan_ibu]').val(),
                penghasilan_ibu: $('[name=penghasilan_ibu]').val(),
                nama_wali: $('[name=nama_wali]').val(),
                nik_wali: $('[name=nik_wali]').val(),
                tempat_lahir_wali: $('[name=tempat_lahir_wali]').val(),
                tanggal_lahir_wali: $('[name=tanggal_lahir_wali]').val(),
                pekerjaan_wali: $('[name=pekerjaan_wali]').val(),
                pendidikan_wali: $('[name=pendidikan_wali]').val(),
                penghasilan_wali: $('[name=penghasilan_wali]').val(),
                status_wali: status_wali,
                [csrfName]: csrfHash
            },
            dataType: 'html',
            success: function(data) {
                var obj_data = jQuery.parseJSON(data);

                $('.txt_csrfname').val(obj_data.token);
				csrfHash = obj_data.token;

                if (obj_data.status) {
                    toastr.success(obj_data.messages, "Berhasil!");
                } else {
                    toastr.warning(obj_data.messages, "Peringatan!");
                }

            },
            error: function(result) {
                toastr.error("Data gagal disimpan di dalam draft.", "Peringatan!");
            }
        });

    }

    var status_alamat = "<?php echo @$register[0]->status_alamat; ?>";

    $('#alamat').on('change', function() { // on change of state
        if (this.checked) // if changed state is "CHECKED"
        {
            status_alamat = 1;
        } else {
            status_alamat = "";

        }
    })

    function post_address_student() {
        $.ajax({
            type: "post",
            url: "<?php echo site_url("/ppdb/register/edit_address_info/" . paramEncrypt($register[0]->nomor_formulir)) ?>",
            data: {
                alamat_rumah_kk: $('[name=alamat_rumah_kk]').val(),
                provinsi_kk: $('[name=provinsi_kk]').val(),
                kabupaten_kota_kk: $('[name=kabupaten_kota_kk]').val(),
                kecamatan_kk: $('[name=kecamatan_kk]').val(),
                kelurahan_desa_kk: $('[name=kelurahan_desa_kk]').val(),
                rt_kk: $('[name=rt_kk]').val(),
                rw_kk: $('[name=rw_kk]').val(),
                kodepos_kk: $('[name=kodepos_kk]').val(),
                alamat_rumah_dom: $('[name=alamat_rumah_dom]').val(),
                provinsi_dom: $('[name=provinsi_dom]').val(),
                kabupaten_kota_dom: $('[name=kabupaten_kota_dom]').val(),
                kecamatan_dom: $('[name=kecamatan_dom]').val(),
                kelurahan_desa_dom: $('[name=kelurahan_desa_dom]').val(),
                rt_dom: $('[name=rt_dom]').val(),
                rw_dom: $('[name=rw_dom]').val(),
                kodepos_dom: $('[name=kodepos_dom]').val(),
                status_alamat: status_alamat,
                [csrfName]: csrfHash
            },
            dataType: 'html',
            success: function(data) {
                var obj_data = jQuery.parseJSON(data);

                $('.txt_csrfname').val(obj_data.token);
				csrfHash = obj_data.token;

                if (obj_data.status) {
                    toastr.success(obj_data.messages, "Berhasil!");
                } else {
                    toastr.warning(obj_data.messages, "Peringatan!");
                }

            },
            error: function(result) {
                toastr.error("Data gagal disimpan di dalam draft.", "Peringatan!");
            }
        });

    }

    function post_periodic_student() {
        $.ajax({
            type: "post",
            url: "<?php echo site_url("/ppdb/register/edit_periodic_info/" . paramEncrypt($register[0]->nomor_formulir)) ?>",
            data: {
                alat_transportasi: $('[name=alat_transportasi]').val(),
                jenis_tinggal: $('[name=jenis_tinggal]').val(),
                jarak_rumah_sekolah: $('[name=jarak_rumah_sekolah]').val(),
                jumlah_saudara: $('[name=jumlah_saudara]').val(),
                anak_ke: $('[name=anak_ke]').val(),
                nis_saudara: $('[name=nis_saudara]').val(),
                nama_saudara: $('[name=nama_saudara]').val(),
                kebutuhan_khusus: $('[name=kebutuhan_khusus]').val(),
                tinggi_badan: $('[name=tinggi_badan]').val(),
                berat_badan: $('[name=berat_badan]').val(),
                level_tingkat: $('[name=level_tingkat]').val(),
                id_jalur: $('[name=id_jalur]').val(),
                [csrfName]: csrfHash
            },
            dataType: 'html',
            success: function(data) {
                var obj_data = jQuery.parseJSON(data);

                $('.txt_csrfname').val(obj_data.token);
				csrfHash = obj_data.token;

                if (obj_data.status) {
                    toastr.success(obj_data.messages, "Berhasil!");
                } else {
                    toastr.warning(obj_data.messages, "Peringatan!");
                }

            },
            error: function(result) {
                toastr.error("Data gagal disimpan di dalam draft.", "Peringatan!");
            }
        });
    }

    // var status_persetujuan_one = "";
    // var status_persetujuan_two = "";

    // $('#persetujuan_one').on('change', function() { // on change of state
    //     if (this.checked) // if changed state is "CHECKED"
    //     {
    //         status_persetujuan_one = 1;
    //     } else {
    //         status_persetujuan_one = "";
    //     }
    //     //alert(status_persetujuan_one);
    // });

    // $('#persetujuan_two').on('change', function() { // on change of state
    //     if (this.checked) // if changed state is "CHECKED"
    //     {
    //         status_persetujuan_two = 1;
    //     } else {
    //         status_persetujuan_two = "";
    //     }
    //     //alert(status_persetujuan_two);
    // })

    // function post_final_registration() {

    //     if (status_persetujuan_one == 1 && status_persetujuan_two == 1) {
    //         $.ajax({
    //             type: "post",
    //             url: "<?php //echo site_url("/ppdb/register/edit_final_registration/" . paramEncrypt($register[0]->nomor_formulir)) ?>",
    //             data: {
    //                 level_tingkat: $('[name=level_tingkat]').val(),
    //                 nama_lengkap: $('[name=nama_lengkap]').val(),
    //                 nomor_formulir: $('[name=nomor_formulir]').val()
    //             },
    //             dataType: 'html',
    //             success: function(data) {
    //                 var obj_data = jQuery.parseJSON(data);

    //                 if (obj_data.status == false) {
    //                     toastr.warning(obj_data.messages, "Peringatan!");
    //                 }
    //             },
    //             error: function(result) {
    //                 toastr.error("Data gagal disimpan, coba lagi!.", "Peringatan!");
    //             }
    //         });
    //     } else {
    //         Swal.fire({
    //             text: "Harap Centang Persetujuan terlebih dahulu!",
    //             icon: "error",
    //             buttonsStyling: false,
    //             confirmButtonText: "Oke!",
    //             customClass: {
    //                 confirmButton: "btn font-weight-bold btn-primary",
    //             }
    //         });
    //     }
    // }
    </script>

    <script>
    $(document).ready(function() {

        var info_checkbox_alamat = document.getElementById('info_checkbox_alamat');
        var alamat_rumah_kk = $('textarea[name="alamat_rumah_kk"]');
        var provinsi_kk = $('select[name="provinsi_kk"]');
        var kabupaten_kota_kk = $('select[name="kabupaten_kota_kk"]');
        var kecamatan_kk = $('select[name="kecamatan_kk"]');
        var kelurahan_desa_kk = $('select[name="kelurahan_desa_kk"]');
        var rt_kk = $('input[name="rt_kk"]');
        var rw_kk = $('input[name="rw_kk"]');
        var kodepos_kk = $('input[name="kodepos_kk"]');

        <?php if ($register[0]->status_alamat == 1) {?>

        $('textarea[name="alamat_rumah_dom"]').val(alamat_rumah_kk.val()).prop('readonly', true);
        $('input[name="rt_dom"]').val(rt_kk.val()).prop('readonly', true);
        $('input[name="rw_dom"]').val(rw_kk.val()).prop('readonly', true);
        $('input[name="kodepos_dom"]').val(kodepos_kk.val()).prop('readonly', true);

        $('textarea[name="alamat_rumah_kk"]').prop('readonly', true);
        $('input[name="rt_kk"]').prop('readonly', true);
        $('input[name="rw_kk"]').prop('readonly', true);
        $('input[name="kodepos_kk"]').prop('readonly', true);

        $('select[name="provinsi_kk"]').prop('disabled', true);
        $('select[name="kabupaten_kota_kk"]').prop('disabled', true);
        $('select[name="kecamatan_kk"]').prop('disabled', true);
        $('select[name="kelurahan_desa_kk"]').prop('disabled', true);

        $('select[name="provinsi_dom"]').prop('disabled', true);
        $('select[name="kabupaten_kota_dom"]').prop('disabled', true);
        $('select[name="kecamatan_dom"]').prop('disabled', true);
        $('select[name="kelurahan_desa_dom"]').prop('disabled', true);

        var option_prov = $("<option selected></option>").val(provinsi_kk.val()).text(
            provinsi_kk.select2('data')[0].text);
        $("select[name='provinsi_dom']").append(option_prov);
        var option_kab = $("<option selected></option>").val(kabupaten_kota_kk.val()).text(
            kabupaten_kota_kk.select2('data')[0].text);
        $("select[name='kabupaten_kota_dom']").append(option_kab);
        var option_kec = $("<option selected></option>").val(kecamatan_kk.val()).text(
            kecamatan_kk.select2('data')[0].text);
        $("select[name='kecamatan_dom']").append(option_kec);
        var option_kel = $("<option selected></option>").val(kelurahan_desa_kk.val()).text(
            kelurahan_desa_kk.select2('data')[0].text);
        $("select[name='kelurahan_desa_dom']").append(option_kel);

        info_alamat.innerHTML =
            "<b class='text-danger'>*Anda menggunakan data Alamat KK sebagai Alamat Domisili</b>";
        info_checkbox_alamat.innerHTML =
            "<b>*Nonaktfikan untuk mengubah formulir Alamat KK</b>";

        <?php }?>

        $('#alamat').click(function() {
            if ($(this).prop("checked") == true) {

                $('textarea[name="alamat_rumah_dom"]').val(alamat_rumah_kk.val()).prop('readonly',
                    true);
                $('input[name="rt_dom"]').val(rt_kk.val()).prop('readonly', true);
                $('input[name="rw_dom"]').val(rw_kk.val()).prop('readonly', true);
                $('input[name="kodepos_dom"]').val(kodepos_kk.val()).prop('readonly', true);

                $('textarea[name="alamat_rumah_kk"]').prop('readonly', true);
                $('input[name="rt_kk"]').prop('readonly', true);
                $('input[name="rw_kk"]').prop('readonly', true);
                $('input[name="kodepos_kk"]').prop('readonly', true);

                $('select[name="provinsi_kk"]').prop('disabled', true);
                $('select[name="kabupaten_kota_kk"]').prop('disabled', true);
                $('select[name="kecamatan_kk"]').prop('disabled', true);
                $('select[name="kelurahan_desa_kk"]').prop('disabled', true);

                $('select[name="provinsi_dom"]').prop('disabled', true);
                $('select[name="kabupaten_kota_dom"]').prop('disabled', true);
                $('select[name="kecamatan_dom"]').prop('disabled', true);
                $('select[name="kelurahan_desa_dom"]').prop('disabled', true);

                var option_prov = $("<option selected></option>").val(provinsi_kk.val()).text(
                    provinsi_kk.select2('data')[0].text);
                $("select[name='provinsi_dom']").append(option_prov);
                var option_kab = $("<option selected></option>").val(kabupaten_kota_kk.val()).text(
                    kabupaten_kota_kk.select2('data')[0].text);
                $("select[name='kabupaten_kota_dom']").append(option_kab);
                var option_kec = $("<option selected></option>").val(kecamatan_kk.val()).text(
                    kecamatan_kk.select2('data')[0].text);
                $("select[name='kecamatan_dom']").append(option_kec);
                var option_kel = $("<option selected></option>").val(kelurahan_desa_kk.val()).text(
                    kelurahan_desa_kk.select2('data')[0].text);
                $("select[name='kelurahan_desa_dom']").append(option_kel);

                info_alamat.innerHTML =
                    "<b class='text-danger'>*Anda menggunakan data Alamat KK sebagai Alamat Domisili</b>";
                info_checkbox_alamat.innerHTML =
                    "<b>*Nonaktfikan untuk mengubah formulir Alamat KK</b>";


            } else if ($(this).prop("checked") == false) {

                $('textarea[name="alamat_rumah_kk"]').prop('readonly', false);
                $('input[name="rt_kk"]').prop('readonly', false);
                $('input[name="rw_kk"]').prop('readonly', false);
                $('input[name="kodepos_kk"]').prop('readonly', false);

                $('select[name="provinsi_dom"]').find("option:last").remove();
                $('select[name="kabupaten_kota_dom"]').find("option:last").remove();
                $('select[name="kecamatan_dom"]').find("option:last").remove();
                $('select[name="kelurahan_desa_dom"]').find("option:last").remove();

                $('textarea[name="alamat_rumah_dom"]').val('').prop('readonly', false);
                $('input[name="rt_dom"]').val('').prop('readonly', false);
                $('input[name="rw_dom"]').val('').prop('readonly', false);
                $('input[name="kodepos_dom"]').val('').prop('readonly', false);

                $('select[name="provinsi_kk"]').prop('disabled', false);
                $('select[name="kabupaten_kota_kk"]').prop('disabled', false);
                $('select[name="kecamatan_kk"]').prop('disabled', false);
                $('select[name="kelurahan_desa_kk"]').prop('disabled', false);

                $('select[name="provinsi_dom"]').prop('disabled', false);
                $('select[name="kabupaten_kota_dom"]').prop('disabled', false);
                $('select[name="kecamatan_dom"]').prop('disabled', false);
                $('select[name="kelurahan_desa_dom"]').prop('disabled', false);

                info_alamat.innerHTML = "";
                info_checkbox_alamat.innerHTML =
                    "<b>*Alamat KK sebagai Alamat Domisili dinonakitfkan</b>";
            }
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var info_wali = document.getElementById('info_wali');
        var info_checkbox_ayah = document.getElementById('info_checkbox_ayah');

        var nama_ayah = $('input[name="nama_ayah"]');
        var nik_ayah = $('input[name="nik_ayah"]');
        var tmptl_ayah = $('input[name="tempat_lahir_ayah"]');
        var tgl_ayah = $('input[name="tanggal_lahir_ayah"]');
        var pkrj_ayah = $('input[name="pekerjaan_ayah"]');
        var pnd_ayah = $('select[name="pendidikan_ayah"]');
        var png_ayah = $('select[name="penghasilan_ayah"]');

        <?php if ($register[0]->status_wali == 1) {?>

        $('input[name="nama_wali"]').val(nama_ayah.val()).prop('readonly', true);
        $('input[name="nik_wali"]').val(nik_ayah.val()).prop('readonly', true);
        $('input[name="tempat_lahir_wali"]').val(tmptl_ayah.val()).prop('readonly', true);
        $('input[name="tanggal_lahir_wali"]').val(tgl_ayah.val());
        $('input[name="pekerjaan_wali"]').val(pkrj_ayah.val()).prop('readonly', true);
        $("select[name='pendidikan_wali'] option[value='" + pnd_ayah.val() + "']").prop(
            "selected", "selected");
        $("select[name='penghasilan_wali'] option[value='" + png_ayah.val() + "']").prop(
            "selected", "selected");
        $('select[name="pendidikan_wali"] option:not(:selected)').prop('disabled', true);
        $('select[name="penghasilan_wali"] option:not(:selected)').prop('disabled', true);
        $('#kt_daterangepicker_wali').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }, "option", "disabled", true);
        $('#kt_daterangepicker_ayah').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }, "option", "disabled", true);
        $('select[name="pendidikan_ayah"] option:not(:selected)').prop('disabled', true);
        $('select[name="penghasilan_ayah"] option:not(:selected)').prop('disabled', true);
        info_wali.innerHTML =
            "<b class='text-danger'>*Anda menggunakan data Ayah sebagai Wali</b>";
        info_checkbox_ayah.innerHTML = "<b>*Nonaktfikan untuk mengubah formulir Ayah</b>";
        $('#wali_ibu').prop('disabled', true);
        nama_ayah.prop('readonly', true);
        nik_ayah.prop('readonly', true);
        tmptl_ayah.prop('readonly', true);
        pkrj_ayah.prop('readonly', true);

        <?php }?>

        $('#wali_ayah').click(function() {

            if ($(this).prop("checked") == true) {

                $('input[name="nama_wali"]').val(nama_ayah.val()).prop('readonly', true);
                $('input[name="nik_wali"]').val(nik_ayah.val()).prop('readonly', true);
                $('input[name="tempat_lahir_wali"]').val(tmptl_ayah.val()).prop('readonly', true);
                $('input[name="tanggal_lahir_wali"]').val(tgl_ayah.val());
                $('input[name="pekerjaan_wali"]').val(pkrj_ayah.val()).prop('readonly', true);
                $("select[name='pendidikan_wali'] option[value='" + pnd_ayah.val() + "']").prop(
                    "selected", "selected");
                $("select[name='penghasilan_wali'] option[value='" + png_ayah.val() + "']").prop(
                    "selected", "selected");
                $('select[name="pendidikan_wali"] option:not(:selected)').prop('disabled', true);
                $('select[name="penghasilan_wali"] option:not(:selected)').prop('disabled', true);
                $('#kt_daterangepicker_wali').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true
                }, "option", "disabled", true);
                $('#kt_daterangepicker_ayah').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true
                }, "option", "disabled", true);
                $('select[name="pendidikan_ayah"] option:not(:selected)').prop('disabled', true);
                $('select[name="penghasilan_ayah"] option:not(:selected)').prop('disabled', true);
                info_wali.innerHTML =
                    "<b class='text-danger'>*Anda menggunakan data Ayah sebagai Wali</b>";
                info_checkbox_ayah.innerHTML = "<b>*Nonaktfikan untuk mengubah formulir Ayah</b>";
                $('#wali_ibu').prop('disabled', true);
                nama_ayah.prop('readonly', true);
                nik_ayah.prop('readonly', true);
                tmptl_ayah.prop('readonly', true);
                pkrj_ayah.prop('readonly', true);

            } else if ($(this).prop("checked") == false) {

                nama_ayah.prop('readonly', false);
                nik_ayah.prop('readonly', false);
                tmptl_ayah.prop('readonly', false);
                pkrj_ayah.prop('readonly', false);
                $('input[name="nama_wali"]').val('').prop('readonly', false);
                $('input[name="nik_wali"]').val('').prop('readonly', false);
                $('input[name="tempat_lahir_wali"]').val('').prop('readonly', false);
                $('input[name="tanggal_lahir_wali"]').val('');
                $('input[name="pekerjaan_wali"]').val('').prop('readonly', false);
                $("select[name='pendidikan_wali'] option[value='']").prop("selected", "selected");
                $("select[name='penghasilan_wali'] option[value='']").prop("selected", "selected");
                $('select[name="pendidikan_wali"] option:not(:selected)').attr('disabled', false);
                $('select[name="penghasilan_wali"] option:not(:selected)').attr('disabled', false);
                $('#kt_daterangepicker_wali').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                }, function(start, label) {
                    $('#kt_daterangepicker_wali .form-control').val(start.format('DD/MM/YYYY'));
                });
                $('select[name="pendidikan_ayah"] option:not(:selected)').attr('disabled', false);
                $('select[name="penghasilan_ayah"] option:not(:selected)').attr('disabled', false);
                $('#kt_daterangepicker_ayah').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                }, function(start, label) {
                    $('#kt_daterangepicker_ayah .form-control').val(start.format('DD/MM/YYYY'));
                });
                $('#wali_ibu').prop('disabled', false);
                info_wali.innerHTML = "";
                info_checkbox_ayah.innerHTML = "<b>*Ayah sebagai Wali dinonakitfkan</b>";

            }
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var info_wali = document.getElementById('info_wali');
        var info_checkbox_ibu = document.getElementById('info_checkbox_ibu');

        var nama_ibu = $('input[name="nama_ibu"]');
        var nik_ibu = $('input[name="nik_ibu"]');
        var tmptl_ibu = $('input[name="tempat_lahir_ibu"]');
        var tgl_ibu = $('input[name="tanggal_lahir_ibu"]');
        var pkrj_ibu = $('input[name="pekerjaan_ibu"]');
        var pnd_ibu = $('select[name="pendidikan_ibu"]');
        var png_ibu = $('select[name="penghasilan_ibu"]');

        <?php if ($register[0]->status_wali == 2) {?>

        $('input[name="nama_wali"]').val(nama_ibu.val()).prop('readonly', true);
        $('input[name="nik_wali"]').val(nik_ibu.val()).prop('readonly', true);
        $('input[name="tempat_lahir_wali"]').val(tmptl_ibu.val()).prop('readonly', true);
        $('input[name="tanggal_lahir_wali"]').val(tgl_ibu.val());
        $('input[name="pekerjaan_wali"]').val(pkrj_ibu.val()).prop('readonly', true);
        $("select[name='pendidikan_wali'] option[value='" + pnd_ibu.val() + "']").prop(
            "selected", "selected");
        $("select[name='penghasilan_wali'] option[value='" + png_ibu.val() + "']").prop(
            "selected", "selected");
        $('select[name="pendidikan_wali"] option:not(:selected)').prop('disabled', true);
        $('select[name="penghasilan_wali"] option:not(:selected)').prop('disabled', true);
        $('#kt_daterangepicker_wali').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }, "option", "disabled", true);
        $('#kt_daterangepicker_ibu').daterangepicker({
            singleDatePicker: true,
            showDropdowns: true
        }, "option", "disabled", true);
        $('select[name="pendidikan_ibu"] option:not(:selected)').prop('disabled', true);
        $('select[name="penghasilan_ibu"] option:not(:selected)').prop('disabled', true);
        info_wali.innerHTML =
            "<b class='text-danger'>*Anda menggunakan data Ibu sebagai Wali</b>";
        info_checkbox_ibu.innerHTML = "<b>*Nonaktfikan untuk mengubah formulir Ibu</b>";
        $('#wali_ayah').prop('disabled', true);
        nama_ibu.prop('readonly', true);
        nik_ibu.prop('readonly', true);
        tmptl_ibu.prop('readonly', true);
        pkrj_ibu.prop('readonly', true);

        <?php }?>

        $('#wali_ibu').click(function() {
            if ($(this).prop("checked") == true) {

                $('input[name="nama_wali"]').val(nama_ibu.val()).prop('readonly', true);
                $('input[name="nik_wali"]').val(nik_ibu.val()).prop('readonly', true);
                $('input[name="tempat_lahir_wali"]').val(tmptl_ibu.val()).prop('readonly', true);
                $('input[name="tanggal_lahir_wali"]').val(tgl_ibu.val());
                $('input[name="pekerjaan_wali"]').val(pkrj_ibu.val()).prop('readonly', true);
                $("select[name='pendidikan_wali'] option[value='" + pnd_ibu.val() + "']").prop(
                    "selected", "selected");
                $("select[name='penghasilan_wali'] option[value='" + png_ibu.val() + "']").prop(
                    "selected", "selected");
                $('select[name="pendidikan_wali"] option:not(:selected)').prop('disabled', true);
                $('select[name="penghasilan_wali"] option:not(:selected)').prop('disabled', true);
                $('#kt_daterangepicker_wali').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true
                }, "option", "disabled", true);
                $('#kt_daterangepicker_ibu').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true
                }, "option", "disabled", true);
                $('select[name="pendidikan_ibu"] option:not(:selected)').prop('disabled', true);
                $('select[name="penghasilan_ibu"] option:not(:selected)').prop('disabled', true);
                info_wali.innerHTML =
                    "<b class='text-danger'>*Anda menggunakan data Ibu sebagai Wali</b>";
                info_checkbox_ibu.innerHTML = "<b>*Nonaktfikan untuk mengubah formulir Ibu</b>";
                $('#wali_ayah').prop('disabled', true);
                nama_ibu.prop('readonly', true);
                nik_ibu.prop('readonly', true);
                tmptl_ibu.prop('readonly', true);
                pkrj_ibu.prop('readonly', true);

            } else if ($(this).prop("checked") == false) {

                nama_ibu.prop('readonly', false);
                nik_ibu.prop('readonly', false);
                tmptl_ibu.prop('readonly', false);
                pkrj_ibu.prop('readonly', false);
                $('input[name="nama_wali"]').val('').prop('readonly', false);
                $('input[name="nik_wali"]').val('').prop('readonly', false);
                $('input[name="tempat_lahir_wali"]').val('').prop('readonly', false);
                $('input[name="tanggal_lahir_wali"]').val('');
                $('input[name="pekerjaan_wali"]').val('').prop('readonly', false);
                $("select[name='pendidikan_wali'] option[value='']").prop("selected", "selected");
                $("select[name='penghasilan_wali'] option[value='']").prop("selected", "selected");
                $('select[name="pendidikan_wali"] option:not(:selected)').attr('disabled', false);
                $('select[name="penghasilan_wali"] option:not(:selected)').attr('disabled', false);
                $('#kt_daterangepicker_wali').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                }, function(start, label) {
                    $('#kt_daterangepicker_wali .form-control').val(start.format('DD/MM/YYYY'));
                });

                $('select[name="pendidikan_ibu"] option:not(:selected)').attr('disabled', false);
                $('select[name="penghasilan_ibu"] option:not(:selected)').attr('disabled', false);
                $('#kt_daterangepicker_ibu').daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true,
                    locale: {
                        format: 'DD/MM/YYYY'
                    }
                }, function(start, label) {
                    $('#kt_daterangepicker_ibu .form-control').val(start.format('DD/MM/YYYY'));
                });
                $('#wali_ayah').prop('disabled', false);
                info_wali.innerHTML = "";
                info_checkbox_ibu.innerHTML = "<b>*Ibu sebagai Wali dinonakitfkan</b>";

            }
        });
    });
    </script>

    <?php if ($register[0]->provinsi_kk != "" || $register[0]->provinsi_kk != null) {?>
    <script>
    $(document).ready(function() {
        var id_prov_kk = <?php echo @$register[0]->provinsi_kk; ?>;
        var id_kab_kk = <?php echo @$register[0]->kabupaten_kota_kk; ?>;
        var id_kec_kk = <?php echo @$register[0]->kecamatan_kk; ?>;
        var id_des_kk = <?php echo @$register[0]->kelurahan_desa_kk; ?>;

        var url_kab_kk = "<?php echo site_url('ppdb/register/add_ajax_kab'); ?>/" + id_prov_kk + "/" +
            id_kab_kk;
        $('#kabupaten_kota_kk').load(url_kab_kk);
        var url_kec_kk = "<?php echo site_url('ppdb/register/add_ajax_kec'); ?>/" + id_prov_kk + "/" +
            id_kab_kk + "/" + id_kec_kk;
        $('#kecamatan_kk').load(url_kec_kk);
        var url_des_kk = "<?php echo site_url('ppdb/register/add_ajax_des'); ?>/" + id_prov_kk + "/" +
            id_kab_kk + "/" + id_kec_kk + "/" + id_des_kk;
        $('#kelurahan_desa_kk').load(url_des_kk);


        $("#provinsi_kk").change(function() {
            id_prov_kk = $(this).val();
            var url = "<?php echo site_url('ppdb/register/add_ajax_kab'); ?>/" + id_prov_kk;
            $('#kabupaten_kota_kk').load(url);
            return false;
        });

        $("#kabupaten_kota_kk").change(function() {
            id_kab_kk = $(this).val();
            var url = "<?php echo site_url('ppdb/register/add_ajax_kec'); ?>/" + id_prov_kk +
                "/" + id_kab_kk;
            $('#kecamatan_kk').load(url);
            return false;
        });

        $("#kecamatan_kk").change(function() {
            id_kec_kk = $(this).val()
            var url = "<?php echo site_url('ppdb/register/add_ajax_des'); ?>/" + id_prov_kk +
                "/" + id_kab_kk + "/" + id_kec_kk;
            $('#kelurahan_desa_kk').load(url);
            return false;
        });

    });
    </script>
    <?php } else {?>
    <script>
    $(document).ready(function() {
        var id_prov_kk;
        var id_kab_kk;
        var id_kec_kk;
        $("#provinsi_kk").change(function() {
            id_prov_kk = $(this).val();
            var url = "<?php echo site_url('ppdb/register/add_ajax_kab'); ?>/" + id_prov_kk;
            $('#kabupaten_kota_kk').load(url);
            return false;
        });
        $("#kabupaten_kota_kk").change(function() {
            id_kab_kk = $(this).val();
            var url = "<?php echo site_url('ppdb/register/add_ajax_kec'); ?>/" + id_prov_kk + "/" +
                id_kab_kk;
            $('#kecamatan_kk').load(url);
            return false;
        });
        $("#kecamatan_kk").change(function() {
            id_kec_kk = $(this).val()
            var url = "<?php echo site_url('ppdb/register/add_ajax_des'); ?>/" + id_prov_kk + "/" +
                id_kab_kk + "/" + id_kec_kk;
            $('#kelurahan_desa_kk').load(url);
            return false;
        });

    });
    </script>
    <?php }?>

    <?php if ($register[0]->provinsi_dom != "" || $register[0]->provinsi_dom != null) {?>
    <script>
    $(document).ready(function() {
        var id_prov_dom = <?php echo @$register[0]->provinsi_dom; ?>;
        var id_kab_dom = <?php echo @$register[0]->kabupaten_kota_dom; ?>;
        var id_kec_dom = <?php echo @$register[0]->kecamatan_dom; ?>;
        var id_des_dom = <?php echo @$register[0]->kelurahan_desa_dom; ?>;

        var url_kab_dom = "<?php echo site_url('ppdb/register/add_ajax_kab'); ?>/" + id_prov_dom + "/" +
            id_kab_dom;
        $('#kabupaten_kota_dom').load(url_kab_dom);
        var url_kec_dom = "<?php echo site_url('ppdb/register/add_ajax_kec'); ?>/" + id_prov_dom + "/" +
            id_kab_dom + "/" + id_kec_dom;
        $('#kecamatan_dom').load(url_kec_dom);
        var url_des_dom = "<?php echo site_url('ppdb/register/add_ajax_des'); ?>/" + id_prov_dom + "/" +
            id_kab_dom + "/" + id_kec_dom + "/" + id_des_dom;
        $('#kelurahan_desa_dom').load(url_des_dom);


        $("#provinsi_dom").change(function() {
            id_prov_dom = $(this).val();
            var url = "<?php echo site_url('ppdb/register/add_ajax_kab'); ?>/" + id_prov_dom;
            $('#kabupaten_kota_dom').load(url);
            return false;
        });

        $("#kabupaten_kota_dom").change(function() {
            id_kab_dom = $(this).val();
            var url = "<?php echo site_url('ppdb/register/add_ajax_kec'); ?>/" + id_kab_dom +
                "/" + id_kab_dom;
            $('#kecamatan_dom').load(url);
            return false;
        });

        $("#kecamatan_dom").change(function() {
            id_kec_dom = $(this).val()
            var url = "<?php echo site_url('ppdb/register/add_ajax_des'); ?>/" + id_kab_dom +
                "/" + id_kab_dom + "/" + id_kec_dom;
            $('#kelurahan_desa_dom').load(url);
            return false;
        });

    });
    </script>
    <?php } else {?>
    <script>
    $(document).ready(function() {
        var id_prov_dom;
        var id_kab_dom;
        var id_kec_dom;

        $("#provinsi_dom").change(function() {
            id_prov_dom = $(this).val();
            var url = "<?php echo site_url('ppdb/register/add_ajax_kab'); ?>/" + id_prov_dom;
            $('#kabupaten_kota_dom').load(url);
            return false;
        });
        $("#kabupaten_kota_dom").change(function() {
            id_kab_dom = $(this).val();
            var url = "<?php echo site_url('ppdb/register/add_ajax_kec'); ?>/" + id_prov_dom + "/" +
                id_kab_dom;
            $('#kecamatan_dom').load(url);
            return false;
        });
        $("#kecamatan_dom").change(function() {
            id_kec_dom = $(this).val()
            var url = "<?php echo site_url('ppdb/register/add_ajax_des'); ?>/" + id_prov_dom + "/" +
                id_kab_dom + "/" + id_kec_dom;
            $('#kelurahan_desa_dom').load(url);
            return false;
        });

    });
    </script>
    <?php }?>

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
