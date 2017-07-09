<?php include_once '../konfiguracija.php';  ?>
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
					<div class="large-4 columns large-centered">
						<h1 style="width: 100%; text-align: center"><?php echo $naslovAplikacije ?></h1>
						<?php 
						if(isset($_GET["neuspio"])){
							echo "Ne ispravna kombinacija korisnika i lozinke!";
						}
						
						if(isset($_GET["nemateOvlasti"])){
							echo "Morate se prvo logirati!";
						}
						
						if(isset($_GET["odlogiranSi"])){
							echo "Uspješno ste se odjavili!";
						}
						 ?>
						
						<form method="post" action="<?php echo $putanjaAPP;  ?>autorizacija.php">
							<label for="korisnik">Korisnik</label>
							<input type="text" name="korisnik" id="korisnik" 
							value="<?php echo isset($_GET["korisnik"]) ? $_GET["korisnik"] : ""; ?>"/>
							<label for="lozinka">Lozinka</label>
							<input type="password" name="lozinka" id="lozinka" />
							<input type="submit" class="button expanded" value="Autoriziraj" />
						</form>
					</div>
				</div>
				
				</div>
			</div>
		</div>
		<?php	include_once '../predlosci/podnozje.php'; ?>
		<?php	include_once '../predlosci/skripte.php'; ?>
	</body>
</html>
