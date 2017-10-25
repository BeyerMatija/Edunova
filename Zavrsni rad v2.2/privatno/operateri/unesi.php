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
							
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/operateri/insert.php">
			  	
			  <h4 class="text-center"><b>Unesi podatke o operateru</b></h4>
			  <label>Korisnik
			    
			    <select name="korisnik">
							<?php 
						
							$izraz = $veza->prepare("select  * from korisnik
													where sifra not in(select korisnik from operater)");
							
							$izraz->execute();
							$korisnici = $izraz->fetchAll(PDO::FETCH_OBJ);
							foreach ($korisnici as $korisnik) :
							?>
				           <option value="<?php echo $korisnik->sifra;?>"><?php echo $korisnik->ime, " ",$korisnik->prezime;?></option>
					<?php endforeach;?>
				</select>
			  </label>
			  <label>Korisničko ime:
			    <input type="text" name="korisnicko_ime" placeholder="korisnicko ime" >
			  </label>
			  <label>Lozinka:
			    <input type="password" name="lozinka" placeholder="****">
			  </label>
			  <label>Potvrdi lozinku:
				 <input type="password" name="lozinka" placeholder="potvrdi lozinku"> <br />
   			 </label>
		       
			  <p><input type="submit" class="button expanded" value="Unesi"></input></p>

		</form>
		
		<a href="<?php echo $putanjaAPP;?>privatno/operateri/index.php"">
			  <button class="alert button expanded" name="odustani">Odustani</button>
				</a>
		
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

