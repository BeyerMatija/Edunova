 <?php include_once '../../konfiguracija.php';  ?>
 <?php include_once '../../funkcije.php'; provjeralogin(); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
  	
  	<div class ="grid-x">
  		<div class="medium-3 large-3 cell"></div>
  		<div class="medium-6 large-6 cell">	
							
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/korisnici/insert.php">
			  	
			  <h4 class="text-center"><b>Unesi informacije o korisniku</b></h4>
			  
			  <label>Ime:
			    <input type="text" name="ime" placeholder="ime" >
			  </label>
			  <label>Prezime:
			    <input type="text" name="prezime" placeholder="prezime">
			  </label>
			  <label>OIB:
			    <input type="number" name="oib" placeholder="oib">
			  </label>
		       
			  <p><input type="submit" class="button expanded" value="Unesi"></input></p>
			  
			   <a href="<?php echo $putanjaAPP;?>privatno/korisnici/index.php">
			  <button class="alert button expanded" name="odustani">Odustani</button>
				</a>

		
			</form>
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

