<!--begin::Content-->
<?php $biaya = $this->session->userdata('cost'); ?>
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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Daftar Biaya Sekolah</a>
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
				<div class="col-lg-12 mb-10" id="kt_form">
					<!--begin::Card-->
					<div class="card card-custom">
						<div class="card-header">
							<h3 class="card-title">
								Tambah Biaya Sekolah
							</h3>
							<div class="card-title">
								<a class="btn btn-primary btn-md" data-toggle="modal" data-target="#modal_add_option">
									<i class="flaticon2-add"></i> Tambah Opsi Biaya
								</a>
							</div>
						</div>
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" action="<?php echo site_url('ppdb/settings/cost/post_cost'); ?>" enctype="multipart/form-data" method="post" id="kt_add_cost_form">
							<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-3">
										<div class="form-group">
											<label>Jenis Biaya</label>
											<select name="jenis_biaya" id="jenis_biaya" class="form-control form-control-lg">
												<option value="">Pilih Jenis Biaya</option>
												<option value="1">Pendaftaran (Formulir)</option>
												<option value="2">Uang Masuk (PPDB)</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jenis Biaya Sekolah</span>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Jenis Kelamin</label>
											<select name="id_jenis_kelamin" id="tingkat" class="form-control form-control-lg">
												<option value="">Pilih Jenis Kelamin</option>
												<option value="1">Laki-laki</option>
												<option value="2">Perempuan</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jenjang Biaya</span>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Jenjang</label>
											<select name="level_tingkat" id="tingkat" class="form-control form-control-lg">
												<option value="">Pilih Jenjang</option>
												<option value="6">DC</option>
												<option value="1">KB</option>
												<option value="5">KB-TK</option>
												<option value="2">TK</option>
												<option value="3">SD</option>
												<option value="4">SMP</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jenjang Biaya</span>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Program</label>
											<select name="id_jalur" id="jalur" class="form-control form-control-lg">
												<option value="">Pilih Program</option>
												<option value="1">Reguler</option>
												<option value="2">ICP</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Program</span>
										</div>
									</div>

								</div>
								<div class="row">
									<div class="col-lg-7">
										<div class="form-group">
											<label>Opsi Nama Biaya</label>
											<select name="id_nama_biaya" id="id_nama_biaya" class="form-control form-control-lg">
												<option value="">Pilih Opsi Nama Biaya</option>

											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Jenjang Biaya</span>
										</div>
									</div>
									<div class="col-lg-1">
										<div class="form-group">
											<label>Aksi</label>
											<a class="btn btn-warning btn-lg" href="javascript:;" data-toggle="dropdown">
												<i class="flaticon2-settings ml-3"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
												<ul class="navi flex-column navi-hover py-2">
													<li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
														Pilih Aksi:
													</li>
													<li class="navi-item">
														<a href="javascript:act_edit_cost_option()" class="navi-link">
															<span class="navi-icon"><i class="la la-edit text-success"></i></span>
															<span class="navi-text">Edit</span>
														</a>
													</li>
													<li class="navi-item">
														<a href="javascript:act_delete_cost_option()" class="navi-link">
															<span class="navi-icon"><i class="la la-close text-danger"></i></span>
															<span class="navi-text">Hapus</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Nominal Biaya</label>
											<input type="text" name="nominal" class="form-control form-control-lg" placeholder="Isikan Nominal Biaya" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nominal Biaya</span>
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
				<div class="col-lg-12">

					<!--begin::Entry-->
					<!--begin::Card-->
					<div class="card card-custom">
						<div class="card-body">
							<!--begin: Search Form-->
							<!--begin::Search Form-->
							<div class="mb-7">
								<div class="row align-items-center">
									<div class="col-lg-10 col-xl-10">
										<div class="row align-items-center">
											<div class="col-md-3 my-2 my-md-0">
												<div class="input-icon">
													<input type="text" class="form-control" placeholder="Cari..." id="kt_datatable_search_query" />
													<span>
														<i class="flaticon2-search-1 text-muted"></i>
													</span>
												</div>
											</div>
											<div class="col-lg-7 my-2 my-md-0 ">
												<div class="row align-items-center">
													<div class="col-md-5 my-2 my-md-0">
														<div class="d-flex align-items-center">
															<select class="form-control" id="kt_datatable_search_cost">
																<option value="">Pilih Jenis Biaya</option>
																<?php if ($biaya['jb'] == '1') { ?>
																	<option value="1" selected="">Pendaftaran (Formulir)</option>
																<?php } elseif ($biaya['jb'] == '2') { ?>
																	<option value="2" selected="">Uang Masuk (PPDB)</option>
																<?php } else { ?>
																	<option value="" selected="">Semua</option>
																<?php } ?>
																<option value="1">Pendaftaran (Formulir)</option>
																<option value="2">Uang Masuk (PPDB)</option>
																<option value="">Semua</option>
															</select>
														</div>
													</div>
													<div class="col-md-3 my-2 my-md-0">
														<div class="d-flex align-items-center">
															<select class="form-control" id="kt_datatable_search_grade">
																<option value="">Jenjang</option>
																<?php if ($biaya['jenjang'] == '1') { ?>
																	<option value="1" selected="">KB</option>
																<?php } elseif ($biaya['jenjang'] == '2') { ?>
																	<option value="2" selected="">TK</option>
																<?php } elseif ($biaya['jenjang'] == '3') { ?>
																	<option value="3" selected="">SD</option>
																<?php } elseif ($biaya['jenjang'] == '4') { ?>
																	<option value="4" selected="">SMP</option>
																<?php } else { ?>
																	<option value="" selected="">Semua</option>
																<?php } ?>
																<option value="6">DC</option>
																<option value="1">KB</option>
																<option value="5">KB-TK</option>
																<option value="2">TK</option>
																<option value="3">SD</option>
																<option value="4">SMP</option>
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
										</div>
									</div>
									<div class="col-lg-2 col-xl-2 align-items-center">
										<p class="font-size-sm font-weight-boldest text-dark mb-0 mt-0">TOTAL</p>
										<p id="nominals" class="font-size-h2 font-weight-boldest text-danger mb-0">Rp. 0,00</p>
									</div>
								</div>
							</div>
							<!--end::Search Form-->
							<!--end: Search Form-->
							<!--begin: Datatable-->
							<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_cost">
								<thead>
									<tr>
										<th title="Biaya">Biaya</th>
										<th title="JK">JK</th>
										<th title="Jenjang">Jenjang</th>
										<th title="Program">Program</th>
										<th title="Nama Biaya">Nama Biaya</th>
										<th title="Nominal Keseluruhan">Nominal Keseluruhan</th>
										<th title="Aksi">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($cost)) {
										foreach ($cost as $key => $value) {
									?>
											<tr>
												<td><?php echo strtoupper($value->jenis_biaya); ?></td>
												<td><?php echo $value->id_jenis_kelamin; ?></td>
												<td><?php echo $value->level_tingkat; ?></td>
												<td><?php echo $value->id_jalur; ?></td>
												<td><?php echo $value->nama_biaya; ?></td>
												<td>Rp. <?php echo number_format($value->nominal, 2, ',', '.') ?></td>
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
																	<a href="<?php echo site_url("/ppdb/settings/cost/edit_cost/" . paramEncrypt($value->id_biaya)); ?>" class="navi-link">
																		<span class="navi-icon"><i class="la la-edit text-success"></i></span>
																		<span class="navi-text">Edit</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="javascript:act_delete_cost('<?php echo paramEncrypt($value->id_biaya); ?>', '<?php echo strtoupper($value->nama_biaya); ?>')" class="navi-link">
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
<div class="modal fade" id="modal_add_option" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content" id="kt_form_modal">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Opsi Biaya</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<form class="form" method="POST" action="<?php echo site_url('/ppdb/settings/cost/post_cost_option'); ?>" id="kt_form_cost_option">
				<input type="hidden" class="txt_csrfname" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				<div class="modal-body">
					<div class="row">
						<div class="col-xl-3"></div>
						<div class="col-xl-6">
							<div class="form-group">
								<label>Jenis Biaya</label>
								<select name="id_kategori_biaya" class="form-control form-control-lg">
									<option value="">Pilih Jenis Biaya</option>
									<option value="1">Pendaftaran (Formulir)</option>
									<option value="2">Uang Masuk (PPDB)</option>
								</select>
								<span class="form-text text-dark"><b class="text-danger">*WAJIB DIPILIH, </b>pilih Jenis Biaya</span>
							</div>
						</div>
						<div class="col-xl-3"></div>
					</div>
					<div class="row">
						<div class="col-xl-1"></div>
						<div class="col-xl-10">
							<div class="form-group">
								<label>Nama Biaya yang dijadikan Opsi</label>
								<input type="text" name="nama_opsi_biaya" class="form-control form-control-lg " placeholder="Isikan Nama Biaya yang dijadikan Opsi">
								<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>Isikan Nama Biaya yang dijadikan Opsi</span>
							</div>
						</div>
						<div class="col-xl-1"></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success font-weight-bold mr-2">Simpan</button>
					<button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_edit_option" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Tambah Opsi Biaya</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<form class="form" method="POST" id="edit_option">
				<input type="hidden" class="txt_csrfname" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
				<div class="modal-body">
					<div class="row">
						<div class="col-xl-3"></div>
						<div class="col-xl-6">
							<div class="form-group">
								<label>Jenis Biaya</label>
								<select name="id_kategori_biaya" id="id_kategori_biaya" class="form-control form-control-lg" required="">
									<option value="1">Pendaftaran (Formulir)</option>
									<option value="2">Uang Masuk (PPDB)</option>
								</select>
								<span class="form-text text-dark"><b class="text-danger">*WAJIB DIPILIH, </b>pilih Jenis Biaya</span>
							</div>
						</div>
						<div class="col-xl-3"></div>
					</div>
					<div class="row">
						<div class="col-xl-1"></div>
						<div class="col-xl-10">
							<div class="form-group">
								<label>Nama Biaya yang dijadikan Opsi</label>
								<input type="text" name="nama_opsi_biaya" id="nama_opsi_biaya" class="form-control form-control-lg " placeholder="Isikan Nama Biaya yang dijadikan Opsi" required="">
								<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>Isikan Nama Biaya yang dijadikan Opsi</span>
							</div>
						</div>
						<div class="col-xl-1"></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success font-weight-bold mr-2">Simpan</button>
					<button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--end::Content-->
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/ktdatatable/base/html-table-cost.js">
</script>
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/add-cost-ppdb.js">
</script>
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/add-cost-option-ppdb.js">
</script>

<script>
	$(document).ready(function() {
		var id_cost;

		$("#jenis_biaya").change(function() {
			id_cost = $(this).val();
			var url = "<?php echo site_url('/ppdb/settings/cost/add_ajax_cost_option_add'); ?>/" + id_cost;
			$('#id_nama_biaya').load(url);
			return false;
		});

		var id_jb = "<?php echo $biaya['jb'] ?>";
		var id_jenjang = "<?php echo $biaya['jenjang'] ?>";
		var id_pro = "0";
		var id_jk = "0";

		var url = "<?php echo site_url('ppdb/settings/cost/add_ajax_sum_cost'); ?>/" + id_jb + "/" + id_jenjang + "/" + id_pro + "/" + id_jk;
		$('#nominals').load(url);

		$("#kt_datatable_search_cost").change(function() {
			id_jb = $(this).val();
			if (id_jb == "" || id_jb == null) {
				id_jb = "0";
			}
			var url = "<?php echo site_url('ppdb/settings/cost/add_ajax_sum_cost'); ?>/" + id_jb + "/" + id_jenjang + "/" + id_pro + "/" + id_jk;
			$('#nominals').load(url);
			return false;
		});

		$("#kt_datatable_search_grade").change(function() {
			id_jenjang = $(this).val();
			if (id_jenjang == "" || id_jenjang == null) {
				id_jenjang = "0";
			}
			var url = "<?php echo site_url('ppdb/settings/cost/add_ajax_sum_cost'); ?>/" + id_jb + "/" + id_jenjang + "/" + id_pro + "/" + id_jk;
			$('#nominals').load(url);
			return false;
		});

		$("#kt_datatable_search_program").change(function() {
			id_pro = $(this).val();
			if (id_pro == "" || id_pro == null) {
				id_pro = "0";
			}
			var url = "<?php echo site_url('ppdb/settings/cost/add_ajax_sum_cost'); ?>/" + id_jb + "/" + id_jenjang + "/" + id_pro + "/" + id_jk;
			$('#nominals').load(url);
			return false;
		});

		$("#kt_datatable_search_gender").change(function() {
			id_jk = $(this).val();
			if (id_jk == "" || id_jk == null) {
				id_jk = "0";
			}
			var url = "<?php echo site_url('ppdb/settings/cost/add_ajax_sum_cost'); ?>/" + id_jb + "/" + id_jenjang + "/" + id_pro + "/" + id_jk;
			$('#nominals').load(url);
			return false;
		});

	});
</script>
<script>
	function act_delete_cost_option() {
		var csrfName = $('.txt_csrfname').attr('name');
		var csrfHash = $('.txt_csrfname').val(); // CSRF hash

		var id_biaya = $('#id_nama_biaya option:selected').val();
		var nama_biaya = $('#id_nama_biaya option:selected').text();

		if (id_biaya == null || id_biaya == "") {
			Swal.fire("Opsss!", "Anda belum memilih OPSI NAMA BIAYA.", "error");
		} else {
			Swal.fire({
				title: "Peringatan!",
				text: "Apakah anda yakin ingin menghapus Biaya " + nama_biaya + "?",
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
						url: "<?php echo site_url("/ppdb/settings/cost/delete_cost_option") ?>",
						data: {
							id: id_biaya,
							[csrfName]: csrfHash
						},
						dataType: 'html',
						success: function(result) {
							Swal.fire("Terhapus!", "Nama '" + nama_biaya + "' telah terhapus.", "success");
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
					Swal.fire("Dibatalkan!", "Nama " + nama_biaya + " batal dihapus.", "error");
				}
			});
		}

	}

	function act_edit_cost_option() {
		var id_biaya = $('#id_nama_biaya option:selected').val();
		var nama_biaya = $('#id_nama_biaya option:selected').text();

		var id_jenis_biaya = $('#jenis_biaya option:selected').val();
		var nama_jenis_biaya = $('#jenis_biaya option:selected').text();

		if (id_biaya == null || id_biaya == "") {
			Swal.fire("Opsss!", "Anda belum memilih OPSI NAMA BIAYA.", "error");
		} else {
			$('#edit_option').attr('action', '<?php echo site_url('/ppdb/settings/cost/update_cost_option/'); ?>' + id_biaya);
			$("#id_kategori_biaya").append(new Option(nama_jenis_biaya, id_jenis_biaya, true, true));
			$("#nama_opsi_biaya").val(nama_biaya);
			$('#modal_edit_option').modal('show');
		}
	}
</script>

<script>
	function act_delete_cost(id, name) {
		var csrfName = $('.txt_csrfname').attr('name');
		var csrfHash = $('.txt_csrfname').val(); // CSRF hash

		Swal.fire({
			title: "Peringatan!",
			text: "Apakah anda yakin ingin menghapus Biaya " + name + "?",
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
					url: "<?php echo site_url("/ppdb/settings/cost/delete_cost") ?>",
					data: {
						id: id,
						[csrfName]: csrfHash
					},
					dataType: 'html',
					success: function(result) {
						Swal.fire("Terhapus!", "Biaya '" + name + "' telah terhapus.", "success");
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
				Swal.fire("Dibatalkan!", "Biaya " + name + " batal dihapus.", "error");
			}
		});
	}
</script>
