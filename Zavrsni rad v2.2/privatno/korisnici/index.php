 <?php include_once '../../konfiguracija.php';  ?>
 <?php include_once '../../funkcije.php'; provjeralogin(); ?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
  	
  	<div class="row grid-x">
  	<div class="medium-3 large-3 columns"></div>
  	<div class="small-12 medium-6 large-6 columns">
  		</br>
  		
  			<table>
						<thead>
							<tr>
								<th>Ime</th>
								<th>Prezime</th>
								<th>OIB</th>
								<th>Akcija</th>
								
							</tr>
						</thead>
						<tbody>
							<?php 
						
							$izraz = $veza->prepare("select * from korisnik");
							
							$izraz->execute();
							$korisnici = $izraz->fetchAll(PDO::FETCH_OBJ);
							foreach ($korisnici as $korisnik) :
							?>
							<tr>
								<td><?php echo $korisnik->ime ?></td>
								<td><?php echo $korisnik->prezime ?></td>
								<td><?php echo $korisnik->oib ?></td>
								
								<td>
									<a href="<?php echo $putanjaAPP. "privatno/korisnici/uredi.php?sifra=".$korisnik->sifra?>"><i title="Uredi" class="step fi-page-edit size-48"></i></a>
									<a href="<?php echo $putanjaAPP. "privatno/korisnici/delete.php?sifra=".$korisnik->sifra?>"><i title="Obriši" class="fi-trash size-48"></i></a>
									
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>	 	
					
	<div class="small-12 medium-3 large-3 columns">
		<a href="<?php echo $putanjaAPP. "privatno/korisnici/unesi.php";?>">
  			</br><button class="success button expanded" style="float: right; width:80%;background: #14679e; color:white; margin-right: 25px;">Unesi novi</button></a>	
  		</div>
	</div>
  	    
       
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

