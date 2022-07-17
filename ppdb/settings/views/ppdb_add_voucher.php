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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Voucher</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Tambah Voucher Sekolah</a>
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
                <div class="col-lg-12" id="kt_form" >
                    <!--begin::Card-->
                    <div class="card card-custom" >
                        <div class="card-header">
                            <h3 class="card-title">
                                Tambah Voucher Sekolah
                            </h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" action="<?php echo site_url('ppdb/settings/voucher/post_voucher'); ?>" enctype="multipart/form-data" method="post" id="kt_add_voucher_form">
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Kode Voucher</label>
                                            <input type="text" name="kode_voucher" class="form-control form-control-lg"  placeholder="Isikan Kode Voucher"/>
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Kode Voucher, Contoh: PPDB50</span>               
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Nama Voucher</label>
                                            <input type="text" name="nama_voucher" class="form-control form-control-lg"  placeholder="Isikan Nama Voucher"/>
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nama Voucher</span>               
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Potongan Voucher</label>
                                            <div class="input-group">
                                                <input type="text" name="potongan" class="form-control  form-control-lg"  placeholder="Isikan Potongan Voucher"/>

                                                <div class="input-group-append"><span class="input-group-text font-weight-boldest">%</span></div>
                                            </div>
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Potongan Voucher, Contoh: 10,50</span>               
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Jumlah Voucher</label>
                                            <input type="text" name="jumlah_voucher" class="form-control  form-control-lg"  placeholder="Isikan Jumlah Voucher"/>
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Jumlah Voucher</span>               
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label>Jenis Voucher</label>
                                            <select name="id_jenis_voucher" id="id_jenis_voucher" class="form-control form-control-lg">
                                                <option value="">Pilih Jenis Voucher</option>
                                                <option value="1">Pendaftaran (Formulir)</option>
                                                <option value="2">Uang Masuk (PPDB)</option>                                                
                                            </select> 
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jenis Biaya Sekolah</span>               
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label>Tujuan Potongan Voucher Pada Biaya?</label>
                                            <select name="id_nama_biaya" id="id_nama_biaya" class="form-control form-control-lg">
                                                <option value="">Pilih Opsi Tujuan Potongan Biaya</option>

                                            </select> 
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jenjang Biaya</span>               
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label>Masa Berlaku</label>
                                            <input type="text" name="masa_berlaku" id="kt_datepicker_1" class="form-control  form-control-lg"  placeholder="Isikan Masa Berlaku" readonly=""/>
                                            <span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Masa Berlaku</span>               
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Syarat Ketentuan</label>
                                            <textarea name="syarat_ketentuan" id="kt-ckeditor-1"></textarea>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>isikan syarat dan ketentuan Voucher.</span>               
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
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/add-voucher-ppdb.js"></script>


<script>

                        $(document).ready(function () {
                            var id_cost;

                            $("#id_jenis_voucher").change(function () {
                                id_cost = $(this).val();
                                var url = "<?php echo site_url('/ppdb/settings/voucher/add_ajax_cost_option_add'); ?>/" + id_cost;
                                $('#id_nama_biaya').load(url);
                                return false;
                            });

                        });
</script>