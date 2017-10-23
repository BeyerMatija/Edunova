<?php include_once '../konfiguracija.php'; ?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../predlosci/head.php';?>
  </head>
  <body>
  	<?php include_once '../predlosci/menu.php';?>
  	
        <div class ="grid-x">
  		<div class="medium-3 large-3 cell"></div>
  		<div class="medium-6 large-6 cell">
  			
  			<!-- <?php
             if(isset($_GET["nemateOvlasti"])){
                echo "<h1>Nemate ovlasti</h1>";
            }
           ?> -->
  				  	        	
			  <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>javno/dologin.php">
			  	<?php 
			  	if(isset($_GET['error']) && $_GET['error'] == 'true')				
					
			  		?>
			  				
			  <h4 class="text-center"><b>Prijavite se sa vašim korisničkim podacima</b></h4>
			  
			  <label>Korisničko ime:
			    <input type="text" name="korisnicko_ime" placeholder="korisničko ime">
			  </label>
			  
			  <label>Lozinka:
			    <input type="password" name="lozinka" placeholder="lozinka">
			  </label>
			  
			  <p><input type="submit" class="button expanded" value="Prijava"></input></p>
			  
			  </form>
			  
			   <a href="<?php echo $putanjaAPP;?>index.php">
			  <button class="alert button expanded" name="odustani">Odustani</button>
				</a>
    	
         </div>
    </div>
 </div>
	<?php	include_once '../predlosci/podnozje.php'; ?>
   <?php	include_once '../predlosci/skripte.php'; ?>
  </body>
</html>
