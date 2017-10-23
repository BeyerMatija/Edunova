 <?php include_once '../../konfiguracija.php';  ?>
 <?php include_once '../../funkcije.php'; provjeralogin(); ?>
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
							//pripramamo upit tako da selektiramo likjek gdje je sifra jednaka nasoj sifri
							$izraz = $veza->prepare("select * from lijek where sifra =:sifra");
							$izraz->execute(array("sifra" => $sifra));
							//rezultat koji dobijemo spremamo u našu varijabliu $lijek
							$lijek = $izraz->fetch(PDO::FETCH_OBJ);
							      
							       ?>
	<div class ="grid-x">
  		<div class="medium-3 large-3 cell"></div>
  		<div class="medium-6 large-6 cell">	
	
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/lijekovi/edit.php">
			  	
			  <h4 class="text-center"><b>Uredi informacije o lijeku</b></h4>
			  <label>Naziv:
			    <input type="text" name="naziv" placeholder="naziv lijeka" value="<?php echo $lijek->naziv; ?>">
			  </label>
			  <label>Cijena:
			    <input type="number" name="cijena" placeholder="cijena lijeka" value="<?php echo $lijek->cijena; ?>">
			  </label>
		       <input type="hidden" name="sifra"  value="<?php echo $lijek->sifra; ?>">
			  <p><input type="submit" class="button expanded" value="Uredi"></input></p>
			  
			   <a href="<?php echo $putanjaAPP;?>privatno/lijekovi/index.php"">
			  <button class="alert button expanded" name="odustani">Odustani</button>
				</a>

		
			</form>
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

