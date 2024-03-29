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
					<h2 class="text-white font-weight-bold my-2 mr-5">Upload Berkas</h2>
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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Detail Berkas</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Detail Berkas Formulir</a>
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
			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="card card-custom mb-10">
						<div class="card-body">
							<div class="d-flex">
								<!--begin::Pic-->
								<div class="flex-shrink-0 mr-0">
									<?php if ($student[0]->foto_siswa == NULL or $student[0]->foto_siswa == "") { ?>
										<div class="symbol symbol-50 symbol-lg-100 symbol-light-danger">
											<span class="font-size-h2 symbol-label font-weight-boldest"><?php echo strtoupper(substr($student[0]->nama_lengkap, 0, 2)); ?></span>
										</div>
									<?php } else { ?>
										<div class="symbol symbol-50 symbol-lg-100">
											<img alt="Pic" src="<?php echo base_url() . $student[0]->foto_siswa ?>">
										</div>
									<?php } ?>
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
												<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3"><?php echo strtoupper($student[0]->nama_lengkap); ?></a>
												<!--end::Name-->
												<span class="label label-light-success label-inline font-weight-bolder mr-1"><?php echo strtoupper($student[0]->nama_panggilan); ?></span>

											</div>
											<!--begin::Contacts-->
											<div class="d-flex flex-wrap my-2">
												<a href="#" class="text-primary text-hover-primary font-weight-bold mr-lg-2 mr-3 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-primary mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
																<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span><?php echo ($student[0]->email); ?></a>
												<a href="#" class="text-success text-hover-primary font-weight-bold mr-lg-2 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-success mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M21,5.5 L21,17.5 C21,18.3284271 20.3284271,19 19.5,19 L4.5,19 C3.67157288,19 3,18.3284271 3,17.5 L3,14.5 C3,13.6715729 3.67157288,13 4.5,13 L9,13 L9,9.5 C9,8.67157288 9.67157288,8 10.5,8 L15,8 L15,5.5 C15,4.67157288 15.6715729,4 16.5,4 L19.5,4 C20.3284271,4 21,4.67157288 21,5.5 Z" fill="#000000" fill-rule="nonzero" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<?php
													if ($student[0]->level_tingkat == 1) {
														echo 'KB';
													} else if ($student[0]->level_tingkat == 2) {
														echo 'TK';
													} else if ($student[0]->level_tingkat == 3) {
														echo 'SD';
													} else if ($student[0]->level_tingkat == 4) {
														echo 'SMP';
													} else if ($student[0]->level_tingkat == 5) {
														echo 'KB-TK';
													} else if ($student[0]->level_tingkat == 6) {
														echo 'DC';
													}
													?>
												</a>
												<a href="#" class="text-success text-hover-primary font-weight-bold mr-lg-2 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-success mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
																<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
													<?php
													if ($student[0]->jalur == 1) {
														echo 'REGULER';
													} else if ($student[0]->jalur == 2) {
														echo 'ICP';
													}
													?>
												</a>
												<a href="#" class="text-success text-hover-primary font-weight-bold mr-lg-2 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-success mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24" />
																<path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000" />
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
											<?php echo ucwords(strtolower($student[0]->alamat_rumah_dom)); ?>
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

				<div class="col-lg-6 col-md-8 col-sm-12">
					<div class="card card-custom mb-10">
						<div class="card-body py-4 mt-4 mb-3">
							<h3 class="card-label text-dark font-weight-bolder text-center">STATUS PENGISIAN</h3>
							<div class="d-flex flex-lg-grow-1 justify-content-lg-center mt-5 text-center">

								<?php if ($student[0]->status_formulir == 0) { ?>
									<p class="font-weight-boldest display-2 mb-1 text-warning">
										BELUM MENGISI
									</p>
								<?php } else if ($student[0]->status_formulir == 1) { ?>
									<p class="font-weight-boldest display-2 mb-1 text-success">
										SUDAH MENGISI
									</p>
								<?php } ?>
							</div>

						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<!--begin::Card-->
					<div class="card card-custom mb-10">
						<!--begin::Header-->
						<div class="card-header h-auto py-4">
							<div class="card-title">
								<h3 class="card-label text-primary">Biodata Siswa
									<span class="d-block text-muted pt-2 font-size-sm">Detail Data Diri Siswa</span>
								</h3>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-4">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 ">
									<div class="font-size-h6 font-weight-bold text-danger mb-5">Personal Siswa</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">NISN:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"> <?php echo ($student[0]->nisn); ?></span>
										</div>
									</div>

									<div class="form-group row my-2">
										<label class="col-4 col-form-label">NIK:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->nik); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">No. Akta Kelahiran:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->no_akta_kelahiran); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Nama Lengkap Siswa:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo strtoupper($student[0]->nama_lengkap); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Nama Panggilan:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo strtoupper($student[0]->nama_panggilan); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tempat Lahir:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo strtoupper($student[0]->tempat_lahir); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tanggal Lahir:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->tanggal_lahir); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Jenis Kelamin:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->jenis_kelamin == 1) {
													echo 'Laki-Laki';
												} else if ($student[0]->jenis_kelamin == 2) {
													echo 'Perempuan';
												}
												?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Agama:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->agama == 1) {
													echo 'Islam';
												} else if ($student[0]->agama == 2) {
													echo 'Kristen';
												} else if ($student[0]->agama == 3) {
													echo 'Hindu';
												} else if ($student[0]->agama == 4) {
													echo 'Budha';
												} else if ($student[0]->agama == 5) {
													echo 'Lainnya';
												}
												?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tahun Ajaran:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->tahun_ajaran); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">RomBel:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->rombel); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Berkas Siswa:</label>
										<?php if ($student[0]->kartu_keluarga != "" || $student[0]->kartu_keluarga != NULL) { ?>
											<div class="col-3">
												<button class="btn btn-sm btn-primary px-2 py-2 my-3 mx-2" data-toggle="modal" data-target="#modal_kk">Kartu Keluarga</button>
											</div>
											<div class="col-5">
												<button class="btn btn-sm btn-primary px-2 py-2 my-3 mx-2" data-toggle="modal" data-target="#modal_akta">Akta Kelahiran</button>
											</div>
										<?php } ?>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="font-size-h6 font-weight-bold text-danger mb-5">Data Periodik Siswa</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Alat Transportasi:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"> <?php echo strtoupper($student[0]->alat_transportasi); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Jenis Tempat Tinggal:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->jenis_tinggal == 1) {
													echo 'Bersama Orangtua';
												} else if ($student[0]->jenis_tinggal == 2) {
													echo 'Asrama';
												} else if ($student[0]->jenis_tinggal == 3) {
													echo 'Kos';
												} else if ($student[0]->jenis_tinggal == 4) {
													echo 'Bersama Nenek/Kakek';
												} else if ($student[0]->jenis_tinggal == 5) {
													echo 'Bersama Wali';
												} else if ($student[0]->jenis_tinggal == 6) {
													echo 'Lainnya';
												}
												?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Jarak Rumah ke Sekolah:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->jarak_rumah_sekolah); ?> Km
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Jumlah Saudara:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->jumlah_saudara); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Anak Ke-:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->anak_ke); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Berkebutuhan Khusus:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->kebutuhan_khusus == 1) {
													echo 'IYA';
												} else if ($student[0]->kebutuhan_khusus == 0) {
													echo 'TIDAK';
												}
												?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tinggi Badan:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->tinggi_badan); ?> Cm
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Berat Badan:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->berat_badan); ?> Kg
											</span>
										</div>
									</div>

									<div class="font-size-h7 font-weight-bold text-danger mb-3 mt-4">NIS & Nama Saudara Bersekolah disini</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">NIS Saudara:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->nis_saudara); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Nama Saudara:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo strtoupper($student[0]->nama_saudara); ?>
											</span>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!--end::Body-->

					</div>
					<!--end::Card-->
				</div>
				<div class="col-xl-12">

					<!--begin::Card-->
					<div class="card card-custom mb-10">
						<!--begin::Header-->
						<div class="card-header h-auto py-4">
							<div class="card-title">
								<h3 class="card-label text-primary">Biodata Orang Tua
									<span class="d-block text-muted pt-2 font-size-sm">Detail Data Orangtua Siswa</span>
								</h3>
							</div>

						</div>
						<!--end::Header-->

						<!--begin::Body-->
						<div class="card-body py-4">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="font-size-h6 font-weight-bold text-danger mb-5">Biodata Ayah</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Nama Lengkap Ayah:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->nama_ayah); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">NIK KTP:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nik_ayah); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tempat Lahir Ayah:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->tempat_lahir_ayah); ?> </span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tanggal Lahir Ayah:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->tanggal_lahir_ayah); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Pekerjaan Ayah:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo strtoupper($student[0]->pekerjaan_ayah); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Pendidikan Ayah:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->pendidikan_ayah == 1) {
													echo 'Tidak Sekolah';
												} else if ($student[0]->pendidikan_ayah == 2) {
													echo 'SD';
												} else if ($student[0]->pendidikan_ayah == 3) {
													echo 'SMP';
												} else if ($student[0]->pendidikan_ayah == 4) {
													echo 'SMA';
												} else if ($student[0]->pendidikan_ayah == 5) {
													echo 'D-I/D-II';
												} else if ($student[0]->pendidikan_ayah == 6) {
													echo 'D-III';
												} else if ($student[0]->pendidikan_ayah == 7) {
													echo 'D-IV/S1';
												} else if ($student[0]->pendidikan_ayah == 8) {
													echo 'S2/S3';
												}
												?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Penghasilan Ayah:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->penghasilan_ayah == 1) {
													echo 'Kurang dari Rp. 1.500.000';
												} else if ($student[0]->penghasilan_ayah == 2) {
													echo 'Rp. 1.500.000 - Rp. 2.500.000';
												} else if ($student[0]->penghasilan_ayah == 3) {
													echo 'Rp. 2.500.000 - RP. 3.500.000';
												} else if ($student[0]->penghasilan_ayah == 4) {
													echo 'Rp. 3.500.000 - Rp. 4.500.000';
												} else if ($student[0]->penghasilan_ayah == 5) {
													echo 'Rp. 4.500.000 - Rp. 5.500.000';
												} else if ($student[0]->penghasilan_ayah == 6) {
													echo 'Lebih dari Rp. 5.500.000';
												}
												?>
											</span>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="font-size-h6 font-weight-bold text-danger mb-5">Biodata Ibu</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Nama Lengkap Ibu:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->nama_ibu); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">NIK KTP:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nik_ibu); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tempat Lahir Ibu:</label>
										<div class="col-8">
											<span class="form-control-plaintext">
												<span class="font-weight-bolder"><?php echo strtoupper($student[0]->tempat_lahir_ibu); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tanggal Lahir Ibu:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->tanggal_lahir_ibu); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Pekerjaan Ibu:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo strtoupper($student[0]->pekerjaan_ibu); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Pendidikan Ibu:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->pendidikan_ibu == 1) {
													echo 'Tidak Sekolah';
												} else if ($student[0]->pendidikan_ibu == 2) {
													echo 'SD';
												} else if ($student[0]->pendidikan_ibu == 3) {
													echo 'SMP';
												} else if ($student[0]->pendidikan_ibu == 4) {
													echo 'SMA';
												} else if ($student[0]->pendidikan_ibu == 5) {
													echo 'D-I/D-II';
												} else if ($student[0]->pendidikan_ibu == 6) {
													echo 'D-III';
												} else if ($student[0]->pendidikan_ibu == 7) {
													echo 'D-IV/S1';
												} else if ($student[0]->pendidikan_ibu == 8) {
													echo 'S2/S3';
												}
												?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Penghasilan Ibu:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->penghasilan_ibu == 1) {
													echo 'Kurang dari Rp. 1.500.000';
												} else if ($student[0]->penghasilan_ibu == 2) {
													echo 'Rp. 1.500.000 - Rp. 2.500.000';
												} else if ($student[0]->penghasilan_ibu == 3) {
													echo 'Rp. 2.500.000 - RP. 3.500.000';
												} else if ($student[0]->penghasilan_ibu == 4) {
													echo 'Rp. 3.500.000 - Rp. 4.500.000';
												} else if ($student[0]->penghasilan_ibu == 5) {
													echo 'Rp. 4.500.000 - Rp. 5.500.000';
												} else if ($student[0]->penghasilan_ibu == 6) {
													echo 'Lebih dari Rp. 5.500.000';
												}
												?>
											</span>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="font-size-h6 font-weight-bold text-danger mb-5">Biodata Wali</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Nama Lengkap Wali:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->nama_wali); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">NIK KTP:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nik_wali); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tempat Lahir Wali:</label>
										<div class="col-8">
											<span class="form-control-plaintext">
												<span class="font-weight-bolder"><?php echo strtoupper($student[0]->tempat_lahir_wali); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Tanggal Lahir Wali:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->tanggal_lahir_wali); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Pekerjaan Wali:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo strtoupper($student[0]->pekerjaan_wali); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Pendidikan Wali:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->pendidikan_wali == 1) {
													echo 'Tidak Sekolah';
												} else if ($student[0]->pendidikan_wali == 2) {
													echo 'SD';
												} else if ($student[0]->pendidikan_wali == 3) {
													echo 'SMP';
												} else if ($student[0]->pendidikan_wali == 4) {
													echo 'SMA';
												} else if ($student[0]->pendidikan_wali == 5) {
													echo 'D-I/D-II';
												} else if ($student[0]->pendidikan_wali == 6) {
													echo 'D-III';
												} else if ($student[0]->pendidikan_wali == 7) {
													echo 'D-IV/S1';
												} else if ($student[0]->pendidikan_wali == 8) {
													echo 'S2/S3';
												}
												?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Penghasilan Wali:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php
												if ($student[0]->penghasilan_wali == 1) {
													echo 'Kurang dari Rp. 1.500.000';
												} else if ($student[0]->penghasilan_wali == 2) {
													echo 'Rp. 1.500.000 - Rp. 2.500.000';
												} else if ($student[0]->penghasilan_wali == 3) {
													echo 'Rp. 2.500.000 - RP. 3.500.000';
												} else if ($student[0]->penghasilan_wali == 4) {
													echo 'Rp. 3.500.000 - Rp. 4.500.000';
												} else if ($student[0]->penghasilan_wali == 5) {
													echo 'Rp. 4.500.000 - Rp. 5.500.000';
												} else if ($student[0]->penghasilan_wali == 6) {
													echo 'Lebih dari Rp. 5.500.000';
												}
												?>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Body-->

					</div>
					<!--end::Card-->
				</div>
				<div class="col-xl-12">

					<!--begin::Card-->
					<div class="card card-custom mb-10">
						<!--begin::Header-->
						<div class="card-header h-auto py-4">
							<div class="card-title">
								<h3 class="card-label text-primary">Data Alamat Siswa
									<span class="d-block text-muted pt-2 font-size-sm">Detail Data Alamat Siswa</span>
								</h3>
							</div>

						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-4">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 ">
									<div class="font-size-h6 font-weight-bold text-danger mb-5">Alamat Kartu Keluarga</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Alamat KK Lengkap:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ucwords(strtolower($student[0]->alamat_rumah_kk)); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Provinsi KK:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_provinsi_kk); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Kabupaten/Kota KK:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->nama_kabupaten_kota_kk); ?> - <?php echo strtoupper($student[0]->nama_kabupaten_kota_kk_adm); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Kecamatan KK:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_kecamatan_kk); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Kelurahan/Desa KK:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->nama_kelurahan_desa_kk); ?> - <?php echo strtoupper($student[0]->nama_kelurahan_desa_kk_adm); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">RT KK:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->rt_kk); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">RW KK:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->rw_kk); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Kodepos KK:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->kodepos_kk); ?>
											</span>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 ">
									<div class="font-size-h6 font-weight-bold text-danger mb-5">Alamat Domisili Sekarang</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Alamat Domisili Lengkap:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ucwords(strtolower($student[0]->alamat_rumah_dom)); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Provinsi Domisili:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_provinsi_dom); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Kabupaten/Kota Domisili:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->nama_kabupaten_kota_dom); ?> - <?php echo strtoupper($student[0]->nama_kabupaten_kota_dom_adm); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Kecamatan Domisili:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_kecamatan_dom); ?></span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Kelurahan/Desa Domisili:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->nama_kelurahan_desa_dom); ?> - <?php echo strtoupper($student[0]->nama_kelurahan_desa_dom_adm); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">RT Domisili:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->rt_dom); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">RW Domisili:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->rw_dom); ?>
											</span>
										</div>
									</div>
									<div class="form-group row my-2">
										<label class="col-4 col-form-label">Kodepos Domisili:</label>
										<div class="col-8">
											<span class="form-control-plaintext font-weight-bolder">
												<?php echo ($student[0]->kodepos_dom); ?>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--end::Body-->

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
<div class="modal fade" id="modal_kk" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Berkas Kartu Keluarga "<?php echo strtoupper($student[0]->nama_lengkap); ?>"</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body text-center">
				<div class="text-center">
					<img alt="Pic" class="col-12" src="<?php echo base_url() . $student[0]->kartu_keluarga ?>">
					<a href="<?php echo base_url() . $student[0]->kartu_keluarga ?>" class="btn btn-success btn-sm py-3 px-4 mt-3" download><i class="fas fa-download"></i> Download</a>
				</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modal_akta" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Berkas Akta Kelahiran "<?php echo strtoupper($student[0]->nama_lengkap); ?>"</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body text-center">
				<div class="text-center">
					<img alt="Pic" class="col-12" src="<?php echo base_url() . $student[0]->akta_kelahiran ?>">
					<a href="<?php echo base_url() . $student[0]->akta_kelahiran ?>" class="btn btn-success btn-sm py-3 px-4 mt-3" download><i class="fas fa-download"></i> Download</a>
				</div>
			</div>
			<div class="modal-footer">
				<button type="reset" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Tutup</button>
			</div>
		</div>
	</div>
</div>
<script>
	var url = "<?php echo site_url('ppdb/admission/add_ajax_class/' . $student[0]->level_tingkat); ?>";
	$('#kelas').load(url);
</script>
