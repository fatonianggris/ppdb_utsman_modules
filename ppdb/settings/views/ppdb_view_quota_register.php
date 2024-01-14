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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Kuota</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Pengaturan Kuota
                            Pendaftar</a>
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
                <div class="col-lg-12" id="kt_form">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <div class="card-header">
                            <h3 class="card-title">
                                Edit Kuota Pendaftar
                            </h3>
                        </div>
                        <form class="form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 col-4">
                                        <!--begin::Engage Widget 2-->
                                        <div class="card card-custom mb-7">
                                            <div class="card-body d-flex p-0">
                                                <div class="flex-grow-1 bg-primary p-5 card-rounded flex-grow-1 bgi-no-repeat"
                                                    style="height: 155px; background-position: calc(100% + 0.1rem) bottom;background-size: auto 60%;background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/svg/icons/general/User.svg);">
                                                    <h4 class="text-inverse-danger font-weight-bolder">Kuota Pendaftar
                                                        DC
                                                    </h4>
                                                    <p class="text-inverse-danger my-2">Silahkan Edit Kuota Pendaftaran
                                                        DC
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="text-inverse-danger font-weight-bold">Tutup
                                                                Kuota?</label>
                                                            <?php if ($quota_dc_reg[0]->status_kuota == 1) {?>
                                                            <input data-switch="true" class="update_dc_kuota_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_dc_kuota_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-3">
                                                            <label
                                                                class="text-inverse-danger font-weight-bold">Kuota:</label>
                                                            <input type="number" name="jumlah_kuota_dc"
                                                                value="<?php echo $quota_dc_reg[0]->jumlah_kuota ?>"
                                                                class="form-control  form-control-md"
                                                                placeholder="Isikan Jumlah Kuota DC" />
                                                        </div>
                                                        <div class="col-5">
                                                            <label class="text-inverse-danger font-weight-bold">Aktifkan
                                                                Cadangan?</label>
                                                            <?php if ($quota_dc_reg[0]->status_cadangan == 1) {?>
                                                            <input data-switch="true" class="update_dc_cad_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_dc_cad_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="font-weight-bold  mt-5">Keterangan Info Kuota DC:</label>
                                            <textarea class="form-control" placeholder="Isikan Keterangan Kota DC"
                                                name="keterangan_kuota_dc"
                                                rows="4"><?php echo $quota_dc_reg[0]->keterangan; ?></textarea>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB
                                                    DIISI, </b>isikan keterangan info kuota DC</span>
                                        </div>
                                    </div>
                                    <!--end::Engage Widget 2-->
                                    <div class="col-lg-4 col-4">
                                        <!--begin::Engage Widget 2-->
                                        <div class="card card-custom mb-7">
                                            <div class="card-body d-flex p-0">
                                                <div class="flex-grow-1 bg-info p-5 card-rounded flex-grow-1 bgi-no-repeat"
                                                    style="height: 155px; background-position: calc(100% + 0.1rem) bottom;background-size: auto 60%;background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/svg/icons/general/User.svg);">
                                                    <h4 class="text-inverse-danger font-weight-bolder">Kuota Pendaftar
                                                        KB
                                                    </h4>
                                                    <p class="text-inverse-danger my-2">Silahkan Edit Kuota Pendaftaran
                                                        KB
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="text-inverse-danger font-weight-bold">Tutup
                                                                Kuota?</label>
                                                            <?php if ($quota_kb_reg[0]->status_kuota == 1) {?>
                                                            <input data-switch="true" class="update_kb_kuota_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_kb_kuota_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-3">
                                                            <label class="text-inverse-danger font-weight-bold">
                                                                Kuota:</label>
                                                            <input type="number" name="jumlah_kuota_kb"
                                                                value="<?php echo $quota_kb_reg[0]->jumlah_kuota ?>"
                                                                class="form-control  form-control-md"
                                                                placeholder="Isikan Jumlah Kuota KB" />
                                                        </div>
                                                        <div class="col-5">
                                                            <label class="text-inverse-danger font-weight-bold">Aktifkan
                                                                Cadangan?</label>
                                                            <?php if ($quota_kb_reg[0]->status_cadangan == 1) {?>
                                                            <input data-switch="true" class="update_kb_cad_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_kb_cad_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="font-weight-bold  mt-5">Keterangan Info Kuota KB:</label>
                                            <textarea class="form-control" placeholder="Isika Keterangan Kuota KB"
                                                name="keterangan_kuota_kb"
                                                rows="4"><?php echo $quota_kb_reg[0]->keterangan; ?></textarea>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB
                                                    DIISI, </b>isikan keterangan info kuota KB</span>
                                        </div>
                                    </div>
                                    <!--end::Engage Widget 2-->
                                    <div class="col-lg-4 col-4">
                                        <!--begin::Engage Widget 2-->
                                        <div class="card card-custom mb-7">
                                            <div class="card-body d-flex p-0">
                                                <div class="flex-grow-1 bg-warning p-5 card-rounded flex-grow-1 bgi-no-repeat"
                                                    style="height: 155px; background-position: calc(100% + 0.1rem) bottom;background-size: auto 60%;background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/svg/icons/general/User.svg);">
                                                    <h4 class="text-inverse-danger font-weight-bolder">Kuota Pendaftar
                                                        TK
                                                    </h4>
                                                    <p class="text-inverse-danger my-2">Silahkan Edit Kuota Pendaftaran
                                                        TK
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="text-inverse-danger font-weight-bold">Tutup
                                                                Kuota?</label>
                                                            <?php if ($quota_tk_reg[0]->status_kuota == 1) {?>
                                                            <input data-switch="true" class="update_tk_kuota_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_tk_kuota_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-3">
                                                            <label class="text-inverse-danger font-weight-bold">
                                                                Kuota:</label>
                                                            <input type="number" name="jumlah_kuota_tk"
                                                                value="<?php echo $quota_tk_reg[0]->jumlah_kuota ?>"
                                                                class="form-control  form-control-md"
                                                                placeholder="Isikan Jumlah Kuota TK" />
                                                        </div>
                                                        <div class="col-5">
                                                            <label class="text-inverse-danger font-weight-bold">Aktifkan
                                                                Cadangan?</label>
                                                            <?php if ($quota_tk_reg[0]->status_cadangan == 1) {?>
                                                            <input data-switch="true" class="update_tk_cad_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_tk_cad_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="font-weight-bold  mt-5">Keterangan Info Kuota TK:</label>
                                            <textarea class="form-control" placeholder="Isikan Keterangan Kouta TK"
                                                name="keterangan_kuota_tk"
                                                rows="4"><?php echo $quota_tk_reg[0]->keterangan; ?></textarea>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB
                                                    DIISI, </b>isikan keterangan info kuota TK</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <!--begin::Engage Widget 2-->
                                        <div class="card card-custom mb-7">
                                            <div class="card-body d-flex p-0">
                                                <div class="flex-grow-1 bg-success p-5 card-rounded flex-grow-1 bgi-no-repeat"
                                                    style="height: 155px; background-position: calc(100% + 0.1rem) bottom;background-size: auto 60%;background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/svg/icons/general/User.svg);">
                                                    <h4 class="text-inverse-danger font-weight-bolder">Kuota Pendaftar
                                                        KBTK
                                                    </h4>
                                                    <p class="text-inverse-danger my-2">Silahkan Edit Kuota Pendaftaran
                                                        KBTK
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="text-inverse-danger font-weight-bold">Tutup
                                                                Kuota?</label>
                                                            <?php if ($quota_kbtk_reg[0]->status_kuota == 1) {?>
                                                            <input data-switch="true" class="update_kbtk_kuota_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_kbtk_kuota_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-3">
                                                            <label class="text-inverse-danger font-weight-bold">
                                                                Kuota:</label>
                                                            <input type="number" name="jumlah_kuota_kbtk"
                                                                value="<?php echo $quota_kbtk_reg[0]->jumlah_kuota ?>"
                                                                class="form-control  form-control-md"
                                                                placeholder="Isikan Jumlah Kuota KBTK" />
                                                        </div>
                                                        <div class="col-5">
                                                            <label class="text-inverse-danger font-weight-bold">Aktifkan
                                                                Cadangan?</label>
                                                            <?php if ($quota_kbtk_reg[0]->status_cadangan == 1) {?>
                                                            <input data-switch="true" class="update_kbtk_cad_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_kbtk_cad_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="font-weight-bold  mt-5">Keterangan Info Kuota KBTK:</label>
                                            <textarea class="form-control" placeholder="Isikan Keterangan Info KBTK"
                                                name="keterangan_kuota_kbtk"
                                                rows="4"><?php echo $quota_kbtk_reg[0]->keterangan; ?></textarea>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB
                                                    DIISI, </b>isikan keterangan info kuota KBTK</span>
                                        </div>
                                    </div>
                                    <!--end::Engage Widget 2-->
                                    <div class="col-lg-4 col-4">
                                        <!--begin::Engage Widget 2-->
                                        <div class="card card-custom mb-7">
                                            <div class="card-body d-flex p-0">
                                                <div class="flex-grow-1 bg-danger p-5 card-rounded flex-grow-1 bgi-no-repeat"
                                                    style="height: 155px; background-position: calc(100% + 0.1rem) bottom;background-size: auto 60%;background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/svg/icons/general/User.svg);">
                                                    <h4 class="text-inverse-danger font-weight-bolder">Kuota Pendaftar
                                                        SD
                                                    </h4>
                                                    <p class="text-inverse-danger my-2">Silahkan Edit Kuota Pendaftaran
                                                        SD
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="text-inverse-danger font-weight-bold">Tutup
                                                                Kuota?</label>
                                                            <?php if ($quota_sd_reg[0]->status_kuota == 1) {?>
                                                            <input data-switch="true" class="update_sd_kuota_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_sd_kuota_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-3">
                                                            <label class="text-inverse-danger font-weight-bold">
                                                                Kuota:</label>
                                                            <input type="number" name="jumlah_kuota_sd"
                                                                value="<?php echo $quota_sd_reg[0]->jumlah_kuota ?>"
                                                                class="form-control  form-control-md"
                                                                placeholder="Isikan Jumlah Kuota SD" />
                                                        </div>
                                                        <div class="col-5">
                                                            <label class="text-inverse-danger font-weight-bold">Aktifkan
                                                                Cadangan?</label>
                                                            <?php if ($quota_sd_reg[0]->status_cadangan == 1) {?>
                                                            <input data-switch="true" class="update_sd_cad_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_sd_cad_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="font-weight-bold  mt-5">Keterangan Info Kuota SD:</label>
                                            <textarea class="form-control" placeholder="Isikan Keterangan Kuota SD"
                                                name="keterangan_kuota_sd"
                                                rows="4"><?php echo $quota_sd_reg[0]->keterangan; ?></textarea>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB
                                                    DIISI, </b>isikan keterangan info kuota SD</span>
                                        </div>
                                    </div>
                                    <!--end::Engage Widget 2-->
                                    <div class="col-lg-4 col-4">
                                        <!--begin::Engage Widget 2-->
                                        <div class="card card-custom mb-7">
                                            <div class="card-body d-flex p-0">
                                                <div class="flex-grow-1 bg-secondary p-5 card-rounded flex-grow-1 bgi-no-repeat "
                                                    style="height: 155px; background-position: calc(100% + 0.1rem) bottom;background-size: auto 60%;background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/svg/icons/general/User.svg);">
                                                    <h4 class="text-dark font-weight-bolder">Kuota Pendaftar
                                                        SMP
                                                    </h4>
                                                    <p class="text-dark my-2">Silahkan Edit Kuota Pendaftaran
                                                        SMP
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="text-dark font-weight-bold">Tutup
                                                                Kuota?</label>
                                                            <?php if ($quota_smp_reg[0]->status_kuota == 1) {?>
                                                            <input data-switch="true" class="update_smp_kuota_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_smp_kuota_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-3">
                                                            <label class="text-dark font-weight-bold">
                                                                Kuota:</label>
                                                            <input type="number" name="jumlah_kuota_smp"
                                                                value="<?php echo $quota_smp_reg[0]->jumlah_kuota ?>"
                                                                class="form-control  form-control-md"
                                                                placeholder="Isikan Jumlah Kuota SMP" />
                                                        </div>
                                                        <div class="col-5">
                                                            <label class="text-dark font-weight-bold">Aktifkan
                                                                Cadangan?</label>
                                                            <?php if ($quota_smp_reg[0]->status_cadangan == 1) {?>
                                                            <input data-switch="true" class="update_smp_cad_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_smp_cad_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="font-weight-bold  mt-5">Keterangan Info Kuota SMP:</label>
                                            <textarea class="form-control" placeholder="Isikan Keterangan Kuota SMP"
                                                name="keterangan_kuota_smp"
                                                rows="4"><?php echo $quota_smp_reg[0]->keterangan; ?></textarea>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB
                                                    DIISI, </b>isikan keterangan info kuota SMP</span>
                                        </div>
                                    </div>
                                    <!--end::Engage Widget 2-->
                                    <div class="col-lg-4 col-4">
                                        <!--begin::Engage Widget 2-->
                                        <div class="card card-custom mb-7">
                                            <div class="card-body d-flex p-0">
                                                <div class="flex-grow-1 bg-light-danger p-5 card-rounded flex-grow-1 bgi-no-repeat "
                                                    style="height: 155px; background-position: calc(100% + 0.1rem) bottom;background-size: auto 60%;background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/svg/icons/general/User.svg);">
                                                    <h4 class="text-dark font-weight-bolder">Kuota Pendaftar
                                                        SD ICP
                                                    </h4>
                                                    <p class="text-dark my-2">Silahkan Edit Kuota Pendaftaran
                                                        SD ICP
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="text-dark font-weight-bold">Tutup
                                                                Kuota?</label>
                                                            <?php if ($quota_sd_icp[0]->status_kuota == 1) {?>
                                                            <input data-switch="true" class="update_sdicp_kuota_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_sdicp_kuota_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                        <div class="col-3">
                                                            <label class="text-dark font-weight-bold">
                                                                Kuota:</label>
                                                            <input type="number" name="jumlah_kuota_sdicp"
                                                                value="<?php echo $quota_sd_icp[0]->jumlah_kuota ?>"
                                                                class="form-control  form-control-md"
                                                                placeholder="Isikan Jumlah Kuota SD ICP" />
                                                        </div>
                                                        <div class="col-5">
                                                            <label class="text-dark font-weight-bold">Aktifkan
                                                                Cadangan?</label>
                                                            <?php if ($quota_sd_icp[0]->status_cadangan == 1) {?>
                                                            <input data-switch="true" class="update_sdicp_cad_switch"
                                                                data-size="medium" type="checkbox" checked="checked"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php } else {?>
                                                            <input data-switch="true" class="update_sdicp_cad_switch"
                                                                data-size="medium" type="checkbox"
                                                                data-on-color="success" data-off-color="danger" />
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <label class="font-weight-bold  mt-5">Keterangan Info Kuota SD ICP:</label>
                                            <textarea class="form-control" placeholder="Isikan Keterangan Kuota SD ICP"
                                                name="keterangan_kuota_sdicp"
                                                rows="4"><?php echo $quota_sd_icp[0]->keterangan; ?></textarea>
                                            <span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB
                                                    DIISI, </b>isikan keterangan info kuota SC ICP</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--end::Engage Widget 2-->
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
<input class="txt_csrfname" type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
    value="<?php echo $this->security->get_csrf_hash(); ?>">
<!--end::Content-->
<script>
var csrfName = $('.txt_csrfname').attr('name');
var csrfHash = $('.txt_csrfname').val(); // CSRF hash

var dc_reg = $(".update_dc_kuota_switch").bootstrapSwitch();
dc_reg.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
		
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENUTUP KUOTA DC REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, TUTUP!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_dc_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        kuota: $("input[name=jumlah_kuota_dc]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_dc]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Ditutup!", "Pendaftaran DC REGULER telah ditutup!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                dc_reg.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Penutupan Pendaftaran DC REG dibatalkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MEMBUKA KUOTA DC REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, BUKA!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_dc_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        kuota: $("input[name=jumlah_kuota_dc]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_dc]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dibuka!", "Pendaftaran DC REGULER telah dibuka!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                dc_reg.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Pembukaan Pendaftaran DC REGULER dibatalkan.", "error");
            }
        });
    }
});

var kb_reg = $(".update_kb_kuota_switch").bootstrapSwitch();
kb_reg.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENUTUP KUOTA KB REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, TUTUP!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_kb_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        kuota: $("input[name=jumlah_kuota_kb]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_kb]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Ditutup!", "Pendaftaran KB REGULER telah ditutup!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                kb_reg.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Penutupan Pendaftaran KB REGULER dibatalkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MEMBUKA KUOTA KB REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, BUKA!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_kb_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        kuota: $("input[name=jumlah_kuota_kb]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_kb]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dibuka!", "Pendaftaran KB REGULER telah dibuka!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                kb_reg.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Pembukaan Pendaftaran KB REGULER dibatalkan.", "error");
            }
        });
    }
});

var tk_reg = $(".update_tk_kuota_switch").bootstrapSwitch();
tk_reg.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENUTUP KUOTA TK REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, TUTUP!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_tk_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        kuota: $("input[name=jumlah_kuota_tk]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_tk]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);
                        Swal.fire("Ditutup!", "Pendaftaran TK REGULER telah ditutup!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                tk_reg.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Penutupan Pendaftaran TK REGULER dibatalkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MEMBUKA KUOTA TK REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, BUKA!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_tk_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        kuota: $("input[name=jumlah_kuota_tk]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_tk]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dibuka!", "Pendaftaran TK REGULER telah dibuka!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                tk_reg.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Pembukaan Pendaftaran TK REGULER dibatalkan.", "error");
            }
        });
    }
});

var kbtk_reg = $(".update_kbtk_kuota_switch").bootstrapSwitch();
kbtk_reg.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENUTUP KUOTA KBTK REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, TUTUP!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_kbtk_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        kuota: $("input[name=jumlah_kuota_kbtk]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_kbtk]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Ditutup!", "Pendaftaran KBTK REGULER telah ditutup!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                kbtk_reg.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Penutupan Pendaftaran KBTK REGULER dibatalkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MEMBUKA KUOTA KBTK REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, BUKA!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_kbtk_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        kuota: $("input[name=jumlah_kuota_kbtk]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_kbtk]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dibuka!", "Pendaftaran KBTK REGULER telah dibuka!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                kbtk_reg.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Pembukaan Pendaftaran KBTK REGULER dibatalkan.", "error");
            }
        });
    }
});

var sd_reg = $(".update_sd_kuota_switch").bootstrapSwitch();
sd_reg.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENUTUP KUOTA SD REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, TUTUP!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_sd_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        kuota: $("input[name=jumlah_kuota_sd]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_sd]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Ditutup!", "Pendaftaran SD REGULER telah ditutup!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                sd_reg.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Penutupan Pendaftaran SD REGULER dibatalkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MEMBUKA KUOTA SD REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, BUKA!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_sd_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        kuota: $("input[name=jumlah_kuota_sd]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_sd]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dibuka!", "Pendaftaran SD REGULER telah dibuka!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                sd_reg.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Pembukaan Pendaftaran SD REGULER dibatalkan.", "error");
            }
        });
    }
});

var smp_reg = $(".update_smp_kuota_switch").bootstrapSwitch();
smp_reg.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENUTUP KUOTA SMP REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, TUTUP!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_smp_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        kuota: $("input[name=jumlah_kuota_smp]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_smp]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Ditutup!", "Pendaftaran SMP REGULER telah ditutup!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                smp_reg.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Penutupan Pendaftaran SMP REGULER dibatalkan.", "error");
            }
        });
    } else {
	
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MEMBUKA KUOTA SMP REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, BUKA!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_smp_reg_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        kuota: $("input[name=jumlah_kuota_smp]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_smp]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dibuka!", "Pendaftaran SMP REGULER telah dibuka!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                smp_reg.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Pembukaan Pendaftaran SMP REGULER dibatalkan.", "error");
            }
        });
    }
});

var sd_icp = $(".update_sdicp_kuota_switch").bootstrapSwitch();
sd_icp.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENUTUP KUOTA SD ICP Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, TUTUP!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_sd_icp_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        kuota: $("input[name=jumlah_kuota_sdicp]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_sdicp]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Ditutup!", "Pendaftaran SD ICP telah ditutup!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                sd_icp.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Penutupan Pendaftaran SD ICP dibatalkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MEMBUKA KUOTA SD ICP Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, BUKA!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_sd_icp_quota") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        kuota: $("input[name=jumlah_kuota_sdicp]").val(),
                        keterangan: $("textarea[name=keterangan_kuota_sdicp]").val(),
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dibuka!", "Pendaftaran SD ICP telah dibuka!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                sd_icp.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Pembukaan Pendaftaran SD ICP dibatalkan.", "error");
            }
        });
    }
});

var dc_reg_cad = $(".update_dc_cad_switch").bootstrapSwitch();
dc_reg_cad.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
		
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGAKTIFKAN CADANGAN DC REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, AKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_dc_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Diaktifkan!", "Cadangan DC REGULER telah diaktifkan!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                dc_reg_cad.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Cadangan DC REG batal diaktifkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENNONGAKTIFKAN CADANGAN DC REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, NONAKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_dc_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dinonaktifkan!", "Cadangan DC REGULER telah dinonaktifkan!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                dc_reg_cad.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Cadangan DC REGULER batal dinonaktfikan.", "error");
            }
        });
    }
});

var kb_reg_cad = $(".update_kb_cad_switch").bootstrapSwitch();
kb_reg_cad.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGAKTIFKAN CADANGAN KB REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, AKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_kb_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Diaktifkan!", "Cadangan KB REGULER telah diaktifkan!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                kb_reg_cad.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Cadangan KB REGULER batal diaktifkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGNONAKTIFKAN CADANGAN KB REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, NONAKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_kb_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',                      
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dinonaktifkan!", "Cadangan KB REGULER telah dinonaktikan!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                kb_reg_cad.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Cadangan KB REGULER batal dinonaktfikan.", "error");
            }
        });
    }
});

var tk_reg_cad = $(".update_tk_cad_switch").bootstrapSwitch();
tk_reg_cad.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGAKTIFKAN CADANGAN TK REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, AKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_tk_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);
                        Swal.fire("Diaktifkan!", "Cadangan TK REGULER telah diaktifkan!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                tk_reg_cad.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Cadangan TK REGULER batal diaktifkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGNONAKTIFKAN CADANGAN TK REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, NONAKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_tk_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dinonaktifkan!", "Cadangan TK REGULER telah dinonaktifkan!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                tk_reg_cad.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Cadangan TK REGULER batal dinonaktfikan.", "error");
            }
        });
    }
});

var kbtk_reg_cad = $(".update_kbtk_cad_switch").bootstrapSwitch();
kbtk_reg_cad.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGAKTIFKAN CADANGAN KBTK REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, AKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_kbtk_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Diaktifkan!", "Cadangan KBTK REGULER telah diaktfikan!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                kbtk_reg_cad.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Cadangan KBTK REGULER batal diaktifkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGNONAKTIFKAN CADANGAN KBTK REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, NONAKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_kbtk_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dinonaktifkan!", "Cadangan KBTK REGULER telah dinonaktifkan!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                kbtk_reg_cad.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Cadaangan KBTK REGULER batal dinonaktifkan.", "error");
            }
        });
    }
});

var sd_reg_cad = $(".update_sd_cad_switch").bootstrapSwitch();
sd_reg_cad.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGAKTIFKAN CADANGAN SD REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, AKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_sd_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Diaktifkan!", "Cadangan SD REGULER telah diaktifkan!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                sd_reg_cad.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Cadangan SD REGULER batal diaktifkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGNONAKTIFKAN CADANGAN SD REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, NONAKTIKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_sd_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dinonaktifkan!", "Cadangan SD REGULER telah dinonaktifkan!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                sd_reg_cad.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Cadangan SD REGULER batal dinonaktifkan.", "error");
            }
        });
    }
});

var smp_reg_cad = $(".update_smp_cad_switch").bootstrapSwitch();
smp_reg_cad.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGAKTIFKAN CADANGAN SMP REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, AKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_smp_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Diaktifkan!", "Cadangan SMP REGULER telah diaktifkan!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                smp_reg_cad.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Cadangan SMP REGULER batal diaktifkan.", "error");
            }
        });
    } else {
	
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGNONAKTIFKAN CADANGAN SMP REGULER Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, NONAKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_smp_reg_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dinonaktifkan!", "Cadangan SMP REGULER telah dinonaktifkan!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                smp_reg_cad.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Cadangan SMP REGULER batal dinonaktifkan.", "error");
            }
        });
    }
});

var sd_icp_cad = $(".update_sdicp_cad_switch").bootstrapSwitch();
sd_icp_cad.on("switchChange.bootstrapSwitch", function(event, state) {
    if (state == true) {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGAKTIFKAN CADANGAN SD ICP Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, AKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_sd_icp_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(1); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Diaktifkan!", "Cadangan SD ICP telah diaktifkan!.",
                            "success");
                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                sd_icp_cad.bootstrapSwitch('state', false);
                Swal.fire("Dibatalkan!", "Cadangan SD ICP batal diaktifkan.", "error");
            }
        });
    } else {
        Swal.fire({
            title: "Peringatan!",
            text: "Apakah anda yakin ingin MENGNONAKTIFKAN CADANGAN SD ICP Sekarang?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1BC5BD",
            confirmButtonText: "Ya, NONAKTIFKAN!",
            cancelButtonText: "Tidak, BATAL!",
            closeOnConfirm: false,
            closeOnCancel: false
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url("ppdb/settings/quota/edit_sd_icp_cad") ?>",
                    data: {
                        id: '<?php echo paramEncrypt(0); ?>',
                        [csrfName]: csrfHash
                    },
                    dataType: 'html',
                    success: function(result) {
                        $('.txt_csrfname').val(result.token);

                        Swal.fire("Dinonaktifkan!", "Cadangan SD ICP telah dinonaktifkan!.",
                            "success");

                    },
                    error: function(result) {
                        console.log(result);
                        Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                    }
                });
            } else {
                sd_icp_cad.bootstrapSwitch('state', true);
                Swal.fire("Dibatalkan!", "Cadangan SD ICP batal dinonaktifkan.", "error");
            }
        });
    }
});
</script>
