<?php include_once '../konfiguracija.php'; provjeraLogin(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php include_once '../predlosci/head.php'; ?>
	</head>
	<body>
		<?php include_once '../predlosci/izbornik.php'; ?>
		<div class="row">
			<div class="large-12 columns">
				
			</div>
		</div>
		<div id="container" style="min-width: 100%; height: 600px; margin: 0 auto"></div>
		
		<?php	include_once '../predlosci/podnozje.php'; ?>
		<?php	include_once '../predlosci/skripte.php'; ?>
						
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>



		<?php	include_once 'nadzornaPlocaSkripte.php'; ?>
	</body>
</html>
