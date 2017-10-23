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
							
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/lijekovi/insert.php">
			  	
			  <h4 class="text-center"><b>Unesi informacije o lijeku</b></h4>
			  
			  <label>Naziv:
			    <input type="text" name="naziv" placeholder="naziv lijeka" >
			  </label>
			  <label>Cijena:
			    <input type="number" name="cijena" placeholder="cijena lijeka">
			  </label>
		       
			  <p><input type="submit" class="button expanded" value="Unesi"></input></p>
			  
			  <a href="<?php echo $putanjaAPP;?>index.php">
			  
			  <button class="alert button expanded" name="odustani">Odustani</button>
				</a>
			</form>
		
		
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

