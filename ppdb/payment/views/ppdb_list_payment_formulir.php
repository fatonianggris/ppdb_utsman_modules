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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Pembayaran Formulir</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Daftar Pembayaran Formulir</a>
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
				<div class="col-xl-2 col-6">
					<!--begin::Tiles Widget 11-->
					<div class="card card-custom bg- gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-primary ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M4.5,21 L21.5,21 C22.3284271,21 23,20.3284271 23,19.5 L23,8.5 C23,7.67157288 22.3284271,7 21.5,7 L11,7 L8.43933983,4.43933983 C8.15803526,4.15803526 7.77650439,4 7.37867966,4 L4.5,4 C3.67157288,4 3,4.67157288 3,5.5 L3,19.5 C3,20.3284271 3.67157288,21 4.5,21 Z" fill="#000000" opacity="0.3" />
										<path d="M2.5,19 L19.5,19 C20.3284271,19 21,18.3284271 21,17.5 L21,6.5 C21,5.67157288 20.3284271,5 19.5,5 L9,5 L6.43933983,2.43933983 C6.15803526,2.15803526 5.77650439,2 5.37867966,2 L2.5,2 C1.67157288,2 1,2.67157288 1,3.5 L1,17.5 C1,18.3284271 1.67157288,19 2.5,19 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-dark"><?php echo $insight_confirm[0]->total_bukti; ?></div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-muted">Total Bukti</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--begin::Stats Widget 28-->
				<div class="col-xl-2 col-6">
					<!--begin::Tiles Widget 11-->
					<div class="card card-custom bg-success gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_confirm[0]->diterima; ?></div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Bukti Diterima</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<div class="col-xl-2 col-6">
					<!--begin::Tiles Widget 11-->
					<div class="card card-custom bg-warning gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M14.5,12 C15.0522847,12 15.5,12.4477153 15.5,13 L15.5,16 C15.5,16.5522847 15.0522847,17 14.5,17 L9.5,17 C8.94771525,17 8.5,16.5522847 8.5,16 L8.5,13 C8.5,12.4477153 8.94771525,12 9.5,12 L9.5,11.5 C9.5,10.1192881 10.6192881,9 12,9 C13.3807119,9 14.5,10.1192881 14.5,11.5 L14.5,12 Z M12,10 C11.1715729,10 10.5,10.6715729 10.5,11.5 L10.5,12 L13.5,12 L13.5,11.5 C13.5,10.6715729 12.8284271,10 12,10 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_confirm[0]->proses_verifikasi; ?></div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Proses Verifikasi</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
					<!--end::Stat: Widget 28-->
				</div>
				<!--end::Stats Widget 25-->
				<div class="col-xl-2 col-6">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-danger gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M10.5857864,13 L9.17157288,11.5857864 C8.78104858,11.1952621 8.78104858,10.5620972 9.17157288,10.1715729 C9.56209717,9.78104858 10.1952621,9.78104858 10.5857864,10.1715729 L12,11.5857864 L13.4142136,10.1715729 C13.8047379,9.78104858 14.4379028,9.78104858 14.8284271,10.1715729 C15.2189514,10.5620972 15.2189514,11.1952621 14.8284271,11.5857864 L13.4142136,13 L14.8284271,14.4142136 C15.2189514,14.8047379 15.2189514,15.4379028 14.8284271,15.8284271 C14.4379028,16.2189514 13.8047379,16.2189514 13.4142136,15.8284271 L12,14.4142136 L10.5857864,15.8284271 C10.1952621,16.2189514 9.56209717,16.2189514 9.17157288,15.8284271 C8.78104858,15.4379028 8.78104858,14.8047379 9.17157288,14.4142136 L10.5857864,13 Z" fill="#000000" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_confirm[0]->ditolak; ?></div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Bukti Ditolak</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--end::Stats Widget 26-->
				<div class="col-xl-4 col-12">
					<!--begin::Engage Widget 2-->
					<div class="card card-custom card-stretch gutter-b">
						<div class="card-body d-flex p-0">
							<div class="flex-grow-1 bg-info p-5 card-rounded flex-grow-1 bgi-no-repeat" style="background-position: calc(100% + 0.8rem) bottom;background-size: auto 60%;background-image: url(<?php echo base_url(); ?>assets/ppdb/dist/assets/media/svg/files/jpg.svg);">
								<h4 class="text-inverse-danger font-weight-bolder">Info Penting</h4>
								<p class="text-inverse-danger my-2">Pastikan bukti transfer sudah sesuai dengan jumlah transfer ke rekening Sekolah Anda</p>

							</div>
						</div>
					</div>
					<!--end::Engage Widget 2-->
				</div>
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
									<div class="col-lg-12 col-xl-12">
										<div class="row align-items-center">
											<div class="col-md-3 my-2 my-md-0">
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
																<option value="6">DC</option>
																<option value="1">KB</option>
																<option value="5">KB-TK</option>
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
													<select class="form-control" id="kt_datatable_search_verification">
														<option value="">Status Verifikasi</option>
														<option value="1">Proses Verifikasi</option>
														<option value="2">Disetujui</option>
														<option value="3">Ditolak</option>
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
																if ($value_sch->tahun_awal == (date("Y") + 1)) {
														?>
																	<option value="<?php echo $value_sch->tahun_awal; ?>/<?php echo $value_sch->tahun_akhir; ?>" selected><?php echo $value_sch->tahun_awal; ?>/<?php echo $value_sch->tahun_akhir; ?> </option>
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
									<!--                                    <div class="col-lg-2 col-xl-3 text-right">
                                                                            <a href="<?php echo site_url("/ppdb/payment/cost/add_cost"); ?>" class="btn btn-primary btn-md" >
                                                                                <i class="flaticon2-add"></i>Tambah
                                                                            </a>
                                                                        </div>
                                    -->
								</div>
							</div>
							<!--end::Search Form-->
							<!--end: Search Form-->
							<!--begin: Datatable-->
							<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_confirm_payment">
								<thead>
									<tr>
										<th title="No Formulir">No Formulir</th>
										<th title="Nama Calon">Nama Calon</th>
										<th title="JK">JK</th>
										<th title="Jenjang">Jenjang</th>
										<th title="Program">Program</th>
										<th title="Verifikasi">Verifikasi</th>
										<th title="No Whatsapp">No Whatsapp</th>
										<th title="TA">TA</th>
										<th title="Voucher">Voucher</th>
										<th title="Masuk">Masuk</th>
										<th title="Aksi">Aksi</th>
									</tr>
								</thead>
								<p class="font-weight-bold">Ket. Warna: <span class="label font-weight-bolder label-lg bg-light-warning label-inline">CADANGAN</span>
								<p>

									<tbody>
										<?php
										if (!empty($register)) {
											foreach ($register as $key => $value) {
												$color = "";
												if ($value->status_cadangan == 0) {
													$color = "";
												} else {
													$color = "bg-light-warning";
												}
										?>
												<tr class="<?php echo $color; ?>">
													<td><b><?php echo $value->nomor_formulir; ?></b></td>
													<td><?php echo strtoupper($value->nama_calon_siswa); ?></td>
													<td><?php echo $value->jenis_kelamin; ?></td>
													<td><?php echo $value->level_tingkat; ?></td>
													<td><?php echo $value->id_jalur; ?></td>
													<td>
														<?php echo $value->status_pembayaran; ?>
													</td>
													<td><?php echo $value->nomor_wa; ?></td>
													<td>
														<?php echo $value->tahun_ajaran; ?>
													</td>
													<td><?php echo $value->kode_voucher; ?></td>
													<td>
														<?php echo $value->tanggal_masuk; ?>
													</td>
													<td>
														<div class="dropdown dropdown-inline">
															<a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown">
																<span class="svg-icon svg-icon-md">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
																		</g>
																	</svg>
																</span>
															</a>
															<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
																<ul class="navi flex-column navi-hover py-2">
																	<li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
																		Pilih Aksi:
																	</li>
																	<li class="navi-item">
																		<a href="<?php echo site_url("/ppdb/payment/payment_confirm/" . paramEncrypt($value->nomor_formulir)); ?>" class="navi-link">
																			<span class="navi-icon"><i class="la la-search text-success"></i></span>
																			<span class="navi-text">Verifikasi Data</span>
																		</a>
																	</li>
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
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/ktdatatable/base/html-table-confirm-payment.js">
</script>