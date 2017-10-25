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
							//pripramamo upit tako da selektiramo korisnika gdje je sifra jednaka nasoj sifri
							$izraz = $veza->prepare("select * from operater where sifra=:sifra");
							$izraz ->execute(array("sifra"=>$sifra));
							
							//rezultat koji dobijemo spremamo u našu varijabliu $korisnik
							$korisnik = $izraz->fetch(PDO::FETCH_OBJ);
							      
							       ?>
							       <!--ovdje napraviti div za manju tablicu promjene-->
		<div class ="grid-x">
  		<div class="medium-3 large-3 cell"></div>
  		<div class="medium-6 large-6 cell">				       
			<?php
			if(isset($_GET["ERROR"])){
				echo "<h5 style=\"color: #660033\">Lozinke nisu jednake!</h5>";
			}
			?>
							       
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/operateri/passwordReset.php">
			  	
			  <h4 class="text-center"><b>Uredi lozinku</b></h4>
			  
			  <label>Nova lozinka:
			    <input type="password" name="lozinka" placeholder="nova lozinka">
			  </label>
			  <label>Potvrdi lozinku:
				 <input type="password" name="passwordConfirm" placeholder="potvrdi lozinku"> <br />
   			 </label>
   			
		       <input type="hidden" name="sifra"  value="<?php echo $korisnik->sifra; ?>">
			  <p><input type="submit" class="button expanded" value="Promjeni"></input></p>
			  
			   <a href="<?php echo $putanjaAPP;?>privatno/operateri/index.php"">
			  <button class="alert button expanded" name="odustani">Odustani</button>
				</a>

		</form>
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

