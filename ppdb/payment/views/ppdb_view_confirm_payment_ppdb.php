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
                    <h2 class="text-white font-weight-bold my-2 mr-5">Konfirmasi</h2>
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
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Pembayaran Biaya
                            Masuk</a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
                        <a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Konfirmasi
                            Pembayaran Biaya Masuk</a>
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
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card card-custom mb-10">
                        <div class="card-body">
                            <div class="d-flex">
                                <!--begin::Pic-->
                                <div class="flex-shrink-0 mr-0">
                                    <?php if ($formulir[0]->foto_siswa == null or $formulir[0]->foto_siswa == "") {?>
                                    <div class="symbol symbol-50 symbol-lg-100 symbol-light-danger">
                                        <span
                                            class="font-size-h2 symbol-label font-weight-boldest"><?php echo strtoupper(substr($formulir[0]->nama_lengkap, 0, 2)); ?></span>
                                    </div>
                                    <?php } else {?>
                                    <div class="symbol symbol-50 symbol-lg-100">
                                        <img alt="Pic" src="<?php echo base_url() . $formulir[0]->foto_siswa ?>">
                                    </div>
                                    <?php }?>
                                </div>

                                <div class="flex-shrink-0 mr-7">

                                </div>
                                <!--end::Pic-->
                                <!--begin: Info-->
                                <div class="">
                                    <!--begin::Title-->
                                    <div class="d-flex align-items-center justify-content-between flex-wrap">
                                        <!--begin::User-->
                                        <div class="mr-2">
                                            <div class="d-flex align-items-center mr-2">
                                                <!--begin::Name-->
                                                <a href="#"
                                                    class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?php echo strtoupper($formulir[0]->nama_lengkap); ?></a>
                                                <!--end::Name-->
                                                <span
                                                    class="label label-light-success label-inline font-weight-bolder mr-1"><?php echo strtoupper($formulir[0]->nama_panggilan); ?></span>

                                            </div>
                                            <!--begin::Contacts-->
                                            <div class="d-flex flex-wrap my-2">
                                                <a href="#"
                                                    class="text-primary text-hover-primary font-weight-bold mr-lg-2 mr-3 mb-lg-0 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-primary mr-1">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
                                                                    fill="#000000"></path>
                                                                <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5"
                                                                    r="2.5"></circle>
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span><?php echo ($formulir[0]->email); ?></a>
                                                <a href="#"
                                                    class="text-success text-hover-primary font-weight-bold mr-lg-2 mr-5 mb-lg-0 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-success mr-1">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M21,5.5 L21,17.5 C21,18.3284271 20.3284271,19 19.5,19 L4.5,19 C3.67157288,19 3,18.3284271 3,17.5 L3,14.5 C3,13.6715729 3.67157288,13 4.5,13 L9,13 L9,9.5 C9,8.67157288 9.67157288,8 10.5,8 L15,8 L15,5.5 C15,4.67157288 15.6715729,4 16.5,4 L19.5,4 C20.3284271,4 21,4.67157288 21,5.5 Z"
                                                                    fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
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
                                                </a>
                                                <a href="#"
                                                    class="text-success text-hover-primary font-weight-bold mr-lg-2 mr-5 mb-lg-0 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-success mr-1">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z"
                                                                    fill="#000000" />
                                                                <path
                                                                    d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <?php
if ($formulir[0]->jalur == 1) {
    echo 'REGULER';
} else if ($formulir[0]->jalur == 2) {
    echo 'ICP';
}
?>
                                                </a>
                                                <a href="#"
                                                    class="text-success text-hover-primary font-weight-bold mr-lg-2 mr-5 mb-lg-0 mb-2">
                                                    <span class="svg-icon svg-icon-md svg-icon-success mr-1">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z"
                                                                    fill="#000000" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="py-1" id="kelas"></span>
                                                </a>
                                            </div>
                                            <!--end::Contacts-->
                                        </div>
                                        <!--begin::User-->
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Content-->
                                    <div class="d-flex align-items-center flex-wrap justify-content-between">
                                        <!--begin::Description-->
                                        <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                                            <?php echo ucwords(strtolower($formulir[0]->alamat_rumah_dom)); ?>
                                        </div>
                                        <!--end::Description-->

                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Info-->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card card-custom mb-10">
                        <div class="card-body py-4 mt-4 mb-3">
                            <h3 class="card-label text-dark font-weight-bolder text-center">STATUS PEMBAYARAN</h3>
                            <div class="d-flex flex-lg-grow-1 justify-content-lg-center mt-5 text-center">

                                <?php if ($formulir[0]->status_pembayaran == 1) {?>
                                <p class="font-weight-boldest display-2 mb-1 text-warning">
                                    VERIFIKASI
                                </p>
                                <?php } else if ($formulir[0]->status_pembayaran == 2) {?>
                                <p class="font-weight-boldest display-2 mb-1 text-success">
                                    DITERIMA
                                </p>
                                <?php } else if ($formulir[0]->status_pembayaran == 2) {?>
                                <p class="font-weight-boldest display-2 mb-1 text-danger">
                                    DITOLAK
                                </p>
                                <?php }?>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-12">
                    <!--begin::Card-->
                    <div class="card card-custom mb-10">
                        <div class="text-center mb-14 mt-15">
                            <?php
$program = '';
$jenjang = '';
if ($formulir[0]->jalur == 1) {
    $program = 'REGULER';
} else if ($formulir[0]->jalur == 2) {
    $program = 'ICP';
}

if ($formulir[0]->level_tingkat == 1) {
    $jenjang = 'KB';
} else if ($formulir[0]->level_tingkat == 2) {
    $jenjang = 'TK';
} else if ($formulir[0]->level_tingkat == 3) {
    $jenjang = 'SD';
} else if ($formulir[0]->level_tingkat == 4) {
    $jenjang = 'SMP';
} else if ($formulir[0]->level_tingkat == 5) {
    $jenjang = 'KB-TK';
} else if ($formulir[0]->level_tingkat == 6) {
    $jenjang = 'DC';
}
if ($formulir[0]->status_pembayaran == 1) {
    ?>
                            <button
                                onclick="act_confirm_payment_ppdb('<?php echo paramEncrypt($formulir[0]->id_formulir); ?>', '<?php echo strtoupper($formulir[0]->nama_lengkap); ?>')"
                                class="btn btn-success btn-sm font-weight-bold px-8 py-4 my-3 mx-4"><i
                                    class="fas fa-check-circle "></i>Terima</button>
                            <?php } elseif ($formulir[0]->status_pembayaran == 2) {?>
                            <a href="https://web.whatsapp.com/send?phone=62<?php echo substr($formulir[0]->nomor_handphone, 1); ?>&text=*_Assalamualaikum Wr. Wb._*
                                <?php echo urlencode("\n") ?>
                                   <?php echo urlencode("\n") ?>*--SELAMAT!, PEMBAYARAN BIAYA MASUK ANDA BERHASIL--*
                                   <?php echo urlencode("\n") ?>
                                   <?php echo urlencode("\n") ?>_Terimakasih telah melakukan pembayaran. Pembayaran Biaya Masuk Sekolah Anda telah Kami terima:_
                                   <?php echo urlencode("\n") ?>- No. Formulir: *<?php echo $formulir[0]->nomor_formulir; ?>*
                                   <?php echo urlencode("\n") ?>- Nama: *<?php echo ucwords(strtolower($formulir[0]->nama_lengkap)); ?>*
                                   <?php echo urlencode("\n") ?>- Jenjang: *<?php echo $jenjang; ?>*
                                   <?php echo urlencode("\n") ?>- Program: *<?php echo $program; ?>*
                                   <?php echo urlencode("\n") ?>
                                   <?php echo urlencode("\n") ?>_Terima Kasih Telah Melakukan Pembayaran Biaya Masuk Sekolah Utsman_
                                   <?php echo urlencode("\n") ?>
                                   <?php echo urlencode("\n") ?>```Atas perhatian Bapak/Ibu kami ucapkan terima kasih.```
                                   <?php echo urlencode("\n") ?>
                                   <?php echo urlencode("\n") ?>_*Admin PPDB Sekolah Utsman*_" target="_blank"
                                class="btn btn-success font-weight-bold px-6 py-4 my-3 mx-4 "><i
                                    class="fab fa-whatsapp"></i> Kirim WA</a>
                            <?php
}
?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <!--begin::Card-->
                    <div class="card card-custom mb-10">
                        <!--begin::Header-->
                        <div class="card-header border-0 py-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label font-weight-bolder text-danger">Total Biaya</span>
                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Berikut merupakan detail
                                    biaya yang dikenakan Siswa</span>
                            </h3>

                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0 pb-3">
                            <div class="tab-content">
                                <?php if($formulir[0]->status_pembayaran==2) {?>
									<div class="table-responsive px-mobile mb-5">
										<table class="table table-light table-light-warning text-center">
											<thead>
												<tr>
													<th class="table-center">STATUS PELUNASAN</th>
													<th class="table-center">NOMINAL</th>
													<th class="table-center">PEMBAYARAN</th>
													<th class="table-center">WAKTU</th>

												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="table-center font-weight-boldest display-4">
														<?php $ket_arr = explode(',', $formulir[0]->keterangan);
															echo $ket_arr[0]; ?>
													</td>
													<td class="table-center display-4 font-weight-boldest">
														<?php $ket_arr = explode(',', $formulir[0]->keterangan);
															echo number_format($ket_arr[1], 0, ',', '.'); ?>
													</td>
													<td class="table-center font-weight-boldest display-4">
														<?php $ket_arr = explode(',', $formulir[0]->keterangan);
															echo $ket_arr[3]; ?>
													<td class="table-center font-weight-boldest display-4">
														<?php $ket_arr = explode(',', $formulir[0]->keterangan);
															echo $ket_arr[2]; ?>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
                                <?php } ?>
                                <!--begin::Table-->
                                <div class="table-responsive">
                                    <table
                                        class="table table-head-custom table-vertical-center table-head-bg table-borderless">
                                        <thead>
                                            <tr class="text-left">
                                                <th style="min-width: 300px" class="pl-7">
                                                    <span class="text-dark-75">Nama Biaya</span>
                                                </th>
                                                <th style="width: 200px" class="text-center"><span class="text-dark-75">
                                                        Voucher </span></th>
                                                <th style="width: 180px" class="text-center"><span
                                                        class="text-dark-75 ">Biaya Awal (Rp)</span></th>
                                                <th style="width: 130px" class="text-center"><span
                                                        class="text-dark-75">Potongan (%)</span></th>
                                                <th style="width: 200px" class="text-center"><span
                                                        class="text-dark-75">Sub Total (Rp)</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$disable = "";

											if ($formulir[0]->status_pembayaran == 0) {
												$disable = "";
											} else {
												$disable = "disabled";
											}
											if (!empty($cost)) {
												foreach ($cost as $key => $value) {
													?>
                                            <tr>
                                                <td>
                                                    <span
                                                        class="text-dark-75 font-weight-bolder d-block font-size-lg ml-4"><?php echo strtoupper(strtolower($value->nama_biaya)); ?></span>
                                                </td>
                                                <td>
                                                    <select name="id_voucher"
                                                        id="id_voucher<?php echo $value->id_biaya; ?>"
                                                        class="form-control font-weight-bolder form-control-md"
                                                        <?php echo $disable; ?>>
                                                        <option value="">Pilih Voucher</option>
                                                        <?php
														if (!empty($voucher)) {
																	foreach ($voucher as $key => $value_v) {
																		if ($value->id_nama_biaya == $value_v->id_nama_biaya) {
																			$id_array_voucher = explode(',', $formulir[0]->id_voucher);
																			if (in_array($value_v->id_voucher, $id_array_voucher)) {
																				?>
                                                        <option selected="selected"
                                                            value="<?php echo $value_v->id_voucher; ?>,<?php echo $value_v->potongan; ?>">
                                                            <?php echo $value_v->kode_voucher; ?></option>
                                                        <?php
															} else {
																	if ($value_v->terpakai < $value_v->jumlah_voucher) {
																		?>
                                                        <option
                                                            value="<?php echo $value_v->id_voucher; ?>,<?php echo $value_v->potongan; ?>">
                                                            <?php echo $value_v->kode_voucher; ?></option>
                                                        <?php
																	}
																}
															}
														} //ngatur nomor urut
													}
													?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input id="nominal<?php echo $value->id_biaya; ?>" readonly=""
                                                        value="<?php echo number_format($value->nominal, 0, ',', '.'); ?>"
                                                        type="text" name="nominal"
                                                        class="form-control  form-control-md" />
                                                </td>
                                                <td>
                                                    <input id="potongan<?php echo $value->id_biaya; ?>" readonly=""
                                                        value="-" type="text" name="potongan"
                                                        class="form-control font-weight-boldest text-danger form-control-md" />
                                                </td>
                                                <td>
                                                    <input id="subtotal<?php echo $value->id_biaya; ?>" readonly=""
                                                        value="<?php echo number_format($value->nominal, 0, ',', '.'); ?>"
                                                        type="text" name="subtotal"
                                                        class="biaya form-control font-weight-boldest form-control-md" />
                                                </td>
                                            </tr>
                                            <?php
												} //ngatur nomor urut
											}
											?>
                                            <tr>
                                                <td>
                                                    <span class="switch switch-lg switch-icon pl-3">
                                                        <label>
                                                            <?php if (@$formulir[0]->status_potongan == "" or @$formulir[0]->status_potongan == null or @$formulir[0]->status_potongan == 0) {?>
                                                            <input type="checkbox" id="potongan_rupiah"
                                                                <?php echo $disable; ?> name="status_potongan"
                                                                value="1">
                                                            <span></span>
                                                            <?php } else if (@$formulir[0]->status_potongan == 1) {?>
                                                            <input type="checkbox" id="potongan_rupiah" checked
                                                                <?php echo $disable; ?> name="status_potongan"
                                                                value="1">
                                                            <span></span>
                                                            <?php }?>
                                                        </label>
                                                        <label class="pl-2 font-weight-bold">Status Potongan
                                                            Rupiah</label>
                                                    </span>
                                                </td>
                                                <td></td>
                                                <td colspan="2" class="text-right font-weight-bolder">TOTAL SETELAH
                                                    DIPOTONG VOUCHER</td>
                                                <td>
                                                    <input id="total_biaya_voucher" readonly="" type="text"
                                                        class="form-control font-weight-boldest form-control-lg" />
                                                </td>
                                            </tr>
                                            <tr id="tr_potongan_rupiah">
                                                <td>
                                                </td>
                                                <td colspan="3">
                                                    <input placeholder="Masukan Nama Potongan Rupiah" type="text"
                                                        <?php echo $disable; ?> id="nama_potongan_langsung"
                                                        name="nama_potongan" required
                                                        value="<?php echo @$formulir[0]->status_potongan == 1 ? $potongan[0]->nama_potongan :'' ?>"
                                                        class="biaya form-control font-weight-bolder form-control-md text-right text-danger" />
                                                </td>
                                                <td>
                                                    <input placeholder="Masukan Nominal" id="nominal_potongan_langsung"
                                                        <?php echo $disable; ?> type="text"
                                                        name="total_potongan_langsung" required
                                                        value="<?php echo @$formulir[0]->status_potongan == 1 ? $potongan[0]->nominal_potongan :'0' ?>"
                                                        class="biaya form-control font-weight-boldest form-control-md text-danger" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--begin::Separator-->
                            <div class="separator separator-solid my-2"></div>
                            <!--end::Separator-->
                            <div class="col-md-12">
                                <div
                                    class="d-flex justify-content-between mt-7 mb-5 mr-5 flex-column flex-md-row font-size-lg">
                                    <div class="d-flex flex-column mb-5 mb-md-0">

                                    </div>
                                    <div class="d-flex flex-column text-md-right">
                                        <span class="font-size-lg font-weight-bolder mb-1">TOTAL BIAYA</span>
                                        <span id="total_biaya"
                                            class="font-size-h2 font-weight-boldest text-danger mb-1">Rp. 0.00</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--end::Body-->

                    </div>
                </div>

            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    <input type="hidden" class="txt_csrfname" name="<?php echo $this->security->get_csrf_token_name(); ?>"
        value="<?php echo $this->security->get_csrf_hash(); ?>">
</div>
<div class="modal fade" id="modal_bukti" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
    role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran
                    "<?php echo strtoupper($formulir[0]->nama_lengkap); ?>"</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body text-center">
                <?php if ($formulir[0]->keterangan != null || $formulir[0]->keterangan != "") {?>
                <span class="text-center text-danger font-weight-bold font-size-md">Ket:
                    <?php echo ucwords($formulir[0]->keterangan); ?></span>
                <?php }?>
                <div class="text-center">
                    <img alt="Pic" class="col-12" src="<?php echo base_url() . $formulir[0]->bukti_transfer ?>">
                    <a href="<?php echo base_url() . $formulir[0]->bukti_transfer ?>"
                        class="btn btn-success btn-sm py-3 px-4" download><i class="fas fa-download"></i> Download</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!--end::Content-->
<?php
if (!empty($cost)) {
    foreach ($cost as $key => $value_s) {
        ?>
<script>
$(document).ready(function() {

    var voc<?php echo $value_s->id_biaya; ?> = $("#id_voucher<?php echo $value_s->id_biaya; ?>").find(
        "option:selected").val().split(',');
    if (voc<?php echo $value_s->id_biaya; ?> != "") {
        var nom<?php echo $value_s->id_biaya; ?> = $("#nominal<?php echo $value_s->id_biaya ?>").val().split(
            ".").join("");
        var nom_total<?php echo $value_s->id_biaya; ?> = (nom<?php echo $value_s->id_biaya; ?>) - (
            nom<?php echo $value_s->id_biaya; ?> * voc<?php echo $value_s->id_biaya; ?>[1] / 100);

        $('#potongan<?php echo $value_s->id_biaya; ?>').val(voc<?php echo $value_s->id_biaya; ?>[1]);
        $('#subtotal<?php echo $value_s->id_biaya; ?>').val(number_format(
            nom_total<?php echo $value_s->id_biaya; ?>, 0, ',', '.'));
        $('#id_voucher<?php echo $value_s->id_biaya; ?> option:not(:selected)').prop('false', true);
        get_total_voucher();
        get_voucher();
        get_total();
    }

    $("#id_voucher<?php echo $value_s->id_biaya; ?>").change(function() {

        var id_voc<?php echo $value_s->id_biaya; ?>;
        var nom<?php echo $value_s->id_biaya; ?> = $("#nominal<?php echo $value_s->id_biaya ?>").val()
            .split(".").join("");

        id_voc<?php echo $value_s->id_biaya; ?> = $(this).find("option:selected").val().split(',');
        nom_total<?php echo $value_s->id_biaya; ?> = (nom<?php echo $value_s->id_biaya; ?>) - (
            nom<?php echo $value_s->id_biaya; ?> * id_voc<?php echo $value_s->id_biaya; ?>[1] / 100);

        if ($(this).val()) {
            $('#potongan<?php echo $value_s->id_biaya; ?>').val(id_voc<?php echo $value_s->id_biaya; ?>[
                1]);
            $('#subtotal<?php echo $value_s->id_biaya; ?>').val(number_format(
                nom_total<?php echo $value_s->id_biaya; ?>, 0, ',', '.'));
        } else {
            $('#potongan<?php echo $value_s->id_biaya; ?>').val('-');
            $('#subtotal<?php echo $value_s->id_biaya; ?>').val($(
                "#nominal<?php echo $value_s->id_biaya ?>").val());
        }
        get_total_voucher();
        get_voucher();
        get_total();
    });

});
</script>
<?php
} //ngatur nomor urut
}
?>

<script>
var result_style = document.getElementById('tr_potongan_rupiah').style;
var status_potongan = "<?php echo @$formulir[0]->status_potongan; ?>";

if (<?php echo $formulir[0]->status_potongan; ?> == 1) {
    result_style.display = 'table-row';
} else {
    result_style.display = 'none';
}

$('#potongan_rupiah').on('change', function() { // on change of state
    if (this.checked) // if changed state is "CHECKED"
    {
        result_style.display = 'table-row';
        document.getElementById("nama_potongan_langsung").disabled = false;
        document.getElementById("nominal_potongan_langsung").disabled = false;
        document.getElementById("nominal_potongan_langsung").value = 0;
        status_potongan = '1'

        get_total();
    } else {
        result_style.display = 'none';
        document.getElementById("nama_potongan_langsung").disabled = true;
        document.getElementById("nominal_potongan_langsung").disabled = true;
        document.getElementById("nominal_potongan_langsung").value = 0;
        status_potongan = '0';

        get_total();
    }
})

$("#nominal_potongan_langsung").on('change keydown paste input', function() {
    get_total();
});

var t_biaya = document.getElementById('total_biaya');

function get_total_voucher() {

    var nomArray = new Array();
    $("input[name=subtotal]").each(function() {
        nomArray.push($(this).val().split(".").join(""));
    });

    var sum = 0;
    $.each(nomArray, function() {
        sum += parseFloat(this) || 0;
    });

    $('#total_biaya_voucher').val(number_format(sum, 0, ',', '.'));
    return sum;
}

function get_total() {
    var nominal_potongan_langsung = $('#nominal_potongan_langsung').val().split(".").join("");
    var total = parseInt(get_total_voucher()) - parseInt(nominal_potongan_langsung);
    t_biaya.innerHTML = "Rp. " + number_format(total, 0, ',', '.');

    return number_format(total, 0, ',', '.');
}

function get_voucher() {
    var vocArray = new Array();
    $("select[name=id_voucher]").each(function() {
        if ($(this).val()) {
            var values = $(this).val().split(',');
            vocArray.push(values[0]);
        }
    });
    return vocArray;

}

number_format = function(number, decimals, dec_point, thousands_sep) {
    number = number.toFixed(decimals);

    var nstr = number.toString();
    nstr += '';
    x = nstr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? dec_point + x[1] : '';
    var rgx = /(\d+)(\d{3})/;

    while (rgx.test(x1))
        x1 = x1.replace(rgx, '$1' + thousands_sep + '$2');

    return x1 + x2;
};

get_total_voucher();
get_total();
</script>

<script>
function act_confirm_payment_ppdb(id, name) {
    var csrfName = $('.txt_csrfname').attr('name');
    var csrfHash = $('.txt_csrfname').val(); // CSRF hash

    Swal.fire({
        title: "Peringatan!",
        text: "Apakah anda yakin ingin MENYETUJUI Bukti Pembayaran " + name + "?",
        icon: "warning",
        input: 'select',
        inputLabel: 'Keterangan',
        inputPlaceholder: 'Pilih status keterangan',
        inputOptions: {
            'lunas': 'LUNAS',
            'belum_lunas': 'BELUM LUNAS'
        },
        inputValidator: (value) => {
            if (!value) {
                return 'Keterangan diperlukan!'
            }
        },
        showCancelButton: true,
        confirmButtonColor: "#1BC5BD",
        confirmButtonText: "Ya, Setuju!",
        cancelButtonText: "Tidak, batal!",
        showLoaderOnConfirm: true,
        closeOnConfirm: false,
        closeOnCancel: true,
        preConfirm: (value) => {
            return $.ajax({
                type: "post",
                url: "<?php echo site_url("/ppdb/payment/accept_payment_ppdb") ?>",
                data: {
                    id: id,
                    keterangan: value,
                    [csrfName]: csrfHash
                },
                dataType: 'html',
                success: function(result) {
                    Swal.fire("Diterima!", "Bukti Pembayaran Biaya Masuk '" + name +
                        "' telah disetujui.", "success");
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                },
                error: function(result) {
                    console.log(result);
                    Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
                }
            });
        },
        allowOutsideClick: () => !Swal.isLoading()
    }).then(function(result) {
        if (!result.isConfirm) {
            Swal.fire("Dibatalkan!", "Persetujuan Bukti Pembayaran Biaya Masuk " + name + " dibatalkan.",
                "error");
        }
    });
}
</script>
