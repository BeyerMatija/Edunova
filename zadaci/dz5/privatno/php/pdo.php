<?php include_once '../../konfiguracija.php'; provjeraLogin(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<?php include_once '../../predlosci/head.php'; ?>
	</head>
	<body>
		<?php include_once '../../predlosci/izbornik.php'; ?>
		<div class="row">
			<div class="large-12 columns">
				<?php
				
				
				
				$izraz = $veza->query("select * from smjer");
				$izraz->execute();
				$rezultati = $izraz->fetchAll(PDO::FETCH_OBJ);
				//print_r($rezultati);
				
				foreach ($rezultati as $red) {
					echo $red->naziv . "<br />";
				}
				
				?>
			</div>
		</div>
		<?php	include_once '../../predlosci/podnozje.php'; ?>
		<?php	include_once '../../predlosci/skripte.php'; ?>
		
	</body>
</html>
