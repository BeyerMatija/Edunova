 <?php include_once '../../konfiguracija.php';  ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include_once '../../predlosci/head.php'; ?>
  </head>
  <body>
  	<?php include_once '../../predlosci/menu.php'; ?>
  	<div class="row">
  		<div class="large-12">
  			  			<a href="<?php echo $putanjaAPP. "privatno/korisnici/unesi.php";?>"><button class="success button">Unesi novi</button></a>

  			</div>
  	</div>
  	    <table>
						<thead>
							<tr>
								<th>Ime</th>
								<th>Prezime</th>
								<th>OIB</th>
								
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
								
								<td><a href="<?php echo $putanjaAPP. "privatno/korisnici/delete.php?sifra=".$korisnik->sifra?>">OBRIŠI</a></td>
								<td><a href="<?php echo $putanjaAPP. "privatno/korisnici/uredi.php?sifra=".$korisnik->sifra?>">UREDI</a></td>
								
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table> 	
       
	<?php	include_once '../../predlosci/podnozje.php'; ?>
   <?php	include_once '../../predlosci/skripte.php'; ?>
  </body>
</html>

