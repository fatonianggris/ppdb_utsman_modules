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
					<h2 class="text-white font-weight-bold my-2 mr-5">Pembelian</h2>
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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Daftar Pembelian Formulir</a>
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
					<a href="#" class="btn btn-light-danger font-weight-bold py-3 px-6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-backward"></i>Kembali</a>
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
				<div class="col-xl-2">
					<!--begin::Tiles Widget 11-->
					<div class="card card-custom bg-success gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white">790</div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Sudah Dibayar</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>

				<!--end::Stats Widget 25-->
				<div class="col-xl-2">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-danger gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white">790</div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Belum Dibayar</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--end::Stats Widget 26-->
				<!--end::Stats Widget 25-->
				<div class="col-xl-2">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-primary gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white">790</div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang KB</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--end::Stats Widget 26-->
				<!--end::Stats Widget 25-->
				<div class="col-xl-2">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-primary gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white">790</div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang TK</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--end::Stats Widget 26-->
				<!--end::Stats Widget 25-->
				<div class="col-xl-2">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-primary gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white">790</div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang SD</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--end::Stats Widget 26-->
				<!--end::Stats Widget 25-->
				<div class="col-xl-2">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-primary gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
										<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white">790</div>
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
									<div class="col-lg-12 col-xl-12">
										<div class="row align-items-center">
											<div class="col-md-4 my-2 my-md-0">
												<div class="input-icon">
													<input type="text" class="form-control" placeholder="Cari..." id="kt_datatable_search_query" />
													<span>
														<i class="flaticon2-search-1 text-muted"></i>
													</span>
												</div>
											</div>
											<div class="col-md-2 my-2 my-md-0">
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
											<div class="col-md-2 my-2 my-md-0">
												<div class="d-flex align-items-center">
													<select class="form-control" id="kt_datatable_search_program">
														<option value="">Pilih Program</option>
														<option value="1">Reguler</option>
														<option value="2">ICP</option>
														<option value="">Semua</option>
													</select>
												</div>
											</div>
											<div class="col-md-2 my-2 my-md-0">
												<div class="d-flex align-items-center">
													<select class="form-control" id="kt_datatable_search_gender">
														<option value="">Pilih JK</option>
														<option value="1">Laki-laki</option>
														<option value="2">Perempuan</option>
														<option value="">Semua</option>
													</select>
												</div>
											</div>
											<div class="col-md-2 my-2 my-md-0">
												<div class="d-flex align-items-center">
													<select class="form-control" id="kt_datatable_search_sold">
														<option value="">Status Pembayaran</option>
														<option value="0">Belum Bayar</option>
														<option value="1">Sudah Bayar</option>
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
							<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_sold">
								<thead>
									<tr>
										<th title="No Formulir">No Formulir</th>
										<th title="Nama Calon">Nama Calon</th>
										<th title="JK">JK</th>
										<th title="Jenjang">Jenjang</th>
										<th title="Program">Program</th>
										<th title="Pembayaran">Pembayaran</th>
										<th title="No Whatsapp">No Whatsapp</th>
										<th title="TA">TA</th>
										<th title="Aksi">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($register)) {
										foreach ($register as $key => $value) {
									?>
											<tr>
												<td><b><?php echo $value->nomor_formulir; ?></b></td>
												<td><?php echo $value->nama_calon_siswa; ?></td>
												<td><?php echo $value->jenis_kelamin; ?></td>
												<td><?php echo $value->level_tingkat; ?></td>
												<td><?php echo $value->id_jalur; ?></td>
												<td>
													<?php if ($value->status_pembayaran == 0) { ?>
														0
													<?php } else { ?>
														1
													<?php } ?>
												</td>
												<td><?php echo $value->nomor_wa; ?></td>
												<td>
													<?php echo $value->tahun_ajaran; ?>
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
																	<a href="<?php echo site_url("/ppdb/admission/student_detail" . paramEncrypt($value->id_pendaftaran)); ?>" class="navi-link">
																		<span class="navi-icon"><i class="la la-search text-success"></i></span>
																		<span class="navi-text">Lihat Detail</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="javascript:act_delete_register('<?php echo paramEncrypt($value->id_pendaftaran); ?>', '<?php echo strtoupper($value->nama_calon_siswa); ?>')" class="navi-link">
																		<span class="navi-icon"><i class="la la-close text-danger"></i></span>
																		<span class="navi-text">Hapus</span>
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
	<input type="hidden" class="txt_csrfname" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
</div>
<!--end::Content-->
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/ktdatatable/base/html-table-sold.js">
</script>

<script>
	function act_delete_register(id, name) {
		var csrfName = $('.txt_csrfname').attr('name');
		var csrfHash = $('.txt_csrfname').val(); // CSRF hash

		Swal.fire({
			title: "Peringatan!",
			text: "Apakah anda yakin ingin menghapus Pendaftar atas nama " + name + "?",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Ya, hapus!",
			cancelButtonText: "Tidak, batal!",
			closeOnConfirm: false,
			closeOnCancel: false
		}).then(function(result) {
			if (result.value) {
				$.ajax({
					type: "post",
					url: "<?php echo site_url("/ppdb/admission/delete_student_register") ?>",
					data: {
						id: id,
						[csrfName]: csrfHash
					},
					dataType: 'html',
					success: function(result) {
						Swal.fire("Terhapus!", "Pendaftar atas nama '" + name + "' telah terhapus.", "success");
						setTimeout(function() {
							location.reload();
						}, 1000);
					},
					error: function(result) {
						console.log(result);
						Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
					}
				});

			} else {
				Swal.fire("Dibatalkan!", "Pendaftar atas nama " + name + " batal dihapus.", "error");
			}
		});
	}
</script>
