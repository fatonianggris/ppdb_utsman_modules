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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Alat Pembayaran</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Edit Alat Pembayaran</a>
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
				<div class="col-lg-12" id="kt_form">
					<!--begin::Card-->
					<div class="card card-custom">
						<div class="card-header">
							<h3 class="card-title">
								Edit Rekening/Alat Bayar Pembayaran
							</h3>
						</div>
						<!--begin::Form-->
						<form class="form" novalidate="novalidate" action="<?php echo site_url('ppdb/settings/bank/update_bank_account/' . paramEncrypt($bank_account[0]->id_alat_bayar)); ?>" enctype="multipart/form-data" method="post" id="kt_add_account_bank_form">
							<input type="hidden" class="txt_csrfname" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-2">
										<div class="form-group">
											<label>Tipe Alat Bayar</label>
											<select name="tipe_alatbayar" class="form-control form-control-lg">
												<option value="<?php echo $bank_account[0]->tipe_alatbayar; ?>" selected="">
													<?php
													if ($bank_account[0]->tipe_alatbayar == 1) {
														echo 'Bank';
													} else if ($bank_account[0]->tipe_alatbayar == 2) {
														echo 'E-Wallet';
													}
													?>
												</option>
												<option value="1">Bank</option>
												<option value="2">E-Wallet</option>
											</select>
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>pilih Tipe Alat Bayar</span>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label>Nama Jasa Alat Bayar</label>
											<input type="text" name="nama_alatbayar" value="<?php echo $bank_account[0]->nama_alatbayar; ?>" class="form-control form-control-lg" placeholder="Isikan Nama Jasa Alat Bayar" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nama Jasa Alat Bayar</span>
										</div>
									</div>

									<div class="col-lg-3">
										<div class="form-group">
											<label>Atas Nama Pemilik Akun</label>
											<input type="text" name="atas_nama" value="<?php echo $bank_account[0]->atas_nama; ?>" class="form-control  form-control-lg" placeholder="Isikan Atas Nama Pemilik" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Atas Nama Pemilik</span>
										</div>
									</div>
									<div class="col-lg-3">
										<div class="form-group">
											<label>Nomor Rekening/Alat Bayar</label>
											<input type="text" name="nomor_alatbayar" value="<?php echo $bank_account[0]->nomor_alatbayar; ?>" class="form-control  form-control-lg" placeholder="Isikan Nomor Alat Bayar" />
											<span class="form-text text-dark"><b class="text-danger">*WAJIB DIISI, </b>isikan Nomor Alat Bayar</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label>Upload Logo Jasa Alat Bayar</label>
											<input type="text" name="logo_temp" value="<?php echo $bank_account[0]->logo_instansi ?>" style="display:none" />
											<input type="text" name="logo_temp_thumb" value="<?php echo $bank_account[0]->logo_instansi_thumb; ?>" style="display:none" />
											<input type="file" class="dropify" name="logo_instansi" data-default-file="<?php echo base_url() . $bank_account[0]->logo_instansi_thumb; ?>" data-max-file-size="1M" data-height="200" data-allowed-file-extensions="png jpg jpeg" />
											<span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>berformat jpg, png, jpeg, dan berukuran dibawah 1Mb (logo diutamakan resolusi 150*50 pixel).</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 form-group">
										<div class="accordion accordion-solid accordion-toggle-arrow" id="accordionExample3">
											<div class="card">
												<div class="card-header" id="headingOne3">
													<div class="card-title" data-toggle="collapse" data-target="#collapseOne3">
														<i class="flaticon2-notification"></i> Tambahan Catatan Transfer
													</div>
												</div>
												<div id="collapseOne3" class="collapse" data-parent="#accordionExample3">
													<div class="card-body">
														<textarea name="catatan_transfer" id="kt-ckeditor-1"><?php echo $bank_account[0]->catatan_transfer; ?></textarea>
														<span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b>Contoh: 1. Pembayaran ditunggu paling lambat 24 jam setelah pemesanan Anda. Lebih dari itu, pesanan Anda otomatis akan dibatalkan oleh sistem.<br>
															&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 2. Apabila ada gangguan teknis pembayaran, Anda dapat langsung menghubungi customer service Dekoruma.com melalui telepon di (021) 5332433.</span>
													</div>
												</div>
											</div>

										</div>
										<div class="accordion accordion-solid accordion-toggle-arrow mt-5" id="accordionExample2">
											<div class="card">
												<div class="card-header" id="headingOne2">
													<div class="card-title" data-toggle="collapse" data-target="#collapseOne2">
														<i class="flaticon-chat"></i> Tambahan Petunjuk Cara Transfer
													</div>
												</div>
												<div id="collapseOne2" class="collapse " data-parent="#accordionExample2">
													<div class="card-body">
														<textarea name="petunjuk_transfer" id="kt-ckeditor-2"><?php echo $bank_account[0]->petunjuk_transfer; ?></textarea>
														<span class="form-text text-dark"><b class="text-dark">*TIDAK WAJIB DIISI, </b> Contoh: 1. Masukkan kartu ATM kemudian masukkan nomor PIN Anda<br>
															&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; 2. Pilih "Transaksi lainnya", kemudian pilih "Transfer"<br>
															&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; 3. Silahkan masukkan no. BCA Virtual Account (74102000XXXXXXXX), lalu tekan "Benar"<br>
															&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; 4. Periksa kembali data transaksi kemudian tekan "Benar"<br>
															&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; 5. Simpan struk Anda sebagai bukti pembayaran. Penjual akan menerima notifikasi pembayaran."</span>
													</div>
												</div>
											</div>

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
<script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/pages/custom/login/add-bank-ppdb.js"></script>
