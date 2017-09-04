 <?php include_once '../../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
							<?php 
							//opet imamo parametar iz url-a
						    $sifra = $_GET['sifra'];
							//pripramamo upit tako da selektiramo korisnika gdje je sifra jednaka nasoj sifri
							$izraz = $veza->prepare("select * from korisnik where sifra=:sifra");
							$izraz ->execute(array("sifra"=>$sifra));
							
							//rezultat koji dobijemo spremamo u našu varijabliu $korisnik
							$korisnik = $izraz->fetch(PDO::FETCH_OBJ);
							      
							       ?>
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/korisnici/edit.php">
			  	
			  <h4 class="text-center">Uredi informacije o korisniku</h4>
			  <label>Ime
			    <input type="text" name="Ime" placeholder="Ime" value="<?php echo $korisnik->ime; ?>">
			  </label>
			  <label>Prezime
			    <input type="text" name="Prezime" placeholder="Prezime" value="<?php echo $korisnik->prezime; ?>">
			  </label>
			  <label>OIB
		       <input type="number" name="OIB"  placeholder="OIB" value="<?php echo $korisnik->oib; ?>">
			  <p><input type="submit" class="button expanded" value="Uredi"></input></p>
		
			</form>
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

