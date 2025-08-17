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
					<h2 class="text-white font-weight-bold my-2 mr-5">Monitoring</h2>
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
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Aktifitas</a>
						<!--end::Item-->
						<!--begin::Item-->
						<span class="label label-dot label-sm bg-white opacity-75 mx-3"></span>
						<a href="" class="text-white text-hover-white opacity-75 hover-opacity-100">Monitoring Aktifitas Web</a>
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
				<div class="col-lg-12 col-12">
					<!--begin::Card-->
					<div class="card card-custom gutter-b">
						<!--begin::Header-->
						<div class="card-header h-auto">
							<!--begin::Title-->
							<div class="card-title py-5">
								<h3 class="card-label">Monitoring Aktivitas Website</h3>
							</div>
							<!--end::Title-->
						</div>
						<!--end::Header-->
						<div class="card-body">
							<!--begin::Chart-->
							<div id="chart_3"></div>
							<!--end::Chart-->
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
<?php
$arr_kb = [];
$arr_tk = [];
$arr_sd = [];
$arr_smp = [];
$arr_th = [];
$arr_dc = [];
$arr_kbtk = [];
if (!empty($insight_register)) {
	foreach ($insight_register as $key => $values) {
		$arr_kb[] = $values->kb;
		$arr_tk[] = $values->tk;
		$arr_sd[] = $values->sd;
		$arr_smp[] = $values->smp;
		$arr_dc[] = $values->dc;
		$arr_kbtk[] = $values->kbtk;
		$arr_th[] = $values->tahun_ajaran;
	}
}
?>
<script>
	var csrfName = $('.txt_csrfname').attr('name');
	var csrfHash = $('.txt_csrfname').val(); // CSRF hash

	var pro = $(".ppdb_swicth").bootstrapSwitch();
	pro.on("switchChange.bootstrapSwitch", function(event, state) {
		if (state == true) {
			Swal.fire({
				title: "Peringatan!",
				text: "Apakah anda yakin ingin MENGAKTIFKAN PPDB Sekarang?",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#1BC5BD",
				confirmButtonText: "Ya, Aktifkan!",
				cancelButtonText: "Tidak, batal!",
				closeOnConfirm: false,
				closeOnCancel: false
			}).then(function(result) {
				if (result.value) {
					$.ajax({
						type: "post",
						url: "<?php echo site_url("/ppdb/dashboard/change_status_ppdb") ?>",
						data: {
							id: '<?php echo paramEncrypt(1); ?>',
							[csrfName]: csrfHash
						},
						dataType: 'html',
						success: function(result) {
							Swal.fire("Diaktifkan!", "PPDB telah diaktifkan!.", "success");
						},
						error: function(result) {
							console.log(result);
							Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
						}
					});
				} else {
					pro.bootstrapSwitch('state', false);
					Swal.fire("Dibatalkan!", "PPDB batal diaktifkan.", "error");
				}
			});
		} else {
			Swal.fire({
				title: "Peringatan!",
				text: "Apakah anda yakin ingin NONAKTIFKAN PPDB Sekarang?",
				icon: "warning",
				showCancelButton: true,
				confirmButtonColor: "#DD6B55",
				confirmButtonText: "Ya, Non Aktifkan!",
				cancelButtonText: "Tidak, batal!",
				closeOnConfirm: false,
				closeOnCancel: false
			}).then(function(result) {
				if (result.value) {
					$.ajax({
						type: "post",
						url: "<?php echo site_url("/ppdb/dashboard/change_status_ppdb") ?>",
						data: {
							id: '<?php echo paramEncrypt(0); ?>',
							[csrfName]: csrfHash
						},
						dataType: 'html',
						success: function(result) {
							Swal.fire("Dinonaktifkan!", "PPDB telah dinonaktifkan!.", "success");
						},
						error: function(result) {
							console.log(result);
							Swal.fire("Opsss!", "Koneksi Internet Bermasalah.", "error");
						}
					});
				} else {
					pro.bootstrapSwitch('state', true);
					Swal.fire("Dibatalkan!", "PPDB batal dinonaktifkan.", "error");
				}
			});
		}
	});
</script>
<script>
	var kb = [<?php echo implode(',', $arr_kb) ?>];
	var tk = [<?php echo implode(',', $arr_tk) ?>];
	var sd = [<?php echo implode(',', $arr_sd) ?>];
	var smp = [<?php echo implode(',', $arr_smp) ?>];
	var dc = [<?php echo implode(',', $arr_dc) ?>];
	var kbtk = [<?php echo implode(',', $arr_kbtk) ?>];
	var th = [<?php echo '"' . implode('","', $arr_th) . '"' ?>];

	var ppdb = [<?php echo $insight_ppdb[0]->sosial_media; ?>, <?php echo $insight_ppdb[0]->website; ?>,
		<?php echo $insight_ppdb[0]->teman; ?>, <?php echo $insight_ppdb[0]->iklan_fb; ?>,
		<?php echo $insight_ppdb[0]->iklan_ig; ?>, <?php echo $insight_ppdb[0]->iklan_google; ?>,
		<?php echo $insight_ppdb[0]->berita; ?>, <?php echo $insight_ppdb[0]->brosur; ?>
	];

	"use strict";
	// Shared Colors Definition
	const primary = '#6993FF';
	const success = '#1BC5BD';
	const info = '#8950FC';
	const warning = '#FFA800';
	const danger = '#F64E60';
	const dark = '#000000';
	const grey = '#808080';
	const yellow = '#ffff00';

	var KTApexChartsDemo = function() {
		// Private functions

		var _demo3 = function() {
			const apexChart = "#chart_3";
			var options = {
				series: [{
						name: 'Kelompok Bermain',
						data: kb
					},
					{
						name: 'Taman Kanak-kanak',
						data: tk
					},
					{
						name: 'Sekolah Dasar',
						data: sd
					},
					{
						name: 'Sekolah Menengah Pertama',
						data: smp
					},
					{
						name: 'Kelompok Bermain-Taman Kanak',
						data: kbtk
					},
					{
						name: 'Day Care',
						data: dc
					}
				],
				chart: {
					type: 'bar',
					height: 320
				},
				plotOptions: {
					bar: {
						horizontal: false,
						columnWidth: '70%',
						endingShape: 'rounded'
					},
				},
				dataLabels: {
					enabled: false
				},
				stroke: {
					show: true,
					width: 2,
					colors: ['transparent']
				},
				xaxis: {
					categories: th,
				},
				yaxis: {
					title: {
						text: 'Jenjang/Tingkat'
					}
				},
				fill: {
					opacity: 1
				},
				tooltip: {
					y: {
						formatter: function(val) {
							return "" + val + " Pendaftar"
						}
					}
				},
				colors: [primary, success, warning, danger, info, grey]
			};

			var chart = new ApexCharts(document.querySelector(apexChart), options);
			chart.render();
		}

		var _demo12 = function() {
			const apexChart = "#chart_12";
			var options = {
				series: ppdb,
				chart: {
					width: 385,
					type: 'pie',
				},
				labels: ['Sosial Media', 'Website Sekolah', 'Teman/Saudara', 'Iklan Facebook', 'Iklan Instagram', 'Iklan Google', 'Berita/Koran', 'Brosur/Banner'],
				responsive: [{
					breakpoint: 480,
					options: {
						chart: {
							width: 360
						},
						legend: {
							position: 'bottom'
						}
					}
				}],
				colors: [primary, success, warning, danger, info, dark, grey, yellow]
			};

			var chart = new ApexCharts(document.querySelector(apexChart), options);
			chart.render();
		}


		return {
			// public functions
			init: function() {

				_demo3();
				_demo12();

			}
		};
	}();

	jQuery(document).ready(function() {
		KTApexChartsDemo.init();
	});
</script>
