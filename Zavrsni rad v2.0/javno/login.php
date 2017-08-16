<?php include_once '../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../predlosci/menu.php'; ?>
  	
    <div class="grid-container">
    	
      <div class="row">
      	
        <div class="large-6 medium 6 cell">
        	 <br><br>
        	  	        	
			  <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>javno/dologin.php">
			  
			  <h4 class="text-center">Prijavite se sa vašim korisničkim podacima</h4>
			  <label>Korisničko ime
			    <input type="text" name="korisnicko_ime" placeholder="korisničko ime">
			  </label>
			  <label>Lozinka
			    <input type="password" name="lozinka" placeholder="lozinka">
			  </label>
		
			  <p><input type="submit" class="button expanded" value="Prijava"></input></p>
		
			</form>
    	
         </div>
    </div>
 </div>
	<?php	include_once '../predlosci/podnozje.php'; ?>
   <?php	include_once '../predlosci/skripte.php'; ?>
  </body>
</html>
