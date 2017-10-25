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
  	
			<?php
			$izraz = $veza->prepare("select * from korisnik");
			$izraz->execute();
			$korisnici = $izraz->fetchAll(PDO::FETCH_OBJ);
			?>				
	    <form class="log-in-form" method="post" action="<?php echo $putanjaAPP;?>privatno/posjeta/insert.php">
			  	
			  <h4 class="text-center"><b>Unesi informacije o posjeti</b></h4>
			  
			  
			  <label>Korisnik:
			     <select name="korisnik">
			     	<?php
			     	foreach($korisnici as $korisnik):
						?>
  					<option value="<?php echo $korisnik->sifra;?>"><?php echo $korisnik->ime . " " . $korisnik->prezime;?></option>
  					<?php
					endforeach; ?>
				 </select> 
			  </label>
		      <label>Operater:
			    <input type="text" name="operater_ime" disabled value="<?php echo $_SESSION["user"];?>">
			     <input type="hidden" name="operater" value="<?php echo $_SESSION["user_id"];?>">
			  </label>
			  <p><input type="submit" class="button expanded" value="Unesi"></input></p>
		</form>
		
		<a href="<?php echo $putanjaAPP;?>privatno/posjeta/index.php">
			  <button class="alert button expanded" name="odustani">Odustani</button>
				</a>
			
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

