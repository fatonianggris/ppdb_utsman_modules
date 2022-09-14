<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>E-FORMULIR Sekolah Utsman</title>

	<style type="text/css">
		* {
			font-family: Verdana, Arial, sans-serif;
		}

		table {
			font-size: x-small;
		}

		tfoot tr td {
			font-weight: bold;
			font-size: x-small;
		}

		.gray {
			background-color: #f2c195
		}
	</style>

</head>

<body style="background-image: url('<?php echo base_url() . $page[0]->logo_website ?>'); opacity: 0.2; background-repeat: no-repeat;background-attachment: fixed;background-position: center;">
	<table width="100%">
		<tr>
			<td valign="top" width="90"><img src="<?php echo base_url() . $page[0]->logo_website ?>" alt="" width="100" /></td>
			<td align="left">
				<h2 style="color:#f77d0e; margin-top:-7px"><?php echo $page[0]->nama_website; ?></h2>
				<?php echo $contact[0]->alamat; ?><br>
				<?php echo $contact[0]->nomor_telephone; ?> / <?php echo $contact[0]->no_handphone; ?><br>
				<?php echo $contact[0]->email; ?><br>
				<?php echo $contact[0]->url_website; ?><br>

			</td>
		</tr>
	</table>

	<table width="100%" border="1">

	</table>
	<br />
	<table width="100%">
		<thead style="background-color: #f2c195;">
			<tr>
				<th style="font-size:20px">FORMULIR PENDAFTARAN SISWA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row" align="center">
					<img src="<?php echo (base_url() . $formulir[0]->foto_siswa); ?>" alt="" width="115" />
				</th>
			</tr>
		</tbody>
	</table>

	<table width="100%">
		<thead style="background-color: #f2c195;">
			<tr>
				<th style="font-size:18px">BIODATA SISWA</th>
			</tr>
			<tr>
				<th scope="row" style="background-color: #cccccc;">#Data Personal Siswa</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<th scope="row" align="left">NISN</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->nisn); ?></td>
				<th scope="row" align="left">Nama Lengkap Siswa</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->nama_lengkap); ?></td>

			</tr>
			<tr>
				<th scope="row" align="left">NIK</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->nik); ?></td>
				<th scope="row" align="left">No. Akta Kelahiran</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->no_akta_kelahiran); ?></td>
			</tr>

			<tr>
				<th scope="row" align="left">Nama Panggilan</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->nama_panggilan); ?></td>
				<th scope="row" align="left">Tempat Lahir</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->tempat_lahir); ?></td>
			</tr>

			<tr>
				<th scope="row" align="left">Tanggal Lahir</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->tanggal_lahir); ?></td>
				<th scope="row" align="left">Jenis Kelamin</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					if ($formulir[0]->jenis_kelamin == 1) {
						echo 'Laki-Laki';
					} else if ($formulir[0]->jenis_kelamin == 2) {
						echo 'Perempuan';
					}
					?>
				</td>
			</tr>
			<tr>
				<th scope="row" align="left">Agama</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					if ($formulir[0]->agama == 1) {
						echo 'Islam';
					} else if ($formulir[0]->agama == 2) {
						echo 'Kristen';
					} else if ($formulir[0]->agama == 3) {
						echo 'Hindu';
					} else if ($formulir[0]->agama == 4) {
						echo 'Budha';
					} else if ($formulir[0]->agama == 5) {
						echo 'Lainnya';
					}
					?>
				</td>
				<th scope="row" align="left">Tahun Ajaran</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->tahun_ajaran); ?></td>
			</tr>
			<tr>
				<th scope="row" align="left">RomBel</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->rombel); ?></td>
			</tr>
			<tr>
				<th scope="row" align="left" style="padding-top:10px;"></th>
			</tr>
			<tr>
				<th scope="row" style="background-color: #cccccc;">#Data Periodik Siswa</th>
			</tr>
			<tr>
				<th scope="row" align="left">Alat Transportasi</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->alat_transportasi); ?></td>
				<th scope="row" align="left">Jenis Tempat Tinggal</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					if ($formulir[0]->jenis_tinggal == 1) {
						echo 'Bersama OrangTua';
					} else if ($formulir[0]->jenis_tinggal == 2) {
						echo 'Asrama';
					} else if ($formulir[0]->jenis_tinggal == 3) {
						echo 'Kos';
					} else if ($formulir[0]->jenis_tinggal == 4) {
						echo 'Bersama Nenek/Kakek';
					} else if ($formulir[0]->jenis_tinggal == 5) {
						echo 'Bersama Wali';
					} else if ($formulir[0]->jenis_tinggal == 6) {
						echo 'Lainnya';
					}
					?>
				</td>
			</tr>
			<tr>
				<th scope="row" align="left">Jarak Rumah ke Sekolah</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->jarak_rumah_sekolah); ?> Km</td>
				<th scope="row" align="left">Jumlah Saudara</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->jumlah_saudara); ?> Sdr</td>
			</tr>
			<tr>
				<th scope="row" align="left">Anak Ke-</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->anak_ke); ?></td>
				<th scope="row" align="left">Berkebutuhan Khusus</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<b>
						<?php
						if ($formulir[0]->kebutuhan_khusus == 1) {
							echo 'IYA';
						} else if ($formulir[0]->kebutuhan_khusus == 0) {
							echo 'TIDAK';
						}
						?>
					</b>
				</td>
			</tr>
			<tr>
				<th scope="row" align="left">Tinggi Badan</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->tinggi_badan); ?> Cm</td>
				<th scope="row" align="left">Berat Badan</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->berat_badan); ?> Kg</td>
			</tr>
			<tr>
				<th scope="row" align="left">NIS Saudara</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->nis_saudara); ?> </td>
				<th scope="row" align="left">Nama Saudara</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->nama_saudara); ?> </td>
			</tr>
		</tbody>
	</table>
	<br />

	<table width="100%">
		<thead style="background-color: #f2c195;">
			<tr>
				<th style="font-size:18px">BIODATA WALI</th>
			</tr>
			<tr>
				<th scope="row" style="background-color: #cccccc;">#Data Diri Ayah</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row" align="left">Nama Lengkap Ayah</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->nama_ayah); ?></td>
				<th scope="row" align="left">NIK KTP</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->nik_ayah); ?></td>

			</tr>
			<tr>
				<th scope="row" align="left">Tempat Lahir Ayah</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->tempat_lahir_ayah); ?></td>
				<th scope="row" align="left">Tanggal Lahir Ayah</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->tanggal_lahir_ayah); ?></td>
			</tr>

			<tr>
				<th scope="row" align="left">Pekerjaan Ayah</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->pekerjaan_ayah); ?></td>
				<th scope="row" align="left">Pendidikan Ayah</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					if ($formulir[0]->pendidikan_ayah == 1) {
						echo 'Tidak Sekolah';
					} else if ($formulir[0]->pendidikan_ayah == 2) {
						echo 'SD';
					} else if ($formulir[0]->pendidikan_ayah == 3) {
						echo 'SMP';
					} else if ($formulir[0]->pendidikan_ayah == 4) {
						echo 'SMA';
					} else if ($formulir[0]->pendidikan_ayah == 5) {
						echo 'D-I/D-II';
					} else if ($formulir[0]->pendidikan_ayah == 6) {
						echo 'D-III';
					} else if ($formulir[0]->pendidikan_ayah == 7) {
						echo 'D-IV/S1';
					} else if ($formulir[0]->pendidikan_ayah == 8) {
						echo 'S2/S3';
					}
					?>
				</td>
			</tr>
			<tr>
				<th scope="row" align="left">Penghasilan Ayah</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					if ($formulir[0]->penghasilan_ayah == 1) {
						echo 'Kurang dari Rp. 1.500.000';
					} else if ($formulir[0]->penghasilan_ayah == 2) {
						echo 'Rp. 1.500.000 - Rp. 2.500.000';
					} else if ($formulir[0]->penghasilan_ayah == 3) {
						echo 'Rp. 2.500.000 - RP. 3.500.000';
					} else if ($formulir[0]->penghasilan_ayah == 4) {
						echo 'Rp. 3.500.000 - Rp. 4.500.000';
					} else if ($formulir[0]->penghasilan_ayah == 5) {
						echo 'Rp. 4.500.000 - Rp. 5.500.000';
					} else if ($formulir[0]->penghasilan_ayah == 6) {
						echo 'Lebih dari Rp. 5.500.000';
					}
					?>
				</td>
			</tr>
			<tr>
				<th scope="row" align="left" style="padding-top:10px;"></th>
			</tr>
			<tr>
				<th scope="row" style="background-color: #cccccc;">#Data Diri Ibu</th>
			</tr>
			<tr>
				<th scope="row" align="left">Nama Lengkap Ibu</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->nama_ibu); ?></td>
				<th scope="row" align="left">NIK KTP</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->nik_ibu); ?></td>

			</tr>
			<tr>
				<th scope="row" align="left">Tempat Lahir Ibu</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->tempat_lahir_ibu); ?></td>
				<th scope="row" align="left">Tanggal Lahir Ibu</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->tanggal_lahir_ibu); ?></td>
			</tr>
			<tr>
				<th scope="row" align="left">Pekerjaan Ibu</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->pekerjaan_ibu); ?></td>
				<th scope="row" align="left">Pendidikan Ibu</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					if ($formulir[0]->pendidikan_ibu == 1) {
						echo 'Tidak Sekolah';
					} else if ($formulir[0]->pendidikan_ibu == 2) {
						echo 'SD';
					} else if ($formulir[0]->pendidikan_ibu == 3) {
						echo 'SMP';
					} else if ($formulir[0]->pendidikan_ibu == 4) {
						echo 'SMA';
					} else if ($formulir[0]->pendidikan_ibu == 5) {
						echo 'D-I/D-II';
					} else if ($formulir[0]->pendidikan_ibu == 6) {
						echo 'D-III';
					} else if ($formulir[0]->pendidikan_ibu == 7) {
						echo 'D-IV/S1';
					} else if ($formulir[0]->pendidikan_ibu == 8) {
						echo 'S2/S3';
					}
					?>
				</td>
			</tr>
			<tr>
				<th scope="row" align="left">Penghasilan Ibu</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					if ($formulir[0]->penghasilan_ibu == 1) {
						echo 'Kurang dari Rp. 1.500.000';
					} else if ($formulir[0]->penghasilan_ibu == 2) {
						echo 'Rp. 1.500.000 - Rp. 2.500.000';
					} else if ($formulir[0]->penghasilan_ibu == 3) {
						echo 'Rp. 2.500.000 - RP. 3.500.000';
					} else if ($formulir[0]->penghasilan_ibu == 4) {
						echo 'Rp. 3.500.000 - Rp. 4.500.000';
					} else if ($formulir[0]->penghasilan_ibu == 5) {
						echo 'Rp. 4.500.000 - Rp. 5.500.000';
					} else if ($formulir[0]->penghasilan_ibu == 6) {
						echo 'Lebih dari Rp. 5.500.000';
					}
					?>
				</td>
			</tr>
			<tr>
				<th scope="row" align="left" style="padding-top:10px;"></th>
			</tr>
			<tr>
				<th scope="row" style="background-color: #cccccc;">#Data Diri Wali</th>
			</tr>
			<tr>
				<th scope="row" align="left">Nama Lengkap Wali</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->nama_wali); ?></td>
				<th scope="row" align="left">NIK KTP</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->nik_wali); ?></td>

			</tr>
			<tr>
				<th scope="row" align="left">Tempat Lahir Wali</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->tempat_lahir_wali); ?></td>
				<th scope="row" align="left">Tanggal Lahir Wali</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->tanggal_lahir_wali); ?></td>
			</tr>
			<tr>
				<th scope="row" align="left">Pekerjaan Wali</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo strtoupper($formulir[0]->pekerjaan_wali); ?></td>
				<th scope="row" align="left">Pendidikan Wali</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					if ($formulir[0]->pendidikan_wali == 1) {
						echo 'Tidak Sekolah';
					} else if ($formulir[0]->pendidikan_wali == 2) {
						echo 'SD';
					} else if ($formulir[0]->pendidikan_wali == 3) {
						echo 'SMP';
					} else if ($formulir[0]->pendidikan_wali == 4) {
						echo 'SMA';
					} else if ($formulir[0]->pendidikan_wali == 5) {
						echo 'D-I/D-II';
					} else if ($formulir[0]->pendidikan_wali == 6) {
						echo 'D-III';
					} else if ($formulir[0]->pendidikan_wali == 7) {
						echo 'D-IV/S1';
					} else if ($formulir[0]->pendidikan_wali == 8) {
						echo 'S2/S3';
					}
					?>
				</td>
			</tr>
			<tr>
				<th scope="row" align="left">Penghasilan Wali</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					if ($formulir[0]->penghasilan_wali == 1) {
						echo 'Kurang dari Rp. 1.500.000';
					} else if ($formulir[0]->penghasilan_wali == 2) {
						echo 'Rp. 1.500.000 - Rp. 2.500.000';
					} else if ($formulir[0]->penghasilan_wali == 3) {
						echo 'Rp. 2.500.000 - RP. 3.500.000';
					} else if ($formulir[0]->penghasilan_wali == 4) {
						echo 'Rp. 3.500.000 - Rp. 4.500.000';
					} else if ($formulir[0]->penghasilan_wali == 5) {
						echo 'Rp. 4.500.000 - Rp. 5.500.000';
					} else if ($formulir[0]->penghasilan_wali == 6) {
						echo 'Lebih dari Rp. 5.500.000';
					}
					?>
				</td>
			</tr>
		</tbody>
	</table>
	<br />

	<table width="100%">
		<thead style="background-color: #f2c195;">
			<tr>
				<th style="font-size:18px">DATA ALAMAT</th>
			</tr>
			<tr>
				<th scope="row" style="background-color: #cccccc;">#Data Alamat KK</th>
			</tr>
		</thead>
		<tbody>

			<tr>
				<th scope="row" align="left">Alamat KK Lengkap</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ucwords(strtolower($formulir[0]->alamat_rumah_kk)); ?></td>
				<th scope="row" align="left">Provinsi KK</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php echo ($formulir[0]->nama_provinsi_kk); ?>
				</td>

			</tr>
			<tr>
				<th scope="row" align="left">Kabupaten/Kota KK</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php echo ($formulir[0]->nama_kabupaten_kota_kk); ?> - <?php echo strtoupper($formulir[0]->nama_kabupaten_kota_kk_adm); ?>
				</td>
				<th scope="row" align="left">Kecamatan KK</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->nama_kecamatan_kk); ?></td>
			</tr>
			<tr>
				<th scope="row" align="left">Kelurahan/Desa KK:</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php echo ($formulir[0]->nama_kelurahan_desa_kk); ?> - <?php echo strtoupper($formulir[0]->nama_kelurahan_desa_kk_adm); ?>
				</td>
				<th scope="row" align="left">RT KK</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->rt_kk); ?></td>

			</tr>
			<tr>
				<th scope="row" align="left">RW KK</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					echo $formulir[0]->rw_kk
					?>
				</td>
				<th scope="row" align="left">Kodepos KK</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					echo $formulir[0]->kodepos_kk
					?>
				</td>
			</tr>
			<tr>
				<th scope="row" align="left" style="padding-top:10px;"></th>
			</tr>
			<tr>
				<th scope="row" style="background-color: #cccccc;">#Data Alamat Domisili</th>
			</tr>
			<tr>
				<th scope="row" align="left">Alamat Domisili Lengkap</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ucwords(strtolower($formulir[0]->alamat_rumah_dom)); ?></td>
				<th scope="row" align="left">Provinsi Domisili</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php echo ($formulir[0]->nama_provinsi_dom); ?>
				</td>

			</tr>
			<tr>
				<th scope="row" align="left">Kabupaten/Kota Domisili</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php echo ($formulir[0]->nama_kabupaten_kota_dom); ?> - <?php echo strtoupper($formulir[0]->nama_kabupaten_kota_dom_adm); ?>
				</td>
				<th scope="row" align="left">Kecamatan Domisili</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->nama_kecamatan_dom); ?></td>
			</tr>
			<tr>
				<th scope="row" align="left">Kelurahan/Desa Domisili:</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php echo ($formulir[0]->nama_kelurahan_desa_dom); ?> - <?php echo strtoupper($formulir[0]->nama_kelurahan_desa_dom_adm); ?>
				</td>
				<th scope="row" align="left">RT Domisili</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left"><?php echo ($formulir[0]->rt_dom); ?></td>

			</tr>
			<tr>
				<th scope="row" align="left">RW Domisili</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					echo $formulir[0]->rw_dom
					?>
				</td>
				<th scope="row" align="left">Kodepos Domisili</th>
				<th scope="row" align="left" width="10">:</th>
				<td align="left">
					<?php
					echo $formulir[0]->kodepos_dom
					?>
				</td>
			</tr>
		</tbody>
	</table>
</body>

</html>
