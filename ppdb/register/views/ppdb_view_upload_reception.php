<html lang="en">
    <!--begin::Head-->
    <head>
        <meta charset="utf-8" />
        <title> <?php echo $title; ?> </title>
        <meta name="description" content="<?php echo $title; ?> " />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="canonical" href="<?php echo base_url(); ?>" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Custom Styles(used by this page)-->
        <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/login/classic/login-1.css" rel="stylesheet" type="text/css" />
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
        <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.css" rel="stylesheet" type="text/css"  />

        <style>
            .blockMsg {
                max-width: 75px;
            }
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
                            <h3 class="font-size-h1 mb-5 font-weight-bolder text-white">SPPDB <?php echo $page[0]->nama_website; ?></h3>
                            <p class="font-weight-bolder text-white"><?php echo $page[0]->greeting_website; ?>.</p>
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
                                <h3 class="font-size-h1 text-warning font-weight-bold">Upload Bukti Pembayaran Formulir</h3>
                                <p class="text-dark-75 font-weight-bold">Isikan <b class="text-danger">NOMOR PENDAFTARAN</b> dan silahkan Upload <b class="text-danger">BUKTI PEMBAYARAN</b>. </p>
                            </div>
                            <!--begin::Form-->
                            <?php echo $this->session->flashdata('flash_message'); ?>
                            <form class="form" method="POST" action="<?php echo base_url(); ?>/ppdb/register/post_upload_payment_slip" enctype="multipart/form-data"  novalidate="novalidate" id="kt_upload_payment">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Nomor Pendaftaran</label>
                                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Isikan Nomor Pendaftaran" name="nomor_pendaftaran" />
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan <b class="text-danger">NOMOR PENDAFTARAN</b> yang telah Kami kirimkan ke email Anda. </span>               
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Nomor Rekening Pembayaran</label>
                                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Isikan Nomor Rekening Pembayaran" name="nomor_rekening" />
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nomor Rekening Pembayaran. </span>               
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Atas Nama Rekening Pembayaran</label>
                                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Isikan Atas Nama Rekening Pembayaran" name="atas_nama_rekening" />
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Atas Nama Rekening Pembayaran. </span>               
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label>Upload Bukti Transfer</label>
                                            <input type="file" class="dropify" name="bukti_transfer" data-max-file-size="5M" data-height="250" data-allowed-file-extensions="png jpg jpeg" />
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>upload <b class="text-danger">BUKTI TRANSFER</b> berupa image/foto dengan format png, jpg, jpeg dengan ukuran maksimum 5Mb. </span>               
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group d-flex flex-wrap flex-center">
                                    <button id="kt_login_signin_submit" class="btn btn-success font-weight-bold px-9 py-4 my-3 mx-4">Kirim Bukti</button>
                                    <a href="<?php echo site_url('ppdb/home'); ?>" type="button" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4 "><li class="fa fa-home font-size-h4"></li> Kembali ke Menu</a>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signup-->

                    </div>
                    <!--end::Content body-->
                    <!--begin::Content footer for mobile-->
                    <div class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                        <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 Sekolah Utsman</div>

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
                    <?php } if ($contact[0]->no_handphone_sd != "" or $contact[0]->no_handphone_sd != NULL) { ?>
                        <div class="wcs_popup_person" data-number="<?php echo "62" . substr($contact[0]->no_handphone_sd, 1); ?>" data-default-msg="Assslamualaikum, permisi mau bertanya?">
                            <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>" alt=""></div>
                            <div class="wcs_popup_person_content">
                                <div class="wcs_popup_person_name">Admin SD</div>
                                <div class="wcs_popup_person_description">Petugas PPDB SD</div>
                                <div class="wcs_popup_person_status">Sedang Online</div>
                            </div>
                        </div>
                    <?php } if ($contact[0]->no_handphone_smp != "" or $contact[0]->no_handphone_smp != NULL) { ?>
                        <div class="wcs_popup_person" data-number="<?php echo "62" . substr($contact[0]->no_handphone_smp, 1); ?>" data-default-msg="Assslamualaikum, permisi mau bertanya?">
                            <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>" alt=""></div>
                            <div class="wcs_popup_person_content">
                                <div class="wcs_popup_person_name">Admin SMP</div>
                                <div class="wcs_popup_person_description">Petugas PPDB SMP</div>
                                <div class="wcs_popup_person_status">Sedang Online</div>
                            </div>
                        </div>
                    <?php } if ($contact[0]->no_handphone_sma != "" or $contact[0]->no_handphone_sma != NULL) { ?>
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
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/global/plugins.bundle.js"></script>
        <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/scripts.bundle.js"></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
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
                    'remove':  'Hapus',
                    'error':   'Ooops, terjadi kesalahan.'
            }
            });
        </script>

        <!--end::Page Scripts-->
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