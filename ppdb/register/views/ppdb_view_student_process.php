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
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/login/classic/login-2.css" rel="stylesheet"
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
        .blink {
            animation: blinker 1.5s linear infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
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
                            <p class="font-mobile font-weight-boldest text-warning ">MOHON MAAF, MASIH DALAM
                                PROSES!</p>
                            <div class="font-weight-bold text-danger font-size-lg">Pengumuman penerimaan siswa masih
                                dalam
                                proses <b>OBERVASI</b>. Mohon menunggu, Kami akan informasikan segera, Terima kasih.
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-3">
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-light table-light-warning text-center">
                                        <thead>
                                            <tr>
                                                <th class="table-center">AKTIVITAS</th>
                                                <th class="table-center">STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="font-weight-boldest table-center font-size-sm">
                                                    UPLOAD KELENGKAPAN BERKAS
                                                </td>
                                                <td class="table-center font-size-sm">

                                                    <?php
                                                    if ($formulir[0]->status_formulir >= 1) { ?>
                                                        <span
                                                            class="label label-lg font-weight-bolder label-success label-inline">SELESAI</span>
                                                    <?php } else if ($formulir[0]->status_formulir == 0) { ?>
                                                        <span
                                                            class="label label-lg font-weight-bolder label-danger label-inline blink">BELUM
                                                            SELESAI</span>
                                                    <?php    }
                                                    ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-boldest table-center font-size-sm">
                                                    PEMBAYARAN BIAYA MASUK<br>
                                                    <span class="font-weight-bold font-size-sm text-danger">*Klik untuk melihat rinciaan dan cara pembayaran</span>
                                                    <a href="#" class="font-weight-bold ml-1" data-toggle="modal" data-target="#modal_rincian">
                                                        <span class="label label-sm font-weight-bold label-primary label-inline blink">
                                                            LIHAT RINCIAN & PEMBAYARAN
                                                        </span>
                                                    </a>
                                                </td>
                                                <td class="table-center font-size-sm">
                                                    <?php
                                                    if ($formulir[0]->status_pembayaran == 0) { ?>
                                                        <span
                                                            class="label label-lg font-weight-bolder label-default label-inline">AKAN DITAGIHKAN
                                                        </span>
                                                    <?php } else if ($formulir[0]->status_pembayaran == 1) { ?>
                                                        <span
                                                            class="label label-lg font-weight-bolder label-warning label-inline blink">BELUM
                                                            BAYAR</span>
                                                    <?php } else if ($formulir[0]->status_pembayaran == 2) { ?>
                                                        <span
                                                            class="label label-lg font-weight-bolder label-success label-inline">SUDAH
                                                            BAYAR
                                                        </span>
                                                    <?php } else if ($formulir[0]->status_pembayaran == 3) { ?>
                                                        <span
                                                            class="label label-lg font-weight-bolder label-danger label-inline blink">GAGAL
                                                            BAYAR
                                                        </span>
                                                    <?php }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-boldest table-center font-size-sm">
                                                    HASIL OBERVASAI DAN PENERIMAAN
                                                </td>
                                                <td class="table-center font-size-sm">
                                                    <?php
                                                    if ($formulir[0]->status_pembayaran == 0) { ?>
                                                        <span
                                                            class="label label-lg font-weight-bolder label-default label-inline">DIPROSES
                                                        </span>
                                                    <?php } else if ($formulir[0]->status_pembayaran == 1) { ?>
                                                        <span
                                                            class="label label-lg font-weight-bolder label-success label-inline">DITERIMA
                                                        </span>
                                                    <?php } else if ($formulir[0]->status_pembayaran == 2) { ?>
                                                        <span
                                                            class="label label-lg font-weight-bolder label-danger label-inline">DITOLAK
                                                        </span>
                                                    <?php }
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                        <div class="mb-10 ">
                            <div class="font-weight-bold font-size-md">*setelah hasil observasi dan penerimaan siswa dinyatakan <b class="text-success">DITERIMA</b>, maka <b>BIAYA TAGIHAN PPDB</b> akan diinfokan melalui Email, Whatsapp dan Web.
                                Terima kasih.
                            </div>
                        </div>
                        <div class="table-responsive px-mobile">
                            <table class="table table-light table-light-warning text-center">
                                <thead>
                                    <tr>
                                        <th class="table-center">NOMOR FORMULIR</th>
                                        <th class="table-center">Nama Siswa</th>
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
                                        <td class="font-weight-boldest table-center font-size-sm">
                                            <?php echo $formulir[0]->nomor_formulir ?></td>
                                        <td class="table-center font-size-sm"><?php echo $formulir[0]->nama_lengkap; ?>
                                        </td>
                                        <td class="table-center font-size-sm"><?php echo $formulir[0]->nama_wali; ?>
                                        </td>
                                        <td class="table-center font-size-sm"><?php echo $formulir[0]->email; ?></td>
                                        <td class="table-center font-size-sm">
                                            <?php echo $formulir[0]->nomor_handphone; ?></td>
                                        <td class="table-center font-size-sm">
                                            <span class="label label-md font-weight-boldest label-primary label-inline">
                                                <?php
                                                if ($formulir[0]->level_tingkat == 1) {
                                                    echo 'KB';
                                                } else if ($formulir[0]->level_tingkat == 2) {
                                                    echo 'TK';
                                                } else if ($formulir[0]->level_tingkat == 3) {
                                                    echo 'SD';
                                                } else if ($formulir[0]->level_tingkat == 4) {
                                                    echo 'SMP';
                                                } else if ($formulir[0]->level_tingkat == 5) {
                                                    echo 'KB-TK';
                                                } else if ($formulir[0]->level_tingkat == 6) {
                                                    echo 'DC';
                                                }
                                                ?>
                                            </span>
                                        </td>
                                        <td class="table-center font-size-sm">
                                            <span class="label label-md font-weight-boldest label-default label-inline">
                                                <?php
                                                if ($formulir[0]->jalur == 1) {
                                                    echo 'REGULER';
                                                } elseif ($formulir[0]->jalur == 2) {
                                                    echo 'ICP';
                                                }
                                                ?>
                                            </span>
                                        </td>
                                        <td class="table-center font-size-sm font-weight-bold">
                                            <?php echo $formulir[0]->tahun_ajaran; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center col-12">
                                <!--begin: Pricing-->
                                <div class="col-md-4 col-xxl-3">
                                    <div class="pt-10 pt-md-10 pb-10 px-5 text-center">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative mb-15">
                                            <span class="svg svg-fill-primary opacity-4 position-absolute">
                                                <svg width="175" height="200">
                                                    <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                                </svg>
                                            </span>
                                            <span class="svg-icon svg-icon-10x svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Flower3.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <span
                                            class="font-size-h1 d-block d-block font-weight-boldest text-dark-75 py-2">Bio
                                            Siswa</span>

                                        <p class="mb-10 d-flex flex-column">
                                            <span>Klik
                                                untuk melihat detail data diri Siswa/Siswi</span>
                                        </p>
                                        <a href="#" data-toggle="modal" data-target="#modal_bio_siswa"
                                            class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Lihat</a>
                                        <!--end::Content-->
                                    </div>
                                </div>
                                <!--end: Pricing-->
                                <!--begin: Pricing-->
                                <div
                                    class="col-md-4 col-xxl-3 border-left-0 border-left-xxl border-bottom border-bottom-xxl-0">
                                    <div class="pt-10 pt-md-10 pb-10 px-5 text-center">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative mb-15">
                                            <span class="svg svg-fill-primary opacity-4 position-absolute">
                                                <svg width="175" height="200">
                                                    <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                                </svg>
                                            </span>
                                            <span class="svg-icon svg-icon-10x svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Bio
                                            ORTU</span>
                                        <p class="mb-10 d-flex flex-column">
                                            <span>Klik untuk melihat detail data Orangtua Siswa</span>
                                        </p>
                                        <a href="#" data-toggle="modal" data-target="#modal_bio_ortu"
                                            class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Lihat</a>
                                        <!--end::Content-->
                                    </div>
                                </div>
                                <!--end: Pricing-->
                                <!--begin: Pricing-->
                                <div class="col-md-4 col-xxl-3 border-x-0 border-x-md ">
                                    <div class="pt-10 pt-md-10 pb-10 px-5 text-center">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative mb-15">
                                            <span class="svg svg-fill-primary opacity-4 position-absolute">
                                                <svg width="175" height="200">
                                                    <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                                </svg>
                                            </span>
                                            <span class="svg-icon svg-icon-10x svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart2.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Alamat
                                        </span>
                                        <p class="mb-10 d-flex flex-column">
                                            <span>Klik untuk melihat detail data Domisili Siswa</span>
                                        </p>
                                        <a href="#" data-toggle="modal" data-target="#modal_alamat"
                                            class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Lihat</a>
                                        <!--end::Content-->
                                    </div>
                                </div>
                                <!--end: Pricing-->
                                <!--begin: Pricing-->
                                <div class="col-md-4 col-xxl-3">
                                    <div class="pt-10 pt-md-10 pb-10 px-5 text-center">
                                        <!--begin::Icon-->
                                        <div class="d-flex flex-center position-relative mb-15">
                                            <span class="svg svg-fill-primary opacity-4 position-absolute">
                                                <svg width="175" height="200">
                                                    <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                                </svg>
                                            </span>
                                            <span class="svg-icon svg-icon-10x svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path
                                                            d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                            fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path
                                                            d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z"
                                                            fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Content-->
                                        <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">Berkas
                                        </span>
                                        <p class="mb-10 d-flex flex-column">
                                            <span>Klik untuk melihat detail Berkas upload Siswa</span>
                                        </p>
                                        <a href="#" data-toggle="modal" data-target="#modal_berkas"
                                            class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Lihat</a>
                                        <!--end::Content-->
                                    </div>
                                </div>
                                <!--end: Pricing-->

                            </div>
                        </div>
                        <a href="<?php echo site_url("ppdb/register/logout_announcement"); ?>"
                            class="btn btn-warning font-weight-bold px-9 py-4 my-3 mx-4 mt-8 mt-10">Keluar</a>
                    </div>
                    <!--end::Login Sign in form-->
                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <div class="modal fade" id="modal_rincian" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rincian Biaya Masuk Sekolah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table table-light table-light-success text-left">
                            <thead>
                                <tr>
                                    <th class="table-left">Nama Biaya</th>
                                    <th class="table-center">Biaya Awal (Rp)</th>
                                    <th class="table-center">Potongan (%)</th>
                                    <th class="table-center">Sub Total (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (!empty($cost)) {
                                    $total_potongan = 0;
                                    foreach ($cost as $key => $value) {
                                ?>
                                        <tr>
                                            <td class="font-weight-bold font-size-sm">
                                                <?php echo ucwords(strtolower($value->nama_biaya)); ?></td>
                                            <td class="table-center font-size-sm  text-right">
                                                <?php echo number_format($value->nominal, 0, ',', '.'); ?></td>
                                            <td class="table-center font-size-sm  text-right">
                                                <?php
                                                if (!empty($voucher)) {
                                                    foreach ($voucher as $key => $value_v) {
                                                        if ($value->id_nama_biaya == $value_v->id_nama_biaya) {
                                                            $id_array_voucher = explode(',', $formulir[0]->id_voucher);
                                                            if (in_array($value_v->id_voucher, $id_array_voucher)) {
                                                                echo $value_v->potongan;
                                                            }
                                                        }
                                                    } //ngatur nomor urut
                                                }
                                                ?>
                                            </td>
                                            <td class="table-center font-size-sm text-right">
                                                <?php
                                                $stat = false;
                                                if (!empty($voucher)) {
                                                    foreach ($voucher as $key => $value_v) {
                                                        if ($value->id_nama_biaya == $value_v->id_nama_biaya) {
                                                            $id_array_voucher = explode(',', $formulir[0]->id_voucher);
                                                            if (in_array($value_v->id_voucher, $id_array_voucher)) {
                                                                $hasil_potongan = ($value->nominal) - ($value->nominal * $value_v->potongan / 100);
                                                                $total_potongan += $hasil_potongan;
                                                                echo number_format($hasil_potongan, 0, ',', '.');
                                                                $stat = true;
                                                            }
                                                        }
                                                    } //ngatur nomor urut
                                                }
                                                if ($stat == false) {
                                                    $total_potongan += $value->nominal;
                                                    echo number_format($value->nominal, 0, ',', '.');
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                <?php
                                    } //ngatur nomor urut
                                }
                                ?>
                                <tr>
                                    <td>
                                    </td>
                                    <td colspan="2" class="table-center font-size-sm font-weight-bolder text-right">
                                        TOTAL SETELAH DI DISKON
                                    </td>
                                    <td class="table-center font-size-sm font-weight-bolder text-right">
                                        <?php echo number_format($total_potongan, 0, ',', '.'); ?>
                                    </td>
                                </tr>
                                <?php if ($formulir[0]->status_potongan == 1) { ?>
                                    <tr>
                                        <td>
                                        </td>
                                        <td colspan="2" class="table-center font-size-sm font-weight-bolder text-right text-danger">
                                            <?php echo strtoupper($potongan[0]->nama_potongan); ?>
                                        </td>
                                        <td class="table-center font-size-sm font-weight-bolder text-danger text-right">
                                            -<?php echo $potongan[0]->nominal_potongan; ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <span class="mt-30 mb-30 font-size-h4 text-left font-weight-bolder text-center">TOTAL
                                TAGIHAN KESELURUHAN:</span><br>
                            <b class="text-danger font-size-h1">Rp. <?php echo $formulir[0]->total_biaya; ?></b>
                        </div>

                    </div>
                    <div class="mt-5">
                        <div class="accordion accordion-toggle-arrow" id="accordionExample">
                            <?php
                            if (!empty($bank_account)) {
                                foreach ($bank_account as $key => $value) {
                            ?>
                                    <div class="card">
                                        <div class="card-header bg-light-warning"
                                            id="heading<?php echo $value->id_alat_bayar; ?>">
                                            <div class="card-title text-danger font-weight-bolder" data-toggle="collapse"
                                                data-target="#collapseOne<?php echo $value->id_alat_bayar; ?>">
                                                <i class="flaticon2-layers-1 text-danger"></i>
                                                <?php echo strtoupper($value->nama_alatbayar); ?>
                                            </div>
                                        </div>
                                        <div id="collapseOne<?php echo $value->id_alat_bayar; ?>" class="collapse show"
                                            data-parent="#accordionExample">
                                            <div class="card-body text-center">
                                                <span
                                                    class="mt-30 mb-30 font-size-h4 text-left font-weight-bolder">Silahakan
                                                    Melakukan Pembayaran Sejumlah:</span><br><br>
                                                <span class="mt-30 mb-30 font-size-sm text-left"> <b
                                                        class="text-danger font-size-h1">Rp.
                                                        <?php echo $formulir[0]->total_biaya; ?></b> <br>
                                                    
                                                <span class="mt-30 mb-30 font-size-h4 text-left font-weight-bolder">Nomor VA
                                                    (Virtual Account) Ananda
                                                    <b
                                                        class="text-warning">"<?php echo strtoupper($formulir[0]->nama_lengkap); ?>"</b>:
                                                </span><br><br>
                                                <span class="mt-20 mb-20 text-danger display-4 font-weight-boldest">
                                                    <?php echo strtoupper($formulir[0]->nomor_formulir); ?></span><br>
                                                <span class="mt-30 mb-20 text-warning font-size-h3 font-weight-bolder">
                                                    <?php echo strtoupper($value->nama_alatbayar); ?></span><br>
                                                <span class="mt-20 mb-20 text-danger font-weight-bold">
                                                    *pastikan Nomor VA dan Nama sesuai.
                                                </span><br><br>
                                                <span class="mt-30 mb-30 font-size-h4 text-left font-weight-bolder">Atau
                                                    Pembayaran
                                                    Melalui Bank Selain "BSI" Bisa Transfer ke Nomor Rekening
                                                    Berikut:</span><br><br>
                                                <span class="mt-20 mb-20 text-danger display-4 font-weight-boldest">
                                                    900 2399
                                                    <?php echo strtoupper($formulir[0]->nomor_formulir); ?></span><br>
                                                <span class="mt-30 mb-20 text-warning font-size-h3 font-weight-bolder">
                                                    <?php echo strtoupper($value->nama_alatbayar); ?></span><br>
                                                <span class="mt-20 mb-20 text-danger font-weight-bold">
                                                    *Pastikan data yang ditampilkan sudah sesuai.
                                                </span><br><br><br>
                                                <span
                                                    class="mt-30 mb-20 font-size-md text-left font-weight-bold"><?php echo ucwords(preg_replace('/12345/', "<b class='text-danger'>" . $formulir[0]->nomor_formulir . "</b>", $value->petunjuk_transfer)); ?></span>
                                                <br>
                                                <span
                                                    class="mt-30 mb-20 font-size-md text-center font-weight-bold"><?php echo ucwords($value->catatan_transfer); ?></span>
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
                    <button type="reset" class="btn btn-light-danger font-weight-bold"
                        data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_bio_siswa" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Biodata Siswa
                        "<?php echo strtoupper($student[0]->nama_lengkap); ?>"</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <!--begin::Card-->
                    <!--begin::Body-->
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                                <div class="font-size-h6 font-weight-bold text-danger mb-5">Personal Siswa
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">NISN:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->nisn); ?></span>
                                    </div>
                                </div>

                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">NIK:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->nik); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">No. Akta Kelahiran:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->no_akta_kelahiran); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Nama Lengkap Siswa:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo strtoupper($student[0]->nama_lengkap); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Nama Panggilan:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo strtoupper($student[0]->nama_panggilan); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tempat Lahir:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo strtoupper($student[0]->tempat_lahir); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tanggal Lahir:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->tanggal_lahir); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Jenis Kelamin:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->jenis_kelamin == 1) {
                                                echo 'Laki-Laki';
                                            } else if ($student[0]->jenis_kelamin == 2) {
                                                echo 'Perempuan';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Agama:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->agama == 1) {
                                                echo 'Islam';
                                            } else if ($student[0]->agama == 2) {
                                                echo 'Kristen';
                                            } else if ($student[0]->agama == 3) {
                                                echo 'Hindu';
                                            } else if ($student[0]->agama == 4) {
                                                echo 'Budha';
                                            } else if ($student[0]->agama == 5) {
                                                echo 'Lainnya';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tahun Ajaran:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->tahun_ajaran); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">RomBel:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->rombel); ?>
                                        </span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="font-size-h6 font-weight-bold text-danger mb-5">Data Periodik
                                    Siswa</div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Alat Transportasi:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo strtoupper($student[0]->alat_transportasi); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Jenis Tempat Tinggal:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->jenis_tinggal == 1) {
                                                echo 'Bersama Orangtua';
                                            } else if ($student[0]->jenis_tinggal == 2) {
                                                echo 'Asrama';
                                            } else if ($student[0]->jenis_tinggal == 3) {
                                                echo 'Kos';
                                            } else if ($student[0]->jenis_tinggal == 4) {
                                                echo 'Bersama Nenek/Kakek';
                                            } else if ($student[0]->jenis_tinggal == 5) {
                                                echo 'Bersama Wali';
                                            } else if ($student[0]->jenis_tinggal == 6) {
                                                echo 'Lainnya';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Jarak Rumah ke Sekolah:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->jarak_rumah_sekolah); ?> Km
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Jumlah Saudara:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->jumlah_saudara); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Anak Ke-:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->anak_ke); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Berkebutuhan Khusus:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->kebutuhan_khusus == 1) {
                                                echo 'IYA';
                                            } else if ($student[0]->kebutuhan_khusus == 0) {
                                                echo 'TIDAK';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tinggi Badan:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->tinggi_badan); ?> Cm
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Berat Badan:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->berat_badan); ?> Kg
                                        </span>
                                    </div>
                                </div>

                                <div class="font-size-h7 font-weight-bold text-danger mb-3 mt-4">NIS & Nama
                                    Saudara Bersekolah disini</div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">NIS Saudara:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->nis_saudara); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Nama Saudara:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo strtoupper($student[0]->nama_saudara); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-danger font-weight-bold"
                        data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_bio_ortu" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Biodata Orangtua
                        "<?php echo strtoupper($student[0]->nama_lengkap); ?>"</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <!--begin::Body-->
                    <div class="">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="font-size-h6 font-weight-bold text-danger mb-5">Biodata Ayah
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Nama Lengkap Ayah:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->nama_ayah); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">NIK KTP:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nik_ayah); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tempat Lahir Ayah:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->tempat_lahir_ayah); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tanggal Lahir Ayah:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->tanggal_lahir_ayah); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Pekerjaan Ayah:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo strtoupper($student[0]->pekerjaan_ayah); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Pendidikan Ayah:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->pendidikan_ayah == 1) {
                                                echo 'Tidak Sekolah';
                                            } else if ($student[0]->pendidikan_ayah == 2) {
                                                echo 'SD';
                                            } else if ($student[0]->pendidikan_ayah == 3) {
                                                echo 'SMP';
                                            } else if ($student[0]->pendidikan_ayah == 4) {
                                                echo 'SMA';
                                            } else if ($student[0]->pendidikan_ayah == 5) {
                                                echo 'D-I/D-II';
                                            } else if ($student[0]->pendidikan_ayah == 6) {
                                                echo 'D-III';
                                            } else if ($student[0]->pendidikan_ayah == 7) {
                                                echo 'D-IV/S1';
                                            } else if ($student[0]->pendidikan_ayah == 8) {
                                                echo 'S2/S3';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Penghasilan Ayah:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->penghasilan_ayah == 1) {
                                                echo 'Kurang dari Rp. 1.500.000';
                                            } else if ($student[0]->penghasilan_ayah == 2) {
                                                echo 'Rp. 1.500.000 - Rp. 2.500.000';
                                            } else if ($student[0]->penghasilan_ayah == 3) {
                                                echo 'Rp. 2.500.000 - RP. 3.500.000';
                                            } else if ($student[0]->penghasilan_ayah == 4) {
                                                echo 'Rp. 3.500.000 - Rp. 4.500.000';
                                            } else if ($student[0]->penghasilan_ayah == 5) {
                                                echo 'Rp. 4.500.000 - Rp. 5.500.000';
                                            } else if ($student[0]->penghasilan_ayah == 6) {
                                                echo 'Lebih dari Rp. 5.500.000';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="font-size-h6 font-weight-bold text-danger mb-5">Biodata Ibu
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Nama Lengkap Ibu:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->nama_ibu); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">NIK KTP:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nik_ibu); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tempat Lahir Ibu:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext">
                                            <span
                                                class="font-weight-bolder"><?php echo strtoupper($student[0]->tempat_lahir_ibu); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tanggal Lahir Ibu:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->tanggal_lahir_ibu); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Pekerjaan Ibu:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo strtoupper($student[0]->pekerjaan_ibu); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Pendidikan Ibu:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->pendidikan_ibu == 1) {
                                                echo 'Tidak Sekolah';
                                            } else if ($student[0]->pendidikan_ibu == 2) {
                                                echo 'SD';
                                            } else if ($student[0]->pendidikan_ibu == 3) {
                                                echo 'SMP';
                                            } else if ($student[0]->pendidikan_ibu == 4) {
                                                echo 'SMA';
                                            } else if ($student[0]->pendidikan_ibu == 5) {
                                                echo 'D-I/D-II';
                                            } else if ($student[0]->pendidikan_ibu == 6) {
                                                echo 'D-III';
                                            } else if ($student[0]->pendidikan_ibu == 7) {
                                                echo 'D-IV/S1';
                                            } else if ($student[0]->pendidikan_ibu == 8) {
                                                echo 'S2/S3';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Penghasilan Ibu:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->penghasilan_ibu == 1) {
                                                echo 'Kurang dari Rp. 1.500.000';
                                            } else if ($student[0]->penghasilan_ibu == 2) {
                                                echo 'Rp. 1.500.000 - Rp. 2.500.000';
                                            } else if ($student[0]->penghasilan_ibu == 3) {
                                                echo 'Rp. 2.500.000 - RP. 3.500.000';
                                            } else if ($student[0]->penghasilan_ibu == 4) {
                                                echo 'Rp. 3.500.000 - Rp. 4.500.000';
                                            } else if ($student[0]->penghasilan_ibu == 5) {
                                                echo 'Rp. 4.500.000 - Rp. 5.500.000';
                                            } else if ($student[0]->penghasilan_ibu == 6) {
                                                echo 'Lebih dari Rp. 5.500.000';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="font-size-h6 font-weight-bold text-danger mb-5">Biodata Wali
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Nama Lengkap Wali:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->nama_wali); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">NIK KTP:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nik_wali); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tempat Lahir Wali:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext">
                                            <span
                                                class="font-weight-bolder"><?php echo strtoupper($student[0]->tempat_lahir_wali); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Tanggal Lahir Wali:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->tanggal_lahir_wali); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Pekerjaan Wali:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo strtoupper($student[0]->pekerjaan_wali); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Pendidikan Wali:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->pendidikan_wali == 1) {
                                                echo 'Tidak Sekolah';
                                            } else if ($student[0]->pendidikan_wali == 2) {
                                                echo 'SD';
                                            } else if ($student[0]->pendidikan_wali == 3) {
                                                echo 'SMP';
                                            } else if ($student[0]->pendidikan_wali == 4) {
                                                echo 'SMA';
                                            } else if ($student[0]->pendidikan_wali == 5) {
                                                echo 'D-I/D-II';
                                            } else if ($student[0]->pendidikan_wali == 6) {
                                                echo 'D-III';
                                            } else if ($student[0]->pendidikan_wali == 7) {
                                                echo 'D-IV/S1';
                                            } else if ($student[0]->pendidikan_wali == 8) {
                                                echo 'S2/S3';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Penghasilan Wali:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php
                                            if ($student[0]->penghasilan_wali == 1) {
                                                echo 'Kurang dari Rp. 1.500.000';
                                            } else if ($student[0]->penghasilan_wali == 2) {
                                                echo 'Rp. 1.500.000 - Rp. 2.500.000';
                                            } else if ($student[0]->penghasilan_wali == 3) {
                                                echo 'Rp. 2.500.000 - RP. 3.500.000';
                                            } else if ($student[0]->penghasilan_wali == 4) {
                                                echo 'Rp. 3.500.000 - Rp. 4.500.000';
                                            } else if ($student[0]->penghasilan_wali == 5) {
                                                echo 'Rp. 4.500.000 - Rp. 5.500.000';
                                            } else if ($student[0]->penghasilan_wali == 6) {
                                                echo 'Lebih dari Rp. 5.500.000';
                                            }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-danger font-weight-bold"
                        data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_alamat" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Alamat/Domisili Siswa
                        "<?php echo strtoupper($student[0]->nama_lengkap); ?>"</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body text-left">
                    <!--begin::Body-->
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                                <div class="font-size-h6 font-weight-bold text-danger mb-5">Alamat Kartu
                                    Keluarga</div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Alamat KK Lengkap:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ucwords(strtolower($student[0]->alamat_rumah_kk)); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Provinsi KK:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_provinsi_kk); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Kabupaten/Kota KK:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->nama_kabupaten_kota_kk); ?> -
                                            <?php echo strtoupper($student[0]->nama_kabupaten_kota_kk_adm); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Kecamatan KK:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_kecamatan_kk); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Kelurahan/Desa KK:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->nama_kelurahan_desa_kk); ?> -
                                            <?php echo strtoupper($student[0]->nama_kelurahan_desa_kk_adm); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">RT KK:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->rt_kk); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">RW KK:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->rw_kk); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Kodepos KK:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->kodepos_kk); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                                <div class="font-size-h6 font-weight-bold text-danger mb-5">Alamat Domisili
                                    Sekarang</div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Alamat Domisili Lengkap:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ucwords(strtolower($student[0]->alamat_rumah_dom)); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Provinsi Domisili:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_provinsi_dom); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Kabupaten/Kota Domisili:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->nama_kabupaten_kota_dom); ?> -
                                            <?php echo strtoupper($student[0]->nama_kabupaten_kota_dom_adm); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Kecamatan Domisili:</label>
                                    <div class="col-8">
                                        <span
                                            class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_kecamatan_dom); ?></span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Kelurahan/Desa Domisili:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->nama_kelurahan_desa_dom); ?> -
                                            <?php echo strtoupper($student[0]->nama_kelurahan_desa_dom_adm); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">RT Domisili:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->rt_dom); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">RW Domisili:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->rw_dom); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row my-2">
                                    <label class="col-4 col-form-label">Kodepos Domisili:</label>
                                    <div class="col-8">
                                        <span class="form-control-plaintext font-weight-bolder">
                                            <?php echo ($student[0]->kodepos_dom); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-danger font-weight-bold"
                        data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_berkas" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berkas Siswa
                        "<?php echo strtoupper($student[0]->nama_lengkap); ?>"</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="row">
                        <div class="col-12">
                            <h5>Foto Siswa</h5>
                            <img alt="Pic" width="150px" height="150px"
                                src="<?php echo base_url() . $student[0]->foto_siswa; ?>">
                        </div>
                        <div class="col-6">
                            <h5>Kartu Keluraga</h5>
                            <img alt="Pic" class="col-12" src="<?php echo base_url() . $student[0]->kartu_keluarga; ?>">
                        </div>
                        <div class="col-6">
                            <h5>Akta Kelahiran</h5>
                            <img alt="Pic" class="col-12" src="<?php echo base_url() . $student[0]->akta_kelahiran; ?>">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-danger font-weight-bold"
                        data-dismiss="modal">Tutup</button>
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
                if ($contact[0]->no_handphone_sd != "" or $contact[0]->no_handphone_sd != NULL) { ?>
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
                if ($contact[0]->no_handphone_smp != "" or $contact[0]->no_handphone_smp != NULL) { ?>
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
                if ($contact[0]->no_handphone_sma != "" or $contact[0]->no_handphone_sma != NULL) { ?>
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
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.js">
    </script>
    <script>
        $('#example_1').whatsappChatSupport();
    </script>
</body>
<!--end::Body-->

</html>