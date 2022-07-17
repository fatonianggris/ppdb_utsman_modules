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
        <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.css" rel="stylesheet" type="text/css"  />

    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-4 login-signin-on d-flex flex-row-fluid" >
                <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/bg-3.jpg');">
                    <div class="login-form text-center p-7 position-relative overflow-hidden">
                        <!--begin::Login Header-->
                        <div class="d-flex flex-center mb-5">
                            <a href="#">
                                <img src="<?php echo base_url() . $page[0]->logo_website; ?>" class="max-h-105px" alt="" />
                            </a>
                        </div>
                        <!--end::Login Header-->
                        <?php if ($formulir[0]->status_pembayaran == 0) { ?>
                            <!--begin::Login Sign in form-->
                            <div class="login-signin">

                                <div class="mb-10 ">
                                    <p class="font-mobile font-weight-boldest text-success ">SELAMAT!, ANDA DINYATAKAN "LULUS"</p>
                                    <div class="font-weight-bold text-danger font-size-lg">Selamat datang di Sekolah Utsman, Berikut merupakan informasi terkait data diri Anda:</div>
                                </div>
                                <div class="table-responsive px-mobile">
                                    <?php echo $this->session->flashdata('flash_message'); ?>
                                    <table class="table table-light table-light-success text-center">
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
                                                <td class="font-weight-boldest table-center font-size-sm"><?php echo $formulir[0]->nomor_formulir ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->nama_lengkap; ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->nama_wali; ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->email; ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->nomor_handphone; ?></td>
                                                <td class="table-center font-size-sm">
                                                    <span class="label label-md font-weight-boldest label-primary label-inline">
                                                        <?php
                                                        if ($formulir[0]->level_tingkat == 1) {
                                                            echo 'KB';
                                                        } elseif ($formulir[0]->level_tingkat == 2) {
                                                            echo 'TK';
                                                        } elseif ($formulir[0]->level_tingkat == 3) {
                                                            echo 'SD';
                                                        } elseif ($formulir[0]->level_tingkat == 4) {
                                                            echo 'SMP';
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
                                                <td class="table-center font-size-sm font-weight-bold"><?php echo $formulir[0]->tahun_ajaran; ?></td>
                                            </tr>  
                                        </tbody>                                          
                                    </table>
                                </div>
                                <div class="mt-5">
                                    <span class="mt-10 mb-10 text-danger font-size-lg">Mohon lakukan <b>PEMBAYARAN</b> dalam kurun waktu 1 x 24 jam ke rekening di bawah ini:</span>
                                </div>
                                <div class="mt-5 px-mobile">
                                    <div class="accordion accordion-toggle-arrow" id="accordionExample">
                                        <?php
                                        if (!empty($bank_account)) {
                                            foreach ($bank_account as $key => $value) {
                                                ?> 
                                                <div class="card">
                                                    <div class="card-header bg-light-success" id="heading<?php echo $value->id_alat_bayar; ?>">
                                                        <div class="card-title text-danger font-weight-bolder" data-toggle="collapse" data-target="#collapseOne<?php echo $value->id_alat_bayar; ?>">
                                                            <i class="flaticon2-layers-1 text-danger"></i> <?php echo strtoupper($value->nama_alatbayar); ?>
                                                        </div>
                                                    </div>
                                                    <div id="collapseOne<?php echo $value->id_alat_bayar; ?>" class="collapse show" data-parent="#accordionExample">
                                                        <div class="card-body">
                                                            <span class="mt-30 mb-20 font-size-md text-left font-weight-bold"><?php echo ucwords($value->catatan_transfer); ?></span>
                                                            <span class="mt-30 mb-30 font-size-h4 text-left font-weight-bolder">Silahakan Transfer Sejumlah:</span><br><br>
                                                            <span class="mt-30 mb-30 font-size-sm text-left"> <b class="text-danger font-size-h1">Rp. <?php echo $formulir[0]->total_biaya; ?></b> <br> (mohon transfer senilai tersebut), <a href="#" class="font-weight-bold" data-toggle="modal" data-target="#modal_rincian" ><b>KILK LIHAT RINCIAN</b></a> </span><br><br>
                                                            <span class="mt-30 mb-30 font-size-h4 text-left font-weight-bolder">Ke Nomor Rekening  <b class="text-warning">"<?php echo strtoupper($value->nama_alatbayar); ?>"</b> Di Bawah Ini.</span><br><br>
                                                            <span class="mt-30 mb-20 text-danger display-4 font-weight-boldest">NO REK. <?php echo strtoupper($value->nomor_alatbayar); ?></span><br>
                                                            <span class="mt-30 mb-20 text-warning font-size-h3 font-weight-bolder">A.N <?php echo strtoupper($value->atas_nama); ?></span><br><br>
                                                            <span class="mt-30 mb-20 font-size-md text-left font-weight-bold"><?php echo ucwords($value->petunjuk_transfer); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                            }  //ngatur nomor urut
                                        }
                                        ?>          
                                    </div>
                                </div>
                                <div class="mt-10">
                                    <span class="mt-10 mb-10 text-danger font-size-lg">Sudah melakukan pembayaran?</span>
                                </div>
                                <a data-toggle="modal" data-target="#modal_upload"  class="btn btn-success font-weight-bold px-9 py-4 my-3 mx-4 mt-8">Upload Bukti Pembayaran</a>
                                <a href="<?php echo site_url("ppdb/register/logout_formulir"); ?>" class="btn btn-warning font-weight-bold px-9 py-4 my-3 mx-4 mt-8 mt-8">Keluar</a>

                            </div>
                            <!--end::Login Sign in form-->
                        <?php } elseif ($formulir[0]->status_pembayaran == 1) { ?>
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
                                                <td class="font-weight-boldest table-center font-size-sm"><?php echo $formulir[0]->nomor_formulir ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->nama_lengkap; ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->nama_wali; ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->email; ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->nomor_handphone; ?></td>
                                                <td class="table-center font-size-sm">
                                                    <span class="label label-md font-weight-boldest label-primary label-inline">
                                                        <?php
                                                        if ($formulir[0]->level_tingkat == 1) {
                                                            echo 'KB';
                                                        } elseif ($formulir[0]->level_tingkat == 2) {
                                                            echo 'TK';
                                                        } elseif ($formulir[0]->level_tingkat == 3) {
                                                            echo 'SD';
                                                        } elseif ($formulir[0]->level_tingkat == 4) {
                                                            echo 'SMP';
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
                                                <td class="table-center font-size-sm font-weight-bold"><?php echo $formulir[0]->tahun_ajaran; ?></td>
                                            </tr>  
                                        </tbody>                                      
                                    </table>
                                </div>
                                <div class="mt-10">
                                    <div class="font-weight-bold text-danger font-size-lg"><b> STATUS PEMBAYARAN </b> Anda dapat dilihat paling lambat 2 x 24 jam setelah anda menerima notifikasi ini. Terimakasih</div>
                                </div>
                                <a href="<?php echo site_url("ppdb/register/logout_formulir"); ?>" class="btn btn-warning font-weight-bold px-9 py-4 my-3 mx-4 mt-8 mt-10">Keluar</a>

                            </div>
                            <!--end::Login Sign in form-->
                        <?php } elseif ($formulir[0]->status_pembayaran == 2) { ?>
                            <!--begin::Login Sign in form-->
                            <div class="login-signin">
                                <div class="mb-10 ">
                                    <p class="font-mobile font-weight-boldest text-success ">SELAMAT!, PEMBAYARAN ANDA BERHASIL</p>
                                    <div class="font-weight-bold text-danger font-size-lg">Terimakasih telah melakukan pembayaran. Pembayaran Uang Masuk PPDB Anda telah Kami terima.</div>
                                </div>
                                <div class="table-responsive px-mobile">
                                    <?php echo $this->session->flashdata('flash_message'); ?>
                                    <table class="table table-light table-light-success text-center">
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
                                                <td class="font-weight-boldest table-center font-size-sm"><?php echo $formulir[0]->nomor_formulir ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->nama_lengkap; ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->nama_wali; ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->email; ?></td>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->nomor_handphone; ?></td>
                                                <td class="table-center font-size-sm">
                                                    <span class="label label-md font-weight-boldest label-primary label-inline">
                                                        <?php
                                                        if ($formulir[0]->level_tingkat == 1) {
                                                            echo 'KB';
                                                        } elseif ($formulir[0]->level_tingkat == 2) {
                                                            echo 'TK';
                                                        } elseif ($formulir[0]->level_tingkat == 3) {
                                                            echo 'SD';
                                                        } elseif ($formulir[0]->level_tingkat == 4) {
                                                            echo 'SMP';
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
                                                <td class="table-center font-size-sm font-weight-bold"><?php echo $formulir[0]->tahun_ajaran; ?></td>
                                            </tr>  
                                        </tbody>                                               
                                    </table>
                                </div>   
                                <div class="table-responsive offset-mobile-2 mt-3 px-mobile">
                                    <table class="table table-light table-light-success text-center">
                                        <thead>
                                            <tr>
                                                <th class="table-center " >*Keterangan</th>
                                                <th class="table-center" style="width: 250px;">Bukti Pembayaran</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table-center font-size-sm"><?php echo $formulir[0]->keterangan; ?></td>
                                                <td class="table-center font-size-sm"><?php echo ($formulir[0]->bukti_transfer != NULL) ? '<a href="#" type="button" class="bt btn-xs font-weight-bold" data-toggle="modal" data-target="#modal_bukti" > <span class="label label-md font-weight-boldest label-success label-inline">Lihat Bukti</span></a>' : ''; ?></td>
                                            </tr>    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a href="<?php echo site_url("ppdb/register/logout_formulir"); ?>" class="btn btn-warning font-weight-bold px-9 py-4 my-3 mx-4 mt-8 mt-10">Keluar</a>

                            <!--end::Login Sign in form-->                      
                        <?php } ?>  
                    </div>
                </div>
            </div>
            <!--end::Login-->
        </div>

        <div class="modal fade" id="modal_rincian" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rincian Biaya Uang Masuk PPDB</h5>
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
                                        <th class="table-center">Voucher</th>
                                        <th class="table-center">Biaya Awal (Rp)</th>
                                        <th class="table-center">Potongan (%)</th>
                                        <th class="table-center">Sub Total (Rp)</th>                                           
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($cost)) {
                                        foreach ($cost as $key => $value) {
                                            ?> 
                                            <tr>
                                                <td class="font-weight-bold font-size-sm"><?php echo ucwords(strtolower($value->nama_biaya)); ?></td>
                                                <td class="table-center font-size-sm">
                                                    <?php
                                                    if (!empty($voucher)) {
                                                        foreach ($voucher as $key => $value_v) {
                                                            if ($value->id_nama_biaya == $value_v->id_nama_biaya) {
                                                                $id_array_voucher = explode(',', $formulir[0]->id_voucher);
                                                                if (in_array($value_v->id_voucher, $id_array_voucher)) {
                                                                    echo $value_v->kode_voucher;
                                                                }
                                                            }
                                                        }  //ngatur nomor urut
                                                    }
                                                    ?>        
                                                </td>
                                                <td class="table-center font-size-sm"><?php echo number_format($value->nominal, 0, ',', '.'); ?></td>
                                                <td class="table-center font-size-sm">
                                                    <?php
                                                    if (!empty($voucher)) {
                                                        foreach ($voucher as $key => $value_v) {
                                                            if ($value->id_nama_biaya == $value_v->id_nama_biaya) {
                                                                $id_array_voucher = explode(',', $formulir[0]->id_voucher);
                                                                if (in_array($value_v->id_voucher, $id_array_voucher)) {
                                                                    echo $value_v->potongan;
                                                                }
                                                            }
                                                        }  //ngatur nomor urut
                                                    }
                                                    ?>         
                                                </td>
                                                <td class="table-center font-size-sm">
                                                    <?php
                                                    $stat = FALSE;
                                                    if (!empty($voucher)) {
                                                        foreach ($voucher as $key => $value_v) {
                                                            if ($value->id_nama_biaya == $value_v->id_nama_biaya) {
                                                                $id_array_voucher = explode(',', $formulir[0]->id_voucher);
                                                                if (in_array($value_v->id_voucher, $id_array_voucher)) {
                                                                    echo number_format(($value->nominal)-($value->nominal * $value_v->potongan / 100), 0, ',', '.');
                                                                    $stat = TRUE;
                                                                }
                                                            }
                                                        }  //ngatur nomor urut
                                                    }
                                                    if ($stat == FALSE) {
                                                        echo number_format($value->nominal, 0, ',', '.');
                                                    }
                                                    ?>
                                                </td>
                                            </tr>  
                                            <?php
                                        }  //ngatur nomor urut
                                    }
                                    ?>       
                                </tbody>                                          
                            </table>
                            <div class="text-center">
                                <span class="mt-30 mb-30 font-size-h4 text-left font-weight-bolder text-center">TOTAL BIAYA:</span><br>
                                <b class="text-danger font-size-h1">Rp. <?php echo $formulir[0]->total_biaya; ?></b>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal_bukti" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Foto Bukti Pembayaran Uang Masuk PPDB</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <img alt="Pic" class="col-12" src="<?php echo base_url() . $formulir[0]->bukti_transfer; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal_upload" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document" id="kt_login">
                <form class="form" method="POST" action="<?php echo site_url('/ppdb/register/post_upload_payment_ppdb'); ?>" enctype="multipart/form-data"  novalidate="novalidate" id="kt_upload_payment_ppdb">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran PPDB</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12">                               
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group text-left">
                                            <label>Nomor Formulir</label>
                                            <input readonly="" value="<?php echo paramEncrypt($formulir[0]->id_formulir); ?>" type="hidden" name="id_formulir" />      
                                            <input class="form-control form-control-solid h-auto py-5 px-6" readonly="" value="<?php echo $formulir[0]->nomor_formulir; ?>" type="text" placeholder="Isikan Nomor Formulir" name="nomor_formulir" />
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group text-left">
                                            <label>Nomor Rekening Pembayaran</label>
                                            <input class="form-control form-control-solid h-auto py-5 px-6" type="text" placeholder="Isikan Nomor Rekening Pembayaran" name="nomor_rekening" />
                                        </div>
                                    </div>

                                </div>    
                                <div class="row">                                    
                                    <div class="col-xl-12">
                                        <div class="form-group text-left">
                                            <label>Atas Nama Rekening Pembayaran</label>
                                            <input class="form-control form-control-solid h-auto py-5 px-6"  type="text" placeholder="Isikan Atas Nama Rekening Pembayaran" name="atas_nama_rekening" />
                                        </div>
                                    </div>
                                </div>         
                                <div class="row">                                    
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <label></label>        
                                            <input type="file" class="dropify" name="bukti_transfer" data-max-file-size="5M" data-height="200" data-allowed-file-extensions="png jpg jpeg" />
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>upload <b class="text-danger">BUKTI TRANSFER</b> berupa image/foto dengan format png, jpg, jpeg dan ukuran maksimum 5Mb. </span>               
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="kt_login_signin_submit" class="btn btn-success font-weight-bold mr-5">Upload Bukti</button>
                            <button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end::Main-->
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
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/global/plugins.bundle.js"></script>
        <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/scripts.bundle.js"></script>
        <!--end::Global Theme Bundle-->

        <!--begin::Page Scripts(used by this page)-->
        <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/features/miscellaneous/sweetalert2.js"></script>
        <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/upload-payment-ppdb.js"></script>

        <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/dropify.js"></script>
        <!--end::Page Scripts-->
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
    </body>
    <!--end::Body-->
</html>