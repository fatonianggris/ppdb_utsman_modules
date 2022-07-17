<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-12 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Heading-->
                <div class="d-flex flex-column">
                    <!--begin::Title-->
                    <h2 class="text-white font-weight-bold my-2 mr-5">Penerimaan</h2>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <div class="d-flex align-items-center font-weight-bold my-2">
                        <!--begin::Item-->
                        <a href="#" class="opacity-75 hover-opacity-100">
                            <i class="flaticon2-shelter text-white icon-1x"></i>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Peserta Didik</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Daftar Peserta Diterima</a>
                        <!--end::Item-->
                    </div>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">

                <!--begin::Dropdown-->
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="top">
                    <a onclick="window.history.back();" class="btn btn-light-danger font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-backward"></i>Kembali</a>           
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>

    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->
            <?php echo $this->session->flashdata('flash_message'); ?>
            <!--end::Notice-->
            <div class="row">
                <!--begin::Stats Widget 28-->
                <div class="col-xl-2 col-6">
                    <!--begin::Tiles Widget 11-->
                    <div class="card card-custom bg-success gutter-b" >
                        <div class="card-body">
                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M6.182345,4.09500888 C6.73256296,3.42637697 7.56648864,3 8.5,3 L15.5,3 C16.4330994,3 17.266701,3.42600075 17.8169264,4.09412386 C17.8385143,4.10460774 17.8598828,4.11593789 17.8809917,4.1281251 L22.5900048,6.8468751 C23.0682974,7.12301748 23.2321726,7.73460788 22.9560302,8.21290051 L21.2997802,11.0816097 C21.0236378,11.5599023 20.4120474,11.7237774 19.9337548,11.4476351 L18.5,10.6198563 L18.5,19 C18.5,19.5522847 18.0522847,20 17.5,20 L6.5,20 C5.94771525,20 5.5,19.5522847 5.5,19 L5.5,10.6204852 L4.0673344,11.4476351 C3.58904177,11.7237774 2.97745137,11.5599023 2.70130899,11.0816097 L1.04505899,8.21290051 C0.768916618,7.73460788 0.932791773,7.12301748 1.4110844,6.8468751 L6.12009753,4.1281251 C6.14061376,4.11628005 6.16137525,4.10524462 6.182345,4.09500888 Z" fill="#000000" opacity="0.3"/>
                                <path d="M9.85156673,3.2226499 L9.26236944,4.10644584 C9.11517039,4.32724441 9.1661011,4.62457583 9.37839459,4.78379594 L11,6 L10.0353553,12.7525126 C10.0130986,12.9083095 10.0654932,13.0654932 10.1767767,13.1767767 L11.6464466,14.6464466 C11.8417088,14.8417088 12.1582912,14.8417088 12.3535534,14.6464466 L13.8232233,13.1767767 C13.9345068,13.0654932 13.9869014,12.9083095 13.9646447,12.7525126 L13,6 L14.6216054,4.78379594 C14.8338989,4.62457583 14.8848296,4.32724441 14.7376306,4.10644584 L14.1484333,3.2226499 C14.0557004,3.08355057 13.8995847,3 13.7324081,3 L10.2675919,3 C10.1004153,3 9.94429962,3.08355057 9.85156673,3.2226499 Z" fill="#000000"/>
                                </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_accepted[0]->laki_laki; ?></div>
                            <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">LAKI-LAKI</a>
                        </div>
                    </div>
                    <!--end::Tiles Widget 11-->
                </div>

                <!--end::Stats Widget 25-->
                <div class="col-xl-2 col-6">
                    <!--begin::Stats Widget 26-->                    
                    <div class="card card-custom bg-warning gutter-b">
                        <div class="card-body">
                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M8.04050792,3 C8.31778201,4.50768629 9.98487319,5.66666667 12,5.66666667 C14.0151268,5.66666667 15.682218,4.50768629 15.9594921,3 L18.381966,3 C18.9342508,3 19.381966,3.44771525 19.381966,4 C19.381966,4.1552451 19.3458209,4.30835816 19.2763932,4.4472136 L16.2763932,10.4472136 C16.1070012,10.7859976 15.7607381,11 15.381966,11 L8.61803399,11 C8.23926193,11 7.89299881,10.7859976 7.7236068,10.4472136 L4.7236068,4.4472136 C4.47661755,3.9532351 4.6768419,3.35256206 5.17082039,3.10557281 C5.30967583,3.03614509 5.46278889,3 5.61803399,3 L8.04050792,3 Z" fill="#000000" opacity="0.3"/>
                                <path d="M9.35406592,12 L14.6459341,12 C15.4637433,12 16.1991608,12.4979019 16.5028875,13.2572186 L19.4514437,20.6286093 C19.6565571,21.1413928 19.4071412,21.7233633 18.8943577,21.9284767 C18.7762374,21.9757248 18.6501865,22 18.522967,22 L5.47703296,22 C4.92474821,22 4.47703296,21.5522847 4.47703296,21 C4.47703296,20.8727806 4.50130816,20.7467296 4.54855627,20.6286093 L7.49711254,13.2572186 C7.80083924,12.4979019 8.53625675,12 9.35406592,12 Z" fill="#000000"/>
                                </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_accepted[0]->perempuan; ?></div>
                            <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">PEREMPUAN</a>
                        </div>
                    </div>
                    <!--end::Tiles Widget 11-->
                </div>
                <!--end::Stats Widget 26-->
                <!--end::Stats Widget 25-->
                <div class="col-xl-2 col-6">
                    <!--begin::Stats Widget 26-->                    
                    <div class="card card-custom bg-primary gutter-b">
                        <div class="card-body">
                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_accepted[0]->kb; ?></div>
                            <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang KB</a>
                        </div>
                    </div>
                    <!--end::Tiles Widget 11-->
                </div>
                <!--end::Stats Widget 26-->
                <!--end::Stats Widget 25-->
                <div class="col-xl-2 col-6">
                    <!--begin::Stats Widget 26-->                    
                    <div class="card card-custom bg-primary gutter-b">
                        <div class="card-body">
                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_accepted[0]->tk; ?></div>
                            <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang TK</a>
                        </div>
                    </div>
                    <!--end::Tiles Widget 11-->
                </div>
                <!--end::Stats Widget 26-->
                <!--end::Stats Widget 25-->
                <div class="col-xl-2 col-6">
                    <!--begin::Stats Widget 26-->                    
                    <div class="card card-custom bg-primary gutter-b">
                        <div class="card-body">
                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_accepted[0]->sd; ?></div>
                            <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang SD</a>
                        </div>
                    </div>
                    <!--end::Tiles Widget 11-->
                </div>
                <!--end::Stats Widget 26-->
                <!--end::Stats Widget 25-->
                <div class="col-xl-2 col-6">
                    <!--begin::Stats Widget 26-->                    
                    <div class="card card-custom bg-primary gutter-b">
                        <div class="card-body">
                            <span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"/>
                                <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                            <div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_accepted[0]->smp; ?></div>
                            <a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang SMP</a>
                        </div>
                    </div>
                    <!--end::Tiles Widget 11-->
                </div>
                <!--end::Stats Widget 26-->
            </div>
            <!--end::Notice-->
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <div class="card-body">
                            <!--begin: Search Form-->
                            <!--begin::Search Form-->
                            <div class="mb-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-11 col-xl-11">
                                        <div class="row align-items-center">
                                            <div class="col-lg-3 my-2 my-md-0">
                                                <div class="input-icon">
                                                    <input type="text" class="form-control" placeholder="Cari..." id="kt_datatable_search_query" />
                                                    <span>
                                                        <i class="flaticon2-search-1 text-muted"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-5 my-2 my-md-0">
                                                <div class="row align-items-center">
                                                    <div class="col-md-4 my-2 my-md-0">
                                                        <div class="d-flex align-items-center">                                                   
                                                            <select class="form-control" id="kt_datatable_search_grade">
                                                                <option value="">Pilih Jenjang</option>
                                                                <option value="1">KB</option>
                                                                <option value="2">TK</option>
                                                                <option value="3">SD</option>
                                                                <option value="4">SMP</option>                                                       
                                                                <option value="">Semua</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 my-2 my-md-0">
                                                        <div class="d-flex align-items-center">                                                   
                                                            <select class="form-control" id="kt_datatable_search_program">
                                                                <option value="">Pilih Program</option>
                                                                <option value="1">Reguler</option>
                                                                <option value="2">ICP</option>
                                                                <option value="">Semua</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 my-2 my-md-0">
                                                        <div class="d-flex align-items-center">                                                   
                                                            <select class="form-control" id="kt_datatable_search_gender">
                                                                <option value="">Pilih JK</option>
                                                                <option value="1">Laki-laki</option>
                                                                <option value="2">Perempuan</option>
                                                                <option value="">Semua</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 my-2 my-md-0">
                                                <div class="d-flex align-items-center">                                                   
                                                    <select class="form-control" id="kt_datatable_search_payment">
                                                        <option value="">Stat. Pembayaran</option>
                                                        <option value="0">Belum Bayar</option>
                                                        <option value="1">Sudah Bayar</option>
                                                        <option value="">Semua</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 my-2 my-md-0">
                                                <div class="d-flex align-items-center">                                                   
                                                    <select class="form-control" id="kt_datatable_search_schoolyear">
                                                        <option value="">Pilih Tahun Ajaran</option>
                                                        <?php
                                                        if (!empty($schoolyear)) {
                                                            foreach ($schoolyear as $key => $value_sch) {
                                                                if ($value_sch->status_tahun_ajaran != '1') {
                                                                    ?>
                                                                    <option value="<?php echo $value_sch->tahun_awal; ?>/<?php echo $value_sch->tahun_akhir; ?>"><?php echo $value_sch->tahun_awal; ?>/<?php echo $value_sch->tahun_akhir; ?> </option>                                     
                                                                <?php } else {
                                                                    ?>
                                                                    <option value="<?php echo $value_sch->tahun_awal; ?>/<?php echo $value_sch->tahun_akhir; ?>"><?php echo $value_sch->tahun_awal; ?>/<?php echo $value_sch->tahun_akhir; ?> </option>                                     
                                                                    <?php
                                                                }
                                                            }
                                                        }
                                                        ?>        
                                                        <option value="">Semua</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 col-xl-1">
                                        <div class="btn-group">
                                            <button class="btn btn-primary font-weight-bold btn-md dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Export
                                            </button>
                                            <div class="dropdown-menu">
                                                <form class="form" id="frm-excel" action="<?php echo site_url('ppdb/report/export_data_csv'); ?>" method="POST">  
                                                    <input type="text" id="id_check_excel" class="form-control" value="" name="data_check" style="display:none">                         
                                                    <button class="dropdown-item" role="button" type="submit"><i class="flaticon2-checking"></i> Laporan .csv</button>
                                                </form>
                                                <form class="form" id="frm-form" action="<?php echo site_url('ppdb/admission/export_student_formulir'); ?>" method="POST">  
                                                    <input type="text" id="id_check_form" class="form-control" value="" name="data_check" style="display:none">                         
                                                    <button class="dropdown-item" role="button" type="submit"><i class="flaticon2-box-1"></i> Formulir .pdf</button>
                                                </form>
                                                <form class="form" id="frm-files" action="<?php echo site_url('ppdb/admission/export_student_files'); ?>" method="POST">  
                                                    <input type="text" id="id_check_files" class="form-control" value="" name="data_check" style="display:none">                         
                                                    <button class="dropdown-item" role="button" type="submit"><i class="flaticon2-box-1"></i> Berkas .pdf</button>
                                                </form>                                               
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--end::Search Form-->
                            <!--end: Search Form-->
                            <!--begin: Datatable-->
                            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_admission_accepted">
                                <thead>
                                    <tr>
                                        <th title="ID">ID</th>
                                        <th title="No Formulir">No Formulir</th>
                                        <th title="Nama Calon">Nama Calon</th>
                                        <th title="JK">JK</th> 
                                        <th title="Jenjang">Jenjang</th>                                          
                                        <th title="Program">Program</th>
                                        <th title="Penerimaan">Penerimaan</th>  
                                        <th title="Pembayaran">Pembayaran</th>   
                                        <th title="Keterangan">Keterangan</th>   
                                        <th title="TA">TA</th>
                                        <th title="Tanggal">Tanggal</th>
                                        <th title="Aksi">Aksi</th>                                           
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (!empty($formulir)) {
                                        foreach ($formulir as $key => $value) {
                                            ?> 
                                            <tr>
                                                <td><?php echo $value->id_formulir; ?></td>
                                                <td><b><?php echo $value->nomor_formulir; ?></b></td>
                                                <td><?php echo strtoupper($value->nama_lengkap); ?></td>
                                                <td><?php echo $value->jenis_kelamin; ?></td>
                                                <td><?php echo $value->level_tingkat; ?></td>
                                                <td><?php echo $value->jalur; ?></td>                                               
                                                <td>
                                                    <?php echo $value->status_penerimaan; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->status_pembayaran; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->keterangan; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value->tahun_ajaran; ?>
                                                </td>

                                                <td><?php echo $value->tanggal_isi; ?></td>
                                                <td>
                                                    <div class="dropdown dropdown-inline">
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown">
                                                            <span class="svg-icon svg-icon-md">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"/>
                                                                <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                                                                </g>
                                                                </svg>
                                                            </span>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                            <ul class="navi flex-column navi-hover py-2">
                                                                <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                                    Pilih Aksi:
                                                                </li>
                                                                <li  class="navi-item">
                                                                    <a href="<?php echo site_url("/ppdb/admission/detail_student_accepted/" . paramEncrypt($value->id_formulir)); ?>" class="navi-link">
                                                                        <span class="navi-icon"><i class="la la-search text-success"></i></span>
                                                                        <span class="navi-text">Lihat Detail</span>
                                                                    </a>
                                                                </li>
                                                                <?php if ($value->status_pembayaran == 0) { ?>
                                                                    <li class="navi-item">
                                                                        <?php
                                                                        $program = '';
                                                                        $jenjang = '';
                                                                        if ($value->jalur == 1) {
                                                                            $program = 'REGULER';
                                                                        } else if ($value->jalur == 2) {
                                                                            $program = 'ICP';
                                                                        }
                                                                        if ($value->level_tingkat == 1) {
                                                                            $jenjang = 'KB';
                                                                        } else if ($value->level_tingkat == 2) {
                                                                            $jenjang = 'TK';
                                                                        } else if ($value->level_tingkat == 3) {
                                                                            $jenjang = 'SD';
                                                                        } else if ($value->level_tingkat == 4) {
                                                                            $jenjang = 'SMP';
                                                                        }
                                                                        ?>   
                                                                        <a href = "https://web.whatsapp.com/send?phone=62<?php echo substr($value->nomor_handphone, 1); ?>&text=*_Assalamualaikum Wr. Wb._*
                                                                        <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>*--PEMBAYARAN PPDB SEKOLAH UTSMAN--*
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>_Pembayaran PPDB Sekolah Utsman belum Anda proses:_
                                                                           <?php echo urlencode("\n") ?>- No. Formulir: *<?php echo $value->nomor_formulir; ?>*
                                                                           <?php echo urlencode("\n") ?>- Nama: *<?php echo ucwords(strtolower($value->nama_lengkap)); ?>*
                                                                           <?php echo urlencode("\n") ?>- Jenjang: *<?php echo $jenjang; ?>*
                                                                           <?php echo urlencode("\n") ?>- Program: *<?php echo $program; ?>*
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>_Silahkan melakukan pembayaran sejumlah:_
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>*Rp. <?php echo $value->total_biaya ?>* (mohon transfer senilai tersebut)
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>_ke *Nomor Rekening* dibawah ini:_
                                                                           <?php
                                                                           if (!empty($bank_account)) {
                                                                               foreach ($bank_account as $key => $value_bank) {
                                                                                   ?>
                                                                                   <?php echo urlencode("\n") ?>*- <?php echo strtoupper($value_bank->nama_alatbayar); ?> / no rek. <?php echo strtoupper($value_bank->nomor_alatbayar); ?> / an. <?php echo strtoupper($value_bank->atas_nama); ?>*
                                                                                   <?php
                                                                               }  //ngatur nomor urut
                                                                           }
                                                                           ?>          
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>```Mohon segera melakukan``` *PEMBAYARAN*```. Setelah melakukan pembayaran, harap```. *UPLOAD BUKTI TRANSFER*``` dengan klik ```*LINK* ``` di bawah ini```
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>*<?php echo site_url('ppdb/register/login_announcement'); ?>*
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>```Atas perhatian Bapak/Ibu kami ucapkan terima kasih.```
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>_*Admin PPDB Sekolah Utsman*_" target="_blank" class="navi-link">
                                                                            <span class="navi-icon"><i class="la la-mobile-phone text-primary"></i></span>
                                                                            <span class="navi-text">Kirim WA</span>
                                                                        </a>
                                                                    </li>
                                                                <?php } ?>
                                                                <li  class="navi-item">
                                                                    <a href="<?php echo site_url("/ppdb/admission/print_student_formulir/" . paramEncrypt($value->id_formulir)); ?>" class="navi-link">
                                                                        <span class="navi-icon"><i class="la la-file-download text-warning"></i></span>
                                                                        <span class="navi-text">Unduh Formulir</span>
                                                                    </a>
                                                                </li>
                                                                <!--                                                                <li class="navi-item">
                                                                                                                                    <a href="javascript:act_delete_formulir('<?php echo paramEncrypt($value->id_formulir); ?>', '<?php echo strtoupper($value->nama_lengkap); ?>')"  class="navi-link">
                                                                                                                                        <span class="navi-icon"><i class="la la-close text-danger"></i></span>
                                                                                                                                        <span class="navi-text">Hapus</span>
                                                                                                                                    </a>
                                                                                                                                </li>-->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>                                                
                                            <?php
                                        }  //ngatur nomor urut
                                    }
                                    ?>          
                                </tbody>
                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/ktdatatable/base/html-table-admission-accepted.js">
</script>
