<div class="right_col" role="main">

	<!-- top tiles -->
	<div class="tile_count">
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-cubes"></i> Total barang</span>
			<div class="count green"><?=$total_barang?></div>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-star"></i> Umur < 2 tahun</span>
			<div class="count"><?=$umur_baru?></div>
			<span class="count_bottom"><i class="green"><?=persentase($umur_baru,$total_barang)?>% </i> dari total barang</span>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-star-half"></i> Umur 3-5 tahun</span>
			<div class="count"><?=$umur_sedang?></div>
			<span class="count_bottom"><i class="text-warning"><?=persentase($umur_sedang,$total_barang)?>% </i> dari total barang</span>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-star-half-empty"></i> Umur 6-10 tahun</span>
			<div class="count"><?=$umur_tua?></div>
			<span class="count_bottom"><i class="text-warning"><?=persentase($umur_tua,$total_barang)?>% </i> dari total barang</span>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-star-o"></i> Umur > 10 tahun</span>
			<div class="count"><?=$umur_sangat_tua?></div>
			<span class="count_bottom"><i class="text-warning"><?=persentase($umur_sangat_tua,$total_barang)?>% </i> dari total barang</span>
		</div>
		<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
			<span class="count_top"><i class="fa fa-clock-o"></i> Expired</span>
			<div class="count"><?=$expired?></div>
			<span class="count_bottom"><i class="red"><?=persentase($expired,$total_barang)?>% </i> dari total barang</span>
		</div>
	</div>
	<!-- /top tiles -->

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="dashboard_graph">

				<div class="row x_title">
					<div class="col-md-6">
						<h3><span class="fa fa-bar-chart"></span> Overview</h3>
					</div>
					<div class="col-md-6">
					</div>
				</div>

				<!-- grafik umur barang perkategori -->
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div id="container" style="height:350px;width:100%" class="demo-placeholder"></div>
				</div>
				<!-- /grafik umur barang perkategori -->

				<!-- jumlah barang -->
				<div class="col-md-3 col-sm-3 col-xs-12 bg-white">
					<div class="x_title">
						<h2>Jumlah barang (unit)</h2>
						<div class="clearfix"></div>
					</div>

					<div class="col-md-12 col-sm-12 col-xs-6">
						<h2>Elektronik <span class='pull-right'><?=$elektronik?></span></h2>
						<h2>Peralatan <span class='pull-right'><?=$peralatan?></span></h2>
						<h2>Kendaraan <span class='pull-right'><?=$kendaraan?></span></h2>
						<h2>Furniture <span class='pull-right'><?=$furniture?></span></h2>
						<h2>Fixture <span class='pull-right'><?=$fixture?></span></h2>
						<h2>Household <span class='pull-right'><?=$household?></span></h2>
						<h2>Lainnya <span class='pull-right'><?=$lainnya?></span></h2>
					</div>
				</div>
				<!-- /jumlah barang -->

				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<br>

	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="dashboard_graph">

				<div class="row x_title">
					<div class="col-md-6">
						<h3><span class="fa fa-bar-chart"></span> Barang expired</h3>
					</div>
					<div class="col-md-6">
					</div>
				</div>

				<!-- grafik barang expired -->
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div id="container2" style="height:350px;width:100%" class="demo-placeholder"></div>
				</div>
				<!-- /grafik barang expired -->

				<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<br />
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script type="text/javascript">
	$(function () {
		Highcharts.chart('container', {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Umur barang perkategori'
			},
			xAxis: {
				categories: [
				'Elektronik',
				'Peralatan',
				'Kendaraan',
				'Furniture',
				'Fixture',
				'Household',
				'Lainnya'
				],
				crosshair: true
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Jumlah (unit)'
				}
			},
			colors: [
			'#60a917', '#e3c800', '#ce352c', '#640024'
			],
			plotOptions: {
				column: {
					pointPadding: 0.2,
					borderWidth: 0,
					dataLabels: {
						enabled: true,
						allowOverlap: true
					},
				}
			},
			series: [{
				name: '< 2 tahun',
				data: [<?=$elektronik_muda?>, <?=$peralatan_muda?>, <?=$kendaraan_muda?>, <?=$furniture_muda?>, <?=$fixture_muda?>, <?=$household_muda?>, <?=$lainnya_muda?>]

			}, {
				name: '3-5 tahun',
				data: [<?=$elektronik_sedang?>, <?=$peralatan_sedang?>, <?=$kendaraan_sedang?>, <?=$furniture_sedang?>, <?=$fixture_sedang?>, <?=$household_sedang?>, <?=$lainnya_sedang?>]

			}, {
				name: '6-10 tahun',
				data: [<?=$elektronik_tua?>, <?=$peralatan_tua?>, <?=$kendaraan_tua?>, <?=$furniture_tua?>, <?=$fixture_tua?>, <?=$household_tua?>, <?=$lainnya_tua?>]

			}, {
				name: '> 10 tahun',
				data: [<?=$elektronik_sangat_tua?>, <?=$peralatan_sangat_tua?>, <?=$kendaraan_sangat_tua?>, <?=$furniture_sangat_tua?>, <?=$fixture_sangat_tua?>, <?=$household_sangat_tua?>, <?=$lainnya_sangat_tua?>]

			}]
		});

Highcharts.chart('container2', {
	chart: {
		type: 'column'
	},
	title: {
		text: false
	},
	xAxis: {
		categories: [
		'Elektronik',
		'Peralatan',
		'Kendaraan',
		'Furniture',
		'Fixture',
		'Household',
		'Lainnya'
		],
	},
	yAxis: {
		min: 0,
		title: {
			text: 'Jumlah (unit)'
		}
	},
	plotOptions: {
		series: {
			pointPadding: 0.2,
			borderWidth: 0,
			dataLabels: {
				enabled: true,
				allowOverlap: true
			},
		}
	},
	series: [{ 
		data:[
		<?=$elektronik_expired?>,
		<?=$peralatan_expired?>,
		<?=$kendaraan_expired?>,
		<?=$furniture_expired?>,
		<?=$fixture_expired?>,
		<?=$household_expired?>,
		<?=$lainnya_expired?>
		]
	}]
});
})
</script>
