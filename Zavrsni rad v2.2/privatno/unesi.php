 <?php include_once '../../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
							
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/lijekovi/insert.php">
			  	
			  <h4 class="text-center">unesi informacije o lijeku</h4>
			  
			  <label>Naziv
			    <input type="text" name="naziv" placeholder="naziv lijeka" >
			  </label>
			  <label>Cijena
			    <input type="number" name="cijena" placeholder="cijena lijeka">
			  </label>
		       
			  <p><input type="submit" class="button expanded" value="Unesi"></input></p>
		
			</form>
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

