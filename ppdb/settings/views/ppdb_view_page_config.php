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
                    <h2 class="text-white font-weight-bold my-2 mr-5">Pengaturan</h2>
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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Halaman</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Konfigurasi Halaman Website</a>
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
                <div class="col-lg-12">
                    <!--begin::Card-->
                    <div class="card card-custom" id="kt_form" >
                        <div class="card-header">
                            <h3 class="card-title">
                                Edit Konfigurasi Halaman Website
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" action="<?php echo site_url('ppdb/settings/settings/update_general_page'); ?>" enctype="multipart/form-data" method="post" id="kt_add_page_form">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Nama Website</label>
                                            <input type="text" name="nama_website" value="<?php echo $page[0]->nama_website ?>" class="form-control  form-control-lg"  placeholder="Isikan Nama Website"/>
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nama Website, Contoh : "Sekolah Utsman"</span>               
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Sambutan Website</label>
                                            <input type="text" name="greeting_website" value="<?php echo $page[0]->greeting_website ?>"  class="form-control  form-control-lg"  placeholder="Isikan Sambutan"/>
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Sambutan Website</span>               
                                        </div>
                                    </div>     
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>URL Video Tutorial Alur PPDB</label>
                                            <input type="text" name="url_tutorial_alur" value="<?php echo $page[0]->url_tutorial_alur ?>"  class="form-control  form-control-lg"  placeholder="Isikan URL Video"/>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>isikan URL Video</span>               
                                        </div>
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Upload Logo Website</label>
                                            <input type="text" name="logo_temp" value="<?php echo $page[0]->logo_website ?>" style="display:none" />
                                            <input type="text" name="logo_temp_thumb" value="<?php echo $page[0]->logo_website_thumb; ?>" style="display:none" />
                                            <input type="file" class="dropify" name="logo_website" data-default-file="<?php echo base_url() . $page[0]->logo_website; ?>"  data-max-file-size="2M" data-height="225" data-allowed-file-extensions="png jpg jpeg" />
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>berformat jpg, png, jpeg, dan berukuran dibawah 2Mb (logo diutamakan resolusi 500*500 pixel).</span>               
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="form-group">
                                            <label>Tentang Website</label>
                                            <textarea class="form-control" id="kt-ckeditor-1" placeholder="Isikan Alamat" name="about_website" rows="2"><?php echo $page[0]->about_website; ?></textarea>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>isikan Tentang Website</span>               
                                        </div>
                                    </div>                                   
                                </div>
                            </div>
                            <div class="card-footer">
                                <button id="kt_login_signin_submit" class="btn btn-success font-weight-bold px-9 py-4 my-3 mx-4">Simpan</button>
                            </div>
                        </form>
                        <!--end::Form-->
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
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/add-page-ppdb.js"></script>