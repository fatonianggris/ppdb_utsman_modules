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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Rekening</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Daftar Rekening Alat Bayar</a>
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

					<!--begin::Entry-->
					<!--begin::Card-->
					<div class="card card-custom">
						<div class="card-body">
							<!--begin: Search Form-->
							<!--begin::Search Form-->
							<div class="mb-7">
								<div class="row align-items-center">
									<div class="col-lg-9 col-xl-8">
										<div class="row align-items-center">
											<div class="col-md-6 my-2 my-md-0">
												<div class="input-icon">
													<input type="text" class="form-control" placeholder="Cari..." id="kt_datatable_search_query" />
													<span>
														<i class="flaticon2-search-1 text-muted"></i>
													</span>
												</div>
											</div>
											<div class="col-md-4 my-2 my-md-0">
												<div class="d-flex align-items-center">
													<select class="form-control" id="kt_datatable_search_tipe">
														<option value="">Pilih Tipe</option>
														<option value="1">Bank</option>
														<option value="2">E-Wallet</option>
														<option value="">Semua</option>
													</select>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-3 col-xl-4 text-right">
										<a href="<?php echo site_url("/ppdb/settings/bank/add_bank_account"); ?>" class="btn btn-primary btn-md">
											<i class="flaticon2-add"></i>Tambah
										</a>
									</div>
								</div>
							</div>
							<!--end::Search Form-->
							<!--end: Search Form-->
							<!--begin: Datatable-->
							<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_bank_account">
								<thead>
									<tr>
										<th title="Tipe">Tipe</th>
										<th title="Nama Alat Bayar">Nama Alat Bayar</th>
										<th title="Atas Nama">Atas Nama</th>
										<th title="Nomor Alat Bayar">Nomor Alat Bayar</th>
										<th title="Status">Status</th>
										<th title="Aksi">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($bank_account)) {
										foreach ($bank_account as $key => $value) {
									?>
											<tr>
												<td><?php echo strtoupper($value->tipe_alatbayar); ?></td>
												<td><?php echo strtoupper($value->nama_alatbayar); ?></td>
												<td><?php echo $value->atas_nama; ?></td>
												<td><?php echo $value->nomor_alatbayar; ?></td>
												<td>
													<?php if ($value->status_alat_bayar == 1) { ?>
														<a href="javascript:act_disable_bank_account('<?php echo paramEncrypt($value->id_alat_bayar); ?>', '<?php echo strtoupper($value->nama_alatbayar); ?>')" class="btn btn-icon btn-xs btn-success"><i class="flaticon2-check-mark"></i></a>
													<?php } else { ?>
														<a href="javascript:act_activate_bank_account('<?php echo paramEncrypt($value->id_alat_bayar); ?>', '<?php echo strtoupper($value->nama_alatbayar); ?>')" class="btn btn-icon btn-xs btn-default"><i class="flaticon2-delete"></i></a>
													<?php } ?>
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
																	<a href="<?php echo site_url("/ppdb/settings/bank/edit_bank_account/" . paramEncrypt($value->id_alat_bayar)); ?>" class="navi-link">
																		<span class="navi-icon"><i class="la la-edit text-success"></i></span>
																		<span class="navi-text">Edit</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="javascript:act_delete_bank_account('<?php echo paramEncrypt($value->id_alat_bayar); ?>', '<?php echo strtoupper($value->nama_alatbayar); ?>')" class="navi-link">
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
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/ktdatatable/base/html-table-bank-account.js">
</script>
<script>
	function act_delete_bank_account(id, name) {
		var csrfName = $('.txt_csrfname').attr('name');
		var csrfHash = $('.txt_csrfname').val(); // CSRF hash

		Swal.fire({
			title: "Peringatan!",
			text: "Apakah anda yakin ingin menghapus Alat Bayar " + name + "?",
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
					url: "<?php echo site_url("/ppdb/settings/bank/delete_bank_account") ?>",
					data: {
						id: id,
						[csrfName]: csrfHash
					},
					dataType: 'html',
					success: function(result) {
						Swal.fire("Terhapus!", "Alat Bayar '" + name + "' telah terhapus.", "success");
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
				Swal.fire("Dibatalkan!", "Alat Bayar " + name + " batal dihapus.", "error");
			}
		});
	}
</script>
<script>
	function act_activate_bank_account(id, name) {
		var csrfName = $('.txt_csrfname').attr('name');
		var csrfHash = $('.txt_csrfname').val(); // CSRF hash

		Swal.fire({
			title: "Peringatan!",
			text: "Apakah anda yakin ingin mengaktifkan Alat Bayar " + name + "?",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Ya, aktifkan!",
			cancelButtonText: "Tidak, batal!",
			closeOnConfirm: false,
			closeOnCancel: false
		}).then(function(result) {
			if (result.value) {
				$.ajax({
					type: "post",
					url: "<?php echo site_url("ppdb/settings/bank/activate_bank_account") ?>",
					data: {
						id: id,
						[csrfName]: csrfHash
					},
					dataType: 'html',
					success: function(result) {
						Swal.fire("Teraktifkan!", "Alat Bayar '" + name + "' telah diaktifkan.", "success");
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
				Swal.fire("Dibatalkan!", "Alat Bayar " + name + " batal diaktifkan.", "error");
			}
		});
	}
</script>
<script>
	function act_disable_bank_account(id, name) {
		var csrfName = $('.txt_csrfname').attr('name');
		var csrfHash = $('.txt_csrfname').val(); // CSRF hash

		Swal.fire({
			title: "Peringatan!",
			text: "Apakah anda yakin ingin mengnonaktifkan Alat Bayar " + name + "?",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Ya, nonaktifkan!",
			cancelButtonText: "Tidak, batal!",
			closeOnConfirm: false,
			closeOnCancel: false
		}).then(function(result) {
			if (result.value) {
				$.ajax({
					type: "post",
					url: "<?php echo site_url("ppdb/settings/bank/disable_bank_account") ?>",
					data: {
						id: id,
						[csrfName]: csrfHash
					},
					dataType: 'html',
					success: function(result) {
						Swal.fire("Teraktifkan!", "Alat Bayar '" + name + "' telah dinonaktifkan.", "success");
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
				Swal.fire("Dibatalkan!", "Alat Bayar " + name + " batal dinonaktifkan.", "error");
			}
		});
	}
</script>
