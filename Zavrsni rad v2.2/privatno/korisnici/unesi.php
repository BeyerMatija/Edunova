 <?php include_once '../../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
							
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/korisnici/insert.php">
			  	
			  <h4 class="text-center">Unesi informacije o korisniku</h4>
			  
			  <label>Ime
			    <input type="text" name="ime" placeholder="ime" >
			  </label>
			  <label>Prezime
			    <input type="text" name="prezime" placeholder="prezime">
			  </label>
			  <label>OIB
			    <input type="number" name="OIB" placeholder="OIB">
			  </label>
		       
			  <p><input type="submit" class="button expanded" value="Unesi"></input></p>
		
			</form>
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

