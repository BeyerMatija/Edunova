 <?php include_once '../../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
							
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/operateri/insert.php">
			  	
			  <h4 class="text-center">Unesi podatke o operateru</h4>
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
			  <label>Korisničko ime
			    <input type="text" name="korisnicko_ime" placeholder="korisnicko ime" >
			  </label>
			  <label>Lozinka
			    <input type="password" name="lozinka" placeholder="****">
			  </label>
		       
			  <p><input type="submit" class="button expanded" value="Unesi"></input></p>
		
			</form>
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

