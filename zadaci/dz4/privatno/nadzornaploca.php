<?php include_once '../konfiguracija.php';  

if(!isset($_SESSION["logiran"])){
	header("location: " . $putanjaAPP . "javno/login.php?nemateOvlasti");
	exit;
}

?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php include_once '../predlosci/head.php'; ?>
	</head>
	<body>
		<?php include_once '../predlosci/izbornik.php'; ?>
		<div class="row">
			<div class="large-12 columns">
				<div class="callout">
					<div class="row">
						<div class="large-6 columns">
							<div id="lijevi"></div>
						</div>
						<div class="large-6 columns">
							<div id="desni"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        /
        
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>

		<div id="container" style="min-width: 510px; height: 500px; max-width: 600px; margin: 0 auto"></div>
		
		
		<?php	include_once '../predlosci/podnozje.php'; ?>
		<?php	include_once '../predlosci/skripte.php'; ?>
		
		
<script>
	$(document).ready(function() {

		// Build the chart
		Highcharts.chart('container', {
			chart : {
				plotBackgroundColor : null,
				plotBorderWidth : null,
				plotShadow : false,
				type : 'pie'
			},
			title : {
				text : 'Ukupna potrošnja naših proizvoda'
			},
			tooltip : {
				pointFormat : '{series.name}: <b>{point.percentage:.1f}%</b>'
			},
			plotOptions : {
				pie : {
					allowPointSelect : true,
					cursor : 'pointer',
					dataLabels : {
						enabled : false
					},
					showInLegend : true
				}
			},
			series : [{
				name : 'proizvodi',
				colorByPoint : true,
				data : [{
					name : 'proizvod 1',
					y : 56.33
				}, {
					name : 'proizvod 2',
					y : 24.03,
					sliced : true,
					selected : true
				}, {
					name : 'proizvod 3',
					y : 20.38
				}, {
					name : 'proizvod 4',
					y : 34.77
				}, {
					name : 'proizvod 5',
					y : 10.91
				}, {
					name : 'ostalo..',
					y : 39.2
				}]
			}]
		});
	});
</script>
					
		</body>
		</html>
