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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Biaya</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Konfigurasi Biaya
                            PPDB</a>
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
                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions"
                    data-placement="top">
                    <a onclick="window.history.back();" class="btn btn-light-danger font-weight-bold py-3 px-6"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                            class="fa fa-backward"></i>Kembali</a>
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
                    <div class="card card-custom" id="kt_form">
                        <div class="card-header">
                            <h3 class="card-title">
                                Edit Panduan Biaya 
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate"
                            action="<?php echo site_url('ppdb/settings/cost/update_cost_guide'); ?>"
                            enctype="multipart/form-data" method="post" id="kt_add_guide_form">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Nama Panduan</label>
                                                <input type="text" name="nama_panduan"
                                                    value="<?php echo $panduan[0]->nama_panduan; ?>"
                                                    class="form-control  form-control-lg"
                                                    placeholder="Isikan Nama Panduan" />
                                                <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI,
                                                    </b>isikan Nama Panduan Biaya, Contoh : "Panduan PPDB"</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Keterangan Panduan</label>
                                                <textarea class="form-control" id="kt-ckeditor-1"
                                                    placeholder="Isikan Keterangan" name="keterangan_panduan"
                                                    rows="1"><?php echo $panduan[0]->keterangan_panduan; ?></textarea>
                                                <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan
                                                    Keterangan Panduan</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Upload File Panduan</label>
												<a href="#" class="btn btn-sm btn-primary font-weight-bold mb-2 mt-2" data-toggle="modal" data-target="#modal_panduan">Lihat File</a>
                                                <input type="text" name="file_temp"
                                                    value="<?php echo $panduan[0]->file_panduan ?>"
                                                    style="display:none" />                                              
                                                <input type="file" class="dropify" name="file_panduan"
                                                    data-default-file="<?php echo base_url() . $panduan[0]->file_panduan; ?>"
                                                    data-max-file-size="5M" data-height="320"
                                                    data-allowed-file-extensions="pdf" />
                                                <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI,
                                                    </b>berformat pdf dan berukuran dibawah 5Mb.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button id="kt_login_signin_submit"
                                    class="btn btn-success font-weight-bold px-9 py-4 my-3 mx-4">Simpan</button>
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
<div class="modal fade" id="modal_panduan" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LIHAT "<?php echo strtoupper($panduan[0]->nama_panduan); ?>"</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <?php if ($panduan[0]->file_panduan != NULL || $panduan[0]->file_panduan != "") { ?>
                    <iframe src="<?php echo base_url() . $panduan[0]->file_panduan; ?>#zoom=85" width="100%" height="500"></iframe>
                <?php } else { ?>
                    <iframe id="iframe" width="100%" height="500" ></iframe>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--end::Content-->
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/panduans/custom/login/add-guide-ppdb.js"></script>
