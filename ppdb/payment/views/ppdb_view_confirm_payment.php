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
					<h2 class="text-white font-weight-bold my-2 mr-5">Pembayaran</h2>
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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Konfirmasi</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Konfirmasi Pembayaran Formulir</a>
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
				<div class="col-lg-8" id="kt_form">
					<!--begin::Card-->
					<div class="card card-custom gutter-b">
						<div class="card-body">
							<!--begin::Top-->
							<div class="d-flex">
								<!--begin::Pic-->
								<div class="flex-shrink-0 mr-7">
									<div class="symbol symbol-70 symbol-lg-100 symbol-light-danger">
										<span class="font-size-h2 symbol-label font-weight-boldest"><?php echo strtoupper(substr($register[0]->nama_calon_siswa, 0, 2)); ?></span>
									</div>
								</div>
								<!--end::Pic-->
								<!--begin: Info-->
								<div class="flex-grow-1">
									<!--begin::Title-->
									<div class="d-flex align-items-center justify-content-between flex-wrap mt-2">
										<!--begin::User-->
										<div class="mr-3">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?php echo strtoupper($register[0]->nama_calon_siswa); ?>
												<i class="flaticon2-correct text-success icon-md ml-2"></i></a>
											<!--end::Name-->
											<!--begin::Contacts-->
											<div class="d-flex flex-wrap my-2">
												<a href="#" class="text-success text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
																<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span><?php echo $register[0]->email_orangtua; ?></a>
												<a href="#" class="text-success text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M13.0799676,14.7839934 L15.2839934,12.5799676 C15.8927139,11.9712471 16.0436229,11.0413042 15.6586342,10.2713269 L15.5337539,10.0215663 C15.1487653,9.25158901 15.2996742,8.3216461 15.9083948,7.71292558 L18.6411989,4.98012149 C18.836461,4.78485934 19.1530435,4.78485934 19.3483056,4.98012149 C19.3863063,5.01812215 19.4179321,5.06200062 19.4419658,5.11006808 L20.5459415,7.31801948 C21.3904962,9.0071287 21.0594452,11.0471565 19.7240871,12.3825146 L13.7252616,18.3813401 C12.2717221,19.8348796 10.1217008,20.3424308 8.17157288,19.6923882 L5.75709327,18.8875616 C5.49512161,18.8002377 5.35354162,18.5170777 5.4408655,18.2551061 C5.46541191,18.1814669 5.50676633,18.114554 5.56165376,18.0596666 L8.21292558,15.4083948 C8.8216461,14.7996742 9.75158901,14.6487653 10.5215663,15.0337539 L10.7713269,15.1586342 C11.5413042,15.5436229 12.4712471,15.3927139 13.0799676,14.7839934 Z" fill="#000000" />
																<path d="M14.1480759,6.00715131 L13.9566988,7.99797396 C12.4781389,7.8558405 11.0097207,8.36895892 9.93933983,9.43933983 C8.8724631,10.5062166 8.35911588,11.9685602 8.49664195,13.4426352 L6.50528978,13.6284215 C6.31304559,11.5678496 7.03283934,9.51741319 8.52512627,8.02512627 C10.0223249,6.52792766 12.0812426,5.80846733 14.1480759,6.00715131 Z M14.4980938,2.02230302 L14.313049,4.01372424 C11.6618299,3.76737046 9.03000738,4.69181803 7.1109127,6.6109127 C5.19447112,8.52735429 4.26985715,11.1545872 4.51274152,13.802405 L2.52110319,13.985098 C2.22450978,10.7517681 3.35562581,7.53777247 5.69669914,5.19669914 C8.04101739,2.85238089 11.2606138,1.72147333 14.4980938,2.02230302 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span><?php echo $register[0]->nomor_wa; ?></a>
											</div>
											<!--end::Contacts-->
										</div>
										<!--begin::User-->

									</div>
									<!--end::Title-->
									<!--begin::Content-->
									<div class="d-flex align-items-center flex-wrap justify-content-between">
										<!--begin::Description-->
										<div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5 "><?php echo ucwords(strtolower($register[0]->alamat_rumah_dom)); ?></div>
										<!--end::Description-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Info-->
							</div>
							<!--end::Top-->
							<!--begin::Separator-->
							<div class="separator separator-solid my-7"></div>
							<!--end::Separator-->
							<!--begin::Bottom-->
							<div class="d-flex align-items-center flex-wrap">
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon2-user icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column text-dark-75">
										<span class="font-weight-bolder font-size-sm">Jenis Kelamin</span>
										<span class="font-weight-bolder font-size-h5 text-success">
											<?php
											if ($register[0]->id_jalur == 1) {
												echo 'Laki-Laki';
											} else if ($register[0]->id_jalur == 2) {
												echo 'Perempuan';
											}
											?>
										</span>
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon2-chart icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column text-dark-75">
										<span class="font-weight-bolder font-size-sm">Jenjang</span>
										<span class="font-weight-bolder font-size-h5 text-success">
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
										</span>
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon-layer icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column text-dark-75">
										<span class="font-weight-bolder font-size-sm">Program</span>
										<span class="font-weight-bolder font-size-h5 text-success">
											<?php
											if ($register[0]->id_jalur == 1) {
												echo 'REGULER';
											} else if ($register[0]->id_jalur == 2) {
												echo 'ICP';
											}
											?>
										</span>
									</div>
								</div>
								<!--end: Item-->

							</div>
							<!--end::Bottom-->
							<!--begin::Separator-->
							<div class="separator separator-solid my-7"></div>
							<!--end::Separator-->
							<!--begin::Bottom-->
							<div class="d-flex align-items-center flex-wrap">
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon2-map icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column text-dark-75">
										<span class="font-weight-bolder font-size-sm">Asal Sekolah</span>
										<span class="font-weight-bolder font-size-h5 text-success">
											<?php echo (strtoupper($register[0]->asal_sekolah)); ?>
										</span>
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon2-avatar icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column text-dark-75">
										<span class="font-weight-bolder font-size-sm">Nama OrangTua/Wali</span>
										<span class="font-weight-bolder font-size-h5 text-success">
											<?php echo ucwords(strtolower($register[0]->nama_wali)); ?>
										</span>
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon2-calendar icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column text-dark-75">
										<span class="font-weight-bolder font-size-sm">Tahun Ajaran</span>
										<span class="font-weight-bolder font-size-h5 text-success">
											<?php echo ucwords(strtolower($register[0]->tahun_ajaran)); ?>
										</span>
									</div>
								</div>
								<!--end: Item-->

							</div>
							<!--end::Bottom-->
							<!--begin::Separator-->
							<div class="separator separator-solid my-7"></div>
							<!--end::Separator-->
							<!--begin::Bottom-->
							<div class="d-flex align-items-center flex-wrap">
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon2-information icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column text-dark-75">
										<span class="font-weight-bolder font-size-sm">Informasi</span>
										<span class="font-weight-bolder font-size-h5">
											<?php
											$id_insight = $register[0]->insight;
											$id_array_insight = explode(',', $id_insight);
											foreach ($id_array_insight as $value) {

												if ($value == 1) {
											?>
													<span class="label label-default label-inline mr-2">Sosial Media Sekolah Utsman</span>
												<?php } else if ($value == 2) {
												?>
													<span class="label label-default label-inline mr-2">Website Sekolah Utsman</span>
												<?php } else if ($value == 3) {
												?>
													<span class="label label-default label-inline mr-2">Teman/Saudara/Kerabat</span>
												<?php } else if ($value == 4) {
												?>
													<span class="label label-default label-inline mr-2">Iklan Facebook</span>
												<?php } else if ($value == 5) {
												?>
													<span class="label label-default label-inline mr-2">Iklan Instagram</span>
												<?php } else if ($value == 6) {
												?>
													<span class="label label-default label-inline mr-2">Iklan Google</span>
												<?php } else if ($value == 7) {
												?>
													<span class="label label-default label-inline mr-2">Berita/Surat Kabar</span>
												<?php } else if ($value == 8) {
												?>
													<span class="label label-default label-inline mr-2">Brosur/Banner/Iklan Jalanan</span>
												<?php } else { ?>
													-
											<?php
												}
											}
											?>
										</span>
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon-price-tag icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column text-dark-75">
										<span class="font-weight-bolder font-size-sm">Biaya Formulir</span>
										<span class="font-weight-bolder font-size-h5 text-success">
											<?php
											if ($register[0]->id_voucher_form != NULL) {
												$total_biaya = $register[0]->nominal - ($register[0]->potongan_form / 100 * $register[0]->nominal);
												$ket = '*sudah termasuk diskon ' . $register[0]->potongan_form . '%';
											} else {
												$total_biaya = $register[0]->nominal;
												$ket = '';
											}
											?>
											Rp. <?php echo number_format($total_biaya, 2, ',', '.'); ?><br>
											<span class=" font-size-sm font-weight-bold text-danger"><?php echo $ket; ?></span>
										</span>
									</div>
								</div>
								<!--end: Item-->
							</div>
							<!--end::Bottom-->
							<!--begin::Separator-->
							<div class="separator separator-solid my-8"></div>
							<!--end::Separator-->
							<div class="text-center mt-9">
								<?php
								$disable = '';
								$program = '';
								$jenjang = '';
								$link_wa = '';

								if ($register[0]->id_jalur == 1) {
									$program = 'REGULER';
								} else if ($register[0]->id_jalur == 2) {
									$program = 'ICP';
								}

								if ($register[0]->level_tingkat == 1) {
									$jenjang = 'KB';
								} else if ($register[0]->level_tingkat == 2) {
									$jenjang = 'TK';
								} else if ($register[0]->level_tingkat == 3) {
									$jenjang = 'SD';
								} else if ($register[0]->level_tingkat == 4) {
									$jenjang = 'SMP';
								} else if ($register[0]->level_tingkat == 5) {
									$jenjang = 'KB-TK';
								} else if ($register[0]->level_tingkat == 6) {
									$jenjang = 'DC';
								}
								
								if (($register[0]->level_tingkat == 1 || $register[0]->level_tingkat == 2 || $register[0]->level_tingkat == 5 || $register[0]->level_tingkat == 6) && ($register[0]->id_jalur == 1)) {
									$link_wa = $contact[0]->grup_wa_dc_kb_tk;
								} else if ($register[0]->level_tingkat == 3 && $register[0]->id_jalur == 1) {
									$link_wa = $contact[0]->grup_wa_sd_reg;
								} else if ($register[0]->level_tingkat == 3 && $register[0]->id_jalur == 2) {
									$link_wa = $contact[0]->grup_wa_sd_icp;
								} else if ($register[0]->level_tingkat == 4 && $register[0]->id_jalur == 1) {
									$link_wa = $contact[0]->grup_wa_smp;
								}

								if ($register[0]->status_pembayaran == 1) {
								?>
									<button <?php echo $disable; ?> onclick="act_confrim_payment('<?php echo paramEncrypt($register[0]->nomor_formulir); ?>', '<?php echo strtoupper($register[0]->nama_calon_siswa); ?>')" class="btn btn-success font-weight-bold px-8 py-4 my-3 mx-4 mr-10"><i class="fas fa-check-circle "></i>Terima</button>
									<button <?php echo $disable; ?> onclick="act_reject_payment('<?php echo paramEncrypt($register[0]->nomor_formulir); ?>', '<?php echo strtoupper($register[0]->nama_calon_siswa); ?>')" class="btn btn-danger font-weight-bold px-8 py-4 my-3 mx-4"><i class="fas fa-window-close"></i>Tolak</button>

								<?php
								} elseif ($register[0]->status_pembayaran == 2) {
									$disable = 'disable';
								?>
									<a href="https://web.whatsapp.com/send?phone=62<?php echo substr($register[0]->nomor_wa, 1); ?>&text=*_Assalamualaikum Wr. Wb._*
                                    <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>*--SELAMAT!, PEMBAYARAN ANDA BERHASIL--*
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>_Terimakasih telah melakukan pembayaran. Pembayaran Formulir PPDB Anda telah Kami terima:_
                                       <?php echo urlencode("\n") ?>- No. Formulir: *<?php echo $register[0]->nomor_formulir; ?>*
                                       <?php echo urlencode("\n") ?>- Nama: *<?php echo ucwords(strtolower($register[0]->nama_calon_siswa)); ?>*
                                       <?php echo urlencode("\n") ?>- Jenjang: *<?php echo $jenjang; ?>*
                                       <?php echo urlencode("\n") ?>- Program: *<?php echo $program; ?>*
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>_Silahkan cek email anda untuk melihat_ *NOMOR FORMULIR* _dan_ *PASSWORD* _yang telah Kami kirimkan:_
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>```Mohon segera melakukan``` *UPLOAD BERKAS FORMULIR* ```dengan kilk``` *LINK* ```dibawah ini:```
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>*<?php echo site_url('ppdb/register/login_formulir'); ?>*
                                       <?php echo urlencode("\n") ?>
									   <?php echo urlencode("\n") ?>```Dan silahkan bergabung di Grup Whatsapp``` *PPDB <?php echo $jenjang; ?>-<?php echo $program; ?>* ```dengan kilk``` *LINK* ```dibawah ini:```
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>*<?php echo $link_wa; ?>*
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>```Atas perhatian Bapak/Ibu kami ucapkan terima kasih.```
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>_*Admin PPDB Sekolah Utsman*_" target="_blank" class="btn btn-success font-weight-bold px-6 py-4 my-3 mx-4"><i class="fab fa-whatsapp"></i> Kirim WA</a>

								<?php
								} else if ($register[0]->status_pembayaran == 3) {
									$disable = 'disable';
								?>
									<a href="https://web.whatsapp.com/send?phone=62<?php echo substr($register[0]->nomor_wa, 1); ?>&text=*_Assalamualaikum Wr. Wb._*
                                    <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>*--PEMBAYARAN GAGAL--*
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>_Mohon maaf, Bukti Pembayaran Anda *TIDAK DAPAT KAMI VERIFIKASI*:_
                                       <?php echo urlencode("\n") ?>- No. Formulir: *<?php echo $register[0]->nomor_formulir; ?>*
                                       <?php echo urlencode("\n") ?>- Nama: *<?php echo ucwords(strtolower($register[0]->nama_calon_siswa)); ?>*
                                       <?php echo urlencode("\n") ?>- Jenjang: *<?php echo $jenjang; ?>*
                                       <?php echo urlencode("\n") ?>- Program: *<?php echo $program; ?>*
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>_Bukti pembayaran anda *TIDAK SESUAI*, Mohon untuk upload kembali *BUKTI TRANSFER* yang sesuai.:_
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>```Silahkan kilk``` *LINK* ```dibawah ini, untuk``` *UPLOAD ULANG BUKTI* ```pembayaran.```
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>*<?php echo site_url('ppdb/register/reupload_payment'); ?>*
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>```Atas perhatian Bapak/Ibu kami ucapkan terima kasih.```
                                       <?php echo urlencode("\n") ?>
                                       <?php echo urlencode("\n") ?>_*Admin PPDB Sekolah Utsman*_" target="_blank" class="btn btn-danger font-weight-bold px-6 py-4 my-3 mx-4"><i class="fab fa-whatsapp"></i> Kirim WA</a>
								<?php } ?>
							</div>
						</div>
					</div>
					<!--end::Card-->
				</div>
				<div class="col-lg-4" id="kt_form">
					<!--begin::Card-->
					<div class="card card-custom gutter-b">
						<div class="card-body">
							<h3 class="text-dark font-weight-bolder mb-3"><i class="fa fa-info-circle"></i> Status Pembayaran</h3>
							<p class="font-weight-boldest display-3 mb-0 text-center text-warning">

								<?php if ($register[0]->status_pembayaran == 1) { ?>

							<p class="font-weight-boldest display-3 mb-0 text-center text-warning">VERIFIKASI</p>
						<?php } else if ($register[0]->status_pembayaran == 2) { ?>

							<p class="font-weight-boldest display-3 mb-0 text-center text-success">DISETUJUI</p>
						<?php } else if ($register[0]->status_pembayaran == 3) { ?>

							<p class="font-weight-boldest display-3 mb-0 text-center text-danger">DITOLAK</p>
						<?php } ?>

						<!--begin::Separator-->
						<div class="separator separator-solid my-4"></div>
						<!--end::Separator-->
						<h4 class="text-dark font-weight-bolder mb-5"><i class="fa fa-tag"></i> Tambahkan Voucher</h4>

						<div class="col-xl-12">
							<div class="form-group">
								<span class="text-center font-size-sm" id="info_voc"></span>
								<select name="voucher" id="voucher" <?php echo $disable; ?> class="form-control form-control-lg form-control-solid">
									<?php if ($register[0]->id_voucher != NULL or $register[0]->id_voucher != "") { ?>
										<option value="<?php echo $register[0]->id_voucher; ?>" selected="">
											<?php echo $register[0]->kode_voucher; ?>-<?php echo $register[0]->potongan; ?>%
										</option>
									<?php } else { ?>
										<option value="">Pilih Voucher</option>
									<?php } ?>
									<?php
									if (!empty($voucher)) {
										foreach ($voucher as $key => $value) {
											if ($value->terpakai < $value->jumlah_voucher) {
									?>
												<option value="<?php echo $value->id_voucher; ?>"><?php echo $value->kode_voucher; ?>-<?php echo $value->potongan; ?>% (<?php echo intval($value->jumlah_voucher) - intval($value->terpakai); ?>) </option>
									<?php
											}
										}
									}
									?>
								</select>
								<span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>pilih Voucher</span>
							</div>
						</div>
						<!--begin::Separator-->
						<div class="separator separator-solid my-4"></div>
						<!--end::Separator-->
						<h4 class="text-dark font-weight-bolder mb-5"><i class="fa fa-camera"></i> Bukti Pembayaran</h4>
						<p class=" font-weight-boldest font-size-h5 mb-0 text-center text-warning">No. Rek </p>
						<p class=" font-weight-boldest font-size-h2 mb-3 text-center text-success"><?php echo (strtolower($register[0]->nomor_rekening)); ?></p>
						<p class=" font-weight-boldest font-size-h5 mb-0 text-center text-warning">Atas Nama </p>
						<p class=" font-weight-boldest font-size-h3 mb-3 text-center text-success"><?php echo (strtoupper($register[0]->atas_nama_rekening)); ?></p>
						<div class="text-center">
							<button class="btn btn-primary font-weight-bold px-6 py-4 my-3 mx-4" data-toggle="modal" data-target="#modal_bukti"><i class="fa fa-eye"></i>Tampilkan Bukti</button>
						</div>
						</div>
					</div>
					<!--end::Card-->
				</div>
			</div>
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
	<input type="hidden" class="txt_csrfname" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
</div>
<div class="modal fade" id="modal_bukti" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran "<?php echo strtoupper($register[0]->nama_calon_siswa); ?>"</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body text-center">
				<?php if ($register[0]->keterangan != NULL || $register[0]->keterangan != "") { ?>
					<span class="text-center text-danger font-weight-bold font-size-md">Ket: <?php echo ucwords($register[0]->keterangan); ?></span>
				<?php } ?>
				<div class="text-center">
					<img alt="Pic" class="col-12" src="<?php echo base_url() . $register[0]->bukti_transfer ?>">
					<a href="<?php echo base_url() . $register[0]->bukti_transfer ?>" class="btn btn-success btn-sm py-3 px-4 mt-3" download><i class="fas fa-download"></i> Download</a>
				</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
<!--end::Content-->

<script>
	var ivoc = document.getElementById('info_voc');
	var voc = '';
	if ('<?php echo $register[0]->id_voucher; ?>' == "") {
		ivoc.innerHTML = "<b class='text-danger'>Voucher tidak digunakan</b>";
	} else {
		ivoc.innerHTML = "<b class='text-success'>" + $("#voucher option:selected").text() + " digunakan</b>";
	}

	$("#voucher").change(function() {
		voc = $(this).val();
		if (voc == '') {
			ivoc.innerHTML = "<b class='text-danger'>Voucher tidak digunakan</b>";
		} else {
			ivoc.innerHTML = "<b class='text-success'>" + $("#voucher option:selected").text() + " digunakan</b>";
		}
	});

	function act_confrim_payment(id, name) {
		var csrfName = $('.txt_csrfname').attr('name');
		var csrfHash = $('.txt_csrfname').val(); // CSRF hash
		var id_voucher = null;

		if (voc != '' || voc != null) {
			id_voucher = voc;
		} else {
			id_voucher = null;
		}

		Swal.fire({
			title: "Peringatan!",
			text: "Apakah anda yakin ingin MENYETUJUI Bukti Siswa " + name + "?",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#1BC5BD",
			confirmButtonText: "Ya, Setuju!",
			cancelButtonText: "Tidak, batal!",
			showLoaderOnConfirm: true,
			closeOnConfirm: false,
			closeOnCancel: false,
			preConfirm: () => {
				return $.ajax({
					type: "post",
					url: "<?php echo site_url("/ppdb/payment/accept_payment") ?>",
					data: {
						id: id,
						id_voucher: id_voucher,
						[csrfName]: csrfHash
					},
					dataType: 'html',
					success: function(result) {
						Swal.fire("Disetujui!", "Bukti Siswa '" + name + "' telah disetujui.", "success");
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
				Swal.fire("Dibatalkan!", "Persetujuan Bukti Siswa " + name + " dibatalkan.", "error");
			}
		});
	}
</script>
<script>
	function act_reject_payment(id, name) {
		var csrfName = $('.txt_csrfname').attr('name');
		var csrfHash = $('.txt_csrfname').val(); // CSRF hash

		Swal.fire({
			title: "Peringatan!",
			text: "Apakah anda yakin ingin MENOLAK Bukti Siswa " + name + "?",
			icon: "warning",
			input: 'textarea',
			inputLabel: 'Keterangan',
			inputPlaceholder: 'Masukkan alasan ditolak',
			inputAttributes: {
				'aria-label': 'Masukkan alasan ditolak'
			},
			inputValidator: (value) => {
				if (!value) {
					return 'Keterangan diperlukan!'
				}
			},
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Ya, Tolak!",
			cancelButtonText: "Tidak, batal!",
			showLoaderOnConfirm: true,
			closeOnConfirm: false,
			closeOnCancel: true,
			preConfirm: (text) => {
				return $.ajax({
					type: "post",
					url: "<?php echo site_url("/ppdb/payment/reject_payment") ?>",
					data: {
						id: id,
						keterangan: text,
						[csrfName]: csrfHash
					},
					dataType: 'html',
					success: function(result) {
						Swal.fire("Ditolak!", "Bukti Siswa '" + name + "' telah ditolak.", "success");
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
				Swal.fire("Dibatalkan!", "Penolakan Bukti Siswa " + name + " dibatalkan.", "error");
			}
		});
	}
</script>