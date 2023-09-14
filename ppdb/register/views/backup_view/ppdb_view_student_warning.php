<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $title; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="<?php echo base_url(); ?>" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/pages/login/classic/login-2.css" rel="stylesheet"
        type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
        type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/prismjs/prismjs.bundle.css"
        rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/css/style.bundle.css" rel="stylesheet"
        type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ppdb/dist/assets/media/logos/favicon.ico" />
    <link href="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.css"
        rel="stylesheet" type="text/css" />

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
            <div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
                style="background-image: url('<?php echo base_url(); ?>assets/ppdb/dist/assets/media/bg/bg-3.jpg');">
                <div class="login-form text-center p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-5">
                        <a href="#">
                            <img src="<?php echo base_url() . $page[0]->logo_website; ?>" class="max-h-105px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-10 ">
                            <p class="font-mobile font-weight-boldest text-warning ">MOHON MAAF,PENERIMAAN MASIH DALAM PROSES!</p>
                            <div class="font-weight-bold text-danger font-size-lg">Pengumuman penerimaan siswa masih dalam
                                proses <b>OBERVASI</b>. Mohon menunggu, Kami akan informasikan segera, Terima kasih.</div>
                        </div>
                        <div class="col-xl-12 text-left">
                            <!--begin::Card-->
                            <div class="card card-custom mb-10">
                                <!--begin::Header-->
                                <div class="card-header h-auto py-4">
                                    <div class="card-title">
                                        <h3 class="card-label text-primary">Biodata Siswa
                                            <span class="d-block text-muted pt-2 font-size-sm">Detail Data Diri
                                                Siswa</span>
                                        </h3>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                                            <div class="font-size-h6 font-weight-bold text-danger mb-5">Personal Siswa
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">NISN:</label>
                                                <div class="col-8">
                                                    <span class="form-control-plaintext font-weight-bolder">
                                                        <?php echo ($student[0]->nisn); ?></span>
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
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->no_akta_kelahiran); ?></span>
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
                                                <div class="col-3">
                                                    <button class="btn btn-sm btn-primary px-2 py-2 my-3 mx-2"
                                                        data-toggle="modal" data-target="#modal_kk">Kartu
                                                        Keluarga</button>
                                                </div>
                                                <div class="col-5">
                                                    <button class="btn btn-sm btn-primary px-2 py-2 my-3 mx-2"
                                                        data-toggle="modal" data-target="#modal_akta">Akta
                                                        Kelahiran</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="font-size-h6 font-weight-bold text-danger mb-5">Data Periodik
                                                Siswa</div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Alat Transportasi:</label>
                                                <div class="col-8">
                                                    <span class="form-control-plaintext font-weight-bolder">
                                                        <?php echo strtoupper($student[0]->alat_transportasi); ?></span>
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

                                            <div class="font-size-h7 font-weight-bold text-danger mb-3 mt-4">NIS & Nama
                                                Saudara Bersekolah disini</div>
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
                        <div class="col-xl-12 text-left">

                            <!--begin::Card-->
                            <div class="card card-custom mb-10">
                                <!--begin::Header-->
                                <div class="card-header h-auto py-4">
                                    <div class="card-title">
                                        <h3 class="card-label text-primary">Biodata Orang Tua
                                            <span class="d-block text-muted pt-2 font-size-sm">Detail Data Orangtua
                                                Siswa</span>
                                        </h3>
                                    </div>

                                </div>
                                <!--end::Header-->

                                <!--begin::Body-->
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="font-size-h6 font-weight-bold text-danger mb-5">Biodata Ayah
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Nama Lengkap Ayah:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->nama_ayah); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">NIK KTP:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nik_ayah); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Tempat Lahir Ayah:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->tempat_lahir_ayah); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Tanggal Lahir Ayah:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->tanggal_lahir_ayah); ?></span>
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
                                            <div class="font-size-h6 font-weight-bold text-danger mb-5">Biodata Ibu
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Nama Lengkap Ibu:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->nama_ibu); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">NIK KTP:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nik_ibu); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Tempat Lahir Ibu:</label>
                                                <div class="col-8">
                                                    <span class="form-control-plaintext">
                                                        <span
                                                            class="font-weight-bolder"><?php echo strtoupper($student[0]->tempat_lahir_ibu); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Tanggal Lahir Ibu:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->tanggal_lahir_ibu); ?></span>
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
                                            <div class="font-size-h6 font-weight-bold text-danger mb-5">Biodata Wali
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Nama Lengkap Wali:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo strtoupper($student[0]->nama_wali); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">NIK KTP:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nik_wali); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Tempat Lahir Wali:</label>
                                                <div class="col-8">
                                                    <span class="form-control-plaintext">
                                                        <span
                                                            class="font-weight-bolder"><?php echo strtoupper($student[0]->tempat_lahir_wali); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Tanggal Lahir Wali:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->tanggal_lahir_wali); ?></span>
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
                        <div class="col-xl-12 text-left">

                            <!--begin::Card-->
                            <div class="card card-custom mb-10">
                                <!--begin::Header-->
                                <div class="card-header h-auto py-4">
                                    <div class="card-title">
                                        <h3 class="card-label text-primary">Data Alamat Siswa
                                            <span class="d-block text-muted pt-2 font-size-sm">Detail Data Alamat
                                                Siswa</span>
                                        </h3>
                                    </div>

                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-4">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 ">
                                            <div class="font-size-h6 font-weight-bold text-danger mb-5">Alamat Kartu
                                                Keluarga</div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Alamat KK Lengkap:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ucwords(strtolower($student[0]->alamat_rumah_kk)); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Provinsi KK:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_provinsi_kk); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Kabupaten/Kota KK:</label>
                                                <div class="col-8">
                                                    <span class="form-control-plaintext font-weight-bolder">
                                                        <?php echo ($student[0]->nama_kabupaten_kota_kk); ?> -
                                                        <?php echo strtoupper($student[0]->nama_kabupaten_kota_kk_adm); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Kecamatan KK:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_kecamatan_kk); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Kelurahan/Desa KK:</label>
                                                <div class="col-8">
                                                    <span class="form-control-plaintext font-weight-bolder">
                                                        <?php echo ($student[0]->nama_kelurahan_desa_kk); ?> -
                                                        <?php echo strtoupper($student[0]->nama_kelurahan_desa_kk_adm); ?>
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
                                            <div class="font-size-h6 font-weight-bold text-danger mb-5">Alamat Domisili
                                                Sekarang</div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Alamat Domisili Lengkap:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ucwords(strtolower($student[0]->alamat_rumah_dom)); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Provinsi Domisili:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_provinsi_dom); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Kabupaten/Kota Domisili:</label>
                                                <div class="col-8">
                                                    <span class="form-control-plaintext font-weight-bolder">
                                                        <?php echo ($student[0]->nama_kabupaten_kota_dom); ?> -
                                                        <?php echo strtoupper($student[0]->nama_kabupaten_kota_dom_adm); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Kecamatan Domisili:</label>
                                                <div class="col-8">
                                                    <span
                                                        class="form-control-plaintext font-weight-bolder"><?php echo ($student[0]->nama_kecamatan_dom); ?></span>
                                                </div>
                                            </div>
                                            <div class="form-group row my-2">
                                                <label class="col-4 col-form-label">Kelurahan/Desa Domisili:</label>
                                                <div class="col-8">
                                                    <span class="form-control-plaintext font-weight-bolder">
                                                        <?php echo ($student[0]->nama_kelurahan_desa_dom); ?> -
                                                        <?php echo strtoupper($student[0]->nama_kelurahan_desa_dom_adm); ?>
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
                        <a href="<?php echo site_url("ppdb/register/logout_announcement"); ?>"
                            class="btn btn-warning font-weight-bold px-9 py-4 my-3 mx-4 mt-8 mt-10">Keluar</a>

                    </div>
                    <!--end::Login Sign in form-->

                </div>
            </div>
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <div class="modal fade" id="modal_kk" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berkas Kartu Keluarga
                        "<?php echo strtoupper($student[0]->nama_lengkap); ?>"</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="text-center">
                        <img alt="Pic" class="col-12" src="<?php echo base_url() . $student[0]->kartu_keluarga ?>">
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-danger font-weight-bold"
                        data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_akta" tabindex="-1" aria-labelledby="exampleModalSizeLg" aria-hidden="true"
        role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Berkas Akta Kelahiran
                        "<?php echo strtoupper($student[0]->nama_lengkap); ?>"</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="text-center">
                        <img alt="Pic" class="col-12" src="<?php echo base_url() . $student[0]->akta_kelahiran ?>">
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-light-danger font-weight-bold"
                        data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <div class="whatsapp_chat_support wcs_fixed_right" id="example_1">
        <div class="wcs_button_label">
            Butuh bantuan? Hubungi Kami
        </div>
        <div class="wcs_button wcs_button_circle">
            <span class="fa fa-phone"></span>
        </div>

        <div class="wcs_popup">
            <div class="wcs_popup_close">
                <span class="far fa-times-circle mt-2"></span>
            </div>
            <div class="wcs_popup_header">
                <strong>Butuh bantuan? Kontak Kami </strong>
                <br>
                <div class="wcs_popup_header_description">Pilih salah satu <b>Admin PPDB</b> dibawah ini</div>
            </div>
            <div class="wcs_popup_person_container">
                <?php if ($contact[0]->no_handphone_tk != "" or $contact[0]->no_handphone_tk != NULL) { ?>
                <div class="wcs_popup_person"
                    data-number="<?php echo "62" . substr($contact[0]->no_handphone_tk, 1); ?>"
                    data-default-msg="Assslamualaikum, permisi mau bertanya?">
                    <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>"
                            alt=""></div>
                    <div class="wcs_popup_person_content">
                        <div class="wcs_popup_person_name">Admin KB-TK</div>
                        <div class="wcs_popup_person_description">Petugas PPDB KB-TK</div>
                        <div class="wcs_popup_person_status">Sedang Online</div>
                    </div>
                </div>
                <?php }
				if ($contact[0]->no_handphone_sd != "" or $contact[0]->no_handphone_sd != NULL) { ?>
                <div class="wcs_popup_person"
                    data-number="<?php echo "62" . substr($contact[0]->no_handphone_sd, 1); ?>"
                    data-default-msg="Assslamualaikum, permisi mau bertanya?">
                    <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>"
                            alt=""></div>
                    <div class="wcs_popup_person_content">
                        <div class="wcs_popup_person_name">Admin SD</div>
                        <div class="wcs_popup_person_description">Petugas PPDB SD</div>
                        <div class="wcs_popup_person_status">Sedang Online</div>
                    </div>
                </div>
                <?php }
				if ($contact[0]->no_handphone_smp != "" or $contact[0]->no_handphone_smp != NULL) { ?>
                <div class="wcs_popup_person"
                    data-number="<?php echo "62" . substr($contact[0]->no_handphone_smp, 1); ?>"
                    data-default-msg="Assslamualaikum, permisi mau bertanya?">
                    <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>"
                            alt=""></div>
                    <div class="wcs_popup_person_content">
                        <div class="wcs_popup_person_name">Admin SMP</div>
                        <div class="wcs_popup_person_description">Petugas PPDB SMP</div>
                        <div class="wcs_popup_person_status">Sedang Online</div>
                    </div>
                </div>
                <?php }
				if ($contact[0]->no_handphone_sma != "" or $contact[0]->no_handphone_sma != NULL) { ?>
                <div class="wcs_popup_person"
                    data-number="<?php echo "62" . substr($contact[0]->no_handphone_sma, 1); ?>"
                    data-default-msg="Assslamualaikum, permisi mau bertanya?">
                    <div class="wcs_popup_person_img"><img src="<?php echo base_url() . $page[0]->logo_website; ?>"
                            alt=""></div>
                    <div class="wcs_popup_person_content">
                        <div class="wcs_popup_person_name">Admin SMA</div>
                        <div class="wcs_popup_person_description">Petugas PPDB SMA</div>
                        <div class="wcs_popup_person_status">Sedang Online</div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#6993FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1E9FF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/global/plugins.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->

    <!--end::Page Scripts-->
    <script src="<?php echo base_url(); ?>assets/ppdb/dist/assets/plugins/custom/whatsappchat/whatsapp-chat-support.js">
    </script>
    <script>
    $('#example_1').whatsappChatSupport();
    </script>
</body>
<!--end::Body-->

</html>
