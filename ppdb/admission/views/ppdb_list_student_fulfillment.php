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
					<h2 class="text-white font-weight-bold my-2 mr-5">Pengisian</h2>
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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Daftar Pengisian Formulir</a>
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
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_fulfill[0]->sudah_mengisi; ?></div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Sudah Mengisi</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>

				<!--end::Stats Widget 25-->
				<div class="col-xl-2  col-6">
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
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_fulfill[0]->belum_mengisi; ?></div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Belum Mengisi</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--end::Stats Widget 26-->
				<!--end::Stats Widget 25-->
				<div class="col-xl-2  col-6">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-primary gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_fulfill[0]->kb; ?></div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang KB</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--end::Stats Widget 26-->
				<!--end::Stats Widget 25-->
				<div class="col-xl-2 col-6">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-primary gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_fulfill[0]->tk; ?></div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang TK</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--end::Stats Widget 26-->
				<!--end::Stats Widget 25-->
				<div class="col-xl-2 col-6">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-primary gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_fulfill[0]->sd; ?></div>
							<a href="#" class="text-inverse-primary font-weight-bold font-size-lg mt-1 text-white">Jenjang SD</a>
						</div>
					</div>
					<!--end::Tiles Widget 11-->
				</div>
				<!--end::Stats Widget 26-->
				<!--end::Stats Widget 25-->
				<div class="col-xl-2 col-6">
					<!--begin::Stats Widget 26-->
					<div class="card card-custom bg-primary gutter-b">
						<div class="card-body">
							<span class="svg-icon svg-icon-3x svg-icon-white ml-n2">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>
							<div class="text-inverse-primary font-weight-bolder font-size-h2 mt-3 text-white"><?php echo $insight_fulfill[0]->smp; ?></div>
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
											<div class="col-lg-3 my-2 my-md-0">
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
													<select class="form-control" id="kt_datatable_search_fulfill">
														<option value="">Status Pengisian</option>
														<option value="0">Belum Mengisi</option>
														<option value="1">Sudah Mengisi</option>
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
																if ($value_sch->tahun_awal == (date("Y"))) {
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
							<table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable_formulir">
								<thead>
									<tr>
										<th title="No Formulir">No Formulir</th>
										<th title="Nama Calon">Nama Calon</th>
										<th title="JK">JK</th>
										<th title="Jenjang">Jenjang</th>
										<th title="Program">Program</th>
										<th title="Pengisian">Pengisian</th>
										<th title="No Whatsapp">No Whatsapp</th>
										<th title="TA">TA</th>
										<th title="Tanggal">Tanggal</th>
										<th title="Aksi">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!empty($formulir)) {
										foreach ($formulir as $key => $value) {
									?>
											<tr>
												<td><b><?php echo $value->nomor_formulir; ?></b></td>
												<td><?php echo strtoupper($value->nama_lengkap); ?></td>
												<td><?php echo $value->jenis_kelamin; ?></td>
												<td><?php echo $value->level_tingkat; ?></td>
												<td><?php echo $value->jalur; ?></td>
												<td>
													<?php echo $value->status_formulir ?>
												</td>
												<td><?php echo $value->nomor_handphone; ?></td>
												<td>
													<?php echo $value->tahun_ajaran; ?>
												</td>
												<td><?php echo $value->tanggal_isi; ?></td>
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
																	<a href="<?php echo site_url("/ppdb/admission/detail_student_fulfillment/" . paramEncrypt($value->id_formulir)); ?>" class="navi-link">
																		<span class="navi-icon"><i class="la la-search text-success"></i></span>
																		<span class="navi-text">Lihat Detail</span>
																	</a>
																</li>
																<?php if ($value->status_formulir == 0) { ?>
																	<li class="navi-item">
																		<?php
																		$program = '';
																		$jenjang = '';
																		if ($value->jalur == 1) {
																			$program = 'REGULER';
																		} else if ($value->jalur == 2) {
																			$program = 'ICP';
																		}

																		if ($value->level_tingkat == 1) {
																			$jenjang = 'KB';
																		} else if ($value->level_tingkat == 2) {
																			$jenjang = 'TK';
																		} else if ($value->level_tingkat == 3) {
																			$jenjang = 'SD';
																		} else if ($value->level_tingkat == 4) {
																			$jenjang = 'SMP';
																		} else if ($value->level_tingkat == 5) {
																			$jenjang = 'KB-TK';
																		} else if ($value->level_tingkat == 6) {
																			$jenjang = 'DC';
																		}
																		?>
																		<a href="https://web.whatsapp.com/send?phone=62<?php echo substr($value->nomor_handphone, 1); ?>&text=*_Assalamualaikum Wr. Wb._*
                                                                        <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>*--PENGISIAN FORMULIR SEKOLAH UTSMAN--*
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>_Pengisian Formulir PPDB belum Anda proses:_
                                                                           <?php echo urlencode("\n") ?>- No. Formulir: *<?php echo $value->nomor_formulir; ?>*
                                                                           <?php echo urlencode("\n") ?>- Nama: *<?php echo ucwords(strtolower($value->nama_lengkap)); ?>*
                                                                           <?php echo urlencode("\n") ?>- Jenjang: *<?php echo $jenjang; ?>*
                                                                           <?php echo urlencode("\n") ?>- Program: *<?php echo $program; ?>*
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>_Silahkan cek email anda untuk melihat_ *NOMOR FORMULIR* _dan_ *PASSWORD* _yang telah Kami kirimkan:_
                                                                           <?php echo urlencode("\n") ?>                                                                          
                                                                           <?php echo urlencode("\n") ?>```Mohon segera melakukan``` *PENGISIAN FORMULIR* ```dengan kilk``` *LINK* ```dibawah ini:```
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>*<?php echo site_url('ppdb/register/login_formulir'); ?>*
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>```Atas perhatian Bapak/Ibu kami ucapkan terima kasih.```
                                                                           <?php echo urlencode("\n") ?>
                                                                           <?php echo urlencode("\n") ?>_*Admin PPDB Sekolah Utsman*_" target="_blank" class="navi-link">
																			<span class="navi-icon"><i class="la la-mobile-phone text-primary"></i></span>
																			<span class="navi-text">Kirim WA</span>
																		</a>
																	</li>
																<?php } ?>
																<li class="navi-item">
																	<a href="javascript:act_delete_formulir('<?php echo paramEncrypt($value->id_formulir); ?>', '<?php echo strtoupper($value->nama_lengkap); ?>')" class="navi-link">
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
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/crud/ktdatatable/base/html-table-formulir.js">
</script>

<script>
	function act_delete_formulir(id, name) {
		var csrfName = $('.txt_csrfname').attr('name');
		var csrfHash = $('.txt_csrfname').val(); // CSRF hash

		Swal.fire({
			title: "Peringatan!",
			text: "Apakah anda yakin ingin menghapus Formulir atas nama " + name + "?",
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
					url: "<?php echo site_url("/ppdb/admission/delete_student_formulir") ?>",
					data: {
						id: id,
						[csrfName]: csrfHash
					},
					dataType: 'html',
					success: function(result) {
						Swal.fire("Terhapus!", "Formulir atas nama '" + name + "' telah terhapus.", "success");
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
				Swal.fire("Dibatalkan!", "Formulir atas nama " + name + " batal dihapus.", "error");
			}
		});
	}
</script>
